<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3a447b5c2cf4e1eb18a9cd0953e2900bdc33f7b6af2d777d71cc0cba33712e14 extends Twig_Template
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
        $__internal_4bfbe21da37c1d54ed13c4f88235f9666d6331f91aaaf4a9ce82b790ede700f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfbe21da37c1d54ed13c4f88235f9666d6331f91aaaf4a9ce82b790ede700f9->enter($__internal_4bfbe21da37c1d54ed13c4f88235f9666d6331f91aaaf4a9ce82b790ede700f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4bfbe21da37c1d54ed13c4f88235f9666d6331f91aaaf4a9ce82b790ede700f9->leave($__internal_4bfbe21da37c1d54ed13c4f88235f9666d6331f91aaaf4a9ce82b790ede700f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
