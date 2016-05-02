<?php
/**
 * Created by PhpStorm.
 * User: mrajaona
 * Date: 4/23/2016
 * Time: 5:54 PM
 */

namespace Platform\CoreBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{

    public function indexAction()
    {

        return $this->render('PlatformCoreBundle:Client:index.html.twig');
    }

    public function loginAction()
    {

        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render(
            'PlatformCoreBundle:Client:login-client.html.twig',
            array(
                'last_username' => $authenticationUtils->getLastUsername(),
                'error'         => $authenticationUtils->getLastAuthenticationError(),
            )
        );

    }

}