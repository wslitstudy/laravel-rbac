<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_fd782cf226d616b42b99b2b54b4f26d102f4ffe169f10e120b98e075f880e911 extends Twig_Template
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
        $__internal_75c81f0965630609c959a3802c175657ce6dde01e78aabf95fa4fb146cb52d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c81f0965630609c959a3802c175657ce6dde01e78aabf95fa4fb146cb52d98->enter($__internal_75c81f0965630609c959a3802c175657ce6dde01e78aabf95fa4fb146cb52d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_75c81f0965630609c959a3802c175657ce6dde01e78aabf95fa4fb146cb52d98->leave($__internal_75c81f0965630609c959a3802c175657ce6dde01e78aabf95fa4fb146cb52d98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
