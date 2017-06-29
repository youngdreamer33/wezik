<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e2dad7c0d4dcfb1d9458c9884af404c9bfd23aa11c8e55715dc40225dee76591 extends Twig_Template
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
        $__internal_31d274c96c5761837c41e690bb0fd69f857338dae73dc1b54c10aaeaa593618c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d274c96c5761837c41e690bb0fd69f857338dae73dc1b54c10aaeaa593618c->enter($__internal_31d274c96c5761837c41e690bb0fd69f857338dae73dc1b54c10aaeaa593618c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2a4e44afc4828680340dda65ea6d92caec377f02130c4a76c46c501cfda590c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4e44afc4828680340dda65ea6d92caec377f02130c4a76c46c501cfda590c6->enter($__internal_2a4e44afc4828680340dda65ea6d92caec377f02130c4a76c46c501cfda590c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_31d274c96c5761837c41e690bb0fd69f857338dae73dc1b54c10aaeaa593618c->leave($__internal_31d274c96c5761837c41e690bb0fd69f857338dae73dc1b54c10aaeaa593618c_prof);

        
        $__internal_2a4e44afc4828680340dda65ea6d92caec377f02130c4a76c46c501cfda590c6->leave($__internal_2a4e44afc4828680340dda65ea6d92caec377f02130c4a76c46c501cfda590c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
