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

/* modules/drupalup_controller-master/templates/article-list.html.twig */
class __TwigTemplate_8d4fcced6e816b1b017f4b0cf10da55750d29fecc4ce36087d06175a28dfc274 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 23, "if" => 24, "set" => 42];
        $filters = ["escape" => 4, "raw" => 31];
        $functions = ["file_url" => 45];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 'raw'],
                ['file_url']
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
       <section class=\"front content-front\" style=\"background:url(/themes/bit/images/content/category/category-bg.jpg);\">
          <div class=\"container\">
            <!-- <h1 class=\"content__heading\">";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h1> -->
            <h1 class=\"content__heading\">Buy Bitcoin (BTC) <span class=\"new-line\">with bitFlyer</span></h1>
            <div class=\"front__wrap\">
            <a class=\"btn__blue front__btn\" href=\"#\">Sign up for free</a>
            <a class=\"btn__blue--light front__btn\" href=\"#\">Log in</a></div>
          </div>
        </section>


    <div>



     </div>

<section class=\"category-about\">
          <div class=\"container\">
            <div class=\"tabs tabs--grid category-about-tabs\">
              <div class=\"tabs__nav category-about-tabs__nav\">
              ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax"]) {
            // line 24
            echo "                <div class=\"tabs__btn-wrap\"><a class=\"tabs__btn tabs__btn--full btn__default ";
            if (($this->getAttribute(($context["term"] ?? null), "title", []) == $this->getAttribute($context["tax"], "name", []))) {
                echo " act ";
            }
            echo " \" href=\"/blog/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tax"], "id", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tax"], "name", [])), "html", null, true);
            echo "</a></div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "

              </div>
              <div class=\"tabs__content\">
                <div class=\"info-block\">
                  ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["term"] ?? null), "description", [])));
        echo "
                </div>
              </div>
            </div>
          </div>
        </section>
   <section class=\"post\">
          <div class=\"container\">

            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 41
            echo "      <div class=\"post__item\">
        ";
            // line 42
            $context["img"] = "/themes/bit/images/content/post/post-1.jpg";
            // line 43
            echo "
        ";
            // line 44
            if (($this->getAttribute($this->getAttribute(($context["images"] ?? null), ($this->getAttribute($context["loop"], "index", []) - 1), [], "array"), "getFileUri", [], "method") != null)) {
                // line 45
                echo "           ";
                $context["img"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["images"] ?? null), ($this->getAttribute($context["loop"], "index", []) - 1), [], "array"), "getFileUri", [], "method"))]);
                // line 46
                echo "        ";
            }
            // line 47
            echo "
      <img class=\"post__img\" src=\"";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img"] ?? null)), "html", null, true);
            echo "\" alt=\"\">
              <div class=\"post__content\"><span class=\"post__date\">20.02.2020</span>
                <h3 class=\"post__title\">  ";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "title", [], "array"), 0, [], "array"), "value", [], "array")), "html", null, true);
            echo "</h3>
                <p class=\"post__text\">


                    ";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "body", [], "array"), 0, [], "array"), "value", [], "array")), "html", null, true);
            echo "
                </p><a class=\"post__link\" href=\"/node/";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "nid", [], "array"), 0, [], "array"), "value", [], "array")), "html", null, true);
            echo "\">Read more</a>
              </div>
            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "

          </div>
        </section>





";
    }

    public function getTemplateName()
    {
        return "modules/drupalup_controller-master/templates/article-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 59,  172 => 55,  168 => 54,  161 => 50,  156 => 48,  153 => 47,  150 => 46,  147 => 45,  145 => 44,  142 => 43,  140 => 42,  137 => 41,  120 => 40,  108 => 31,  101 => 26,  86 => 24,  82 => 23,  60 => 4,  55 => 1,);
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
       <section class=\"front content-front\" style=\"background:url(/themes/bit/images/content/category/category-bg.jpg);\">
          <div class=\"container\">
            <!-- <h1 class=\"content__heading\">{{title}}</h1> -->
            <h1 class=\"content__heading\">Buy Bitcoin (BTC) <span class=\"new-line\">with bitFlyer</span></h1>
            <div class=\"front__wrap\">
            <a class=\"btn__blue front__btn\" href=\"#\">Sign up for free</a>
            <a class=\"btn__blue--light front__btn\" href=\"#\">Log in</a></div>
          </div>
        </section>


    <div>



     </div>

<section class=\"category-about\">
          <div class=\"container\">
            <div class=\"tabs tabs--grid category-about-tabs\">
              <div class=\"tabs__nav category-about-tabs__nav\">
              {% for tax in items %}
                <div class=\"tabs__btn-wrap\"><a class=\"tabs__btn tabs__btn--full btn__default {% if term.title == tax.name %} act {% endif %} \" href=\"/blog/{{tax.id}}\">{{ tax.name }}</a></div>
              {% endfor %}


              </div>
              <div class=\"tabs__content\">
                <div class=\"info-block\">
                  {{term.description|raw}}
                </div>
              </div>
            </div>
          </div>
        </section>
   <section class=\"post\">
          <div class=\"container\">

            {% for article in articles %}
      <div class=\"post__item\">
        {% set img = \"/themes/bit/images/content/post/post-1.jpg\" %}

        {% if  images[loop.index - 1].getFileUri() != null %}
           {% set img = file_url(images[loop.index - 1].getFileUri() )%}
        {% endif %}

      <img class=\"post__img\" src=\"{{img}}\" alt=\"\">
              <div class=\"post__content\"><span class=\"post__date\">20.02.2020</span>
                <h3 class=\"post__title\">  {{article['title'][0]['value']}}</h3>
                <p class=\"post__text\">


                    {{article['body'][0]['value']}}
                </p><a class=\"post__link\" href=\"/node/{{article['nid'][0]['value']}}\">Read more</a>
              </div>
            </div>
            {% endfor %}


          </div>
        </section>





", "modules/drupalup_controller-master/templates/article-list.html.twig", "C:\\Server\\OSPanel\\domains\\bits\\modules\\drupalup_controller-master\\templates\\article-list.html.twig");
    }
}
