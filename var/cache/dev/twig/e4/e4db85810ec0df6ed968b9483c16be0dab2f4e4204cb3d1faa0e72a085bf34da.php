<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a4a6e37587f790fa77bff5af918fc4d22299769037b1fff8663ac23544938d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_03cc5791fc042dd721c3029d88de8a29cf10f7735f538f73b6c76af277d07ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03cc5791fc042dd721c3029d88de8a29cf10f7735f538f73b6c76af277d07ee7->enter($__internal_03cc5791fc042dd721c3029d88de8a29cf10f7735f538f73b6c76af277d07ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ff85ff8b96e12c7dd12cfeddee2bd1a73bc09d26cc5f4e4a7c92db27d32b233b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff85ff8b96e12c7dd12cfeddee2bd1a73bc09d26cc5f4e4a7c92db27d32b233b->enter($__internal_ff85ff8b96e12c7dd12cfeddee2bd1a73bc09d26cc5f4e4a7c92db27d32b233b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03cc5791fc042dd721c3029d88de8a29cf10f7735f538f73b6c76af277d07ee7->leave($__internal_03cc5791fc042dd721c3029d88de8a29cf10f7735f538f73b6c76af277d07ee7_prof);

        
        $__internal_ff85ff8b96e12c7dd12cfeddee2bd1a73bc09d26cc5f4e4a7c92db27d32b233b->leave($__internal_ff85ff8b96e12c7dd12cfeddee2bd1a73bc09d26cc5f4e4a7c92db27d32b233b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7693d975c7cd14f01ae65f98256b93b52d10ab05f1d6be3cb592b42b3567eee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7693d975c7cd14f01ae65f98256b93b52d10ab05f1d6be3cb592b42b3567eee8->enter($__internal_7693d975c7cd14f01ae65f98256b93b52d10ab05f1d6be3cb592b42b3567eee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_325cc8e0c9ca586ee0c923f37dae65f56f948e45b2377bca67b5e1287ef2ed20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325cc8e0c9ca586ee0c923f37dae65f56f948e45b2377bca67b5e1287ef2ed20->enter($__internal_325cc8e0c9ca586ee0c923f37dae65f56f948e45b2377bca67b5e1287ef2ed20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_325cc8e0c9ca586ee0c923f37dae65f56f948e45b2377bca67b5e1287ef2ed20->leave($__internal_325cc8e0c9ca586ee0c923f37dae65f56f948e45b2377bca67b5e1287ef2ed20_prof);

        
        $__internal_7693d975c7cd14f01ae65f98256b93b52d10ab05f1d6be3cb592b42b3567eee8->leave($__internal_7693d975c7cd14f01ae65f98256b93b52d10ab05f1d6be3cb592b42b3567eee8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac88152bf85e099cbb63c1d01146e3735f991f9907e434b8392fcb4c276fd57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac88152bf85e099cbb63c1d01146e3735f991f9907e434b8392fcb4c276fd57b->enter($__internal_ac88152bf85e099cbb63c1d01146e3735f991f9907e434b8392fcb4c276fd57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae1d584e372856eda87ed5dd2191a7887cb4f61829e69cc81e66f1048f9978b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1d584e372856eda87ed5dd2191a7887cb4f61829e69cc81e66f1048f9978b6->enter($__internal_ae1d584e372856eda87ed5dd2191a7887cb4f61829e69cc81e66f1048f9978b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ae1d584e372856eda87ed5dd2191a7887cb4f61829e69cc81e66f1048f9978b6->leave($__internal_ae1d584e372856eda87ed5dd2191a7887cb4f61829e69cc81e66f1048f9978b6_prof);

        
        $__internal_ac88152bf85e099cbb63c1d01146e3735f991f9907e434b8392fcb4c276fd57b->leave($__internal_ac88152bf85e099cbb63c1d01146e3735f991f9907e434b8392fcb4c276fd57b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_81936779d3928058ddad38e252b136bbae2b3a283c29a27d2d33cbdcdee40de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81936779d3928058ddad38e252b136bbae2b3a283c29a27d2d33cbdcdee40de6->enter($__internal_81936779d3928058ddad38e252b136bbae2b3a283c29a27d2d33cbdcdee40de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1d3e863fd82dca67db9bdace1300bbd6c417d158b93afad26bab5df444fb5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d3e863fd82dca67db9bdace1300bbd6c417d158b93afad26bab5df444fb5c2->enter($__internal_d1d3e863fd82dca67db9bdace1300bbd6c417d158b93afad26bab5df444fb5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_d1d3e863fd82dca67db9bdace1300bbd6c417d158b93afad26bab5df444fb5c2->leave($__internal_d1d3e863fd82dca67db9bdace1300bbd6c417d158b93afad26bab5df444fb5c2_prof);

        
        $__internal_81936779d3928058ddad38e252b136bbae2b3a283c29a27d2d33cbdcdee40de6->leave($__internal_81936779d3928058ddad38e252b136bbae2b3a283c29a27d2d33cbdcdee40de6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
