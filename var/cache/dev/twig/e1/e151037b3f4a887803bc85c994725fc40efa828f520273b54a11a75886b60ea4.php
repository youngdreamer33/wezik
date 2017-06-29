<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_c9605d207f2c394d5c587d036a9426a9b9371bf50fc381ec4a63cfff3619b992 extends Twig_Template
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
        $__internal_8a30006916e5ee3d901147e974d507cd1704051a878a82e7928d30283a81930f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a30006916e5ee3d901147e974d507cd1704051a878a82e7928d30283a81930f->enter($__internal_8a30006916e5ee3d901147e974d507cd1704051a878a82e7928d30283a81930f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_924eff57f61939eb25750bc7bc02ba3041df217c72f60d6a54a3462d8dd4b0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924eff57f61939eb25750bc7bc02ba3041df217c72f60d6a54a3462d8dd4b0c3->enter($__internal_924eff57f61939eb25750bc7bc02ba3041df217c72f60d6a54a3462d8dd4b0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8a30006916e5ee3d901147e974d507cd1704051a878a82e7928d30283a81930f->leave($__internal_8a30006916e5ee3d901147e974d507cd1704051a878a82e7928d30283a81930f_prof);

        
        $__internal_924eff57f61939eb25750bc7bc02ba3041df217c72f60d6a54a3462d8dd4b0c3->leave($__internal_924eff57f61939eb25750bc7bc02ba3041df217c72f60d6a54a3462d8dd4b0c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
