<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_088e3193ef70bb6bafbdb5b67faf1b58e27d448c89ca0ff9004d8adcb50a3518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5d6d4839937fa3a49768edfa9640ebe3f96727e3561e3581c715216f6a042b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d6d4839937fa3a49768edfa9640ebe3f96727e3561e3581c715216f6a042b7->enter($__internal_d5d6d4839937fa3a49768edfa9640ebe3f96727e3561e3581c715216f6a042b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6429d08a97f2d71905a0b785a96c9870c251aded725a25afc85bafd8bd8e6746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6429d08a97f2d71905a0b785a96c9870c251aded725a25afc85bafd8bd8e6746->enter($__internal_6429d08a97f2d71905a0b785a96c9870c251aded725a25afc85bafd8bd8e6746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d5d6d4839937fa3a49768edfa9640ebe3f96727e3561e3581c715216f6a042b7->leave($__internal_d5d6d4839937fa3a49768edfa9640ebe3f96727e3561e3581c715216f6a042b7_prof);

        
        $__internal_6429d08a97f2d71905a0b785a96c9870c251aded725a25afc85bafd8bd8e6746->leave($__internal_6429d08a97f2d71905a0b785a96c9870c251aded725a25afc85bafd8bd8e6746_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44bbbda161edebd43a9ba9ce9f0eec991986c46b0e79549497f3106d362e0025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bbbda161edebd43a9ba9ce9f0eec991986c46b0e79549497f3106d362e0025->enter($__internal_44bbbda161edebd43a9ba9ce9f0eec991986c46b0e79549497f3106d362e0025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ffbd3859b93343e7f1e263f9c51b631275f06d4bce707f8e1b8bc3b5ee3589ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbd3859b93343e7f1e263f9c51b631275f06d4bce707f8e1b8bc3b5ee3589ea->enter($__internal_ffbd3859b93343e7f1e263f9c51b631275f06d4bce707f8e1b8bc3b5ee3589ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ffbd3859b93343e7f1e263f9c51b631275f06d4bce707f8e1b8bc3b5ee3589ea->leave($__internal_ffbd3859b93343e7f1e263f9c51b631275f06d4bce707f8e1b8bc3b5ee3589ea_prof);

        
        $__internal_44bbbda161edebd43a9ba9ce9f0eec991986c46b0e79549497f3106d362e0025->leave($__internal_44bbbda161edebd43a9ba9ce9f0eec991986c46b0e79549497f3106d362e0025_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e4646aed85ac8bcb7dbf66ef9a2c058de501dd0612554020a57d61636d427b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4646aed85ac8bcb7dbf66ef9a2c058de501dd0612554020a57d61636d427b7e->enter($__internal_e4646aed85ac8bcb7dbf66ef9a2c058de501dd0612554020a57d61636d427b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85746e24847f4fb525cdf28c4a137dbfcca4d12048d4bff4fe0e1edc6fc0fe6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85746e24847f4fb525cdf28c4a137dbfcca4d12048d4bff4fe0e1edc6fc0fe6d->enter($__internal_85746e24847f4fb525cdf28c4a137dbfcca4d12048d4bff4fe0e1edc6fc0fe6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_85746e24847f4fb525cdf28c4a137dbfcca4d12048d4bff4fe0e1edc6fc0fe6d->leave($__internal_85746e24847f4fb525cdf28c4a137dbfcca4d12048d4bff4fe0e1edc6fc0fe6d_prof);

        
        $__internal_e4646aed85ac8bcb7dbf66ef9a2c058de501dd0612554020a57d61636d427b7e->leave($__internal_e4646aed85ac8bcb7dbf66ef9a2c058de501dd0612554020a57d61636d427b7e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3171c648341a59c084b9090ec8b48b858d27c1c4f840422ba24f8d8c007039e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3171c648341a59c084b9090ec8b48b858d27c1c4f840422ba24f8d8c007039e->enter($__internal_e3171c648341a59c084b9090ec8b48b858d27c1c4f840422ba24f8d8c007039e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d08104248daa3b04b67a8f6c4e90dc5cf6f7678489dd4c2d8e360b0e4c28be2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08104248daa3b04b67a8f6c4e90dc5cf6f7678489dd4c2d8e360b0e4c28be2d->enter($__internal_d08104248daa3b04b67a8f6c4e90dc5cf6f7678489dd4c2d8e360b0e4c28be2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d08104248daa3b04b67a8f6c4e90dc5cf6f7678489dd4c2d8e360b0e4c28be2d->leave($__internal_d08104248daa3b04b67a8f6c4e90dc5cf6f7678489dd4c2d8e360b0e4c28be2d_prof);

        
        $__internal_e3171c648341a59c084b9090ec8b48b858d27c1c4f840422ba24f8d8c007039e->leave($__internal_e3171c648341a59c084b9090ec8b48b858d27c1c4f840422ba24f8d8c007039e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
