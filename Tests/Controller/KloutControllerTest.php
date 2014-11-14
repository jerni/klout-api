<?php

namespace Klout\ApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{

	//with return
    public function testIndex()
    {
        $client = static::createClient();

        $container = $client->getContainer();
		
		$klout = $container->get('klout_api.service');
		$klout->user = '118112799596034826468';
		$kloutid = $klout->getKloutID();
		if($kloutid){
			$KloutScore = ceil($klout->KloutScore($kloutid));
			$this->assertNotNull($KloutScore);
		}
    }
	
	//no return
	public function testIndex2()
    {
        $client = static::createClient();

        $container = $client->getContainer();
		
		$klout = $container->get('klout_api.service');
		$klout->user = '1181127995960348264682';
		$kloutid = $klout->getKloutID();
		$this->assertFalse($kloutid);
    }
}
