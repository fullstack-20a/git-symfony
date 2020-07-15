<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestDev2Controller extends AbstractController
{
    /**
     * @Route("/test/dev2", name="test_dev2")
     */
    public function index()
    {
        // AJOUT DE COMMENTAIRE
        return $this->render('test_dev2/index.html.twig', [
            'controller_name' => 'TestDev2Controller',
        ]);
    }
}
