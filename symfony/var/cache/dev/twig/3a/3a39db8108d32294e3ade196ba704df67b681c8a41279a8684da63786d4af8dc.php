<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_f1866518edacf2cc0049021d2a193bf08f8a7c6905d2700b41ad6540fc952c41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b94de740dc3f36cfff3b635f657faa70e44d3b918de023c1ebf7ae7f522776b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94de740dc3f36cfff3b635f657faa70e44d3b918de023c1ebf7ae7f522776b2->enter($__internal_b94de740dc3f36cfff3b635f657faa70e44d3b918de023c1ebf7ae7f522776b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_b94de740dc3f36cfff3b635f657faa70e44d3b918de023c1ebf7ae7f522776b2->leave($__internal_b94de740dc3f36cfff3b635f657faa70e44d3b918de023c1ebf7ae7f522776b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95aab135e2dc7000c065b00c62af4640ea15a785769e519f77302c9e08bc8a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95aab135e2dc7000c065b00c62af4640ea15a785769e519f77302c9e08bc8a3d->enter($__internal_95aab135e2dc7000c065b00c62af4640ea15a785769e519f77302c9e08bc8a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_95aab135e2dc7000c065b00c62af4640ea15a785769e519f77302c9e08bc8a3d->leave($__internal_95aab135e2dc7000c065b00c62af4640ea15a785769e519f77302c9e08bc8a3d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0dd6fd426f3234aa0c200808b947bd9fac7427962e3986fba8972907fed20e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0dd6fd426f3234aa0c200808b947bd9fac7427962e3986fba8972907fed20e4->enter($__internal_a0dd6fd426f3234aa0c200808b947bd9fac7427962e3986fba8972907fed20e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a0dd6fd426f3234aa0c200808b947bd9fac7427962e3986fba8972907fed20e4->leave($__internal_a0dd6fd426f3234aa0c200808b947bd9fac7427962e3986fba8972907fed20e4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c06139273cfda4b9cd3db394ff01cc020881bc88a63a564e579b10d3210d9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c06139273cfda4b9cd3db394ff01cc020881bc88a63a564e579b10d3210d9fb->enter($__internal_3c06139273cfda4b9cd3db394ff01cc020881bc88a63a564e579b10d3210d9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3c06139273cfda4b9cd3db394ff01cc020881bc88a63a564e579b10d3210d9fb->leave($__internal_3c06139273cfda4b9cd3db394ff01cc020881bc88a63a564e579b10d3210d9fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
