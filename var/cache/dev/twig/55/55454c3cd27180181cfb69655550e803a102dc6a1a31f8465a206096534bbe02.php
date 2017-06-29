<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_cf51ab7409a5db3a5c4b70e67128b253370510c6dcd2e90131d9b1b94eb1bbb0 extends Twig_Template
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
        $__internal_c9afb4bbd7d5d0232b0ece9401bad679110e2b0d5e5ac13702867e9f6db9d41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9afb4bbd7d5d0232b0ece9401bad679110e2b0d5e5ac13702867e9f6db9d41e->enter($__internal_c9afb4bbd7d5d0232b0ece9401bad679110e2b0d5e5ac13702867e9f6db9d41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_502e319771a3dac71b4050db16a0ab608c046ee309552c9eb500ed71f4a6d127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502e319771a3dac71b4050db16a0ab608c046ee309552c9eb500ed71f4a6d127->enter($__internal_502e319771a3dac71b4050db16a0ab608c046ee309552c9eb500ed71f4a6d127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c9afb4bbd7d5d0232b0ece9401bad679110e2b0d5e5ac13702867e9f6db9d41e->leave($__internal_c9afb4bbd7d5d0232b0ece9401bad679110e2b0d5e5ac13702867e9f6db9d41e_prof);

        
        $__internal_502e319771a3dac71b4050db16a0ab608c046ee309552c9eb500ed71f4a6d127->leave($__internal_502e319771a3dac71b4050db16a0ab608c046ee309552c9eb500ed71f4a6d127_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
