<?php

/* DummyBlogBundle:Blog:category_template.html.twig */
class __TwigTemplate_240f373860f88e3db9f3af7620ec3cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "
    <li><a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "</a></li>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 6
            echo "    <h1>Ошибка при инициализации.</h1>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "DummyBlogBundle:Blog:category_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  27 => 3,  24 => 2,  19 => 1,  187 => 76,  183 => 75,  180 => 74,  175 => 71,  172 => 70,  164 => 64,  162 => 63,  147 => 51,  143 => 50,  139 => 49,  135 => 48,  129 => 45,  123 => 44,  118 => 42,  106 => 33,  99 => 29,  93 => 28,  84 => 24,  80 => 22,  77 => 21,  70 => 18,  67 => 17,  61 => 13,  55 => 11,  49 => 9,  47 => 8,  42 => 6,  38 => 5,  35 => 4,  32 => 3,);
    }
}
