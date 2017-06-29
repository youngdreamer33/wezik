<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8201037d702934dce7bba4bf7bf28e3490b75983cd6c5e4185c697605e35a0ea extends Twig_Template
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
        $__internal_b1f8b0d230b36bd2ccd3a9ef92109946ac3dd4b0cbaaa385aa90d0a1074e0bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f8b0d230b36bd2ccd3a9ef92109946ac3dd4b0cbaaa385aa90d0a1074e0bbd->enter($__internal_b1f8b0d230b36bd2ccd3a9ef92109946ac3dd4b0cbaaa385aa90d0a1074e0bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_497b98ab7ba042a796867d1d25436b3140a20241247ef8ea1b5f54a456cd737b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497b98ab7ba042a796867d1d25436b3140a20241247ef8ea1b5f54a456cd737b->enter($__internal_497b98ab7ba042a796867d1d25436b3140a20241247ef8ea1b5f54a456cd737b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b1f8b0d230b36bd2ccd3a9ef92109946ac3dd4b0cbaaa385aa90d0a1074e0bbd->leave($__internal_b1f8b0d230b36bd2ccd3a9ef92109946ac3dd4b0cbaaa385aa90d0a1074e0bbd_prof);

        
        $__internal_497b98ab7ba042a796867d1d25436b3140a20241247ef8ea1b5f54a456cd737b->leave($__internal_497b98ab7ba042a796867d1d25436b3140a20241247ef8ea1b5f54a456cd737b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
