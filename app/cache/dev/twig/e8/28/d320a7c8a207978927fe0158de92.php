<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_e828d320a7c8a207978927fe0158de92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World")), "html", null, true);
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World")), "html", null, true);
        echo "\">Access the secured area</a> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_login"), "html", null, true);
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 39,  65 => 23,  53 => 11,  23 => 1,  187 => 76,  129 => 45,  77 => 27,  99 => 29,  86 => 39,  183 => 75,  169 => 66,  158 => 48,  148 => 40,  90 => 47,  110 => 35,  97 => 45,  56 => 11,  49 => 10,  179 => 69,  175 => 71,  167 => 64,  164 => 64,  134 => 45,  113 => 66,  82 => 37,  69 => 16,  40 => 6,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 35,  38 => 6,  144 => 36,  141 => 35,  135 => 48,  126 => 45,  109 => 5,  103 => 58,  67 => 17,  61 => 22,  47 => 8,  105 => 60,  93 => 28,  76 => 24,  72 => 14,  68 => 24,  27 => 4,  91 => 31,  84 => 28,  94 => 44,  88 => 41,  79 => 17,  59 => 13,  21 => 2,  44 => 12,  31 => 3,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 74,  172 => 70,  159 => 61,  154 => 59,  147 => 51,  132 => 48,  127 => 13,  121 => 30,  118 => 29,  114 => 42,  104 => 36,  100 => 27,  78 => 22,  75 => 18,  71 => 19,  58 => 21,  34 => 4,  26 => 9,  24 => 6,  25 => 3,  19 => 1,  70 => 9,  63 => 17,  46 => 8,  22 => 1,  163 => 59,  155 => 47,  152 => 49,  149 => 48,  145 => 50,  139 => 49,  131 => 51,  123 => 33,  120 => 40,  115 => 28,  106 => 33,  101 => 32,  96 => 30,  83 => 42,  80 => 28,  74 => 23,  66 => 15,  55 => 11,  52 => 10,  50 => 8,  43 => 7,  41 => 10,  37 => 5,  35 => 5,  32 => 3,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 59,  162 => 63,  157 => 60,  153 => 54,  151 => 41,  143 => 40,  138 => 51,  136 => 50,  133 => 31,  130 => 30,  122 => 43,  119 => 39,  116 => 35,  111 => 37,  108 => 37,  102 => 47,  98 => 31,  95 => 34,  92 => 43,  89 => 26,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 15,  57 => 12,  54 => 6,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 6,  30 => 3,);
    }
}
