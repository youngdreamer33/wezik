<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_43c21ab62ce016fbbd73a360700bb7d6b4703ce822d618e73a3158cebcd35c6d extends Twig_Template
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
        $__internal_32da3ca3c62e0a1d7592a9c54d41109c37831741537816b25835849624af4ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32da3ca3c62e0a1d7592a9c54d41109c37831741537816b25835849624af4ca7->enter($__internal_32da3ca3c62e0a1d7592a9c54d41109c37831741537816b25835849624af4ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_2d415c7df9c75b47de07c231ab82d006098c133723899fe7d7fe9b1737864914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d415c7df9c75b47de07c231ab82d006098c133723899fe7d7fe9b1737864914->enter($__internal_2d415c7df9c75b47de07c231ab82d006098c133723899fe7d7fe9b1737864914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_32da3ca3c62e0a1d7592a9c54d41109c37831741537816b25835849624af4ca7->leave($__internal_32da3ca3c62e0a1d7592a9c54d41109c37831741537816b25835849624af4ca7_prof);

        
        $__internal_2d415c7df9c75b47de07c231ab82d006098c133723899fe7d7fe9b1737864914->leave($__internal_2d415c7df9c75b47de07c231ab82d006098c133723899fe7d7fe9b1737864914_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
