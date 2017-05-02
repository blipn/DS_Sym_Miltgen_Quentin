<?php

namespace Traveller\TravelAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TravellerTravelAdvisorBundle:Default:index.html.twig');
    }

    public function voyageAction()
    {
        return $this->render('TravellerTravelAdvisorBundle:Default:voyage.html.twig');
    }

    public function adminAction()
    {
        return $this->render('TravellerTravelAdvisorBundle:Default:admin.html.twig');
    }

    public function connexionAction()
    {
        return $this->render('TravellerTravelAdvisorBundle:Default:connexion.html.twig');
    }

//    public function afficherMembreAction($membre)
//    {
//        return $this->render('TravellerTravelAdvisorBundle:Default:afficherMembre.html.twig', array(
//            'membre'      => $membre
//        ));
//    }

    public function adminRedirectAction()
    {
        return $this->redirect('/voyage/visiteur');
    }

    public function voyagePrenomAction($prenom)
    {
        return $this->render('TravellerTravelAdvisorBundle:Default:voyage.html.twig', array(
            'prenom'      => $prenom
        ));
    }
}
