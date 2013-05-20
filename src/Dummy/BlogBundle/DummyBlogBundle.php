<?php

namespace Dummy\BlogBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DummyBlogBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
