<?php

namespace Application\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('ApplicationuserBundle:Default:index.html.twig', array('name' => $name));
    }

    public function _selectStatesAction() {
        $this->em = $this->get('doctrine')->getEntityManager();
        $this->repository = $this->em->getRepository('AppBundle:states');

        $provinceId = $this->get('request')->query->get('data');

        $localities = $this->repository->findByCountryid($provinceId);

        $html = '';
        foreach ($localities as $locality) {
            $html = $html . sprintf("<option value=\"%d\">%s</option>", $locality->getId(), $locality->getStateName());
        }

        return new Response($html);
    }

}
