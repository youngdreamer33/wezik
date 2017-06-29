<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_043f0bfc5a705815e16a944119a89d959e0fc4096e8847706b6632a9ba47bbbd extends Twig_Template
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
        $__internal_a3503eb0e800c332a29c0143a80fe5e706a707d88293869819bbf242d9e78747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3503eb0e800c332a29c0143a80fe5e706a707d88293869819bbf242d9e78747->enter($__internal_a3503eb0e800c332a29c0143a80fe5e706a707d88293869819bbf242d9e78747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_a1e14137b2229cf8be005d2ee1e59bf68d209180036b64d090fe39e7a14cd5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e14137b2229cf8be005d2ee1e59bf68d209180036b64d090fe39e7a14cd5df->enter($__internal_a1e14137b2229cf8be005d2ee1e59bf68d209180036b64d090fe39e7a14cd5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a3503eb0e800c332a29c0143a80fe5e706a707d88293869819bbf242d9e78747->leave($__internal_a3503eb0e800c332a29c0143a80fe5e706a707d88293869819bbf242d9e78747_prof);

        
        $__internal_a1e14137b2229cf8be005d2ee1e59bf68d209180036b64d090fe39e7a14cd5df->leave($__internal_a1e14137b2229cf8be005d2ee1e59bf68d209180036b64d090fe39e7a14cd5df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
