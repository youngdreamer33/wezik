<?php

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_ced1fc195bd1054882da1859ccac968b61fa80d86a11179cc566e48be14fce80 extends Twig_Template
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
        $__internal_0d67bb8beaac0a9afce3bd98c0b60cc2ce2eb2de3260d2fbd2c7d2b6a3d7e252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d67bb8beaac0a9afce3bd98c0b60cc2ce2eb2de3260d2fbd2c7d2b6a3d7e252->enter($__internal_0d67bb8beaac0a9afce3bd98c0b60cc2ce2eb2de3260d2fbd2c7d2b6a3d7e252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.html.twig"));

        $__internal_df8f1f142c5e656797cbba6b5b9ed3bf9bd58252b66510986ddbe69ee064d4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8f1f142c5e656797cbba6b5b9ed3bf9bd58252b66510986ddbe69ee064d4bb->enter($__internal_df8f1f142c5e656797cbba6b5b9ed3bf9bd58252b66510986ddbe69ee064d4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.html.twig"));

        // line 1
        echo "<div class=\"trace trace-as-html\">
    <table class=\"trace-details\">
        <thead class=\"trace-head\">
            <tr>
                <th class=\"sf-toggle\" data-toggle-selector=\"#trace-html-";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((isset($context["expand"]) || array_key_exists("expand", $context) ? $context["expand"] : (function () { throw new Twig_Error_Runtime('Variable "expand" does not exist.', 5, $this->getSourceContext()); })())) ? ("display") : (""));
        echo "\">
                    <h3 class=\"trace-class\">
                        <span class=\"trace-namespace\">
                            ";
        // line 8
        echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "class", array()), "\\"), 0,  -1), "\\"), "html", null, true);
        // line 9
        echo (((twig_length_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 9, $this->getSourceContext()); })()), "class", array()), "\\")) > 1)) ? ("\\") : (""));
        echo "
                        </span>
                        ";
        // line 11
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 11, $this->getSourceContext()); })()), "class", array()), "\\")), "html", null, true);
        echo "

                        <span class=\"icon icon-close\">";
        // line 13
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                        <span class=\"icon icon-open\">";
        // line 14
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                    </h3>

                    ";
        // line 17
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "message", array())) && ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 17, $this->getSourceContext()); })()) > 1))) {
            // line 18
            echo "                        <p class=\"break-long-words trace-message\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 18, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</p>
                    ";
        }
        // line 20
        echo "                </th>
            </tr>
        </thead>

        <tbody id=\"trace-html-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sf-toggle-content\">
        ";
        // line 25
        $context["_is_first_user_code"] = true;
        // line 26
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 26, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 27
            echo "            ";
            $context["_display_code_snippet"] = ((((isset($context["_is_first_user_code"]) || array_key_exists("_is_first_user_code", $context) ? $context["_is_first_user_code"] : (function () { throw new Twig_Error_Runtime('Variable "_is_first_user_code" does not exist.', 27, $this->getSourceContext()); })()) && !twig_in_filter("/vendor/", twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array()))) && !twig_in_filter("/var/cache/", twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array())));
            // line 28
            echo "            ";
            if ((isset($context["_display_code_snippet"]) || array_key_exists("_display_code_snippet", $context) ? $context["_display_code_snippet"] : (function () { throw new Twig_Error_Runtime('Variable "_display_code_snippet" does not exist.', 28, $this->getSourceContext()); })())) {
                $context["_is_first_user_code"] = false;
            }
            // line 29
            echo "            <tr>
                <td class=\"trace-line ";
            // line 30
            echo ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array()), false)) : (false))) ? ("sf-toggle") : (""));
            echo "\" data-toggle-selector=\"#trace-html-";
            echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 30, $this->getSourceContext()); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" data-toggle-initial=\"";
            echo (((isset($context["_display_code_snippet"]) || array_key_exists("_display_code_snippet", $context) ? $context["_display_code_snippet"] : (function () { throw new Twig_Error_Runtime('Variable "_display_code_snippet" does not exist.', 30, $this->getSourceContext()); })())) ? ("display") : (""));
            echo "\">
                    ";
            // line 31
            echo twig_include($this->env, $context, "@Twig/Exception/trace.html.twig", array("prefix" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 31, $this->getSourceContext()); })()), "i" => $context["i"], "trace" => $context["trace"]), false);
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_0d67bb8beaac0a9afce3bd98c0b60cc2ce2eb2de3260d2fbd2c7d2b6a3d7e252->leave($__internal_0d67bb8beaac0a9afce3bd98c0b60cc2ce2eb2de3260d2fbd2c7d2b6a3d7e252_prof);

        
        $__internal_df8f1f142c5e656797cbba6b5b9ed3bf9bd58252b66510986ddbe69ee064d4bb->leave($__internal_df8f1f142c5e656797cbba6b5b9ed3bf9bd58252b66510986ddbe69ee064d4bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  107 => 31,  97 => 30,  94 => 29,  89 => 28,  86 => 27,  81 => 26,  79 => 25,  75 => 24,  69 => 20,  63 => 18,  61 => 17,  55 => 14,  51 => 13,  46 => 11,  41 => 9,  39 => 8,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"trace trace-as-html\">
    <table class=\"trace-details\">
        <thead class=\"trace-head\">
            <tr>
                <th class=\"sf-toggle\" data-toggle-selector=\"#trace-html-{{ index }}\" data-toggle-initial=\"{{ expand ? 'display' }}\">
                    <h3 class=\"trace-class\">
                        <span class=\"trace-namespace\">
                            {{ exception.class|split('\\\\')|slice(0, -1)|join('\\\\') }}
                            {{- exception.class|split('\\\\')|length > 1 ? '\\\\' }}
                        </span>
                        {{ exception.class|split('\\\\')|last }}

                        <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                        <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                    </h3>

                    {% if exception.message is not empty and index > 1 %}
                        <p class=\"break-long-words trace-message\">{{ exception.message }}</p>
                    {% endif %}
                </th>
            </tr>
        </thead>

        <tbody id=\"trace-html-{{ index }}\" class=\"sf-toggle-content\">
        {% set _is_first_user_code = true %}
        {% for i, trace in exception.trace %}
            {% set _display_code_snippet = _is_first_user_code and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and (trace.file is not empty) %}
            {% if _display_code_snippet %}{% set _is_first_user_code = false %}{% endif %}
            <tr>
                <td class=\"trace-line {{ trace.file|default(false) ? 'sf-toggle' }}\" data-toggle-selector=\"#trace-html-{{ index }}-{{ i }}\" data-toggle-initial=\"{{ _display_code_snippet ? 'display' }}\">
                    {{ include('@Twig/Exception/trace.html.twig', { prefix: index, i: i, trace: trace }, with_context = false) }}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
", "TwigBundle:Exception:traces.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.html.twig");
    }
}
