<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e3c7b5999d1eb565aadb0470bebaf85bf2e2d794f8b56b40e5a5617f08c51211 extends Twig_Template
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
        $__internal_3e9cc44a60bb387ff4cdc033903808fb9d0a50c59af13838e91eead94d9d825f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9cc44a60bb387ff4cdc033903808fb9d0a50c59af13838e91eead94d9d825f->enter($__internal_3e9cc44a60bb387ff4cdc033903808fb9d0a50c59af13838e91eead94d9d825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_3e9cc44a60bb387ff4cdc033903808fb9d0a50c59af13838e91eead94d9d825f->leave($__internal_3e9cc44a60bb387ff4cdc033903808fb9d0a50c59af13838e91eead94d9d825f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
