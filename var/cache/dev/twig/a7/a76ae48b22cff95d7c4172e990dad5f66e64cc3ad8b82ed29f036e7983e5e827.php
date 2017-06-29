<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_68a0a2b746744939063906efebcdc7b8d0a3e380977b52385ca58f75a9161977 extends Twig_Template
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
        $__internal_9b4cdea363fb406904c145730551a197b438ad67128f3aa4d45a746805bbfc66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4cdea363fb406904c145730551a197b438ad67128f3aa4d45a746805bbfc66->enter($__internal_9b4cdea363fb406904c145730551a197b438ad67128f3aa4d45a746805bbfc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a02a8ba2a5144458a7d6301268ca72912e610c3e5579ccd823cf15c04843ca00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02a8ba2a5144458a7d6301268ca72912e610c3e5579ccd823cf15c04843ca00->enter($__internal_a02a8ba2a5144458a7d6301268ca72912e610c3e5579ccd823cf15c04843ca00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9b4cdea363fb406904c145730551a197b438ad67128f3aa4d45a746805bbfc66->leave($__internal_9b4cdea363fb406904c145730551a197b438ad67128f3aa4d45a746805bbfc66_prof);

        
        $__internal_a02a8ba2a5144458a7d6301268ca72912e610c3e5579ccd823cf15c04843ca00->leave($__internal_a02a8ba2a5144458a7d6301268ca72912e610c3e5579ccd823cf15c04843ca00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
