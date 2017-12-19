<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9203473fb4c2978f269daa40be9bcd0326c623d96545ddf3cfe4b063c616e7d7 extends Twig_Template
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
        $__internal_c389ca873f6672eef8e120ca1fb3ea3d05b2cd4273b3e4f86249ab4a0da7aea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c389ca873f6672eef8e120ca1fb3ea3d05b2cd4273b3e4f86249ab4a0da7aea4->enter($__internal_c389ca873f6672eef8e120ca1fb3ea3d05b2cd4273b3e4f86249ab4a0da7aea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c389ca873f6672eef8e120ca1fb3ea3d05b2cd4273b3e4f86249ab4a0da7aea4->leave($__internal_c389ca873f6672eef8e120ca1fb3ea3d05b2cd4273b3e4f86249ab4a0da7aea4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
