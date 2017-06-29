<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5b349ab377de92971643c7343198f0d5bbb7dfa806850208245132de72176fec extends Twig_Template
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
        $__internal_33c04ef2fb47107e38ab76d298c5537659fd13260b5c3faec5f7c4076c4bd63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c04ef2fb47107e38ab76d298c5537659fd13260b5c3faec5f7c4076c4bd63b->enter($__internal_33c04ef2fb47107e38ab76d298c5537659fd13260b5c3faec5f7c4076c4bd63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_d3a5b240bd5e2ff2f68b7a12aace2b317cd1b1b761c2ebfe160891f89c0c6a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a5b240bd5e2ff2f68b7a12aace2b317cd1b1b761c2ebfe160891f89c0c6a3b->enter($__internal_d3a5b240bd5e2ff2f68b7a12aace2b317cd1b1b761c2ebfe160891f89c0c6a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_33c04ef2fb47107e38ab76d298c5537659fd13260b5c3faec5f7c4076c4bd63b->leave($__internal_33c04ef2fb47107e38ab76d298c5537659fd13260b5c3faec5f7c4076c4bd63b_prof);

        
        $__internal_d3a5b240bd5e2ff2f68b7a12aace2b317cd1b1b761c2ebfe160891f89c0c6a3b->leave($__internal_d3a5b240bd5e2ff2f68b7a12aace2b317cd1b1b761c2ebfe160891f89c0c6a3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
