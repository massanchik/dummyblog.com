<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_68376b455915000628d57dea4f243c0a extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },
            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },
            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },
            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
            request: request,
            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },
            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }

        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  50 => 15,  30 => 5,  24 => 2,  19 => 1,  183 => 70,  179 => 69,  175 => 68,  172 => 67,  169 => 66,  165 => 59,  162 => 58,  158 => 48,  155 => 47,  151 => 41,  148 => 40,  144 => 36,  141 => 35,  135 => 15,  130 => 14,  127 => 13,  121 => 9,  115 => 72,  92 => 49,  90 => 47,  83 => 42,  67 => 31,  48 => 18,  43 => 13,  36 => 9,  26 => 3,  113 => 66,  110 => 35,  105 => 60,  103 => 58,  100 => 27,  97 => 26,  91 => 31,  89 => 26,  81 => 40,  75 => 18,  69 => 16,  63 => 30,  61 => 13,  56 => 11,  52 => 10,  46 => 14,  40 => 5,  35 => 4,  32 => 6,  94 => 32,  88 => 29,  84 => 23,  80 => 26,  76 => 37,  74 => 35,  68 => 19,  65 => 18,  60 => 15,  53 => 11,  49 => 9,  45 => 17,  42 => 12,  39 => 7,  34 => 4,  31 => 3,);
    }
}
