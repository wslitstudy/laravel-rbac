<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5b6ade2da3fe4b7831527a25a46a74a87b42012d471ca9de50dd5060745fb5a3 extends Twig_Template
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
        $__internal_ffa755ab69584b38f24403652bc09b144ae1dda4558fff5b499495ed2bf065bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa755ab69584b38f24403652bc09b144ae1dda4558fff5b499495ed2bf065bf->enter($__internal_ffa755ab69584b38f24403652bc09b144ae1dda4558fff5b499495ed2bf065bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ffa755ab69584b38f24403652bc09b144ae1dda4558fff5b499495ed2bf065bf->leave($__internal_ffa755ab69584b38f24403652bc09b144ae1dda4558fff5b499495ed2bf065bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
