<?php

/* @WeZik/Security/login.html.twig */
class __TwigTemplate_87c611e268ea7ff386e99686ec3e92adf6ec7f7ee3cec292eb2533ee4fbeb15c extends Twig_Template
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
        $__internal_966e176fab2fa816044011f9cfa17e29a624936ac938b1aee1e040afce805c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_966e176fab2fa816044011f9cfa17e29a624936ac938b1aee1e040afce805c8f->enter($__internal_966e176fab2fa816044011f9cfa17e29a624936ac938b1aee1e040afce805c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WeZik/Security/login.html.twig"));

        $__internal_1dbc85f07683b52264ec3ea9a7850ad87bf7f5cf24ad13fbc904a442db24ca5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbc85f07683b52264ec3ea9a7850ad87bf7f5cf24ad13fbc904a442db24ca5c->enter($__internal_1dbc85f07683b52264ec3ea9a7850ad87bf7f5cf24ad13fbc904a442db24ca5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WeZik/Security/login.html.twig"));

        // line 1
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 1, $this->getSourceContext()); })())) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 2, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 2, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 17
        echo "
    <button type=\"submit\">login</button>
</form>";
        
        $__internal_966e176fab2fa816044011f9cfa17e29a624936ac938b1aee1e040afce805c8f->leave($__internal_966e176fab2fa816044011f9cfa17e29a624936ac938b1aee1e040afce805c8f_prof);

        
        $__internal_1dbc85f07683b52264ec3ea9a7850ad87bf7f5cf24ad13fbc904a442db24ca5c->leave($__internal_1dbc85f07683b52264ec3ea9a7850ad87bf7f5cf24ad13fbc904a442db24ca5c_prof);

    }

    public function getTemplateName()
    {
        return "@WeZik/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  41 => 7,  36 => 5,  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>", "@WeZik/Security/login.html.twig", "/var/www/html/Hackaton/Hackaton48H/wezik/src/WeZikBundle/Resources/views/Security/login.html.twig");
    }
}
