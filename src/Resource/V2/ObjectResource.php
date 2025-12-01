<?php

namespace App\Resource\V2;

class ObjectResource
{
    public function __construct(public readonly RoleResource $role)
    {

    }
}
