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

/* themes/ano/templates/field/field--comment.html.twig */
class __TwigTemplate_069f652066fde23fcc914d7d8aa56ac79e768231cc6efe439a22ad4a7ff96f51 extends \Twig\Template
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
        // line 28
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null), 28, $this->source));
        // line 30
        $context["classes"] = [0 => "field", 1 => ((("field-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["entity_type"] ?? null), 32, $this->source))) . "--") . $this->sandbox->ensureToStringAllowed(($context["field_name_class"] ?? null), 32, $this->source)), 2 => ((        // line 33
($context["field_formatter"] ?? null)) ? (("field-formatter-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_formatter"] ?? null), 33, $this->source)))) : ("")), 3 => ("field-name-" . $this->sandbox->ensureToStringAllowed(        // line 34
($context["field_name_class"] ?? null), 34, $this->source)), 4 => ("field-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 35
($context["field_type"] ?? null), 35, $this->source))), 5 => ("field-label-" . $this->sandbox->ensureToStringAllowed(        // line 36
($context["label_display"] ?? null), 36, $this->source)), 6 => (((        // line 37
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : ("")), 7 => ((        // line 38
($context["comment_display_mode"] ?? null)) ? ("display-mode-threaded") : ("")), 8 => ((        // line 39
($context["comment_type"] ?? null)) ? (("comment-bundle-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["comment_type"] ?? null), 39, $this->source)))) : ("")), 9 => "comment-wrapper"];
        // line 44
        $context["title_classes"] = [0 => "comment-field__title", 1 => "h3", 2 => (((        // line 47
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 50
        echo "<section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        echo ">
  <a name=\"comments\"></a>";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["comments"] ?? null), "pager", [], "any", false, false, true, 52) &&  !($context["label_hidden"] ?? null))) {
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 53, $this->source), "html", null, true);
            echo "
    <h2";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 54, $this->source), "html", null, true);
            echo "</h2>
    ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 55, $this->source), "html", null, true);
        }
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comments"] ?? null), 58, $this->source), "html", null, true);
        // line 60
        if (($context["comment_form"] ?? null)) {
            // line 61
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "comment-form-wrapper"], "method", false, false, true, 61), 61, $this->source), "html", null, true);
            echo ">
      <h2 class=\"comment-form__title h3\">";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add new comment"));
            echo "</h2>";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_form"] ?? null), 63, $this->source), "html", null, true);
            // line 64
            echo "</div>";
        }
        // line 66
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "themes/ano/templates/field/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 66,  88 => 64,  86 => 63,  83 => 62,  78 => 61,  76 => 60,  74 => 58,  71 => 55,  65 => 54,  61 => 53,  59 => 52,  54 => 50,  52 => 47,  51 => 44,  49 => 39,  48 => 38,  47 => 37,  46 => 36,  45 => 35,  44 => 34,  43 => 33,  42 => 32,  41 => 30,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ano/templates/field/field--comment.html.twig", "/home/artnotoil/sites/default/themes/ano/templates/field/field--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28, "if" => 52);
        static $filters = array("clean_class" => 28, "escape" => 50, "t" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't'],
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
