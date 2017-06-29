<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e14ac906de6e6ed43444fa2adaf442ec418033f443edb94dbbe8383672eb0319 extends Twig_Template
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
        $__internal_bd8163d427129ae46f5bc9b15a464fa98e43b1a26844931153d5e76cb4bdd5c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8163d427129ae46f5bc9b15a464fa98e43b1a26844931153d5e76cb4bdd5c2->enter($__internal_bd8163d427129ae46f5bc9b15a464fa98e43b1a26844931153d5e76cb4bdd5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_aeb12297abfb0ce8cc4125a559ebecebf3db4d7e550476e73b8855dae9776902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb12297abfb0ce8cc4125a559ebecebf3db4d7e550476e73b8855dae9776902->enter($__internal_aeb12297abfb0ce8cc4125a559ebecebf3db4d7e550476e73b8855dae9776902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bd8163d427129ae46f5bc9b15a464fa98e43b1a26844931153d5e76cb4bdd5c2->leave($__internal_bd8163d427129ae46f5bc9b15a464fa98e43b1a26844931153d5e76cb4bdd5c2_prof);

        
        $__internal_aeb12297abfb0ce8cc4125a559ebecebf3db4d7e550476e73b8855dae9776902->leave($__internal_aeb12297abfb0ce8cc4125a559ebecebf3db4d7e550476e73b8855dae9776902_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
