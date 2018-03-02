<?php
/**
 * Created by PhpStorm.
 * User: formation
 * Date: 02/03/2018
 * Time: 10:26
*/

namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends Controller
{
    /**
     * @Route("/",name="homepage")
     * @return Response
     */
            public function indexAction(LoggerInterface $logger){
            // Test service de Log Monolog //
                $logger->info("Je suis passé par là",[self::class]);

                //return new Response("Holà");
                return $this->render("home/index.html.twig");
            }
}