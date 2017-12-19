<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0f8728e005096e760545b11164d934a8a1b66bc61056af49b87d7ec5a9f0ec4f extends Twig_Template
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
        $__internal_5df1928f029e928c0f8ee48f962cfe6f7cfcf929f02ae11f55120b510bd3da54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df1928f029e928c0f8ee48f962cfe6f7cfcf929f02ae11f55120b510bd3da54->enter($__internal_5df1928f029e928c0f8ee48f962cfe6f7cfcf929f02ae11f55120b510bd3da54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5df1928f029e928c0f8ee48f962cfe6f7cfcf929f02ae11f55120b510bd3da54->leave($__internal_5df1928f029e928c0f8ee48f962cfe6f7cfcf929f02ae11f55120b510bd3da54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
