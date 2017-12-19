<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_6d62af277f34a2affb10c4374e05b65981669d6f4ed72e1c4f64f89cd9a6179f extends Twig_Template
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
        $__internal_5f26545b00b92d4949d92dfa6bd321002b20ec94f767064644ab5ff725190508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f26545b00b92d4949d92dfa6bd321002b20ec94f767064644ab5ff725190508->enter($__internal_5f26545b00b92d4949d92dfa6bd321002b20ec94f767064644ab5ff725190508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_5f26545b00b92d4949d92dfa6bd321002b20ec94f767064644ab5ff725190508->leave($__internal_5f26545b00b92d4949d92dfa6bd321002b20ec94f767064644ab5ff725190508_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
