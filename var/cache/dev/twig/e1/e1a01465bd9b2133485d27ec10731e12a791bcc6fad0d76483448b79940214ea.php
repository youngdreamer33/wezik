<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b9d1b17705ac9e4847598e11da598c5bc6bfce97b7e4a4d98c2cf4c2d18c8b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d58463953f056a9d400e84386d926f3286a0b23c6096b58ef1d7a0ad9ced464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d58463953f056a9d400e84386d926f3286a0b23c6096b58ef1d7a0ad9ced464->enter($__internal_2d58463953f056a9d400e84386d926f3286a0b23c6096b58ef1d7a0ad9ced464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3a5391bb6a303a2ad7704511cffbdb6f2406dcf017459bc18ecdf980d58437fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5391bb6a303a2ad7704511cffbdb6f2406dcf017459bc18ecdf980d58437fc->enter($__internal_3a5391bb6a303a2ad7704511cffbdb6f2406dcf017459bc18ecdf980d58437fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d58463953f056a9d400e84386d926f3286a0b23c6096b58ef1d7a0ad9ced464->leave($__internal_2d58463953f056a9d400e84386d926f3286a0b23c6096b58ef1d7a0ad9ced464_prof);

        
        $__internal_3a5391bb6a303a2ad7704511cffbdb6f2406dcf017459bc18ecdf980d58437fc->leave($__internal_3a5391bb6a303a2ad7704511cffbdb6f2406dcf017459bc18ecdf980d58437fc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80ae424848fbf2e4ea455b265296f97f12be36b9b1f0afb2a1e2f019b0f86b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ae424848fbf2e4ea455b265296f97f12be36b9b1f0afb2a1e2f019b0f86b34->enter($__internal_80ae424848fbf2e4ea455b265296f97f12be36b9b1f0afb2a1e2f019b0f86b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_20139154d342575cdcb04dd007c67a8d64f7b4af1062c03dfd671beb8337632b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20139154d342575cdcb04dd007c67a8d64f7b4af1062c03dfd671beb8337632b->enter($__internal_20139154d342575cdcb04dd007c67a8d64f7b4af1062c03dfd671beb8337632b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_20139154d342575cdcb04dd007c67a8d64f7b4af1062c03dfd671beb8337632b->leave($__internal_20139154d342575cdcb04dd007c67a8d64f7b4af1062c03dfd671beb8337632b_prof);

        
        $__internal_80ae424848fbf2e4ea455b265296f97f12be36b9b1f0afb2a1e2f019b0f86b34->leave($__internal_80ae424848fbf2e4ea455b265296f97f12be36b9b1f0afb2a1e2f019b0f86b34_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_aebdb8fb3012436fcd95df4efbe309d76c06b6688c6750ea5ee1a275c7f34df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebdb8fb3012436fcd95df4efbe309d76c06b6688c6750ea5ee1a275c7f34df2->enter($__internal_aebdb8fb3012436fcd95df4efbe309d76c06b6688c6750ea5ee1a275c7f34df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a619e1fcbd0681edc60e3811fde9e446aa365a82b028340bf5f0fa7eb34e316c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a619e1fcbd0681edc60e3811fde9e446aa365a82b028340bf5f0fa7eb34e316c->enter($__internal_a619e1fcbd0681edc60e3811fde9e446aa365a82b028340bf5f0fa7eb34e316c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_a619e1fcbd0681edc60e3811fde9e446aa365a82b028340bf5f0fa7eb34e316c->leave($__internal_a619e1fcbd0681edc60e3811fde9e446aa365a82b028340bf5f0fa7eb34e316c_prof);

        
        $__internal_aebdb8fb3012436fcd95df4efbe309d76c06b6688c6750ea5ee1a275c7f34df2->leave($__internal_aebdb8fb3012436fcd95df4efbe309d76c06b6688c6750ea5ee1a275c7f34df2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_634b7e0fd08ba82af24dfdd02629224ad2641ae4bf1493ab7b14f327f11cbd3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634b7e0fd08ba82af24dfdd02629224ad2641ae4bf1493ab7b14f327f11cbd3b->enter($__internal_634b7e0fd08ba82af24dfdd02629224ad2641ae4bf1493ab7b14f327f11cbd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16a71491e93865959b805af84b447a068a7b7816995a0ee0f698f20736e41b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a71491e93865959b805af84b447a068a7b7816995a0ee0f698f20736e41b08->enter($__internal_16a71491e93865959b805af84b447a068a7b7816995a0ee0f698f20736e41b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_16a71491e93865959b805af84b447a068a7b7816995a0ee0f698f20736e41b08->leave($__internal_16a71491e93865959b805af84b447a068a7b7816995a0ee0f698f20736e41b08_prof);

        
        $__internal_634b7e0fd08ba82af24dfdd02629224ad2641ae4bf1493ab7b14f327f11cbd3b->leave($__internal_634b7e0fd08ba82af24dfdd02629224ad2641ae4bf1493ab7b14f327f11cbd3b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}