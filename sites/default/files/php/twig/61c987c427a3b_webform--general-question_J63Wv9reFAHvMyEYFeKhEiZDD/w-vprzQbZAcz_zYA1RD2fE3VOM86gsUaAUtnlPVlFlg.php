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

/* themes/Assessment/templates/webform--general-question.html.twig */
class __TwigTemplate_f6fc206806d4b8e05dc3fcc6fe7ccc47ae298080ba6f09596a842b60409040d4 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/Assessment/templates/webform--general-question.html.twig"));

        // line 12
        echo "<!doctype html>

<html class=\"no-js\" lang=\"en\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<body>
\t\t<!-- start header -->
\t\t<header>
\t\t\t<div
\t\t\t\tclass=\"left-nav\">

\t\t\t\t<!-- start logo -->
\t\t\t\t<div class=\"sidebar-part1 webformlogos text-right\">
\t\t\t\t\t\t <div class=\"dx360d padding-10px-left innerresult\">
      <a href=\"";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" title=\"Konica Minolta\" class=\"\">

      <img src=\"/themes/Assessment/images/dx360dgree.png\"></a>
      <a href=\"";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" title=\"Konica Minolta\" class=\"\">

      <img src=\"/themes/Assessment/images/logo.svg\"></a>

</div>
\t\t\t\t</div>
\t\t\t\t<!-- end logo -->

\t\t\t\t<!-- end logo -->

\t\t\t\t<div class=\"bottom-menu-icon  right-menu-button text-extra-dark-gray nav-icon \">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\" opneside active\" id=\"showRightPush\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"sidenew\">
\t\t\t\t\t<div class=\"sidendat\">
\t\t\t\t\t\t<div class=\"sideHEad\">
\t\t\t\t\t\t\t<h2>DX360° Assessment</h2>
\t\t\t\t\t\t\t<button class=\"btnclose\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"right-menu-button text-extra-dark-gray nav-icon active\" id=\"showRightPush\">
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"MidData\">

\t\t\t\t\t\t\t<div class=\"Sidemenus\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"hasmenu\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" class=\"defaultcolors\">DX360° HomePage<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://dx360.konicaminolta.co.uk/productivity-and-collaboration\" class=\"hasmenu produccolor active\">PRODUCTIVITY & COLLABORATION<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/security-and-compliance\" class=\"hasmenu sectcolor\">SECURITY & COMPLIANCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/mobility\" class=\"hasmenu mobilitycolor\">MOBILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/flexibility-efficiency-and-sustainability\" class=\"hasmenu flexibilitycolor \">FLEXIBILITY, EFFICIENCY &
\t\t\t\t\t\t\t\t\t\t\t<br>SUSTAINABILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/analytics-and-intelligence\" class=\"hasmenu analyticescolor\">ANALYTICS & INTELLIGENCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"Sidemenus blubars secndcolrsec\">
       <ul>
           <li><a href=\" https://www.konicaminolta.co.uk\" class=\"\">konica minolta homepage <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"https://www.konicaminolta.co.uk/en-gb/it-services\">it services<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\" https://www.konicaminolta.co.uk/en-gb/innovation\">innovation<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"https://www.konicaminolta.co.uk/en-gb/office-printing\">office printing<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\" https://www.konicaminolta.co.uk/en-gb/professional-printing\">professional printing<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"https://www.konicaminolta.co.uk/en-gb/customer-support/faqs\">support & faqs<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
              
              
            </ul>
         </div>
          </div>
      
          <div class=\"Socialbar\">
              
              <div class=\"sobar\">
              
              <h2>Follow Us :</h2>
            \t <ul>
                  <li><a href=\"https://www.facebook.com/KonicaMinoltaBusinessSolutionsUKLtd/\"><i class=\"fa fa-facebook\"></i></a></li>
                  <li><a href=\"https://www.linkedin.com/company/konica-minolta-business-solutions-uk-ltd/\"><i class=\"fa fa-linkedin\"></i></a></li>
                  <li><a href=\"https://twitter.com/konicaminoltaGB\"><i class=\"fa fa-twitter\"></i></a></li>
                  <li><a href=\"https://www.youtube.com/user/konicaminoltatv\"><i class=\"fa fa-youtube-play\"></i></a></li>
                  <li><a href=\"https://www.instagram.com/Konica_minolta_uk/\"><i class=\"fa fa-instagram\"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
      </div>
\t\t\t\t<div class=\"serchover\"></div>
\t\t\t</div>

\t\t</header>
\t\t<!-- end header -->
\t\t<!-- start contact section -->
\t\t<section id=\"contact\" class=\"wow fadeIn no-padding\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-lg-6 cover-background md-height-550px sm-height-350px wow fadeIn bg-yellow\">
\t\t\t\t\t\t<div class=\"text-left padding-70px-tb padding-30px-lr sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t\t\t\t\t<h6 class=\"margin-30px-bottom\">
\t\t\t\t\t\t\t\t<span class=\"text-white text-uppercase\">PRODUCTIVITY AND COLLABORATION
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p class=\"text-medium font-weight-400 text-white\">The way we work has changed dramatically in the past few years. Our environment changes just like our behavior. With new challenges, we have to think about how we want to collaborate in the future. How do we work across national borders? How do we manage to work together in the future despite pandemics or natural disasters? The Productivity & Collaboration section is dedicated to this question so that we can find new ways together to achieve more.<br><br>
\t\t\t\t\t\t\t\tUnderstand how your people and teams use technology to interact, communicate, and collaborate with each other and with your customers.</p>
\t\t\t\t\t\t\t<p class=\"text-sm padding-15px-top text-white\">
\t\t\t\t\t\t\t\tPlease answer the questions and click
\t\t\t\t\t\t\t\t<strong>\"PROCEED\"</strong>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-lg-6 padding-five-tb padding-six-lr md-padding-eleven-all sm-padding-15px-lr wow fadeIn bg-lg produyellow\">
\t\t\t\t\t\t<h6 class=\"margin-55px-bottom text-black font-weight-600 md-margin-30px-bottom sm-margin-15px-bottom gquestions\">General Questions</h6>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<form";
        // line 150
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">


\t\t\t\t\t\t\t\t<div id=\"success-contact-form\" class=\"mx-0\"></div>

\t\t\t\t\t\t\t\t";
        // line 155
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "in_which_industry_is_your_company_active_", [])), "html", null, true);
        echo "

\t\t\t\t\t\t\t\t";
        // line 157
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "how_many_employees_does_your_company_have_", [])), "html", null, true);
        echo "

\t\t\t\t\t\t\t\t";
        // line 159
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "in_which_country_is_your_company_located_", [])), "html", null, true);
        echo "

\t\t\t\t\t\t\t\t<!-- <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" class=\"input-bg\"> -->

\t\t\t\t\t\t\t\t";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "form_build_id", [])), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        // line 164
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "form_token", [])), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        // line 165
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "form_id", [])), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        // line 166
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "actions", [])), "html", null, true);
        echo "

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- end contact section -->

\t\t";
        // line 177
        echo "\t\t";
        // line 178
        echo "\t\t";
        // line 179
        echo "\t\t";
        // line 180
        echo "\t\t";
        // line 181
        echo "\t\t";
        // line 182
        echo "
\t\t";
        // line 184
        echo "\t\t";
        // line 185
        echo "\t\t";
        // line 186
        echo "\t\t";
        // line 187
        echo "\t\t";
        // line 188
        echo "\t\t";
        // line 189
        echo "\t\t";
        // line 190
        echo "\t\t";
        // line 191
        echo "\t\t";
        // line 192
        echo "\t\t";
        // line 193
        echo "\t\t";
        // line 194
        echo "\t\t";
        // line 195
        echo "
\t\t";
        // line 197
        echo "\t\t";
        // line 198
        echo "\t\t";
        // line 199
        echo "\t\t";
        // line 200
        echo "\t\t";
        // line 201
        echo "\t\t";
        // line 202
        echo "\t\t";
        // line 203
        echo "\t\t";
        // line 204
        echo "\t\t";
        // line 205
        echo "
\t\t";
        // line 207
        echo "\t\t";
        // line 208
        echo "\t\t";
        // line 209
        echo "\t\t";
        // line 210
        echo "\t\t";
        // line 211
        echo "\t\t";
        // line 212
        echo "\t\t";
        // line 213
        echo "\t\t";
        // line 214
        echo "\t\t";
        // line 215
        echo "\t\t";
        // line 216
        echo "\t\t";
        // line 217
        echo "\t\t";
        // line 218
        echo "\t\t";
        // line 219
        echo "
\t\t<!-- scroll to top -->
\t\t\t<a class=\"scroll-top-arrow\" href=\"javascript:void(0);\"> <i class=\"ti-arrow-up\"></i>
\t\t</a>
\t\t<!-- end scroll to top  -->
\t\t<script src=\"core/assets/vendor/jquery/jquery.min.js\"></script>
\t\t<script>

\t\t\t\$(\".hasmenu\").click(function () {
\$(\".hasmenu\").removeClass(\"active\")
\$(this).addClass(\"active\");


//          \$(\".submenus\").slideUp()
\$(this).find(\".Sidemenus\").show();
});
\$(\".opneside\").click(function () {
\$(\".sidendat,.serchover\").addClass(\"active\");

});
\$(\".btnclose\").click(function () {
\$(\".sidendat,.serchover\").removeClass(\"active\");

});
\t\t</script>
\t</body>
</html>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/Assessment/templates/webform--general-question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 219,  313 => 218,  311 => 217,  309 => 216,  307 => 215,  305 => 214,  303 => 213,  301 => 212,  299 => 211,  297 => 210,  295 => 209,  293 => 208,  291 => 207,  288 => 205,  286 => 204,  284 => 203,  282 => 202,  280 => 201,  278 => 200,  276 => 199,  274 => 198,  272 => 197,  269 => 195,  267 => 194,  265 => 193,  263 => 192,  261 => 191,  259 => 190,  257 => 189,  255 => 188,  253 => 187,  251 => 186,  249 => 185,  247 => 184,  244 => 182,  242 => 181,  240 => 180,  238 => 179,  236 => 178,  234 => 177,  221 => 166,  217 => 165,  213 => 164,  209 => 163,  202 => 159,  197 => 157,  192 => 155,  184 => 150,  96 => 65,  56 => 28,  50 => 25,  35 => 12,);
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
 * Default theme implementation for a webform submission form.
 *
 * Available variables:
 * - form: The webform submission form.
 *
 * @ingroup themeable
 */
#}
<!doctype html>

<html class=\"no-js\" lang=\"en\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<body>
\t\t<!-- start header -->
\t\t<header>
\t\t\t<div
\t\t\t\tclass=\"left-nav\">

\t\t\t\t<!-- start logo -->
\t\t\t\t<div class=\"sidebar-part1 webformlogos text-right\">
\t\t\t\t\t\t <div class=\"dx360d padding-10px-left innerresult\">
      <a href=\"{{ url('<front>') }}\" title=\"Konica Minolta\" class=\"\">

      <img src=\"/themes/Assessment/images/dx360dgree.png\"></a>
      <a href=\"{{ url('<front>') }}\" title=\"Konica Minolta\" class=\"\">

      <img src=\"/themes/Assessment/images/logo.svg\"></a>

</div>
\t\t\t\t</div>
\t\t\t\t<!-- end logo -->

\t\t\t\t<!-- end logo -->

\t\t\t\t<div class=\"bottom-menu-icon  right-menu-button text-extra-dark-gray nav-icon \">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\" opneside active\" id=\"showRightPush\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"sidenew\">
\t\t\t\t\t<div class=\"sidendat\">
\t\t\t\t\t\t<div class=\"sideHEad\">
\t\t\t\t\t\t\t<h2>DX360° Assessment</h2>
\t\t\t\t\t\t\t<button class=\"btnclose\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"right-menu-button text-extra-dark-gray nav-icon active\" id=\"showRightPush\">
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"MidData\">

\t\t\t\t\t\t\t<div class=\"Sidemenus\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"hasmenu\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('<front>') }}\" class=\"defaultcolors\">DX360° HomePage<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://dx360.konicaminolta.co.uk/productivity-and-collaboration\" class=\"hasmenu produccolor active\">PRODUCTIVITY & COLLABORATION<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/security-and-compliance\" class=\"hasmenu sectcolor\">SECURITY & COMPLIANCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/mobility\" class=\"hasmenu mobilitycolor\">MOBILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/flexibility-efficiency-and-sustainability\" class=\"hasmenu flexibilitycolor \">FLEXIBILITY, EFFICIENCY &
\t\t\t\t\t\t\t\t\t\t\t<br>SUSTAINABILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/analytics-and-intelligence\" class=\"hasmenu analyticescolor\">ANALYTICS & INTELLIGENCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"Sidemenus blubars secndcolrsec\">
       <ul>
           <li><a href=\" https://www.konicaminolta.co.uk\" class=\"\">konica minolta homepage <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"https://www.konicaminolta.co.uk/en-gb/it-services\">it services<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\" https://www.konicaminolta.co.uk/en-gb/innovation\">innovation<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"https://www.konicaminolta.co.uk/en-gb/office-printing\">office printing<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\" https://www.konicaminolta.co.uk/en-gb/professional-printing\">professional printing<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"https://www.konicaminolta.co.uk/en-gb/customer-support/faqs\">support & faqs<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
              
              
            </ul>
         </div>
          </div>
      
          <div class=\"Socialbar\">
              
              <div class=\"sobar\">
              
              <h2>Follow Us :</h2>
            \t <ul>
                  <li><a href=\"https://www.facebook.com/KonicaMinoltaBusinessSolutionsUKLtd/\"><i class=\"fa fa-facebook\"></i></a></li>
                  <li><a href=\"https://www.linkedin.com/company/konica-minolta-business-solutions-uk-ltd/\"><i class=\"fa fa-linkedin\"></i></a></li>
                  <li><a href=\"https://twitter.com/konicaminoltaGB\"><i class=\"fa fa-twitter\"></i></a></li>
                  <li><a href=\"https://www.youtube.com/user/konicaminoltatv\"><i class=\"fa fa-youtube-play\"></i></a></li>
                  <li><a href=\"https://www.instagram.com/Konica_minolta_uk/\"><i class=\"fa fa-instagram\"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
      </div>
\t\t\t\t<div class=\"serchover\"></div>
\t\t\t</div>

\t\t</header>
\t\t<!-- end header -->
\t\t<!-- start contact section -->
\t\t<section id=\"contact\" class=\"wow fadeIn no-padding\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-lg-6 cover-background md-height-550px sm-height-350px wow fadeIn bg-yellow\">
\t\t\t\t\t\t<div class=\"text-left padding-70px-tb padding-30px-lr sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t\t\t\t\t<h6 class=\"margin-30px-bottom\">
\t\t\t\t\t\t\t\t<span class=\"text-white text-uppercase\">PRODUCTIVITY AND COLLABORATION
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p class=\"text-medium font-weight-400 text-white\">The way we work has changed dramatically in the past few years. Our environment changes just like our behavior. With new challenges, we have to think about how we want to collaborate in the future. How do we work across national borders? How do we manage to work together in the future despite pandemics or natural disasters? The Productivity & Collaboration section is dedicated to this question so that we can find new ways together to achieve more.<br><br>
\t\t\t\t\t\t\t\tUnderstand how your people and teams use technology to interact, communicate, and collaborate with each other and with your customers.</p>
\t\t\t\t\t\t\t<p class=\"text-sm padding-15px-top text-white\">
\t\t\t\t\t\t\t\tPlease answer the questions and click
\t\t\t\t\t\t\t\t<strong>\"PROCEED\"</strong>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-lg-6 padding-five-tb padding-six-lr md-padding-eleven-all sm-padding-15px-lr wow fadeIn bg-lg produyellow\">
\t\t\t\t\t\t<h6 class=\"margin-55px-bottom text-black font-weight-600 md-margin-30px-bottom sm-margin-15px-bottom gquestions\">General Questions</h6>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<form{{attributes}}>


\t\t\t\t\t\t\t\t<div id=\"success-contact-form\" class=\"mx-0\"></div>

\t\t\t\t\t\t\t\t{{ element.elements.in_which_industry_is_your_company_active_ }}

\t\t\t\t\t\t\t\t{{ element.elements.how_many_employees_does_your_company_have_}}

\t\t\t\t\t\t\t\t{{ element.elements.in_which_country_is_your_company_located_ }}

\t\t\t\t\t\t\t\t<!-- <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" class=\"input-bg\"> -->

\t\t\t\t\t\t\t\t{{ element.form_build_id }}
\t\t\t\t\t\t\t\t{{ element.form_token }}
\t\t\t\t\t\t\t\t{{ element.form_id }}
\t\t\t\t\t\t\t\t{{ element.actions }}

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- end contact section -->

\t\t{#        <!-- start footer -->#}
\t\t{#        <footer class=\"footer-standard-dark bg-dark-footer\">#}
\t\t{#            <div class=\"footer-widget-area padding-two-tb sm-padding-30px-tb\">#}
\t\t{#                <div class=\"container\">#}
\t\t{#                    <div class=\"row\">#}
\t\t{#                        <div class=\"col-lg-6 col-md-6 widget sm-text-center\">#}

\t\t{#                            <!-- start social media -->#}
\t\t{#                            <div class=\"social-icon-style-8 d-inline-block vertical-align-middle\">#}
\t\t{#                                <ul class=\"small-icon no-margin-bottom\">#}
\t\t{#                                    <li><a class=\"facebook text-white-2\" href=\"https://www.facebook.com/\" target=\"_blank\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a></li>#}
\t\t{#                                    <li><a class=\"linkedin text-white-2\" href=\"https://linkedin.com/\" target=\"_blank\"><i class=\"fab fa-linkedin\"></i></a></li>#}
\t\t{#                                    <li><a class=\"twitter text-white-2\" href=\"https://twitter.com/\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>#}
\t\t{#                                    <li><a class=\"youtube text-white-2\" href=\"https://youtube.com/\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a></li>#}
\t\t{#                                    <li><a class=\"instagram text-white-2\" href=\"https://instagram.com/\" target=\"_blank\"><i class=\"fab fa-instagram no-margin-right\" aria-hidden=\"true\"></i></a></li>#}
\t\t{#                                </ul>#}
\t\t{#                            </div>#}
\t\t{#                            <!-- end social media -->#}
\t\t{#                        </div>#}

\t\t{#                        <!-- start text image -->#}
\t\t{#                        <div class=\"col-lg-6 col-md-6 widget md-padding-15px-left text-md-right text-center padding-5px-top\">#}
\t\t{#                            <img src=\"themes/Assessment/images/gsti_text.png\" alt=\"\">#}
\t\t{#                        </div>#}
\t\t{#                        <!-- end text image -->#}
\t\t{#                    </div>#}
\t\t{#                </div>#}
\t\t{#            </div>#}
\t\t{#            <div class=\"border-top border-color-medium-dark-gray\">#}

\t\t{#            <div class=\"bg-dark-footer padding-20px-bottom padding-10px-top text-center sm-padding-30px-tb\">#}
\t\t{#                <div class=\"container\">#}
\t\t{#                    <div class=\"row\">#}
\t\t{#                        <!-- start copyright -->#}
\t\t{#                        <div class=\"col-md-6 text-md-left text-small text-center\"><a href=\"javascript:void(0);\" class=\"text-dark-gray\">Term of Use</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"javascript:void(0);\" class=\"text-dark-gray\">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"javascript:void(0);\" class=\"text-dark-gray\">Sitemap</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"javascript:void(0);\" class=\"text-dark-gray\">Imprint</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"javascript:void(0);\" class=\"text-dark-gray\">Cookie Settings</a></div>#}
\t\t{#                        <div class=\"col-md-6 text-md-right text-small text-center sm-padding-30px-top\"> &copy; 2021 Konica Minolta Business Solutions India Private Limited.#}
\t\t{#                        </div>#}
\t\t{#                        <!-- end copyright -->#}
\t\t{#                    </div>#}
\t\t{#                </div>#}
\t\t{#            </div>#}
\t\t{#        </footer>#}
\t\t{#        <!-- end footer -->#}

\t\t<!-- scroll to top -->
\t\t\t<a class=\"scroll-top-arrow\" href=\"javascript:void(0);\"> <i class=\"ti-arrow-up\"></i>
\t\t</a>
\t\t<!-- end scroll to top  -->
\t\t<script src=\"core/assets/vendor/jquery/jquery.min.js\"></script>
\t\t<script>

\t\t\t\$(\".hasmenu\").click(function () {
\$(\".hasmenu\").removeClass(\"active\")
\$(this).addClass(\"active\");


//          \$(\".submenus\").slideUp()
\$(this).find(\".Sidemenus\").show();
});
\$(\".opneside\").click(function () {
\$(\".sidendat,.serchover\").addClass(\"active\");

});
\$(\".btnclose\").click(function () {
\$(\".sidendat,.serchover\").removeClass(\"active\");

});
\t\t</script>
\t</body>
</html>
", "themes/Assessment/templates/webform--general-question.html.twig", "C:\\xampp\\htdocs\\new\\Konika360\\themes\\Assessment\\templates\\webform--general-question.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 150];
        static $functions = ["url" => 25];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
