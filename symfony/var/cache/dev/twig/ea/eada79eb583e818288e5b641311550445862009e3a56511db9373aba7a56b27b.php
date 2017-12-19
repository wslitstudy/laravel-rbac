<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ca4a3db2774973c20e4b2d907e933353debdcad1df4b649df3b17969cb4f7ee6 extends Twig_Template
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
        $__internal_94ba2eec7ed737dd62933f0eca8e0dd1199cdc82e9345874e5a153ada47f7ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ba2eec7ed737dd62933f0eca8e0dd1199cdc82e9345874e5a153ada47f7ca3->enter($__internal_94ba2eec7ed737dd62933f0eca8e0dd1199cdc82e9345874e5a153ada47f7ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_94ba2eec7ed737dd62933f0eca8e0dd1199cdc82e9345874e5a153ada47f7ca3->leave($__internal_94ba2eec7ed737dd62933f0eca8e0dd1199cdc82e9345874e5a153ada47f7ca3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
