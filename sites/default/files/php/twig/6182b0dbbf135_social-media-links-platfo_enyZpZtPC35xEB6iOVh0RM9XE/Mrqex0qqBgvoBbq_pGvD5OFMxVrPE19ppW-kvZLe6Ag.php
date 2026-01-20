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

/* themes/ano/templates/dataset/social-media-links-platforms.html.twig */
class __TwigTemplate_9bdb69d16fec172572d97ed8a3ee94f776aa27799ba1c6cabdce43476e13ac9c extends \Twig\Template
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
        // line 7
        $context["classes"] = [0 => "platforms", 1 => (((twig_get_attribute($this->env, $this->source,         // line 9
($context["appearance"] ?? null), "orientation", [], "any", false, false, true, 9) == "h")) ? ("inline is-horizontal") : ("is-vertical"))];
        // line 12
        echo "<ul";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 12), 12, $this->source), "html", null, true);
        echo ">
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["platforms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 14
            echo "    <li class=\"platform\">
      <a href=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["platform"], "url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["platform"], "attributes", [], "any", false, false, true, 15), "addClass", [0 => "platform__link"], "method", false, false, true, 15), 15, $this->source), "html", null, true);
            echo ">
        ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["platform"], "element", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
        ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, ($context["appearance"] ?? null), "show_name", [], "any", false, false, true, 17)) {
                // line 18
                echo "          <span class=\"platform__name\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["platform"], "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "</span>
        ";
            }
            // line 20
            echo "      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "themes/ano/templates/dataset/social-media-links-platforms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  72 => 20,  66 => 18,  64 => 17,  60 => 16,  54 => 15,  51 => 14,  47 => 13,  42 => 12,  40 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ano/templates/dataset/social-media-links-platforms.html.twig", "/home/artnotoil/sites/default/themes/ano/templates/dataset/social-media-links-platforms.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "for" => 13, "if" => 17);
        static $filters = array("escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape'],
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
