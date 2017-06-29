<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_55e577af491f52354b3c89b72947532c5c88e79088685ddcdb5ed27d52477321 extends Twig_Template
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
        $__internal_d2d749e0cfd0911b3d0cb4c17e86aa2f685b8d932d76025b80d9187dd913f90f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d749e0cfd0911b3d0cb4c17e86aa2f685b8d932d76025b80d9187dd913f90f->enter($__internal_d2d749e0cfd0911b3d0cb4c17e86aa2f685b8d932d76025b80d9187dd913f90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_fa130368c7cf143f52751c7f3a4f01194d128edc1e4b4a4570d2754167f872b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa130368c7cf143f52751c7f3a4f01194d128edc1e4b4a4570d2754167f872b1->enter($__internal_fa130368c7cf143f52751c7f3a4f01194d128edc1e4b4a4570d2754167f872b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d2d749e0cfd0911b3d0cb4c17e86aa2f685b8d932d76025b80d9187dd913f90f->leave($__internal_d2d749e0cfd0911b3d0cb4c17e86aa2f685b8d932d76025b80d9187dd913f90f_prof);

        
        $__internal_fa130368c7cf143f52751c7f3a4f01194d128edc1e4b4a4570d2754167f872b1->leave($__internal_fa130368c7cf143f52751c7f3a4f01194d128edc1e4b4a4570d2754167f872b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
