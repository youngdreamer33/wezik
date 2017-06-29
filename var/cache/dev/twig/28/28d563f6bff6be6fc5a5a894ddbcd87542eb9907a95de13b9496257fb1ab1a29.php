<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_820a1a4c1603624aeffe9558c4da932c475583f6dccba97362948e15d3a71e07 extends Twig_Template
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
        $__internal_84efe50abb76fd1fc67b558de16ae99f82cbefe176fdad3b826e255bcb8ec371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84efe50abb76fd1fc67b558de16ae99f82cbefe176fdad3b826e255bcb8ec371->enter($__internal_84efe50abb76fd1fc67b558de16ae99f82cbefe176fdad3b826e255bcb8ec371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_e9ac1122e3022aa379664df136e43d9b0f83c1336688a0beddc85325ac1e4a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ac1122e3022aa379664df136e43d9b0f83c1336688a0beddc85325ac1e4a7c->enter($__internal_e9ac1122e3022aa379664df136e43d9b0f83c1336688a0beddc85325ac1e4a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_84efe50abb76fd1fc67b558de16ae99f82cbefe176fdad3b826e255bcb8ec371->leave($__internal_84efe50abb76fd1fc67b558de16ae99f82cbefe176fdad3b826e255bcb8ec371_prof);

        
        $__internal_e9ac1122e3022aa379664df136e43d9b0f83c1336688a0beddc85325ac1e4a7c->leave($__internal_e9ac1122e3022aa379664df136e43d9b0f83c1336688a0beddc85325ac1e4a7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
