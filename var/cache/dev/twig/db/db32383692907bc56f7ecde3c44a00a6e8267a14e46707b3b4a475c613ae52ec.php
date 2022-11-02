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

/* imprint.html.twig */
class __TwigTemplate_3053ecd1ea0af2ce850a770f104ebba03435b1a7522d8027608c401de5d3d018 extends Template
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
        // line 5
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imprint.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imprint.html.twig"));

        // line 7
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("imprintLabel");
        // line 5
        $this->parent = $this->loadTemplate("base.html.twig", "imprint.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <div class=\"layout-centered\">
        ";
        // line 15
        $this->loadTemplate("partials/breadcrumb.html.twig", "imprint.html.twig", 15)->display(twig_to_array([]));
        // line 16
        echo "
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</h1>

        <table>
            <tbody>
                <tr>
                    <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("companyLabel"), "html", null, true);
        echo ":</th>
                    <td>Contentful GmbH</td>
                </tr>
                <tr>
                    <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("officeLabel"), "html", null, true);
        echo ":</th>
                    <td>Ritterstr. 12-14 <br /> 10969 Berlin <br /> ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("germanyLabel"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registrationCourtLabel"), "html", null, true);
        echo ":</th>
                    <td>Berlin-Charlottenburg HRB 155607 B</td>
                </tr>
                <tr>
                    <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("managingDirectorLabel"), "html", null, true);
        echo ":</th>
                    <td>Sascha Konietzke</td>
                </tr>
                <tr>
                    <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("vatNumberLabel"), "html", null, true);
        echo ":</th>
                    <td>DE275148225</td>
                </tr>
            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "imprint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 38,  135 => 34,  128 => 30,  122 => 27,  118 => 26,  111 => 22,  103 => 17,  100 => 16,  98 => 15,  95 => 14,  85 => 13,  72 => 10,  62 => 9,  51 => 5,  49 => 7,  36 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: partials/imprint.html.twig
 #}

{% extends 'base.html.twig' %}

{% set title = 'imprintLabel'|trans %}

{% block page_title %}
    {{ title }}
{% endblock %}

{% block body %}
    <div class=\"layout-centered\">
        {% include 'partials/breadcrumb.html.twig' with {} only %}

        <h1>{{ title }}</h1>

        <table>
            <tbody>
                <tr>
                    <th>{{ 'companyLabel'|trans }}:</th>
                    <td>Contentful GmbH</td>
                </tr>
                <tr>
                    <th>{{ 'officeLabel'|trans }}:</th>
                    <td>Ritterstr. 12-14 <br /> 10969 Berlin <br /> {{ 'germanyLabel'|trans }}</td>
                </tr>
                <tr>
                    <th>{{ 'registrationCourtLabel'|trans }}:</th>
                    <td>Berlin-Charlottenburg HRB 155607 B</td>
                </tr>
                <tr>
                    <th>{{ 'managingDirectorLabel'|trans }}:</th>
                    <td>Sascha Konietzke</td>
                </tr>
                <tr>
                    <th>{{ 'vatNumberLabel'|trans }}:</th>
                    <td>DE275148225</td>
                </tr>
            </tbody>
        </table>
    </div>
{% endblock %}
", "imprint.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/imprint.html.twig");
    }
}
