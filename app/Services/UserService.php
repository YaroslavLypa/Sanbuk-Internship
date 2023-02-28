<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function createRecord(array $data)
    {
        $user = User::create($data);
//        if ($user) {
//            UserCreated::dispatch($user);
//        }

        return $user->createToken(mt_rand(0, 100))->plainTextToken;
//        return User::create($data);
    }

    public function phoneVerification($status, $phone)
    {
        if ($status === TwilioService::VERIFICATION_STATUS_APPROVED) {
            /** @var User $user */
            $user = User::where('phone', $phone)->firstOrFail();
            return $user->createToken(mt_rand(0, 100))->plainTextToken;
        }

        return false;
    }
}
