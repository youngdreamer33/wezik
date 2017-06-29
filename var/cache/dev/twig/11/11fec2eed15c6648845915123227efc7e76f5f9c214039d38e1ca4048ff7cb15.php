<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_cca6681480200f4695f4dbd3d282770b117a45011fb34f4b9b250155263515d6 extends Twig_Template
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
        $__internal_3478ed5395beb38543f470ed7db84327c1d70b2806f48dbac8f0895b4c3ba179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3478ed5395beb38543f470ed7db84327c1d70b2806f48dbac8f0895b4c3ba179->enter($__internal_3478ed5395beb38543f470ed7db84327c1d70b2806f48dbac8f0895b4c3ba179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a8c1555bdd5c1044f64880c7a7fb490d21117cb5ee6a6200fca1f887b5d85109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c1555bdd5c1044f64880c7a7fb490d21117cb5ee6a6200fca1f887b5d85109->enter($__internal_a8c1555bdd5c1044f64880c7a7fb490d21117cb5ee6a6200fca1f887b5d85109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3478ed5395beb38543f470ed7db84327c1d70b2806f48dbac8f0895b4c3ba179->leave($__internal_3478ed5395beb38543f470ed7db84327c1d70b2806f48dbac8f0895b4c3ba179_prof);

        
        $__internal_a8c1555bdd5c1044f64880c7a7fb490d21117cb5ee6a6200fca1f887b5d85109->leave($__internal_a8c1555bdd5c1044f64880c7a7fb490d21117cb5ee6a6200fca1f887b5d85109_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
