<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_c327dbd2d5dd45c339fb3d0b15d76729acc820da62ae952d4ff8496284429856 extends Twig_Template
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
        $__internal_5c2f6c15eb6316fdc81bd87f45987818c036b211cf52e3f1023962f5f3947943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2f6c15eb6316fdc81bd87f45987818c036b211cf52e3f1023962f5f3947943->enter($__internal_5c2f6c15eb6316fdc81bd87f45987818c036b211cf52e3f1023962f5f3947943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_ae84b802186af2c4a2ac60f8bafd21d050fd38b34fe2a3b3343a8eb70dab41dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae84b802186af2c4a2ac60f8bafd21d050fd38b34fe2a3b3343a8eb70dab41dc->enter($__internal_ae84b802186af2c4a2ac60f8bafd21d050fd38b34fe2a3b3343a8eb70dab41dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_5c2f6c15eb6316fdc81bd87f45987818c036b211cf52e3f1023962f5f3947943->leave($__internal_5c2f6c15eb6316fdc81bd87f45987818c036b211cf52e3f1023962f5f3947943_prof);

        
        $__internal_ae84b802186af2c4a2ac60f8bafd21d050fd38b34fe2a3b3343a8eb70dab41dc->leave($__internal_ae84b802186af2c4a2ac60f8bafd21d050fd38b34fe2a3b3343a8eb70dab41dc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
