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

/* modules/contrib/webform/templates/webform-progress-tracker.html.twig */
class __TwigTemplate_44aa2da6fa5ca2b8195651078344722663dd97e49c780ca33dc4d063e647c691 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-progress-tracker.html.twig"));

        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("webform/webform.progress.tracker"), "html", null, true);
        echo "

<ul class=\"webform-progress-tracker progress-tracker progress-tracker--center\" data-webform-progress-steps>
  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["progress"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["page"]) {
            // line 24
            echo "    ";
            $context["is_completed"] = ($context["index"] < ($context["current_index"] ?? null));
            // line 25
            echo "    ";
            $context["is_active"] = ($context["index"] == ($context["current_index"] ?? null));
            // line 26
            echo "    ";
            // line 27
            $context["classes"] = [0 => "progress-step", 1 => ((            // line 29
($context["is_completed"] ?? null)) ? ("is-complete") : ("")), 2 => ((            // line 30
($context["is_active"] ?? null)) ? ("is-active") : (""))];
            // line 33
            echo "    ";
            // line 34
            $context["attributes"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(), "setAttribute", [0 => ("data-webform-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 35
$context["page"], "type", []))), 1 => $this->getAttribute($context["page"], "name", [])], "method"), "setAttribute", [0 => "title", 1 => $this->getAttribute(            // line 36
$context["page"], "title", [])], "method"), "setAttribute", [0 => "class", 1 => ""], "method"), "addClass", [0 =>             // line 38
($context["classes"] ?? null)], "method");
            // line 40
            echo "    <li";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
      <span class=\"progress-marker\" data-webform-progress-step data-webform-progress-link>";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["index"] + 1), "html", null, true);
            echo "</span>
      ";
            // line 42
            if ((twig_length_filter($this->env, ($context["progress"] ?? null)) < ($context["max_pages"] ?? null))) {
                // line 43
                echo "        <span class=\"progress-text\">
          <span class=\"progress-title\" data-webform-progress-link>
            <span class=\"visually-hidden\" data-webform-progress-state>";
                // line 45
                if ((($context["is_active"] ?? null) || ($context["is_completed"] ?? null))) {
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["is_active"] ?? null)) ? (t("Current")) : (t("Completed"))));
                }
                echo "</span>
            ";
                // line 46
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["page"], "title", [])), "html", null, true);
                echo "
          </span>
        </span>
      ";
            }
            // line 50
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</ul>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-progress-tracker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 52,  92 => 50,  85 => 46,  79 => 45,  75 => 43,  73 => 42,  69 => 41,  64 => 40,  62 => 38,  61 => 36,  60 => 35,  59 => 34,  57 => 33,  55 => 30,  54 => 29,  53 => 27,  51 => 26,  48 => 25,  45 => 24,  41 => 23,  35 => 20,);
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
 * Default theme implementation for webform wizard progress tracker.
 *
 * Available variables:
 * - webform: A webform.
 * - pages: Associative array of wizard pages.
 * - progress: Array of wizard progress containing page titles.
 * - current_page: Current wizard page key.
 * - current_index: The current wizard page index.
 * - max_pages: Maximum number of pages that progress text should be displayed on.
 *
 * @see template_preprocess_webform_progress_tracker()
 * @see https://www.w3.org/WAI/tutorials/forms/multi-page/
 *
 * @ingroup themeable
 */
#}
{{ attach_library('webform/webform.progress.tracker') }}

<ul class=\"webform-progress-tracker progress-tracker progress-tracker--center\" data-webform-progress-steps>
  {% for index, page in progress %}
    {% set is_completed = index < current_index %}
    {% set is_active = index == current_index %}
    {%
      set classes = [
        'progress-step',
        is_completed ? 'is-complete',
        is_active ? 'is-active',
      ]
    %}
    {%
      set attributes = create_attribute()
        .setAttribute('data-webform-' ~ page.type, page.name)
        .setAttribute('title', page.title)
        .setAttribute('class', '')
        .addClass(classes)
    %}
    <li{{ attributes }}>
      <span class=\"progress-marker\" data-webform-progress-step data-webform-progress-link>{{ index + 1 }}</span>
      {% if progress|length < max_pages %}
        <span class=\"progress-text\">
          <span class=\"progress-title\" data-webform-progress-link>
            <span class=\"visually-hidden\" data-webform-progress-state>{% if is_active or is_completed %}{{ is_active ? 'Current'|t : 'Completed'|t }}{% endif %}</span>
            {{ page.title }}
          </span>
        </span>
      {% endif %}
    </li>
  {% endfor %}
</ul>
", "modules/contrib/webform/templates/webform-progress-tracker.html.twig", "C:\\xampp\\htdocs\\new\\Konika360\\modules\\contrib\\webform\\templates\\webform-progress-tracker.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 23, "set" => 24, "if" => 42];
        static $filters = ["escape" => 20, "length" => 42, "t" => 45];
        static $functions = ["attach_library" => 20, "create_attribute" => 34];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'length', 't'],
                ['attach_library', 'create_attribute']
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
