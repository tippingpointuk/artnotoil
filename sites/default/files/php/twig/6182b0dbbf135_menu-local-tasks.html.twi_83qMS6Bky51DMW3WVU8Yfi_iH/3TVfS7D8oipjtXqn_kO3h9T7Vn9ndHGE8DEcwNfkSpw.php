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

/* themes/ano/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_d4cf16d2a8588592b095a42d2eaf738de555f6b07f9a0ae8346e889e1c80cc4e extends \Twig\Template
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
        // line 14
        if ((($context["primary"] ?? null) || ($context["secondary"] ?? null))) {
            // line 15
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("at_core/at.responsivelists"), "html", null, true);
            echo "
";
        }
        // line 17
        if (($context["primary"] ?? null)) {
            // line 18
            echo "  <nav class=\"is-horizontal is-responsive\" role=\"navigation\" aria-labelledby=\"primary-tabs-title\" data-at-responsive-list>
    <h2 id=\"primary-tabs-title\" class=\"visually-hidden\">";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary tabs"));
            echo "</h2>
    <ul class=\"tabs tabs--primary is-responsive__list\">";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 20, $this->source), "html", null, true);
            echo "</ul>
  </nav>
";
        }
        // line 23
        if (($context["secondary"] ?? null)) {
            // line 24
            echo "  <nav class=\"is-horizontal is-responsive\" role=\"navigation\" aria-labelledby=\"secondary-tabs-title\" data-at-responsive-list>
    <h2 id=\"secondary-tabs-title\" class=\"visually-hidden\">";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary tabs"));
            echo "</h2>
    <ul class=\"tabs tabs--secondary is-responsive__list\">";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? null), 26, $this->source), "html", null, true);
            echo "</ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/ano/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  67 => 25,  64 => 24,  62 => 23,  56 => 20,  52 => 19,  49 => 18,  47 => 17,  41 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ano/templates/navigation/menu-local-tasks.html.twig", "/home/artnotoil/sites/default/themes/ano/templates/navigation/menu-local-tasks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array("escape" => 15, "t" => 19);
        static $functions = array("attach_library" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['attach_library']
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
