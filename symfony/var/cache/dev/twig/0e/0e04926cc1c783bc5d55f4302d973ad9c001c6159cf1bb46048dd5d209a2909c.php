<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_402b70634b0012a4c438568a84b76ee4cd017ef7c6ce979eaad43a03901e0996 extends Twig_Template
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
        $__internal_56f3842eef2e17e8c4c776dcfd850163ac175e844eaa9200da2edd141f8a3af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f3842eef2e17e8c4c776dcfd850163ac175e844eaa9200da2edd141f8a3af8->enter($__internal_56f3842eef2e17e8c4c776dcfd850163ac175e844eaa9200da2edd141f8a3af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_56f3842eef2e17e8c4c776dcfd850163ac175e844eaa9200da2edd141f8a3af8->leave($__internal_56f3842eef2e17e8c4c776dcfd850163ac175e844eaa9200da2edd141f8a3af8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/symfony/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
