<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_29c5c43a93a151fb7941c826ffde2fca2e4f83e36a603053f767660ba274db9f extends Twig_Template
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
        $__internal_7f0e4ebe8c478c4d2862625302ebf0d185579da9d2380999f8ad734f4c5aea75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0e4ebe8c478c4d2862625302ebf0d185579da9d2380999f8ad734f4c5aea75->enter($__internal_7f0e4ebe8c478c4d2862625302ebf0d185579da9d2380999f8ad734f4c5aea75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7f0e4ebe8c478c4d2862625302ebf0d185579da9d2380999f8ad734f4c5aea75->leave($__internal_7f0e4ebe8c478c4d2862625302ebf0d185579da9d2380999f8ad734f4c5aea75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
