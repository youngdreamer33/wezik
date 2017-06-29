<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b2e299425c26d6efe102c2481d25b9667789118aea03b8e5fca04b31af667029 extends Twig_Template
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
        $__internal_2784a9a8796874206476dd0992e0703ad90e2e85efcdaa3351aa223af85b3bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2784a9a8796874206476dd0992e0703ad90e2e85efcdaa3351aa223af85b3bf2->enter($__internal_2784a9a8796874206476dd0992e0703ad90e2e85efcdaa3351aa223af85b3bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7f39bddb135b0e975538716abe76304cd3931876d2a6651e7bd0d854bbff61fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f39bddb135b0e975538716abe76304cd3931876d2a6651e7bd0d854bbff61fc->enter($__internal_7f39bddb135b0e975538716abe76304cd3931876d2a6651e7bd0d854bbff61fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2784a9a8796874206476dd0992e0703ad90e2e85efcdaa3351aa223af85b3bf2->leave($__internal_2784a9a8796874206476dd0992e0703ad90e2e85efcdaa3351aa223af85b3bf2_prof);

        
        $__internal_7f39bddb135b0e975538716abe76304cd3931876d2a6651e7bd0d854bbff61fc->leave($__internal_7f39bddb135b0e975538716abe76304cd3931876d2a6651e7bd0d854bbff61fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
