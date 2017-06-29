<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_0e18e543258becbdf80ae3a810e6916aebd056917d8f3bedd2c071e7263f386e extends Twig_Template
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
        $__internal_451fa4d8b63bcf9c95bc738260b548492f37ace60b1cae79979bf38e79b16c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451fa4d8b63bcf9c95bc738260b548492f37ace60b1cae79979bf38e79b16c1c->enter($__internal_451fa4d8b63bcf9c95bc738260b548492f37ace60b1cae79979bf38e79b16c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_b01c5709c0cdee57c05ae0df384447678cc826f8193e6477cbc80599ac387f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01c5709c0cdee57c05ae0df384447678cc826f8193e6477cbc80599ac387f37->enter($__internal_b01c5709c0cdee57c05ae0df384447678cc826f8193e6477cbc80599ac387f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_451fa4d8b63bcf9c95bc738260b548492f37ace60b1cae79979bf38e79b16c1c->leave($__internal_451fa4d8b63bcf9c95bc738260b548492f37ace60b1cae79979bf38e79b16c1c_prof);

        
        $__internal_b01c5709c0cdee57c05ae0df384447678cc826f8193e6477cbc80599ac387f37->leave($__internal_b01c5709c0cdee57c05ae0df384447678cc826f8193e6477cbc80599ac387f37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
