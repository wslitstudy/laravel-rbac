<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b53a71333152dacdbe516fbeae24ad93661d8b4f237f9dce32f92795b416e195 extends Twig_Template
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
        $__internal_bad5368b78ff28bcc51a8b53c6155b48d7564fcfb1ef4d82bfbee1cabcd03665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad5368b78ff28bcc51a8b53c6155b48d7564fcfb1ef4d82bfbee1cabcd03665->enter($__internal_bad5368b78ff28bcc51a8b53c6155b48d7564fcfb1ef4d82bfbee1cabcd03665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bad5368b78ff28bcc51a8b53c6155b48d7564fcfb1ef4d82bfbee1cabcd03665->leave($__internal_bad5368b78ff28bcc51a8b53c6155b48d7564fcfb1ef4d82bfbee1cabcd03665_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
