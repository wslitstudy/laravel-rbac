<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_42d9711473b3cbbbe8b6bff85822dabbf6358a0c5b0114ba0264abcfd4a228b8 extends Twig_Template
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
        $__internal_674e58b275ab81db30cfaf78bbd8df73a111d7f941cfe962ba4c2d2681122a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674e58b275ab81db30cfaf78bbd8df73a111d7f941cfe962ba4c2d2681122a3e->enter($__internal_674e58b275ab81db30cfaf78bbd8df73a111d7f941cfe962ba4c2d2681122a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_674e58b275ab81db30cfaf78bbd8df73a111d7f941cfe962ba4c2d2681122a3e->leave($__internal_674e58b275ab81db30cfaf78bbd8df73a111d7f941cfe962ba4c2d2681122a3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
