<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_fc701f260ea21fd4eac14fb22b02a60be2fb9da824bd032c1f16a961110f7453 extends Twig_Template
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
        $__internal_6f1f30f9c9455dee4492867927789ea7a6092dbdcb49abcbc47b799cf751a891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1f30f9c9455dee4492867927789ea7a6092dbdcb49abcbc47b799cf751a891->enter($__internal_6f1f30f9c9455dee4492867927789ea7a6092dbdcb49abcbc47b799cf751a891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6f1f30f9c9455dee4492867927789ea7a6092dbdcb49abcbc47b799cf751a891->leave($__internal_6f1f30f9c9455dee4492867927789ea7a6092dbdcb49abcbc47b799cf751a891_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
