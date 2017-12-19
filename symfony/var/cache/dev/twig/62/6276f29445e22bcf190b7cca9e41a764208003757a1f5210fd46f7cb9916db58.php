<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b0e6a923b6f2efb2faa39cdb32b00f2bb031abf86e1138cf64cbfefab9a973db extends Twig_Template
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
        $__internal_40bc7b90d453851b46f4b067ad6570d0eefc493099c1bee53383b979bd15cf27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bc7b90d453851b46f4b067ad6570d0eefc493099c1bee53383b979bd15cf27->enter($__internal_40bc7b90d453851b46f4b067ad6570d0eefc493099c1bee53383b979bd15cf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_40bc7b90d453851b46f4b067ad6570d0eefc493099c1bee53383b979bd15cf27->leave($__internal_40bc7b90d453851b46f4b067ad6570d0eefc493099c1bee53383b979bd15cf27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
