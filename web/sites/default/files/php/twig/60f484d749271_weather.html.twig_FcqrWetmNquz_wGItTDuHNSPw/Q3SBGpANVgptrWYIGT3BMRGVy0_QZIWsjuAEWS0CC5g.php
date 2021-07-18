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

/* modules/weather/templates/weather.html.twig */
class __TwigTemplate_5e83ed4a3cd228f8fbe816a78abad238677918048fb75272f3ae4627fcbf47c4 extends \Twig\Template
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
        echo "<div class=\"weather\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weather"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 3
            echo "    <p style=\"clear:left\"><strong>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["place"], "link", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "</strong></p>
    ";
            // line 4
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["place"], "forecasts", [], "any", false, false, true, 4))) {
                // line 5
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Currently, there is no weather information available."));
                echo "
    ";
            }
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["place"], "forecasts", [], "any", false, false, true, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["forecast"]) {
                // line 8
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["forecast"], "time_ranges", [], "any", false, false, true, 8));
                foreach ($context['_seq'] as $context["time_range"] => $context["data"]) {
                    // line 9
                    echo "        <p style=\"clear:left\">
          ";
                    // line 10
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forecast"], "formatted_date", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo "<br />
          ";
                    // line 11
                    if (twig_get_attribute($this->env, $this->source, $context["forecast"], "sun_info", [], "any", false, false, true, 11)) {
                        // line 12
                        echo "            ";
                        if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["forecast"], "sun_info", [], "any", false, false, true, 12))) {
                            // line 13
                            echo "              ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sunrise: @time", ["@time" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forecast"], "sun_info", [], "any", false, false, true, 13), "sunrise", [], "any", false, false, true, 13)]));
                            echo "<br />
              ";
                            // line 14
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sunset: @time", ["@time" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forecast"], "sun_info", [], "any", false, false, true, 14), "sunset", [], "any", false, false, true, 14)]));
                            echo "<br />
            ";
                        } else {
                            // line 16
                            echo "              ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forecast"], "sun_info", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                            echo "<br />
            ";
                        }
                        // line 18
                        echo "          ";
                    }
                    // line 19
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["time_range"], 19, $this->source), "html", null, true);
                    echo "
        </p>
        <div style=\"float:left;margin-right:1em;margin-bottom:1em\">
          ";
                    // line 22
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "symbol", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo "
        </div>
        <p style=\"font-size:125%\">
          ";
                    // line 25
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "condition", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo "<br />
          ";
                    // line 26
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "temperature", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                    echo "
          ";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, $context["data"], "windchill", [], "any", false, false, true, 27)) {
                        // line 28
                        echo "            <br />
            ";
                        // line 29
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Feels like !temperature", ["!temperature" => twig_get_attribute($this->env, $this->source, $context["data"], "windchill", [], "any", false, false, true, 29)]));
                        echo "
          ";
                    }
                    // line 31
                    echo "        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['time_range'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forecast'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["place"], "station", [], "any", false, false, true, 34)) {
                // line 35
                echo "      <p style=\"clear:left\">
        ";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Location of this weather station:"));
                echo "<br />
        ";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["place"], "station", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "
      </p>
    ";
            }
            // line 40
            echo "    <p style=\"clear:left\">
      ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("<a href=\"@url\">Weather forecast from yr.no</a>, delivered by the Norwegian Meteorological Institute and the NRK", ["@url" => (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["place"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["yr.no"] ?? null) : null)]));
            echo "
    </p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/weather/templates/weather.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 44,  163 => 41,  160 => 40,  154 => 37,  150 => 36,  147 => 35,  144 => 34,  138 => 33,  131 => 31,  126 => 29,  123 => 28,  121 => 27,  117 => 26,  113 => 25,  107 => 22,  100 => 19,  97 => 18,  91 => 16,  86 => 14,  81 => 13,  78 => 12,  76 => 11,  72 => 10,  69 => 9,  64 => 8,  59 => 7,  53 => 5,  51 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/weather/templates/weather.html.twig", "/var/www/nastya/web/modules/weather/templates/weather.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 2, "if" => 4);
        static $filters = array("escape" => 3, "t" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 't'],
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
