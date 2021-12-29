<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/seven/templates/details.html.twig */
class __TwigTemplate_9ab67f43ac75703b83570bbc5e2d85f74869325f405f460b9766e86897761a19 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/seven/templates/details.html.twig"));

        // line 23
        echo "<details";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "seven-details"], "method")), "html", null, true);
        echo ">";
        // line 24
        if (($context["title"] ?? null)) {
            // line 26
            $context["summary_classes"] = [0 => "seven-details__summary", 1 => ((            // line 28
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((            // line 29
($context["required"] ?? null)) ? ("form-required") : (""))];
            // line 32
            echo "    <summary";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["summary_attributes"] ?? null), "addClass", [0 => ($context["summary_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      <span>";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</span>
    </summary>";
        }
        // line 36
        echo "<div class=\"seven-details__wrapper details-wrapper\">
    ";
        // line 37
        if (($context["errors"] ?? null)) {
            // line 38
            echo "      <div class=\"form-item form-item--error-message\">
        <strong>";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 42
        if (($context["description"] ?? null)) {
            // line 43
            echo "<div class=\"seven-details__description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null)), "html", null, true);
            echo "</div>";
        }
        // line 45
        if (($context["children"] ?? null)) {
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        }
        // line 48
        if (($context["value"] ?? null)) {
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null)), "html", null, true);
        }
        // line 51
        echo "</div>
</details>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 51,  83 => 49,  81 => 48,  78 => 46,  76 => 45,  71 => 43,  69 => 42,  63 => 39,  60 => 38,  58 => 37,  55 => 36,  50 => 33,  45 => 32,  43 => 29,  42 => 28,  41 => 26,  39 => 24,  35 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a details element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the details element.
 * - errors: (optional) Any errors for this details element, may not be set.
 * - title: (optional) The title of the element, may not be set.
 * - summary_attributes: A list of HTML attributes for the summary element.
 * - description: (optional) The description of the element, may not be set.
 * - children: (optional) The children of the element, may not be set.
 * - value: (optional) The value of the element, may not be set.
 *
 * @see template_preprocess_details()
 */
#}
{#
  Prefix 'details' class to avoid collision with Modernizr.

  @todo Remove prefix after https://www.drupal.org/node/2981732 has been solved.
#}
<details{{ attributes.addClass('seven-details') }}>
  {%- if title -%}
    {%
      set summary_classes = [
        'seven-details__summary',
        required ? 'js-form-required',
        required ? 'form-required',
      ]
    %}
    <summary{{ summary_attributes.addClass(summary_classes) }}>
      <span>{{ title }}</span>
    </summary>
  {%- endif -%}
  <div class=\"seven-details__wrapper details-wrapper\">
    {% if errors %}
      <div class=\"form-item form-item--error-message\">
        <strong>{{ errors }}</strong>
      </div>
    {% endif %}
    {%- if description -%}
      <div class=\"seven-details__description\">{{ description }}</div>
    {%- endif -%}
    {%- if children -%}
      {{ children }}
    {%- endif -%}
    {%- if value -%}
      {{ value }}
    {%- endif -%}
  </div>
</details>
", "core/themes/seven/templates/details.html.twig", "C:\\xampp\\htdocs\\new\\Konika360\\core\\themes\\seven\\templates\\details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 24, "set" => 26];
        static $filters = ["escape" => 23];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
