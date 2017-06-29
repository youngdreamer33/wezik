<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_ded9e9cb8095996114aeb9566e6fe10d2a6535fd3cf73692b72e8135afef77b2 extends Twig_Template
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
        $__internal_dae92b997fae22634369617c60e9fdebda962d405f13b04f67f2bb3c3428c354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae92b997fae22634369617c60e9fdebda962d405f13b04f67f2bb3c3428c354->enter($__internal_dae92b997fae22634369617c60e9fdebda962d405f13b04f67f2bb3c3428c354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_545a3ef69188a62219b82aa1edd9344b8b51a8e630a9c86f0f6dd43882504223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545a3ef69188a62219b82aa1edd9344b8b51a8e630a9c86f0f6dd43882504223->enter($__internal_545a3ef69188a62219b82aa1edd9344b8b51a8e630a9c86f0f6dd43882504223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_dae92b997fae22634369617c60e9fdebda962d405f13b04f67f2bb3c3428c354->leave($__internal_dae92b997fae22634369617c60e9fdebda962d405f13b04f67f2bb3c3428c354_prof);

        
        $__internal_545a3ef69188a62219b82aa1edd9344b8b51a8e630a9c86f0f6dd43882504223->leave($__internal_545a3ef69188a62219b82aa1edd9344b8b51a8e630a9c86f0f6dd43882504223_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
