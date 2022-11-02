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

/* partials/editorialFeatures.html.twig */
class __TwigTemplate_42d56173bff6a4a2ed19f5d1a6e09b05d93d47d4699529a69aad0d357e801969 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/editorialFeatures.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/editorialFeatures.html.twig"));

        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 7, $this->source); })()), "hasEditorialFeaturesEnabled", [], "any", false, false, false, 7)) {
            // line 8
            echo "    <div class=\"editorial-features\">
        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 9, $this->source); })()), "hasEditorialFeaturesLink", [], "any", false, false, false, 9)) {
                // line 10
                echo "            <div class=\"editorial-features__item\">
                ";
                // line 11
                $this->loadTemplate("partials/entryState.html.twig", "partials/editorialFeatures.html.twig", 11)->display(twig_to_array(["entry" => (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 11, $this->source); })())]));
                // line 12
                echo "            </div>
        ";
            }
            // line 14
            echo "
        <div class=\"editorial-features__item\">
            <a
                href=\"https://app.contentful.com/spaces/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 17, $this->source); })()), "spaceId", [], "any", false, false, false, 17), "html", null, true);
            echo "/entries/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\"
                class=\"editorial-features__text\"
                target=\"_blank\"
                rel=\"noopener\"
            >";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("editInTheWebAppLabel"), "html", null, true);
            echo "</a>

            <div class=\"editorial-features__hint-wrapper\">
                <svg class=\"editorial-features__hint-icon\">
                    <use xlink:href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/icons/icons.svg#info"), "html", null, true);
            echo "\" />
                    <div class=\"editorial-features__hint-message\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("editorialFeaturesHint"), "html", null, true);
            echo "</div>
                </svg>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/editorialFeatures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  83 => 25,  76 => 21,  67 => 17,  62 => 14,  58 => 12,  56 => 11,  53 => 10,  51 => 9,  48 => 8,  46 => 7,  43 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: partials/editorialFeatures.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry entry
 #}

{% if state.hasEditorialFeaturesEnabled %}
    <div class=\"editorial-features\">
        {% if state.hasEditorialFeaturesLink %}
            <div class=\"editorial-features__item\">
                {% include 'partials/entryState.html.twig' with {entry: entry} only %}
            </div>
        {% endif %}

        <div class=\"editorial-features__item\">
            <a
                href=\"https://app.contentful.com/spaces/{{ state.spaceId }}/entries/{{ entry.id }}\"
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
", "partials/editorialFeatures.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/partials/editorialFeatures.html.twig");
    }
}
