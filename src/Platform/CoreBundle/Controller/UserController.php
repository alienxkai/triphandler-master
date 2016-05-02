<?php
/**
 * Created by PhpStorm.
 * User: andrianarisoa
 * Date: 30/04/16
 * Time: 19:40
 */

namespace Platform\CoreBundle\Controller;

use Platform\CoreBundle\Controller\Controller;

class UserController extends CoreController{


    public function __construct(){

    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userRepository = $em->getRepository('PlatformCoreBundle:User');

        $users = $userRepository->findAll();

        return $this->render('PlatformCoreBundle:User:list.html.twig',
            array(
                'users' => $users
            )
        );
    }

    public function addUserFormAction(){
        $andrana = "test";
        return $this->render(
            'PlatformCoreBundle:User:add.html.twig',
            array(
                'andrana' => $andrana
            )
        );
    }

}