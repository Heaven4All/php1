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

/* course.html.twig */
class __TwigTemplate_7022ef843132763cb90ae0c9b544a6857c85607cc23cba1beb234695deda6646 extends Template
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
        // line 11
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course.html.twig"));

        // line 13
        $context["title"] = (((isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 13, $this->source); })())) ? (((twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13) . " | ") . twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13))) : (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13)));
        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "course.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"layout-no-sidebar\">
        ";
        // line 21
        $this->loadTemplate("partials/breadcrumb.html.twig", "course.html.twig", 21)->display(twig_to_array([]));
        // line 22
        echo "    </div>

    <div class=\"layout-sidebar\">
        <section class=\"layout-sidebar__sidebar\">
            <div class=\"layout-sidebar__sidebar-header\">
                <h2 class=\"layout-sidebar__sidebar-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tableOfContentsLabel"), "html", null, true);
        echo "</h2>
            </div>

            <div class=\"layout-sidebar__sidebar-content\">
                <div class=\"table-of-contents\">
                    <div class=\"table-of-contents__list\">
                        <div class=\"table-of-contents__item\">
                            <a
                                href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course", ["courseSlug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 35, $this->source); })()), "slug", [], "any", false, false, false, 35)]) . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 35, $this->source); })()), "queryString", [], "any", false, false, false, 35)), "html", null, true);
        echo "\"
                                class=\"table-of-contents__link ";
        // line 36
        echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), (isset($context["visitedLessons"]) || array_key_exists("visitedLessons", $context) ? $context["visitedLessons"] : (function () { throw new RuntimeError('Variable "visitedLessons" does not exist.', 36, $this->source); })()))) ? ("visited") : (""));
        echo " ";
        echo (( !(isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 36, $this->source); })())) ? ("active") : (""));
        echo "\"
                                >";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("courseOverviewLabel"), "html", null, true);
        echo "</a>
                        </div>

                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 40, $this->source); })()), "lessons", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["courseLesson"]) {
            // line 41
            echo "                            <div class=\"table-of-contents__item\">
                                <a
                                    href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lesson", ["courseSlug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 43, $this->source); })()), "slug", [], "any", false, false, false, 43), "lessonSlug" => twig_get_attribute($this->env, $this->source, $context["courseLesson"], "slug", [], "any", false, false, false, 43)]) . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 43, $this->source); })()), "queryString", [], "any", false, false, false, 43)), "html", null, true);
            echo "\"
                                    class=\"table-of-contents__link ";
            // line 44
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["courseLesson"], "id", [], "any", false, false, false, 44), (isset($context["visitedLessons"]) || array_key_exists("visitedLessons", $context) ? $context["visitedLessons"] : (function () { throw new RuntimeError('Variable "visitedLessons" does not exist.', 44, $this->source); })()))) ? ("visited") : (""));
            echo " ";
            echo ((((isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 44, $this->source); })()) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["courseLesson"], "id", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44))))) ? ("active") : (""));
            echo "\"
                                    >";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courseLesson"], "title", [], "any", false, false, false, 45), "html", null, true);
            echo "</a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseLesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </div>
                </div>
            </div>
        </section>

        <section class=\"layout-sidebar__content\">
            ";
        // line 54
        if ((isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "                ";
            $this->loadTemplate("partials/lesson.html.twig", "course.html.twig", 55)->display(twig_to_array(["course" =>             // line 56
(isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 56, $this->source); })()), "lesson" =>             // line 57
(isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 57, $this->source); })()), "nextLesson" =>             // line 58
(isset($context["nextLesson"]) || array_key_exists("nextLesson", $context) ? $context["nextLesson"] : (function () { throw new RuntimeError('Variable "nextLesson" does not exist.', 58, $this->source); })())]));
            // line 60
            echo "            ";
        } else {
            // line 61
            echo "                <div class=\"course\">
                    <h1 class=\"course__title\">";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 62, $this->source); })()), "html", null, true);
            echo "</h1>

                    ";
            // line 64
            $this->loadTemplate("partials/editorialFeatures.html.twig", "course.html.twig", 64)->display(twig_to_array(["entry" => (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 64, $this->source); })())]));
            // line 65
            echo "
                    <div class=\"course__overview\">
                        <h3 class=\"course__overview-title\">";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("overviewLabel"), "html", null, true);
            echo "</h3>

                        ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 69, $this->source); })()), "duration", [], "any", false, false, false, 69)) {
                // line 70
                echo "                            <div class=\"course__overview-item\">
                                <svg class=\"course__overview-icon\">
                                    <use xlink:href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/icons.svg#duration"), "html", null, true);
                echo "\"></use>
                                </svg>

                                <div class=\"course__overview-value\">
                                    ";
                // line 76
                echo twig_escape_filter($this->env, (((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("durationLabel") . ": ") . twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 76, $this->source); })()), "duration", [], "any", false, false, false, 76)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("minutesLabel")), "html", null, true);
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 80
            echo "
                        ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 81, $this->source); })()), "skillLevel", [], "any", false, false, false, 81)) {
                // line 82
                echo "                            <div class=\"course__overview-item\">
                                <svg class=\"course__overview-icon\">
                                    <use xlink:href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/icons.svg#skill-level"), "html", null, true);
                echo "\"></use>
                                </svg>

                                <div class=\"course__overview-value\">
                                    ";
                // line 88
                echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("skillLevelLabel") . ": ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 88, $this->source); })()), "skillLevel", [], "any", false, false, false, 88) . "Label"))), "html", null, true);
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 92
            echo "
                        ";
            // line 93
            if (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 93, $this->source); })()), "lessons", [], "any", false, false, false, 93)) {
                // line 94
                echo "                            <div class=\"course__overview-cta-wrapper\">
                                <a
                                    href=\"";
                // line 96
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lesson", ["courseSlug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 96, $this->source); })()), "slug", [], "any", false, false, false, 96), "lessonSlug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 96, $this->source); })()), "lessons", [], "any", false, false, false, 96), 0, [], "array", false, false, false, 96), "slug", [], "any", false, false, false, 96)]) . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 96, $this->source); })()), "queryString", [], "any", false, false, false, 96)), "html", null, true);
                echo "\"
                                    class=\"course__overview-cta cta\"
                                    >";
                // line 98
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("startCourseLabel"), "html", null, true);
                echo "</a>
                            </div>
                        ";
            }
            // line 101
            echo "                    </div>

                    <div class=\"course__description\">
                        ";
            // line 104
            echo $this->extensions['App\Twig\AppExtension']->convertToHtml(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 104, $this->source); })()), "description", [], "any", false, false, false, 104));
            echo "
                    </div>
                </div>
            ";
        }
        // line 108
        echo "        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 108,  267 => 104,  262 => 101,  256 => 98,  251 => 96,  247 => 94,  245 => 93,  242 => 92,  235 => 88,  228 => 84,  224 => 82,  222 => 81,  219 => 80,  212 => 76,  205 => 72,  201 => 70,  199 => 69,  194 => 67,  190 => 65,  188 => 64,  183 => 62,  180 => 61,  177 => 60,  175 => 58,  174 => 57,  173 => 56,  171 => 55,  169 => 54,  161 => 48,  152 => 45,  146 => 44,  142 => 43,  138 => 41,  134 => 40,  128 => 37,  122 => 36,  118 => 35,  107 => 27,  100 => 22,  98 => 21,  95 => 20,  85 => 19,  72 => 16,  62 => 15,  51 => 11,  49 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: course.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry      course
 * @param Contentful\\Delivery\\Resource\\Entry|null lesson
 * @param Contentful\\Delivery\\Resource\\Entry[]    lessons
 * @param Contentful\\Delivery\\Resource\\Entry|null nextLesson
 * @param string[]                                visitedLessons
 #}

{% extends 'base.html.twig' %}

{% set title = lesson ? (course.title ~ ' | ' ~ lesson.title) : course.title %}

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
                <h2 class=\"layout-sidebar__sidebar-title\">{{ 'tableOfContentsLabel'|trans }}</h2>
            </div>

            <div class=\"layout-sidebar__sidebar-content\">
                <div class=\"table-of-contents\">
                    <div class=\"table-of-contents__list\">
                        <div class=\"table-of-contents__item\">
                            <a
                                href=\"{{ path('course', {courseSlug: course.slug}) ~ state.queryString }}\"
                                class=\"table-of-contents__link {{ course.id in visitedLessons ? 'visited' : '' }} {{ not lesson ? 'active' : '' }}\"
                                >{{ 'courseOverviewLabel'|trans }}</a>
                        </div>

                        {% for courseLesson in course.lessons %}
                            <div class=\"table-of-contents__item\">
                                <a
                                    href=\"{{ path('lesson', {courseSlug: course.slug, lessonSlug: courseLesson.slug}) ~ state.queryString }}\"
                                    class=\"table-of-contents__link {{ courseLesson.id in visitedLessons ? 'visited' : '' }} {{ lesson and courseLesson.id == lesson.id ? 'active' : '' }}\"
                                    >{{ courseLesson.title }}</a>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </section>

        <section class=\"layout-sidebar__content\">
            {% if lesson %}
                {% include 'partials/lesson.html.twig' with {
                    course: course,
                    lesson: lesson,
                    nextLesson: nextLesson
                } only %}
            {% else %}
                <div class=\"course\">
                    <h1 class=\"course__title\">{{ title }}</h1>

                    {% include 'partials/editorialFeatures.html.twig' with {entry: course} only %}

                    <div class=\"course__overview\">
                        <h3 class=\"course__overview-title\">{{ 'overviewLabel'|trans }}</h3>

                        {% if course.duration %}
                            <div class=\"course__overview-item\">
                                <svg class=\"course__overview-icon\">
                                    <use xlink:href=\"{{ asset('icons/icons.svg#duration') }}\"></use>
                                </svg>

                                <div class=\"course__overview-value\">
                                    {{ 'durationLabel'|trans ~ ': ' ~ course.duration ~ ' ' ~ 'minutesLabel'|trans }}
                                </div>
                            </div>
                        {% endif %}

                        {% if course.skillLevel %}
                            <div class=\"course__overview-item\">
                                <svg class=\"course__overview-icon\">
                                    <use xlink:href=\"{{ asset('icons/icons.svg#skill-level') }}\"></use>
                                </svg>

                                <div class=\"course__overview-value\">
                                    {{ 'skillLevelLabel'|trans ~ ': ' ~ (course.skillLevel ~ 'Label')|trans }}
                                </div>
                            </div>
                        {% endif %}

                        {% if course.lessons %}
                            <div class=\"course__overview-cta-wrapper\">
                                <a
                                    href=\"{{ path('lesson', {courseSlug: course.slug, lessonSlug: course.lessons[0].slug}) ~ state.queryString }}\"
                                    class=\"course__overview-cta cta\"
                                    >{{ 'startCourseLabel'|trans }}</a>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"course__description\">
                        {{ course.description|markdown }}
                    </div>
                </div>
            {% endif %}
        </section>
    </div>
{% endblock %}
", "course.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/course.html.twig");
    }
}
