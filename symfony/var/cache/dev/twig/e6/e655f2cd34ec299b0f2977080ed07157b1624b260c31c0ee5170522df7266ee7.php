<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_edb83ae59e0e2c0b942efc3e83ba96cefd0f34e03cb6adf12268c761f2d9c867 extends Twig_Template
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
        $__internal_31ace4b7043c00d1225bd0be4458b13a3f3c86fa048e216719df1239099083ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ace4b7043c00d1225bd0be4458b13a3f3c86fa048e216719df1239099083ac->enter($__internal_31ace4b7043c00d1225bd0be4458b13a3f3c86fa048e216719df1239099083ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_31ace4b7043c00d1225bd0be4458b13a3f3c86fa048e216719df1239099083ac->leave($__internal_31ace4b7043c00d1225bd0be4458b13a3f3c86fa048e216719df1239099083ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
