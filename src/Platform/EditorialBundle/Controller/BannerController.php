<?php
/**
 * Created by PhpStorm.
 * User: mrajaona
 * Date: 5/17/2016
 * Time: 6:44 AM
 */

namespace Platform\EditorialBundle\Controller;


use Platform\EditorialBundle\Entity\Article;
use Platform\EditorialBundle\Entity\Banner;
use Platform\EditorialBundle\Entity\Category;
use Platform\EditorialBundle\Form\ArticleFormType;
use Platform\EditorialBundle\Form\BannerFormType;
use Platform\EditorialBundle\Form\CategoryFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

class BannerController extends Controller
{

    public function adminIndexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $bannerRepository = $em->getRepository('PlatformEditorialBundle:Banner');

        $banners = $bannerRepository->findAll();

        return $this->render('PlatformEditorialBundle:admin/Banner:list.html.twig',
            array(
                'banners' => $banners
            )
        );
    }

    public function adminFormAction(Request $request, $bannerId)
    {
        $banner = new Banner();

        $em = $this->getDoctrine()->getManager();

        if($bannerId != 0)
        {
            $banner = $em->getRepository('PlatformEditorialBundle:Banner')->find($bannerId);
        }

        $form = $this->createForm(new BannerFormType(), $banner, array(
            'action' => $this->generateUrl('platform_editorial_banner_form_admin'),
            'method' => 'POST'
        ));

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($banner);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Banner added successfully.');

            return $this->redirectToRoute('platform_editorial_banner_admin');
        }

        return $this->render(
            'PlatformEditorialBundle:admin/Banner:form.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    public function adminDeleteAction(Request $request, $bannerId)
    {
        $em = $this->getDoctrine()->getManager();

        $currentBanner= $em->getRepository('PlatformEditorialBundle:Banner')->find($bannerId);

        if(!$currentBanner){
            return $this->createNotFoundException("Unable to find the Banner");
        }

        $em->remove($currentBanner);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Banner removed successfully.');

        return $this->redirectToRoute('platform_editorial_banner_admin');
    }

}