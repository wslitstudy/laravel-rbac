<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_943a0f3eff73e6f6972ba30eaf185787170d3e082b8993d36afdd28c53b2afe3 extends Twig_Template
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
        $__internal_53cc58849af75d59bd858046c3787f8971afc8972b86c8acd01c363b2ab9c0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cc58849af75d59bd858046c3787f8971afc8972b86c8acd01c363b2ab9c0a5->enter($__internal_53cc58849af75d59bd858046c3787f8971afc8972b86c8acd01c363b2ab9c0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_53cc58849af75d59bd858046c3787f8971afc8972b86c8acd01c363b2ab9c0a5->leave($__internal_53cc58849af75d59bd858046c3787f8971afc8972b86c8acd01c363b2ab9c0a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
