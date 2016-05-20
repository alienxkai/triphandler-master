<?php
/**
 * Created by PhpStorm.
 * User: mrajaona
 * Date: 5/17/2016
 * Time: 6:44 AM
 */

namespace Platform\EditorialBundle\Controller;


use Platform\EditorialBundle\Entity\Article;
use Platform\EditorialBundle\Form\ArticleFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

class ArticleController extends Controller
{

    public function adminIndexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $articleRepository = $em->getRepository('PlatformEditorialBundle:Article');

        $articles = $articleRepository->findAll();

        return $this->render('PlatformEditorialBundle:admin/Article:list.html.twig',
            array(
                'articles' => $articles
            )
        );
    }

    public function adminFormAction(Request $request, $articleId)
    {
        $article = new Article();

        $article->setCreatedBy(1);
        $article->setCreatedOn(new Date());
        $article->setStatus('o');

        $em = $this->getDoctrine()->getManager();

        if($articleId != 0)
        {
            $article = $em->getRepository('PlatformEditorialBundle:Article')->find($articleId);
            $article->setUpdatedOn(new Date());
            $article->setUpdatedBy(1);
        }

        $form = $this->createForm(new ArticleFormType(), $article, array(
            'action' => $this->generateUrl('platform_editorial_article_form_admin'),
            'method' => 'POST'
        ));

        $form->handleRequest($request);

        if ($form->isValid()) {

            $siteRepository = $em->getRepository('PlatformCoreBundle:Site');
            $currentSite = $siteRepository->find(1);

            $article->setSite($currentSite);
            $em->persist($article);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Article added successfully.');

            return $this->redirectToRoute('platform_editorial_article_admin');
        }

        return $this->render(
            'PlatformEditorialBundle:admin/Article:form.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

}