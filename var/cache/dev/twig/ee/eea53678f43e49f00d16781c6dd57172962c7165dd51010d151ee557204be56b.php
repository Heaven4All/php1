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

/* partials/moduleHighlightedCourse.html.twig */
class __TwigTemplate_c80d6dcb635f3800133b2ce7aa7650e0a318807560e886533a47dfbb73a6cb3c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/moduleHighlightedCourse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/moduleHighlightedCourse.html.twig"));

        // line 6
        echo "
";
        // line 7
        $context["course"] = twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 7, $this->source); })()), "course", [], "any", false, false, false, 7);
        // line 8
        echo " <div class=\"module module-highlighted-course\">
    <div class=\"module-highlighted-course__wrapper\" style=\"background-image: url('";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9), "file", [], "any", false, false, false, 9), "url", [], "any", false, false, false, 9), "html", null, true);
        echo "');\">
        <div class=\"module-highlighted-course__overlay\"></div>

        <div class=\"module-highlighted-course__content\">
            ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 13, $this->source); })()), "categories", [], "any", false, false, false, 13)) {
            // line 14
            echo "                <div class=\"module-highlighted-course__categories\">
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 15, $this->source); })()), "categories", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["categorySlug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 16)]) . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 16, $this->source); })()), "queryString", [], "any", false, false, false, 16)), "html", null, true);
                echo "\" class=\"module-highlighted-course__category\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 16), "html", null, true);
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                </div>
            ";
        }
        // line 20
        echo "
            <h2 class=\"module-highlighted-course__title\">
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course", ["courseSlug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 22, $this->source); })()), "slug", [], "any", false, false, false, 22)]) . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 22, $this->source); })()), "queryString", [], "any", false, false, false, 22)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</a>
            </h2>

            <div class=\"module-highlighted-course__description-wrapper\">
                <p>";
        // line 26
        echo $this->extensions['App\Twig\AppExtension']->convertToHtml(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 26, $this->source); })()), "shortDescription", [], "any", false, false, false, 26));
        echo "</p>
            </div>

            <div class=\"module-highlighted-course__link-wrapper\">
                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course", ["courseSlug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 30, $this->source); })()), "slug", [], "any", false, false, false, 30)]) . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 30, $this->source); })()), "queryString", [], "any", false, false, false, 30)), "html", null, true);
        echo "\" class=\"module-highlighted-course__link\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("viewCourseLabel"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/moduleHighlightedCourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  95 => 26,  86 => 22,  82 => 20,  78 => 18,  67 => 16,  63 => 15,  60 => 14,  58 => 13,  51 => 9,  48 => 8,  46 => 7,  43 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: partials/moduleHighlightedCourse.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry module
 #}

{% set course = module.course %}
 <div class=\"module module-highlighted-course\">
    <div class=\"module-highlighted-course__wrapper\" style=\"background-image: url('{{ course.image.file.url }}');\">
        <div class=\"module-highlighted-course__overlay\"></div>

        <div class=\"module-highlighted-course__content\">
            {% if course.categories %}
                <div class=\"module-highlighted-course__categories\">
                    {% for category in course.categories %}
                        <a href=\"{{ path('category', {categorySlug: category.slug}) ~ state.queryString }}\" class=\"module-highlighted-course__category\">{{ category.title }}</a>
                    {% endfor %}
                </div>
            {% endif %}

            <h2 class=\"module-highlighted-course__title\">
                <a href=\"{{ path('course', {courseSlug: course.slug}) ~ state.queryString }}\">{{ course.title }}</a>
            </h2>

            <div class=\"module-highlighted-course__description-wrapper\">
                <p>{{ course.shortDescription|markdown }}</p>
            </div>

            <div class=\"module-highlighted-course__link-wrapper\">
                <a href=\"{{ path('course', {courseSlug: course.slug}) ~ state.queryString }}\" class=\"module-highlighted-course__link\">{{ 'viewCourseLabel'|trans }}</a>
            </div>
        </div>
    </div>
</div>
", "partials/moduleHighlightedCourse.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/partials/moduleHighlightedCourse.html.twig");
    }
}
