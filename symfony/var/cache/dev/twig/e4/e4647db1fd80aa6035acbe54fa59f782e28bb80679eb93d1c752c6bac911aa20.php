<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fce3e7dc258b515f61deac12a28852cbd61ed0b47b00171f4d1b63ddee7b11b0 extends Twig_Template
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
        $__internal_a1f252577b5ebdbe60466f708875dc1e0016ced8da074be02c30275d1a63d4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f252577b5ebdbe60466f708875dc1e0016ced8da074be02c30275d1a63d4eb->enter($__internal_a1f252577b5ebdbe60466f708875dc1e0016ced8da074be02c30275d1a63d4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_a1f252577b5ebdbe60466f708875dc1e0016ced8da074be02c30275d1a63d4eb->leave($__internal_a1f252577b5ebdbe60466f708875dc1e0016ced8da074be02c30275d1a63d4eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
