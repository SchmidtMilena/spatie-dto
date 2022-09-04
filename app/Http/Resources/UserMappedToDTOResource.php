<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\DTO\UserDTO;
use Illuminate\Http\Resources\Json\JsonResource;

class UserMappedToDTOResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var UserDto $user */
        $user = $this;
        return [
            'name' => $user->name,
            'role' => $user->role,
            'invoices' => UserInvoiceMappedToDTOResource::collection($user->invoices),
            'city' => $user->city,
        ];
    }
}
