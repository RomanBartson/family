<?php
/**
 * Created by PhpStorm.
 * User: roman2
 * Date: 31.07.17
 * Time: 13:22
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ArticleType;

/**
 * Class ArticleBundle
 * @package AppArticleBundle\Controller
 * @Route("articles")
 */
class ArticleController extends Controller
{

    /**
     * @Route("/", name="article_main")
     */
    public function indexAction(Request $request)
    {

        $aritcleRepository = $this->getDoctrine()->getRepository('AppBundle:Article');

        // replace this example code with whatever you need
        return $this->render('default/articles.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'articles' => $aritcleRepository->findAll()
        ));
    }

    /**
     * @Route("/{id}/edit", name="article_edit")
     */
    public function editAction(Request $request, $id)
    {

        $aritcleRepository = $this->getDoctrine()->getRepository('AppBundle:Article');
        $article = $aritcleRepository->find($id);
        $article->setChanged(new \DateTime());
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();
            return $this->redirectToRoute('article_main');
        }

        return $this->render('default/article/edit.html.twig', array(
            'form' => $form->createView(),
            'id' => $article->getId()
        ));
    }

    /**
     * @Route("/{id}", name="article_view")
     */
    public function getAction($id)
    {

        $aritcleRepository = $this->getDoctrine()->getRepository('AppBundle:Article');


        // replace this example code with whatever you need
        return $this->render('default/article/view.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'article' => $aritcleRepository->find($id)
        ));
    }

}