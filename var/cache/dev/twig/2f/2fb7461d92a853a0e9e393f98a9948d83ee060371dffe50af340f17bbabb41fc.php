<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1de18aa0e347550c1c9fa02b153aa2c94e67f70404a9705eb7e87ea4a3f86e9d extends Twig_Template
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
        $__internal_d239b59bd0952180c9c650fd3e8337eb69660bdcdb4565542815bd7bc72dc355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d239b59bd0952180c9c650fd3e8337eb69660bdcdb4565542815bd7bc72dc355->enter($__internal_d239b59bd0952180c9c650fd3e8337eb69660bdcdb4565542815bd7bc72dc355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3b437854dc9758a8ff8cd8f5ea2dd8cec42507959799eebe9d95faab4d06a6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b437854dc9758a8ff8cd8f5ea2dd8cec42507959799eebe9d95faab4d06a6a5->enter($__internal_3b437854dc9758a8ff8cd8f5ea2dd8cec42507959799eebe9d95faab4d06a6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d239b59bd0952180c9c650fd3e8337eb69660bdcdb4565542815bd7bc72dc355->leave($__internal_d239b59bd0952180c9c650fd3e8337eb69660bdcdb4565542815bd7bc72dc355_prof);

        
        $__internal_3b437854dc9758a8ff8cd8f5ea2dd8cec42507959799eebe9d95faab4d06a6a5->leave($__internal_3b437854dc9758a8ff8cd8f5ea2dd8cec42507959799eebe9d95faab4d06a6a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
