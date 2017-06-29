<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_96e664f57c8f7b32482bf9e0ba66ee8aeff2aafbd0c17de8138dd2fd971a90e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b46c57c8ee93a39c93c958873bdfddb699c740c7c9152cea6368d1a6bb8c1c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46c57c8ee93a39c93c958873bdfddb699c740c7c9152cea6368d1a6bb8c1c70->enter($__internal_b46c57c8ee93a39c93c958873bdfddb699c740c7c9152cea6368d1a6bb8c1c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a5f99c4ca7560933d5d40156cdabcffc2e8afedb001c33174af8bea59b95781b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f99c4ca7560933d5d40156cdabcffc2e8afedb001c33174af8bea59b95781b->enter($__internal_a5f99c4ca7560933d5d40156cdabcffc2e8afedb001c33174af8bea59b95781b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b46c57c8ee93a39c93c958873bdfddb699c740c7c9152cea6368d1a6bb8c1c70->leave($__internal_b46c57c8ee93a39c93c958873bdfddb699c740c7c9152cea6368d1a6bb8c1c70_prof);

        
        $__internal_a5f99c4ca7560933d5d40156cdabcffc2e8afedb001c33174af8bea59b95781b->leave($__internal_a5f99c4ca7560933d5d40156cdabcffc2e8afedb001c33174af8bea59b95781b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a72c5a685201d91e9f78de3f24051fcfcdf4230a8d6f89645b8ce7640274e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a72c5a685201d91e9f78de3f24051fcfcdf4230a8d6f89645b8ce7640274e6e->enter($__internal_7a72c5a685201d91e9f78de3f24051fcfcdf4230a8d6f89645b8ce7640274e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5358308969f7c8a88c6f877f71b4f2438e89125b46dc54974d019510daaa0671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5358308969f7c8a88c6f877f71b4f2438e89125b46dc54974d019510daaa0671->enter($__internal_5358308969f7c8a88c6f877f71b4f2438e89125b46dc54974d019510daaa0671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5358308969f7c8a88c6f877f71b4f2438e89125b46dc54974d019510daaa0671->leave($__internal_5358308969f7c8a88c6f877f71b4f2438e89125b46dc54974d019510daaa0671_prof);

        
        $__internal_7a72c5a685201d91e9f78de3f24051fcfcdf4230a8d6f89645b8ce7640274e6e->leave($__internal_7a72c5a685201d91e9f78de3f24051fcfcdf4230a8d6f89645b8ce7640274e6e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
