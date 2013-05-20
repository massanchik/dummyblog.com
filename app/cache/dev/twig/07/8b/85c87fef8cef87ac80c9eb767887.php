<?php

/* DummyBlogBundle:Blog:show.html.twig */
class __TwigTemplate_078b85c87fef8cef87ac80c9eb767887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DummyBlogBundle::layout.html.twig");

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'title' => array($this, 'block_title'),
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
    public function block_navigation($context, array $blocks = array())
    {
        // line 4
        echo "    <ul>
        <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_mainpage"), "html", null, true);
        echo "\">Главная</a></li>
        <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_add"), "html", null, true);
        echo "\">Добавить запись</a></li>
        <li>
            ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Выйти</a>
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Войти</a>
            ";
        }
        // line 13
        echo "        </li>
    </ul>
";
    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title"), "html", null, true);
        echo "
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "    <section id=\"single\">

        <div id=\"message\">";
        // line 24
        if (array_key_exists("message", $context)) {
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        }
        echo "</div>

        <article class=\"blog\">
            <header>
                <div class=\"date\"><time datetime=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created"), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created"), "d-m-Y"), "html", null, true);
        echo "</time></div>
                <h2>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title"), "html", null, true);
        echo "</h2>
            </header>
            <div class=\"blog_text\">

                <p>";
        // line 33
        echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog");
        echo "</p>

            </div>
        </article>
        <div class=\"clear\"></div>

        <article class=\"blog\">
            <div id=\"lower\">
                <div class=\"error_wrapper\">
                    <div class=\"comment_error\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment"), 'errors');
        echo "</div>
                </div>
                <form action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_blog_show", array("id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"))), "html", null, true);
        echo "\" id=\"commentForm\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <div>
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment"), 'label');
        echo "
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment"), 'widget');
        echo "
                        <input type=\"hidden\" name=\"blogid\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"), "html", null, true);
        echo "\" />
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        <input type=\"submit\" id=\"_submit\" value=\"Ответить\" />
                    </div>

                </form>
            </div>
        </article>
        <div class=\"clear\"></div>

        <section class=\"comments\" id=\"comments\">
            <section class=\"previous-comments\">
                <h3>Комментарии</h3>
                ";
        // line 63
        $this->env->loadTemplate("DummyBlogBundle:Comment:comments.html.twig")->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 64
        echo "            </section>
        </section>

    </section>
";
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        // line 71
        echo "    Footer
";
    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        // line 75
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dummyblog/js/script.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$(\"#commentForm\").submit(function(){

                var text = trimAll(\$('#comment_comment').val());
                if (text === '' || text.length < 200)
                {
                    alert('Текст должен состоять по крайней мере из 200 символов.');
                    return false;
                }
                sendForm('#commentForm', '#lower', '.error_wrapper');
                return false;
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "DummyBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 76,  183 => 75,  180 => 74,  175 => 71,  172 => 70,  164 => 64,  162 => 63,  147 => 51,  143 => 50,  139 => 49,  135 => 48,  129 => 45,  123 => 44,  118 => 42,  106 => 33,  99 => 29,  93 => 28,  84 => 24,  80 => 22,  77 => 21,  70 => 18,  67 => 17,  61 => 13,  55 => 11,  49 => 9,  47 => 8,  42 => 6,  38 => 5,  35 => 4,  32 => 3,);
    }
}
