<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0c325bb6743e66603b40650e4c6e92d64fb006a4f7b27bd73f127e1445be5e63 extends Twig_Template
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
        $__internal_e006260ab8994b2f2b78f1555b54d6432954195b60f2ef8a72aa3adcb575c6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e006260ab8994b2f2b78f1555b54d6432954195b60f2ef8a72aa3adcb575c6af->enter($__internal_e006260ab8994b2f2b78f1555b54d6432954195b60f2ef8a72aa3adcb575c6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e006260ab8994b2f2b78f1555b54d6432954195b60f2ef8a72aa3adcb575c6af->leave($__internal_e006260ab8994b2f2b78f1555b54d6432954195b60f2ef8a72aa3adcb575c6af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
