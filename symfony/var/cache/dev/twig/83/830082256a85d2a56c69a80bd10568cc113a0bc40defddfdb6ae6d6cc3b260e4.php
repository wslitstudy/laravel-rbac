<?php

/* base.html.twig */
class __TwigTemplate_9b3dc1948127c1bc9eeb43b0120fd36d8f5690ebed5213a05dd01700d0e32157 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d18f12c103237eaab924d17166f851298b0e34a1b82b124393704cc9070470b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d18f12c103237eaab924d17166f851298b0e34a1b82b124393704cc9070470b->enter($__internal_3d18f12c103237eaab924d17166f851298b0e34a1b82b124393704cc9070470b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_3d18f12c103237eaab924d17166f851298b0e34a1b82b124393704cc9070470b->leave($__internal_3d18f12c103237eaab924d17166f851298b0e34a1b82b124393704cc9070470b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_14fd4580907f0665ab9812cf0ce261307f85d9c6b2679252dcda273b376c7e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14fd4580907f0665ab9812cf0ce261307f85d9c6b2679252dcda273b376c7e49->enter($__internal_14fd4580907f0665ab9812cf0ce261307f85d9c6b2679252dcda273b376c7e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_14fd4580907f0665ab9812cf0ce261307f85d9c6b2679252dcda273b376c7e49->leave($__internal_14fd4580907f0665ab9812cf0ce261307f85d9c6b2679252dcda273b376c7e49_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_227af61c3e8fd3f8735b75c4ce34387bc4c79a4b1b6d08b5ec3305e080d79dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227af61c3e8fd3f8735b75c4ce34387bc4c79a4b1b6d08b5ec3305e080d79dfc->enter($__internal_227af61c3e8fd3f8735b75c4ce34387bc4c79a4b1b6d08b5ec3305e080d79dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_227af61c3e8fd3f8735b75c4ce34387bc4c79a4b1b6d08b5ec3305e080d79dfc->leave($__internal_227af61c3e8fd3f8735b75c4ce34387bc4c79a4b1b6d08b5ec3305e080d79dfc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcf8e6db9b6eca5da2d59ddd500e9024bd1da878ad5d496cdc0705dbb78b8fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf8e6db9b6eca5da2d59ddd500e9024bd1da878ad5d496cdc0705dbb78b8fcc->enter($__internal_fcf8e6db9b6eca5da2d59ddd500e9024bd1da878ad5d496cdc0705dbb78b8fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fcf8e6db9b6eca5da2d59ddd500e9024bd1da878ad5d496cdc0705dbb78b8fcc->leave($__internal_fcf8e6db9b6eca5da2d59ddd500e9024bd1da878ad5d496cdc0705dbb78b8fcc_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_839eded2e9996d37125860f351cf1e0309e91f8fe4eb4839c1e6346d7256a669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839eded2e9996d37125860f351cf1e0309e91f8fe4eb4839c1e6346d7256a669->enter($__internal_839eded2e9996d37125860f351cf1e0309e91f8fe4eb4839c1e6346d7256a669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_839eded2e9996d37125860f351cf1e0309e91f8fe4eb4839c1e6346d7256a669->leave($__internal_839eded2e9996d37125860f351cf1e0309e91f8fe4eb4839c1e6346d7256a669_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 10,  79 => 9,  68 => 6,  56 => 5,  47 => 11,  44 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/symfony/templates/base.html.twig");
    }
}
