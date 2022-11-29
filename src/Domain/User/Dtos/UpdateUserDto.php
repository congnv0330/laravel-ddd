<?php

namespace Domain\User\Dtos;

use Domain\User\Requests\UpdateUserRequest;

class UpdateUserDto
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string|null $password = null,
    ) {
    }

    public static function fromRequest(UpdateUserRequest $request): self
    {
        /** @var string $name */
        $name = $request->post('name');

        /** @var string $email */
        $email = $request->post('email');

        /** @var string|null $password */
        $password = $request->post('password');

        return new self($name, $email, $password);
    }
}
