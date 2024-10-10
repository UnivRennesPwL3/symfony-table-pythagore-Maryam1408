<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Utils\PythagoreUtility;
use Symfony\Component\Routing\Annotation\Route;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }
    
    #[Route('/pythagore/viewDisplayPythagoreAction', name: 'pythagore_display')]
    public function viewDisplayPythagoreAction(): Response
    {
    
        $pythagoreTableHtml = $this->pythagoreUtility->display();

    
        return $this->render('displayPythagore.html.twig', [
            'pythagoreTable' => $pythagoreTableHtml,
        ]);
    }
}
