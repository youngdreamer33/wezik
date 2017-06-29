<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fbdd62d13c61b648c59020195aa3a885a31de05e523a6906dc35c03a90ec3139 extends Twig_Template
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
        $__internal_f79067e624257734914082cdebae6ff6518e3fb5b5593258545fb8847ebdd70a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79067e624257734914082cdebae6ff6518e3fb5b5593258545fb8847ebdd70a->enter($__internal_f79067e624257734914082cdebae6ff6518e3fb5b5593258545fb8847ebdd70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_38d0795b1bac1691f14aba91da498c7a2bd36c6726f40adeffeb72857f6996d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d0795b1bac1691f14aba91da498c7a2bd36c6726f40adeffeb72857f6996d1->enter($__internal_38d0795b1bac1691f14aba91da498c7a2bd36c6726f40adeffeb72857f6996d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f79067e624257734914082cdebae6ff6518e3fb5b5593258545fb8847ebdd70a->leave($__internal_f79067e624257734914082cdebae6ff6518e3fb5b5593258545fb8847ebdd70a_prof);

        
        $__internal_38d0795b1bac1691f14aba91da498c7a2bd36c6726f40adeffeb72857f6996d1->leave($__internal_38d0795b1bac1691f14aba91da498c7a2bd36c6726f40adeffeb72857f6996d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
