<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_65629eb1fc1cd652ebcfc995c913cae1f0238d9077f4a6a0936ef76df81717ff extends Twig_Template
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
        $__internal_19ea175a3d97cdf4ed358eb0d491929cb0022f2c1c3cba55bcee8251f980bf66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ea175a3d97cdf4ed358eb0d491929cb0022f2c1c3cba55bcee8251f980bf66->enter($__internal_19ea175a3d97cdf4ed358eb0d491929cb0022f2c1c3cba55bcee8251f980bf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_19ea175a3d97cdf4ed358eb0d491929cb0022f2c1c3cba55bcee8251f980bf66->leave($__internal_19ea175a3d97cdf4ed358eb0d491929cb0022f2c1c3cba55bcee8251f980bf66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
