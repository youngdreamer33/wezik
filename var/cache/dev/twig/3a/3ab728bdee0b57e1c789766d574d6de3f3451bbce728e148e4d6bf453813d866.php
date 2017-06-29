<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_29d9b02974384351753f16f88f73ec0fddf3d75916dbf685218b0d62bbea9132 extends Twig_Template
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
        $__internal_81b1d91f6159fca71b117101b9f4efcafd9c033e3f05f02825e3895b8ae1be89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b1d91f6159fca71b117101b9f4efcafd9c033e3f05f02825e3895b8ae1be89->enter($__internal_81b1d91f6159fca71b117101b9f4efcafd9c033e3f05f02825e3895b8ae1be89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_27dbd3d790471b4904919d96c4f486a61104b3ad80b863f788f005fa2e763789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27dbd3d790471b4904919d96c4f486a61104b3ad80b863f788f005fa2e763789->enter($__internal_27dbd3d790471b4904919d96c4f486a61104b3ad80b863f788f005fa2e763789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_81b1d91f6159fca71b117101b9f4efcafd9c033e3f05f02825e3895b8ae1be89->leave($__internal_81b1d91f6159fca71b117101b9f4efcafd9c033e3f05f02825e3895b8ae1be89_prof);

        
        $__internal_27dbd3d790471b4904919d96c4f486a61104b3ad80b863f788f005fa2e763789->leave($__internal_27dbd3d790471b4904919d96c4f486a61104b3ad80b863f788f005fa2e763789_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
