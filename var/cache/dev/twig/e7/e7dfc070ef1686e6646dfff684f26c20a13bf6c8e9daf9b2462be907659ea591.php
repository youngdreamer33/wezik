<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_76e41c7034ff752807ab310422cfd86ce9474730061c774b798c3f162ffe4fd5 extends Twig_Template
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
        $__internal_fcec7eff0363b6afa136563b205eeba2619d735624929ce630ace310d2daa978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcec7eff0363b6afa136563b205eeba2619d735624929ce630ace310d2daa978->enter($__internal_fcec7eff0363b6afa136563b205eeba2619d735624929ce630ace310d2daa978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2e27a167fe733fc19640a546747894163fdb86c91a987b71a029b655b60586b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e27a167fe733fc19640a546747894163fdb86c91a987b71a029b655b60586b9->enter($__internal_2e27a167fe733fc19640a546747894163fdb86c91a987b71a029b655b60586b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_fcec7eff0363b6afa136563b205eeba2619d735624929ce630ace310d2daa978->leave($__internal_fcec7eff0363b6afa136563b205eeba2619d735624929ce630ace310d2daa978_prof);

        
        $__internal_2e27a167fe733fc19640a546747894163fdb86c91a987b71a029b655b60586b9->leave($__internal_2e27a167fe733fc19640a546747894163fdb86c91a987b71a029b655b60586b9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
