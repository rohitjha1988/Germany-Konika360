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

/* themes/Assessment/templates/webform--analytics-and-intelligence.html.twig */
class __TwigTemplate_8a691a7b045acc6bc9c1db0b20949bcae50c98dea2a1f68328c1c79b11c647e0 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/Assessment/templates/webform--analytics-and-intelligence.html.twig"));

        // line 38
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <body>
        <!-- start header -->
      <header>
            <div class=\"left-nav\">

                <!-- start logo -->
             <div class=\"sidebar-part1 webformlogos text-right\">
             <div class=\"dx360d padding-10px-left innerresult\">
      <a href=\"";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" title=\"Konica Minolta\" class=\"\">

      <img src=\"/themes/Assessment/images/dx360dgree.png\"></a>
      <a href=\"";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" title=\"Konica Minolta\" class=\"\">

      <img src=\"/themes/Assessment/images/logo.svg\"></a>

</div>
        </div>
                <!-- end logo -->

                   <!-- end logo -->
        
          <div class=\"bottom-menu-icon  right-menu-button text-extra-dark-gray nav-icon \">
        <a href=\"javascript:void(0);\" class=\" opneside active\" id=\"showRightPush\">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
      <div class=\"sidenew\">
      <div class=\"sidendat\">
          <div class=\"sideHEad\">
           <h2>DX360° Assessment</h2>
               <button class=\"btnclose\">
                   <a href=\"javascript:void(0);\" class=\"right-menu-button text-extra-dark-gray nav-icon active\" id=\"showRightPush\">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </a>
      </button>
              
          </div>
     <div class=\"MidData\">
          
         <div class=\"Sidemenus\">
         <ul>
             <li class=\"hasmenu\"><a href=\"";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" class=\"defaultcolors\">DX360° HomePage<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
  
             </li>
             <li><a href=\"https://dx360.konicaminolta.co.uk/productivity-and-collaboration\"  class=\"hasmenu produccolor\">PRODUCTIVITY & COLLABORATION<i class=\"fa fa-angle-right\"></i></a> </li>
             <li><a href=\"/security-and-compliance\" class=\"hasmenu sectcolor\">SECURITY & COMPLIANCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </li>
             <li><a href=\"/mobility\" class=\"hasmenu mobilitycolor\">MOBILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </li>
             <li><a href=\"/flexibility-efficiency-and-sustainability\" class=\"hasmenu flexibilitycolor \">FLEXIBILITY, EFFICIENCY & <br>SUSTAINABILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </li>
             <li><a href=\"/analytics-and-intelligence\" class=\"hasmenu analyticescolor active\">ANALYTICS & INTELLIGENCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </li>

             </ul>
         </div>
          <div class=\"Sidemenus blubars secndcolrsec\">
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
                  <ul>
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
       <div class=\"serchover\"></div>
            </div>

        </header>
        <!-- end header -->
      <div class=\"col-12 col-lg-6 height-600px bg-analtics \">
      <div>
     <h1 class=\"title page-title text-white text-uppercase text-extra-large text-left padding-70px-tb sm-padding-two-all width-100 text-lg-left text-center\">ANALYTICS AND INTELLIGENCE</h1>
        
         <form";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
        



          ";
        // line 143
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "first", [])), "html", null, true);
        echo "
          ";
        // line 144
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "from_0_to_100_do_you_have_a_seamless_work_experience_where_you_c", [])), "html", null, true);
        echo "

          ";
        // line 146
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "second", [])), "html", null, true);
        echo "
          ";
        // line 147
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "what_percentage_of_your_workforce_when_working_remotely_have_acc", [])), "html", null, true);
        echo "

          ";
        // line 149
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "third", [])), "html", null, true);
        echo "
          ";
        // line 150
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "when_your_workforce_is_working_remotely_is_their_it_still_manage", [])), "html", null, true);
        echo "

          ";
        // line 152
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "fourth", [])), "html", null, true);
        echo "
          ";
        // line 153
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "how_do_you_manage_document_work_and_other_manual_work_in_your_da", [])), "html", null, true);
        echo "
          ";
        // line 154
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "what_percent_of_your_time_is_wasted_due_to_your_or_someones_else", [])), "html", null, true);
        echo "
          ";
        // line 155
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "fifth", [])), "html", null, true);
        echo "
          ";
        // line 156
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "to_what_extend_supports_your_servicedesk_your_customer_s_needs_", [])), "html", null, true);
        echo "
          

          ";
        // line 159
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "message", [])), "html", null, true);
        echo "
          ";
        // line 160
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "form_build_id", [])), "html", null, true);
        echo "
          ";
        // line 161
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "form_token", [])), "html", null, true);
        echo "
          ";
        // line 162
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "form_id", [])), "html", null, true);
        echo "
          ";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "actions", [])), "html", null, true);
        echo "

          ";
        // line 165
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "


      </div>
\t\t\t</div>

      <div class=\"cnt-right col-12 col-lg-6 height-600px cnt-a analticsright\">
\t\t\t <form";
        // line 172
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">

         ";
        // line 174
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "first", [])), "html", null, true);
        echo "
            ";
        // line 175
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "from_0_to_100_do_you_have_a_seamless_work_experience_where_you_c", [])), "html", null, true);
        echo "

            ";
        // line 177
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "second", [])), "html", null, true);
        echo "
            ";
        // line 178
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "what_percentage_of_your_workforce_when_working_remotely_have_acc", [])), "html", null, true);
        echo "

          ";
        // line 180
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "third", [])), "html", null, true);
        echo "
            ";
        // line 181
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "when_your_workforce_is_working_remotely_is_their_it_still_manage", [])), "html", null, true);
        echo "

\t\t\t";
        // line 183
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "fourth", [])), "html", null, true);
        echo "
            ";
        // line 184
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "how_do_you_manage_document_work_and_other_manual_work_in_your_da", [])), "html", null, true);
        echo "
";
        // line 185
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "what_percent_of_your_time_is_wasted_due_to_your_or_someones_else", [])), "html", null, true);
        echo "
\t\t\t";
        // line 186
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "fifth", [])), "html", null, true);
        echo "
            ";
        // line 187
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "to_what_extend_supports_your_servicedesk_your_customer_s_needs_", [])), "html", null, true);
        echo "
            

            ";
        // line 190
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["element"] ?? null), "elements", []), "message", [])), "html", null, true);
        echo "
            ";
        // line 191
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "form_build_id", [])), "html", null, true);
        echo "
            ";
        // line 192
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "form_token", [])), "html", null, true);
        echo "
            ";
        // line 193
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "form_id", [])), "html", null, true);
        echo "
            ";
        // line 194
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "actions", [])), "html", null, true);
        echo "

        ";
        // line 196
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
          ";
        // line 197
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["element"] ?? null), "progress", [])), "html", null, true);
        echo " 
        </div>

          <!-- start footer -->
";
        // line 206
        echo "
";
        // line 219
        echo "
";
        // line 229
        echo "
";
        // line 243
        echo "
        <!-- scroll to top -->
        <a class=\"scroll-top-arrow\" href=\"javascript:void(0);\"><i class=\"ti-arrow-up\"></i></a>
        <!-- end scroll to top  -->
        <script src=\"../core/assets/vendor/jquery/jquery.min.js?v=3.5.1\"></script>
    <script>
      
      \$(\".hasmenu\").click(function(){
          \$(\".hasmenu\").removeClass(\"active\")
          \$(this).addClass(\"active\");
          
          
//          \$(\".submenus\").slideUp()
          \$(this).find(\".Sidemenus\").show();
      });
           \$(\".opneside\").click(function(){
          \$(\".sidendat,.serchover\").addClass(\"active\");
          
      });
          \$(\".btnclose\").click(function(){
          \$(\".sidendat,.serchover\").removeClass(\"active\");
          
      }); 
         
          
      </script>
    </body>
</html>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/Assessment/templates/webform--analytics-and-intelligence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 243,  326 => 229,  323 => 219,  320 => 206,  313 => 197,  309 => 196,  304 => 194,  300 => 193,  296 => 192,  292 => 191,  288 => 190,  282 => 187,  278 => 186,  274 => 185,  270 => 184,  266 => 183,  261 => 181,  257 => 180,  252 => 178,  248 => 177,  243 => 175,  239 => 174,  234 => 172,  224 => 165,  219 => 163,  215 => 162,  211 => 161,  207 => 160,  203 => 159,  197 => 156,  193 => 155,  189 => 154,  185 => 153,  181 => 152,  176 => 150,  172 => 149,  167 => 147,  163 => 146,  158 => 144,  154 => 143,  146 => 138,  93 => 88,  54 => 52,  48 => 49,  35 => 38,);
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

ANALYTICS AND INTELLIGENCE


The true measure of being data-driven is how well you understand 
insights, and take appropriate action when needed.  A good technology 
data-driven strategy for your business is not just about buying the 
right tools, it’s about making sure your systems are accessible whenever 
and wherever your team needs them to get the job done… and when your 
customers need you. Real digital maturity is all about being analytical,
 resiliant and intelligent in your business 
decisions and enablement.


<p> 
          The true measure of being data-driven is how well you understand 
           insights, and take appropriate action when needed.  A good technology 
           data-driven strategy for your business is not just about buying the 
           right tools, it’s about making sure your systems are accessible whenever 
           and wherever your team needs them to get the job done… and when your 
           customers need you. Real digital maturity is all about being analytical,
           resiliant and intelligent in your business 
           decisions and enablement.
            </p>


#}
<!doctype html>
<html class=\"no-js\" lang=\"en\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <body>
        <!-- start header -->
      <header>
            <div class=\"left-nav\">

                <!-- start logo -->
             <div class=\"sidebar-part1 webformlogos text-right\">
             <div class=\"dx360d padding-10px-left innerresult\">
      <a href=\"{{ url('<front>') }}\" title=\"Konica Minolta\" class=\"\">

      <img src=\"/themes/Assessment/images/dx360dgree.png\"></a>
      <a href=\"{{ url('<front>') }}\" title=\"Konica Minolta\" class=\"\">

      <img src=\"/themes/Assessment/images/logo.svg\"></a>

</div>
        </div>
                <!-- end logo -->

                   <!-- end logo -->
        
          <div class=\"bottom-menu-icon  right-menu-button text-extra-dark-gray nav-icon \">
        <a href=\"javascript:void(0);\" class=\" opneside active\" id=\"showRightPush\">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
      <div class=\"sidenew\">
      <div class=\"sidendat\">
          <div class=\"sideHEad\">
           <h2>DX360° Assessment</h2>
               <button class=\"btnclose\">
                   <a href=\"javascript:void(0);\" class=\"right-menu-button text-extra-dark-gray nav-icon active\" id=\"showRightPush\">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </a>
      </button>
              
          </div>
     <div class=\"MidData\">
          
         <div class=\"Sidemenus\">
         <ul>
             <li class=\"hasmenu\"><a href=\"{{ url('<front>') }}\" class=\"defaultcolors\">DX360° HomePage<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
  
             </li>
             <li><a href=\"https://dx360.konicaminolta.co.uk/productivity-and-collaboration\"  class=\"hasmenu produccolor\">PRODUCTIVITY & COLLABORATION<i class=\"fa fa-angle-right\"></i></a> </li>
             <li><a href=\"/security-and-compliance\" class=\"hasmenu sectcolor\">SECURITY & COMPLIANCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </li>
             <li><a href=\"/mobility\" class=\"hasmenu mobilitycolor\">MOBILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </li>
             <li><a href=\"/flexibility-efficiency-and-sustainability\" class=\"hasmenu flexibilitycolor \">FLEXIBILITY, EFFICIENCY & <br>SUSTAINABILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </li>
             <li><a href=\"/analytics-and-intelligence\" class=\"hasmenu analyticescolor active\">ANALYTICS & INTELLIGENCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </li>

             </ul>
         </div>
          <div class=\"Sidemenus blubars secndcolrsec\">
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
                  <ul>
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
       <div class=\"serchover\"></div>
            </div>

        </header>
        <!-- end header -->
      <div class=\"col-12 col-lg-6 height-600px bg-analtics \">
      <div>
     <h1 class=\"title page-title text-white text-uppercase text-extra-large text-left padding-70px-tb sm-padding-two-all width-100 text-lg-left text-center\">ANALYTICS AND INTELLIGENCE</h1>
        
         <form{{ attributes }}>
        



          {{ element.elements.first }}
          {{ element.elements.from_0_to_100_do_you_have_a_seamless_work_experience_where_you_c }}

          {{ element.elements.second }}
          {{ element.elements.what_percentage_of_your_workforce_when_working_remotely_have_acc }}

          {{ element.elements.third }}
          {{ element.elements.when_your_workforce_is_working_remotely_is_their_it_still_manage }}

          {{ element.elements.fourth }}
          {{ element.elements.how_do_you_manage_document_work_and_other_manual_work_in_your_da }}
          {{ element.elements.what_percent_of_your_time_is_wasted_due_to_your_or_someones_else }}
          {{ element.elements.fifth }}
          {{ element.elements.to_what_extend_supports_your_servicedesk_your_customer_s_needs_ }}
          

          {{ element.elements.message }}
          {{ element.form_build_id }}
          {{ element.form_token }}
          {{ element.form_id }}
          {{ element.actions }}

          {{ title_suffix }}


      </div>
\t\t\t</div>

      <div class=\"cnt-right col-12 col-lg-6 height-600px cnt-a analticsright\">
\t\t\t <form{{ attributes }}>

         {{ element.elements.first }}
            {{ element.elements.from_0_to_100_do_you_have_a_seamless_work_experience_where_you_c }}

            {{ element.elements.second }}
            {{ element.elements.what_percentage_of_your_workforce_when_working_remotely_have_acc }}

          {{ element.elements.third }}
            {{ element.elements.when_your_workforce_is_working_remotely_is_their_it_still_manage }}

\t\t\t{{ element.elements.fourth }}
            {{ element.elements.how_do_you_manage_document_work_and_other_manual_work_in_your_da }}
{{ element.elements.what_percent_of_your_time_is_wasted_due_to_your_or_someones_else }}
\t\t\t{{ element.elements.fifth }}
            {{ element.elements.to_what_extend_supports_your_servicedesk_your_customer_s_needs_ }}
            

            {{ element.elements.message }}
            {{ element.form_build_id }}
            {{ element.form_token }}
            {{ element.form_id }}
            {{ element.actions }}

        {{ title_suffix }}
          {{ element.progress }} 
        </div>

          <!-- start footer -->
{#        <footer class=\"footer-standard-dark bg-dark-footer\">#}
{#            <div class=\"footer-widget-area padding-two-tb sm-padding-30px-tb\">#}
{#                <div class=\"container\">#}
{#                    <div class=\"row\">#}
{#                        <div class=\"col-lg-6 col-md-6 widget sm-text-center\">#}

{#                            <!-- start social media -->#}
{#                            <div class=\"social-icon-style-8 d-inline-block vertical-align-middle\">#}
{#                                <ul class=\"small-icon no-margin-bottom\">#}
{#                                    <li><a class=\"facebook text-white-2\" href=\"https://www.facebook.com/\" target=\"_blank\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a></li>#}
{#                                    <li><a class=\"linkedin text-white-2\" href=\"https://linkedin.com/\" target=\"_blank\"><i class=\"fab fa-linkedin\"></i></a></li>#}
{#                                    <li><a class=\"twitter text-white-2\" href=\"https://twitter.com/\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>#}
{#                                    <li><a class=\"youtube text-white-2\" href=\"https://youtube.com/\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a></li>#}
{#                                    <li><a class=\"instagram text-white-2\" href=\"https://instagram.com/\" target=\"_blank\"><i class=\"fab fa-instagram no-margin-right\" aria-hidden=\"true\"></i></a></li>#}
{#                                </ul>#}
{#                            </div>#}
{#                            <!-- end social media -->#}
{#                        </div>#}

{#                        <!-- start text image -->#}
{#                        <div class=\"col-lg-6 col-md-6 widget md-padding-15px-left text-md-right text-center padding-5px-top\">#}
{#                            <img src=\"themes/Assessment/images/gsti_text.png\" alt=\"\">#}
{#                        </div>#}
{#                        <!-- end text image -->#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}
{#            <div class=\"border-top border-color-medium-dark-gray\">#}

{#            <div class=\"bg-dark-footer padding-20px-bottom padding-10px-top text-center sm-padding-30px-tb\">#}
{#                <div class=\"container\">#}
{#                    <div class=\"row\">#}
{#                        <!-- start copyright -->#}
{#                        <div class=\"col-md-6 text-md-left text-small text-center\"><a href=\"javascript:void(0);\" class=\"text-dark-gray\">Term of Use</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"javascript:void(0);\" class=\"text-dark-gray\">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"javascript:void(0);\" class=\"text-dark-gray\">Sitemap</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"javascript:void(0);\" class=\"text-dark-gray\">Imprint</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"javascript:void(0);\" class=\"text-dark-gray\">Cookie Settings</a></div>#}
{#                        <div class=\"col-md-6 text-md-right text-small text-center sm-padding-30px-top\"> &copy; 2021 Konica Minolta Business Solutions India Private Limited.#}
{#                        </div>#}
{#                        <!-- end copyright -->#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}
{#        </footer>#}
{#        <!-- end footer -->#}

        <!-- scroll to top -->
        <a class=\"scroll-top-arrow\" href=\"javascript:void(0);\"><i class=\"ti-arrow-up\"></i></a>
        <!-- end scroll to top  -->
        <script src=\"../core/assets/vendor/jquery/jquery.min.js?v=3.5.1\"></script>
    <script>
      
      \$(\".hasmenu\").click(function(){
          \$(\".hasmenu\").removeClass(\"active\")
          \$(this).addClass(\"active\");
          
          
//          \$(\".submenus\").slideUp()
          \$(this).find(\".Sidemenus\").show();
      });
           \$(\".opneside\").click(function(){
          \$(\".sidendat,.serchover\").addClass(\"active\");
          
      });
          \$(\".btnclose\").click(function(){
          \$(\".sidendat,.serchover\").removeClass(\"active\");
          
      }); 
         
          
      </script>
    </body>
</html>
", "themes/Assessment/templates/webform--analytics-and-intelligence.html.twig", "C:\\xampp\\htdocs\\new\\Konika360\\themes\\Assessment\\templates\\webform--analytics-and-intelligence.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 138];
        static $functions = ["url" => 49];

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
