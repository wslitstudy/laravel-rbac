<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_51518809f44382665d057143b8b47923ef011bec87e5d1248f694c4e2aecf8d8 extends Twig_Template
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
        $__internal_7369b04042e29f074bad6e9355917383549076758e8a194d077b9b90c76dfb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7369b04042e29f074bad6e9355917383549076758e8a194d077b9b90c76dfb88->enter($__internal_7369b04042e29f074bad6e9355917383549076758e8a194d077b9b90c76dfb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7369b04042e29f074bad6e9355917383549076758e8a194d077b9b90c76dfb88->leave($__internal_7369b04042e29f074bad6e9355917383549076758e8a194d077b9b90c76dfb88_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
