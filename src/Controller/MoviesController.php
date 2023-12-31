<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        $movies = ['Goodfellas', 'Pulp Fiction', 'Fight Club'];

        return $this->render('index.html.twig', array(
            'movies' => $movies
        ));
    }
}
