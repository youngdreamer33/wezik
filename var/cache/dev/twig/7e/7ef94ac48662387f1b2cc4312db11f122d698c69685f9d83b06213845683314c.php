<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4ff0f2335b964b8686955510ea818c7b58201bbdd02aaac1eb9aa28d78adbe78 extends Twig_Template
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
        $__internal_e35e45f27d1be7b18a0c6f76c8b24ba334cde57580376f0f989c516b654dcc26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35e45f27d1be7b18a0c6f76c8b24ba334cde57580376f0f989c516b654dcc26->enter($__internal_e35e45f27d1be7b18a0c6f76c8b24ba334cde57580376f0f989c516b654dcc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c747fde3c1c036b27d14699411717337ec5f9cfe196ec28a57a48172a48d68f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c747fde3c1c036b27d14699411717337ec5f9cfe196ec28a57a48172a48d68f6->enter($__internal_c747fde3c1c036b27d14699411717337ec5f9cfe196ec28a57a48172a48d68f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e35e45f27d1be7b18a0c6f76c8b24ba334cde57580376f0f989c516b654dcc26->leave($__internal_e35e45f27d1be7b18a0c6f76c8b24ba334cde57580376f0f989c516b654dcc26_prof);

        
        $__internal_c747fde3c1c036b27d14699411717337ec5f9cfe196ec28a57a48172a48d68f6->leave($__internal_c747fde3c1c036b27d14699411717337ec5f9cfe196ec28a57a48172a48d68f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
