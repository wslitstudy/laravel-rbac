<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_892e07396a51930aff0b81b0367d2d6e54ea31360961db395b6b1d7bb15031e7 extends Twig_Template
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
        $__internal_d172e11db841de85744b5ddcf0eaef05203b24b7ea5ae5cb03d7c520d6168b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d172e11db841de85744b5ddcf0eaef05203b24b7ea5ae5cb03d7c520d6168b4b->enter($__internal_d172e11db841de85744b5ddcf0eaef05203b24b7ea5ae5cb03d7c520d6168b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d172e11db841de85744b5ddcf0eaef05203b24b7ea5ae5cb03d7c520d6168b4b->leave($__internal_d172e11db841de85744b5ddcf0eaef05203b24b7ea5ae5cb03d7c520d6168b4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/range_widget.html.php");
    }
}
