<?php

namespace Meymard\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Meymard\CoreBundle\Entity\Note;

/**
 * DefaultController
 *
 * @uses Controller
 * @package Meymard\CoreBundle\Controller
 * @author Marc EYMARD <contact@marc-eymard.fr> 
 *
 * @Route("/note")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/add")
     * @Template()
     */
    public function addAction(Request $request)
    {
        $note = new Note();
        $form = $this->createForm('meymard_note', $note);
        $form->add('Add', 'submit');

        $form->handleRequest($request);
        if ($form->isValid()) {
            // TODO Save entity // After manage Note on doctrine
        }

        return [
            'form' => $form->createView()
        ];
    }
}
