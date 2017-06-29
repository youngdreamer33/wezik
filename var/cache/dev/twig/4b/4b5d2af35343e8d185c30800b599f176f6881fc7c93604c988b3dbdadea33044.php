<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2b1d2673fd43b209809319f347490c4259a761b0a36bc3bccc3975b3e3762aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b1d2673fd43b209809319f347490c4259a761b0a36bc3bccc3975b3e3762aa->enter($__internal_e2b1d2673fd43b209809319f347490c4259a761b0a36bc3bccc3975b3e3762aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d7f2cc13d191e75484ffe6e8b05d772ebdd799c034ede6f7d3a64646f394ebc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f2cc13d191e75484ffe6e8b05d772ebdd799c034ede6f7d3a64646f394ebc5->enter($__internal_d7f2cc13d191e75484ffe6e8b05d772ebdd799c034ede6f7d3a64646f394ebc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2b1d2673fd43b209809319f347490c4259a761b0a36bc3bccc3975b3e3762aa->leave($__internal_e2b1d2673fd43b209809319f347490c4259a761b0a36bc3bccc3975b3e3762aa_prof);

        
        $__internal_d7f2cc13d191e75484ffe6e8b05d772ebdd799c034ede6f7d3a64646f394ebc5->leave($__internal_d7f2cc13d191e75484ffe6e8b05d772ebdd799c034ede6f7d3a64646f394ebc5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_69441023d50cfa2e757350370e31bc12155fbca157d261925c0c6523195c56f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69441023d50cfa2e757350370e31bc12155fbca157d261925c0c6523195c56f6->enter($__internal_69441023d50cfa2e757350370e31bc12155fbca157d261925c0c6523195c56f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d4bb189c66b99105f57bf27a87fbda023b7ec9362b7dbe1f647f652f247deac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bb189c66b99105f57bf27a87fbda023b7ec9362b7dbe1f647f652f247deac9->enter($__internal_d4bb189c66b99105f57bf27a87fbda023b7ec9362b7dbe1f647f652f247deac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d4bb189c66b99105f57bf27a87fbda023b7ec9362b7dbe1f647f652f247deac9->leave($__internal_d4bb189c66b99105f57bf27a87fbda023b7ec9362b7dbe1f647f652f247deac9_prof);

        
        $__internal_69441023d50cfa2e757350370e31bc12155fbca157d261925c0c6523195c56f6->leave($__internal_69441023d50cfa2e757350370e31bc12155fbca157d261925c0c6523195c56f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4446a5e93f5b6142835aa92b7d9a83d28a4cadaae6371de312f0e860520f5994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4446a5e93f5b6142835aa92b7d9a83d28a4cadaae6371de312f0e860520f5994->enter($__internal_4446a5e93f5b6142835aa92b7d9a83d28a4cadaae6371de312f0e860520f5994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0879815642c717061f5c019b88cbc3c97148a922b5bc01c1e226384d519cd362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0879815642c717061f5c019b88cbc3c97148a922b5bc01c1e226384d519cd362->enter($__internal_0879815642c717061f5c019b88cbc3c97148a922b5bc01c1e226384d519cd362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0879815642c717061f5c019b88cbc3c97148a922b5bc01c1e226384d519cd362->leave($__internal_0879815642c717061f5c019b88cbc3c97148a922b5bc01c1e226384d519cd362_prof);

        
        $__internal_4446a5e93f5b6142835aa92b7d9a83d28a4cadaae6371de312f0e860520f5994->leave($__internal_4446a5e93f5b6142835aa92b7d9a83d28a4cadaae6371de312f0e860520f5994_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c949ded584d61ac1568b90285d22cf2240e2345e7b5f10da73e3ea9de42f715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c949ded584d61ac1568b90285d22cf2240e2345e7b5f10da73e3ea9de42f715->enter($__internal_4c949ded584d61ac1568b90285d22cf2240e2345e7b5f10da73e3ea9de42f715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b82b3a2b8642479da05187d86f3772ef7a4cb582a7c408506e79f9779434a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b82b3a2b8642479da05187d86f3772ef7a4cb582a7c408506e79f9779434a15->enter($__internal_6b82b3a2b8642479da05187d86f3772ef7a4cb582a7c408506e79f9779434a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6b82b3a2b8642479da05187d86f3772ef7a4cb582a7c408506e79f9779434a15->leave($__internal_6b82b3a2b8642479da05187d86f3772ef7a4cb582a7c408506e79f9779434a15_prof);

        
        $__internal_4c949ded584d61ac1568b90285d22cf2240e2345e7b5f10da73e3ea9de42f715->leave($__internal_4c949ded584d61ac1568b90285d22cf2240e2345e7b5f10da73e3ea9de42f715_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
