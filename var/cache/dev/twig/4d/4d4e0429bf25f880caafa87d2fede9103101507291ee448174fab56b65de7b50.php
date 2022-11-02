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

/* partials/lessonModuleImage.html.twig */
class __TwigTemplate_8a246cfe19c13636caa8c50490c1d8084e2f6cf0872236504926bdc9eaad7419 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/lessonModuleImage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/lessonModuleImage.html.twig"));

        // line 6
        echo "
 <div class=\"lesson-module lesson-module-image\">
    ";
        // line 8
        if (((twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8), "file", [], "any", false, false, false, 8)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8), "file", [], "any", false, false, false, 8), "url", [], "any", false, false, false, 8))) {
            // line 9
            echo "        <figure class=\"lesson-module-image__figure\">
            <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10), "file", [], "any", false, false, false, 10), "url", [], "any", false, false, false, 10), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
            echo "\" class=\"lesson-module-image__image\" />

            ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 12, $this->source); })()), "caption", [], "any", false, false, false, 12)) {
                // line 13
                echo "                <figcaption class=\"lesson-module-image__caption\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 13, $this->source); })()), "caption", [], "any", false, false, false, 13), "html", null, true);
                echo "</figcaption>
            ";
            }
            // line 15
            echo "        </figure>
    ";
        } else {
            // line 17
            echo "        <h3>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("imageErrorTitle"), "html", null, true);
            echo "</h3>
    ";
        }
        // line 19
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/lessonModuleImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  71 => 17,  67 => 15,  61 => 13,  59 => 12,  52 => 10,  49 => 9,  47 => 8,  43 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: partials/lessonModuleImage.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry module
 #}

 <div class=\"lesson-module lesson-module-image\">
    {% if module.image and module.image.file and module.image.file.url %}
        <figure class=\"lesson-module-image__figure\">
            <img src=\"{{ module.image.file.url }}\" alt=\"{{ module.image.title }}\" class=\"lesson-module-image__image\" />

            {% if module.caption %}
                <figcaption class=\"lesson-module-image__caption\">{{ module.caption }}</figcaption>
            {% endif %}
        </figure>
    {% else %}
        <h3>{{ 'imageErrorTitle'|trans }}</h3>
    {% endif %}
</div>
", "partials/lessonModuleImage.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/partials/lessonModuleImage.html.twig");
    }
}
