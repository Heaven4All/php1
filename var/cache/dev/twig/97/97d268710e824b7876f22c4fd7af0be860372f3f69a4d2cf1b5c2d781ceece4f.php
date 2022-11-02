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

/* partials/modal.html.twig */
class __TwigTemplate_2769f52d5a8bfb7ee22b67b7f22cb27e22f3094b77c0bb47760a1feaa90f663c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/modal.html.twig"));

        // line 4
        echo "
 <section class=\"modal\" id=\"about-this-modal\">
     <div class=\"modal__overlay close\"></div>
     <div class=\"modal__wrapper\">
         <h1 class=\"modal__title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modalTitlePhp"), "html", null, true);
        echo "</h1>
         <div class=\"modal__content\">
             <p>
                 ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modalIntroPhp"), "html", null, true);
        echo "
                 <a href=\"https://github.com/contentful/the-example-app.php\" target=\"_blank\" rel=\"noopener\">Github</a>.
             </p>
             <p>
                 ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modalSpaceIntro"), "html", null, true);
        echo "
                 <a href=\"https://github.com/contentful/content-models/blob/master/the-example-app/README.md \" target=\"_blank\" rel=\"noopener\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modalSpaceLinkLabel"), "html", null, true);
        echo "</a>.
             </p>

             <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modalPlatforms"), "html", null, true);
        echo "</p>
             <ul>
                 <li>
                     <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-nodejs.svg"), "html", null, true);
        echo "\" /><br />
                     <a href=\"https://the-example-app-nodejs.contentful.com/";
        // line 23
        ((twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 23, $this->source); })()), "usesCookieCredentials", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 23, $this->source); })()), "shareableLinkQuery", [], "any", false, false, false, 23), "html", null, true))) : (print ("")));
        echo "\" rel=\"noopener\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hostedLabel"), "html", null, true);
        echo "</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.nodejs\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-dotnet.svg"), "html", null, true);
        echo "\" /><br />
                     <a href=\"https://the-example-app-csharp.contentful.com/";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 28, $this->source); })()), "usesCookieCredentials", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 28, $this->source); })()), "shareableLinkQuery", [], "any", false, false, false, 28), "html", null, true))) : (print ("")));
        echo "\" rel=\"noopener\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hostedLabel"), "html", null, true);
        echo "</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.csharp\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-ruby.svg"), "html", null, true);
        echo "\" /><br />
                     <a href=\"https://the-example-app-rb.contentful.com/";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 33, $this->source); })()), "usesCookieCredentials", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 33, $this->source); })()), "shareableLinkQuery", [], "any", false, false, false, 33), "html", null, true))) : (print ("")));
        echo "\" rel=\"noopener\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hostedLabel"), "html", null, true);
        echo "</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.rb\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-php.svg"), "html", null, true);
        echo "\" /><br />
                     <a href=\"https://the-example-app-php.contentful.com/";
        // line 38
        ((twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 38, $this->source); })()), "usesCookieCredentials", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 38, $this->source); })()), "shareableLinkQuery", [], "any", false, false, false, 38), "html", null, true))) : (print ("")));
        echo "\" rel=\"noopener\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hostedLabel"), "html", null, true);
        echo "</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.php\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-python.svg"), "html", null, true);
        echo "\" /><br />
                     <a href=\"https://the-example-app-py.contentful.com/";
        // line 43
        ((twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 43, $this->source); })()), "usesCookieCredentials", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 43, $this->source); })()), "shareableLinkQuery", [], "any", false, false, false, 43), "html", null, true))) : (print ("")));
        echo "\" rel=\"noopener\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hostedLabel"), "html", null, true);
        echo "</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.py\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-java.svg"), "html", null, true);
        echo "\" /><br />
                     <a href=\"https://the-example-app-java.contentful.com/";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 48, $this->source); })()), "usesCookieCredentials", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 48, $this->source); })()), "shareableLinkQuery", [], "any", false, false, false, 48), "html", null, true))) : (print ("")));
        echo "\" rel=\"noopener\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hostedLabel"), "html", null, true);
        echo "</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.java\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-swift.svg"), "html", null, true);
        echo "\" /><br />
                     <a href=\"https://itunes.apple.com/app/contentful-reference/id1333721890\" rel=\"noopener\" target=\"_blank\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hostedLabel"), "html", null, true);
        echo "</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.swift\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-android.svg"), "html", null, true);
        echo "\" /><br />
                     <a href=\"https://play.google.com/store/apps/details?id=com.contentful.tea.kotlin\" rel=\"noopener\" target=\"_blank\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hostedLabel"), "html", null, true);
        echo "</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.kotlin\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
             </ul>
         </div>

         <div class=\"modal__cta-wrapper\">
             <a class=\"modal__cta close\" href=\"#\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modalCTALabel"), "html", null, true);
        echo "</a>
         </div>

         <div class=\"modal__close-wrapper\">
             <a class=\"modal__close-button close\" href=\"#\">
                 <svg>
                     <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"/icons/icons.svg#cross\"></use>
                 </svg>
             </a>
         </div>
     </div>
 </section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 65,  171 => 58,  167 => 57,  160 => 53,  156 => 52,  147 => 48,  143 => 47,  134 => 43,  130 => 42,  121 => 38,  117 => 37,  108 => 33,  104 => 32,  95 => 28,  91 => 27,  82 => 23,  78 => 22,  72 => 19,  66 => 16,  62 => 15,  55 => 11,  49 => 8,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: partials/modal.html.twig
 #}

 <section class=\"modal\" id=\"about-this-modal\">
     <div class=\"modal__overlay close\"></div>
     <div class=\"modal__wrapper\">
         <h1 class=\"modal__title\">{{ 'modalTitlePhp'|trans }}</h1>
         <div class=\"modal__content\">
             <p>
                 {{ 'modalIntroPhp'|trans }}
                 <a href=\"https://github.com/contentful/the-example-app.php\" target=\"_blank\" rel=\"noopener\">Github</a>.
             </p>
             <p>
                 {{ 'modalSpaceIntro'|trans }}
                 <a href=\"https://github.com/contentful/content-models/blob/master/the-example-app/README.md \" target=\"_blank\" rel=\"noopener\">{{ 'modalSpaceLinkLabel'|trans }}</a>.
             </p>

             <p>{{ 'modalPlatforms'|trans }}</p>
             <ul>
                 <li>
                     <img src=\"{{ asset('images/icon-nodejs.svg') }}\" /><br />
                     <a href=\"https://the-example-app-nodejs.contentful.com/{{ state.usesCookieCredentials ? state.shareableLinkQuery : '' }}\" rel=\"noopener\" target=\"_blank\">{{ 'hostedLabel'|trans }}</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.nodejs\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"{{ asset('images/icon-dotnet.svg') }}\" /><br />
                     <a href=\"https://the-example-app-csharp.contentful.com/{{ state.usesCookieCredentials ? state.shareableLinkQuery : '' }}\" rel=\"noopener\" target=\"_blank\">{{ 'hostedLabel'|trans }}</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.csharp\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"{{ asset('images/icon-ruby.svg') }}\" /><br />
                     <a href=\"https://the-example-app-rb.contentful.com/{{ state.usesCookieCredentials ? state.shareableLinkQuery : '' }}\" rel=\"noopener\" target=\"_blank\">{{ 'hostedLabel'|trans }}</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.rb\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"{{ asset('images/icon-php.svg') }}\" /><br />
                     <a href=\"https://the-example-app-php.contentful.com/{{ state.usesCookieCredentials ? state.shareableLinkQuery : '' }}\" rel=\"noopener\" target=\"_blank\">{{ 'hostedLabel'|trans }}</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.php\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"{{ asset('images/icon-python.svg') }}\" /><br />
                     <a href=\"https://the-example-app-py.contentful.com/{{ state.usesCookieCredentials ? state.shareableLinkQuery : '' }}\" rel=\"noopener\" target=\"_blank\">{{ 'hostedLabel'|trans }}</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.py\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"{{ asset('images/icon-java.svg') }}\" /><br />
                     <a href=\"https://the-example-app-java.contentful.com/{{ state.usesCookieCredentials ? state.shareableLinkQuery : '' }}\" rel=\"noopener\" target=\"_blank\">{{ 'hostedLabel'|trans }}</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.java\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"{{ asset('images/icon-swift.svg') }}\" /><br />
                     <a href=\"https://itunes.apple.com/app/contentful-reference/id1333721890\" rel=\"noopener\" target=\"_blank\">{{ 'hostedLabel'|trans }}</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.swift\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
                 <li>
                     <img src=\"{{ asset('images/icon-android.svg') }}\" /><br />
                     <a href=\"https://play.google.com/store/apps/details?id=com.contentful.tea.kotlin\" rel=\"noopener\" target=\"_blank\">{{ 'hostedLabel'|trans }}</a> <br />
                     <a href=\"https://github.com/contentful/the-example-app.kotlin\" rel=\"noopener\" target=\"_blank\">GitHub</a>
                 </li>
             </ul>
         </div>

         <div class=\"modal__cta-wrapper\">
             <a class=\"modal__cta close\" href=\"#\">{{ 'modalCTALabel'|trans }}</a>
         </div>

         <div class=\"modal__close-wrapper\">
             <a class=\"modal__close-button close\" href=\"#\">
                 <svg>
                     <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"/icons/icons.svg#cross\"></use>
                 </svg>
             </a>
         </div>
     </div>
 </section>
", "partials/modal.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/partials/modal.html.twig");
    }
}
