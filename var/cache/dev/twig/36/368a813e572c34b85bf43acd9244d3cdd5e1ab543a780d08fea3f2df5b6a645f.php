<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b94036955f1ef99aa4228706d8879d1ad4a12798997f561cdcfb3789457556ab extends Twig_Template
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
        $__internal_85c317aa1a3ed850e2c35aed9b477c1be55d0d0836393063f141151291ef8c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c317aa1a3ed850e2c35aed9b477c1be55d0d0836393063f141151291ef8c8b->enter($__internal_85c317aa1a3ed850e2c35aed9b477c1be55d0d0836393063f141151291ef8c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ba63d72e927e578dbea0b8269a63de32a35c84509ddd5e0b8d18989459f7a587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba63d72e927e578dbea0b8269a63de32a35c84509ddd5e0b8d18989459f7a587->enter($__internal_ba63d72e927e578dbea0b8269a63de32a35c84509ddd5e0b8d18989459f7a587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_85c317aa1a3ed850e2c35aed9b477c1be55d0d0836393063f141151291ef8c8b->leave($__internal_85c317aa1a3ed850e2c35aed9b477c1be55d0d0836393063f141151291ef8c8b_prof);

        
        $__internal_ba63d72e927e578dbea0b8269a63de32a35c84509ddd5e0b8d18989459f7a587->leave($__internal_ba63d72e927e578dbea0b8269a63de32a35c84509ddd5e0b8d18989459f7a587_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
