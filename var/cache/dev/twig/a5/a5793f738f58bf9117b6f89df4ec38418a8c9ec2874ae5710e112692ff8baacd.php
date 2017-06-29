<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b72fb2e44a3bb2e3c08153a696df3d0ed8728d7520ec651754b2a79c4ff2018a extends Twig_Template
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
        $__internal_e56d4c30048cab7f5bc10d25125f81feb81c26f547bd1652251c19620859a8be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56d4c30048cab7f5bc10d25125f81feb81c26f547bd1652251c19620859a8be->enter($__internal_e56d4c30048cab7f5bc10d25125f81feb81c26f547bd1652251c19620859a8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2d6153db393deda024fad822b7c277cf273a279e6171d05ebe0baa8b2585a700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6153db393deda024fad822b7c277cf273a279e6171d05ebe0baa8b2585a700->enter($__internal_2d6153db393deda024fad822b7c277cf273a279e6171d05ebe0baa8b2585a700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e56d4c30048cab7f5bc10d25125f81feb81c26f547bd1652251c19620859a8be->leave($__internal_e56d4c30048cab7f5bc10d25125f81feb81c26f547bd1652251c19620859a8be_prof);

        
        $__internal_2d6153db393deda024fad822b7c277cf273a279e6171d05ebe0baa8b2585a700->leave($__internal_2d6153db393deda024fad822b7c277cf273a279e6171d05ebe0baa8b2585a700_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
