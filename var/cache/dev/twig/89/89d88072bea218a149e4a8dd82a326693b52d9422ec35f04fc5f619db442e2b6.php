<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_91ad5c9f7b82a629a5bfe63a0c1619cd20397281b07afc4a9bfbd1f242d4c995 extends Twig_Template
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
        $__internal_775a82314656081612907bed93208f244f31b1d85e32b71d7735a051279b3443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775a82314656081612907bed93208f244f31b1d85e32b71d7735a051279b3443->enter($__internal_775a82314656081612907bed93208f244f31b1d85e32b71d7735a051279b3443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c5d11a901926e6ff338ddce604854d099d960712eff887b0595771b4fab11a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d11a901926e6ff338ddce604854d099d960712eff887b0595771b4fab11a6a->enter($__internal_c5d11a901926e6ff338ddce604854d099d960712eff887b0595771b4fab11a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_775a82314656081612907bed93208f244f31b1d85e32b71d7735a051279b3443->leave($__internal_775a82314656081612907bed93208f244f31b1d85e32b71d7735a051279b3443_prof);

        
        $__internal_c5d11a901926e6ff338ddce604854d099d960712eff887b0595771b4fab11a6a->leave($__internal_c5d11a901926e6ff338ddce604854d099d960712eff887b0595771b4fab11a6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
