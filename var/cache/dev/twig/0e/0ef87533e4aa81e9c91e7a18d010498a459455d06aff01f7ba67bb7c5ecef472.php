<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9afc0560b7250bb3356d72e1bdd7fdfdf7833b811369c0a1778ef3cad583ab97 extends Twig_Template
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
        $__internal_ecd955bde2f9b80a6ca1d186f478fdeb69b8ee865386af3e85ae6af4861b7519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd955bde2f9b80a6ca1d186f478fdeb69b8ee865386af3e85ae6af4861b7519->enter($__internal_ecd955bde2f9b80a6ca1d186f478fdeb69b8ee865386af3e85ae6af4861b7519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_1d314556885eadb21ef7e095151bf1de5ff7eed4b2ffb7e202ad4cd7c9f3f59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d314556885eadb21ef7e095151bf1de5ff7eed4b2ffb7e202ad4cd7c9f3f59b->enter($__internal_1d314556885eadb21ef7e095151bf1de5ff7eed4b2ffb7e202ad4cd7c9f3f59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ecd955bde2f9b80a6ca1d186f478fdeb69b8ee865386af3e85ae6af4861b7519->leave($__internal_ecd955bde2f9b80a6ca1d186f478fdeb69b8ee865386af3e85ae6af4861b7519_prof);

        
        $__internal_1d314556885eadb21ef7e095151bf1de5ff7eed4b2ffb7e202ad4cd7c9f3f59b->leave($__internal_1d314556885eadb21ef7e095151bf1de5ff7eed4b2ffb7e202ad4cd7c9f3f59b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
