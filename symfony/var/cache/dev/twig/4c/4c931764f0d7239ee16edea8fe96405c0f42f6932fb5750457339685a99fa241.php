<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fe12656699324354b11400bece85c9a5cbba470899e5fb3bfd11cc9644d1d629 extends Twig_Template
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
        $__internal_767953fba784392ac9f66a2ffe6f4381b4d9f30de93a5e68084d29d944255200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767953fba784392ac9f66a2ffe6f4381b4d9f30de93a5e68084d29d944255200->enter($__internal_767953fba784392ac9f66a2ffe6f4381b4d9f30de93a5e68084d29d944255200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_767953fba784392ac9f66a2ffe6f4381b4d9f30de93a5e68084d29d944255200->leave($__internal_767953fba784392ac9f66a2ffe6f4381b4d9f30de93a5e68084d29d944255200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
