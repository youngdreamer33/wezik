<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_db4cdc1f963d9adde63297a3591f1552320af674425281b507957535082b471d extends Twig_Template
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
        $__internal_aad240975a17639f81c5b85e2faa6ad812241b351f09162b4bdba6d4d79bc21e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad240975a17639f81c5b85e2faa6ad812241b351f09162b4bdba6d4d79bc21e->enter($__internal_aad240975a17639f81c5b85e2faa6ad812241b351f09162b4bdba6d4d79bc21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f6dbe2b639cb95e035df072c4bbc88116d934534a759abf7900eca2de68f1655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6dbe2b639cb95e035df072c4bbc88116d934534a759abf7900eca2de68f1655->enter($__internal_f6dbe2b639cb95e035df072c4bbc88116d934534a759abf7900eca2de68f1655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_aad240975a17639f81c5b85e2faa6ad812241b351f09162b4bdba6d4d79bc21e->leave($__internal_aad240975a17639f81c5b85e2faa6ad812241b351f09162b4bdba6d4d79bc21e_prof);

        
        $__internal_f6dbe2b639cb95e035df072c4bbc88116d934534a759abf7900eca2de68f1655->leave($__internal_f6dbe2b639cb95e035df072c4bbc88116d934534a759abf7900eca2de68f1655_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
