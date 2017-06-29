<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_88226d136503b5c3beae2c9d6d245eaaff2fb73033549809776179a4f76efe87 extends Twig_Template
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
        $__internal_41cace0e33760ac7b3f63b490cf867b746ba0684483556f6a4e1cd1cb05f6929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cace0e33760ac7b3f63b490cf867b746ba0684483556f6a4e1cd1cb05f6929->enter($__internal_41cace0e33760ac7b3f63b490cf867b746ba0684483556f6a4e1cd1cb05f6929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e1ac65745c249988309fd4f60759d62c2cec5099a3dc6c40f36caa356e3ec478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ac65745c249988309fd4f60759d62c2cec5099a3dc6c40f36caa356e3ec478->enter($__internal_e1ac65745c249988309fd4f60759d62c2cec5099a3dc6c40f36caa356e3ec478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_41cace0e33760ac7b3f63b490cf867b746ba0684483556f6a4e1cd1cb05f6929->leave($__internal_41cace0e33760ac7b3f63b490cf867b746ba0684483556f6a4e1cd1cb05f6929_prof);

        
        $__internal_e1ac65745c249988309fd4f60759d62c2cec5099a3dc6c40f36caa356e3ec478->leave($__internal_e1ac65745c249988309fd4f60759d62c2cec5099a3dc6c40f36caa356e3ec478_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
