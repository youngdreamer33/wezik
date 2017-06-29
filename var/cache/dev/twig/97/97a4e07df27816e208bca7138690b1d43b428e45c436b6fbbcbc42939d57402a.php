<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8bd38f9bd3e193d5f39268442b76f65806089fe8703a902e32d55dd5c06af94c extends Twig_Template
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
        $__internal_ac87475f8bc81dae1cb269729d077c2787e5a0de3195411bbc292f2e703b99cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac87475f8bc81dae1cb269729d077c2787e5a0de3195411bbc292f2e703b99cd->enter($__internal_ac87475f8bc81dae1cb269729d077c2787e5a0de3195411bbc292f2e703b99cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_679f3f4b2d31d85a76ea1d7c4f84c3267f38ea8327494f092a7ca68b4b9bb2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679f3f4b2d31d85a76ea1d7c4f84c3267f38ea8327494f092a7ca68b4b9bb2b4->enter($__internal_679f3f4b2d31d85a76ea1d7c4f84c3267f38ea8327494f092a7ca68b4b9bb2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_ac87475f8bc81dae1cb269729d077c2787e5a0de3195411bbc292f2e703b99cd->leave($__internal_ac87475f8bc81dae1cb269729d077c2787e5a0de3195411bbc292f2e703b99cd_prof);

        
        $__internal_679f3f4b2d31d85a76ea1d7c4f84c3267f38ea8327494f092a7ca68b4b9bb2b4->leave($__internal_679f3f4b2d31d85a76ea1d7c4f84c3267f38ea8327494f092a7ca68b4b9bb2b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
