<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f378dcc3b2e9f12edff92b4e20d08b3368eb0d8e4c628d0f184d24acca9faf18 extends Twig_Template
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
        $__internal_e1ec139a24b214de178b981841f5deb41bc7ea99745d31dcb0aee70ed3385eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ec139a24b214de178b981841f5deb41bc7ea99745d31dcb0aee70ed3385eef->enter($__internal_e1ec139a24b214de178b981841f5deb41bc7ea99745d31dcb0aee70ed3385eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f97e9b981f6f883aec43439bb3c6714b51c487e433553c7c3edbb27f4eb7d567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97e9b981f6f883aec43439bb3c6714b51c487e433553c7c3edbb27f4eb7d567->enter($__internal_f97e9b981f6f883aec43439bb3c6714b51c487e433553c7c3edbb27f4eb7d567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e1ec139a24b214de178b981841f5deb41bc7ea99745d31dcb0aee70ed3385eef->leave($__internal_e1ec139a24b214de178b981841f5deb41bc7ea99745d31dcb0aee70ed3385eef_prof);

        
        $__internal_f97e9b981f6f883aec43439bb3c6714b51c487e433553c7c3edbb27f4eb7d567->leave($__internal_f97e9b981f6f883aec43439bb3c6714b51c487e433553c7c3edbb27f4eb7d567_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
