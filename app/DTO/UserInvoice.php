<?php

declare(strict_types=1);

namespace App\DTO;

use App\Validators\NumberBetween;
use Spatie\DataTransferObject\DataTransferObject;

class UserInvoice extends DataTransferObject
{
    public int $id;

    #[NumberBetween(1, 100)]
    public int $amount;
}
