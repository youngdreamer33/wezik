<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ed44ccb324f4f143a2640b561c9e7fe2fb993f68d73366128d76d9e407b9c906 extends Twig_Template
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
        $__internal_a0fa0e831e2ff84affadd13fe2253f1f0f1ee872972c8feeaff9b5c17140d9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0fa0e831e2ff84affadd13fe2253f1f0f1ee872972c8feeaff9b5c17140d9cf->enter($__internal_a0fa0e831e2ff84affadd13fe2253f1f0f1ee872972c8feeaff9b5c17140d9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b9eddc3a698dd215d210f40493433c578ff8d38a393ae6f21a275e2f6f84422b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9eddc3a698dd215d210f40493433c578ff8d38a393ae6f21a275e2f6f84422b->enter($__internal_b9eddc3a698dd215d210f40493433c578ff8d38a393ae6f21a275e2f6f84422b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a0fa0e831e2ff84affadd13fe2253f1f0f1ee872972c8feeaff9b5c17140d9cf->leave($__internal_a0fa0e831e2ff84affadd13fe2253f1f0f1ee872972c8feeaff9b5c17140d9cf_prof);

        
        $__internal_b9eddc3a698dd215d210f40493433c578ff8d38a393ae6f21a275e2f6f84422b->leave($__internal_b9eddc3a698dd215d210f40493433c578ff8d38a393ae6f21a275e2f6f84422b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
