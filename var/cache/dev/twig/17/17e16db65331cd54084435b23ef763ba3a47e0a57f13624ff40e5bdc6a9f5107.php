<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_177c1cda2731477d5232ea0da5a9e215493d4d46ae447b7a8c51f341591d1877 extends Twig_Template
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
        $__internal_b7ef29dcab5b3b2509adbaab07ec11d89c753b23ac09dbfde4d950c9e4f28955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ef29dcab5b3b2509adbaab07ec11d89c753b23ac09dbfde4d950c9e4f28955->enter($__internal_b7ef29dcab5b3b2509adbaab07ec11d89c753b23ac09dbfde4d950c9e4f28955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5a85e7df98b87d48cbe14c3a4a518d2b420dc5d3217800d9813157db7218d171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a85e7df98b87d48cbe14c3a4a518d2b420dc5d3217800d9813157db7218d171->enter($__internal_5a85e7df98b87d48cbe14c3a4a518d2b420dc5d3217800d9813157db7218d171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b7ef29dcab5b3b2509adbaab07ec11d89c753b23ac09dbfde4d950c9e4f28955->leave($__internal_b7ef29dcab5b3b2509adbaab07ec11d89c753b23ac09dbfde4d950c9e4f28955_prof);

        
        $__internal_5a85e7df98b87d48cbe14c3a4a518d2b420dc5d3217800d9813157db7218d171->leave($__internal_5a85e7df98b87d48cbe14c3a4a518d2b420dc5d3217800d9813157db7218d171_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
