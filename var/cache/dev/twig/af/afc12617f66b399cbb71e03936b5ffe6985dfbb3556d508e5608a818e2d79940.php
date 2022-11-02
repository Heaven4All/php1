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

/* partials/lessonCodeSnippets.html.twig */
class __TwigTemplate_25d5de04341135047c6fdf2b2d84994e45323c1a48247791b001ae6c0b5b0eee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/lessonCodeSnippets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/lessonCodeSnippets.html.twig"));

        // line 6
        echo "
<div class=\"lesson-module lesson-module-code\">
    <div class=\"lesson-module-code__header\">
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 9, $this->source); })()), "curl", [], "any", false, false, false, 9)) {
            // line 10
            echo "            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"curl\">cURL</a>
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 13, $this->source); })()), "dotNet", [], "any", false, false, false, 13)) {
            // line 14
            echo "            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"dotnet\">.NET</a>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 17, $this->source); })()), "javascript", [], "any", false, false, false, 17)) {
            // line 18
            echo "            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"javascript\">JavaScript</a>
        ";
        }
        // line 20
        echo "
        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 21, $this->source); })()), "java", [], "any", false, false, false, 21)) {
            // line 22
            echo "            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"java\">Java</a>
        ";
        }
        // line 24
        echo "
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 25, $this->source); })()), "javaAndroid", [], "any", false, false, false, 25)) {
            // line 26
            echo "            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"android\">Android</a>
        ";
        }
        // line 28
        echo "
        ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 29, $this->source); })()), "php", [], "any", false, false, false, 29)) {
            // line 30
            echo "            <a href=\"#\" class=\"lesson-module-code__trigger lesson-module-code__trigger--active\" data-target=\"php\">PHP</a>
        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 33, $this->source); })()), "python", [], "any", false, false, false, 33)) {
            // line 34
            echo "            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"python\">Python</a>
        ";
        }
        // line 36
        echo "
        ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 37, $this->source); })()), "ruby", [], "any", false, false, false, 37)) {
            // line 38
            echo "            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"ruby\">Ruby</a>
        ";
        }
        // line 40
        echo "
        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 41, $this->source); })()), "swift", [], "any", false, false, false, 41)) {
            // line 42
            echo "            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"swift\">Swift</a>
        ";
        }
        // line 44
        echo "    </div>

    <div class=\"lesson-module-code__code-area\">
        ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 47, $this->source); })()), "curl", [], "any", false, false, false, 47)) {
            // line 48
            echo "            <div class=\"lesson-module-code__code\" id=\"curl\">
                <pre>
                    <code class=\"shell\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 50, $this->source); })()), "curl", [], "any", false, false, false, 50), "html", null, true);
            echo "</code>
                </pre>
            </div>
        ";
        }
        // line 54
        echo "
        ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 55, $this->source); })()), "dotNet", [], "any", false, false, false, 55)) {
            // line 56
            echo "            <div class=\"lesson-module-code__code\" id=\"dotnet\">
                <pre>
                    <code class=\"csharp\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 58, $this->source); })()), "dotNet", [], "any", false, false, false, 58), "html", null, true);
            echo "</code>
                </pre>
            </div>
        ";
        }
        // line 62
        echo "
        ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 63, $this->source); })()), "javascript", [], "any", false, false, false, 63)) {
            // line 64
            echo "            <div class=\"lesson-module-code__code\" id=\"javascript\">
                <pre>
                    <code class=\"javascript\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 66, $this->source); })()), "javascript", [], "any", false, false, false, 66), "html", null, true);
            echo "</code>
                </pre>
            </div>
        ";
        }
        // line 70
        echo "
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 71, $this->source); })()), "java", [], "any", false, false, false, 71)) {
            // line 72
            echo "            <div class=\"lesson-module-code__code\" id=\"java\">
                <pre>
                    <code class=\"java\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 74, $this->source); })()), "java", [], "any", false, false, false, 74), "html", null, true);
            echo "</code>
                </pre>
            </div>
        ";
        }
        // line 78
        echo "
        ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 79, $this->source); })()), "javaAndroid", [], "any", false, false, false, 79)) {
            // line 80
            echo "            <div class=\"lesson-module-code__code\" id=\"android\">
                <pre>
                    <code class=\"java\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 82, $this->source); })()), "javaAndroid", [], "any", false, false, false, 82), "html", null, true);
            echo "</code>
                </pre>
            </div>
        ";
        }
        // line 86
        echo "
        ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 87, $this->source); })()), "php", [], "any", false, false, false, 87)) {
            // line 88
            echo "            <div class=\"lesson-module-code__code lesson-module-code__code--active\" id=\"php\">
                <pre>
                    <code class=\"php\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 90, $this->source); })()), "php", [], "any", false, false, false, 90), "html", null, true);
            echo "</code>
                </pre>
            </div>
        ";
        }
        // line 94
        echo "
        ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 95, $this->source); })()), "python", [], "any", false, false, false, 95)) {
            // line 96
            echo "            <div class=\"lesson-module-code__code\" id=\"python\">
                <pre>
                    <code class=\"python\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 98, $this->source); })()), "python", [], "any", false, false, false, 98), "html", null, true);
            echo "</code>
                </pre>
            </div>
        ";
        }
        // line 102
        echo "
        ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 103, $this->source); })()), "ruby", [], "any", false, false, false, 103)) {
            // line 104
            echo "            <div class=\"lesson-module-code__code\" id=\"ruby\">
                <pre>
                    <code class=\"ruby\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 106, $this->source); })()), "ruby", [], "any", false, false, false, 106), "html", null, true);
            echo "</code>
                </pre>
            </div>
        ";
        }
        // line 110
        echo "
        ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 111, $this->source); })()), "swift", [], "any", false, false, false, 111)) {
            // line 112
            echo "            <div class=\"lesson-module-code__code\" id=\"swift\">
                <pre>
                    <code class=\"swift\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 114, $this->source); })()), "swift", [], "any", false, false, false, 114), "html", null, true);
            echo "</code>
                </pre>
            </div>
        ";
        }
        // line 118
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/lessonCodeSnippets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 118,  265 => 114,  261 => 112,  259 => 111,  256 => 110,  249 => 106,  245 => 104,  243 => 103,  240 => 102,  233 => 98,  229 => 96,  227 => 95,  224 => 94,  217 => 90,  213 => 88,  211 => 87,  208 => 86,  201 => 82,  197 => 80,  195 => 79,  192 => 78,  185 => 74,  181 => 72,  179 => 71,  176 => 70,  169 => 66,  165 => 64,  163 => 63,  160 => 62,  153 => 58,  149 => 56,  147 => 55,  144 => 54,  137 => 50,  133 => 48,  131 => 47,  126 => 44,  122 => 42,  120 => 41,  117 => 40,  113 => 38,  111 => 37,  108 => 36,  104 => 34,  102 => 33,  99 => 32,  95 => 30,  93 => 29,  90 => 28,  86 => 26,  84 => 25,  81 => 24,  77 => 22,  75 => 21,  72 => 20,  68 => 18,  66 => 17,  63 => 16,  59 => 14,  57 => 13,  54 => 12,  50 => 10,  48 => 9,  43 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: partials/lessonCodeSnippets.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry module
 #}

<div class=\"lesson-module lesson-module-code\">
    <div class=\"lesson-module-code__header\">
        {% if module.curl %}
            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"curl\">cURL</a>
        {% endif %}

        {% if module.dotNet %}
            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"dotnet\">.NET</a>
        {% endif %}

        {% if module.javascript %}
            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"javascript\">JavaScript</a>
        {% endif %}

        {% if module.java %}
            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"java\">Java</a>
        {% endif %}

        {% if module.javaAndroid %}
            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"android\">Android</a>
        {% endif %}

        {% if module.php %}
            <a href=\"#\" class=\"lesson-module-code__trigger lesson-module-code__trigger--active\" data-target=\"php\">PHP</a>
        {% endif %}

        {% if module.python %}
            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"python\">Python</a>
        {% endif %}

        {% if module.ruby %}
            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"ruby\">Ruby</a>
        {% endif %}

        {% if module.swift %}
            <a href=\"#\" class=\"lesson-module-code__trigger\" data-target=\"swift\">Swift</a>
        {% endif %}
    </div>

    <div class=\"lesson-module-code__code-area\">
        {% if module.curl %}
            <div class=\"lesson-module-code__code\" id=\"curl\">
                <pre>
                    <code class=\"shell\">{{ module.curl }}</code>
                </pre>
            </div>
        {% endif %}

        {% if module.dotNet %}
            <div class=\"lesson-module-code__code\" id=\"dotnet\">
                <pre>
                    <code class=\"csharp\">{{ module.dotNet }}</code>
                </pre>
            </div>
        {% endif %}

        {% if module.javascript %}
            <div class=\"lesson-module-code__code\" id=\"javascript\">
                <pre>
                    <code class=\"javascript\">{{ module.javascript }}</code>
                </pre>
            </div>
        {% endif %}

        {% if module.java %}
            <div class=\"lesson-module-code__code\" id=\"java\">
                <pre>
                    <code class=\"java\">{{ module.java }}</code>
                </pre>
            </div>
        {% endif %}

        {% if module.javaAndroid %}
            <div class=\"lesson-module-code__code\" id=\"android\">
                <pre>
                    <code class=\"java\">{{ module.javaAndroid }}</code>
                </pre>
            </div>
        {% endif %}

        {% if module.php %}
            <div class=\"lesson-module-code__code lesson-module-code__code--active\" id=\"php\">
                <pre>
                    <code class=\"php\">{{ module.php }}</code>
                </pre>
            </div>
        {% endif %}

        {% if module.python %}
            <div class=\"lesson-module-code__code\" id=\"python\">
                <pre>
                    <code class=\"python\">{{ module.python }}</code>
                </pre>
            </div>
        {% endif %}

        {% if module.ruby %}
            <div class=\"lesson-module-code__code\" id=\"ruby\">
                <pre>
                    <code class=\"ruby\">{{ module.ruby }}</code>
                </pre>
            </div>
        {% endif %}

        {% if module.swift %}
            <div class=\"lesson-module-code__code\" id=\"swift\">
                <pre>
                    <code class=\"swift\">{{ module.swift }}</code>
                </pre>
            </div>
        {% endif %}
    </div>
</div>
", "partials/lessonCodeSnippets.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/partials/lessonCodeSnippets.html.twig");
    }
}
