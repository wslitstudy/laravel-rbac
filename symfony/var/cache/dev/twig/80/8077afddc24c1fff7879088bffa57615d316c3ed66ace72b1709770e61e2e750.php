<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_013b87f0cca330553ce574ceb8fe889981d04dd0b23a44816a7340bb069ca002 extends Twig_Template
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
        $__internal_e47ab27720abd75c8e4514d76413243c85031b6825c0e2c502dd40c4f48727e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47ab27720abd75c8e4514d76413243c85031b6825c0e2c502dd40c4f48727e0->enter($__internal_e47ab27720abd75c8e4514d76413243c85031b6825c0e2c502dd40c4f48727e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e47ab27720abd75c8e4514d76413243c85031b6825c0e2c502dd40c4f48727e0->leave($__internal_e47ab27720abd75c8e4514d76413243c85031b6825c0e2c502dd40c4f48727e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/choice_options.html.php");
    }
}
