<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_da24675e8df83347311ae5ca084c86114382b85b8506c6271724f1fed6106804 extends Twig_Template
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
        $__internal_d50e1d4eb4203021e720b52e36c6f87949b65112d45e5a5567cca94d5aea4d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50e1d4eb4203021e720b52e36c6f87949b65112d45e5a5567cca94d5aea4d39->enter($__internal_d50e1d4eb4203021e720b52e36c6f87949b65112d45e5a5567cca94d5aea4d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_d50e1d4eb4203021e720b52e36c6f87949b65112d45e5a5567cca94d5aea4d39->leave($__internal_d50e1d4eb4203021e720b52e36c6f87949b65112d45e5a5567cca94d5aea4d39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
