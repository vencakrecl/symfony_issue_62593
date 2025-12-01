<?php

namespace App\Entity;

use App\Resource\V1\RoleResource as RoleResourceV1;
use App\Resource\V2\RoleResource as RoleResourceV2;
use Symfony\Component\ObjectMapper\Attribute\Map;

#[Map(target: RoleResourceV2::class)]
#[Map(target: RoleResourceV1::class)]
class Role
{
    public function __construct(public readonly int $id)
    {

    }
}
