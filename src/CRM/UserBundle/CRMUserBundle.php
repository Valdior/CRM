<?php

namespace CRM\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CRMUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
