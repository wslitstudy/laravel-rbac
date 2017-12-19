<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_04d16569e50509ebcd294ef2fac819cda34be6708792e316ca73889d2d88ca1d extends Twig_Template
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
        $__internal_660b2f423819acab7d484be73664beff25474cb515b528e83b35e4f72b78f783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660b2f423819acab7d484be73664beff25474cb515b528e83b35e4f72b78f783->enter($__internal_660b2f423819acab7d484be73664beff25474cb515b528e83b35e4f72b78f783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_660b2f423819acab7d484be73664beff25474cb515b528e83b35e4f72b78f783->leave($__internal_660b2f423819acab7d484be73664beff25474cb515b528e83b35e4f72b78f783_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
