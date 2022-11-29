<?php

namespace Domain\User\Actions;

use Domain\User\Dtos\UpdateUserDto;
use Domain\User\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateUserAction
{
    /**
     * Update User
     *
     * @param User $user
     * @param UpdateUserDto $updateUserDto
     * @return User
     */
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
