<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f375d0a8f89e3e6301423456467d1fb1ae05c05cd4b43439636f0753548157a4 extends Twig_Template
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
        $__internal_7dcba24421d2821c66fa15682c9592b06d3d19810311228e7e8d056b6de34f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcba24421d2821c66fa15682c9592b06d3d19810311228e7e8d056b6de34f10->enter($__internal_7dcba24421d2821c66fa15682c9592b06d3d19810311228e7e8d056b6de34f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7dcba24421d2821c66fa15682c9592b06d3d19810311228e7e8d056b6de34f10->leave($__internal_7dcba24421d2821c66fa15682c9592b06d3d19810311228e7e8d056b6de34f10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
