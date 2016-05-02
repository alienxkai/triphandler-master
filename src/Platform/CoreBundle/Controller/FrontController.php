<?php
/**
 * Created by PhpStorm.
 * User: mrajaona
 * Date: 4/23/2016
 * Time: 5:54 PM
 */

namespace Platform\CoreBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{

    public function indexAction()
    {

        return $this->render('PlatformCoreBundle:Default:home.html.twig');
    }

}