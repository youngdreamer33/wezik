<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d34c91183d83201f95d30908cac90a23e97b7eda4b9e25c96acb9ad902ab1554 extends Twig_Template
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
        $__internal_035276a4ffb501c2708d881d79f7b42acc4105b05a00dfb5c8b067bf1d00448a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035276a4ffb501c2708d881d79f7b42acc4105b05a00dfb5c8b067bf1d00448a->enter($__internal_035276a4ffb501c2708d881d79f7b42acc4105b05a00dfb5c8b067bf1d00448a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ae97acbd40e34557c796787c71638425404b14374180cbaa9f51705488c4ca09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae97acbd40e34557c796787c71638425404b14374180cbaa9f51705488c4ca09->enter($__internal_ae97acbd40e34557c796787c71638425404b14374180cbaa9f51705488c4ca09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_035276a4ffb501c2708d881d79f7b42acc4105b05a00dfb5c8b067bf1d00448a->leave($__internal_035276a4ffb501c2708d881d79f7b42acc4105b05a00dfb5c8b067bf1d00448a_prof);

        
        $__internal_ae97acbd40e34557c796787c71638425404b14374180cbaa9f51705488c4ca09->leave($__internal_ae97acbd40e34557c796787c71638425404b14374180cbaa9f51705488c4ca09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
