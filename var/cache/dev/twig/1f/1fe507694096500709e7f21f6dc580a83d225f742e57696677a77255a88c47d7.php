<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3003d937005df14b706773253b9a96b96f0954c264ee60e65be8c00707edefb6 extends Twig_Template
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
        $__internal_05b9990121cee41e583b28603cc138696b20001b0ee367666872e9b9c4b0b0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b9990121cee41e583b28603cc138696b20001b0ee367666872e9b9c4b0b0f8->enter($__internal_05b9990121cee41e583b28603cc138696b20001b0ee367666872e9b9c4b0b0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_57719818be829fe19afb962157d170d428ebe696ba95577007a5d82b182fc790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57719818be829fe19afb962157d170d428ebe696ba95577007a5d82b182fc790->enter($__internal_57719818be829fe19afb962157d170d428ebe696ba95577007a5d82b182fc790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_05b9990121cee41e583b28603cc138696b20001b0ee367666872e9b9c4b0b0f8->leave($__internal_05b9990121cee41e583b28603cc138696b20001b0ee367666872e9b9c4b0b0f8_prof);

        
        $__internal_57719818be829fe19afb962157d170d428ebe696ba95577007a5d82b182fc790->leave($__internal_57719818be829fe19afb962157d170d428ebe696ba95577007a5d82b182fc790_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
