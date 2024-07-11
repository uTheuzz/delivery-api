<?php

namespace App\Services;

use App\Exceptions\MultipleUserLoginException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class AuthService
{
    protected $payload;

    protected $internalToken;

    protected $externalToken;

    public function generateTokens(Request $request)
    {
        $user = auth()->user();
        $userAgent = $request->header('User-Agent');
        $user['user_identifier'] = md5("$user->id-$user->email-$userAgent");

        $expiration = Carbon::now()->addHour();

        $this->internalToken = JWTAuth::customClaims(['user' => $user, 'exp' => $expiration->timestamp])->fromUser($user);
        $this->payload = $this->getPayload($this->internalToken);
        $this->externalToken = $this->generateExternalToken($user);

        return $this->storeTokens();
    }

    public function invalidateTokens(Request $request)
    {
        $this->externalToken = $this->getExternalToken($request);

        Cache::forget($this->externalToken);

        return [];
    }

    public function checkTokens(Request $request, $internalToken, $externalToken)
    {
        // $this->payload = $this->getPayload($internalToken['token']);
        // $user = $this->payload->get('user');
        // $userAgent = $request->header('User-Agent');
        // $userId = $user['id'];
        // $userEmail = $user['email'];
        // $oldIdentifier = $user['user_identifier'];
        // $actualIdentifier = md5("$userId-$userEmail-$userAgent");

        // if ($actualIdentifier != $oldIdentifier) {
        //     return throw new MultipleUserLoginException('Your user is logged in on another device!', $externalToken);
        // }

        return;
    }

    protected function generateExternalToken($user)
    {
        $userId = $user->id;
        $userEmail = $user->email;

        return md5("$userId-$userEmail");
    }

    protected function storeTokens()
    {
        $seconds = (3600) * 2;
        $token = [
            'token' => $this->internalToken,
            'created_at' => Carbon::now('America/Fortaleza')->toDateTimeString(),
            'updated_at' => Carbon::now('America/Fortaleza')->toDateTimeString(),
            'expires_in' => Carbon::now('America/Fortaleza')->addSeconds($seconds)->toDateTimeString(),
        ];

        Cache::put($this->externalToken, $token, $seconds);

        return $this->respondWithToken();
    }

    public function updateTokens($externalToken, $internalToken, $refreshed)
    {
        $createdAt = Carbon::createFromDate($internalToken['created_at'], 'America/Fortaleza');
        $expiresIn = Carbon::createFromDate($internalToken['expires_in'], 'America/Fortaleza');
        $now = Carbon::now('America/Fortaleza');
        $minutesDiff = $now->diffInMinutes($createdAt);
        $hourDiff = $expiresIn->subMinutes($minutesDiff);
        $leftTime = $hourDiff->diffInMinutes($createdAt);

        $token = [
            'token' => $refreshed,
            'created_at' => $internalToken['created_at'],
            'updated_at' => Carbon::now('America/Fortaleza')->toDateTimeString(),
            'expires_in' => $internalToken['expires_in'],
        ];

        $this->payload = $this->getPayload($refreshed);

        Cache::put($externalToken, $token, $leftTime * 60);

        return;
    }

    protected function respondWithToken()
    {
        $user = $this->payload->get('user');

        $result = [
            'access_token' => $this->externalToken,
            // 'user' => $user
        ];

        return $result;
    }

    public function getPayload($internalToken)
    {
        return JWTAuth::setToken($internalToken)->getPayload();
    }

    public function getExternalToken(Request $request)
    {
        return $request->header('X-Token');
    }
}
