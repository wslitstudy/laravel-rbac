<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_69b5fdc5da5bb6ed07e22379bf1380e7f5bc5a7e443ba9239ad1c9601f552ab0 extends Twig_Template
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
        $__internal_8c39a9f1eaa920403b6359d83ba3c67870b4727a3aae615c7ee5f986b86d326f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c39a9f1eaa920403b6359d83ba3c67870b4727a3aae615c7ee5f986b86d326f->enter($__internal_8c39a9f1eaa920403b6359d83ba3c67870b4727a3aae615c7ee5f986b86d326f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8c39a9f1eaa920403b6359d83ba3c67870b4727a3aae615c7ee5f986b86d326f->leave($__internal_8c39a9f1eaa920403b6359d83ba3c67870b4727a3aae615c7ee5f986b86d326f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
