<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e5aed5589f5cac2f3a2931bcb9852f48fe733602dfdb5d2bae281f98b2b4f83f extends Twig_Template
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
        $__internal_75854b81c52725f550848642a97e279aeef695b8d5158cc685702c926dcce366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75854b81c52725f550848642a97e279aeef695b8d5158cc685702c926dcce366->enter($__internal_75854b81c52725f550848642a97e279aeef695b8d5158cc685702c926dcce366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_75854b81c52725f550848642a97e279aeef695b8d5158cc685702c926dcce366->leave($__internal_75854b81c52725f550848642a97e279aeef695b8d5158cc685702c926dcce366_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
