<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_426beedd20af430fa3902785f8713d08b930f51741f87e13e0eaa6095a936d9a extends Twig_Template
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
        $__internal_6e465729bfa26387761133b3a96b4faa83685739365634e4f2639929ee2c5d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e465729bfa26387761133b3a96b4faa83685739365634e4f2639929ee2c5d47->enter($__internal_6e465729bfa26387761133b3a96b4faa83685739365634e4f2639929ee2c5d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6e465729bfa26387761133b3a96b4faa83685739365634e4f2639929ee2c5d47->leave($__internal_6e465729bfa26387761133b3a96b4faa83685739365634e4f2639929ee2c5d47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
