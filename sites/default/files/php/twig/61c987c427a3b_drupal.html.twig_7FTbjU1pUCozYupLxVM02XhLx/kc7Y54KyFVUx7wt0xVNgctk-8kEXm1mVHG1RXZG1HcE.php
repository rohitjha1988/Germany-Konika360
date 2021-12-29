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

/* @webprofiler/Collector/drupal.html.twig */
class __TwigTemplate_14cd8ac8ce5c0017373b36288bd63cbbac6266c6e4032ba07863f0f322630004 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/drupal.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('panel', $context, $blocks);
        // line 66
        echo "
";
        
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
        echo "    <span>
        <img width=\"13\" height=\"28\" alt=\"Drupal\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "icon", [])), "html", null, true);
        echo "\">
        <a href=\"https://www.drupal.org\">
            <span>";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "version", [])), "html", null, true);
        echo "</span>
        </a>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Drupal version"));
        echo "</b>
            <span>";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "version", [])), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Installed profile"));
        echo "</b>
            <span>";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "profile", [])), "html", null, true);
        echo "</span>
        </div>

        ";
        // line 22
        if ($this->getAttribute(($context["collector"] ?? null), "getGitCommit", [])) {
            // line 23
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Git commit"));
            echo "</b>
            <span><abbr title=\"";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getGitCommit", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getAbbrGitCommit", [])), "html", null, true);
            echo "</abbr></span>
        </div>
        ";
        }
        // line 28
        echo "
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getConfigUrl", [])), "html", null, true);
        echo "\"
                     title=\"";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Configure Webprofiler"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Configure Webprofiler"));
        echo "</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.admin_list"));
        echo "\"
                     title=\"";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("View latest reports"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("View latest reports"));
        echo "</a></span>
        </div>
        <hr/>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"https://www.drupal.org/documentation\">";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Drupal Documentation"));
        echo "</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"https://www.drupal.org/contribute\">";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Get involved!"));
        echo "</a></span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 45
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "
    ";
        // line 47
        if (($context["link"] ?? null)) {
            // line 48
            echo "        ";
            ob_start();
            // line 49
            echo "        <a href=\"#\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "html", null, true);
            echo "</a>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            echo "    ";
        }
        // line 52
        echo "    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 58
    public function block_panel($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        echo "    <script id=\"drupal\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Drupal"));
        echo "</h2>
        <div class=\"panel__container\">

        </div>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/drupal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  210 => 60,  207 => 59,  201 => 58,  191 => 54,  187 => 53,  184 => 52,  181 => 51,  175 => 49,  172 => 48,  170 => 47,  167 => 46,  164 => 45,  158 => 42,  152 => 39,  143 => 35,  139 => 34,  131 => 31,  127 => 30,  123 => 28,  115 => 25,  111 => 24,  108 => 23,  106 => 22,  100 => 19,  96 => 18,  90 => 15,  86 => 14,  83 => 13,  80 => 12,  77 => 11,  70 => 7,  65 => 5,  61 => 3,  58 => 2,  52 => 1,  44 => 66,  42 => 58,  39 => 57,  37 => 1,);
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
    <span>
        <img width=\"13\" height=\"28\" alt=\"Drupal\"
             src=\"data:image/png;base64,{{ collector.icon }}\">
        <a href=\"https://www.drupal.org\">
            <span>{{ collector.version }}</span>
        </a>
        </span>
    {% endset %}
    {% set text %}
    {% spaceless %}
        <div class=\"sf-toolbar-info-piece\">
            <b>{{ 'Drupal version'|t }}</b>
            <span>{{ collector.version }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>{{ 'Installed profile'|t }}</b>
            <span>{{ collector.profile }}</span>
        </div>

        {% if collector.getGitCommit %}
        <div class=\"sf-toolbar-info-piece\">
            <b>{{ 'Git commit'|t }}</b>
            <span><abbr title=\"{{ collector.getGitCommit }}\">{{ collector.getAbbrGitCommit }}</abbr></span>
        </div>
        {% endif %}

        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"{{ collector.getConfigUrl }}\"
                     title=\"{{ 'Configure Webprofiler'|t }}\">{{ 'Configure Webprofiler'|t }}</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"{{ url(\"webprofiler.admin_list\") }}\"
                     title=\"{{ 'View latest reports'|t }}\">{{ 'View latest reports'|t }}</a></span>
        </div>
        <hr/>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"https://www.drupal.org/documentation\">{{ 'Drupal Documentation'|t }}</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <span><a href=\"https://www.drupal.org/contribute\">{{ 'Get involved!'|t }}</a></span>
        </div>
    {% endspaceless %}
    {% endset %}

    {% if link %}
        {% set icon %}
        <a href=\"#\">{{ icon }}</a>
        {% endset %}
    {% endif %}
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
    </div>
{% endblock %}

{% block panel %}
    <script id=\"drupal\" type=\"text/template\">
        <h2 class=\"panel__title\">{{ 'Drupal'|t }}</h2>
        <div class=\"panel__container\">

        </div>
    </script>
{% endblock %}

", "@webprofiler/Collector/drupal.html.twig", "C:\\xampp\\htdocs\\new\\Konika360\\modules\\contrib\\devel\\webprofiler\\templates\\Collector\\drupal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 1, "set" => 2, "spaceless" => 12, "if" => 22];
        static $filters = ["escape" => 5, "t" => 14, "default" => 53];
        static $functions = ["url" => 34];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'spaceless', 'if'],
                ['escape', 't', 'default'],
                ['url']
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