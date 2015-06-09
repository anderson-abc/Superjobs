<?php

namespace Superjobs\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SuperjobsUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
