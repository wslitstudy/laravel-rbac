<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_69e46de275ce5a31240c70dc1e35693aaec26d393f9f3201d3327757294a1beb extends Twig_Template
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
        $__internal_f362e33cbd0bca433e8b54ec979f8875daee7bf660a61a8036f8ec3fc066000c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f362e33cbd0bca433e8b54ec979f8875daee7bf660a61a8036f8ec3fc066000c->enter($__internal_f362e33cbd0bca433e8b54ec979f8875daee7bf660a61a8036f8ec3fc066000c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f362e33cbd0bca433e8b54ec979f8875daee7bf660a61a8036f8ec3fc066000c->leave($__internal_f362e33cbd0bca433e8b54ec979f8875daee7bf660a61a8036f8ec3fc066000c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
