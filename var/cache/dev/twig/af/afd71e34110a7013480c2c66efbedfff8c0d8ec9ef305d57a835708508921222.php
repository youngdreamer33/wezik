<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0ee374c2fe8a283338ba46fde417082b37fcabccf21a9a79c7851ec53785652f extends Twig_Template
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
        $__internal_e60cc15ffe92f2e6843464a745d419bebc752626fd812d812da1750bd97e698a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60cc15ffe92f2e6843464a745d419bebc752626fd812d812da1750bd97e698a->enter($__internal_e60cc15ffe92f2e6843464a745d419bebc752626fd812d812da1750bd97e698a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9670e515d0d8d047bbd607d2c80b2b210d4dab3c6f90a5c1f40052fa021ad7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9670e515d0d8d047bbd607d2c80b2b210d4dab3c6f90a5c1f40052fa021ad7f5->enter($__internal_9670e515d0d8d047bbd607d2c80b2b210d4dab3c6f90a5c1f40052fa021ad7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e60cc15ffe92f2e6843464a745d419bebc752626fd812d812da1750bd97e698a->leave($__internal_e60cc15ffe92f2e6843464a745d419bebc752626fd812d812da1750bd97e698a_prof);

        
        $__internal_9670e515d0d8d047bbd607d2c80b2b210d4dab3c6f90a5c1f40052fa021ad7f5->leave($__internal_9670e515d0d8d047bbd607d2c80b2b210d4dab3c6f90a5c1f40052fa021ad7f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
