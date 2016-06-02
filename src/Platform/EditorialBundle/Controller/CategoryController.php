<?php
/**
 * Created by PhpStorm.
 * User: mrajaona
 * Date: 5/17/2016
 * Time: 6:44 AM
 */

namespace Platform\EditorialBundle\Controller;


use Platform\EditorialBundle\Entity\Article;
use Platform\EditorialBundle\Entity\Category;
use Platform\EditorialBundle\Form\ArticleFormType;
use Platform\EditorialBundle\Form\CategoryFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

class CategoryController extends Controller
{

    public function adminIndexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $categoryRepository = $em->getRepository('PlatformEditorialBundle:Category');

        $categories = $categoryRepository->findAll();

        return $this->render('PlatformEditorialBundle:admin/Category:list.html.twig',
            array(
                'categories' => $categories
            )
        );
    }

    public function adminFormAction(Request $request, $categoryId)
    {
        $category = new Category();
        $category->setStatus('o');

        $em = $this->getDoctrine()->getManager();

        if($categoryId != 0)
        {
            $category = $em->getRepository('PlatformEditorialBundle:Category')->find($categoryId);
        }

        $form = $this->createForm(new CategoryFormType(), $category, array(
            'action' => $this->generateUrl('platform_editorial_category_form_admin', array('categoryId' => $categoryId)),
            'method' => 'POST'
        ));

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($category);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Category added successfully.');

            return $this->redirectToRoute('platform_editorial_category_admin');
        }

        return $this->render(
            'PlatformEditorialBundle:admin/Category:form.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    public function adminDeleteAction(Request $request, $categoryId)
    {
        $em = $this->getDoctrine()->getManager();

        $currentCategory= $em->getRepository('PlatformEditorialBundle:Category')->find($categoryId);

        if(!$currentCategory){
            return $this->createNotFoundException("Unable to find the Category");
        }

        $em->remove($currentCategory);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Category removed successfully.');

        return $this->redirectToRoute('platform_editorial_category_admin');
    }

}