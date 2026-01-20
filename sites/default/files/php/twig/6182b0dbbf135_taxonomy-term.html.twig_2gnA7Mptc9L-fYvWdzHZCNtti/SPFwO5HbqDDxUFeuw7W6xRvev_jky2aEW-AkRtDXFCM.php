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

/* themes/ano/templates/content/taxonomy-term.html.twig */
class __TwigTemplate_0ca4a671d1a5369c531d252f85cc3e245fe1906e22a0b889264be9b604a3836c extends \Twig\Template
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
        // line 27
        $context["classes"] = [0 => "taxonomy-term", 1 => ((        // line 29
($context["view_mode"] ?? null)) ? (("taxonomy-term--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 29, $this->source)))) : ("")), 2 => ("vocabulary-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 30
($context["term"] ?? null), "bundle", [], "any", false, false, true, 30), 30, $this->source)))];
        // line 33
        if ((($context["view_mode"] ?? null) == "default")) {
            // line 34
            echo "  ";
            $context["html_element"] = "article";
        } else {
            // line 36
            echo "  ";
            $context["html_element"] = "section";
        }
        // line 38
        echo "<";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_element"] ?? null), 38, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => ("taxonomy-term-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "id", [], "any", false, false, true, 38), 38, $this->source))], "method", false, false, true, 38), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        echo ">

  ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 40, $this->source), "html", null, true);
        echo "
  ";
        // line 41
        if ( !($context["page"] ?? null)) {
            // line 42
            echo "    <h2 class=\"taxonomy-term__title\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 42, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 42, $this->source), "html", null, true);
            echo "</a></h2>
  ";
        }
        // line 44
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 44, $this->source), "html", null, true);
        echo "

  ";
        // line 46
        ob_start(function () { return ''; });
        // line 47
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 47, $this->source), "html", null, true);
        echo "
  ";
        $context["content_rendered"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "  ";
        if ( !twig_test_empty(twig_trim_filter(($context["content_rendered"] ?? null)))) {
            // line 50
            echo "    <div class=\"taxonomy-term__content\">
      ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_rendered"] ?? null), 51, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 54
        echo "
</";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_element"] ?? null), 55, $this->source), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "themes/ano/templates/content/taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 55,  100 => 54,  94 => 51,  91 => 50,  88 => 49,  82 => 47,  80 => 46,  74 => 44,  66 => 42,  64 => 41,  60 => 40,  53 => 38,  49 => 36,  45 => 34,  43 => 33,  41 => 30,  40 => 29,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ano/templates/content/taxonomy-term.html.twig", "/home/artnotoil/sites/default/themes/ano/templates/content/taxonomy-term.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 33);
        static $filters = array("clean_class" => 29, "escape" => 38, "trim" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'trim'],
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
