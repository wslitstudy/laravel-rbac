<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_acdf7df2f63493d818f4c76f29f5705edfb88d3fbbc107d590b0ffb18b3cf966 extends Twig_Template
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
        $__internal_f1c89c0b039018aa7a49cddc800e92dcb03e571035707f83e83e317326edf90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c89c0b039018aa7a49cddc800e92dcb03e571035707f83e83e317326edf90a->enter($__internal_f1c89c0b039018aa7a49cddc800e92dcb03e571035707f83e83e317326edf90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f1c89c0b039018aa7a49cddc800e92dcb03e571035707f83e83e317326edf90a->leave($__internal_f1c89c0b039018aa7a49cddc800e92dcb03e571035707f83e83e317326edf90a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
