<?php
// src/Appbundle/Controller/LuckyMaxController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LuckyMaxController {
	/**
	 * @Route("/lucky/maxnumber/{max}")
	 */
	public function maxNumberAction($max) {
		$number = mt_rand(0, $max);

		return new Response(
			'<html><body>Lucky Number: '.$number.'</body></html>'
		);
	}
}