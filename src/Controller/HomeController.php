<?php
/**
 * Created by PhpStorm.
 * User: formation
 * Date: 02/03/2018
 * Time: 10:26
*/

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends Controller
{
    /**
     * @Route("/",name="homepage")
     * @return Response
     */
            public function indexAction(){

                return new Response("Holà");
            }
}