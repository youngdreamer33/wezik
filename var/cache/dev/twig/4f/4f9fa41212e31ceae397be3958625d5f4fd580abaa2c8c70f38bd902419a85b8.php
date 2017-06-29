<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fd6f15d8b88dca81b51105604a39f3ec268a03638e2a7c70e772f0114a3d838c extends Twig_Template
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
        $__internal_7428885505ad4cd43eb934ef608bc77e87f2066aac738d0added834ae5c34606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7428885505ad4cd43eb934ef608bc77e87f2066aac738d0added834ae5c34606->enter($__internal_7428885505ad4cd43eb934ef608bc77e87f2066aac738d0added834ae5c34606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a4c0750caef32a0b144715e4abdc87cef7ab6a9c77c9a4bf0d1deea9468a0804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c0750caef32a0b144715e4abdc87cef7ab6a9c77c9a4bf0d1deea9468a0804->enter($__internal_a4c0750caef32a0b144715e4abdc87cef7ab6a9c77c9a4bf0d1deea9468a0804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7428885505ad4cd43eb934ef608bc77e87f2066aac738d0added834ae5c34606->leave($__internal_7428885505ad4cd43eb934ef608bc77e87f2066aac738d0added834ae5c34606_prof);

        
        $__internal_a4c0750caef32a0b144715e4abdc87cef7ab6a9c77c9a4bf0d1deea9468a0804->leave($__internal_a4c0750caef32a0b144715e4abdc87cef7ab6a9c77c9a4bf0d1deea9468a0804_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
