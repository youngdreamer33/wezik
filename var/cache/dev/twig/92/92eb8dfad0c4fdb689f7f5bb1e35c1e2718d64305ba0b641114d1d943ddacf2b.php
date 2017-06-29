<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_84bffc01b3a8791e156c56bf269869a667031320373b9df9364c7f8e87c9a8cd extends Twig_Template
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
        $__internal_e79a2f1a1a488e157ca5c9ae5cc05ec85ed2505f622d853c0996a8c9d221c348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79a2f1a1a488e157ca5c9ae5cc05ec85ed2505f622d853c0996a8c9d221c348->enter($__internal_e79a2f1a1a488e157ca5c9ae5cc05ec85ed2505f622d853c0996a8c9d221c348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_eec9ac951de6a6d0035318161850e8e9e7d76c1230ce0b595e6ceb7142f974f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec9ac951de6a6d0035318161850e8e9e7d76c1230ce0b595e6ceb7142f974f8->enter($__internal_eec9ac951de6a6d0035318161850e8e9e7d76c1230ce0b595e6ceb7142f974f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e79a2f1a1a488e157ca5c9ae5cc05ec85ed2505f622d853c0996a8c9d221c348->leave($__internal_e79a2f1a1a488e157ca5c9ae5cc05ec85ed2505f622d853c0996a8c9d221c348_prof);

        
        $__internal_eec9ac951de6a6d0035318161850e8e9e7d76c1230ce0b595e6ceb7142f974f8->leave($__internal_eec9ac951de6a6d0035318161850e8e9e7d76c1230ce0b595e6ceb7142f974f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
