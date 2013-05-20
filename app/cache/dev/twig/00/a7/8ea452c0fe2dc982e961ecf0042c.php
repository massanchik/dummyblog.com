<?php

/* ::main.html.twig */
class __TwigTemplate_00a78ea452c0fe2dc982e961ecf0042c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " - DummyБлог</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dblog/js/vendor/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class=\"chromeframe\">Вы используете <strong>устаревший</strong> браузер. Пожалуйста <a href=\"http://browsehappy.com/\">обновите свой браузер.</p>
<![endif]-->


<div id=\"wrap\">

    <section id=\"left\">
        <header id=\"mainheader\">
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_mainpage"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dblog/images/logo.jpg"), "html", null, true);
        echo "\" width=\"250\" height=\"120\" alt=\"DummyБлог\">
            </a>
        </header>
        <nav id=\"mainnav\">
            ";
        // line 35
        $this->displayBlock('navigation', $context, $blocks);
        // line 37
        echo "        </nav>

        <section id=\"sidebar\">
            ";
        // line 40
        $this->displayBlock('sidebar', $context, $blocks);
        // line 42
        echo "        </section>
    </section>

    <section id=\"right\">
        <section id=\"contents\">
            ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "            <div class=\"clear\"></div>
        </section>
    </section>
    <div class=\"clear\"></div>

</div>
<footer id=\"pagefooter\">

    <div id=\"footerwrap\">
        ";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "        <div class=\"clear\"></div>
    </div>

</footer>


";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Обычный Тайтл";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dblog/css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dblog/css/style.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 35
    public function block_navigation($context, array $blocks = array())
    {
        // line 36
        echo "            ";
    }

    // line 40
    public function block_sidebar($context, array $blocks = array())
    {
        // line 41
        echo "            ";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "            ";
    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        // line 59
        echo "        ";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dblog/js/vendor/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dblog/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dblog/js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 70,  179 => 69,  175 => 68,  172 => 67,  169 => 66,  165 => 59,  162 => 58,  158 => 48,  155 => 47,  151 => 41,  148 => 40,  144 => 36,  141 => 35,  135 => 15,  130 => 14,  127 => 13,  121 => 9,  115 => 72,  92 => 49,  90 => 47,  83 => 42,  67 => 31,  48 => 18,  43 => 13,  36 => 9,  26 => 1,  113 => 66,  110 => 35,  105 => 60,  103 => 58,  100 => 27,  97 => 26,  91 => 31,  89 => 26,  81 => 40,  75 => 18,  69 => 16,  63 => 30,  61 => 13,  56 => 11,  52 => 10,  46 => 8,  40 => 5,  35 => 4,  32 => 3,  94 => 32,  88 => 29,  84 => 23,  80 => 26,  76 => 37,  74 => 35,  68 => 19,  65 => 18,  60 => 15,  53 => 11,  49 => 9,  45 => 17,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
