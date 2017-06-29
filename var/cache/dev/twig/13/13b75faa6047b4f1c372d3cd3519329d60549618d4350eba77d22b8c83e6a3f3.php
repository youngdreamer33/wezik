<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_84e161a462a530634dcc1aedda20146ddf76351be68a1f6b37891a1d006b9b42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85bb023339324a22f644de7988fcc16c2955ebe8a9511799cead9e2ee2154030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85bb023339324a22f644de7988fcc16c2955ebe8a9511799cead9e2ee2154030->enter($__internal_85bb023339324a22f644de7988fcc16c2955ebe8a9511799cead9e2ee2154030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5d1b8164b974da9199f039f7b63ac73f6ea356dbd12a12b5554482bcf04cbe5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1b8164b974da9199f039f7b63ac73f6ea356dbd12a12b5554482bcf04cbe5b->enter($__internal_5d1b8164b974da9199f039f7b63ac73f6ea356dbd12a12b5554482bcf04cbe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85bb023339324a22f644de7988fcc16c2955ebe8a9511799cead9e2ee2154030->leave($__internal_85bb023339324a22f644de7988fcc16c2955ebe8a9511799cead9e2ee2154030_prof);

        
        $__internal_5d1b8164b974da9199f039f7b63ac73f6ea356dbd12a12b5554482bcf04cbe5b->leave($__internal_5d1b8164b974da9199f039f7b63ac73f6ea356dbd12a12b5554482bcf04cbe5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_886bff59e538aecc12b67dcadecdfc641db8a2a7b85cfe536171f6ba164422d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886bff59e538aecc12b67dcadecdfc641db8a2a7b85cfe536171f6ba164422d0->enter($__internal_886bff59e538aecc12b67dcadecdfc641db8a2a7b85cfe536171f6ba164422d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_16037f8385d79889bb3f67dd5d487619b9c4e70c3113cee89e835607ec0d6043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16037f8385d79889bb3f67dd5d487619b9c4e70c3113cee89e835607ec0d6043->enter($__internal_16037f8385d79889bb3f67dd5d487619b9c4e70c3113cee89e835607ec0d6043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_16037f8385d79889bb3f67dd5d487619b9c4e70c3113cee89e835607ec0d6043->leave($__internal_16037f8385d79889bb3f67dd5d487619b9c4e70c3113cee89e835607ec0d6043_prof);

        
        $__internal_886bff59e538aecc12b67dcadecdfc641db8a2a7b85cfe536171f6ba164422d0->leave($__internal_886bff59e538aecc12b67dcadecdfc641db8a2a7b85cfe536171f6ba164422d0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fb700c8c3021773f7435f0005b54f8749c6f3695a9071706e523db6d1742efc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb700c8c3021773f7435f0005b54f8749c6f3695a9071706e523db6d1742efc->enter($__internal_9fb700c8c3021773f7435f0005b54f8749c6f3695a9071706e523db6d1742efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_602e93309d5a0e92eee1b4216be93649e727a6e21a7da876e0055c86369aeec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602e93309d5a0e92eee1b4216be93649e727a6e21a7da876e0055c86369aeec8->enter($__internal_602e93309d5a0e92eee1b4216be93649e727a6e21a7da876e0055c86369aeec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_602e93309d5a0e92eee1b4216be93649e727a6e21a7da876e0055c86369aeec8->leave($__internal_602e93309d5a0e92eee1b4216be93649e727a6e21a7da876e0055c86369aeec8_prof);

        
        $__internal_9fb700c8c3021773f7435f0005b54f8749c6f3695a9071706e523db6d1742efc->leave($__internal_9fb700c8c3021773f7435f0005b54f8749c6f3695a9071706e523db6d1742efc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
