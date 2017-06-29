<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_484c5c72998a897eed697855355af5757fe74d6fcdf9b62acb95ccbddce5b343 extends Twig_Template
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
        $__internal_a1309993c44a3ecfe99103b69dc750280a62c6467d3cd21b1a72c4a0de2d3652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1309993c44a3ecfe99103b69dc750280a62c6467d3cd21b1a72c4a0de2d3652->enter($__internal_a1309993c44a3ecfe99103b69dc750280a62c6467d3cd21b1a72c4a0de2d3652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_945685e9a30a5e65d53005f2886c974483679483ad47d390212652bcd5bbd559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945685e9a30a5e65d53005f2886c974483679483ad47d390212652bcd5bbd559->enter($__internal_945685e9a30a5e65d53005f2886c974483679483ad47d390212652bcd5bbd559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a1309993c44a3ecfe99103b69dc750280a62c6467d3cd21b1a72c4a0de2d3652->leave($__internal_a1309993c44a3ecfe99103b69dc750280a62c6467d3cd21b1a72c4a0de2d3652_prof);

        
        $__internal_945685e9a30a5e65d53005f2886c974483679483ad47d390212652bcd5bbd559->leave($__internal_945685e9a30a5e65d53005f2886c974483679483ad47d390212652bcd5bbd559_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
