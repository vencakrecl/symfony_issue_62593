<?php

namespace App\Controller;

use App\Entity\Query2;
use App\Entity\Role;
use App\Resource\V2\ObjectResource;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\ObjectMapper\ObjectMapperInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

#[Route('/object-2')]
class Object2Controller
{
    public function __construct(private readonly ObjectMapperInterface $mapper, private readonly NormalizerInterface $normalizer)
    {
    }

    public function __invoke(): JsonResponse {

        $query = new Query2(new Role(2));

        return new JsonResponse($this->normalizer->normalize($this->mapper->map($query, ObjectResource::class)));
    }
}
