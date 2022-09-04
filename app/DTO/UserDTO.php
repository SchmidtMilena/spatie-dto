<?php

declare(strict_types=1);

namespace App\DTO;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;
use Spatie\DataTransferObject\Casters\ArrayCaster;
use Spatie\DataTransferObject\DataTransferObject;

class UserDTO extends DataTransferObject
{
    public string $name;

    public UserRoleDTO $role;

    #[CastWith(ArrayCaster::class, itemType: UserInvoice::class)]
    public array $invoices;

    #[MapFrom('address.city')]
    public string $city;
}
