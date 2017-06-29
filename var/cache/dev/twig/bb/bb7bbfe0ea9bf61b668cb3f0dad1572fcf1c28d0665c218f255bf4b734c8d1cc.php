<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_a37dfcf4341689bffe03cf9b6ea0b1d9243836b74aa4cf2a548726bdd9d58eb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f70970faf84371fbc01d83efc9ad9a637ff17906b3349451a6208e833d55a900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70970faf84371fbc01d83efc9ad9a637ff17906b3349451a6208e833d55a900->enter($__internal_f70970faf84371fbc01d83efc9ad9a637ff17906b3349451a6208e833d55a900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_8dc55f29623fd76d657c2cdb8e611a2ac39e77795af2ac4130b547ddee32ba34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc55f29623fd76d657c2cdb8e611a2ac39e77795af2ac4130b547ddee32ba34->enter($__internal_8dc55f29623fd76d657c2cdb8e611a2ac39e77795af2ac4130b547ddee32ba34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f70970faf84371fbc01d83efc9ad9a637ff17906b3349451a6208e833d55a900->leave($__internal_f70970faf84371fbc01d83efc9ad9a637ff17906b3349451a6208e833d55a900_prof);

        
        $__internal_8dc55f29623fd76d657c2cdb8e611a2ac39e77795af2ac4130b547ddee32ba34->leave($__internal_8dc55f29623fd76d657c2cdb8e611a2ac39e77795af2ac4130b547ddee32ba34_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bcc0c3d345d6bc06b96b00b4e603b29562203051698898bb394606d7bffb00b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc0c3d345d6bc06b96b00b4e603b29562203051698898bb394606d7bffb00b4->enter($__internal_bcc0c3d345d6bc06b96b00b4e603b29562203051698898bb394606d7bffb00b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e5d111c5f9510f6dc42171c84aa417ee5ba03c1c2f9f09a1e7928fa15ebfafba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d111c5f9510f6dc42171c84aa417ee5ba03c1c2f9f09a1e7928fa15ebfafba->enter($__internal_e5d111c5f9510f6dc42171c84aa417ee5ba03c1c2f9f09a1e7928fa15ebfafba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e5d111c5f9510f6dc42171c84aa417ee5ba03c1c2f9f09a1e7928fa15ebfafba->leave($__internal_e5d111c5f9510f6dc42171c84aa417ee5ba03c1c2f9f09a1e7928fa15ebfafba_prof);

        
        $__internal_bcc0c3d345d6bc06b96b00b4e603b29562203051698898bb394606d7bffb00b4->leave($__internal_bcc0c3d345d6bc06b96b00b4e603b29562203051698898bb394606d7bffb00b4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
