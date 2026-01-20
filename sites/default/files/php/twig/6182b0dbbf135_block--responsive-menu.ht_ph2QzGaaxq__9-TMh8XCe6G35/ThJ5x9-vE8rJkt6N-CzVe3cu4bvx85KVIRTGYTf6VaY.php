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

/* themes/ano/templates/block/block--responsive-menu.html.twig */
class __TwigTemplate_4bcde0ca2408b70b892348ea3dcaa53c1016c336645610d78ee3353a7906c3ec extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        $context["classes"] = [0 => "rm-block", 1 => ("rm-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 31
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 31), 31, $this->source))), 2 => ("rm-plugin-id--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["plugin_id_clean"] ?? null), 32, $this->source))), 3 => "js-hide"];
        // line 36
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 36), 36, $this->source) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 37
        $context["config_label"] = ((twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 37)) ? (twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 37)) : (t("Main menu")));
        // line 38
        $context["rm_label_class"] = ((twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 38)) ? ("rm-toggle__label") : ("visually-hidden"));
        // line 40
        echo "<svg style=\"display:none;\">
  ";
        // line 42
        echo "  <symbol id=\"rm-toggle__icon--open\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
    <path class=\"rm-toggle__icon__path\" d=\"M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z\"/>
  </symbol>
  ";
        // line 46
        echo "  <symbol id=\"rm-toggle__icon--close\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
    <path class=\"rm-toggle__icon__path\" d=\"M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z\"/>
  </symbol>
</svg>
<nav aria-labelledby=\"";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 50, $this->source), "html", null, true);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "role", "aria-labelledby"), "html", null, true);
        echo ">
  <div class=\"rm-block__inner\">
    <div";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "rm-toggle"], "method", false, false, true, 52), 52, $this->source), "id"), "html", null, true);
        echo ">
      <button class=\"rm-toggle__link un-button\" role='button' aria-expanded=\"false\">
        ";
        // line 55
        echo "        <svg class=\"rm-toggle__icon\">
          <use id=\"rm-toggle__icon--use\" xlink:href=\"#rm-toggle__icon--open\"></use>
        </svg>
        ";
        // line 59
        echo "        <span class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rm_label_class"] ?? null), 59, $this->source), "html", null, true);
        echo "\" id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 59, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["config_label"] ?? null), 59, $this->source), "html", null, true);
        echo "</span>
      </button>
    </div>";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "</div>
</nav>
";
    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "<div class=\"rm-block__content\" id=\"rm-content\">
        ";
        // line 65
        if (($context["click_menus_enabled"] ?? null)) {
            // line 66
            echo "<span id=\"rm-accordion-trigger\" class=\"hidden\">
            <button class=\"rm-accordion-trigger un-button\" role='button' aria-expanded=\"false\">
              <svg class=\"rm-accordion-trigger__icon\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\"><path d=\"M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z\"/></svg>
              ";
            // line 70
            echo "              <span class=\"visually-hidden\">";
            echo t("Toggle sub-menu", array());
            echo "</span>
            </button>
          </span>";
        }
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 74, $this->source), "html", null, true);
        // line 75
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/ano/templates/block/block--responsive-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 75,  120 => 74,  113 => 70,  108 => 66,  106 => 65,  103 => 63,  99 => 62,  93 => 77,  91 => 62,  81 => 59,  76 => 55,  71 => 52,  64 => 50,  58 => 46,  53 => 42,  50 => 40,  48 => 38,  46 => 37,  44 => 36,  42 => 32,  41 => 31,  40 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ano/templates/block/block--responsive-menu.html.twig", "/home/artnotoil/sites/default/themes/ano/templates/block/block--responsive-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "block" => 62, "if" => 65, "trans" => 70);
        static $filters = array("clean_class" => 31, "clean_id" => 36, "t" => 37, "escape" => 50, "without" => 50);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['clean_class', 'clean_id', 't', 'escape', 'without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
