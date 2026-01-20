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

/* modules/contrib/flippy/templates/flippy.html.twig */
class __TwigTemplate_7e38f3a602dc4812549ee5c15e29d12ac96b26f3809102dfb09ab449fe6e629b extends \Twig\Template
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
        // line 19
        echo "<ul class=\"flippy\">
  ";
        // line 20
        if (($context["first"] ?? null)) {
            // line 21
            echo "    <li class=\"flippy-first\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["first"] ?? null), 21, $this->source), "html", null, true);
            echo "</li>
  ";
        }
        // line 23
        echo "  ";
        if (($context["prev"] ?? null)) {
            // line 24
            echo "    <li class=\"flippy-previous\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev"] ?? null), 24, $this->source), "html", null, true);
            echo "</li>
  ";
        }
        // line 26
        echo "  ";
        if (($context["random"] ?? null)) {
            // line 27
            echo "    <li class=\"flippy-random\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["random"] ?? null), 27, $this->source), "html", null, true);
            echo "</li>
  ";
        }
        // line 29
        echo "  ";
        if (($context["next"] ?? null)) {
            // line 30
            echo "    <li class=\"flippy-next\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next"] ?? null), 30, $this->source), "html", null, true);
            echo "</li>
  ";
        }
        // line 32
        echo "  ";
        if (($context["last"] ?? null)) {
            // line 33
            echo "    <li class=\"flippy-last\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["last"] ?? null), 33, $this->source), "html", null, true);
            echo "</li>
  ";
        }
        // line 35
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/flippy/templates/flippy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 35,  80 => 33,  77 => 32,  71 => 30,  68 => 29,  62 => 27,  59 => 26,  53 => 24,  50 => 23,  44 => 21,  42 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/flippy/templates/flippy.html.twig", "/home/artnotoil/sites/default/modules/contrib/flippy/templates/flippy.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
