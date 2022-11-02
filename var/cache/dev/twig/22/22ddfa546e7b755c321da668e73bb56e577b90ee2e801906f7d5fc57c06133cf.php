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

/* partials/courseCard.html.twig */
class __TwigTemplate_f4a5b6443a450be868390976f1ca2814ac27a042796fa93d83a0f32c8500bc47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/courseCard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/courseCard.html.twig"));

        // line 6
        echo "
<div class=\"course-card\">
    <div class=\"course-card__categories\">
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 9, $this->source); })()), "categories", [], "any", false, false, false, 9)) {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 10, $this->source); })()), "categories", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 11
                echo "                <div class=\"course-card__category\">
                    <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["categorySlug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 12)]) . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 12, $this->source); })()), "queryString", [], "any", false, false, false, 12)), "html", null, true);
                echo "\" class=\"course-card__category-link\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 12), "html", null, true);
                echo "</a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
        }
        // line 16
        echo "    </div>

    <h2 class=\"course-card__title\">
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course", ["courseSlug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 19, $this->source); })()), "slug", [], "any", false, false, false, 19)]) . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 19, $this->source); })()), "queryString", [], "any", false, false, false, 19)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</a>
        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 20, $this->source); })()), "hasEditorialFeaturesLink", [], "any", false, false, false, 20)) {
            // line 21
            echo "            ";
            $this->loadTemplate("partials/entryState.html.twig", "partials/courseCard.html.twig", 21)->display(twig_to_array(["entry" => (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 21, $this->source); })())]));
            // line 22
            echo "        ";
        }
        // line 23
        echo "    </h2>

    <p class=\"course-card__description\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 25, $this->source); })()), "shortDescription", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>

    <div class=\"course-card__link-wrapper\">
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course", ["courseSlug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 28, $this->source); })()), "slug", [], "any", false, false, false, 28)]) . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 28, $this->source); })()), "queryString", [], "any", false, false, false, 28)), "html", null, true);
        echo "\" class=\"course-card__link\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("viewCourseLabel"), "html", null, true);
        echo "</a>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/courseCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  95 => 25,  91 => 23,  88 => 22,  85 => 21,  83 => 20,  77 => 19,  72 => 16,  69 => 15,  58 => 12,  55 => 11,  50 => 10,  48 => 9,  43 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: partials/courseCard.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry course
 #}

<div class=\"course-card\">
    <div class=\"course-card__categories\">
        {% if course.categories %}
            {% for category in course.categories %}
                <div class=\"course-card__category\">
                    <a href=\"{{ path('category', {categorySlug: category.slug}) ~ state.queryString }}\" class=\"course-card__category-link\">{{ category.title }}</a>
                </div>
            {% endfor %}
        {% endif %}
    </div>

    <h2 class=\"course-card__title\">
        <a href=\"{{ path('course', {courseSlug: course.slug}) ~ state.queryString }}\">{{ course.title }}</a>
        {% if state.hasEditorialFeaturesLink %}
            {% include 'partials/entryState.html.twig' with {entry: course} only %}
        {% endif %}
    </h2>

    <p class=\"course-card__description\">{{ course.shortDescription }}</p>

    <div class=\"course-card__link-wrapper\">
        <a href=\"{{ path('course', {courseSlug: course.slug}) ~ state.queryString }}\" class=\"course-card__link\">{{ 'viewCourseLabel'|trans }}</a>
    </div>
</div>
", "partials/courseCard.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/partials/courseCard.html.twig");
    }
}
