<?php
/**
 * Created by PhpStorm.
 * User: mrajaona
 * Date: 4/23/2016
 * Time: 1:58 PM
 */

namespace Platform\CoreBundle\Controller;


use Platform\CoreBundle\Entity\Media;
use Platform\CoreBundle\Entity\Tag;
use Platform\CoreBundle\Form\MediaFormType;
use Platform\CoreBundle\Form\TagFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

    public function adminTagAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tagRepository = $em->getRepository('PlatformCoreBundle:Tag');

        $tags = $tagRepository->findAll();

        return $this->render('PlatformCoreBundle:Tag:list.html.twig',
            array(
                'tags' => $tags
            )
        );

    }

    public function adminTagFormAction(Request $request, $tagid)
    {
        $tag = new Tag();

        $tag->setCreateby(1);

        $em = $this->getDoctrine()->getManager();

        if($tagid != 0)
        {
            $tag = $em->getRepository('PlatformCoreBundle:Tag')->find($tagid);
            $tag->setUpdatedby(1);
            $tag->setUpdatedon(new \DateTime());
        }

        $form = $this->createForm(new TagFormType(), $tag, array(
            'action' => $this->generateUrl('platform_admin_tag_form'),
            'method' => 'POST'
        ));

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em->persist($tag);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Tag added successfully.');

            return $this->redirectToRoute('platform_admin_tag');
        }

        return $this->render(
            'PlatformCoreBundle:Tag:form.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    public function adminTagDeleteAction(Request $request, $tagid)
    {
        $em = $this->getDoctrine()->getManager();

        $currentTag = $em->getRepository('PlatformCoreBundle:Tag')->find($tagid);

        if(!$currentTag){
            return $this->createNotFoundException("Unable to find the tag");
        }

        $em->remove($currentTag);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Tag removed successfully.');

        return $this->redirectToRoute('platform_admin_tag');
    }

    public function adminMediaAction()
    {
        $em = $this->getDoctrine()->getManager();

        $mediaRepository = $em->getRepository('PlatformCoreBundle:Media');

        $medias = $mediaRepository->findAll();

        return $this->render('PlatformCoreBundle:Media:list.html.twig',
            array(
                'medias' => $medias
            )
        );

    }

    public function adminMediaFormAction(Request $request, $mediaid)
    {
        $media = new Media();

        $media->setCreateby(1);

        $em = $this->getDoctrine()->getManager();

        if($mediaid != 0)
        {
            $media = $em->getRepository('PlatformCoreBundle:Media')->find($mediaid);
            $media->setUpdatedby(1);
            $media->setUpdatedon(new \DateTime());
        }

        $form = $this->createForm(new MediaFormType(), $media, array(
            'action' => $this->generateUrl('platform_admin_media_form'),
            'method' => 'POST'
        ));

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em->persist($media);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Media added successfully.');

            return $this->redirectToRoute('platform_admin_media');
        }

        return $this->render(
            'PlatformCoreBundle:Media:form.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    public function adminMediaDeleteAction(Request $request, $mediaid)
    {
        $em = $this->getDoctrine()->getManager();

        $currentMedia = $em->getRepository('PlatformCoreBundle:Media')->find($mediaid);

        if(!$currentMedia){
            return $this->createNotFoundException("Unable to find the Media");
        }

        $em->remove($currentMedia);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Media removed successfully.');

        return $this->redirectToRoute('platform_admin_media');
    }

}