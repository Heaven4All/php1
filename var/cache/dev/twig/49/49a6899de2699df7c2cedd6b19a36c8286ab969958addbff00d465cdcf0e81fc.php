<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* error.html.twig */
class __TwigTemplate_4ebb4fa28294ab9fdc281a128a70566ffd65381e55c7e966f75d2fe38f85edb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "error.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo "Error";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"layout-centered\">
        <div class=\"error\">
            <h1>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("somethingWentWrongLabel"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 15, $this->source); })()), "statusCode", [], "any", false, false, false, 15), "html", null, true);
        echo ")</h1>

            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 17, $this->source); })()), "message", [], "any", false, false, false, 17)) {
            // line 18
            echo "                <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 18, $this->source); })()), "message", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
            ";
        }
        // line 20
        echo "
            <h2>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hintsLabel"), "html", null, true);
        echo "</h2>
            <ul>
                ";
        // line 23
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 23, $this->source); })()), "statusCode", [], "any", false, false, false, 23), 404))) {
            // line 24
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("notFoundErrorHint"), "html", null, true);
            echo "</li>
                    <li>";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("draftOrPublishedErrorHint"), "html", null, true);
            echo "</li>
                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 26, $this->source); })()), "statusCode", [], "any", false, false, false, 26), 400))) {
            // line 27
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contentModelChangedErrorHint"), "html", null, true);
            echo "</li>
                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 28, $this->source); })()), "statusCode", [], "any", false, false, false, 28), 401))) {
            // line 29
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("verifyCredentialsErrorHint"), "html", null, true);
            echo "</li>
                ";
        } else {
            // line 31
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contentModelChangedErrorHint"), "html", null, true);
            echo "</li>
                    <li>";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("draftOrPublishedErrorHint"), "html", null, true);
            echo "</li>
                    <li>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("localeContentErrorHint"), "html", null, true);
            echo "</li>
                ";
        }
        // line 35
        echo "            </ul>

            ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 37, $this->source); })()), "usesCookieCredentials", [], "any", false, false, false, 37)) {
            // line 38
            echo "                <form method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset");
            echo "\">
                    <p>
                        <button type=\"submit\">";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetCredentialsLabel"), "html", null, true);
            echo "</button>
                    </p>
                </form>
            ";
        }
        // line 44
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 44,  167 => 40,  161 => 38,  159 => 37,  155 => 35,  150 => 33,  146 => 32,  141 => 31,  135 => 29,  133 => 28,  128 => 27,  126 => 26,  122 => 25,  117 => 24,  115 => 23,  110 => 21,  107 => 20,  101 => 18,  99 => 17,  92 => 15,  88 => 13,  78 => 12,  59 => 10,  36 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: error.html.twig
 *
 * @param \\Exception exception
 #}


{% extends 'base.html.twig' %}

{% block page_title %}Error{% endblock %}

{% block body %}
    <div class=\"layout-centered\">
        <div class=\"error\">
            <h1>{{ 'somethingWentWrongLabel'|trans }} ({{ exception.statusCode }})</h1>

            {% if exception.message %}
                <p>{{ exception.message }}</p>
            {% endif %}

            <h2>{{ 'hintsLabel'|trans }}</h2>
            <ul>
                {% if exception.statusCode == 404 %}
                    <li>{{ 'notFoundErrorHint'|trans }}</li>
                    <li>{{ 'draftOrPublishedErrorHint'|trans }}</li>
                {% elseif exception.statusCode == 400 %}
                    <li>{{ 'contentModelChangedErrorHint'|trans }}</li>
                {% elseif exception.statusCode == 401 %}
                    <li>{{ 'verifyCredentialsErrorHint'|trans }}</li>
                {% else %}
                    <li>{{ 'contentModelChangedErrorHint'|trans }}</li>
                    <li>{{ 'draftOrPublishedErrorHint'|trans }}</li>
                    <li>{{ 'localeContentErrorHint'|trans }}</li>
                {% endif %}
            </ul>

            {% if state.usesCookieCredentials %}
                <form method=\"post\" action=\"{{ path('reset') }}\">
                    <p>
                        <button type=\"submit\">{{ 'resetCredentialsLabel'|trans }}</button>
                    </p>
                </form>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "error.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/error.html.twig");
    }
}
