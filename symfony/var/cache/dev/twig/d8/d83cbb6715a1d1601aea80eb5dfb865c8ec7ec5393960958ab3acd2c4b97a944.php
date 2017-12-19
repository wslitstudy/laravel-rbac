<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_f4565fe60a57de899b0dd7ccdf867b3385b5a37fcd3253ccd4be5f1b3422a166 extends Twig_Template
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
        $__internal_529d689d146689bbf711ecf6c55b84be3a8cc6b6a335619e6134eb8c705b7523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529d689d146689bbf711ecf6c55b84be3a8cc6b6a335619e6134eb8c705b7523->enter($__internal_529d689d146689bbf711ecf6c55b84be3a8cc6b6a335619e6134eb8c705b7523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_529d689d146689bbf711ecf6c55b84be3a8cc6b6a335619e6134eb8c705b7523->leave($__internal_529d689d146689bbf711ecf6c55b84be3a8cc6b6a335619e6134eb8c705b7523_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
