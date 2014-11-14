klout-api
=========

Symfony2 Bundle Klout API Extension

In controller:

	$kloutScore = false;
	$klout = $this->get('klout_api.service');
	$klout->user = 'id or screen name';
	$kloutid = $klout->getKloutID();
	if($kloutid){
		$kloutScore = ceil($klout->KloutScore($kloutid));
	}

	echo $kloutScore;
	die();