<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Entity\Users;
use App\Entity\Residence;
use App\Repository\ResidenceRepository;
use Symfony\Component\Security\Core\Role\Role;

class DefaultController extends AbstractController
{
	public function index(): Response
	{
		$user = $this->getUser();

		return $this->render('base.html.twig');
	}


#
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


	public function biens(ResidenceRepository $residenceRepository): Response
	{
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

		if (in_array("ROLE_OWNER", $this->getUser()->getRoles())) {
            $residences = $residenceRepository->findAll();
        } else if (in_array("ROLE_REPRESENTATIVE", $this->getUser()->getRoles())) {
            $residences = $residenceRepository->findBy(array("representative_id" => $this->getUser()));
        } else {
            return $this->render('base.html.twig');
        }

		return $this->render('biens/biens.html.twig', [
			'residences' => $residences
		]);
	}

	public function detailsBiens(): Response
	{
		$this->denyAccessUnlessGranted('ROLE_REPRESENTATIVE') or ('ROLE_OWNER');

		return $this->render('biens/detailsBiens.html.twig');
	}

	public function addBiens(): Response
	{
		$this->denyAccessUnlessGranted('ROLE_OWNER');

		return $this->render('biens/addBiens.html.twig');
	}
}