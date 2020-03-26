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

/* /themes/bit/footer.html */
class __TwigTemplate_99c0c42d5533f3a8ce799e9e85e477c0078fc4bafbb5447d73b0f41562d199c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["raw" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw'],
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
      <footer class=\"footer\">
        <div class=\"container footer__container\">


          <div class=\"footer__col\"><a class=\"logo footer__logo\" href=\"/\">
            <img class=\"logo__img\" src=\"/themes/bit/images/general/logo-light.svg\" alt=\"bitFlyer Logo\"></a>
            <div class=\"footer__wrap\"><a class=\"footer__logo-link\" href=\"#\">
              <img src=\"/themes/bit/images/general/logos/jba-logo.png\" alt=\"JBA\"></a><a class=\"footer__logo-link\" href=\"#\"><img src=\"/themes/bit/images/general/logos/digicert-logo.png\" alt=\"Digicert\"></a></div>
          </div>


          <div class=\"footer__col\">
            ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_mnu_1", [])));
        echo "
          </div>


          <div class=\"footer__col\">
            ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_mnu_2", [])));
        echo "
          </div>


          <div class=\"footer__col\">
            ";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_mnu_3", [])));
        echo "
          </div>
          <div class=\"footer__col\">
            ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_mnu_4", [])));
        echo "
          </div>
        </div>
      </footer>

";
    }

    public function getTemplateName()
    {
        return "/themes/bit/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  86 => 24,  78 => 19,  70 => 14,  55 => 1,);
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
      <footer class=\"footer\">
        <div class=\"container footer__container\">


          <div class=\"footer__col\"><a class=\"logo footer__logo\" href=\"/\">
            <img class=\"logo__img\" src=\"/themes/bit/images/general/logo-light.svg\" alt=\"bitFlyer Logo\"></a>
            <div class=\"footer__wrap\"><a class=\"footer__logo-link\" href=\"#\">
              <img src=\"/themes/bit/images/general/logos/jba-logo.png\" alt=\"JBA\"></a><a class=\"footer__logo-link\" href=\"#\"><img src=\"/themes/bit/images/general/logos/digicert-logo.png\" alt=\"Digicert\"></a></div>
          </div>


          <div class=\"footer__col\">
            {{page.footer_mnu_1|raw}}
          </div>


          <div class=\"footer__col\">
            {{page.footer_mnu_2|raw}}
          </div>


          <div class=\"footer__col\">
            {{page.footer_mnu_3|raw}}
          </div>
          <div class=\"footer__col\">
            {{page.footer_mnu_4|raw}}
          </div>
        </div>
      </footer>

", "/themes/bit/footer.html", "C:\\Server\\OSPanel\\domains\\bits\\themes\\bit\\footer.html");
    }
}
