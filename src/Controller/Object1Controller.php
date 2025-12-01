<?php

namespace App\Controller;

use App\Entity\Query1;
use App\Entity\Role;
use App\Resource\V1\ObjectResource;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\ObjectMapper\ObjectMapperInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

#[Route('/object-1')]
class Object1Controller
{
    public function __construct(private readonly ObjectMapperInterface $mapper, private readonly NormalizerInterface $normalizer)
    {
    }

    public function __invoke(): JsonResponse {

        $query = new Query1(new Role(1));

        return new JsonResponse($this->normalizer->normalize($this->mapper->map($query, ObjectResource::class)));
    }
}
