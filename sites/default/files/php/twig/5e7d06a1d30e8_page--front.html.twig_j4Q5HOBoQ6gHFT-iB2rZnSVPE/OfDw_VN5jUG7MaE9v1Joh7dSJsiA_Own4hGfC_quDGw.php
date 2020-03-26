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

/* themes/bit/page--front.html.twig */
class __TwigTemplate_9557de660fcb3e49d09d1d217f954320bd35b9ab13b6d30672b2746893057e7f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 11];
        $functions = ["include" => 3];

        try {
            $this->sandbox->checkSecurity(
                [],
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





<main class=\"front-page content\">

       ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "front_page", [])), "html", null, true);
        echo "



       <section class=\"feedback\">
          <div class=\"container\">
            <h2 class=\"front-page__h2 feedback__title\">";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feedbacks_title", [])), "html", null, true);
        echo "</h2>
            <div class=\"container\">
            <div class=\"feedback-slider\">
              <svg class=\"icon icon-slide-arrow feedback-slider__arrow feedback-slider__arrow--prev\">
                <use xlink:href=\"/themes/bit/images/svg/sprite.svg#slide-arrow\"></use>
              </svg>
              <div class=\"swiper-container feedback-slider__container\">
                <div class=\"swiper-wrapper feedback-slider__wrapper\">

              ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feedbacks", [])), "html", null, true);
        echo "

                </div>
                <svg  class=\"icon icon-slide-arrow icon-slide-arrow--next feedback-slider__arrow feedback-slider__arrow--next\">
                <use xlink:href=\"/themes/bit/images/svg/sprite.svg#slide-arrow\"></use>
              </svg>

              </div>

            </div>
            </div>
          </div>
        </section>






</main>






";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, "/themes/bit/footer.html"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/bit/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  91 => 26,  79 => 17,  70 => 11,  59 => 3,  55 => 1,);
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





<main class=\"front-page content\">

       {{ page.front_page }}



       <section class=\"feedback\">
          <div class=\"container\">
            <h2 class=\"front-page__h2 feedback__title\">{{page.feedbacks_title}}</h2>
            <div class=\"container\">
            <div class=\"feedback-slider\">
              <svg class=\"icon icon-slide-arrow feedback-slider__arrow feedback-slider__arrow--prev\">
                <use xlink:href=\"/themes/bit/images/svg/sprite.svg#slide-arrow\"></use>
              </svg>
              <div class=\"swiper-container feedback-slider__container\">
                <div class=\"swiper-wrapper feedback-slider__wrapper\">

              {{ page.feedbacks }}

                </div>
                <svg  class=\"icon icon-slide-arrow icon-slide-arrow--next feedback-slider__arrow feedback-slider__arrow--next\">
                <use xlink:href=\"/themes/bit/images/svg/sprite.svg#slide-arrow\"></use>
              </svg>

              </div>

            </div>
            </div>
          </div>
        </section>






</main>






{{ include('/themes/bit/footer.html') }}
", "themes/bit/page--front.html.twig", "C:\\Server\\OSPanel\\domains\\bits\\themes\\bit\\page--front.html.twig");
    }
}
