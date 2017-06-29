<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_eb4df13f3672c1515f40b0c1cb09d4fdeaf431867ed9fdc22ac3d90bdbb298e0 extends Twig_Template
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
        $__internal_68a643f461eec6250fc39d29a461cc777a15fd3249ebf76120eed9229e7af2e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a643f461eec6250fc39d29a461cc777a15fd3249ebf76120eed9229e7af2e7->enter($__internal_68a643f461eec6250fc39d29a461cc777a15fd3249ebf76120eed9229e7af2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_07e1fd22f8b486b2ce973809f9cd0acc2014089d72ce7ecdf711ec22551e8c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e1fd22f8b486b2ce973809f9cd0acc2014089d72ce7ecdf711ec22551e8c89->enter($__internal_07e1fd22f8b486b2ce973809f9cd0acc2014089d72ce7ecdf711ec22551e8c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_68a643f461eec6250fc39d29a461cc777a15fd3249ebf76120eed9229e7af2e7->leave($__internal_68a643f461eec6250fc39d29a461cc777a15fd3249ebf76120eed9229e7af2e7_prof);

        
        $__internal_07e1fd22f8b486b2ce973809f9cd0acc2014089d72ce7ecdf711ec22551e8c89->leave($__internal_07e1fd22f8b486b2ce973809f9cd0acc2014089d72ce7ecdf711ec22551e8c89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
