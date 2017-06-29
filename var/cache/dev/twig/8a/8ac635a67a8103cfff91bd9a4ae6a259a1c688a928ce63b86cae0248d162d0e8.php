<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_42ce41861ced31d0d49c6ae8c8237ed679a215ace33a0c50873e78224aa6b60f extends Twig_Template
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
        $__internal_807f125200775baf9cdc6e31472cd7c09f29db6a15862f6710221e67dc9b53a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807f125200775baf9cdc6e31472cd7c09f29db6a15862f6710221e67dc9b53a9->enter($__internal_807f125200775baf9cdc6e31472cd7c09f29db6a15862f6710221e67dc9b53a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c2ce5b72d4aaf82a348554ae100775f80f9a85ae395a7e49c60e0aa29b6f584b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ce5b72d4aaf82a348554ae100775f80f9a85ae395a7e49c60e0aa29b6f584b->enter($__internal_c2ce5b72d4aaf82a348554ae100775f80f9a85ae395a7e49c60e0aa29b6f584b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_807f125200775baf9cdc6e31472cd7c09f29db6a15862f6710221e67dc9b53a9->leave($__internal_807f125200775baf9cdc6e31472cd7c09f29db6a15862f6710221e67dc9b53a9_prof);

        
        $__internal_c2ce5b72d4aaf82a348554ae100775f80f9a85ae395a7e49c60e0aa29b6f584b->leave($__internal_c2ce5b72d4aaf82a348554ae100775f80f9a85ae395a7e49c60e0aa29b6f584b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
