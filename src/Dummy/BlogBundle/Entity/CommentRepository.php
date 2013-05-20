<?php

namespace Dummy\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;

class CommentRepository extends EntityRepository
{
    public function findAllOrderedByDate($id)
    {
        return $this->getEntityManager()
            ->createQuery('SELECT c FROM DummyBlogBundle:Comment c WHERE c.blog=:id ORDER BY c.created ASC')
            ->setParameter('id', $id)
            ->getResult();
    }
}
