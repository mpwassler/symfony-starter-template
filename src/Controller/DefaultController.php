<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class DefaultController extends Controller
{
    public function index(UserPasswordEncoderInterface $encoder)
    {    	
        return $this->render('index/index.html.twig');
    }

    public function admin()
    {
        return $this->render('index/index.html.twig');
    }
}