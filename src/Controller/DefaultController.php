<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
	public function index(): Response
	{
		return $this->render('base.html.twig');
	}



	public function locataire(): Response
	{
		return $this->render('locataire/locataire.html.twig');
	}

	public function modifLocataire(): Response
	{
		return $this->render('locataire/modifLocataire.html.twig');
	}

	public function addLocataire(): Response
	{
		return $this->render('locataire/addLocataire.html.twig');
	}



	public function mandataire(): Response
	{
		return $this->render('mandataire/mandataire.html.twig');
	}

	public function modifMandataire(): Response
	{
		return $this->render('mandataire/modifMandataire.html.twig');
	}
	
	public function addMandataire(): Response
	{
		return $this->render('mandataire/addMandataire.html.twig');
	}
}