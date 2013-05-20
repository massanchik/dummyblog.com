<?php

/* DummyBlogBundle:Blog:add.html.twig */
class __TwigTemplate_9740a91d31aca1b5c560923ee85c86d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DummyBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "    Добавление новой записи
";
    }

    // line 7
    public function block_navigation($context, array $blocks = array())
    {
        // line 8
        echo "    <ul>
        <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_mainpage"), "html", null, true);
        echo "\">Главная</a></li>
        <li class=\"current\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_add"), "html", null, true);
        echo "\">Добавить запись</a></li>
        <li>
            ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Выйти</a>
            ";
        } else {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Войти</a>
            ";
        }
        // line 17
        echo "        </li>
    </ul>
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "    <section id=\"addblog\">

        <div id=\"message\">";
        // line 24
        if (array_key_exists("message", $context)) {
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        }
        echo "</div>

        <header>
            <h1>Добавить новую запись</h1>
            <div class=\"error_wrapper\">
                <div class=\"error\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
        echo "</div>
                <div class=\"error\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "blog"), 'errors');
        echo "</div>
                <div class=\"error\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'errors');
        echo "</div>
            </div>
        </header>
        <article>
            <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_add"), "html", null, true);
        echo "\" id=\"addForm\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                <div>
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label');
        echo "
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
                </div>

                <div>
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "blog"), 'label');
        echo "
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "blog"), 'widget');
        echo "
                </div>

                <div>
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'label');
        echo "
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'widget');
        echo "
                </div>

                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                <div id=\"lower\"><input type=\"submit\" id=\"_submit\" value=\"Опубликовать\" /></div>

            </form>
        </article>

    </section>
";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "    Footer
";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dummyblog/js/script.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function() {
        \$(\"#addForm\").submit(function(){
            var text = trimAll(\$('#blog_title').val());
            if (text === '' || text.length < 2)
            {
                alert('Заголовок должен состоять по крайней мере из 2 символов.');
                return false;
            }
            text = trimAll(\$('#blog_blog').val());
            if (text === '' || text.length < 200)
            {
                alert('Текст должен состоять по крайней мере из 200 символов.');
                return false;
            }

            sendForm('#addForm', '#contents', '.error_wrapper');
            return false;
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "DummyBlogBundle:Blog:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 69,  175 => 68,  167 => 64,  164 => 63,  134 => 45,  113 => 36,  82 => 24,  69 => 17,  40 => 7,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 35,  38 => 6,  144 => 53,  141 => 49,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 15,  61 => 13,  47 => 9,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 12,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 31,  78 => 22,  75 => 21,  71 => 19,  58 => 9,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 15,  46 => 9,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 50,  139 => 55,  131 => 51,  123 => 40,  120 => 40,  115 => 39,  106 => 36,  101 => 32,  96 => 30,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 12,  52 => 15,  50 => 10,  43 => 8,  41 => 7,  37 => 8,  35 => 4,  32 => 3,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 44,  122 => 43,  119 => 39,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 31,  95 => 34,  92 => 29,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 13,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
