<?php

/* DummyBlogBundle:Blog:blognotfound.html.twig */
class __TwigTemplate_005aa83eadd73b7e41eb17dd2b6a605e extends Twig_Template
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
        echo "    <section id=\"blognotfound\">

        <article class=\"post\">
            <div>
                <h2>Запрашиваемая запись не найдена</h2>
                <span class=\"articlemeta\">Пожалуйста, выберите другую запись.</span>
            </div>
        </article>

    </section>
";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "    Footer
";
    }

    public function getTemplateName()
    {
        return "DummyBlogBundle:Blog:blognotfound.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 70,  169 => 66,  158 => 48,  148 => 40,  90 => 47,  110 => 35,  97 => 26,  56 => 11,  49 => 9,  179 => 69,  175 => 68,  167 => 64,  164 => 63,  134 => 45,  113 => 66,  82 => 24,  69 => 16,  40 => 5,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 35,  38 => 7,  144 => 36,  141 => 35,  135 => 15,  126 => 45,  109 => 41,  103 => 58,  67 => 31,  61 => 13,  47 => 9,  105 => 60,  93 => 28,  76 => 37,  72 => 14,  68 => 12,  27 => 4,  91 => 31,  84 => 23,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 13,  121 => 9,  118 => 44,  114 => 42,  104 => 36,  100 => 27,  78 => 22,  75 => 18,  71 => 19,  58 => 21,  34 => 11,  26 => 1,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 30,  46 => 8,  22 => 2,  163 => 59,  155 => 47,  152 => 49,  149 => 48,  145 => 50,  139 => 55,  131 => 51,  123 => 40,  120 => 40,  115 => 72,  106 => 36,  101 => 32,  96 => 30,  83 => 42,  80 => 24,  74 => 35,  66 => 15,  55 => 20,  52 => 10,  50 => 10,  43 => 13,  41 => 8,  37 => 8,  35 => 4,  32 => 3,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 59,  162 => 58,  157 => 60,  153 => 54,  151 => 41,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 14,  122 => 43,  119 => 39,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 31,  95 => 34,  92 => 49,  89 => 26,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 13,  54 => 10,  51 => 14,  48 => 18,  45 => 17,  42 => 7,  39 => 9,  36 => 9,  33 => 4,  30 => 3,);
    }
}
