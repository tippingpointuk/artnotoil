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

/* themes/ano/templates/navigation/pager.html.twig */
class __TwigTemplate_0ec9fc9dd5d739a435bb964a8986b110dd9fab1087a9d648f45919c79661b644 extends \Twig\Template
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
        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            echo "<nav class=\"pager pager--full\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h3 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h3>
    <div class=\"pager__items\">
      ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 37) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 37))) {
                // line 38
                echo "<ul class=\"pager__items__first-previous js-pager__items\">";
            }
            // line 41
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41)) {
                // line 42
                echo "<li class=\"pager__item pager__item--first pager__item--text\">
            <a href=\"";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 43), "href", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 43), "attributes", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
              <span class=\"pager__first\" aria-hidden=\"true\">";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 45), "text", [], "any", true, true, true, 45)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 45), "text", [], "any", false, false, true, 45), 45, $this->source), t("« first"))) : (t("« first"))), "html", null, true);
                echo "</span>
            </a>
          </li>";
            }
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50)) {
                // line 51
                echo "<li class=\"pager__item pager__item--previous pager__item--text\">
            <a href=\"";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 52), "href", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 52), "attributes", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
              <span class=\"pager__previous\" aria-hidden=\"true\">";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 54), "text", [], "any", true, true, true, 54)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 54), "text", [], "any", false, false, true, 54), 54, $this->source), t("‹ previous"))) : (t("‹ previous"))), "html", null, true);
                echo "</span>
            </a>
          </li>";
            }
            // line 58
            if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 58) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 58))) {
                // line 59
                echo "</ul>";
            }
            // line 62
            echo "      <ul class=\"pager__items__num-pages js-pager__items\">";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 63));
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
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 65
                $context["classes"] = [0 => "pager__item", 1 => "pager__item--num", 2 => ((twig_get_attribute($this->env, $this->source,                 // line 68
$context["loop"], "first", [], "any", false, false, true, 68)) ? ("pager__item--num-first") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                 // line 69
$context["loop"], "last", [], "any", false, false, true, 69)) ? ("pager__item--num-last") : ("")), 4 => (((                // line 70
($context["current"] ?? null) == $context["key"])) ? ("is-active") : (""))];
                // line 73
                echo "<li class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 73, $this->source), " ")), "html", null, true);
                echo "\">";
                // line 74
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 75
                    $context["title"] = t("Current page");
                } else {
                    // line 77
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                }
                // line 79
                echo "<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "\" class=\"pager__link";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__link--is-active") : ("")));
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 79, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "</span>
              ";
                // line 82
                if ((twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 82) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 82))) {
                    // line 83
                    echo "<span class=\"pager__ellipsis pager__ellipsis--before\" role=\"presentation\">&hellip;</span>";
                }
                // line 85
                echo "<span class=\"pager__key\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 85, $this->source), "html", null, true);
                echo "</span>
              ";
                // line 87
                if ((twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 87) && twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 87))) {
                    // line 88
                    echo "<span class=\"pager__ellipsis pager__ellipsis--after\" role=\"presentation\">&hellip;</span>";
                }
                // line 90
                echo "</a>
          </li>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "      </ul>
      ";
            // line 95
            if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 95) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 95))) {
                // line 96
                echo "<ul class=\"pager__items__next-last js-pager__items\">";
            }
            // line 99
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 99)) {
                // line 100
                echo "<li class=\"pager__item pager__item--next pager__item--text\">
            <a href=\"";
                // line 101
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 101), "href", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 101), "attributes", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
              <span class=\"pager__next\" aria-hidden=\"true\">";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 103), "text", [], "any", true, true, true, 103)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 103), "text", [], "any", false, false, true, 103), 103, $this->source), t("next ›"))) : (t("next ›"))), "html", null, true);
                echo "</span>
            </a>
          </li>";
            }
            // line 108
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 108)) {
                // line 109
                echo "<li class=\"pager__item pager__item--last pager__item--text\">
            <a href=\"";
                // line 110
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 110), "href", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 110), "attributes", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 111
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
              <span class=\"pager__last\" aria-hidden=\"true\">";
                // line 112
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 112), "text", [], "any", true, true, true, 112)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 112), "text", [], "any", false, false, true, 112), 112, $this->source), t("last »"))) : (t("last »"))), "html", null, true);
                echo "</span>
            </a>
          </li>";
            }
            // line 116
            if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 116) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 116))) {
                // line 117
                echo "</ul>";
            }
            // line 119
            echo "</div>
  </nav>";
        }
    }

    public function getTemplateName()
    {
        return "themes/ano/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 119,  243 => 117,  241 => 116,  235 => 112,  231 => 111,  223 => 110,  220 => 109,  218 => 108,  212 => 103,  208 => 102,  200 => 101,  197 => 100,  195 => 99,  192 => 96,  190 => 95,  187 => 93,  171 => 90,  168 => 88,  166 => 87,  161 => 85,  158 => 83,  156 => 82,  152 => 80,  141 => 79,  138 => 77,  135 => 75,  133 => 74,  129 => 73,  127 => 70,  126 => 69,  125 => 68,  124 => 65,  107 => 63,  105 => 62,  102 => 59,  100 => 58,  94 => 54,  90 => 53,  82 => 52,  79 => 51,  77 => 50,  71 => 45,  67 => 44,  59 => 43,  56 => 42,  54 => 41,  51 => 38,  49 => 37,  44 => 34,  41 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ano/templates/navigation/pager.html.twig", "/home/artnotoil/sites/default/themes/ano/templates/navigation/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 32, "for" => 63, "set" => 65);
        static $filters = array("t" => 34, "escape" => 43, "default" => 45, "trim" => 73, "join" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'escape', 'default', 'trim', 'join'],
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
