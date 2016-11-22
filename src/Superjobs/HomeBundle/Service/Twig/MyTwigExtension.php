<?php

namespace Superjobs\HomeBundle\Service\Twig;

class MyTwigExtension extends \Twig_Extension {

    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('price', array($this, 'priceFilter')),
            new \Twig_SimpleFilter('arrayDistinct', array($this, 'arrayDistinct')),
            new \Twig_SimpleFilter('completePourcent', array($this, 'completePourcent')),
            new \Twig_SimpleFilter('testtPourcent', array($this, 'testtPourcent')),
        );
    }
    
    public function getName() {
        return 'app_extension';
    }

    public function priceFilter($number, $decimals = 0, $thousandsSep = '.', $decPoint = ',') {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '€' . $price;

        return $price;
    }

    public function arrayDistinct($arrayIN) {
        $arrayOUT = array();
        foreach ($arrayIN as $key => $value) {
            if (!in_array($value, $arrayOUT)) {
                $arrayOUT[] = $value;
            }
        }

        return $arrayOUT;
    }

    public function completePourcent($arrayIN) {
        $somme = count((array) $arrayIN);

        $countNull = 0;
        $countTrue = 0;
        foreach ((array) $arrayIN as $key => $value) {
            if ($value == null) {
                $countNull ++;
                $test[$key] = $value;
            } else {
                $countTrue++;
            }
        }
        $pourcent = ($countNull * 100) / $somme;

        return round($pourcent, 2);
    }

    public function testtPourcent($arrayIN) {

        $somme = count((array) $arrayIN);

        $countNull = 0;
        $countTrue = 0;
        foreach ((array) $arrayIN as $key => $value) {
            if ($value == null) {
                $countNull ++;
                $test[$key] = $value;
            } else {
                $countTrue++;
            }
        }
        $pourcent = ($countNull * 100) / $somme;


        return $test;
    }

}
