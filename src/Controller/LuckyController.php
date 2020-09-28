<?php
namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Created by PhpStorm.
 * User: dquintana
 * Date: 26/09/2020
 * Time: 10:34
 */

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     * @param MessageGenerator $messageGenerator
     * @return Response
     * @throws \Exception
     */
    public function number(MessageGenerator $messageGenerator)
    {
        $number = random_int(0, 100);
        /** @var MessageGenerator $messageGenerator */
        $message = $messageGenerator->getHappyMessage();

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'message' => $message
        ]);
    }
}