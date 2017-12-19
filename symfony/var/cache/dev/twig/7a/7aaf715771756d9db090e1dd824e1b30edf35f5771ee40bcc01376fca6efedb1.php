<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_878180c1feff34f91b75dfca088117c404e52d24bdc8a99fbc1452ac142af0e2 extends Twig_Template
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
        $__internal_de749a88d1d59f7d7c1eb6c00216e1bc3314fe0bc8db525a0fe0f8756340fde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de749a88d1d59f7d7c1eb6c00216e1bc3314fe0bc8db525a0fe0f8756340fde7->enter($__internal_de749a88d1d59f7d7c1eb6c00216e1bc3314fe0bc8db525a0fe0f8756340fde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_de749a88d1d59f7d7c1eb6c00216e1bc3314fe0bc8db525a0fe0f8756340fde7->leave($__internal_de749a88d1d59f7d7c1eb6c00216e1bc3314fe0bc8db525a0fe0f8756340fde7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
