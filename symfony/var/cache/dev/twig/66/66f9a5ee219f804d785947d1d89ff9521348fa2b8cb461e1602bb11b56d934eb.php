<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d3e576470714dbe2eda63023787acda1e84fbc13b279921901d2bce327ee3e9b extends Twig_Template
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
        $__internal_c1ebafc9ec0c89bdd70f8046e09edffcdbe2b9a972aa9dd04a02f12a7cf2c4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ebafc9ec0c89bdd70f8046e09edffcdbe2b9a972aa9dd04a02f12a7cf2c4e8->enter($__internal_c1ebafc9ec0c89bdd70f8046e09edffcdbe2b9a972aa9dd04a02f12a7cf2c4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c1ebafc9ec0c89bdd70f8046e09edffcdbe2b9a972aa9dd04a02f12a7cf2c4e8->leave($__internal_c1ebafc9ec0c89bdd70f8046e09edffcdbe2b9a972aa9dd04a02f12a7cf2c4e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
