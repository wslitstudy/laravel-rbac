<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_69e9e227012265148d461aa15c849305aa74128e55cbc530eb245c19c0ecae65 extends Twig_Template
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
        $__internal_4762c1d6910fd02f793476db5a40472c069abc3820f01770c43fc491efecd1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4762c1d6910fd02f793476db5a40472c069abc3820f01770c43fc491efecd1b4->enter($__internal_4762c1d6910fd02f793476db5a40472c069abc3820f01770c43fc491efecd1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4762c1d6910fd02f793476db5a40472c069abc3820f01770c43fc491efecd1b4->leave($__internal_4762c1d6910fd02f793476db5a40472c069abc3820f01770c43fc491efecd1b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/symfony/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
