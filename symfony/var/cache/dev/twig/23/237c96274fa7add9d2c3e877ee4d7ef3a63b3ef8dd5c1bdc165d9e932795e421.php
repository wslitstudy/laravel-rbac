<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_31f3835d0aed9fbaee044f51fa4fd22a2fdf09a5395cd957dcabf14922f1bbce extends Twig_Template
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
        $__internal_52499b70bde23afbc33e0df29373ac70f4610c0f40b853ec7cf99e03eebbe763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52499b70bde23afbc33e0df29373ac70f4610c0f40b853ec7cf99e03eebbe763->enter($__internal_52499b70bde23afbc33e0df29373ac70f4610c0f40b853ec7cf99e03eebbe763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_52499b70bde23afbc33e0df29373ac70f4610c0f40b853ec7cf99e03eebbe763->leave($__internal_52499b70bde23afbc33e0df29373ac70f4610c0f40b853ec7cf99e03eebbe763_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
