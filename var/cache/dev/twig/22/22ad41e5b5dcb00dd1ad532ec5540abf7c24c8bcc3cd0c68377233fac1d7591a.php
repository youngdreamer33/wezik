<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c9cc6f995e4eadaec7306c482a086d7b04434c796a9dc29509187fd522b77573 extends Twig_Template
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
        $__internal_29d8d4bf6a2d07875263329b6f04ce4bf3f19cbd4908902d86586ca09518b373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d8d4bf6a2d07875263329b6f04ce4bf3f19cbd4908902d86586ca09518b373->enter($__internal_29d8d4bf6a2d07875263329b6f04ce4bf3f19cbd4908902d86586ca09518b373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b11973fc94e72c0041035398b0134c43e53fb279d311f226df57bc32e93dc72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11973fc94e72c0041035398b0134c43e53fb279d311f226df57bc32e93dc72a->enter($__internal_b11973fc94e72c0041035398b0134c43e53fb279d311f226df57bc32e93dc72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_29d8d4bf6a2d07875263329b6f04ce4bf3f19cbd4908902d86586ca09518b373->leave($__internal_29d8d4bf6a2d07875263329b6f04ce4bf3f19cbd4908902d86586ca09518b373_prof);

        
        $__internal_b11973fc94e72c0041035398b0134c43e53fb279d311f226df57bc32e93dc72a->leave($__internal_b11973fc94e72c0041035398b0134c43e53fb279d311f226df57bc32e93dc72a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
