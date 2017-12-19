<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_acd61441eca92a097523940fe664a964f4ab3383ffd5cd66801d79a1d66f79aa extends Twig_Template
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
        $__internal_6441badc064bcb2799ec5f2e211fc6f7228377d6449396dce1d4db8931378b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6441badc064bcb2799ec5f2e211fc6f7228377d6449396dce1d4db8931378b62->enter($__internal_6441badc064bcb2799ec5f2e211fc6f7228377d6449396dce1d4db8931378b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_6441badc064bcb2799ec5f2e211fc6f7228377d6449396dce1d4db8931378b62->leave($__internal_6441badc064bcb2799ec5f2e211fc6f7228377d6449396dce1d4db8931378b62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
