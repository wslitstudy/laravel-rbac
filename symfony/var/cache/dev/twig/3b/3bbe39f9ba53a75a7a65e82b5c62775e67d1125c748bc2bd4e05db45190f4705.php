<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_844f51fcdd00f9261769a918ee75e1c320d054ca2d4e34f6261e7e2d3cbe77f0 extends Twig_Template
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
        $__internal_5e95b5c8a4e1d677b523b4d21a279f435a09903023441bf8a74fd74d3259ec37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e95b5c8a4e1d677b523b4d21a279f435a09903023441bf8a74fd74d3259ec37->enter($__internal_5e95b5c8a4e1d677b523b4d21a279f435a09903023441bf8a74fd74d3259ec37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_5e95b5c8a4e1d677b523b4d21a279f435a09903023441bf8a74fd74d3259ec37->leave($__internal_5e95b5c8a4e1d677b523b4d21a279f435a09903023441bf8a74fd74d3259ec37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
