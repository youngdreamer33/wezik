<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_986518ee91c0025348e0b71c4f50b6f197aec431cd343b88d5b6fcf6e7416899 extends Twig_Template
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
        $__internal_f37e452356cb073a96281ea6477e66bc0e2e493b35ae53670c977f0f9712998d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37e452356cb073a96281ea6477e66bc0e2e493b35ae53670c977f0f9712998d->enter($__internal_f37e452356cb073a96281ea6477e66bc0e2e493b35ae53670c977f0f9712998d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_a05516e54d5ba67b279805ea62a1bdc69032fb07def74adec12b9fadde29fd5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05516e54d5ba67b279805ea62a1bdc69032fb07def74adec12b9fadde29fd5c->enter($__internal_a05516e54d5ba67b279805ea62a1bdc69032fb07def74adec12b9fadde29fd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f37e452356cb073a96281ea6477e66bc0e2e493b35ae53670c977f0f9712998d->leave($__internal_f37e452356cb073a96281ea6477e66bc0e2e493b35ae53670c977f0f9712998d_prof);

        
        $__internal_a05516e54d5ba67b279805ea62a1bdc69032fb07def74adec12b9fadde29fd5c->leave($__internal_a05516e54d5ba67b279805ea62a1bdc69032fb07def74adec12b9fadde29fd5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
