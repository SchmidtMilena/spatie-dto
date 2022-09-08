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

    #[MapFrom('address.city.name')]
    public string $city;

    public UserRoleDTO $role;

    #[CastWith(ArrayCaster::class, itemType: UserInvoiceDTO::class)]
    public array $invoices;
}
