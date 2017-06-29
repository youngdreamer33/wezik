<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_699018365cc28f64065b4320bf5632339d76c286a1c6be7e97e568f146c1871d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d995ae05aa92b2277cf7f8b199e6c3c4c70c463232d65c9844b46120c78bb532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d995ae05aa92b2277cf7f8b199e6c3c4c70c463232d65c9844b46120c78bb532->enter($__internal_d995ae05aa92b2277cf7f8b199e6c3c4c70c463232d65c9844b46120c78bb532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6ff62b7c8c5c7363985738ff06556cda565dfc194466a8f4376a45632eaf2952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff62b7c8c5c7363985738ff06556cda565dfc194466a8f4376a45632eaf2952->enter($__internal_6ff62b7c8c5c7363985738ff06556cda565dfc194466a8f4376a45632eaf2952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d995ae05aa92b2277cf7f8b199e6c3c4c70c463232d65c9844b46120c78bb532->leave($__internal_d995ae05aa92b2277cf7f8b199e6c3c4c70c463232d65c9844b46120c78bb532_prof);

        
        $__internal_6ff62b7c8c5c7363985738ff06556cda565dfc194466a8f4376a45632eaf2952->leave($__internal_6ff62b7c8c5c7363985738ff06556cda565dfc194466a8f4376a45632eaf2952_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd52f8c642805764a40d0d8c8f7d80711d8c471d2fbd6805da5be03e03a94aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd52f8c642805764a40d0d8c8f7d80711d8c471d2fbd6805da5be03e03a94aab->enter($__internal_fd52f8c642805764a40d0d8c8f7d80711d8c471d2fbd6805da5be03e03a94aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09a0d5a7311936ccbe337b248f4a7346098b8fe9ed5d478f42df4a3c176af083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a0d5a7311936ccbe337b248f4a7346098b8fe9ed5d478f42df4a3c176af083->enter($__internal_09a0d5a7311936ccbe337b248f4a7346098b8fe9ed5d478f42df4a3c176af083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_09a0d5a7311936ccbe337b248f4a7346098b8fe9ed5d478f42df4a3c176af083->leave($__internal_09a0d5a7311936ccbe337b248f4a7346098b8fe9ed5d478f42df4a3c176af083_prof);

        
        $__internal_fd52f8c642805764a40d0d8c8f7d80711d8c471d2fbd6805da5be03e03a94aab->leave($__internal_fd52f8c642805764a40d0d8c8f7d80711d8c471d2fbd6805da5be03e03a94aab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d39d38845afef49bfd7663c4c606e2b18efb84914925ddbdb5fde75717a2c3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39d38845afef49bfd7663c4c606e2b18efb84914925ddbdb5fde75717a2c3fa->enter($__internal_d39d38845afef49bfd7663c4c606e2b18efb84914925ddbdb5fde75717a2c3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88428d275a89e91d0371fc0744f92cdfad1dec27165bc33c98f46aeb9df1b96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88428d275a89e91d0371fc0744f92cdfad1dec27165bc33c98f46aeb9df1b96d->enter($__internal_88428d275a89e91d0371fc0744f92cdfad1dec27165bc33c98f46aeb9df1b96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_88428d275a89e91d0371fc0744f92cdfad1dec27165bc33c98f46aeb9df1b96d->leave($__internal_88428d275a89e91d0371fc0744f92cdfad1dec27165bc33c98f46aeb9df1b96d_prof);

        
        $__internal_d39d38845afef49bfd7663c4c606e2b18efb84914925ddbdb5fde75717a2c3fa->leave($__internal_d39d38845afef49bfd7663c4c606e2b18efb84914925ddbdb5fde75717a2c3fa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
