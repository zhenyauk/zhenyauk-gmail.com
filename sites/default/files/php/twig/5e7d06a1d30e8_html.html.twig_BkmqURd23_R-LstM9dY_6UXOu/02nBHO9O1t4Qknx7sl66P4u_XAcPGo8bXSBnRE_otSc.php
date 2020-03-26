<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bit/html.html.twig */
class __TwigTemplate_49f8045de000c4523c0d619c7564b49de8fca0c23ec7d319d53aa3516f84f41d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 4, "raw" => 6, "safe_join" => 8, "t" => 29];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw', 'safe_join', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
<!-- Pages-->
<!-- Static links--><!DOCTYPE html>
<html ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "html", null, true);
        echo " lang=\"ru\">
  <head>
  <head-placeholder token=\"";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <meta charset=\"utf-8\">
    <title>";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title><!--[if IE]>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE = edge\"><![endif]-->
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <css-placeholder token=\"";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/css/styles.min.css?v=1584448964\"><!--[if lt IE 9]>



    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js\"></script><![endif]-->
 <link rel=\"stylesheet\" type=\"text/css\" href=\"/";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/css/fix.css\">
    <meta name=\"keywords\" content=\"\">

  </head>

  <body";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 28
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">

    <script src=\"/";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/js/libs.min.js?v=1584448964\"></script>
    <script src=\"/";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/js/front-page.min.js?v=1584448964\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/bit/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 37,  129 => 36,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  107 => 29,  104 => 28,  100 => 23,  92 => 18,  84 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 6,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Pages-->
<!-- Static links--><!DOCTYPE html>
<html {{ html_attributes }} lang=\"ru\">
  <head>
  <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <meta charset=\"utf-8\">
    <title>{{ head_title|safe_join(' | ') }}</title><!--[if IE]>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE = edge\"><![endif]-->
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/{{ directory }}/css/styles.min.css?v=1584448964\"><!--[if lt IE 9]>



    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js\"></script><![endif]-->
 <link rel=\"stylesheet\" type=\"text/css\" href=\"/{{ directory }}/css/fix.css\">
    <meta name=\"keywords\" content=\"\">

  </head>

  <body{{ attributes }}>
    {#
      Keyboard navigation/accessibility link to main content section in
      page.html.twig.
    #}
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      {{ 'Skip to main content'|t }}
    </a>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">

    <script src=\"/{{directory}}/js/libs.min.js?v=1584448964\"></script>
    <script src=\"/{{directory}}/js/front-page.min.js?v=1584448964\"></script>
  </body>
</html>
", "themes/bit/html.html.twig", "C:\\Server\\OSPanel\\domains\\bits\\themes\\bit\\html.html.twig");
    }
}
