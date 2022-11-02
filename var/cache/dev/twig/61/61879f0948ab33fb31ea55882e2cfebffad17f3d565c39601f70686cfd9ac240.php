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

/* partials/analytics.html.twig */
class __TwigTemplate_30abc26b64c380df3ba16ba244d11f298462bf69ba45d1eee296114aa1b7b903 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/analytics.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/analytics.html.twig"));

        // line 4
        echo "
 <!-- Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-109296848-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-40725207-13');
</script>
<!-- Google Analytics end -->
<!-- Snowplow starts plowing -->
<script async>
  ;(function(p,l,o,w,i,n,g){if(!p[i]){p.GlobalSnowplowNamespace=p.GlobalSnowplowNamespace||[];
  p.GlobalSnowplowNamespace.push(i);p[i]=function(){(p[i].q=p[i].q||[]).push(arguments)
  };p[i].q=p[i].q||[];n=l.createElement(o);g=l.getElementsByTagName(o)[0];n.async=1;
  n.src=w;g.parentNode.insertBefore(n,g)}}(window,document,\"script\",\"//d1fc8wv8zag5ca.cloudfront.net/2.8.2/sp.js\",\"snowplow\"));

  snowplow('newTracker', 'defaultTracker', 'col.contentful.com', {
    appId: 'the-example-app',
    platform: 'web',
    respectDoNotTrack: true,
    bufferSize: 1,
    cookieDomain: window.location.host,
    contexts: {
      webPage: true,
      gaCookies: true,
      geolocation: false
    }
  });

  snowplow('trackPageView');

  snowplow('enableLinkClickTracking')

  snowplow('trackSelfDescribingEvent', {
    schema: 'iglu:com.contentful/app_the_example_app_open/jsonschema/1-0-0',
    data: {
      space_id: '";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 42, $this->source); })()), "spaceId", [], "any", false, false, false, 42), "html", null, true);
        echo "',
      sdk_language_used: 'php',
      app_framework: 'symfony'
    }
  });
</script>
<!-- Snowplow stops plowing -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/analytics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 42,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * Template: partials/analytics.html.twig
 #}

 <!-- Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-109296848-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-40725207-13');
</script>
<!-- Google Analytics end -->
<!-- Snowplow starts plowing -->
<script async>
  ;(function(p,l,o,w,i,n,g){if(!p[i]){p.GlobalSnowplowNamespace=p.GlobalSnowplowNamespace||[];
  p.GlobalSnowplowNamespace.push(i);p[i]=function(){(p[i].q=p[i].q||[]).push(arguments)
  };p[i].q=p[i].q||[];n=l.createElement(o);g=l.getElementsByTagName(o)[0];n.async=1;
  n.src=w;g.parentNode.insertBefore(n,g)}}(window,document,\"script\",\"//d1fc8wv8zag5ca.cloudfront.net/2.8.2/sp.js\",\"snowplow\"));

  snowplow('newTracker', 'defaultTracker', 'col.contentful.com', {
    appId: 'the-example-app',
    platform: 'web',
    respectDoNotTrack: true,
    bufferSize: 1,
    cookieDomain: window.location.host,
    contexts: {
      webPage: true,
      gaCookies: true,
      geolocation: false
    }
  });

  snowplow('trackPageView');

  snowplow('enableLinkClickTracking')

  snowplow('trackSelfDescribingEvent', {
    schema: 'iglu:com.contentful/app_the_example_app_open/jsonschema/1-0-0',
    data: {
      space_id: '{{ state.spaceId }}',
      sdk_language_used: 'php',
      app_framework: 'symfony'
    }
  });
</script>
<!-- Snowplow stops plowing -->
", "partials/analytics.html.twig", "/mnt/c/Users/tartru/Downloads/php-blackduck-test-main/templates/partials/analytics.html.twig");
    }
}
