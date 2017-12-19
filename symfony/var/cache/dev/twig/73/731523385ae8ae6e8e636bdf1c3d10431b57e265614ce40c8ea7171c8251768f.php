<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_43b3cbc1564e8f25c8eb38f2bfba1bedbe5503e8d82fd613b65b01a1e455f69d extends Twig_Template
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
        $__internal_6c8561403e8f56f473a8fe286505d2988d666b850be0dc2738ba46fca37ac791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8561403e8f56f473a8fe286505d2988d666b850be0dc2738ba46fca37ac791->enter($__internal_6c8561403e8f56f473a8fe286505d2988d666b850be0dc2738ba46fca37ac791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6c8561403e8f56f473a8fe286505d2988d666b850be0dc2738ba46fca37ac791->leave($__internal_6c8561403e8f56f473a8fe286505d2988d666b850be0dc2738ba46fca37ac791_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
