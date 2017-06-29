<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b1af59384f23c29b750cd454f26a478d6f4063d04c2f6d0c51b14683efe5926d extends Twig_Template
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
        $__internal_f65fd44b2ed1f11c6860c9b70178065e7a2df03f288779db0fd398325059da5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65fd44b2ed1f11c6860c9b70178065e7a2df03f288779db0fd398325059da5e->enter($__internal_f65fd44b2ed1f11c6860c9b70178065e7a2df03f288779db0fd398325059da5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_f484594be5ad8f477f07fc89bbe7ee20454fc20fde3b1fbbed6512028a06a3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f484594be5ad8f477f07fc89bbe7ee20454fc20fde3b1fbbed6512028a06a3e6->enter($__internal_f484594be5ad8f477f07fc89bbe7ee20454fc20fde3b1fbbed6512028a06a3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_f65fd44b2ed1f11c6860c9b70178065e7a2df03f288779db0fd398325059da5e->leave($__internal_f65fd44b2ed1f11c6860c9b70178065e7a2df03f288779db0fd398325059da5e_prof);

        
        $__internal_f484594be5ad8f477f07fc89bbe7ee20454fc20fde3b1fbbed6512028a06a3e6->leave($__internal_f484594be5ad8f477f07fc89bbe7ee20454fc20fde3b1fbbed6512028a06a3e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
