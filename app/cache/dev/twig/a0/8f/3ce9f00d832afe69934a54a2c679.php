<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a08f3ce9f00d832afe69934a54a2c679 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  187 => 76,  129 => 45,  77 => 21,  99 => 29,  86 => 27,  183 => 75,  169 => 66,  158 => 48,  148 => 40,  90 => 47,  110 => 35,  97 => 26,  56 => 11,  49 => 9,  179 => 69,  175 => 71,  167 => 64,  164 => 64,  134 => 45,  113 => 66,  82 => 24,  69 => 16,  40 => 5,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 35,  38 => 6,  144 => 36,  141 => 35,  135 => 48,  126 => 45,  109 => 41,  103 => 58,  67 => 17,  61 => 13,  47 => 8,  105 => 60,  93 => 28,  76 => 37,  72 => 14,  68 => 12,  27 => 4,  91 => 31,  84 => 24,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 12,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 74,  172 => 70,  159 => 61,  154 => 59,  147 => 51,  132 => 48,  127 => 13,  121 => 9,  118 => 42,  114 => 42,  104 => 36,  100 => 27,  78 => 22,  75 => 18,  71 => 19,  58 => 21,  34 => 11,  26 => 11,  24 => 6,  25 => 3,  19 => 1,  70 => 9,  63 => 17,  46 => 8,  22 => 1,  163 => 59,  155 => 47,  152 => 49,  149 => 48,  145 => 50,  139 => 49,  131 => 51,  123 => 44,  120 => 40,  115 => 72,  106 => 33,  101 => 32,  96 => 30,  83 => 42,  80 => 22,  74 => 22,  66 => 15,  55 => 11,  52 => 10,  50 => 8,  43 => 13,  41 => 7,  37 => 2,  35 => 4,  32 => 3,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 59,  162 => 63,  157 => 60,  153 => 54,  151 => 41,  143 => 50,  138 => 51,  136 => 50,  133 => 43,  130 => 14,  122 => 43,  119 => 39,  116 => 35,  111 => 37,  108 => 37,  102 => 34,  98 => 31,  95 => 34,  92 => 49,  89 => 26,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 13,  54 => 6,  51 => 14,  48 => 11,  45 => 4,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 1,);
    }
}
