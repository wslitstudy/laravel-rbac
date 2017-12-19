<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e4516e6a01726402559b3afa1fc5e12c0180aad552d47ed7c2ddb1a7e6a2f055 extends Twig_Template
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
        $__internal_bc2c1e1f1b3dc54c0ad54361e8244b61e22884dcfe7a61c7a567bc79d1afcf11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2c1e1f1b3dc54c0ad54361e8244b61e22884dcfe7a61c7a567bc79d1afcf11->enter($__internal_bc2c1e1f1b3dc54c0ad54361e8244b61e22884dcfe7a61c7a567bc79d1afcf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bc2c1e1f1b3dc54c0ad54361e8244b61e22884dcfe7a61c7a567bc79d1afcf11->leave($__internal_bc2c1e1f1b3dc54c0ad54361e8244b61e22884dcfe7a61c7a567bc79d1afcf11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
