<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_44f27fa672f439cd526a2ba0943737fe7bf091c65de097d1f04b15ecea09d50f extends Twig_Template
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
        $__internal_3ec1908e95f1a186bea7c3f16fb44c973c6baa7339008ed0bb184fe81889881e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec1908e95f1a186bea7c3f16fb44c973c6baa7339008ed0bb184fe81889881e->enter($__internal_3ec1908e95f1a186bea7c3f16fb44c973c6baa7339008ed0bb184fe81889881e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3ec1908e95f1a186bea7c3f16fb44c973c6baa7339008ed0bb184fe81889881e->leave($__internal_3ec1908e95f1a186bea7c3f16fb44c973c6baa7339008ed0bb184fe81889881e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
