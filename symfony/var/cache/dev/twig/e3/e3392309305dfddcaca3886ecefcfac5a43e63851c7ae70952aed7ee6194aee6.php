<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5a54365b1c8b7cacc7b5946e53192300c7fa6a4797db2f087e67cda0a4e82757 extends Twig_Template
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
        $__internal_cbb75730cc92a88ebadf6f42abc10ef03ff633cd7dddd70d700a6b5370961738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb75730cc92a88ebadf6f42abc10ef03ff633cd7dddd70d700a6b5370961738->enter($__internal_cbb75730cc92a88ebadf6f42abc10ef03ff633cd7dddd70d700a6b5370961738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_cbb75730cc92a88ebadf6f42abc10ef03ff633cd7dddd70d700a6b5370961738->leave($__internal_cbb75730cc92a88ebadf6f42abc10ef03ff633cd7dddd70d700a6b5370961738_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
