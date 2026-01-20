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

/* themes/ano/templates/content/comment.html.twig */
class __TwigTemplate_09120ca69fa13a2c55804c3f76d0f7e13137997e62a1260aaec4439af0a5a725 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        $context["classes"] = [0 => "comment", 1 => "js-comment", 2 => ("comment--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 71
($context["comment"] ?? null), "bundle", [], "any", false, false, true, 71), 71, $this->source))), 3 => ((        // line 72
($context["view_mode"] ?? null)) ? (("comment--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 72, $this->source)))) : ("")), 4 => (((        // line 73
($context["status"] ?? null) != "published")) ? (($context["status"] ?? null)) : ("")), 5 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
($context["comment"] ?? null), "owner", [], "any", false, false, true, 74), "anonymous", [], "any", false, false, true, 74)) ? ("by-anonymous") : ("")), 6 => (((        // line 75
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 75)))) ? ((("by-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getEntityTypeId", [], "method", false, false, true, 75), 75, $this->source)) . "-author")) : ("")), 7 => ((        // line 76
($context["title_visibility"] ?? null)) ? ("has-title") : ("")), 8 => "clearfix"];
        // line 80
        echo "<article ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 80), 80, $this->source), "role"), "html", null, true);
        echo ">
  <div class=\"comment__container\">";
        // line 83
        if (($context["title"] ?? null)) {
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 84, $this->source), "html", null, true);
            // line 86
            $context["title_classes"] = [0 => ((            // line 87
($context["title_visibility"] ?? null)) ? ("comment__title") : ("comment__title--visually-hidden")), 1 => "h4"];
            // line 91
            echo "<h3";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 91), 91, $this->source), "html", null, true);
            echo ">
        ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 92, $this->source), "html", null, true);
            // line 93
            if ((($context["status"] ?? null) != "published")) {
                // line 94
                echo "<span class=\"comment__status comment--unpublished marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\">
              <span class=\"visually-hidden\">";
                // line 95
                echo t("This comment is", array());
                echo "</span>";
                echo t("Unpublished", array());
                // line 96
                echo "</span>";
            }
            // line 103
            echo "        <mark class=\"comment__new marker marker--success hidden\" data-comment-timestamp=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 103, $this->source), "html", null, true);
            echo "\"></mark>
      </h3>
      ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 105, $this->source), "html", null, true);
        }
        // line 108
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_attributes"] ?? null), 108, $this->source), "html", null, true);
        echo ">
      ";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 109, $this->source), "html", null, true);
        echo "
      <div";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_attributes"] ?? null), 110, $this->source), "html", null, true);
        echo ">
        <span class=\"comment__author\">";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 111, $this->source), "html", null, true);
        echo "</span>
        <span class=\"comment__pubdate\">";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 112, $this->source), "html", null, true);
        echo "</span>
      </div>
    </div>

    <div";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "comment__content"], "method", false, false, true, 116), 116, $this->source), "html", null, true);
        echo ">
      ";
        // line 122
        if (($context["parent"] ?? null)) {
            // line 123
            echo "<p class=\"comment__parent visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 123, $this->source), "html", null, true);
            echo "</p>";
        }
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 126, $this->source), "html", null, true);
        // line 127
        echo "</div>

  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/ano/templates/content/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 127,  122 => 126,  117 => 123,  115 => 122,  111 => 116,  104 => 112,  100 => 111,  96 => 110,  92 => 109,  87 => 108,  84 => 105,  78 => 103,  75 => 96,  71 => 95,  68 => 94,  66 => 93,  64 => 92,  59 => 91,  57 => 87,  56 => 86,  54 => 84,  52 => 83,  47 => 80,  45 => 76,  44 => 75,  43 => 74,  42 => 73,  41 => 72,  40 => 71,  39 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ano/templates/content/comment.html.twig", "/home/artnotoil/sites/default/themes/ano/templates/content/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 68, "if" => 83, "trans" => 95);
        static $filters = array("clean_class" => 71, "escape" => 80, "without" => 80);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'without'],
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
