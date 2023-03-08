<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\component\Routing\Annotation\Route;

class VinylController 
    {
        #[Route('/')]
        public function homepage(): Response
        {
            return new Response('Title: PB and Jams');
        }
        
        #[Route('/browse/{slug}')]
        public function browse(string $slug = null): Response
        {
            if ($slug) {
                $title = 'Genre: '. ucwords(str_replace('-', ' ', $slug));
            } else {
                $title = ' All Genre';
            }
            return new Response($title);
        }

}