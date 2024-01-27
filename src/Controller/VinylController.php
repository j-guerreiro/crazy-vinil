<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


class VinylController
{
  /**
   * return @response
   */
  #[Route('/')]
  public function homepage(): Response
  {
    return new Response('Esposinha fedidinha!');
  }
  /**
   * return @response
   */
  #[Route('/browse/{slug}')]
  public function browse(string $slug = null): Response
  {
    if($slug) {
      $title = 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true);
    } else {
      $title = 'All genres!';
    }
    return new Response($title);
  }
}
