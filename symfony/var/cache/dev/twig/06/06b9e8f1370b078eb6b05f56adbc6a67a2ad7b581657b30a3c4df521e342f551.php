<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_abe5f8669ba454c090fe378dfb7c69fcbddf369080f942c4ae9e7ced66d27837 extends Twig_Template
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
        $__internal_701271413a619ed1d56a4587952f59888f3ee31265693ff99b1277e22d252367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701271413a619ed1d56a4587952f59888f3ee31265693ff99b1277e22d252367->enter($__internal_701271413a619ed1d56a4587952f59888f3ee31265693ff99b1277e22d252367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_701271413a619ed1d56a4587952f59888f3ee31265693ff99b1277e22d252367->leave($__internal_701271413a619ed1d56a4587952f59888f3ee31265693ff99b1277e22d252367_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
