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

/* themes/ano/templates/user/user.html.twig */
class __TwigTemplate_7ddbd4b657aad8d1345907019f71b0dc5b66019d6d9fb45a4acc76a82b534a6a extends \Twig\Template
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
        // line 24
        $context["classes"] = [0 => "user", 1 => "user--profile", 2 => ("user--id-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 27
($context["user"] ?? null), "id", [], "any", false, false, true, 27), 27, $this->source)), 3 => ((        // line 28
($context["roles"] ?? null)) ? (twig_join_filter($this->sandbox->ensureToStringAllowed(($context["roles"] ?? null), 28, $this->source), " ")) : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 29
($context["user"] ?? null), "isBlocked", [], "method", false, false, true, 29)) ? ("user--is-blocked") : ("user--is-active")), 5 => ((        // line 30
($context["view_mode"] ?? null)) ? (("user--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 30, $this->source)))) : (""))];
        // line 33
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 33), "setAttribute", [0 => "role", 1 => "article"], "method", false, false, true, 33), 33, $this->source), "id"), "html", null, true);
        echo ">";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isBlocked", [], "method", false, false, true, 35)) {
            // line 36
            echo "<span class=\"user__status user--is-blocked marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\">
      <span class=\"visually-hidden\">";
            // line 37
            echo t("This user is", array());
            echo "</span>";
            echo t("Blocked", array());
            // line 38
            echo "</span>";
        }
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 41, $this->source), "html", null, true);
        // line 42
        if (($context["label"] ?? null)) {
            // line 43
            if ((($context["view_mode"] ?? null) == "full")) {
                // line 44
                echo "<h1";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "user__title"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 44, $this->source), "html", null, true);
                echo "</h1>";
            } else {
                // line 46
                echo "<h2";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "user__title"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                echo ">";
                // line 47
                if (($context["access_profiles"] ?? null)) {
                    // line 48
                    echo "<a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 48, $this->source), "html", null, true);
                    echo "user/";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                    echo "\" class=\"user__title-link\" rel=\"bookmark\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 48, $this->source), "html", null, true);
                    echo "</a>";
                } else {
                    // line 50
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 50, $this->source), "html", null, true);
                }
                // line 52
                echo "</h2>";
            }
        }
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 55, $this->source), "html", null, true);
        // line 57
        if (($context["content"] ?? null)) {
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 58, $this->source), "html", null, true);
        }
        // line 61
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/ano/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 61,  100 => 58,  98 => 57,  96 => 55,  92 => 52,  89 => 50,  80 => 48,  78 => 47,  74 => 46,  67 => 44,  65 => 43,  63 => 42,  61 => 41,  58 => 38,  54 => 37,  51 => 36,  49 => 35,  45 => 33,  43 => 30,  42 => 29,  41 => 28,  40 => 27,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ano/templates/user/user.html.twig", "/home/artnotoil/sites/default/themes/ano/templates/user/user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "if" => 35, "trans" => 37);
        static $filters = array("join" => 28, "clean_class" => 30, "escape" => 33, "without" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['join', 'clean_class', 'escape', 'without'],
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
