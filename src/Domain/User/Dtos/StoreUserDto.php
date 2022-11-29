<?php

namespace Domain\User\Dtos;

use Domain\User\Requests\StoreUserRequest;

class StoreUserDto
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password = null,
    ) {
    }

    public static function fromRequest(StoreUserRequest $request): self
    {
        /** @var string $name */
        $name = $request->post('name');

        /** @var string $email */
        $email = $request->post('email');

        /** @var string $password */
        $password = $request->post('password');

        return new self($name, $email, $password);
    }
}
