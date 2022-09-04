<?php

declare(strict_types=1);

namespace App\DTO;

use Spatie\DataTransferObject\Attributes\MapFrom;
use Spatie\DataTransferObject\DataTransferObject;

class UserRoleDTO extends DataTransferObject
{
    #[MapFrom('name')]
    public string $name;

    #[MapFrom('user.id')]
    public string $user_id;
}
