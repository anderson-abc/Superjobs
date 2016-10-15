<?php

namespace Superjobs\HomeBundle\Service\Twig

/**
 * Description of TwigExtension
 *
 * @author ubuntu
 */
class TwigExtension extends \Twig_Extension 
{

    //put your code here

    public function getFilters() {
        return array(
            'getRole' => new \Twig_Filter_Method($this, 'getRole'),
        );
    }

    public function getName() {
        return 'twig_extension';
    }

//function to get Roles
    public function getRole($user) {
        $userRoles = $user->getRoles();

        return $userRoles;
    }

}
