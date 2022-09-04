<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\DTO\UserDTO;
use App\Http\Requests\GetComplicatedUserObjectRequest;
use App\Http\Resources\UserMappedToDTOResource;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class DtoExampleController extends Controller
{
    /**
     * @throws UnknownProperties
     */
    public function mapToDTO(GetComplicatedUserObjectRequest $request): UserMappedToDTOResource
    {
        $dataMappedToDTO = new UserDTO($request->all());

        return new UserMappedToDTOResource($dataMappedToDTO);
    }
}
