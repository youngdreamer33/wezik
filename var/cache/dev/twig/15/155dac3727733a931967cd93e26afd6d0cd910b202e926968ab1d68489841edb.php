<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_e6f0982fe2a19dd29306eaf871ca557f73998c74c89627b66df092b3ac4c1b83 extends Twig_Template
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
        $__internal_4ce0b9402cb05088d435ee50ec76d36e2ab8ce8f8a995236761aead2820f5873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce0b9402cb05088d435ee50ec76d36e2ab8ce8f8a995236761aead2820f5873->enter($__internal_4ce0b9402cb05088d435ee50ec76d36e2ab8ce8f8a995236761aead2820f5873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_eb9effed922b3068e7463ccd91f314c8fa12a8562a2f15eb6811420d46370c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9effed922b3068e7463ccd91f314c8fa12a8562a2f15eb6811420d46370c69->enter($__internal_eb9effed922b3068e7463ccd91f314c8fa12a8562a2f15eb6811420d46370c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_4ce0b9402cb05088d435ee50ec76d36e2ab8ce8f8a995236761aead2820f5873->leave($__internal_4ce0b9402cb05088d435ee50ec76d36e2ab8ce8f8a995236761aead2820f5873_prof);

        
        $__internal_eb9effed922b3068e7463ccd91f314c8fa12a8562a2f15eb6811420d46370c69->leave($__internal_eb9effed922b3068e7463ccd91f314c8fa12a8562a2f15eb6811420d46370c69_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
