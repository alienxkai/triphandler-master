<?php
/**
 * Created by PhpStorm.
 * User: mrajaona
 * Date: 6/2/2016
 * Time: 7:15 PM
 */

namespace Platform\CustomerBundle\Controller;


use Platform\CustomerBundle\Entity\Client;
use Platform\CustomerBundle\Form\ClientFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CustomerController extends Controller
{

    public function adminClientAction()
    {

        $em = $this->getDoctrine()->getManager();

        $clientRepository = $em->getRepository('PlatformCustomerBundle:Client');

        $clients = $clientRepository->findAll();

        return $this->render('PlatformCustomerBundle:admin/Customer:list.html.twig',
            array(
                'clients' => $clients
            )
        );
    }

    public function adminFormAction(Request $request, $clientId)
    {
        $client = new Client();

        $em = $this->getDoctrine()->getManager();

        if($clientId != 0)
        {
            $client = $em->getRepository('PlatformCustomerBundle:Client')->find($clientId);
        }

        $form = $this->createForm(new ClientFormType(), $client, array(
            'action' => $this->generateUrl('platform_customer_admin_client_form', array('clientId' => $clientId)),
            'method' => 'POST'
        ));

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($client);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Client added successfully.');

            return $this->redirectToRoute('platform_customer_admin_client');
        }

        return $this->render(
            'PlatformCustomerBundle:admin/Customer:form.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    public function adminDeleteAction(Request $request, $clientId)
    {
        $em = $this->getDoctrine()->getManager();

        $currentClient = $em->getRepository('PlatformEditorialBundle:Category')->find($clientId);

        if(!$currentClient){
            return $this->createNotFoundException("Unable to find the Category");
        }

        $em->remove($currentClient);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Client removed successfully.');

        return $this->redirectToRoute('platform_customer_admin_client');
    }

}