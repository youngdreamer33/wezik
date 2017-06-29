<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_866b3be99087751bd491ce3f7262407e8f0ef8cfefca128e10ea32c6144eeebf extends Twig_Template
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
        $__internal_ec5ae26ef8ca1b831d2e31d8e0a117475643dc59dabbbf773d76484d354664e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5ae26ef8ca1b831d2e31d8e0a117475643dc59dabbbf773d76484d354664e5->enter($__internal_ec5ae26ef8ca1b831d2e31d8e0a117475643dc59dabbbf773d76484d354664e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_c29279aa4b52f2ff9e552b96f2456189d10cc2783b34c20f37b0ecba1bf42aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29279aa4b52f2ff9e552b96f2456189d10cc2783b34c20f37b0ecba1bf42aca->enter($__internal_c29279aa4b52f2ff9e552b96f2456189d10cc2783b34c20f37b0ecba1bf42aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_ec5ae26ef8ca1b831d2e31d8e0a117475643dc59dabbbf773d76484d354664e5->leave($__internal_ec5ae26ef8ca1b831d2e31d8e0a117475643dc59dabbbf773d76484d354664e5_prof);

        
        $__internal_c29279aa4b52f2ff9e552b96f2456189d10cc2783b34c20f37b0ecba1bf42aca->leave($__internal_c29279aa4b52f2ff9e552b96f2456189d10cc2783b34c20f37b0ecba1bf42aca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
