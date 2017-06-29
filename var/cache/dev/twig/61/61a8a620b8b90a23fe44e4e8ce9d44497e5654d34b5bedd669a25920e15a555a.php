<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0466688475d826daa49b574fedfe7d2ba19d5a73c42bee218ae9545851201a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_662fcbb3664c85d9ba0d0534cf6d9321c8e7e004ab1722e4e7af0cad8c5eccbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662fcbb3664c85d9ba0d0534cf6d9321c8e7e004ab1722e4e7af0cad8c5eccbf->enter($__internal_662fcbb3664c85d9ba0d0534cf6d9321c8e7e004ab1722e4e7af0cad8c5eccbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_02b85fb5b9e6f21d617acb4db5df710bf275bdff5a804c60b14534f561c8c668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b85fb5b9e6f21d617acb4db5df710bf275bdff5a804c60b14534f561c8c668->enter($__internal_02b85fb5b9e6f21d617acb4db5df710bf275bdff5a804c60b14534f561c8c668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_662fcbb3664c85d9ba0d0534cf6d9321c8e7e004ab1722e4e7af0cad8c5eccbf->leave($__internal_662fcbb3664c85d9ba0d0534cf6d9321c8e7e004ab1722e4e7af0cad8c5eccbf_prof);

        
        $__internal_02b85fb5b9e6f21d617acb4db5df710bf275bdff5a804c60b14534f561c8c668->leave($__internal_02b85fb5b9e6f21d617acb4db5df710bf275bdff5a804c60b14534f561c8c668_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_602995ef985bc7fb586b37804749820574ecf2bd6d21e783360845f200e8a3e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602995ef985bc7fb586b37804749820574ecf2bd6d21e783360845f200e8a3e8->enter($__internal_602995ef985bc7fb586b37804749820574ecf2bd6d21e783360845f200e8a3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cbb72cb19d21c726726fc978978329164a7bfe824ccd0745615faf46bccffeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb72cb19d21c726726fc978978329164a7bfe824ccd0745615faf46bccffeff->enter($__internal_cbb72cb19d21c726726fc978978329164a7bfe824ccd0745615faf46bccffeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_cbb72cb19d21c726726fc978978329164a7bfe824ccd0745615faf46bccffeff->leave($__internal_cbb72cb19d21c726726fc978978329164a7bfe824ccd0745615faf46bccffeff_prof);

        
        $__internal_602995ef985bc7fb586b37804749820574ecf2bd6d21e783360845f200e8a3e8->leave($__internal_602995ef985bc7fb586b37804749820574ecf2bd6d21e783360845f200e8a3e8_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7e6f7820e615f1b958981b615b589a261268e12ab14e6d3e257255fb84f1881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e6f7820e615f1b958981b615b589a261268e12ab14e6d3e257255fb84f1881->enter($__internal_c7e6f7820e615f1b958981b615b589a261268e12ab14e6d3e257255fb84f1881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6715a54ea9d00c1d8967e7ba59ed10fcc2c862ae7b7140c3892bc29ce7992ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6715a54ea9d00c1d8967e7ba59ed10fcc2c862ae7b7140c3892bc29ce7992ca3->enter($__internal_6715a54ea9d00c1d8967e7ba59ed10fcc2c862ae7b7140c3892bc29ce7992ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6715a54ea9d00c1d8967e7ba59ed10fcc2c862ae7b7140c3892bc29ce7992ca3->leave($__internal_6715a54ea9d00c1d8967e7ba59ed10fcc2c862ae7b7140c3892bc29ce7992ca3_prof);

        
        $__internal_c7e6f7820e615f1b958981b615b589a261268e12ab14e6d3e257255fb84f1881->leave($__internal_c7e6f7820e615f1b958981b615b589a261268e12ab14e6d3e257255fb84f1881_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
