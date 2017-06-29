<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1676dca3ddddb4aacc8df9aaf8f5b3e51e70a58244ed4dd88875a5ec26ca45e7 extends Twig_Template
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
        $__internal_2d7a76f776538c1410e816d6b2d78db64762d8f06898eca2fae42692e0e38d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7a76f776538c1410e816d6b2d78db64762d8f06898eca2fae42692e0e38d13->enter($__internal_2d7a76f776538c1410e816d6b2d78db64762d8f06898eca2fae42692e0e38d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_209cdf4f0c74461f8d92b350a34ed2d0effcab11c644c0af4c5f08165f08cfe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209cdf4f0c74461f8d92b350a34ed2d0effcab11c644c0af4c5f08165f08cfe7->enter($__internal_209cdf4f0c74461f8d92b350a34ed2d0effcab11c644c0af4c5f08165f08cfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_2d7a76f776538c1410e816d6b2d78db64762d8f06898eca2fae42692e0e38d13->leave($__internal_2d7a76f776538c1410e816d6b2d78db64762d8f06898eca2fae42692e0e38d13_prof);

        
        $__internal_209cdf4f0c74461f8d92b350a34ed2d0effcab11c644c0af4c5f08165f08cfe7->leave($__internal_209cdf4f0c74461f8d92b350a34ed2d0effcab11c644c0af4c5f08165f08cfe7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
