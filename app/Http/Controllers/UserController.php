<?php

namespace App\Http\Controllers;

use stdClass;

class UserController
{
    function getUser(): stdClass
    {
        $user = [
            'name' => 'Marcio',
            'age' => 32,
            'gender' => 'M'
        ];
        return (object) $user;
    }
}
