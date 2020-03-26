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

/* themes/bit/templates/views/views-view-fields--otzyvy.html.twig */
class __TwigTemplate_45b3d21adfa3a7f9774a96cd306f8d5d855ba872af91dfa94f49791ef61d7588 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 15, "set" => 16, "for" => 27];
        $filters = ["escape" => 7, "length" => 15];
        $functions = ["range" => 27];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length'],
                ['range']
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
        echo "<div class=\"swiper-slide feedback-slider__slide\" >
    <img class=\"feedback__avatar\" src=\"/themes/bit/images/general/user-avatar.jpg\" alt=\"\">
    <div class=\"feedback__content\">
        <p class=\"feedback__text\">


            ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "body", []), "content", [])), "html", null, true);
        echo "


        </p>
        <p class=\"feedback__name\">";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", []), "content", [])), "html", null, true);
        echo "</p>

        <div class=\"feedback__rating\">

            ";
        // line 15
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_stars", []), "content", [])) == 234)) {
            // line 16
            echo "              ";
            $context["a"] = 5;
            // line 17
            echo "            ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_stars", []), "content", [])) == 233)) {
            // line 18
            echo "              ";
            $context["a"] = 4;
            // line 19
            echo "            ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_stars", []), "content", [])) == 232)) {
            // line 20
            echo "              ";
            $context["a"] = 3;
            // line 21
            echo "            ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_stars", []), "content", [])) == 231)) {
            // line 22
            echo "              ";
            $context["a"] = 2;
            // line 23
            echo "            ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_stars", []), "content", [])) == 230)) {
            // line 24
            echo "              ";
            $context["a"] = 1;
            // line 25
            echo "            ";
        }
        // line 26
        echo "
           ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["a"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "
            <svg class=\"icon icon-star feedback__icon\">
                <use xlink:href=\"/themes/bit/images/svg/sprite.svg#star\"></use>
            </svg>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bit/templates/views/views-view-fields--otzyvy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  116 => 28,  112 => 27,  109 => 26,  106 => 25,  103 => 24,  100 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  77 => 15,  70 => 11,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"swiper-slide feedback-slider__slide\" >
    <img class=\"feedback__avatar\" src=\"/themes/bit/images/general/user-avatar.jpg\" alt=\"\">
    <div class=\"feedback__content\">
        <p class=\"feedback__text\">


            {{ fields.body.content }}


        </p>
        <p class=\"feedback__name\">{{ fields.title.content }}</p>

        <div class=\"feedback__rating\">

            {% if fields.field_stars.content|length == 234 %}
              {% set a = 5 %}
            {% elseif fields.field_stars.content|length == 233 %}
              {% set a = 4 %}
            {%  elseif fields.field_stars.content|length == 232 %}
              {% set a =3 %}
            {% elseif fields.field_stars.content|length == 231 %}
              {% set a =2 %}
            {% elseif fields.field_stars.content|length == 230 %}
              {% set a =1 %}
            {% endif %}

           {% for i in 1..a %}

            <svg class=\"icon icon-star feedback__icon\">
                <use xlink:href=\"/themes/bit/images/svg/sprite.svg#star\"></use>
            </svg>
            {% endfor %}


        </div>
    </div>
</div>
", "themes/bit/templates/views/views-view-fields--otzyvy.html.twig", "C:\\Server\\OSPanel\\domains\\bits\\themes\\bit\\templates\\views\\views-view-fields--otzyvy.html.twig");
    }
}
