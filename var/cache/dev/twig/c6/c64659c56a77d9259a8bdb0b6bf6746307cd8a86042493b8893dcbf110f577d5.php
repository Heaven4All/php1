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

/* partials/entryState.html.twig */
class __TwigTemplate_b6a2b545a49bd14f6ea955755e9aff39271bee2cbf95a6cc9e6a1a7c39f02059 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/entryState.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/entryState.html.twig"));

        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 7, $this->source); })()), "draft", [], "any", false, false, false, 7)) {
            // line 8
            echo "    <div class=\"editorial-features__item\">
        <div class=\"pill pill--draft\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("draftLabel"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 14
        echo "
";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 15, $this->source); })()), "pendingChanges", [], "any", false, false, false, 15)) {
            // line 16
            echo "    <div class=\"editorial-features__item\">
        <div class=\"pill pill--pending-changes\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pendingChangesLabel"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/entryState.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  64 => 16,  62 => 15,  59 => 14,  52 => 10,  48 => 8,  46 => 7,  43 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: partials/entryState.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry entry
 #}

{% if entry.draft %}
    <div class=\"editorial-features__item\">
        <div class=\"pill pill--draft\">
            {{ 'draftLabel'|trans }}
        </div>
    </div>
{% endif %}

{% if entry.pendingChanges %}
    <div class=\"editorial-features__item\">
        <div class=\"pill pill--pending-changes\">
            {{ 'pendingChangesLabel'|trans }}
        </div>
    </div>
{% endif %}
", "partials/entryState.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/partials/entryState.html.twig");
    }
}
