<?php

/* ::base.html.twig */
class __TwigTemplate_f46a70bb61ce272715b55e421e21b7aded4d320ede333ab799487224ab9e0970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_079743c6c4767ba0e286c3acc77151131219fcaa64539ab01f97ae738aa54eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079743c6c4767ba0e286c3acc77151131219fcaa64539ab01f97ae738aa54eaa->enter($__internal_079743c6c4767ba0e286c3acc77151131219fcaa64539ab01f97ae738aa54eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_357dc1bfda5112022c8a45f02fa9addbc07602ba65be747a09904800d049b044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357dc1bfda5112022c8a45f02fa9addbc07602ba65be747a09904800d049b044->enter($__internal_357dc1bfda5112022c8a45f02fa9addbc07602ba65be747a09904800d049b044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_079743c6c4767ba0e286c3acc77151131219fcaa64539ab01f97ae738aa54eaa->leave($__internal_079743c6c4767ba0e286c3acc77151131219fcaa64539ab01f97ae738aa54eaa_prof);

        
        $__internal_357dc1bfda5112022c8a45f02fa9addbc07602ba65be747a09904800d049b044->leave($__internal_357dc1bfda5112022c8a45f02fa9addbc07602ba65be747a09904800d049b044_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df70c9d219a6bef06e4c711e4fd7b305a4bf82f17bce8e9ba198df63929a7c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df70c9d219a6bef06e4c711e4fd7b305a4bf82f17bce8e9ba198df63929a7c9f->enter($__internal_df70c9d219a6bef06e4c711e4fd7b305a4bf82f17bce8e9ba198df63929a7c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d14d0992083727d8701f1214f61774998d2d8bbc3809feb7c15ffbdb46ae9cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14d0992083727d8701f1214f61774998d2d8bbc3809feb7c15ffbdb46ae9cb4->enter($__internal_d14d0992083727d8701f1214f61774998d2d8bbc3809feb7c15ffbdb46ae9cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d14d0992083727d8701f1214f61774998d2d8bbc3809feb7c15ffbdb46ae9cb4->leave($__internal_d14d0992083727d8701f1214f61774998d2d8bbc3809feb7c15ffbdb46ae9cb4_prof);

        
        $__internal_df70c9d219a6bef06e4c711e4fd7b305a4bf82f17bce8e9ba198df63929a7c9f->leave($__internal_df70c9d219a6bef06e4c711e4fd7b305a4bf82f17bce8e9ba198df63929a7c9f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9b4a01aec22397de02ecbbaa8987eac29c90823b44f242a4332674bb9c8d7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b4a01aec22397de02ecbbaa8987eac29c90823b44f242a4332674bb9c8d7c7->enter($__internal_a9b4a01aec22397de02ecbbaa8987eac29c90823b44f242a4332674bb9c8d7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f30d865b8c38d896aa79167bccac038743cb63cac14f80fa2fbe963f466cd7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30d865b8c38d896aa79167bccac038743cb63cac14f80fa2fbe963f466cd7d3->enter($__internal_f30d865b8c38d896aa79167bccac038743cb63cac14f80fa2fbe963f466cd7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f30d865b8c38d896aa79167bccac038743cb63cac14f80fa2fbe963f466cd7d3->leave($__internal_f30d865b8c38d896aa79167bccac038743cb63cac14f80fa2fbe963f466cd7d3_prof);

        
        $__internal_a9b4a01aec22397de02ecbbaa8987eac29c90823b44f242a4332674bb9c8d7c7->leave($__internal_a9b4a01aec22397de02ecbbaa8987eac29c90823b44f242a4332674bb9c8d7c7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f26096b9d8523bd5471acf2606986d67b2096988508b20b783ceecd85197862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f26096b9d8523bd5471acf2606986d67b2096988508b20b783ceecd85197862->enter($__internal_4f26096b9d8523bd5471acf2606986d67b2096988508b20b783ceecd85197862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32fd7c6e457bf4d7bb41d8cc07629cfc88071739f9cf28f233a57ad7ee5c43e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fd7c6e457bf4d7bb41d8cc07629cfc88071739f9cf28f233a57ad7ee5c43e8->enter($__internal_32fd7c6e457bf4d7bb41d8cc07629cfc88071739f9cf28f233a57ad7ee5c43e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_32fd7c6e457bf4d7bb41d8cc07629cfc88071739f9cf28f233a57ad7ee5c43e8->leave($__internal_32fd7c6e457bf4d7bb41d8cc07629cfc88071739f9cf28f233a57ad7ee5c43e8_prof);

        
        $__internal_4f26096b9d8523bd5471acf2606986d67b2096988508b20b783ceecd85197862->leave($__internal_4f26096b9d8523bd5471acf2606986d67b2096988508b20b783ceecd85197862_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b62dd98294ab85043b06c2e9e4588dbe9a34b8c7722f335b6f3423d367b74c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62dd98294ab85043b06c2e9e4588dbe9a34b8c7722f335b6f3423d367b74c02->enter($__internal_b62dd98294ab85043b06c2e9e4588dbe9a34b8c7722f335b6f3423d367b74c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cf5ffe041b1075ed20a6c227d75695d2bef381b7d606d59382a9d92e60b4240d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5ffe041b1075ed20a6c227d75695d2bef381b7d606d59382a9d92e60b4240d->enter($__internal_cf5ffe041b1075ed20a6c227d75695d2bef381b7d606d59382a9d92e60b4240d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cf5ffe041b1075ed20a6c227d75695d2bef381b7d606d59382a9d92e60b4240d->leave($__internal_cf5ffe041b1075ed20a6c227d75695d2bef381b7d606d59382a9d92e60b4240d_prof);

        
        $__internal_b62dd98294ab85043b06c2e9e4588dbe9a34b8c7722f335b6f3423d367b74c02->leave($__internal_b62dd98294ab85043b06c2e9e4588dbe9a34b8c7722f335b6f3423d367b74c02_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/app/Resources/views/base.html.twig");
    }
}
