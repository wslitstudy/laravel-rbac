<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ae7c82c5e25d37bf11424143f8a13382b0a3ce7cf822fe04aabb4f287ea6c25d extends Twig_Template
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
        $__internal_0d5ca081ef21ae27a2f8b975a6621f2d4bcb1b38fcf95ef03dc219e7ff4bb2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5ca081ef21ae27a2f8b975a6621f2d4bcb1b38fcf95ef03dc219e7ff4bb2eb->enter($__internal_0d5ca081ef21ae27a2f8b975a6621f2d4bcb1b38fcf95ef03dc219e7ff4bb2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0d5ca081ef21ae27a2f8b975a6621f2d4bcb1b38fcf95ef03dc219e7ff4bb2eb->leave($__internal_0d5ca081ef21ae27a2f8b975a6621f2d4bcb1b38fcf95ef03dc219e7ff4bb2eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
