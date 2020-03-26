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

/* themes/bit/page.html.twig */
class __TwigTemplate_4d81dd61d0cecc95130e91d91e0f5c46d00449af030cd6bfe9320bcaaa870330 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 12];
        $filters = ["escape" => 15];
        $functions = ["include" => 3];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['include']
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
        echo "<div class=\"page\"  >

  ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, "/themes/bit/header.html"));
        echo "

<style>
  body .post-content{max-width:80%; margin:0 auto;}
</style>

  <main class=\"content content\">


      ";
        // line 12
        if ($this->getAttribute(($context["node"] ?? null), "label", [])) {
            // line 13
            echo "       <section class=\"front content-front\" style=\"background:url(/themes/bit/images/content/content/content-bg.jpg);\">
          <div class=\"container\">
            <h1 class=\"content__heading\">";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "label", [])), "html", null, true);
            echo "</h1>
            <div class=\"front__wrap\">
            <a class=\"btn__blue front__btn\" href=\"#\">Sign up for free</a>
            <a class=\"btn__blue--light front__btn\" href=\"#\">Log in</a></div>
          </div>
        </section>


         <div class=\"post-content\">
            ";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
         </div>
      ";
        } else {
            // line 27
            echo "

        ";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
      ";
        }
        // line 31
        echo "
  </main>




";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, "/themes/bit/footer.html"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/bit/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 37,  104 => 31,  99 => 29,  95 => 27,  89 => 24,  77 => 15,  73 => 13,  71 => 12,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page\"  >

  {{ include('/themes/bit/header.html') }}

<style>
  body .post-content{max-width:80%; margin:0 auto;}
</style>

  <main class=\"content content\">


      {% if node.label %}
       <section class=\"front content-front\" style=\"background:url(/themes/bit/images/content/content/content-bg.jpg);\">
          <div class=\"container\">
            <h1 class=\"content__heading\">{{ node.label }}</h1>
            <div class=\"front__wrap\">
            <a class=\"btn__blue front__btn\" href=\"#\">Sign up for free</a>
            <a class=\"btn__blue--light front__btn\" href=\"#\">Log in</a></div>
          </div>
        </section>


         <div class=\"post-content\">
            {{page.content}}
         </div>
      {% else %}


        {{page.content}}
      {% endif %}

  </main>




{{ include('/themes/bit/footer.html') }}
", "themes/bit/page.html.twig", "C:\\Server\\OSPanel\\domains\\bits\\themes\\bit\\page.html.twig");
    }
}
