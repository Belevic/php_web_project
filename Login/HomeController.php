<?php

namespace App\HomeController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function home()
    {
        return $this->render('index.html.twig');
    }
}
