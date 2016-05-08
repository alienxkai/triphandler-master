<?php
/**
 * Created by PhpStorm.
 * User: andrianarisoa
 * Date: 30/04/16
 * Time: 19:40
 */

namespace Platform\CoreBundle\Controller;

use Platform\CoreBundle\Controller\Controller;
use Platform\CoreBundle\Entity\User;
use Platform\CoreBundle\Form\UserFormType;
use Symfony\Component\HttpFoundation\Request;

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

    public function addUserFormAction(Request $request){
        $currentUser = new User();

        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new UserFormType(), $currentUser, array(
            'action' => $this->generateUrl('platform_user_insertpage'),
            'method' => 'POST'
        ));

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em->persist($currentUser);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'User added successfully.');

            return $this->redirectToRoute('platform_admin_user');
        }

        return $this->render(
            'PlatformCoreBundle:User:add.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    public function updateUserFormAction(Request $request, $userid){
        $em = $this->getDoctrine()->getManager();

        $currentUser = $em->getRepository('PlatformCoreBundle:User')->find($userid);
        
        if(!$currentUser){
            return $this->createNotFoundException("Unable to find the user");
        }

        $form = $this->createForm(new UserFormType(), $currentUser, array(
            'action' => $this->generateUrl('platform_user_updatepage', array('userid' => $currentUser->getUserId())),
            'method' => 'POST'
        ));

        $form->handleRequest($request);

        if($form->isValid()){
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'User updated successfully.');

            return $this->redirectToRoute('platform_admin_user');
        }

        return $this->render(
            'PlatformCoreBundle:User:add.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    public function deleteUserAction(Request $request, $userid)
    {
        $em = $this->getDoctrine()->getManager();

        $currentUser = $em->getRepository('PlatformCoreBundle:User')->find($userid);

        if(!$currentUser){
            return $this->createNotFoundException("Unable to find the user");
        }

        $em->remove($currentUser);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'User removed successfully.');

        return $this->redirectToRoute('platform_admin_user');
    }
}