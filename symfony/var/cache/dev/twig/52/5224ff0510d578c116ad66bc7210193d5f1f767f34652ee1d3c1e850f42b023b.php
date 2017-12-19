<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_f3db84d6cdb7ee6dbce22911b447e6fe820b10481e95a9cb4e4eee3ac1d94b0a extends Twig_Template
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
        $__internal_3ea50e21350ec676e3658ac344dafc80ff9659de52b8ad2ef251af77d3e1395f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea50e21350ec676e3658ac344dafc80ff9659de52b8ad2ef251af77d3e1395f->enter($__internal_3ea50e21350ec676e3658ac344dafc80ff9659de52b8ad2ef251af77d3e1395f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3ea50e21350ec676e3658ac344dafc80ff9659de52b8ad2ef251af77d3e1395f->leave($__internal_3ea50e21350ec676e3658ac344dafc80ff9659de52b8ad2ef251af77d3e1395f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
