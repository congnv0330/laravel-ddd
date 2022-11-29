<?php

namespace Domain\User\Actions;

use App\Models\User;
use Domain\User\Dtos\StoreUserDto;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
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
