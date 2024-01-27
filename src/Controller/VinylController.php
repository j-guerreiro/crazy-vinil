<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


class VinylController extends AbstractController
{
  /**
   * The homepage
   * return @response
   */
  #[Route('/')]
  public function homepage(): Response
  {
    $neoclassicalRock = [
      [
        "artist" => "Yngwie Malmsteen",
        "song" => "Black Star"
      ],
      [
        "artist" => "Ritchie Blackmore's Rainbow",
        "song" => "Stargazer"
      ],
      [
        "artist" => "Joe Satriani",
        "song" => "Surfing with the Alien"
      ],
      [
        "artist" => "Steve Vai",
        "song" => "For the Love of God"
      ],
      [
        "artist" => "Jason Becker",
        "song" => "Altitudes"
      ],
      [
        "artist" => "Tony MacAlpine",
        "song" => "The Taker"
      ],
      [
        "artist" => "Marty Friedman",
        "song" => "Thunder March"
      ],
      [
        "artist" => "Michael Romeo",
        "song" => "The Dark Chapter"
      ],
      [
        "artist" => "Buckethead",
        "song" => "Jordan"
      ],
      [
        "artist" => "Paul Gilbert",
        "song" => "Technical Difficulties"
      ],
      [
        "artist" => "John Petrucci",
        "song" => "Glasgow Kiss"
      ],
      [
        "artist" => "Neo-Classical Orchestra",
        "song" => "The Rising"
      ],
      [
        "artist" => "Vinnie Moore",
        "song" => "Lifeforce"
      ],
      [
        "artist" => "Chris Impellitteri",
        "song" => "17th Century Chicken Pickin'"
      ],
      [
        "artist" => "Uli Jon Roth",
        "song" => "Sails of Charon"
      ],
    ];

    return $this->render(
      'vinyl/homepage.html.twig',
      [
        'title' => 'Music for the hunger ears',
        'tracks' => $neoclassicalRock
      ]
    );
  }
  /**
   * return @response
   */
  #[Route('/browse/{slug}')]
  public function browse(string $slug = null): Response
  {
    if ($slug) {
      $title = 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true);
    } else {
      $title = 'All genres!';
    }
    return new Response($title);
  }
}
