<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7138df11ff522d9b933c8619e2d742ab302f2e17c2981fd8b88539d962016460 extends Twig_Template
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
        $__internal_50d99a1428bed2b2ed2c0f726693f03239412d12b6abacc1d70e1d349173e0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d99a1428bed2b2ed2c0f726693f03239412d12b6abacc1d70e1d349173e0c7->enter($__internal_50d99a1428bed2b2ed2c0f726693f03239412d12b6abacc1d70e1d349173e0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_50d99a1428bed2b2ed2c0f726693f03239412d12b6abacc1d70e1d349173e0c7->leave($__internal_50d99a1428bed2b2ed2c0f726693f03239412d12b6abacc1d70e1d349173e0c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
