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

/* themes/bit/templates/page--article.html.twig */
class __TwigTemplate_c0e543067b9cfdaf3907f381424403b18fae6ab8c6e1c18069cecc7831fdf674 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6];
        $filters = ["escape" => 6, "raw" => 18];
        $functions = ["include" => 3, "file_url" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
                ['include', 'file_url']
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


";
        // line 6
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_show_baner_for_page_", []), "value", [])) == "defaultt")) {
            // line 7
            echo "    <main class=\"content content\" >
  ";
            // line 8
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_article_baner", [])), "html", null, true);
            echo "

";
        } elseif (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(        // line 10
($context["node"] ?? null), "field_show_baner_for_page_", []), "value", [])) == "yess")) {
            // line 11
            echo "
<section class=\"front category-front\"
style=\"background:url(";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mainbaner", []), "entity", []), "fileuri", []))]), "html", null, true);
            echo ");\">
        <div class=\"container\">

            <h1 class=\"heading\">";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_bnaner_s_text", []), "value", [])), "html", null, true);
            echo "</span></h1>
            <div class=\"front__wrap\">
            ";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_field_custom_block", []), "value", [])));
            echo "
            </div>
          </div>
</section>

";
        } else {
            // line 24
            echo "  <main class=\"content content\" style=\"margin:200px auto; width:90%;\">

<h1 class=\"heading\">";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "label", [])), "html", null, true);
            echo "</span></h1>

";
        }
        // line 29
        echo "

         <div class=\"post-content\" >
          <div style=\"margin:0 auto; max-width:90%;\">
          ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "label", [])), "html", null, true);
        echo "
            ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
            </div>
         </div>



  </main>




";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, "/themes/bit/footer.html"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/bit/templates/page--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 45,  121 => 34,  117 => 33,  111 => 29,  105 => 26,  101 => 24,  92 => 18,  87 => 16,  81 => 13,  77 => 11,  75 => 10,  70 => 8,  67 => 7,  65 => 6,  59 => 3,  55 => 1,);
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


{% if node.field_show_baner_for_page_.value|escape == \"defaultt\" %}
    <main class=\"content content\" >
  {{page.page_article_baner}}

{% elseif node.field_show_baner_for_page_.value|escape == \"yess\" %}

<section class=\"front category-front\"
style=\"background:url({{ file_url(node.field_mainbaner.entity.fileuri) }});\">
        <div class=\"container\">

            <h1 class=\"heading\">{{ node.field_bnaner_s_text.value }}</span></h1>
            <div class=\"front__wrap\">
            {{ node.field_field_custom_block.value|raw }}
            </div>
          </div>
</section>

{% else %}
  <main class=\"content content\" style=\"margin:200px auto; width:90%;\">

<h1 class=\"heading\">{{ node.label }}</span></h1>

{% endif %}


         <div class=\"post-content\" >
          <div style=\"margin:0 auto; max-width:90%;\">
          {{ node.label }}
            {{page.content}}
            </div>
         </div>



  </main>




{{ include('/themes/bit/footer.html') }}
", "themes/bit/templates/page--article.html.twig", "C:\\Server\\OSPanel\\domains\\bits\\themes\\bit\\templates\\page--article.html.twig");
    }
}
