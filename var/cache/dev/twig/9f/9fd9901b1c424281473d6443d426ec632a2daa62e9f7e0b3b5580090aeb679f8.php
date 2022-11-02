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

/* settings.html.twig */
class __TwigTemplate_426ff78219259a1b390297b8780a901637f486261b53bcbb3d7b1bb20dc28ab4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'form_errors' => [$this, 'block_form_errors'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings.html.twig"));

        // line 10
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settingsLabel");
        // line 16
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 8
        $this->parent = $this->loadTemplate("base.html.twig", "settings.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 19
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 19, $this->source); })())), 0))) {
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 21
                echo "<div class=\"form-item__error-wrapper\">
                <svg class=\"form-item__error-icon\">
                    <use xlink:href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/icons.svg#error"), "html", null, true);
                echo "\"></use>
                </svg>

                <div class=\"form-item__error-message\">
                    ";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 27)), "html", null, true);
                echo "
                </div>
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "    <div class=\"layout-centered-small\">
        ";
        // line 36
        $this->loadTemplate("partials/breadcrumb.html.twig", "settings.html.twig", 36)->display(twig_to_array([]));
        // line 37
        echo "
        <h1>";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</h1>

        <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settingsIntroLabel"), "html", null, true);
        echo "</p>

        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 43
            echo "            <div class=\"status-block status-block--success\">
                <svg class=\"status-block__icon status-block__icon--success\">
                    <use xlink:href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/icons.svg#success"), "html", null, true);
            echo "\"></use>
                </svg>

                <div class=\"status-block__content\">
                    <div class=\"status-block__title\">
                        ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
        ";
        // line 56
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "vars", [], "any", false, false, false, 56), "valid", [], "any", false, false, false, 56)) {
            // line 57
            echo "            <div class=\"status-block status-block--error\">
                <svg class=\"status-block__icon status-block__icon--error\">
                    <use xlink:href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/icons.svg#error"), "html", null, true);
            echo "\"></use>
                </svg>

                <div class=\"status-block__content\">
                    <div class=\"status-block__title\">
                        ";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("errorOccurredTitleLabel"), "html", null, true);
            echo "
                    </div>

                    <div class=\"status-block__message\">
                        ";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("errorOccurredMessageLabel"), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 73
        echo "
        ";
        // line 74
        if (((isset($context["space"]) || array_key_exists("space", $context) ? $context["space"] : (function () { throw new RuntimeError('Variable "space" does not exist.', 74, $this->source); })()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "valid", [], "any", false, false, false, 74))) {
            // line 75
            echo "            <div class='status-block status-block--info'>
                <svg class='status-block__icon status-block__icon--info'>
                    <use xlink:href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/icons.svg#info"), "html", null, true);
            echo "\"></use>
                </svg>

                ";
            // line 80
            if (twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 80, $this->source); })()), "usesCookieCredentials", [], "any", false, false, false, 80)) {
                // line 81
                echo "                    <div class=\"status-block__content\">
                        <div class=\"status-block__message\">
                            <p>
                                <em>";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("usingSessionCredentialsLabel"), "html", null, true);
                echo "</em>
                            </p>
                            <p>
                                <strong>";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connectedToSpaceLabel"), "html", null, true);
                echo ":</strong><br />
                                ";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["space"]) || array_key_exists("space", $context) ? $context["space"] : (function () { throw new RuntimeError('Variable "space" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["space"]) || array_key_exists("space", $context) ? $context["space"] : (function () { throw new RuntimeError('Variable "space" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88), "html", null, true);
                echo ")
                            </p>

                            <form method=\"post\" action=\"";
                // line 91
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset");
                echo "\">
                                <p>
                                    <strong>";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("applicationCredentialsLabel"), "html", null, true);
                echo ":</strong><br />
                                    <button type=\"submit\">";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetCredentialsLabel"), "html", null, true);
                echo "</button><br />
                                    <a class=\"status-block__sharelink\" href=\"";
                // line 95
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("landing_page") . twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 95, $this->source); })()), "shareableLinkQuery", [], "any", false, false, false, 95)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("copyLinkLabel"), "html", null, true);
                echo "</a>
                                </p>
                            </form>
                            <p>
                                <em>";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("overrideConfigLabel"), "html", null, true);
                echo "</em>
                            </p>
                        </div>
                    </div>
                ";
            } else {
                // line 104
                echo "                    <div class=\"status-block__content\">
                        <div class=\"status-block__message\">
                            <p>
                                <em>";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("usingServerCredentialsLabel"), "html", null, true);
                echo "</em>
                            </p>
                            <p>
                                <strong>";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connectedToSpaceLabel"), "html", null, true);
                echo ":</strong><br />
                                ";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["space"]) || array_key_exists("space", $context) ? $context["space"] : (function () { throw new RuntimeError('Variable "space" does not exist.', 111, $this->source); })()), "name", [], "any", false, false, false, 111), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["space"]) || array_key_exists("space", $context) ? $context["space"] : (function () { throw new RuntimeError('Variable "space" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111), "html", null, true);
                echo ")
                            </p>
                            <p>
                                <strong>";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("credentialSourceLabel"), "html", null, true);
                echo ":</strong><br />
                                ";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("loadedFromLocalFileLabel"), "html", null, true);
                echo " <a href=\"https://github.com/contentful/the-example-app.php/blob/master/.env.dist\" target=\"_blank\" rel=\"noopener\">.env</a>
                            </p>
                            <p>
                                <em>";
                // line 118
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("overrideConfigLabel"), "html", null, true);
                echo "</em>
                            </p>
                        </div>
                    </div>
                ";
            }
            // line 123
            echo "            </div>
        ";
        }
        // line 125
        echo "
        ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings"), "attr" => ["class" => "form"]]);
        echo "
            <div class=\"form-item\">
                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "spaceId", [], "any", false, false, false, 128), 'label', ["id" => "input-space-id", "label" => "spaceIdLabel"]);
        echo "
                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "spaceId", [], "any", false, false, false, 129), 'widget', ["id" => "input-space-id"]);
        echo "
                ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "spaceId", [], "any", false, false, false, 130), 'errors');
        echo "

                <div class=\"form-item__help-text\">
                    ";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("spaceIdHelpText"), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"form-item\">
                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "deliveryToken", [], "any", false, false, false, 138), 'label', ["id" => "input-delivery-token", "label" => "cdaAccessTokenLabel"]);
        echo "
                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "deliveryToken", [], "any", false, false, false, 139), 'widget', ["id" => "input-delivery-token"]);
        echo "
                ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "deliveryToken", [], "any", false, false, false, 140), 'errors');
        echo "

                <div class=\"form-item__help-text\">
                    ";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contentDeliveryApiHelpText"), "html", null, true);
        echo "
                    &nbsp;
                    <a href=\"https://www.contentful.com/developers/docs/references/content-delivery-api/\" target=\"_blank\" rel=\"noopener\">Content Delivery API</a>
                </div>
            </div>

            <div class=\"form-item\">
                ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "previewToken", [], "any", false, false, false, 150), 'label', ["id" => "input-preview-token", "label" => "cpaAccessTokenLabel"]);
        echo "
                ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "previewToken", [], "any", false, false, false, 151), 'widget', ["id" => "input-preview-token"]);
        echo "
                ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "previewToken", [], "any", false, false, false, 152), 'errors');
        echo "

                <div class=\"form-item__help-text\">
                    ";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contentPreviewApiHelpText"), "html", null, true);
        echo "
                    &nbsp;
                    <a href=\"https://www.contentful.com/developers/docs/references/content-preview-api/\" target=\"_blank\" rel=\"noopener\">Content Preview API</a>
                </div>
            </div>

            <div class=\"form-item\">
                ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "editorialFeatures", [], "any", false, false, false, 162), 'widget', ["id" => "input-editorial-features"]);
        echo "
                ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "editorialFeatures", [], "any", false, false, false, 163), 'label', ["id" => "input-editorial-features", "label" => "enableEditorialFeaturesLabel"]);
        echo "

                <div class=\"form-item__help-text\">
                    ";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("enableEditorialFeaturesHelpText"), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"form-item\">
                <input type=\"submit\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("saveSettingsButtonLabel"), "html", null, true);
        echo "\" class=\"cta\" />
            </div>
        ";
        // line 173
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 173,  431 => 171,  423 => 166,  417 => 163,  413 => 162,  403 => 155,  397 => 152,  393 => 151,  389 => 150,  379 => 143,  373 => 140,  369 => 139,  365 => 138,  357 => 133,  351 => 130,  347 => 129,  343 => 128,  338 => 126,  335 => 125,  331 => 123,  323 => 118,  317 => 115,  313 => 114,  305 => 111,  301 => 110,  295 => 107,  290 => 104,  282 => 99,  273 => 95,  269 => 94,  265 => 93,  260 => 91,  252 => 88,  248 => 87,  242 => 84,  237 => 81,  235 => 80,  229 => 77,  225 => 75,  223 => 74,  220 => 73,  212 => 68,  205 => 64,  197 => 59,  193 => 57,  191 => 56,  188 => 55,  177 => 50,  169 => 45,  165 => 43,  161 => 42,  156 => 40,  151 => 38,  148 => 37,  146 => 36,  143 => 35,  133 => 34,  115 => 27,  108 => 23,  104 => 21,  100 => 20,  98 => 19,  88 => 18,  75 => 13,  65 => 12,  54 => 8,  52 => 16,  50 => 10,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: settings.html.twig
 *
 * @param Contentful\\Delivery\\Resource\\Entry space
 * @param Symfony/Component/Form/FormView  form
 #}

{% extends 'base.html.twig' %}

{% set title = 'settingsLabel'|trans %}

{% block page_title %}
    {{ title }}
{% endblock %}

{% form_theme form _self %}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        {%- for error in errors -%}
            <div class=\"form-item__error-wrapper\">
                <svg class=\"form-item__error-icon\">
                    <use xlink:href=\"{{ asset('icons/icons.svg#error') }}\"></use>
                </svg>

                <div class=\"form-item__error-message\">
                    {{ error.message|trans }}
                </div>
            </div>
        {%- endfor -%}
    {%- endif -%}
{%- endblock form_errors -%}

{% block body %}
    <div class=\"layout-centered-small\">
        {% include 'partials/breadcrumb.html.twig' with {} only %}

        <h1>{{ title }}</h1>

        <p>{{ 'settingsIntroLabel'|trans }}</p>

        {% for message in app.flashes('success') %}
            <div class=\"status-block status-block--success\">
                <svg class=\"status-block__icon status-block__icon--success\">
                    <use xlink:href=\"{{ asset('icons/icons.svg#success') }}\"></use>
                </svg>

                <div class=\"status-block__content\">
                    <div class=\"status-block__title\">
                        {{ message|trans }}
                    </div>
                </div>
            </div>
        {% endfor %}

        {% if not form.vars.valid %}
            <div class=\"status-block status-block--error\">
                <svg class=\"status-block__icon status-block__icon--error\">
                    <use xlink:href=\"{{ asset('icons/icons.svg#error') }}\"></use>
                </svg>

                <div class=\"status-block__content\">
                    <div class=\"status-block__title\">
                        {{ 'errorOccurredTitleLabel'|trans }}
                    </div>

                    <div class=\"status-block__message\">
                        {{ 'errorOccurredMessageLabel'|trans }}
                    </div>
                </div>
            </div>
        {% endif %}

        {% if space and form.vars.valid %}
            <div class='status-block status-block--info'>
                <svg class='status-block__icon status-block__icon--info'>
                    <use xlink:href=\"{{ asset('icons/icons.svg#info') }}\"></use>
                </svg>

                {% if state.usesCookieCredentials %}
                    <div class=\"status-block__content\">
                        <div class=\"status-block__message\">
                            <p>
                                <em>{{ 'usingSessionCredentialsLabel'|trans }}</em>
                            </p>
                            <p>
                                <strong>{{ 'connectedToSpaceLabel'|trans }}:</strong><br />
                                {{ space.name }} ({{ space.id }})
                            </p>

                            <form method=\"post\" action=\"{{ path('reset') }}\">
                                <p>
                                    <strong>{{ 'applicationCredentialsLabel'|trans }}:</strong><br />
                                    <button type=\"submit\">{{ 'resetCredentialsLabel'|trans }}</button><br />
                                    <a class=\"status-block__sharelink\" href=\"{{ url('landing_page') ~ state.shareableLinkQuery }}\">{{ 'copyLinkLabel'|trans }}</a>
                                </p>
                            </form>
                            <p>
                                <em>{{ 'overrideConfigLabel'|trans }}</em>
                            </p>
                        </div>
                    </div>
                {% else %}
                    <div class=\"status-block__content\">
                        <div class=\"status-block__message\">
                            <p>
                                <em>{{ 'usingServerCredentialsLabel'|trans }}</em>
                            </p>
                            <p>
                                <strong>{{ 'connectedToSpaceLabel'|trans }}:</strong><br />
                                {{ space.name }} ({{ space.id }})
                            </p>
                            <p>
                                <strong>{{ 'credentialSourceLabel'|trans }}:</strong><br />
                                {{ 'loadedFromLocalFileLabel'|trans }} <a href=\"https://github.com/contentful/the-example-app.php/blob/master/.env.dist\" target=\"_blank\" rel=\"noopener\">.env</a>
                            </p>
                            <p>
                                <em>{{ 'overrideConfigLabel'|trans }}</em>
                            </p>
                        </div>
                    </div>
                {% endif %}
            </div>
        {% endif %}

        {{ form_start(form, {action: path('settings'), attr: {class: 'form'}}) }}
            <div class=\"form-item\">
                {{ form_label(form.spaceId, 'spaceIdLabel', {id: 'input-space-id'}) }}
                {{ form_widget(form.spaceId, {id: 'input-space-id'}) }}
                {{ form_errors(form.spaceId) }}

                <div class=\"form-item__help-text\">
                    {{ 'spaceIdHelpText'|trans }}
                </div>
            </div>

            <div class=\"form-item\">
                {{ form_label(form.deliveryToken, 'cdaAccessTokenLabel', {id: 'input-delivery-token'}) }}
                {{ form_widget(form.deliveryToken, {id: 'input-delivery-token'}) }}
                {{ form_errors(form.deliveryToken) }}

                <div class=\"form-item__help-text\">
                    {{ 'contentDeliveryApiHelpText'|trans }}
                    &nbsp;
                    <a href=\"https://www.contentful.com/developers/docs/references/content-delivery-api/\" target=\"_blank\" rel=\"noopener\">Content Delivery API</a>
                </div>
            </div>

            <div class=\"form-item\">
                {{ form_label(form.previewToken, 'cpaAccessTokenLabel', {id: 'input-preview-token'}) }}
                {{ form_widget(form.previewToken, {id: 'input-preview-token'}) }}
                {{ form_errors(form.previewToken) }}

                <div class=\"form-item__help-text\">
                    {{ 'contentPreviewApiHelpText'|trans }}
                    &nbsp;
                    <a href=\"https://www.contentful.com/developers/docs/references/content-preview-api/\" target=\"_blank\" rel=\"noopener\">Content Preview API</a>
                </div>
            </div>

            <div class=\"form-item\">
                {{ form_widget(form.editorialFeatures, {id: 'input-editorial-features'}) }}
                {{ form_label(form.editorialFeatures, 'enableEditorialFeaturesLabel', {id: 'input-editorial-features'}) }}

                <div class=\"form-item__help-text\">
                    {{ 'enableEditorialFeaturesHelpText'|trans }}
                </div>
            </div>

            <div class=\"form-item\">
                <input type=\"submit\" value=\"{{ 'saveSettingsButtonLabel'|trans }}\" class=\"cta\" />
            </div>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "settings.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/settings.html.twig");
    }
}
