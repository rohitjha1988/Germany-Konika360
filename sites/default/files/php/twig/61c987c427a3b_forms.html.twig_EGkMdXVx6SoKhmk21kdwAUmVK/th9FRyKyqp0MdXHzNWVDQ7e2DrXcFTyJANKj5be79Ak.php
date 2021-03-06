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

/* @webprofiler/Collector/forms.html.twig */
class __TwigTemplate_fe53be16e8c648b3d2f0077c292df20315780987681e1b00d1ea145fa0d61b95 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/forms.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "forms"]), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Forms"));
        echo "\">
        <img width=\"21\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Forms"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "icon", [])), "html", null, true);
        echo "\">
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getFormsCount", [])), "html", null, true);
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "getForms", []));
        foreach ($context['_seq'] as $context["keys"] => $context["form"]) {
            // line 13
            echo "                <b>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["keys"]), "html", null, true);
            echo "</b>
                <div><a href=\"";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\webprofiler\Twig\Extension\ProfilerExtension')->getIdeLink($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["form"], "class", []), "file", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["form"], "class", []), "line", []))));
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\webprofiler\Twig\Extension\ProfilerExtension')->getAbbr($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["form"], "class", []), "class", []))));
            echo "
                        ::";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["form"], "class", []), "method", [])), "html", null, true);
            echo "</a></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 19
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <script id=\"forms\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Forms"));
        echo "</h2>
        <% if( data.forms && data.forms.length != 0){ %>
            <% _.each( data.forms, function( item, key ){ %>
                <div class=\"panel__container\">

                    <ul class=\"list--inline\">
                        <li><b>ID</b> <%= key %></li>
                        <li><b>class</b> <%= Drupal.webprofiler.helpers.classLink(item.class) %></li>
                    </ul>

                    <table class=\"table--compact\">
                        <thead>
                        <tr>
                            <th>";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("form"));
        echo "</th>
                            <th>";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("title"));
        echo "</th>
                            <th>";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("access"));
        echo "</th>
                            <th>";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("type"));
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        <% _.each( item.form, function( value , key ){ %>
                        <tr>
                            <td><%= key %></td>
                            <td><% if(value['#title'] == null ){ %> ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("-");
        echo " <% } else { %> <%= value['#title'] %><% } %></td>
                            <td><% if(value['#access'] == null ){ %> ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("null");
        echo " <% } else { %> <%= value['#access'] %><% } %></td>
                            <td><% if(value['#type'] == null ){ %> ";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("null");
        echo " <% } else { %> <%= value['#type'] %><% } %></td>
                        </tr>
                        <% }); %>
                        </tbody>
                    </table>
                </div>
            <% }); %>
        <% } else { %>
            <div class=\"panel__container\">
                <p>";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No results"));
        echo "</p>
            </div>
        <% } %>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/forms.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  203 => 63,  191 => 54,  187 => 53,  183 => 52,  173 => 45,  169 => 44,  165 => 43,  161 => 42,  145 => 29,  142 => 28,  136 => 27,  126 => 23,  122 => 22,  118 => 20,  115 => 19,  111 => 17,  103 => 15,  97 => 14,  92 => 13,  88 => 12,  85 => 11,  82 => 10,  79 => 9,  73 => 6,  69 => 5,  65 => 4,  58 => 3,  55 => 2,  49 => 1,  42 => 27,  39 => 26,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block toolbar %}
    {% set icon %}
    <a href=\"{{ url(\"webprofiler.dashboard\", {profile: token}, {fragment: 'forms'}) }}\" title=\"{{ 'Forms'|t }}\">
        <img width=\"21\" height=\"28\" alt=\"{{ 'Forms'|t }}\"
             src=\"data:image/png;base64,{{ collector.icon }}\">
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">{{ collector.getFormsCount }}</span>
    </a>
    {% endset %}
    {% set text %}
    {% spaceless %}
        <div class=\"sf-toolbar-info-piece\">
            {% for keys, form in collector.getForms %}
                <b>{{ keys }}</b>
                <div><a href=\"{{ idelink(form.class.file, form.class.line)|raw }}\">{{ abbr(form.class.class)|raw }}
                        ::{{ form.class.method }}</a></div>
            {% endfor %}
        </div>
    {% endspaceless %}
    {% endset %}

    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
    </div>
{% endblock %}

{% block panel %}
    <script id=\"forms\" type=\"text/template\">
        <h2 class=\"panel__title\">{{ 'Forms'|t }}</h2>
        <% if( data.forms && data.forms.length != 0){ %>
            <% _.each( data.forms, function( item, key ){ %>
                <div class=\"panel__container\">

                    <ul class=\"list--inline\">
                        <li><b>ID</b> <%= key %></li>
                        <li><b>class</b> <%= Drupal.webprofiler.helpers.classLink(item.class) %></li>
                    </ul>

                    <table class=\"table--compact\">
                        <thead>
                        <tr>
                            <th>{{ 'form'|t }}</th>
                            <th>{{ 'title'|t }}</th>
                            <th>{{ 'access'|t }}</th>
                            <th>{{ 'type'|t }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <% _.each( item.form, function( value , key ){ %>
                        <tr>
                            <td><%= key %></td>
                            <td><% if(value['#title'] == null ){ %> {{ '-' }} <% } else { %> <%= value['#title'] %><% } %></td>
                            <td><% if(value['#access'] == null ){ %> {{ 'null' }} <% } else { %> <%= value['#access'] %><% } %></td>
                            <td><% if(value['#type'] == null ){ %> {{ 'null' }} <% } else { %> <%= value['#type'] %><% } %></td>
                        </tr>
                        <% }); %>
                        </tbody>
                    </table>
                </div>
            <% }); %>
        <% } else { %>
            <div class=\"panel__container\">
                <p>{{ 'No results'|t }}</p>
            </div>
        <% } %>
    </script>
{% endblock %}
", "@webprofiler/Collector/forms.html.twig", "C:\\xampp\\htdocs\\new\\Konika360\\modules\\contrib\\devel\\webprofiler\\templates\\Collector\\forms.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 1, "set" => 2, "spaceless" => 10, "for" => 12];
        static $filters = ["escape" => 3, "t" => 3, "raw" => 14, "default" => 22];
        static $functions = ["url" => 3, "idelink" => 14, "abbr" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'spaceless', 'for'],
                ['escape', 't', 'raw', 'default'],
                ['url', 'idelink', 'abbr']
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
