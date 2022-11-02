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

/* landingPage.html.twig */
class __TwigTemplate_5005d7cb6169b8390848a4242304d9832ff22f22fd135cee77f166ea73b5319d extends Template
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
        // line 7
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landingPage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landingPage.html.twig"));

        // line 9
        $context["title"] = twig_get_attribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9);
        // line 7
        $this->parent = $this->loadTemplate("base.html.twig", "landingPage.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 12
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 16, $this->source); })()), "slug", [], "any", false, false, false, 16), "home"))) {
            // line 17
            echo "        <div class=\"layout-centered\">
            ";
            // line 18
            $this->loadTemplate("partials/breadcrumb.html.twig", "landingPage.html.twig", 18)->display(twig_to_array([]));
            // line 19
            echo "        </div>
    ";
        }
        // line 21
        echo "
    <div class=\"layout-centered\">
        ";
        // line 23
        $this->loadTemplate("partials/editorialFeatures.html.twig", "landingPage.html.twig", 23)->display(twig_to_array(["entry" => (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 23, $this->source); })())]));
        // line 24
        echo "    </div>

    <div class=\"modules-container\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 27, $this->source); })()), "contentModules", [], "any", false, false, false, 27));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 28
            echo "            ";
            $context["contentTypeId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "contentType", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28);
            // line 29
            echo "            ";
            if ((0 === twig_compare((isset($context["contentTypeId"]) || array_key_exists("contentTypeId", $context) ? $context["contentTypeId"] : (function () { throw new RuntimeError('Variable "contentTypeId" does not exist.', 29, $this->source); })()), "layoutCopy"))) {
                // line 30
                echo "                ";
                $this->loadTemplate("partials/moduleCopy.html.twig", "landingPage.html.twig", 30)->display(twig_to_array(["module" => $context["module"]]));
                // line 31
                echo "            ";
            }
            // line 32
            echo "
            ";
            // line 33
            if ((0 === twig_compare((isset($context["contentTypeId"]) || array_key_exists("contentTypeId", $context) ? $context["contentTypeId"] : (function () { throw new RuntimeError('Variable "contentTypeId" does not exist.', 33, $this->source); })()), "layoutHeroImage"))) {
                // line 34
                echo "                ";
                $this->loadTemplate("partials/moduleHeroImage.html.twig", "landingPage.html.twig", 34)->display(twig_to_array(["module" => $context["module"]]));
                // line 35
                echo "            ";
            }
            // line 36
            echo "
            ";
            // line 37
            if ((0 === twig_compare((isset($context["contentTypeId"]) || array_key_exists("contentTypeId", $context) ? $context["contentTypeId"] : (function () { throw new RuntimeError('Variable "contentTypeId" does not exist.', 37, $this->source); })()), "layoutHighlightedCourse"))) {
                // line 38
                echo "                ";
                $this->loadTemplate("partials/moduleHighlightedCourse.html.twig", "landingPage.html.twig", 38)->display(twig_to_array(["module" => $context["module"]]));
                // line 39
                echo "            ";
            }
            // line 40
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "            ";
            $this->loadTemplate("partials/emptyModule.html.twig", "landingPage.html.twig", 41)->display(twig_to_array([]));
            // line 42
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "landingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 43,  165 => 42,  162 => 41,  157 => 40,  154 => 39,  151 => 38,  149 => 37,  146 => 36,  143 => 35,  140 => 34,  138 => 33,  135 => 32,  132 => 31,  129 => 30,  126 => 29,  123 => 28,  118 => 27,  113 => 24,  111 => 23,  107 => 21,  103 => 19,  101 => 18,  98 => 17,  95 => 16,  85 => 15,  72 => 12,  62 => 11,  51 => 7,  49 => 9,  36 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: landingPage.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry landingPage
 #}

{% extends 'base.html.twig' %}

{% set title = landingPage.title %}

{% block page_title %}
    {{ title }}
{% endblock %}

{% block body %}
    {% if landingPage.slug != 'home' %}
        <div class=\"layout-centered\">
            {% include 'partials/breadcrumb.html.twig' with {} only %}
        </div>
    {% endif %}

    <div class=\"layout-centered\">
        {% include 'partials/editorialFeatures.html.twig' with {entry: landingPage} only %}
    </div>

    <div class=\"modules-container\">
        {% for module in landingPage.contentModules %}
            {% set contentTypeId = module.contentType.id %}
            {% if contentTypeId == 'layoutCopy' %}
                {% include 'partials/moduleCopy.html.twig' with {module: module} only %}
            {% endif %}

            {% if contentTypeId == 'layoutHeroImage' %}
                {% include 'partials/moduleHeroImage.html.twig' with {module: module} only %}
            {% endif %}

            {% if contentTypeId == 'layoutHighlightedCourse' %}
                {% include 'partials/moduleHighlightedCourse.html.twig' with {module: module} only %}
            {% endif %}
        {% else %}
            {% include 'partials/emptyModule.html.twig' with {} only %}
        {% endfor %}
    </div>
{% endblock %}
", "landingPage.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/landingPage.html.twig");
    }
}
