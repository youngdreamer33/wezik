<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_50b743741f922278c5f151bafa5bfeb6c9ca1ef75d6a308a49493060c1d6adbe extends Twig_Template
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
        $__internal_9a1ae83a8daa241e02ad291195f4485fc216a92c3dd219155e7e74fa7628af2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1ae83a8daa241e02ad291195f4485fc216a92c3dd219155e7e74fa7628af2e->enter($__internal_9a1ae83a8daa241e02ad291195f4485fc216a92c3dd219155e7e74fa7628af2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_dd6aef8106c96b68e0b3ebb8e4fcd2217056877414553e088967544cf0b6e6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6aef8106c96b68e0b3ebb8e4fcd2217056877414553e088967544cf0b6e6e2->enter($__internal_dd6aef8106c96b68e0b3ebb8e4fcd2217056877414553e088967544cf0b6e6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9a1ae83a8daa241e02ad291195f4485fc216a92c3dd219155e7e74fa7628af2e->leave($__internal_9a1ae83a8daa241e02ad291195f4485fc216a92c3dd219155e7e74fa7628af2e_prof);

        
        $__internal_dd6aef8106c96b68e0b3ebb8e4fcd2217056877414553e088967544cf0b6e6e2->leave($__internal_dd6aef8106c96b68e0b3ebb8e4fcd2217056877414553e088967544cf0b6e6e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
