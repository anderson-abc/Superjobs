<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller {

    function searchEngineAction($pattern, Request $request) {
        if($pattern=="all")$pattern="";
        $Jobs = $this->get("superjobs_search_engine")->searchExpress($pattern);
        
        return $this->render('SuperjobsHomeBundle:SearchEngine:searchResults.html.twig', 
                array(
                    'Jobs' => $Jobs
                ));
    }
}
