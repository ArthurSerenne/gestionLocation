<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Entity\Users;

class DefaultController extends AbstractController
{
	public function index(): Response
	{
		$user = $this->getUser();

		return $this->render('base.html.twig');
	}



	public function locataire(): Response
	{
		$this->denyAccessUnlessGranted('ROLE_OWNER');

		return $this->render('locataire/locataire.html.twig');
	}

	public function modifLocataire(): Response
	{
		$this->denyAccessUnlessGranted('ROLE_OWNER');

		return $this->render('locataire/modifLocataire.html.twig');
	}

	public function addLocataire(): Response
	{
		$this->denyAccessUnlessGranted('ROLE_OWNER');

		return $this->render('locataire/addLocataire.html.twig');
	}



	public function mandataire(): Response
	{
		$this->denyAccessUnlessGranted('ROLE_OWNER');

		return $this->render('mandataire/mandataire.html.twig');
	}

	public function modifMandataire(): Response
	{
		$this->denyAccessUnlessGranted('ROLE_OWNER');

		return $this->render('mandataire/modifMandataire.html.twig');
	}
	
	public function addMandataire(): Response
	{
		$this->denyAccessUnlessGranted('ROLE_OWNER');

		return $this->render('mandataire/addMandataire.html.twig');
	}
}