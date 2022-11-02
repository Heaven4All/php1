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

/* partials/moduleHeroImage.html.twig */
class __TwigTemplate_5192a05e0711a74151db89fa32aabcac5c2ce39ea623d78956bcee9e0cd80c96 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/moduleHeroImage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/moduleHeroImage.html.twig"));

        // line 6
        echo "
<div class=\"module module-hero-image\">
    <div class=\"module-hero-image__wrapper\">
        <div class=\"module-hero-image__headline-wrapper\">
            <h2 class=\"module-hero-image__headline\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 10, $this->source); })()), "headline", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
        </div>

        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 13, $this->source); })()), "backgroundImage", [], "any", false, false, false, 13), "file", [], "any", false, false, false, 13), "url", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 13, $this->source); })()), "backgroundImage", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "\" class=\"module-hero-image__image\" />
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/moduleHeroImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  49 => 10,  43 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: partials/moduleHeroImage.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry module
 #}

<div class=\"module module-hero-image\">
    <div class=\"module-hero-image__wrapper\">
        <div class=\"module-hero-image__headline-wrapper\">
            <h2 class=\"module-hero-image__headline\">{{ module.headline }}</h2>
        </div>

        <img src=\"{{ module.backgroundImage.file.url }}\" alt=\"{{ module.backgroundImage.title }}\" class=\"module-hero-image__image\" />
    </div>
</div>
", "partials/moduleHeroImage.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/partials/moduleHeroImage.html.twig");
    }
}
