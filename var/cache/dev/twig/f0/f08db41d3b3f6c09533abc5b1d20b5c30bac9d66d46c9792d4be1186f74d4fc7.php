<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0e21885354f73765073de805c91031adee34a2210c64c06633af4004d09e13a6 extends Twig_Template
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
        $__internal_4a917a960460eba019d6ed98c3dad177f96181c98e9d99234216478d2515d421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a917a960460eba019d6ed98c3dad177f96181c98e9d99234216478d2515d421->enter($__internal_4a917a960460eba019d6ed98c3dad177f96181c98e9d99234216478d2515d421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5ff3a9cca3d20d055135ac557214275bf8325d65d95fa79c5b93a480eb5b151c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff3a9cca3d20d055135ac557214275bf8325d65d95fa79c5b93a480eb5b151c->enter($__internal_5ff3a9cca3d20d055135ac557214275bf8325d65d95fa79c5b93a480eb5b151c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4a917a960460eba019d6ed98c3dad177f96181c98e9d99234216478d2515d421->leave($__internal_4a917a960460eba019d6ed98c3dad177f96181c98e9d99234216478d2515d421_prof);

        
        $__internal_5ff3a9cca3d20d055135ac557214275bf8325d65d95fa79c5b93a480eb5b151c->leave($__internal_5ff3a9cca3d20d055135ac557214275bf8325d65d95fa79c5b93a480eb5b151c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
