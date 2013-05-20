<?php

namespace Dummy\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Dummy\BlogBundle\Entity\Blog;
use Dummy\BlogBundle\Entity\Comment;
use Dummy\BlogBundle\Form\Type\BlogType;
use Dummy\BlogBundle\Form\Type\CommentType;
use Symfony\Component\Security\Core\SecurityContext;

class BlogController extends Controller
{

    public function indexAction()
    {
        $blogs = $this->getDoctrine()
                      ->getRepository('DummyBlogBundle:Blog')
                      ->findAllOrderedByDate();
        return $this->render('DummyBlogBundle:Blog:index.html.twig', array(
            'blogs' => $blogs
        ));
    }

    public function categoryAction($id)
    {
        $blogs = $this->getDoctrine()
            ->getRepository('DummyBlogBundle:Blog')
            ->findAllInCategory($id);
        return $this->render('DummyBlogBundle:Blog:index.html.twig', array(
            'blogs' => $blogs
        ));
    }

    public function showAction($id)
    {
        if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
            throw new AccessDeniedException();
        }

        $blog = $this->getDoctrine()
            ->getRepository('DummyBlogBundle:Blog')
            ->find($id);

        if (!$blog) {
            return $this->render('DummyBlogBundle:Blog:blognotfound.html.twig', array());
        }



        $comment = new Comment();
        $comments = $this->getDoctrine()
            ->getRepository('DummyBlogBundle:Comment')
            ->findAllOrderedByDate($id);
        $form = $this->createForm(new CommentType(), $comment);
        $data = array();

        $request = $this->getRequest();
        if ($request->isMethod('POST')) {

            $form->bind($request);
            $data = $form->getData();

            if ($form->isValid()) {

                $em  = $this->getDoctrine()->getManager();
                $usr = $this->getUser();
                $usr = $usr->getUsername();

                $comment->setComment($data->getComment());
                $comment->setUser($usr);
                $comment->setBlog($request->request->get('blogid'));

                $em->persist($comment);
                $em->flush();

                $message = '<h2>Ваш ответ успешно добавлен.</h2>';

                return $this->render('DummyBlogBundle:Blog:show.html.twig', array(
                    'blog'       => $blog,
                    'form'       => $form->createView(),
                    'message'    => $message,
                    'comments'   => $comments
                ));
            }
        }

        return $this->render('DummyBlogBundle:Blog:show.html.twig', array(
            'blog'       => $blog,
            'form'       => $form->createView(),
            'comments'   => $comments
        ));
    }

    public function addAction(Request $request)
    {
        if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
            throw new AccessDeniedException();
        }

        $blog = new Blog();
        $form = $this->createForm(new BlogType(), $blog);
        $data = array();

        if ($request->isMethod('POST')) {

            $form->bind($request);
            $data = $form->getData();

            if ($form->isValid()) {

                $em  = $this->getDoctrine()->getManager();
                $usr = $this->getUser();
                $usr = $usr->getUsername();

                $blog->setTitle($data->getTitle());
                $blog->setBlog($data->getBlog());
                $blog->setCategory($data->getCategory()->getId());
                $blog->setAuthor($usr);

                $em->persist($blog);
                $em->flush();

                $message = '<h1 id="header1">Ваша запись успешно добавлена.<br><a href="'.$this->generateUrl("DummyBlogBundle_add").'">Добавить ещё одну?</a></h1>';

                return $this->render('DummyBlogBundle:Blog:add.html.twig', array(
                    'form' => $form->createView(),
                    'data' => $data,
                    'message'    => $message
                ));
            }
        }

        return $this->render('DummyBlogBundle:Blog:add.html.twig', array(
            'form' => $form->createView(),
            'data' => $data
        ));
    }

    public function getCategoriesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->createQuery(
            'SELECT c FROM DummyBlogBundle:Category c ORDER BY c.id ASC'
        )->getResult();

        return $this->render('DummyBlogBundle:Blog:category_template.html.twig', array(
            'categories' => $categories
        ));
    }

}