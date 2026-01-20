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

/* themes/ano/templates/navigation/menu.html.twig */
class __TwigTemplate_261fd323c4b3768a9df6bf780ff194694deb7a60d890007a178ccd4f1352d83a extends \Twig\Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 26, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 28
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 29
            $macros["menus"] = $this;
            // line 31
            if (($context["items"] ?? null)) {
                // line 32
                echo "
<ul";
                // line 33
                if ((($context["menu_level"] ?? null) == 0)) {
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => [0 => "menu", 1 => "odd", 2 => "menu-level-1", 3 => ((($context["menu_name"] ?? null)) ? (("menu-name--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 33, $this->source)))) : (""))]], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                } else {
                    echo " class=\"menu is-child ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_cycle([0 => "odd", 1 => "even"], $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 33, $this->source)), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("menu-level-" . (($context["menu_level"] ?? null) + 1)), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 37
                    $context["is_parent"] = false;
                    // line 38
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 38) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 38))) {
                        // line 39
                        echo "    ";
                        $context["is_parent"] = true;
                        // line 40
                        echo "    ";
                    }
                    // line 41
                    echo "
    ";
                    // line 43
                    echo "    ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 43), "isExternal", [], "method", false, false, true, 43) == false) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 43), "isRouted", [], "method", false, false, true, 43) == true))) {
                        // line 44
                        echo "    ";
                        $context["nolink"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), "getRouteName", [], "method", false, false, true, 44) == "<nolink>")) ? (true) : (false));
                        // line 45
                        echo "    ";
                    }
                    // line 46
                    echo "
    ";
                    // line 47
                    $context["item_classes"] = [0 => "menu__item", 1 => ((                    // line 49
($context["is_parent"] ?? null)) ? ("is-parent") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 50
$context["item"], "is_expanded", [], "any", false, false, true, 50)) ? ("menu__item--expanded") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 51
$context["item"], "is_collapsed", [], "any", false, false, true, 51)) ? ("menu__item--collapsed") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 52
$context["item"], "in_active_trail", [], "any", false, false, true, 52)) ? ("menu__item--active-trail") : ("")), 5 => ((                    // line 53
($context["nolink"] ?? null)) ? ("menu__item--no-link") : ("")), 6 => ("menu__item-title--" . \Drupal\Component\Utility\Html::getClass($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 54
$context["item"], "title", [], "any", false, false, true, 54), 54, $this->source))))];
                    // line 58
                    echo "
    ";
                    // line 60
                    echo "    <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 60), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "role"), "html", null, true);
                    echo " id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((("menu-name--" . $this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 60, $this->source)) . "__") . \Drupal\Component\Utility\Html::getId($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 60), 60, $this->source)))), "html", null, true);
                    echo "\">

        <span class=\"menu__link--wrapper";
                    // line 62
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_parent"] ?? null)) ? (" is-parent__wrapper") : ("")));
                    echo "\">
            ";
                    // line 63
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 65
$context["item"], "title", [], "any", false, false, true, 65), 65, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 66
$context["item"], "url", [], "any", false, false, true, 66), 66, $this->source), $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 67
$context["item"], "attributes", [], "any", false, false, true, 67), "removeClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 67), "addClass", [0 => "menu__link"], "method", false, false, true, 67), 67, $this->source), "id", "role")), "html", null, true);
                    // line 69
                    echo "
        </span>

        ";
                    // line 72
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 72)) {
                        // line 73
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 73), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)], 73, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 75
                    echo "
        </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "</ul>
";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/ano/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 80,  153 => 75,  147 => 73,  145 => 72,  140 => 69,  138 => 67,  137 => 66,  136 => 65,  135 => 63,  131 => 62,  123 => 60,  120 => 58,  118 => 54,  117 => 53,  116 => 52,  115 => 51,  114 => 50,  113 => 49,  112 => 47,  109 => 46,  106 => 45,  103 => 44,  100 => 43,  97 => 41,  94 => 40,  91 => 39,  88 => 38,  86 => 37,  82 => 35,  71 => 33,  68 => 32,  66 => 31,  64 => 29,  48 => 28,  41 => 26,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ano/templates/navigation/menu.html.twig", "/home/artnotoil/sites/default/themes/ano/templates/navigation/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 28, "if" => 31, "for" => 35, "set" => 37);
        static $filters = array("escape" => 33, "clean_class" => 33, "render" => 54, "without" => 60, "clean_id" => 60);
        static $functions = array("cycle" => 33, "link" => 64);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'clean_class', 'render', 'without', 'clean_id'],
                ['cycle', 'link']
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
