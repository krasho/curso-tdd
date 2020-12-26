<?php
namespace Krasho;

class AccessHandler
{
    public static function check($role)
    {
        return 'admin' === $role;
    }
}