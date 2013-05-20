<?php

/* DummyBlogBundle::layout.html.twig */
class __TwigTemplate_cb575b4d73914ef8d3684d507933c8cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::main.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
            'categories' => array($this, 'block_categories'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dummyblog/css/dummy.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_navigation($context, array $blocks = array())
    {
        // line 9
        echo "    <ul>
        <li class=\"current\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_mainpage"), "html", null, true);
        echo "\">Главная</a></li>
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_add"), "html", null, true);
        echo "\">Добавить запись</a></li>
        <li>
        ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 14
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Выйти</a>
        ";
        } else {
            // line 16
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Войти</a>
        ";
        }
        // line 18
        echo "        </li>
    </ul>
";
    }

    // line 22
    public function block_sidebar($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"sb-block categories-block\">
        <h2>Категории</h2>
        <ul>
            ";
        // line 26
        $this->displayBlock('categories', $context, $blocks);
        // line 31
        echo "        </ul>
    </div>
";
    }

    // line 26
    public function block_categories($context, array $blocks = array())
    {
        // line 27
        echo "
                ";
        // line 28
        echo $this->env->getExtension('actions')->renderAction("DummyBlogBundle:Blog:getCategories", array(), array());
        // line 29
        echo "
            ";
    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        // line 36
        echo "    Footer
";
    }

    public function getTemplateName()
    {
        return "DummyBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  110 => 35,  105 => 29,  103 => 28,  100 => 27,  97 => 26,  91 => 31,  89 => 26,  81 => 22,  75 => 18,  69 => 16,  63 => 14,  61 => 13,  56 => 11,  52 => 10,  46 => 8,  40 => 5,  35 => 4,  32 => 3,  94 => 32,  88 => 29,  84 => 23,  80 => 26,  76 => 24,  74 => 23,  68 => 19,  65 => 18,  60 => 15,  53 => 11,  49 => 9,  45 => 9,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
