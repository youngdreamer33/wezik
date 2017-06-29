<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_96d51068d2f9b43f1f49567cd605f9ed849cc95184d831df57321922e1a96308 extends Twig_Template
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
        $__internal_96195f7447b18ccc13c980114c5efa262e481e9bdc07f93dafaf221a886da6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96195f7447b18ccc13c980114c5efa262e481e9bdc07f93dafaf221a886da6ac->enter($__internal_96195f7447b18ccc13c980114c5efa262e481e9bdc07f93dafaf221a886da6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_191615fc5b5200dbffd6b45da33bf07d887144a888a0d56c33c00102b6b1f9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191615fc5b5200dbffd6b45da33bf07d887144a888a0d56c33c00102b6b1f9de->enter($__internal_191615fc5b5200dbffd6b45da33bf07d887144a888a0d56c33c00102b6b1f9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_96195f7447b18ccc13c980114c5efa262e481e9bdc07f93dafaf221a886da6ac->leave($__internal_96195f7447b18ccc13c980114c5efa262e481e9bdc07f93dafaf221a886da6ac_prof);

        
        $__internal_191615fc5b5200dbffd6b45da33bf07d887144a888a0d56c33c00102b6b1f9de->leave($__internal_191615fc5b5200dbffd6b45da33bf07d887144a888a0d56c33c00102b6b1f9de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dee7658d7e7b39a601e909baa15c140082dc30e509f5166cfb4eaaae05a6cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dee7658d7e7b39a601e909baa15c140082dc30e509f5166cfb4eaaae05a6cb5->enter($__internal_4dee7658d7e7b39a601e909baa15c140082dc30e509f5166cfb4eaaae05a6cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_398ddf33d6e49cca961abbdc7670025990376209946ded1af3c8b59fdcb274bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398ddf33d6e49cca961abbdc7670025990376209946ded1af3c8b59fdcb274bd->enter($__internal_398ddf33d6e49cca961abbdc7670025990376209946ded1af3c8b59fdcb274bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_398ddf33d6e49cca961abbdc7670025990376209946ded1af3c8b59fdcb274bd->leave($__internal_398ddf33d6e49cca961abbdc7670025990376209946ded1af3c8b59fdcb274bd_prof);

        
        $__internal_4dee7658d7e7b39a601e909baa15c140082dc30e509f5166cfb4eaaae05a6cb5->leave($__internal_4dee7658d7e7b39a601e909baa15c140082dc30e509f5166cfb4eaaae05a6cb5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_33e0a51fdef020b7dc0e33058988dfda21011ea6d7a9c011ab85229cd69d24d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e0a51fdef020b7dc0e33058988dfda21011ea6d7a9c011ab85229cd69d24d9->enter($__internal_33e0a51fdef020b7dc0e33058988dfda21011ea6d7a9c011ab85229cd69d24d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1d2bef2e64314fb3a70d6e677818ed02ef82729e0bde91c8a03fb072a8953e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2bef2e64314fb3a70d6e677818ed02ef82729e0bde91c8a03fb072a8953e68->enter($__internal_1d2bef2e64314fb3a70d6e677818ed02ef82729e0bde91c8a03fb072a8953e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1d2bef2e64314fb3a70d6e677818ed02ef82729e0bde91c8a03fb072a8953e68->leave($__internal_1d2bef2e64314fb3a70d6e677818ed02ef82729e0bde91c8a03fb072a8953e68_prof);

        
        $__internal_33e0a51fdef020b7dc0e33058988dfda21011ea6d7a9c011ab85229cd69d24d9->leave($__internal_33e0a51fdef020b7dc0e33058988dfda21011ea6d7a9c011ab85229cd69d24d9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4b67baed531a15476eea9133e2d3f299be515905807218707d83389ab2e59b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b67baed531a15476eea9133e2d3f299be515905807218707d83389ab2e59b0->enter($__internal_b4b67baed531a15476eea9133e2d3f299be515905807218707d83389ab2e59b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34e45476be9bc28355b15421ad863c6baa40508e0c60f0ed32c22368d62b2b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e45476be9bc28355b15421ad863c6baa40508e0c60f0ed32c22368d62b2b33->enter($__internal_34e45476be9bc28355b15421ad863c6baa40508e0c60f0ed32c22368d62b2b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34e45476be9bc28355b15421ad863c6baa40508e0c60f0ed32c22368d62b2b33->leave($__internal_34e45476be9bc28355b15421ad863c6baa40508e0c60f0ed32c22368d62b2b33_prof);

        
        $__internal_b4b67baed531a15476eea9133e2d3f299be515905807218707d83389ab2e59b0->leave($__internal_b4b67baed531a15476eea9133e2d3f299be515905807218707d83389ab2e59b0_prof);

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
