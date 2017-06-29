<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_77a1ff245460bac62247a1380e182f707ae673bb95def171bf86e9e582393709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_1659ffeb3e33c2ea0f35980e338e0839520da52c11841db9564397f5b179bda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1659ffeb3e33c2ea0f35980e338e0839520da52c11841db9564397f5b179bda0->enter($__internal_1659ffeb3e33c2ea0f35980e338e0839520da52c11841db9564397f5b179bda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f89925a6fb29fec9d0db52bccb9f72371f7b23538c2ce64bf7cb7cc9b3061b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89925a6fb29fec9d0db52bccb9f72371f7b23538c2ce64bf7cb7cc9b3061b71->enter($__internal_f89925a6fb29fec9d0db52bccb9f72371f7b23538c2ce64bf7cb7cc9b3061b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1659ffeb3e33c2ea0f35980e338e0839520da52c11841db9564397f5b179bda0->leave($__internal_1659ffeb3e33c2ea0f35980e338e0839520da52c11841db9564397f5b179bda0_prof);

        
        $__internal_f89925a6fb29fec9d0db52bccb9f72371f7b23538c2ce64bf7cb7cc9b3061b71->leave($__internal_f89925a6fb29fec9d0db52bccb9f72371f7b23538c2ce64bf7cb7cc9b3061b71_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20a9230605b5836ef74e6b460a346fc51fdde8b31b3d6f97ec18ad6e4e4ec089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a9230605b5836ef74e6b460a346fc51fdde8b31b3d6f97ec18ad6e4e4ec089->enter($__internal_20a9230605b5836ef74e6b460a346fc51fdde8b31b3d6f97ec18ad6e4e4ec089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc844342df4e43d48b10bdec5e960b7f017703c4946fa01de471d48d50ad198f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc844342df4e43d48b10bdec5e960b7f017703c4946fa01de471d48d50ad198f->enter($__internal_bc844342df4e43d48b10bdec5e960b7f017703c4946fa01de471d48d50ad198f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bc844342df4e43d48b10bdec5e960b7f017703c4946fa01de471d48d50ad198f->leave($__internal_bc844342df4e43d48b10bdec5e960b7f017703c4946fa01de471d48d50ad198f_prof);

        
        $__internal_20a9230605b5836ef74e6b460a346fc51fdde8b31b3d6f97ec18ad6e4e4ec089->leave($__internal_20a9230605b5836ef74e6b460a346fc51fdde8b31b3d6f97ec18ad6e4e4ec089_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee72b2a6c8a85c0897590a3e70b0a6fb71c947303d34245a41d21f6a5cee9bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee72b2a6c8a85c0897590a3e70b0a6fb71c947303d34245a41d21f6a5cee9bff->enter($__internal_ee72b2a6c8a85c0897590a3e70b0a6fb71c947303d34245a41d21f6a5cee9bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3c8506e3eda764d82244245c074de350ae8250ab5627a81705baa7e5863a2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c8506e3eda764d82244245c074de350ae8250ab5627a81705baa7e5863a2bb->enter($__internal_e3c8506e3eda764d82244245c074de350ae8250ab5627a81705baa7e5863a2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_e3c8506e3eda764d82244245c074de350ae8250ab5627a81705baa7e5863a2bb->leave($__internal_e3c8506e3eda764d82244245c074de350ae8250ab5627a81705baa7e5863a2bb_prof);

        
        $__internal_ee72b2a6c8a85c0897590a3e70b0a6fb71c947303d34245a41d21f6a5cee9bff->leave($__internal_ee72b2a6c8a85c0897590a3e70b0a6fb71c947303d34245a41d21f6a5cee9bff_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1442cc854f34c0e9269c7e5dd6cbff5a6c596e52579bc697c7778e1c67b5d204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1442cc854f34c0e9269c7e5dd6cbff5a6c596e52579bc697c7778e1c67b5d204->enter($__internal_1442cc854f34c0e9269c7e5dd6cbff5a6c596e52579bc697c7778e1c67b5d204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62b07a1c7ede3533db0162dec5853179f31c06b3ac30ed4b02eb8fe20b804cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b07a1c7ede3533db0162dec5853179f31c06b3ac30ed4b02eb8fe20b804cde->enter($__internal_62b07a1c7ede3533db0162dec5853179f31c06b3ac30ed4b02eb8fe20b804cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_62b07a1c7ede3533db0162dec5853179f31c06b3ac30ed4b02eb8fe20b804cde->leave($__internal_62b07a1c7ede3533db0162dec5853179f31c06b3ac30ed4b02eb8fe20b804cde_prof);

        
        $__internal_1442cc854f34c0e9269c7e5dd6cbff5a6c596e52579bc697c7778e1c67b5d204->leave($__internal_1442cc854f34c0e9269c7e5dd6cbff5a6c596e52579bc697c7778e1c67b5d204_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
