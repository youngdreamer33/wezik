<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b96d7e4e18372ee6749877fac4c4d3341d21f702806a5e10e17ef2d4113e6768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_b2beebe7eaa59ed239bfe4b6179c2ce46a2a576dd965559f1f5fda37936f5cb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2beebe7eaa59ed239bfe4b6179c2ce46a2a576dd965559f1f5fda37936f5cb7->enter($__internal_b2beebe7eaa59ed239bfe4b6179c2ce46a2a576dd965559f1f5fda37936f5cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_92ba616e27a8c94227c5f3a0ed33fa266cd2092cb635d820bd7d1f39cd0cd348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ba616e27a8c94227c5f3a0ed33fa266cd2092cb635d820bd7d1f39cd0cd348->enter($__internal_92ba616e27a8c94227c5f3a0ed33fa266cd2092cb635d820bd7d1f39cd0cd348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2beebe7eaa59ed239bfe4b6179c2ce46a2a576dd965559f1f5fda37936f5cb7->leave($__internal_b2beebe7eaa59ed239bfe4b6179c2ce46a2a576dd965559f1f5fda37936f5cb7_prof);

        
        $__internal_92ba616e27a8c94227c5f3a0ed33fa266cd2092cb635d820bd7d1f39cd0cd348->leave($__internal_92ba616e27a8c94227c5f3a0ed33fa266cd2092cb635d820bd7d1f39cd0cd348_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ccdaa0cca10902b4024093b693581b41be3ec87c7040fb1e5a75ae4f179b4fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccdaa0cca10902b4024093b693581b41be3ec87c7040fb1e5a75ae4f179b4fc9->enter($__internal_ccdaa0cca10902b4024093b693581b41be3ec87c7040fb1e5a75ae4f179b4fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_51e6a7ccffb2c6bb457e42c86e0f5ab8c58ffdb9062c61cfc2f15992d69348d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e6a7ccffb2c6bb457e42c86e0f5ab8c58ffdb9062c61cfc2f15992d69348d8->enter($__internal_51e6a7ccffb2c6bb457e42c86e0f5ab8c58ffdb9062c61cfc2f15992d69348d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_51e6a7ccffb2c6bb457e42c86e0f5ab8c58ffdb9062c61cfc2f15992d69348d8->leave($__internal_51e6a7ccffb2c6bb457e42c86e0f5ab8c58ffdb9062c61cfc2f15992d69348d8_prof);

        
        $__internal_ccdaa0cca10902b4024093b693581b41be3ec87c7040fb1e5a75ae4f179b4fc9->leave($__internal_ccdaa0cca10902b4024093b693581b41be3ec87c7040fb1e5a75ae4f179b4fc9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_683f8504667972e6ae2893f00f206b7941ad8139a09757bc5dce74eead2d298d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683f8504667972e6ae2893f00f206b7941ad8139a09757bc5dce74eead2d298d->enter($__internal_683f8504667972e6ae2893f00f206b7941ad8139a09757bc5dce74eead2d298d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_869c7537d9503b235edb446dc7bdcfc38c7bc8a6608f7991786df077436ec45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869c7537d9503b235edb446dc7bdcfc38c7bc8a6608f7991786df077436ec45c->enter($__internal_869c7537d9503b235edb446dc7bdcfc38c7bc8a6608f7991786df077436ec45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_869c7537d9503b235edb446dc7bdcfc38c7bc8a6608f7991786df077436ec45c->leave($__internal_869c7537d9503b235edb446dc7bdcfc38c7bc8a6608f7991786df077436ec45c_prof);

        
        $__internal_683f8504667972e6ae2893f00f206b7941ad8139a09757bc5dce74eead2d298d->leave($__internal_683f8504667972e6ae2893f00f206b7941ad8139a09757bc5dce74eead2d298d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bdf3380bf409497fade50cb2fdd426a0ae01186dc2370385fc1d492fb2ba4c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf3380bf409497fade50cb2fdd426a0ae01186dc2370385fc1d492fb2ba4c87->enter($__internal_bdf3380bf409497fade50cb2fdd426a0ae01186dc2370385fc1d492fb2ba4c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_59b6842c1e972bc15118e108b1e43b05278980e5118f4f2e9241c2627b0f7fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b6842c1e972bc15118e108b1e43b05278980e5118f4f2e9241c2627b0f7fde->enter($__internal_59b6842c1e972bc15118e108b1e43b05278980e5118f4f2e9241c2627b0f7fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_59b6842c1e972bc15118e108b1e43b05278980e5118f4f2e9241c2627b0f7fde->leave($__internal_59b6842c1e972bc15118e108b1e43b05278980e5118f4f2e9241c2627b0f7fde_prof);

        
        $__internal_bdf3380bf409497fade50cb2fdd426a0ae01186dc2370385fc1d492fb2ba4c87->leave($__internal_bdf3380bf409497fade50cb2fdd426a0ae01186dc2370385fc1d492fb2ba4c87_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
