<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ec0c2579b0679f094c25804593f85c55189dfbc026caed5cb533ab8b7dbadd09 extends Twig_Template
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
        $__internal_9ebd0c343065b7afbd4bdb2c7450e11538feae5aabfcc75ddbd71509ed55743e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebd0c343065b7afbd4bdb2c7450e11538feae5aabfcc75ddbd71509ed55743e->enter($__internal_9ebd0c343065b7afbd4bdb2c7450e11538feae5aabfcc75ddbd71509ed55743e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9ebd0c343065b7afbd4bdb2c7450e11538feae5aabfcc75ddbd71509ed55743e->leave($__internal_9ebd0c343065b7afbd4bdb2c7450e11538feae5aabfcc75ddbd71509ed55743e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
