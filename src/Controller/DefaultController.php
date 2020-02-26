<?php

namespace App\Controller;

use App\Entity\Admin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(ContainerInterface $container)
    {
        $userManager = $container->get('fos_user.user_manager');
        $em = $this->getDoctrine()->getManager();
        $admin = new Admin();
        $admin->setEmail('admin@gmail.com');
        $admin->setPlainPassword('admin');
        $admin->setEnabled(true);
        $admin->setUsername('admin');
        $em->persist($admin);
        $em->flush();
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
