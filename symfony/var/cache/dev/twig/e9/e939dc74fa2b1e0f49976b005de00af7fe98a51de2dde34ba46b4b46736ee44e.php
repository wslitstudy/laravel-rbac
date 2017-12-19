<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_33c1b9dd877eb8850f67244d656c9751cbf520bb43de318256bee6ff0599755f extends Twig_Template
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
        $__internal_8a459562e49fac14bd37de8c442aec9700aa2ac7587c5e83841e42a44e502ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a459562e49fac14bd37de8c442aec9700aa2ac7587c5e83841e42a44e502ef7->enter($__internal_8a459562e49fac14bd37de8c442aec9700aa2ac7587c5e83841e42a44e502ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8a459562e49fac14bd37de8c442aec9700aa2ac7587c5e83841e42a44e502ef7->leave($__internal_8a459562e49fac14bd37de8c442aec9700aa2ac7587c5e83841e42a44e502ef7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
