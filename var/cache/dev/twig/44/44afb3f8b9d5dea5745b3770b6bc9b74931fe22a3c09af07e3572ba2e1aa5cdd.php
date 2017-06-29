<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_040f005e3f7b92215fb4d678758d40ac2cd73e00df22c12202df4d1a38f5136b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_eaee4ce41af3e86bb4364837bd0849688f6170aa2457706d322bd0dbf83bbf15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaee4ce41af3e86bb4364837bd0849688f6170aa2457706d322bd0dbf83bbf15->enter($__internal_eaee4ce41af3e86bb4364837bd0849688f6170aa2457706d322bd0dbf83bbf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c07d9ad9734981069040d0c093975a9946ad1a34571d9163c96dda3fdda8d5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07d9ad9734981069040d0c093975a9946ad1a34571d9163c96dda3fdda8d5b7->enter($__internal_c07d9ad9734981069040d0c093975a9946ad1a34571d9163c96dda3fdda8d5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaee4ce41af3e86bb4364837bd0849688f6170aa2457706d322bd0dbf83bbf15->leave($__internal_eaee4ce41af3e86bb4364837bd0849688f6170aa2457706d322bd0dbf83bbf15_prof);

        
        $__internal_c07d9ad9734981069040d0c093975a9946ad1a34571d9163c96dda3fdda8d5b7->leave($__internal_c07d9ad9734981069040d0c093975a9946ad1a34571d9163c96dda3fdda8d5b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f2fdbc0d1f146071848499247581cb6c2b3e6d34e161ce52652ba97184c11fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2fdbc0d1f146071848499247581cb6c2b3e6d34e161ce52652ba97184c11fa8->enter($__internal_f2fdbc0d1f146071848499247581cb6c2b3e6d34e161ce52652ba97184c11fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2c89d013ed50c9bc5316078dc1869113fc3eba4f0aa9c55bf8b7511afc8632fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c89d013ed50c9bc5316078dc1869113fc3eba4f0aa9c55bf8b7511afc8632fe->enter($__internal_2c89d013ed50c9bc5316078dc1869113fc3eba4f0aa9c55bf8b7511afc8632fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c89d013ed50c9bc5316078dc1869113fc3eba4f0aa9c55bf8b7511afc8632fe->leave($__internal_2c89d013ed50c9bc5316078dc1869113fc3eba4f0aa9c55bf8b7511afc8632fe_prof);

        
        $__internal_f2fdbc0d1f146071848499247581cb6c2b3e6d34e161ce52652ba97184c11fa8->leave($__internal_f2fdbc0d1f146071848499247581cb6c2b3e6d34e161ce52652ba97184c11fa8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7776cd33f15efcbe62a2a6820c10248795cedac987a03ec13920bcb3af08d034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7776cd33f15efcbe62a2a6820c10248795cedac987a03ec13920bcb3af08d034->enter($__internal_7776cd33f15efcbe62a2a6820c10248795cedac987a03ec13920bcb3af08d034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c024b3115571441176990bac04336e6f16207be5b3998e23effe04af774f5d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c024b3115571441176990bac04336e6f16207be5b3998e23effe04af774f5d2e->enter($__internal_c024b3115571441176990bac04336e6f16207be5b3998e23effe04af774f5d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c024b3115571441176990bac04336e6f16207be5b3998e23effe04af774f5d2e->leave($__internal_c024b3115571441176990bac04336e6f16207be5b3998e23effe04af774f5d2e_prof);

        
        $__internal_7776cd33f15efcbe62a2a6820c10248795cedac987a03ec13920bcb3af08d034->leave($__internal_7776cd33f15efcbe62a2a6820c10248795cedac987a03ec13920bcb3af08d034_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c79376f360d64cc3d8afa0fd996876bb81c6334e725fdc3b5e3c4021fcd5c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c79376f360d64cc3d8afa0fd996876bb81c6334e725fdc3b5e3c4021fcd5c85->enter($__internal_2c79376f360d64cc3d8afa0fd996876bb81c6334e725fdc3b5e3c4021fcd5c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7579d8873256f0ff5ffe95009b8ebcd76d864e7d92290604b3b5f75d036c7970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7579d8873256f0ff5ffe95009b8ebcd76d864e7d92290604b3b5f75d036c7970->enter($__internal_7579d8873256f0ff5ffe95009b8ebcd76d864e7d92290604b3b5f75d036c7970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7579d8873256f0ff5ffe95009b8ebcd76d864e7d92290604b3b5f75d036c7970->leave($__internal_7579d8873256f0ff5ffe95009b8ebcd76d864e7d92290604b3b5f75d036c7970_prof);

        
        $__internal_2c79376f360d64cc3d8afa0fd996876bb81c6334e725fdc3b5e3c4021fcd5c85->leave($__internal_2c79376f360d64cc3d8afa0fd996876bb81c6334e725fdc3b5e3c4021fcd5c85_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
