<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class DefaultController extends Controller
{
    public function index(UserPasswordEncoderInterface $encoder)
    {
    	// $em = $this->getDoctrine()->getManager();
    	// $user = new \App\Entity\User();
	    // $plainPassword = 'mitchel';
	    // $encoded = $encoder->encodePassword($user, $plainPassword);

	    // $user->setPassword('mitchel');
	    // $user->setEmail('mitchel@primaxstudio.com');
	    
	    // $em->persist($user);
	    // // actually executes the queries (i.e. the INSERT query)
	    // $em->flush();
        return $this->render('index/index.html.twig');
    }

    public function admin()
    {
        return $this->render('index/index.html.twig');
    }
}