<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_64467e60cad0030a0c03e31d58a6b4d0a79de5ffa1c9975f65fc4ab41d275d77 extends Twig_Template
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
        $__internal_ae0a5702b9c44bbf08cff3ba7ef3928e731e349d72f34000851adf4a38ce2e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0a5702b9c44bbf08cff3ba7ef3928e731e349d72f34000851adf4a38ce2e21->enter($__internal_ae0a5702b9c44bbf08cff3ba7ef3928e731e349d72f34000851adf4a38ce2e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c03e286c96672caa67f139e4dde12a68eb1983d00e94b913bb7deeb721f18c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03e286c96672caa67f139e4dde12a68eb1983d00e94b913bb7deeb721f18c17->enter($__internal_c03e286c96672caa67f139e4dde12a68eb1983d00e94b913bb7deeb721f18c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ae0a5702b9c44bbf08cff3ba7ef3928e731e349d72f34000851adf4a38ce2e21->leave($__internal_ae0a5702b9c44bbf08cff3ba7ef3928e731e349d72f34000851adf4a38ce2e21_prof);

        
        $__internal_c03e286c96672caa67f139e4dde12a68eb1983d00e94b913bb7deeb721f18c17->leave($__internal_c03e286c96672caa67f139e4dde12a68eb1983d00e94b913bb7deeb721f18c17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
