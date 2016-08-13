<?php

namespace Platform\CustomerBundle\Controller;


use Platform\CustomerBundle\Entity\Offer;
use Platform\CustomerBundle\Form\OfferFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApplianceController extends Controller
{

    public function adminApplianceAction()
    {

        $em = $this->getDoctrine()->getManager();

        $clientRepository = $em->getRepository('PlatformCustomerBundle:Offer');

        $offers = $clientRepository->findAll();

        return $this->render('PlatformCustomerBundle:admin/Offer:list.html.twig',
            array(
                'offers' => $offers
            )
        );
    }

    public function adminFormAction(Request $request, $offerId)
    {
        $client = new Offer();
        $client->setCreatedby(1);

        $em = $this->getDoctrine()->getManager();

        if($offerId != 0)
        {
            $client = $em->getRepository('PlatformCustomerBundle:Offer')->find($offerId);
        }

        $form = $this->createForm(new OfferFormType(), $client, array(
            'action' => $this->generateUrl('platform_customer_admin_offer_form', array('offerId' => $offerId)),
            'method' => 'POST'
        ));

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($client);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Offer added successfully.');

            return $this->redirectToRoute('platform_customer_admin_offer');
        }

        return $this->render(
            'PlatformCustomerBundle:admin/Offer:form.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    public function adminDeleteAction(Request $request, $offerId)
    {
        $em = $this->getDoctrine()->getManager();

        $currentOffer = $em->getRepository('PlatformEditorialBundle:Offer')->find($offerId);

        if(!$currentOffer){
            return $this->createNotFoundException("Unable to find the Offer");
        }

        $em->remove($currentOffer);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Offer removed successfully.');

        return $this->redirectToRoute('platform_customer_admin_offer');
    }

}