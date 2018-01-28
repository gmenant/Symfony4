<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
	/**
	*@Route("/")
	*/
	
	public function homepage()
	{
		return new Response('First Page I made');
	}

	/**
	*@Route("/news/{slug}")
	*/
	
	public function show($slug)
	{

		$comments = [
			'ok, du texte qui est rentré dans la variable commentaire','c\'est vrai','du texte mis à la suite'
		];

		return $this->render('article/show.html.twig', [
			'title' => ucwords(str_replace('-', ' ', $slug)),
			'comments' => $comments,
		]);
	}

}