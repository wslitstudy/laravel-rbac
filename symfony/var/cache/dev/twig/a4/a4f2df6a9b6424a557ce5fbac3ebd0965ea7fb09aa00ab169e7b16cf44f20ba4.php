<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_8deea9d090850f742bfe7190f812a7e92965cdd4611319e50d0fad7417379d67 extends Twig_Template
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
        $__internal_5d78dc4f8845344f15b349ca5138e873f8310522caf2e73fafd6bd71ac3b8af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d78dc4f8845344f15b349ca5138e873f8310522caf2e73fafd6bd71ac3b8af4->enter($__internal_5d78dc4f8845344f15b349ca5138e873f8310522caf2e73fafd6bd71ac3b8af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5d78dc4f8845344f15b349ca5138e873f8310522caf2e73fafd6bd71ac3b8af4->leave($__internal_5d78dc4f8845344f15b349ca5138e873f8310522caf2e73fafd6bd71ac3b8af4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/percent_widget.html.php");
    }
}
