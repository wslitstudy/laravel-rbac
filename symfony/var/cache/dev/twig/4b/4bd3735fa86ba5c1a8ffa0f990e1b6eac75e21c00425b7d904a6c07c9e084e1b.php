<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_068eaf6f87eecd2d6ae40e5222354cb9a347b5bd7123801143210e17451c3f09 extends Twig_Template
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
        $__internal_78f7962e3aa4fe81a2612c581b17d81e387b679873c1f0d829faabd1906f9b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f7962e3aa4fe81a2612c581b17d81e387b679873c1f0d829faabd1906f9b36->enter($__internal_78f7962e3aa4fe81a2612c581b17d81e387b679873c1f0d829faabd1906f9b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_78f7962e3aa4fe81a2612c581b17d81e387b679873c1f0d829faabd1906f9b36->leave($__internal_78f7962e3aa4fe81a2612c581b17d81e387b679873c1f0d829faabd1906f9b36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
