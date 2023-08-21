<?php
namespace App\Controller;
use ...

  class HomeController extends AbstractController
{
  #[Route('/')]
  public function number() : Response
  {
    $number = rand(0, 100);
    return $this-> ('base.html.twig', [
                    'number' => $number,
    ])
  }
}
?>