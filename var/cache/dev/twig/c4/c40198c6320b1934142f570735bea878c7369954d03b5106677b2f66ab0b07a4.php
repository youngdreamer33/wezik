<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_54c5a4d6f802354d4be7d6abd73e7c75058f1bd2f10f6a30536e3a7f5fb4bb73 extends Twig_Template
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
        $__internal_cbe0b70bbe2dfb46c12e8ed4bec0ad80cad348cb03bda5b0ecd2afd70b1cf64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe0b70bbe2dfb46c12e8ed4bec0ad80cad348cb03bda5b0ecd2afd70b1cf64f->enter($__internal_cbe0b70bbe2dfb46c12e8ed4bec0ad80cad348cb03bda5b0ecd2afd70b1cf64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_4612bc465a996acf87fbee81c1a3e70f0de248a157ee4527b2c8bf263e7037af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4612bc465a996acf87fbee81c1a3e70f0de248a157ee4527b2c8bf263e7037af->enter($__internal_4612bc465a996acf87fbee81c1a3e70f0de248a157ee4527b2c8bf263e7037af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_cbe0b70bbe2dfb46c12e8ed4bec0ad80cad348cb03bda5b0ecd2afd70b1cf64f->leave($__internal_cbe0b70bbe2dfb46c12e8ed4bec0ad80cad348cb03bda5b0ecd2afd70b1cf64f_prof);

        
        $__internal_4612bc465a996acf87fbee81c1a3e70f0de248a157ee4527b2c8bf263e7037af->leave($__internal_4612bc465a996acf87fbee81c1a3e70f0de248a157ee4527b2c8bf263e7037af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
