<?php

namespace Domain\User\Actions;

use App\Models\User;
use Domain\User\Dtos\UpdateUserDto;
use Illuminate\Support\Facades\Hash;

class UpdateUserAction
{
    public function execute(User $user, UpdateUserDto $updateUserDto): User
    {
        $user->name = $updateUserDto->name;
        $user->email = $updateUserDto->email;

        if ($updateUserDto->password !== null) {
            $user->password = Hash::make($updateUserDto->password);
        }

        $user->save();

        return $user;
    }
}
