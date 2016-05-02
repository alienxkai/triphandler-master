<?php
/**
 * Created by PhpStorm.
 * User: mrajaona
 * Date: 4/23/2016
 * Time: 1:58 PM
 */

namespace Platform\CoreBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{

    public function indexAction()
    {
        return $this->render('PlatformCoreBundle:Security:index.html.twig');
    }

    public function loginAction()
    {

        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render(
            'PlatformCoreBundle:Security:login-bo.html.twig',
            array(
                'last_username' => $authenticationUtils->getLastUsername(),
                'error'         => $authenticationUtils->getLastAuthenticationError(),
            )
        );

    }

}