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

/* courses.html.twig */
class __TwigTemplate_b7b228ddf1ec5c0e25ad1fb83d41e693f09346c3fc863a9d9ce4bb92ef047828 extends Template
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
        // line 9
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "courses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "courses.html.twig"));

        // line 11
        $context["title"] = ((((((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 11, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("allCoursesLabel"))) . " (") . twig_length_filter($this->env, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 11, $this->source); })()))) . ")");
        // line 9
        $this->parent = $this->loadTemplate("base.html.twig", "courses.html.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div class=\"layout-no-sidebar\">
        ";
        // line 19
        $this->loadTemplate("partials/breadcrumb.html.twig", "courses.html.twig", 19)->display(twig_to_array([]));
        // line 20
        echo "    </div>

    <div class=\"layout-sidebar\">
        <section class=\"layout-sidebar__sidebar\">
            <div class=\"layout-sidebar__sidebar-header\">
                <h2 class=\"layout-sidebar__sidebar-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("categoriesLabel"), "html", null, true);
        echo "</h2>
            </div>

            <div class=\"layout-sidebar__sidebar-content\">
                <div class=\"sidebar-menu\">
                    <ul class=\"sidebar-menu__list\">
                        <li class=\"sidebar-menu__item\">
                            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("courses") . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 32, $this->source); })()), "queryString", [], "any", false, false, false, 32)), "html", null, true);
        echo "\" class=\"sidebar-menu__link ";
        echo (((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 32, $this->source); })())) ? ("") : ("active"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("allCoursesLabel"), "html", null, true);
        echo "</a>
                        </li>

                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 36
            echo "                            <li class=\"sidebar-menu__item\">
                                <a
                                    href=\"";
            // line 38
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["categorySlug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 38)]) . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 38, $this->source); })()), "queryString", [], "any", false, false, false, 38)), "html", null, true);
            echo "\"
                                    class=\"sidebar-menu__link ";
            // line 39
            echo ((((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 39, $this->source); })()) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, (isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39))))) ? ("active") : (""));
            echo "\"
                                    >";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </ul>
                </div>
            </div>
        </section>

        <section class=\"layout-sidebar__content\">
            <div class=\"courses\">
                <h1>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "</h1>

                ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 52, $this->source); })()), "hasEditorialFeaturesEnabled", [], "any", false, false, false, 52)) {
            // line 53
            echo "                    <div class=\"editorial-features\">
                        <div class=\"editorial-features__item\">
                            <a
                                href=\"https://app.contentful.com/spaces/";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 56, $this->source); })()), "spaceId", [], "any", false, false, false, 56), "html", null, true);
            echo "/entries/?contentTypeId=course\"
                                class=\"editorial-features__text\"
                                target=\"_blank\"
                                rel=\"noopener\"
                            >";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("editInTheWebAppLabel"), "html", null, true);
            echo "</a>

                            <div class=\"editorial-features__hint-wrapper\">
                                <svg class=\"editorial-features__hint-icon\">
                                    <use xlink:href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/icons/icons.svg#info"), "html", null, true);
            echo "\" />
                                    <div class=\"editorial-features__hint-message\">";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("editorialFeaturesHint"), "html", null, true);
            echo "</div>
                                </svg>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 71
        echo "
                <div class=\"grid-list\">
                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 73, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 74
            echo "                        <div class=\"grid-list__item\">
                            ";
            // line 75
            $this->loadTemplate("partials/courseCard.html.twig", "courses.html.twig", 75)->display(twig_to_array(["course" => $context["course"]]));
            // line 76
            echo "                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "                        ";
            $this->loadTemplate("partials/emptyModule.html.twig", "courses.html.twig", 78)->display(twig_to_array([]));
            // line 79
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                </div>
            </div>
        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 80,  223 => 79,  220 => 78,  214 => 76,  212 => 75,  209 => 74,  204 => 73,  200 => 71,  191 => 65,  187 => 64,  180 => 60,  173 => 56,  168 => 53,  166 => 52,  161 => 50,  152 => 43,  143 => 40,  139 => 39,  135 => 38,  131 => 36,  127 => 35,  117 => 32,  107 => 25,  100 => 20,  98 => 19,  95 => 18,  85 => 17,  72 => 14,  62 => 13,  51 => 9,  49 => 11,  36 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: courses.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry[]    courses
 * @param Contentful\\Delivery\\Resource\\Entry[]    categories
 * @param Contentful\\Delivery\\Resource\\Entry|null currentCategory
 #}

{% extends 'base.html.twig' %}

{% set title = (currentCategory ? currentCategory.title : 'allCoursesLabel'|trans) ~ ' (' ~ courses|length ~ ')' %}

{% block page_title %}
    {{ title }}
{% endblock %}

{% block body %}
    <div class=\"layout-no-sidebar\">
        {% include 'partials/breadcrumb.html.twig' with {} only %}
    </div>

    <div class=\"layout-sidebar\">
        <section class=\"layout-sidebar__sidebar\">
            <div class=\"layout-sidebar__sidebar-header\">
                <h2 class=\"layout-sidebar__sidebar-title\">{{ 'categoriesLabel'|trans }}</h2>
            </div>

            <div class=\"layout-sidebar__sidebar-content\">
                <div class=\"sidebar-menu\">
                    <ul class=\"sidebar-menu__list\">
                        <li class=\"sidebar-menu__item\">
                            <a href=\"{{ path('courses') ~ state.queryString }}\" class=\"sidebar-menu__link {{ currentCategory ? '' : 'active' }}\">{{ 'allCoursesLabel'|trans }}</a>
                        </li>

                        {% for category in categories %}
                            <li class=\"sidebar-menu__item\">
                                <a
                                    href=\"{{ path('category', {categorySlug: category.slug}) ~ state.queryString }}\"
                                    class=\"sidebar-menu__link {{ currentCategory and category.id == currentCategory.id ? 'active' : '' }}\"
                                    >{{ category.title }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </section>

        <section class=\"layout-sidebar__content\">
            <div class=\"courses\">
                <h1>{{ title }}</h1>

                {% if state.hasEditorialFeaturesEnabled %}
                    <div class=\"editorial-features\">
                        <div class=\"editorial-features__item\">
                            <a
                                href=\"https://app.contentful.com/spaces/{{ state.spaceId }}/entries/?contentTypeId=course\"
                                class=\"editorial-features__text\"
                                target=\"_blank\"
                                rel=\"noopener\"
                            >{{ 'editInTheWebAppLabel'|trans }}</a>

                            <div class=\"editorial-features__hint-wrapper\">
                                <svg class=\"editorial-features__hint-icon\">
                                    <use xlink:href=\"{{ asset('/icons/icons.svg#info') }}\" />
                                    <div class=\"editorial-features__hint-message\">{{ 'editorialFeaturesHint'|trans }}</div>
                                </svg>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <div class=\"grid-list\">
                    {% for course in courses %}
                        <div class=\"grid-list__item\">
                            {% include 'partials/courseCard.html.twig' with {course: course} only %}
                        </div>
                    {% else %}
                        {% include 'partials/emptyModule.html.twig' with {} only %}
                    {% endfor %}
                </div>
            </div>
        </section>
    </div>
{% endblock %}
", "courses.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/courses.html.twig");
    }
}
