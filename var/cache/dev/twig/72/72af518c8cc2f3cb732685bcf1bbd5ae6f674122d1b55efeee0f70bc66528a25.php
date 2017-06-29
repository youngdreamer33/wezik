<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ec6ff6954b7730d1a3a88a48b77207ec56cb52a1dd5876774f44f27eadd8d36b extends Twig_Template
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
        $__internal_d9e491b02c922fc0e1611ac71ba2d8e5c35133ecdb4fc9f8c8df6933169a598e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e491b02c922fc0e1611ac71ba2d8e5c35133ecdb4fc9f8c8df6933169a598e->enter($__internal_d9e491b02c922fc0e1611ac71ba2d8e5c35133ecdb4fc9f8c8df6933169a598e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ffabfc9410be678791ba25ee861f00c106dec43c6cbf765f2031f6e0fd3b3f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffabfc9410be678791ba25ee861f00c106dec43c6cbf765f2031f6e0fd3b3f0a->enter($__internal_ffabfc9410be678791ba25ee861f00c106dec43c6cbf765f2031f6e0fd3b3f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d9e491b02c922fc0e1611ac71ba2d8e5c35133ecdb4fc9f8c8df6933169a598e->leave($__internal_d9e491b02c922fc0e1611ac71ba2d8e5c35133ecdb4fc9f8c8df6933169a598e_prof);

        
        $__internal_ffabfc9410be678791ba25ee861f00c106dec43c6cbf765f2031f6e0fd3b3f0a->leave($__internal_ffabfc9410be678791ba25ee861f00c106dec43c6cbf765f2031f6e0fd3b3f0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
