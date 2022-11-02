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

/* partials/lesson.html.twig */
class __TwigTemplate_f4d644f650c8353fb5a4741ea9ddcbf2a7f474cac988b7fe69d8e4b69eb98631 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/lesson.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/lesson.html.twig"));

        // line 8
        echo "
<div class=\"lesson\">
    <h1 class=\"lesson__title\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>

    ";
        // line 12
        $this->loadTemplate("partials/editorialFeatures.html.twig", "partials/lesson.html.twig", 12)->display(twig_to_array(["entry" => (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 12, $this->source); })())]));
        // line 13
        echo "
    <div class=\"lesson__modules\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 15, $this->source); })()), "modules", [], "any", false, false, false, 15));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 16
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["module"], "contentType", [], "any", false, false, false, 16)) {
                // line 17
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "contentType", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "lessonCodeSnippets"))) {
                    // line 18
                    echo "                    ";
                    $this->loadTemplate("partials/lessonCodeSnippets.html.twig", "partials/lesson.html.twig", 18)->display(twig_to_array(["module" => $context["module"]]));
                    // line 19
                    echo "                ";
                }
                // line 20
                echo "
                ";
                // line 21
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "contentType", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "lessonCopy"))) {
                    // line 22
                    echo "                    ";
                    $this->loadTemplate("partials/lessonModuleCopy.html.twig", "partials/lesson.html.twig", 22)->display(twig_to_array(["module" => $context["module"]]));
                    // line 23
                    echo "                ";
                }
                // line 24
                echo "
                ";
                // line 25
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "contentType", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "lessonImage"))) {
                    // line 26
                    echo "                    ";
                    $this->loadTemplate("partials/lessonModuleImage.html.twig", "partials/lesson.html.twig", 26)->display(twig_to_array(["module" => $context["module"]]));
                    // line 27
                    echo "                ";
                }
                // line 28
                echo "            ";
            } else {
                // line 29
                echo "                <h2>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("lessonModuleErrorTitle"), "html", null, true);
                echo "</h2>
                <p>
                    <span>";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("lessonModuleErrorBody"), "html", null, true);
                echo "</span>
                    <strong>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "</strong>
                </p>
            ";
            }
            // line 35
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "            ";
            $this->loadTemplate("partials/emptyModule.html.twig", "partials/lesson.html.twig", 36)->display(twig_to_array([]));
            // line 37
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </div>

    ";
        // line 40
        if ((isset($context["nextLesson"]) || array_key_exists("nextLesson", $context) ? $context["nextLesson"] : (function () { throw new RuntimeError('Variable "nextLesson" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lesson", ["courseSlug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 41, $this->source); })()), "slug", [], "any", false, false, false, 41), "lessonSlug" => twig_get_attribute($this->env, $this->source, (isset($context["nextLesson"]) || array_key_exists("nextLesson", $context) ? $context["nextLesson"] : (function () { throw new RuntimeError('Variable "nextLesson" does not exist.', 41, $this->source); })()), "slug", [], "any", false, false, false, 41)]) . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 41, $this->source); })()), "queryString", [], "any", false, false, false, 41)), "html", null, true);
            echo "\" class=\"lesson__cta cta\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nextLessonLabel"), "html", null, true);
            echo "</a>
    ";
        }
        // line 43
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 43,  136 => 41,  134 => 40,  130 => 38,  124 => 37,  121 => 36,  116 => 35,  110 => 32,  106 => 31,  100 => 29,  97 => 28,  94 => 27,  91 => 26,  89 => 25,  86 => 24,  83 => 23,  80 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  58 => 15,  54 => 13,  52 => 12,  47 => 10,  43 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: partials/lesson.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry course
 * @param Contentful\\Delivery\\Resource\\Entry lesson
 * @param Contentful\\Delivery\\Resource\\Entry nextLesson
 #}

<div class=\"lesson\">
    <h1 class=\"lesson__title\">{{ lesson.title }}</h1>

    {% include 'partials/editorialFeatures.html.twig' with {entry: lesson} only %}

    <div class=\"lesson__modules\">
        {% for module in lesson.modules %}
            {% if module.contentType %}
                {% if module.contentType.id == 'lessonCodeSnippets' %}
                    {% include 'partials/lessonCodeSnippets.html.twig' with {module: module} only %}
                {% endif %}

                {% if module.contentType.id == 'lessonCopy' %}
                    {% include 'partials/lessonModuleCopy.html.twig' with {module: module} only %}
                {% endif %}

                {% if module.contentType.id == 'lessonImage' %}
                    {% include 'partials/lessonModuleImage.html.twig' with {module: module} only %}
                {% endif %}
            {% else %}
                <h2>{{ 'lessonModuleErrorTitle'|trans }}</h2>
                <p>
                    <span>{{ 'lessonModuleErrorBody'|trans }}</span>
                    <strong>{{ module.id }}</strong>
                </p>
            {% endif %}
        {% else %}
            {% include 'partials/emptyModule.html.twig' with {} only %}
        {% endfor %}
    </div>

    {% if nextLesson %}
        <a href=\"{{ path('lesson', {courseSlug: course.slug, lessonSlug: nextLesson.slug}) ~ state.queryString }}\" class=\"lesson__cta cta\">{{ 'nextLessonLabel'|trans }}</a>
    {% endif %}
</div>
", "partials/lesson.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/partials/lesson.html.twig");
    }
}
