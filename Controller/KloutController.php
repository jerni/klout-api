<?php

namespace Klout\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class KloutController extends Controller
{
    public function indexAction()
    {
		$KloutScore = false;
        $klout = $container->get('klout_api.service');
		$klout->user = '118112799596034826468';
		$kloutid = $klout->getKloutID();
		if($kloutid){
			$KloutScore = ceil($klout->KloutScore($kloutid));
		}
		
		echo $KloutScore;
		die();
    }
}
