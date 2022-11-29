<?php

namespace Domain\User\Actions;

use App\Models\User;
use Domain\User\Dtos\StoreUserDto;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    public function execute(StoreUserDto $storeUserDto): User
    {
        return User::create([
            'name' => $storeUserDto->name,
            'email' => $storeUserDto->email,
            'password' => Hash::make($storeUserDto->password),
        ]);
    }
}
