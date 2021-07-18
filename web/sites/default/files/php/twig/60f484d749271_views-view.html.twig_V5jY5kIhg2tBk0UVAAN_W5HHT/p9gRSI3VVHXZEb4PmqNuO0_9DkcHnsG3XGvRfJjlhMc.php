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

/* themes/custom/gallery_test/templates/views/views-view.html.twig */
class __TwigTemplate_759f60d581999ec5090427b12dd4623af656ab3498785694bd72492726cf2f4a extends \Twig\Template
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
        // line 1
        echo "
";
        // line 3
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 5
($context["id"] ?? null), 5, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 6
($context["id"] ?? null), 6, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 7
($context["display_id"] ?? null), 7, $this->source)), 4 => ((        // line 8
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 8, $this->source))) : (""))];
        // line 11
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo ">
  ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 12, $this->source), "html", null, true);
        echo "
  ";
        // line 13
        if (($context["title"] ?? null)) {
            // line 14
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 14, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 16
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 16, $this->source), "html", null, true);
        echo "
  ";
        // line 17
        if (($context["header"] ?? null)) {
            // line 18
            echo "    <div class=\"view-header\">
      ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 19, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 22
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 23
            echo "    <div class=\"view-filters\">
      ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 24, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 27
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 28
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 29, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 32
        echo "
  ";
        // line 33
        if (($context["rows"] ?? null)) {
            // line 34
            echo "    <div class=\"view-content\">
      ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 35, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 37
($context["empty"] ?? null)) {
            // line 38
            echo "    <div class=\"view-empty\">
      ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 39, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 42
        echo "
  ";
        // line 43
        if (($context["pager"] ?? null)) {
            // line 44
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 44, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 46
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 47
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 48, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 51
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 52
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 52, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 54
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 55
            echo "    <div class=\"view-footer\">
      ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 56, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 59
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 60
            echo "    <div class=\"feed-icons\">
      ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["flats_icons"] ?? null), 61, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 64
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gallery_test/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 64,  179 => 61,  176 => 60,  173 => 59,  167 => 56,  164 => 55,  161 => 54,  155 => 52,  152 => 51,  146 => 48,  143 => 47,  140 => 46,  134 => 44,  132 => 43,  129 => 42,  123 => 39,  120 => 38,  118 => 37,  113 => 35,  110 => 34,  108 => 33,  105 => 32,  99 => 29,  96 => 28,  93 => 27,  87 => 24,  84 => 23,  81 => 22,  75 => 19,  72 => 18,  70 => 17,  65 => 16,  59 => 14,  57 => 13,  53 => 12,  48 => 11,  46 => 8,  45 => 7,  44 => 6,  43 => 5,  42 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gallery_test/templates/views/views-view.html.twig", "/var/www/nastya/web/themes/custom/gallery_test/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 13);
        static $filters = array("clean_class" => 5, "escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
