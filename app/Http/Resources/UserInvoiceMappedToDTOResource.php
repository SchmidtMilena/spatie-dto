<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\DTO\UserInvoice;
use Illuminate\Http\Resources\Json\JsonResource;

class UserInvoiceMappedToDTOResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var UserInvoice $invoice */
        $invoice = $this;
        return [
            'id' => $invoice->id,
            'amount' => $invoice->amount,
        ];
    }
}
