<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_ffbcd5bd851cb8a44cb6d0749ad061324d40718598836087df010dfa37683ed0 extends Twig_Template
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
        $__internal_7da43f5a7b14f69cca48270d3d5354b85e20912a3415c47ba0a06f544665eb5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da43f5a7b14f69cca48270d3d5354b85e20912a3415c47ba0a06f544665eb5d->enter($__internal_7da43f5a7b14f69cca48270d3d5354b85e20912a3415c47ba0a06f544665eb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7da43f5a7b14f69cca48270d3d5354b85e20912a3415c47ba0a06f544665eb5d->leave($__internal_7da43f5a7b14f69cca48270d3d5354b85e20912a3415c47ba0a06f544665eb5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
