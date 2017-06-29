<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7bfe0221cf067e92e13a2d90669431d0b5b8823d506a93451923c07f3c19950d extends Twig_Template
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
        $__internal_0c4925c4ea8617f64cde5bf818f23320c4a460ec33b7b1cdc47ab48a22524373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4925c4ea8617f64cde5bf818f23320c4a460ec33b7b1cdc47ab48a22524373->enter($__internal_0c4925c4ea8617f64cde5bf818f23320c4a460ec33b7b1cdc47ab48a22524373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7e2156651374e990cebfce1b43857df2eb9a2ccba418063f3b4643772b023762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2156651374e990cebfce1b43857df2eb9a2ccba418063f3b4643772b023762->enter($__internal_7e2156651374e990cebfce1b43857df2eb9a2ccba418063f3b4643772b023762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0c4925c4ea8617f64cde5bf818f23320c4a460ec33b7b1cdc47ab48a22524373->leave($__internal_0c4925c4ea8617f64cde5bf818f23320c4a460ec33b7b1cdc47ab48a22524373_prof);

        
        $__internal_7e2156651374e990cebfce1b43857df2eb9a2ccba418063f3b4643772b023762->leave($__internal_7e2156651374e990cebfce1b43857df2eb9a2ccba418063f3b4643772b023762_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
