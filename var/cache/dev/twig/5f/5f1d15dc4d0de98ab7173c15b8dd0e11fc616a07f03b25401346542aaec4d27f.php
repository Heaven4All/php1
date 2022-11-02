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

/* base.html.twig */
class __TwigTemplate_4c4ab9ceec00165b73b0aef15f62183288f95a5db5b9cf080496e38c314d33b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 7
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 8, $this->source); })()), "locale", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <head>
        <title>";
        // line 10
        echo twig_escape_filter($this->env, twig_trim_filter(        $this->renderBlock("page_title", $context, $blocks)), "html", null, true);
        echo " — The Example App</title>

        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("stylesheets/style.css"), "html", null, true);
        echo "\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("metaDescription"), "html", null, true);
        echo "\" />
        <meta name=\"twitter:card\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("metaTwitterCard"), "html", null, true);
        echo "\" />

        <meta property=\"og:title\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_trim_filter(        $this->renderBlock("page_title", $context, $blocks)), "html", null, true);
        echo " — The Example App\">
        <meta property=\"og:type\" content=\"article\" />
        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "get", [0 => "_route"], "method", false, false, false, 20)) {
            // line 21
            echo "            <meta property=\"og:url\" content=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "get", [0 => "_route"], "method", false, false, false, 21), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "get", [0 => "_route_params"], "method", false, false, false, 21)) . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 21, $this->source); })()), "queryString", [], "any", false, false, false, 21)), "html", null, true);
            echo "\" />
        ";
        }
        // line 23
        echo "        <meta property=\"og:image\" content=\"https://the-example-app-php.contentful.com/og-image.jpg\" />
        <meta property=\"og:image:type\" content=\"image/jpeg\" />
        <meta property=\"og:image:width\" content=\"1200\" />
        <meta property=\"og:image:height\" content=\"1200\" />
        <meta property=\"og:image:alt\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("metaImageAlt"), "html", null, true);
        echo "\" />
        <meta property=\"og:description\" content=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("metaImageDescription"), "html", null, true);
        echo "\" />

        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-16x16.png"), "html", null, true);
        echo "\" />
        <link rel=\"manifest\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("manifest.json"), "html", null, true);
        echo "\" />
        <link rel=\"mask-icon\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("safari-pinned-tab.svg"), "html", null, true);
        echo "\" color=\"#4a90e2\" />

        <meta name=\"theme-color\" content=\"#ffffff\" />
    </head>
    <body>
        <main class=\"main\">
            <div class=\"main__header\">
                <header class=\"header\">
                    <div class=\"header__upper-wrapper\">
                        <div class=\"header__upper layout-centered\">
                            <div class=\"header__upper-title\">
                                <a class=\"header__upper-link\" id=\"about-this-modal-trigger\" href=\"#\">
                                    <svg class=\"header__upper-icon\">
                                        <use xlink:href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/icons.svg#info"), "html", null, true);
        echo "\"></use>
                                    </svg>
                                    <span>";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("whatIsThisApp"), "html", null, true);
        echo "</span>
                                </a>
                            </div>

                            <div class=\"header__upper-copy\">
                                <a class=\"header__upper-link\" href=\"https://github.com/contentful/the-example-app.php\" target=\"_blank\" rel=\"noopener\">
                                    <svg class=\"header__upper-icon\">
                                        <use xlink:href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/icons.svg#github"), "html", null, true);
        echo "\"></use>
                                    </svg>
                                    ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("viewOnGithub"), "html", null, true);
        echo "
                                </a>
                            </div>

                            <div class=\"header__controls\">
                                <div class=\"header__controls_group\">
                                    <form action=\"\" method=\"get\">
                                        <div class=\"header__controls_label\">API: ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 65, $this->source); })()), "apiLabel", [], "any", false, false, false, 65), "html", null, true);
        echo "</div>
                                        <div class=\"header__controls_dropdown\">
                                            <div class=\"header__controls_help_text\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("apiSwitcherHelp"), "html", null, true);
        echo "</div>
                                            <button
                                                class=\"header__controls_button ";
        // line 69
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 69, $this->source); })()), "isDeliveryApi", [], "any", false, false, false, 69)) ? ("header__controls_button--active") : (""));
        echo "\"
                                                type=\"submit\"
                                                name=\"api\"
                                                value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_constant("App\\Service\\Contentful::API_DELIVERY"), "html", null, true);
        echo "\"
                                                >";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contentDeliveryApiLabel"), "html", null, true);
        echo ":<br />
                                                <span class=\"header__controls_button_help\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contentDeliveryApiHelp"), "html", null, true);
        echo "</span>
                                            </button>
                                            <button
                                                class=\"header__controls_button ";
        // line 77
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 77, $this->source); })()), "isDeliveryApi", [], "any", false, false, false, 77)) ? ("") : ("header__controls_button--active"));
        echo "\"
                                                type=\"submit\"
                                                name=\"api\"
                                                value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_constant("App\\Service\\Contentful::API_PREVIEW"), "html", null, true);
        echo "\"
                                                >";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contentPreviewApiLabel"), "html", null, true);
        echo ":<br />
                                                <span class=\"header__controls_button_help\">";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contentPreviewApiHelp"), "html", null, true);
        echo "</span>
                                            </button>
                                        </div>
                                        <input type=\"hidden\" name=\"locale\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 85, $this->source); })()), "locale", [], "any", false, false, false, 85), "html", null, true);
        echo "\" />
                                    </form>
                                </div>

                                <div class=\"header__controls_group\">
                                    <form action=\"\" method=\"get\">
                                        <input type=\"hidden\" name=\"api\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 91, $this->source); })()), "api", [], "any", false, false, false, 91), "html", null, true);
        echo "\" />
                                        <div class=\"header__controls_label\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("locale"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 92, $this->source); })()), "current", [], "any", false, false, false, 92)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 92, $this->source); })()), "current", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92)) : (twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 92, $this->source); })()), "locale", [], "any", false, false, false, 92))), "html", null, true);
        echo "</div>
                                        <div class=\"header__controls_dropdown\">
                                            <div class=\"header__controls_help_text\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("localeQuestion"), "html", null, true);
        echo "</div>
                                            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 95, $this->source); })()), "all", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["localeItem"]) {
            // line 96
            echo "                                                <button type=\"submit\" name=\"locale\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeItem"], "code", [], "any", false, false, false, 96), "html", null, true);
            echo "\" class=\"header__controls_button ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["localeItem"], "code", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 96, $this->source); })()), "locale", [], "any", false, false, false, 96)))) ? ("header__controls_button--active") : (""));
            echo "\">
                                                    ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeItem"], "name", [], "any", false, false, false, 97), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeItem"], "code", [], "any", false, false, false, 97), "html", null, true);
            echo ")
                                                </button>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class=\"header__upper-menu\">
                                <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings") . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 106, $this->source); })()), "queryString", [], "any", false, false, false, 106)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settingsLabel"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"header__lower-wrapper\">
                        <div class=\"header__lower layout-centered\">
                            <div class=\"header__logo\">
                                <a class=\"header__logo-link\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("landing_page") . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 114, $this->source); })()), "queryString", [], "any", false, false, false, 114)), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/the-example-app-logo-php.svg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("logoAlt"), "html", null, true);
        echo "\" />
                                </a>
                            </div>

                            <nav class=\"header__navigation main-navigation\">
                                <ul>
                                    <li>
                                        <a class=\"";
        // line 122
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "request", [], "any", false, false, false, 122), "get", [0 => "tab"], "method", false, false, false, 122), "home"))) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("landing_page") . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 122, $this->source); })()), "queryString", [], "any", false, false, false, 122)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("homeLabel"), "html", null, true);
        echo "</a>
                                    </li>
                                    <li>
                                        <a class=\"";
        // line 125
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "request", [], "any", false, false, false, 125), "get", [0 => "tab"], "method", false, false, false, 125), "courses"))) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("courses") . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 125, $this->source); })()), "queryString", [], "any", false, false, false, 125)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("coursesLabel"), "html", null, true);
        echo "</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>
            </div>

            <div class=\"main__content\">
                ";
        // line 135
        $this->displayBlock('body', $context, $blocks);
        // line 136
        echo "            </div>

            <div class=\"main__footer\">
                <div class=\"layout-centered\">
                    <footer class=\"footer\">
                        <div class=\"footer__upper\">
                            <nav class=\"footer__navigation main-navigation\">
                                <ul>
                                    <li>
                                        <a class=\"";
        // line 145
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "request", [], "any", false, false, false, 145), "get", [0 => "_route"], "method", false, false, false, 145), "landing_page"))) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("landing_page") . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 145, $this->source); })()), "queryString", [], "any", false, false, false, 145)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("homeLabel"), "html", null, true);
        echo "</a>
                                    </li>
                                    <li>
                                        <a class=\"";
        // line 148
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "request", [], "any", false, false, false, 148), "get", [0 => "_route"], "method", false, false, false, 148), "landing_page"))) ? ("") : ("active"));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("courses") . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 148, $this->source); })()), "queryString", [], "any", false, false, false, 148)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("coursesLabel"), "html", null, true);
        echo "</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class=\"footer__apps\">
                            </div>
                        </div>

                        <div class=\"footer__lower\">
                            <div class=\"footer__logo\">
                                <a href=\"https://www.contentful.com/\" target=\"_blank\" rel=\"noopener\">
                                    <img class=\"footer__disclaimer-logo\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/contentful-logo.svg"), "html", null, true);
        echo "\" />
                                </a>
                            </div>

                            <div class=\"footer__disclaimer\">
                                <p class=\"footer__disclaimer-text\">
                                    ";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footerDisclaimer"), "html", null, true);
        echo "&nbsp;
                                    <a href=\"https://github.com/contentful/the-example-app.php\" target=\"_blank\" rel=\"noopener\">";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("viewOnGithub"), "html", null, true);
        echo "</a>.&nbsp;
                                    <a href=\"";
        // line 167
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imprint") . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 167, $this->source); })()), "queryString", [], "any", false, false, false, 167)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("imprintLabel"), "html", null, true);
        echo "</a>.&nbsp;
                                    <a href=\"https://www.contentful.com/contact/\">";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contactUsLabel"), "html", null, true);
        echo "</a>.
                                </p>
                            </div>

                            <div class=\"footer__social\">
                                <p>
                                    <a href=\"https://www.facebook.com/contentful/\" target=\"_blank\" rel=\"noopener\">
                                        <svg>
                                            <use xlink:href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/icons.svg#facebook"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"https://twitter.com/contentful\" target=\"_blank\" rel=\"noopener\">
                                        <svg>
                                            <use xlink:href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/icons.svg#twitter"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"https://github.com/contentful\" target=\"_blank\" rel=\"noopener\">
                                        <svg>
                                            <use xlink:href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/icons.svg#github"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </main>

        ";
        // line 197
        $this->loadTemplate("partials/modal.html.twig", "base.html.twig", 197)->display(twig_to_array([]));
        // line 198
        echo "
        <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/index.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 201
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "environment", [], "any", false, false, false, 201), "prod"))) {
            // line 202
            echo "            ";
            $this->loadTemplate("partials/analytics.html.twig", "base.html.twig", 202)->display(twig_to_array([]));
            // line 203
            echo "        ";
        }
        // line 204
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 135
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 135,  445 => 204,  442 => 203,  439 => 202,  437 => 201,  432 => 199,  429 => 198,  427 => 197,  413 => 186,  405 => 181,  397 => 176,  386 => 168,  380 => 167,  376 => 166,  372 => 165,  363 => 159,  345 => 148,  335 => 145,  324 => 136,  322 => 135,  305 => 125,  295 => 122,  283 => 115,  279 => 114,  266 => 106,  258 => 100,  247 => 97,  240 => 96,  236 => 95,  232 => 94,  225 => 92,  221 => 91,  212 => 85,  206 => 82,  202 => 81,  198 => 80,  192 => 77,  186 => 74,  182 => 73,  178 => 72,  172 => 69,  167 => 67,  162 => 65,  152 => 58,  147 => 56,  137 => 49,  132 => 47,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  95 => 28,  91 => 27,  85 => 23,  79 => 21,  77 => 20,  72 => 18,  67 => 16,  63 => 15,  57 => 12,  52 => 10,  47 => 8,  44 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: base.html.twig
 *
 * @block page_title
 * @block body
 #}
<!DOCTYPE html>
<html lang=\"{{ state.locale }}\">
    <head>
        <title>{{ block('page_title')|trim }} — The Example App</title>

        <link rel=\"stylesheet\" href=\"{{ asset('stylesheets/style.css') }}\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"{{ 'metaDescription'|trans }}\" />
        <meta name=\"twitter:card\" content=\"{{ 'metaTwitterCard'|trans }}\" />

        <meta property=\"og:title\" content=\"{{ block('page_title')|trim }} — The Example App\">
        <meta property=\"og:type\" content=\"article\" />
        {% if app.request.get('_route') %}
            <meta property=\"og:url\" content=\"{{ path(app.request.get('_route'), app.request.get('_route_params')) ~ state.queryString }}\" />
        {% endif %}
        <meta property=\"og:image\" content=\"https://the-example-app-php.contentful.com/og-image.jpg\" />
        <meta property=\"og:image:type\" content=\"image/jpeg\" />
        <meta property=\"og:image:width\" content=\"1200\" />
        <meta property=\"og:image:height\" content=\"1200\" />
        <meta property=\"og:image:alt\" content=\"{{ 'metaImageAlt'|trans }}\" />
        <meta property=\"og:description\" content=\"{{ 'metaImageDescription'|trans }}\" />

        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ asset('apple-touch-icon.png') }}\" />
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('favicon-32x32.png') }}\" />
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('favicon-16x16.png') }}\" />
        <link rel=\"manifest\" href=\"{{ asset('manifest.json') }}\" />
        <link rel=\"mask-icon\" href=\"{{ asset('safari-pinned-tab.svg') }}\" color=\"#4a90e2\" />

        <meta name=\"theme-color\" content=\"#ffffff\" />
    </head>
    <body>
        <main class=\"main\">
            <div class=\"main__header\">
                <header class=\"header\">
                    <div class=\"header__upper-wrapper\">
                        <div class=\"header__upper layout-centered\">
                            <div class=\"header__upper-title\">
                                <a class=\"header__upper-link\" id=\"about-this-modal-trigger\" href=\"#\">
                                    <svg class=\"header__upper-icon\">
                                        <use xlink:href=\"{{ asset('icons/icons.svg#info') }}\"></use>
                                    </svg>
                                    <span>{{ 'whatIsThisApp'|trans }}</span>
                                </a>
                            </div>

                            <div class=\"header__upper-copy\">
                                <a class=\"header__upper-link\" href=\"https://github.com/contentful/the-example-app.php\" target=\"_blank\" rel=\"noopener\">
                                    <svg class=\"header__upper-icon\">
                                        <use xlink:href=\"{{ asset('icons/icons.svg#github') }}\"></use>
                                    </svg>
                                    {{ 'viewOnGithub'|trans }}
                                </a>
                            </div>

                            <div class=\"header__controls\">
                                <div class=\"header__controls_group\">
                                    <form action=\"\" method=\"get\">
                                        <div class=\"header__controls_label\">API: {{ state.apiLabel }}</div>
                                        <div class=\"header__controls_dropdown\">
                                            <div class=\"header__controls_help_text\">{{ 'apiSwitcherHelp'|trans }}</div>
                                            <button
                                                class=\"header__controls_button {{ state.isDeliveryApi ? 'header__controls_button--active' : '' }}\"
                                                type=\"submit\"
                                                name=\"api\"
                                                value=\"{{ constant('App\\\\Service\\\\Contentful::API_DELIVERY') }}\"
                                                >{{ 'contentDeliveryApiLabel'|trans }}:<br />
                                                <span class=\"header__controls_button_help\">{{ 'contentDeliveryApiHelp'|trans }}</span>
                                            </button>
                                            <button
                                                class=\"header__controls_button {{ state.isDeliveryApi ? '' : 'header__controls_button--active' }}\"
                                                type=\"submit\"
                                                name=\"api\"
                                                value=\"{{ constant('App\\\\Service\\\\Contentful::API_PREVIEW') }}\"
                                                >{{ 'contentPreviewApiLabel'|trans }}:<br />
                                                <span class=\"header__controls_button_help\">{{ 'contentPreviewApiHelp'|trans }}</span>
                                            </button>
                                        </div>
                                        <input type=\"hidden\" name=\"locale\" value=\"{{ state.locale }}\" />
                                    </form>
                                </div>

                                <div class=\"header__controls_group\">
                                    <form action=\"\" method=\"get\">
                                        <input type=\"hidden\" name=\"api\" value=\"{{ state.api }}\" />
                                        <div class=\"header__controls_label\">{{ 'locale'|trans }}: {{ locale.current ? locale.current.name : state.locale }}</div>
                                        <div class=\"header__controls_dropdown\">
                                            <div class=\"header__controls_help_text\">{{ 'localeQuestion'|trans }}</div>
                                            {% for localeItem in locale.all %}
                                                <button type=\"submit\" name=\"locale\" value=\"{{ localeItem.code }}\" class=\"header__controls_button {{ localeItem.code == state.locale ? 'header__controls_button--active' : '' }}\">
                                                    {{ localeItem.name }} ({{ localeItem.code }})
                                                </button>
                                            {% endfor %}
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class=\"header__upper-menu\">
                                <a href=\"{{ path('settings') ~ state.queryString }}\">{{ 'settingsLabel'|trans }}</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"header__lower-wrapper\">
                        <div class=\"header__lower layout-centered\">
                            <div class=\"header__logo\">
                                <a class=\"header__logo-link\" href=\"{{ path('landing_page') ~ state.queryString }}\">
                                    <img src=\"{{ asset('images/the-example-app-logo-php.svg') }}\" alt=\"{{ 'logoAlt'|trans }}\" />
                                </a>
                            </div>

                            <nav class=\"header__navigation main-navigation\">
                                <ul>
                                    <li>
                                        <a class=\"{{ app.request.get('tab') == 'home' ? 'active' : '' }}\" href=\"{{ path('landing_page') ~ state.queryString }}\">{{ 'homeLabel'|trans }}</a>
                                    </li>
                                    <li>
                                        <a class=\"{{ app.request.get('tab') == 'courses' ? 'active' : '' }}\" href=\"{{ path('courses') ~ state.queryString }}\">{{ 'coursesLabel'|trans }}</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>
            </div>

            <div class=\"main__content\">
                {% block body %}{% endblock %}
            </div>

            <div class=\"main__footer\">
                <div class=\"layout-centered\">
                    <footer class=\"footer\">
                        <div class=\"footer__upper\">
                            <nav class=\"footer__navigation main-navigation\">
                                <ul>
                                    <li>
                                        <a class=\"{{ app.request.get('_route') == 'landing_page' ? 'active' : '' }}\" href=\"{{ path('landing_page') ~ state.queryString }}\">{{ 'homeLabel'|trans }}</a>
                                    </li>
                                    <li>
                                        <a class=\"{{ app.request.get('_route') == 'landing_page' ? '' : 'active' }}\" href=\"{{ path('courses') ~ state.queryString }}\">{{ 'coursesLabel'|trans }}</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class=\"footer__apps\">
                            </div>
                        </div>

                        <div class=\"footer__lower\">
                            <div class=\"footer__logo\">
                                <a href=\"https://www.contentful.com/\" target=\"_blank\" rel=\"noopener\">
                                    <img class=\"footer__disclaimer-logo\" src=\"{{ asset('images/contentful-logo.svg') }}\" />
                                </a>
                            </div>

                            <div class=\"footer__disclaimer\">
                                <p class=\"footer__disclaimer-text\">
                                    {{ 'footerDisclaimer'|trans }}&nbsp;
                                    <a href=\"https://github.com/contentful/the-example-app.php\" target=\"_blank\" rel=\"noopener\">{{ 'viewOnGithub'|trans }}</a>.&nbsp;
                                    <a href=\"{{ path('imprint') ~ state.queryString }}\">{{ 'imprintLabel'|trans }}</a>.&nbsp;
                                    <a href=\"https://www.contentful.com/contact/\">{{ 'contactUsLabel'|trans }}</a>.
                                </p>
                            </div>

                            <div class=\"footer__social\">
                                <p>
                                    <a href=\"https://www.facebook.com/contentful/\" target=\"_blank\" rel=\"noopener\">
                                        <svg>
                                            <use xlink:href=\"{{ asset('icons/icons.svg#facebook') }}\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"https://twitter.com/contentful\" target=\"_blank\" rel=\"noopener\">
                                        <svg>
                                            <use xlink:href=\"{{ asset('icons/icons.svg#twitter') }}\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"https://github.com/contentful\" target=\"_blank\" rel=\"noopener\">
                                        <svg>
                                            <use xlink:href=\"{{ asset('icons/icons.svg#github') }}\"></use>
                                        </svg>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </main>

        {% include 'partials/modal.html.twig' with {} only %}

        <script src=\"{{ asset('scripts/index.js') }}\"></script>

        {% if app.environment == 'prod' %}
            {% include 'partials/analytics.html.twig' with {} only %}
        {% endif %}
    </body>
</html>
", "base.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/base.html.twig");
    }
}
