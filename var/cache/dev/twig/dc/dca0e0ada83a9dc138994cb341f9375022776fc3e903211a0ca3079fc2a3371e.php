<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_06283671829b0d0e4a721786c3a5aa6eb50036bd443b16146a1ffb93b6ffb2fc extends Twig_Template
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
        $__internal_ee4114344cb452b38bdf1f5b07878ad87ff10f91c5ebf4db7522d9e3b7977061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4114344cb452b38bdf1f5b07878ad87ff10f91c5ebf4db7522d9e3b7977061->enter($__internal_ee4114344cb452b38bdf1f5b07878ad87ff10f91c5ebf4db7522d9e3b7977061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e4b1c6100395f875c40e08d7f03a28efc601bebd918acb6a47115f89c2c4774c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b1c6100395f875c40e08d7f03a28efc601bebd918acb6a47115f89c2c4774c->enter($__internal_e4b1c6100395f875c40e08d7f03a28efc601bebd918acb6a47115f89c2c4774c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ee4114344cb452b38bdf1f5b07878ad87ff10f91c5ebf4db7522d9e3b7977061->leave($__internal_ee4114344cb452b38bdf1f5b07878ad87ff10f91c5ebf4db7522d9e3b7977061_prof);

        
        $__internal_e4b1c6100395f875c40e08d7f03a28efc601bebd918acb6a47115f89c2c4774c->leave($__internal_e4b1c6100395f875c40e08d7f03a28efc601bebd918acb6a47115f89c2c4774c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
