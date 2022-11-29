<?php

namespace Domain\User\Actions;

use Domain\User\Dtos\StoreUserDto;
use Domain\User\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    /**
     * Create User
     *
     * @param StoreUserDto $storeUserDto
     * @return User
     */
    public function execute(StoreUserDto $storeUserDto): User
    {
        $user = new User();

        $user->name = $storeUserDto->name;
        $user->email = $storeUserDto->email;
        $user->password = Hash::make($storeUserDto->password);

        $user->save();

        return $user;
    }
}
