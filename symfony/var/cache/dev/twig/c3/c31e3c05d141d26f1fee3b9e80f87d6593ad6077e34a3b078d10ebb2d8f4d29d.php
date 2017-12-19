<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b981624b7b4a0e893f99247b5313b71787a173c194ba2a9106a04c804f1f2bbe extends Twig_Template
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
        $__internal_417115881cfb86e78c314cbf18976cd28f2e47cfca18a020d73b9332eb1b4bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417115881cfb86e78c314cbf18976cd28f2e47cfca18a020d73b9332eb1b4bfc->enter($__internal_417115881cfb86e78c314cbf18976cd28f2e47cfca18a020d73b9332eb1b4bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_417115881cfb86e78c314cbf18976cd28f2e47cfca18a020d73b9332eb1b4bfc->leave($__internal_417115881cfb86e78c314cbf18976cd28f2e47cfca18a020d73b9332eb1b4bfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}
