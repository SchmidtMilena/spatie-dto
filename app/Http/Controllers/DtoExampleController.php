<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\DTO\UserDTO;
use App\Http\Requests\GetComplicatedUserObjectRequest;
use App\Http\Resources\UserMappedToDTOResource;
use Illuminate\Http\JsonResponse;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;
use Spatie\DataTransferObject\Exceptions\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class DtoExampleController extends Controller
{
    /**
     * @throws UnknownProperties
     */
    public function mapToDTO(GetComplicatedUserObjectRequest $request): UserMappedToDTOResource|JsonResponse
    {
        try {
            $dataMappedToDTO = new UserDTO($request->all());

            return new UserMappedToDTOResource($dataMappedToDTO);
        } catch (ValidationException $exception) {
            return response()->json(['errors' => $exception->validationErrors], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
