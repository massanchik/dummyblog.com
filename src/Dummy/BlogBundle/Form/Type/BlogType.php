<?php

namespace Dummy\BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'text', array( 'label' => 'Заголовок' ));
        $builder->add('blog', 'textarea', array( 'label' => 'Текст' ));
        $builder->add('category', 'entity', array(
            'class'    => 'DummyBlogBundle:Category',
            'property' => 'name',
            'label'    => 'Категория',
            'query_builder' => function($repository) { return $repository->createQueryBuilder('c')->orderBy('c.id', 'ASC'); },
            'invalid_message'  => 'Ошибка в выборе категории'
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'title' => '',
                'blog' => '',
                'category' => 0
            ))
            ->setRequired(array(
                'title',
                'blog',
                'category'
            ))
        ;
    }

    public function getName()
    {
        return 'blog';
    }
}