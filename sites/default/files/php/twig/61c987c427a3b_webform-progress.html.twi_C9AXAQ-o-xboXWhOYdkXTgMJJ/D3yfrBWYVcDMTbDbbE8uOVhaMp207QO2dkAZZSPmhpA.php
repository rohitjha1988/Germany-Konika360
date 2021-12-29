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

/* modules/contrib/webform/templates/webform-progress.html.twig */
class __TwigTemplate_62234cec0e5f1365faca16fd66c953d3d97f2db6eb83762e37d4cfeed9285bbb extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-progress.html.twig"));

        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("webform/webform.progress"), "html", null, true);
        echo "

<div class=\"webform-progress\">

  ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bar"] ?? null)), "html", null, true);
        echo "

  ";
        // line 27
        if ((($context["summary"] ?? null) || ($context["percentage"] ?? null))) {
            // line 28
            echo "    <div class=\"webform-progress__status\">
      ";
            // line 29
            if (($context["summary"] ?? null)) {
                // line 30
                echo "        <span class=\"webform-progress__summary\" data-webform-progress-summary>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null)), "html", null, true);
                echo "</span>
        ";
                // line 31
                if (($context["percentage"] ?? null)) {
                    // line 32
                    echo "          <span class=\"webform-progress__percentage\">(<span data-webform-progress-percentage>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["percentage"] ?? null)), "html", null, true);
                    echo "</span>)</span>
        ";
                }
                // line 34
                echo "      ";
            } else {
                // line 35
                echo "        <span class=\"webform-progress__percentage\" data-webform-progress-percentage>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["percentage"] ?? null)), "html", null, true);
                echo "</span>
      ";
            }
            // line 37
            echo "    </div>
  ";
        }
        // line 39
        echo "
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-progress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 39,  76 => 37,  70 => 35,  67 => 34,  61 => 32,  59 => 31,  54 => 30,  52 => 29,  49 => 28,  47 => 27,  42 => 25,  35 => 21,);
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
 * Default theme implementation for webform wizard progress.
 *
 * Available variables:
 * - webform: A webform.
 * - pages: Array of wizard pages.
 * - current_page: Current wizard page.
 * - index: Index of the current page.
 * - total: Total number of pages.
 * - summary: Summary of progress.
 * - percentage: Percentage completed.
 * - bar: A progress bar.
 *
 * @see template_preprocess_webform_progress()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('webform/webform.progress') }}

<div class=\"webform-progress\">

  {{ bar }}

  {% if summary or percentage %}
    <div class=\"webform-progress__status\">
      {% if summary %}
        <span class=\"webform-progress__summary\" data-webform-progress-summary>{{ summary }}</span>
        {% if percentage %}
          <span class=\"webform-progress__percentage\">(<span data-webform-progress-percentage>{{ percentage }}</span>)</span>
        {% endif %}
      {% else %}
        <span class=\"webform-progress__percentage\" data-webform-progress-percentage>{{ percentage }}</span>
      {% endif %}
    </div>
  {% endif %}

</div>
", "modules/contrib/webform/templates/webform-progress.html.twig", "C:\\xampp\\htdocs\\new\\Konika360\\modules\\contrib\\webform\\templates\\webform-progress.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 27];
        static $filters = ["escape" => 21];
        static $functions = ["attach_library" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
