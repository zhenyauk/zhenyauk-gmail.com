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

/* /themes/bit/header.html */
class __TwigTemplate_8e426e85b0d8d872772bd00ca813e7853847dd4fce51a1f18e81c0823d13d973 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["escape" => 2, "upper" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'upper'],
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
        echo "<header class=\"header\" ";
        if (($context["is_admin"] ?? null)) {
            echo " style=\"margin-top:60px\" ";
        }
        echo ">
        <div class=\"container\"><a class=\"logo header__logo\" href=\"/\"><img class=\"logo__img\" src=\"/";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/general/logo-dark.svg\" alt=\"bitFlyer Logo\"></a>
          <div class=\"header__content\">
            <!-- BUTTONS TOP -->
            ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_btns", [])), "html", null, true);
        echo "

            <div class=\"lang header-lang\">
              <svg class=\"icon icon-lang lang__icon\">
                <use xlink:href=\"/";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/svg/sprite.svg#lang\"></use>
              </svg>
              <button class=\"lang__btn js-langBtn\" type=\"button\">
                <span class=\"lang__current\">
                  ";
        // line 13
        if (($context["language"] ?? null)) {
            // line 14
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["language"] ?? null), "id", []))), "html", null, true);
            echo "
                  ";
        }
        // line 16
        echo "              </span>
                <svg class=\"icon icon-arrow lang__arrow\">
                  <use xlink:href=\"/";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/svg/sprite.svg#arrow\"></use>
                </svg>
              </button>
              <div class=\"lang-list header-lang__list\">
                <a onclick=\"event.stopPropagation();\" class=\"lang-list__item\" href=\"/\">EN</a>
                <a onclick=\"event.stopPropagation(); \" class=\"lang-list__item\" href=\"de\">DE</a>
                <a onclick=\"window.open('/es')\" class=\"lang-list__item\" href=\"/es\">DT</a></div>
            </div>
          </div>
          <button class=\"hamburger\" type=\"button\"><span class=\"hamburger__btn\"></span></button>
        </div>
  </header>
";
    }

    public function getTemplateName()
    {
        return "/themes/bit/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  90 => 16,  84 => 14,  82 => 13,  75 => 9,  68 => 5,  62 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\" {% if is_admin %} style=\"margin-top:60px\" {% endif %}>
        <div class=\"container\"><a class=\"logo header__logo\" href=\"/\"><img class=\"logo__img\" src=\"/{{directory}}/images/general/logo-dark.svg\" alt=\"bitFlyer Logo\"></a>
          <div class=\"header__content\">
            <!-- BUTTONS TOP -->
            {{ page.top_btns }}

            <div class=\"lang header-lang\">
              <svg class=\"icon icon-lang lang__icon\">
                <use xlink:href=\"/{{directory}}/images/svg/sprite.svg#lang\"></use>
              </svg>
              <button class=\"lang__btn js-langBtn\" type=\"button\">
                <span class=\"lang__current\">
                  {% if language %}
                    {{ language.id|upper  }}
                  {% endif %}
              </span>
                <svg class=\"icon icon-arrow lang__arrow\">
                  <use xlink:href=\"/{{directory}}/images/svg/sprite.svg#arrow\"></use>
                </svg>
              </button>
              <div class=\"lang-list header-lang__list\">
                <a onclick=\"event.stopPropagation();\" class=\"lang-list__item\" href=\"/\">EN</a>
                <a onclick=\"event.stopPropagation(); \" class=\"lang-list__item\" href=\"de\">DE</a>
                <a onclick=\"window.open('/es')\" class=\"lang-list__item\" href=\"/es\">DT</a></div>
            </div>
          </div>
          <button class=\"hamburger\" type=\"button\"><span class=\"hamburger__btn\"></span></button>
        </div>
  </header>
", "/themes/bit/header.html", "C:\\Server\\OSPanel\\domains\\bits\\themes\\bit\\header.html");
    }
}
