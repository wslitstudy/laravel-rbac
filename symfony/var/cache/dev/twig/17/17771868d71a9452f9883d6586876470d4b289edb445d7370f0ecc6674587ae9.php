<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_730eedbf4237d35f0b9de90af6941886bdf006539830804e9300123c110fb212 extends Twig_Template
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
        $__internal_acf30daa1706da806705b36fc60a70565a1a7f14f8d532adc730436e5353da23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf30daa1706da806705b36fc60a70565a1a7f14f8d532adc730436e5353da23->enter($__internal_acf30daa1706da806705b36fc60a70565a1a7f14f8d532adc730436e5353da23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_acf30daa1706da806705b36fc60a70565a1a7f14f8d532adc730436e5353da23->leave($__internal_acf30daa1706da806705b36fc60a70565a1a7f14f8d532adc730436e5353da23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
