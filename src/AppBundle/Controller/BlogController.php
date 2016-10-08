<?php
// src/Appbundle/Controller/BlogController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller {
	/**
	 * @Route("/blog", name="blog_list", requirements={"page": "\d+"})
	 */
	public function listAction($page = 1) {
		//show default blog
	}

	/**
	 * Matches /blog/*
	 *
	 * @Route("blog/{slug}", name="blog_show")
	 */
	public funtion showAction($slug) {
		// $slug equals the dynamic part of the URL
	}
}