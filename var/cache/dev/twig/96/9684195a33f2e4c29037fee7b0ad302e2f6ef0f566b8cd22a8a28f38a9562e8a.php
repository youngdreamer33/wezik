<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_01802ef02bdde28d00718ef4898ab2d25fc24e08d3d3c9ffa9097b5f478a5ef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b77b77dda7333e4fe7f28689f8ac5e4f8296b5a369e7be36f5a637fa702ad282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77b77dda7333e4fe7f28689f8ac5e4f8296b5a369e7be36f5a637fa702ad282->enter($__internal_b77b77dda7333e4fe7f28689f8ac5e4f8296b5a369e7be36f5a637fa702ad282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.html.twig"));

        $__internal_40c5d82396655181cfbe74ebaa4185ba02ed3c5b79539a5aa752f4a1234b709d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c5d82396655181cfbe74ebaa4185ba02ed3c5b79539a5aa752f4a1234b709d->enter($__internal_40c5d82396655181cfbe74ebaa4185ba02ed3c5b79539a5aa752f4a1234b709d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.html.twig"));

        // line 1
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), false)) : (false))) {
            // line 2
            echo "    <span class=\"icon icon-close\">";
            echo twig_include($this->env, $context, "@Twig/images/icon-minus-square.svg");
            echo "</span>
    <span class=\"icon icon-open\">";
            // line 3
            echo twig_include($this->env, $context, "@Twig/images/icon-plus-square.svg");
            echo "</span>
";
        }
        // line 5
        echo "
";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 6, $this->getSourceContext()); })()), "function", array())) {
            // line 7
            echo "    <span class=\"trace-class\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->getSourceContext()); })()), "class", array()));
            echo "</span>";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->getSourceContext()); })()), "type", array()))) {
                echo "<span class=\"trace-type\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->getSourceContext()); })()), "type", array()), "html", null, true);
                echo "</span>";
            }
            echo "<span class=\"trace-method\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->getSourceContext()); })()), "function", array()), "html", null, true);
            echo "</span><span class=\"trace-arguments\">(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->getSourceContext()); })()), "args", array()));
            echo ")</span>
";
        }
        // line 9
        echo "
";
        // line 10
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), false)) : (false))) {
            // line 11
            echo "    ";
            $context["line_number"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array()), 1)) : (1));
            // line 12
            echo "    ";
            $context["file_link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 12, $this->getSourceContext()); })()), "file", array()), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new Twig_Error_Runtime('Variable "line_number" does not exist.', 12, $this->getSourceContext()); })()));
            // line 13
            echo "    ";
            $context["file_path"] = twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 13, $this->getSourceContext()); })()), "file", array()), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new Twig_Error_Runtime('Variable "line_number" does not exist.', 13, $this->getSourceContext()); })()))), array((" at line " . (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new Twig_Error_Runtime('Variable "line_number" does not exist.', 13, $this->getSourceContext()); })())) => ""));
            // line 14
            echo "    ";
            $context["file_path_parts"] = twig_split_filter($this->env, (isset($context["file_path"]) || array_key_exists("file_path", $context) ? $context["file_path"] : (function () { throw new Twig_Error_Runtime('Variable "file_path" does not exist.', 14, $this->getSourceContext()); })()), twig_constant("DIRECTORY_SEPARATOR"));
            // line 15
            echo "
    <span class=\"block trace-file-path\">
        in
        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["file_link"]) || array_key_exists("file_link", $context) ? $context["file_link"] : (function () { throw new Twig_Error_Runtime('Variable "file_link" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, (isset($context["file_path_parts"]) || array_key_exists("file_path_parts", $context) ? $context["file_path_parts"] : (function () { throw new Twig_Error_Runtime('Variable "file_path_parts" does not exist.', 18, $this->getSourceContext()); })()), 0,  -1), twig_constant("DIRECTORY_SEPARATOR")), "html", null, true);
            echo twig_escape_filter($this->env, twig_constant("DIRECTORY_SEPARATOR"), "html", null, true);
            echo "<strong>";
            echo twig_escape_filter($this->env, twig_last($this->env, (isset($context["file_path_parts"]) || array_key_exists("file_path_parts", $context) ? $context["file_path_parts"] : (function () { throw new Twig_Error_Runtime('Variable "file_path_parts" does not exist.', 18, $this->getSourceContext()); })())), "html", null, true);
            echo "</strong></a>
        (line ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new Twig_Error_Runtime('Variable "line_number" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo ")
    </span>
";
        }
        // line 22
        echo "
";
        // line 23
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), false)) : (false))) {
            // line 24
            echo "    <div id=\"trace-html-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 24, $this->getSourceContext()); })()) . "-") . (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 24, $this->getSourceContext()); })())), "html", null, true);
            echo "\" class=\"trace-code sf-toggle-content\">
        ";
            // line 25
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 25, $this->getSourceContext()); })()), "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 25, $this->getSourceContext()); })()), "line", array())), array("#DD0000" => "#183691", "#007700" => "#a71d5d", "#0000BB" => "#222222", "#FF8000" => "#969896"));
            // line 30
            echo "
    </div>
";
        }
        
        $__internal_b77b77dda7333e4fe7f28689f8ac5e4f8296b5a369e7be36f5a637fa702ad282->leave($__internal_b77b77dda7333e4fe7f28689f8ac5e4f8296b5a369e7be36f5a637fa702ad282_prof);

        
        $__internal_40c5d82396655181cfbe74ebaa4185ba02ed3c5b79539a5aa752f4a1234b709d->leave($__internal_40c5d82396655181cfbe74ebaa4185ba02ed3c5b79539a5aa752f4a1234b709d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 30,  105 => 25,  100 => 24,  98 => 23,  95 => 22,  89 => 19,  80 => 18,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  61 => 10,  58 => 9,  42 => 7,  40 => 6,  37 => 5,  32 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.file|default(false) %}
    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square.svg') }}</span>
    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square.svg') }}</span>
{% endif %}

{% if trace.function %}
    <span class=\"trace-class\">{{ trace.class|abbr_class }}</span>{% if trace.type is not empty %}<span class=\"trace-type\">{{ trace.type }}</span>{% endif %}<span class=\"trace-method\">{{ trace.function }}</span><span class=\"trace-arguments\">({{ trace.args|format_args }})</span>
{% endif %}

{% if trace.file|default(false) %}
    {% set line_number = trace.line|default(1) %}
    {% set file_link = trace.file|file_link(line_number) %}
    {% set file_path = trace.file|format_file(line_number)|striptags|replace({ (' at line ' ~ line_number): '' }) %}
    {% set file_path_parts = file_path|split(constant('DIRECTORY_SEPARATOR')) %}

    <span class=\"block trace-file-path\">
        in
        <a href=\"{{ file_link }}\">{{ file_path_parts[:-1]|join(constant('DIRECTORY_SEPARATOR')) }}{{ constant('DIRECTORY_SEPARATOR') }}<strong>{{ file_path_parts|last }}</strong></a>
        (line {{ line_number }})
    </span>
{% endif %}

{% if trace.file|default(false) %}
    <div id=\"trace-html-{{ prefix ~ '-' ~ i }}\" class=\"trace-code sf-toggle-content\">
        {{ trace.file|file_excerpt(trace.line)|replace({
            '#DD0000': '#183691',
            '#007700': '#a71d5d',
            '#0000BB': '#222222',
            '#FF8000': '#969896'
        })|raw }}
    </div>
{% endif %}
", "TwigBundle:Exception:trace.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.html.twig");
    }
}
