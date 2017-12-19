<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e5be7be5d7177caa61e4d8794c6d35dff06f5280ea4c4e5230ae3036946887f0 extends Twig_Template
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
        $__internal_c3b52b17287fc30d662e9d854cd7f93efa3cf2eab992c7ea4a1c68544cb119e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b52b17287fc30d662e9d854cd7f93efa3cf2eab992c7ea4a1c68544cb119e2->enter($__internal_c3b52b17287fc30d662e9d854cd7f93efa3cf2eab992c7ea4a1c68544cb119e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c3b52b17287fc30d662e9d854cd7f93efa3cf2eab992c7ea4a1c68544cb119e2->leave($__internal_c3b52b17287fc30d662e9d854cd7f93efa3cf2eab992c7ea4a1c68544cb119e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
