<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_96f84418add80bcac9ce8d186b1f9f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DummyBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
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
        echo "    Авторизация
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
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DummyBlogBundle_add"), "html", null, true);
        echo "\">Добавить запись</a></li>
        <li class=\"current\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
        echo "\">Войти</a></li>
    </ul>
";
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "    <section id=\"login\">
        <header>
            <h1>Авторизация пользователя</h1>
            <p>Если у вас ещё нет аккаунта, тогда просто введите желаемое имя и пароль.</p>
                ";
        // line 23
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 24
            echo "                    <div class=\"error\">Онибка при авторизации.</div>
                ";
        }
        // line 26
        echo "        </header>

        <form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\" class=\"loginform\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <label for=\"username\">Имя пользователя</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
            <div class=\"clear\"></div>
            <label for=\"password\">Пароль</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

            <div id=\"lower\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">запомнить меня</label>

                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Войти\" />
            </div>
        </form>

    </section>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  88 => 29,  84 => 28,  80 => 26,  76 => 24,  74 => 23,  68 => 19,  65 => 18,  60 => 15,  53 => 11,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
