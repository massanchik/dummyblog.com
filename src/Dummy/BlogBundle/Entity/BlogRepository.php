<?php

namespace Dummy\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;

class BlogRepository extends EntityRepository
{
    public function findAllOrderedByDate()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT b FROM DummyBlogBundle:Blog b ORDER BY b.created ASC')
            ->getResult();
    }

    public function findAllInCategory($id)
    {
        return $this->getEntityManager()
            ->createQuery('SELECT b FROM DummyBlogBundle:Blog b WHERE b.category=:id ORDER BY b.created ASC')
            ->setParameter('id', $id)
            ->getResult();
    }
}