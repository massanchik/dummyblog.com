<?php

/* DummyBlogBundle:Blog:index.html.twig */
class __TwigTemplate_96ca1d7d261795de46e72ab1a5bf02af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DummyBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DummyBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Главная страница
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <section id=\"homemain\">

        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 11
            echo "            <article class=\"blog\">
                <header>
                    <h2><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_blog_show", array("id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title"), "html", null, true);
            echo "</a></h2>
                </header>

                <div>
                    <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array(0 => 512), "method"), "html", null, true);
            echo "...</p>
                </div>

                <footer class=\"meta\">
                    <p class=\"snippet\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_blog_show", array("id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"))), "html", null, true);
            echo "\">Читать полностью...</a></p>
                    <p>Опубликовано <span class=\"highlight\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "author"), "html", null, true);
            echo "</span> в ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created"), "h:i d.m.Y"), "html", null, true);
            echo "</p>

                </footer>
            </article>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "            <h1 id=\"header1\">В данной категории записей не найдено.</h1>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "
    </section>
";
    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        // line 34
        echo "    Footer
";
    }

    public function getTemplateName()
    {
        return "DummyBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  99 => 33,  93 => 29,  86 => 27,  74 => 22,  70 => 21,  63 => 17,  54 => 13,  50 => 11,  45 => 10,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
