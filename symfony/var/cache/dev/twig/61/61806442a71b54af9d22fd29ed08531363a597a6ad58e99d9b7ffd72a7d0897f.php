<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6b9e6ce75d30fb731b6145fb55a29615a83ad700ac6811ac5e91771a5a61da5a extends Twig_Template
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
        $__internal_e354d2f9225477f4b21df4f33dfaa62536c56f51dce6836bc840806c09d8f946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e354d2f9225477f4b21df4f33dfaa62536c56f51dce6836bc840806c09d8f946->enter($__internal_e354d2f9225477f4b21df4f33dfaa62536c56f51dce6836bc840806c09d8f946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e354d2f9225477f4b21df4f33dfaa62536c56f51dce6836bc840806c09d8f946->leave($__internal_e354d2f9225477f4b21df4f33dfaa62536c56f51dce6836bc840806c09d8f946_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
