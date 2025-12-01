<?php

namespace App\Resource\V1;

class ObjectResource
{
    public function __construct(public readonly RoleResource $role)
    {

    }
}
