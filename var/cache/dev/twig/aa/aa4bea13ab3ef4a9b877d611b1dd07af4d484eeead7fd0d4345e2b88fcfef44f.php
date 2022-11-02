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

/* partials/moduleCopy.html.twig */
class __TwigTemplate_8635747bcbca2c0a6d11e5835b35212ef4cc562237e77609ee71c2e23112523a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/moduleCopy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/moduleCopy.html.twig"));

        // line 6
        echo "
";
        // line 7
        $context["style"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 7, $this->source); })()), "visualStyle", [], "any", false, false, false, 7), "Emphasized"))) ? ("--emphasized") : (""));
        // line 8
        echo "
<div class=\"module module-copy";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"module-copy__wrapper";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\">
        <div class=\"module-copy__first";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 12, $this->source); })()), "headline", [], "any", false, false, false, 12)) {
            // line 13
            echo "                <h1 class=\"module-copy__headline";
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 13, $this->source); })()), "headline", [], "any", false, false, false, 13), "html", null, true);
            echo "</h1>
            ";
        }
        // line 15
        echo "
            <div class=\"module-copy__copy";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
                ";
        // line 17
        echo $this->extensions['App\Twig\AppExtension']->convertToHtml(twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 17, $this->source); })()), "copy", [], "any", false, false, false, 17));
        echo "
            </div>

        </div>

        <div class=\"module-copy__second";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 23, $this->source); })()), "ctaTitle", [], "any", false, false, false, 23) && twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 23, $this->source); })()), "ctaLink", [], "any", false, false, false, 23))) {
            // line 24
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 24, $this->source); })()), "ctaLink", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"cta module-copy__cta";
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 24, $this->source); })()), "ctaTitle", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>
            ";
        }
        // line 26
        echo "        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/moduleCopy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  94 => 24,  92 => 23,  88 => 22,  80 => 17,  76 => 16,  73 => 15,  65 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  48 => 8,  46 => 7,  43 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: partials/moduleCopy.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry module
 #}

{% set style = module.visualStyle == 'Emphasized' ? '--emphasized' : '' %}

<div class=\"module module-copy{{ style }}\">
    <div class=\"module-copy__wrapper{{ style }}\">
        <div class=\"module-copy__first{{ style }}\">
            {% if module.headline %}
                <h1 class=\"module-copy__headline{{ style }}\">{{ module.headline }}</h1>
            {% endif %}

            <div class=\"module-copy__copy{{ style }}\">
                {{ module.copy|markdown }}
            </div>

        </div>

        <div class=\"module-copy__second{{ style }}\">
            {% if module.ctaTitle and module.ctaLink %}
                <a href=\"{{ module.ctaLink }}\" class=\"cta module-copy__cta{{ style }}\">{{ module.ctaTitle }}</a>
            {% endif %}
        </div>
    </div>
</div>
", "partials/moduleCopy.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/partials/moduleCopy.html.twig");
    }
}
