<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_83df3f9e28c71df9e9987775ebf5c6599aba14bdaa3ff61ef7eb114c8fe6b17c extends Twig_Template
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
        $__internal_3e3739e138db14fc09ae59b33b9c94159fcfb928dea6812d963380c58778f834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3739e138db14fc09ae59b33b9c94159fcfb928dea6812d963380c58778f834->enter($__internal_3e3739e138db14fc09ae59b33b9c94159fcfb928dea6812d963380c58778f834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9d84d71018072c0263627070e087fd328bed0f54031c4fad6d56797223833918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d84d71018072c0263627070e087fd328bed0f54031c4fad6d56797223833918->enter($__internal_9d84d71018072c0263627070e087fd328bed0f54031c4fad6d56797223833918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3e3739e138db14fc09ae59b33b9c94159fcfb928dea6812d963380c58778f834->leave($__internal_3e3739e138db14fc09ae59b33b9c94159fcfb928dea6812d963380c58778f834_prof);

        
        $__internal_9d84d71018072c0263627070e087fd328bed0f54031c4fad6d56797223833918->leave($__internal_9d84d71018072c0263627070e087fd328bed0f54031c4fad6d56797223833918_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
