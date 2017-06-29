<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e6b72bee2054db72d5ade98b760202079215226bdbaaefe941fbc859a462bb33 extends Twig_Template
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
        $__internal_f5099589dfeb22516ea54b34f5c3c4abdf7bd1369f772de0caded4e05f8680a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5099589dfeb22516ea54b34f5c3c4abdf7bd1369f772de0caded4e05f8680a8->enter($__internal_f5099589dfeb22516ea54b34f5c3c4abdf7bd1369f772de0caded4e05f8680a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_2bf67d1ca71559eb8ac905df98c3b346579a85ad8531a3af9667dc9156378160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf67d1ca71559eb8ac905df98c3b346579a85ad8531a3af9667dc9156378160->enter($__internal_2bf67d1ca71559eb8ac905df98c3b346579a85ad8531a3af9667dc9156378160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_f5099589dfeb22516ea54b34f5c3c4abdf7bd1369f772de0caded4e05f8680a8->leave($__internal_f5099589dfeb22516ea54b34f5c3c4abdf7bd1369f772de0caded4e05f8680a8_prof);

        
        $__internal_2bf67d1ca71559eb8ac905df98c3b346579a85ad8531a3af9667dc9156378160->leave($__internal_2bf67d1ca71559eb8ac905df98c3b346579a85ad8531a3af9667dc9156378160_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
