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

/* themes/Assessment/templates/node--6.html.twig */
class __TwigTemplate_03f8a993b4f5100bf3e051096a2c4c55bbf2cb80c8465df7c556de5988d9bcfc extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/Assessment/templates/node--6.html.twig"));

        // line 70
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 72
($context["node"] ?? null), "bundle", [])))), 2 => (($this->getAttribute(        // line 73
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 74
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 75
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 76
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 6 => "clearfix"];
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bartik/classy.node"), "html", null, true);
        echo "
<article";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
        echo ">

      
      
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <!-- start header here -->
<header>
\t<div
\t\tclass=\"left-nav\">

\t\t<!-- start logo -->

\t\t<div class=\"sidebar-part1 md-padding-10px-top md-padding-70px-left sm-padding-10px-top sm-padding-80px-left\">
\t\t<div class=\"col-lg-4 dx360d padding-10px-left\">
\t\t\t<a href=\"";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" title=\"Konica Minolta\" class=\"\">

\t\t\t<img src=\"../../themes/Assessment/images/dx360dgree.png\"></a>
\t\t\t<a href=\"";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" title=\"Konica Minolta\" class=\"\">

\t\t\t<img src=\"../../themes/Assessment/images/logo.svg\"></a>

</div>
\t\t\t<div class=\"right-top-menu col-lg-8\" style=\"padding: 1.5% 0% 1.5% 3%;\">
\t\t\t\t<a href=\"";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "#benefits-section\" title=\"Benefits\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\" style=\"text-align: end;\">Benefits</a>
\t\t\t\t<a href=\"";
        // line 106
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "#rethink-work\" title=\"Rethink Work\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\" style=\"text-align: center;\">Rethink Work</a>
\t\t\t\t<a href=\"";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "#trusted-advisor\" title=\"Your Trusted Advisor\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\">Your Trusted Advisor</a>
\t\t\t\t<a href=\"";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "#book-appointment\" title=\"Talk With An Expert\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\">Talk With An Expert</a>
\t\t\t</div>
\t\t</div>


\t\t<!-- end logo -->


\t\t<div class=\"bottom-menu-icon  right-menu-button text-extra-dark-gray nav-icon \">
\t\t\t<a href=\"javascript:void(0);\" class=\" opneside active\" id=\"showRightPush\">
\t\t\t\t<span></span>
\t\t\t\t<span></span>
\t\t\t\t<span></span>
\t\t\t\t<span></span>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"sidenew\">
\t\t\t<div class=\"sidendat\">
\t\t\t\t<div class=\"sideHEad\">
\t\t\t\t\t<h2>DX360° Assessment</h2>
\t\t\t\t\t<button class=\"btnclose\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"right-menu-button text-extra-dark-gray nav-icon active\" id=\"showRightPush\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</button>

\t\t\t\t</div>
\t\t\t\t<div class=\"MidData\">

\t\t\t\t\t<div class=\"Sidemenus\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"hasmenu\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 143
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" class=\"defaultcolors\">DX360° HomePage<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://dx360.konicaminolta.co.uk/productivity-and-collaboration\" class=\"hasmenu produccolor\">PRODUCTIVITY & COLLABORATION<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 152
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "security-and-compliance\" class=\"hasmenu sectcolor\">SECURITY & COMPLIANCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 156
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "mobility\" class=\"hasmenu mobilitycolor\">MOBILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 160
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "flexibility-efficiency-and-sustainability\" class=\"hasmenu flexibilitycolor\">FLEXIBILITY, EFFICIENCY &
\t\t\t\t\t\t\t\t\t<br>SUSTAINABILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 165
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "analytics-and-intelligence\" class=\"hasmenu analyticescolor\">ANALYTICS & INTELLIGENCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Sidemenus blubars secndcolrsec\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\" https://www.konicaminolta.co.uk\" class=\"\">konica minolta homepage <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.konicaminolta.co.uk/en-gb/it-services\">it services<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\" https://www.konicaminolta.co.uk/en-gb/innovation\">innovation<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.konicaminolta.co.uk/en-gb/office-printing\">office printing<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\" https://www.konicaminolta.co.uk/en-gb/professional-printing\">professional printing<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.konicaminolta.co.uk/en-gb/customer-support/faqs\">support & faqs<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"Socialbar\">

\t\t\t\t\t<div class=\"sobar\">

\t\t\t\t\t\t<h2>Follow Us :</h2>
\t\t\t\t\t\t <ul>
                  <li><a href=\"https://www.facebook.com/KonicaMinoltaBusinessSolutionsUKLtd/\"><i class=\"fa fa-facebook\"></i></a></li>
                  <li><a href=\"https://www.linkedin.com/company/konica-minolta-business-solutions-uk-ltd/\"><i class=\"fa fa-linkedin\"></i></a></li>
                  <li><a href=\"https://twitter.com/konicaminoltaGB\"><i class=\"fa fa-twitter\"></i></a></li>
                  <li><a href=\"https://www.youtube.com/user/konicaminoltatv\"><i class=\"fa fa-youtube-play\"></i></a></li>
                  <li><a href=\"https://www.instagram.com/Konica_minolta_uk/\"><i class=\"fa fa-instagram\"></i></a></li>
                  </ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"serchover\"></div></body></div></header><!-- end header --><!-- start blog slider section -->


    <!-- end header  -->
<section class=\"pagenots\">
  <div class=\"container\" style=\"color: #000;font-size: 100px;\">
      4<img src=\"../../themes/Assessment/images/logo_broken.png\">4

<br>
<p class=\"patps\">The page you’re looking for couldn’t be found.

</p>



<p class=\"lasts\"><i>Digital maturity is a journey not a destination.
</i></p>

<p class=\"lasts\">Return to the DX360° Assessment&nbsp;<a href=\"";
        // line 220
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\">Homepage</a></p>


      </div>
    </section>

 
<!--- footer start here ---->
<footer class=\"footer-standard-dark bg-dark-footer\" id=\"footer\">
  <div class=\"footer-widget-area padding-20px-tb sm-padding-30px-tb padding-30px-btm\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-6 widget sm-text-center\">

          <!-- start social media -->
          <div class=\"social-icon-style-8 d-inline-block vertical-align-middle\">
            <ul class=\"small-icon no-margin-bottom\">
              <li> <a class=\"facebook text-white-2\" href=\"https://www.facebook.com/\" target=\"_blank\"><img src=\"";
        // line 237
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/images/fb-rethink.svg\" alt=\"Facebook logo\"></a> </li>
              <li><a class=\"linkedin text-white-2\" href=\"https://linkedin.com/\" target=\"_blank\"><img src=\"";
        // line 238
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/images/linkedin-rethink.svg\" alt=\"Linkedin logo\"></a></li>
              <li><a class=\"twitter text-white-2\" href=\"https://twitter.com/\" target=\"_blank\"><img src=\"";
        // line 239
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/images/twitter-rethink.svg\" alt=\"Twitter logo\"></a></li>
              <li><a class=\"youtube text-white-2\" href=\"https://youtube.com/\" target=\"_blank\"><img src=\"";
        // line 240
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/images/youtube-rethink.svg\" alt=\"Youtube logo\"></a></li>
            </ul>
          </div>
          <!-- end social media -->
        </div>

        <!-- start text image -->
        <div class=\"col-lg-6 col-md-6 widget md-padding-15px-left text-md-right text-center padding-5px-top\">
          <img src=\"";
        // line 248
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/images/gsti_text.svg\" alt=\"\">
        </div>
        <!-- end text image -->
      </div>
    </div>
  </div>
  <div class=\"border-top border-color-medium-dark-gray margin-60px-lr padding-16px-top\">

    <div class=\"bg-dark-footer padding-20px-bottom text-center sm-padding-30px-tb\">
      <div class=\"container padding-0\">
        <div class=\"row\">
          <!-- start copyright -->
          <div class=\"col-md-6 text-md-left text-small text-center text-medium-gray\">
          <a href=\"https://www.konicaminolta.co.uk/en-gb/terms-of-use\" target=\"_blank\" class=\"text-extra-light-gray footer-links\">Term of Use</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href=\"https://dx360.konicaminolta.co.uk/sites/default/files/DX360Assessment-PrivacyPolicy-Website-v1-0.pdf\" target=\"_blank\" class=\"text-extra-light-gray footer-links\">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href=\"https://dx360.konicaminolta.co.uk/sitemap\" class=\"text-extra-light-gray footer-links\">Sitemap</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href=\"https://www.konicaminolta.co.uk/en-gb/imprint\" target=\"_blank\" class=\"text-extra-light-gray footer-links\">Imprint</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t  <a href=\"javascript:void(0);\" class=\"text-extra-light-gray footer-links cookies\">Cookie Settings</a></div>
          <div class=\"col-md-6 text-md-right text-small text-center text-extra-light-gray sm-padding-30px-top\"> © 2021 Konica Minolta Business Solutions (UK) Limited.
          </div>
          <!-- end copyright -->
        </div>
      </div>
    </div>
</div></footer>
<!---  footer end here -->
<!-- flexibtys end -->


  </div>
<script id=\"usercentrics-cmp\" src=\"https://app.usercentrics.eu/browser-ui/latest/loader.js\" data-settings-id=\"TYs1T85gv\" async></script>

    <script type=\"text/javascript\" src=\"";
        // line 280
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/jquery.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 281
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 282
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/bootstrap.bundle.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 283
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/jquery.easing.1.3.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 284
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/skrollr.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 285
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/smooth-scroll.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 286
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/jquery.appear.js\"></script>
<!-- menu navigation -->
<script type=\"text/javascript\" src=\"";
        // line 288
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/bootsnav.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 289
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/jquery.nav.js\"></script>
<!-- animation -->
<script type=\"text/javascript\" src=\"";
        // line 291
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/wow.min.js\"></script>
<!-- page scroll -->
<script type=\"text/javascript\" src=\"";
        // line 293
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/page-scroll.js\"></script>
<!-- swiper carousel -->
<script type=\"text/javascript\" src=\"";
        // line 295
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/swiper.min.js\"></script>
<!-- counter -->
<script type=\"text/javascript\" src=\"";
        // line 297
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/jquery.count-to.js\"></script>
<!-- parallax -->
<script type=\"text/javascript\" src=\"";
        // line 299
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/jquery.stellar.js\"></script>
<!-- magnific popup -->
<script type=\"text/javascript\" src=\"";
        // line 301
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/jquery.magnific-popup.min.js\"></script>
<!-- portfolio with shorting tab -->
<script type=\"text/javascript\" src=\"";
        // line 303
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/isotope.pkgd.min.js\"></script>
<!-- themes/Assessment/images loaded -->
<script type=\"text/javascript\" src=\"";
        // line 305
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/imagesloaded.pkgd.min.js\"></script>
<!-- pull menu -->
<script type=\"text/javascript\" src=\"";
        // line 307
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/classie.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 308
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/hamburger-menu.js\"></script>
<!-- counter  -->
<script type=\"text/javascript\" src=\"";
        // line 310
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/counter.js\"></script>
<!-- fit video  -->
<script type=\"text/javascript\" src=\"";
        // line 312
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/jquery.fitvids.js\"></script>
<!-- skill bars  -->
<script type=\"text/javascript\" src=\"";
        // line 314
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/skill.bars.jquery.js\"></script>
<!-- justified gallery  -->
<script type=\"text/javascript\" src=\"";
        // line 316
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/justified-gallery.min.js\"></script>
<!--pie chart-->
<script type=\"text/javascript\" src=\"";
        // line 318
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/jquery.easypiechart.min.js\"></script>
<!-- retina -->
<script type=\"text/javascript\" src=\"";
        // line 320
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/retina.min.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 322
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/main.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 324
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/canvasjsnew.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 325
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "/themes/Assessment/js/classy/canvasjs.min.js\"></script>
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
         
          
      </script>";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/Assessment/templates/node--6.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 325,  424 => 324,  419 => 322,  414 => 320,  409 => 318,  404 => 316,  399 => 314,  394 => 312,  389 => 310,  384 => 308,  380 => 307,  375 => 305,  370 => 303,  365 => 301,  360 => 299,  355 => 297,  350 => 295,  345 => 293,  340 => 291,  335 => 289,  331 => 288,  326 => 286,  322 => 285,  318 => 284,  314 => 283,  310 => 282,  306 => 281,  302 => 280,  267 => 248,  256 => 240,  252 => 239,  248 => 238,  244 => 237,  224 => 220,  166 => 165,  158 => 160,  151 => 156,  144 => 152,  132 => 143,  94 => 108,  90 => 107,  86 => 106,  82 => 105,  73 => 99,  67 => 96,  50 => 82,  46 => 81,  42 => 80,  40 => 76,  39 => 75,  38 => 74,  37 => 73,  36 => 72,  35 => 70,);
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
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}
{{ attach_library('bartik/classy.node') }}
<article{{ attributes.addClass(classes) }}>
  <div{{ content_attributes.addClass('node__content', 'clearfix') }}>

      
      
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <!-- start header here -->
<header>
\t<div
\t\tclass=\"left-nav\">

\t\t<!-- start logo -->

\t\t<div class=\"sidebar-part1 md-padding-10px-top md-padding-70px-left sm-padding-10px-top sm-padding-80px-left\">
\t\t<div class=\"col-lg-4 dx360d padding-10px-left\">
\t\t\t<a href=\"{{ url('<front>') }}\" title=\"Konica Minolta\" class=\"\">

\t\t\t<img src=\"../../themes/Assessment/images/dx360dgree.png\"></a>
\t\t\t<a href=\"{{ url('<front>') }}\" title=\"Konica Minolta\" class=\"\">

\t\t\t<img src=\"../../themes/Assessment/images/logo.svg\"></a>

</div>
\t\t\t<div class=\"right-top-menu col-lg-8\" style=\"padding: 1.5% 0% 1.5% 3%;\">
\t\t\t\t<a href=\"{{ url('<front>') }}#benefits-section\" title=\"Benefits\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\" style=\"text-align: end;\">Benefits</a>
\t\t\t\t<a href=\"{{ url('<front>') }}#rethink-work\" title=\"Rethink Work\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\" style=\"text-align: center;\">Rethink Work</a>
\t\t\t\t<a href=\"{{ url('<front>') }}#trusted-advisor\" title=\"Your Trusted Advisor\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\">Your Trusted Advisor</a>
\t\t\t\t<a href=\"{{ url('<front>') }}#book-appointment\" title=\"Talk With An Expert\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\">Talk With An Expert</a>
\t\t\t</div>
\t\t</div>


\t\t<!-- end logo -->


\t\t<div class=\"bottom-menu-icon  right-menu-button text-extra-dark-gray nav-icon \">
\t\t\t<a href=\"javascript:void(0);\" class=\" opneside active\" id=\"showRightPush\">
\t\t\t\t<span></span>
\t\t\t\t<span></span>
\t\t\t\t<span></span>
\t\t\t\t<span></span>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"sidenew\">
\t\t\t<div class=\"sidendat\">
\t\t\t\t<div class=\"sideHEad\">
\t\t\t\t\t<h2>DX360° Assessment</h2>
\t\t\t\t\t<button class=\"btnclose\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"right-menu-button text-extra-dark-gray nav-icon active\" id=\"showRightPush\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</button>

\t\t\t\t</div>
\t\t\t\t<div class=\"MidData\">

\t\t\t\t\t<div class=\"Sidemenus\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"hasmenu\">
\t\t\t\t\t\t\t\t<a href=\"{{ url('<front>') }}\" class=\"defaultcolors\">DX360° HomePage<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://dx360.konicaminolta.co.uk/productivity-and-collaboration\" class=\"hasmenu produccolor\">PRODUCTIVITY & COLLABORATION<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ url('<front>') }}security-and-compliance\" class=\"hasmenu sectcolor\">SECURITY & COMPLIANCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ url('<front>') }}mobility\" class=\"hasmenu mobilitycolor\">MOBILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ url('<front>') }}flexibility-efficiency-and-sustainability\" class=\"hasmenu flexibilitycolor\">FLEXIBILITY, EFFICIENCY &
\t\t\t\t\t\t\t\t\t<br>SUSTAINABILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ url('<front>') }}analytics-and-intelligence\" class=\"hasmenu analyticescolor\">ANALYTICS & INTELLIGENCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Sidemenus blubars secndcolrsec\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\" https://www.konicaminolta.co.uk\" class=\"\">konica minolta homepage <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.konicaminolta.co.uk/en-gb/it-services\">it services<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\" https://www.konicaminolta.co.uk/en-gb/innovation\">innovation<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.konicaminolta.co.uk/en-gb/office-printing\">office printing<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\" https://www.konicaminolta.co.uk/en-gb/professional-printing\">professional printing<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.konicaminolta.co.uk/en-gb/customer-support/faqs\">support & faqs<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"Socialbar\">

\t\t\t\t\t<div class=\"sobar\">

\t\t\t\t\t\t<h2>Follow Us :</h2>
\t\t\t\t\t\t <ul>
                  <li><a href=\"https://www.facebook.com/KonicaMinoltaBusinessSolutionsUKLtd/\"><i class=\"fa fa-facebook\"></i></a></li>
                  <li><a href=\"https://www.linkedin.com/company/konica-minolta-business-solutions-uk-ltd/\"><i class=\"fa fa-linkedin\"></i></a></li>
                  <li><a href=\"https://twitter.com/konicaminoltaGB\"><i class=\"fa fa-twitter\"></i></a></li>
                  <li><a href=\"https://www.youtube.com/user/konicaminoltatv\"><i class=\"fa fa-youtube-play\"></i></a></li>
                  <li><a href=\"https://www.instagram.com/Konica_minolta_uk/\"><i class=\"fa fa-instagram\"></i></a></li>
                  </ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"serchover\"></div></body></div></header><!-- end header --><!-- start blog slider section -->


    <!-- end header  -->
<section class=\"pagenots\">
  <div class=\"container\" style=\"color: #000;font-size: 100px;\">
      4<img src=\"../../themes/Assessment/images/logo_broken.png\">4

<br>
<p class=\"patps\">The page you’re looking for couldn’t be found.

</p>



<p class=\"lasts\"><i>Digital maturity is a journey not a destination.
</i></p>

<p class=\"lasts\">Return to the DX360° Assessment&nbsp;<a href=\"{{ url('<front>') }}\">Homepage</a></p>


      </div>
    </section>

 
<!--- footer start here ---->
<footer class=\"footer-standard-dark bg-dark-footer\" id=\"footer\">
  <div class=\"footer-widget-area padding-20px-tb sm-padding-30px-tb padding-30px-btm\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-6 widget sm-text-center\">

          <!-- start social media -->
          <div class=\"social-icon-style-8 d-inline-block vertical-align-middle\">
            <ul class=\"small-icon no-margin-bottom\">
              <li> <a class=\"facebook text-white-2\" href=\"https://www.facebook.com/\" target=\"_blank\"><img src=\"{{base_url}}/themes/Assessment/images/fb-rethink.svg\" alt=\"Facebook logo\"></a> </li>
              <li><a class=\"linkedin text-white-2\" href=\"https://linkedin.com/\" target=\"_blank\"><img src=\"{{base_url}}/themes/Assessment/images/linkedin-rethink.svg\" alt=\"Linkedin logo\"></a></li>
              <li><a class=\"twitter text-white-2\" href=\"https://twitter.com/\" target=\"_blank\"><img src=\"{{base_url}}/themes/Assessment/images/twitter-rethink.svg\" alt=\"Twitter logo\"></a></li>
              <li><a class=\"youtube text-white-2\" href=\"https://youtube.com/\" target=\"_blank\"><img src=\"{{base_url}}/themes/Assessment/images/youtube-rethink.svg\" alt=\"Youtube logo\"></a></li>
            </ul>
          </div>
          <!-- end social media -->
        </div>

        <!-- start text image -->
        <div class=\"col-lg-6 col-md-6 widget md-padding-15px-left text-md-right text-center padding-5px-top\">
          <img src=\"{{base_url}}/themes/Assessment/images/gsti_text.svg\" alt=\"\">
        </div>
        <!-- end text image -->
      </div>
    </div>
  </div>
  <div class=\"border-top border-color-medium-dark-gray margin-60px-lr padding-16px-top\">

    <div class=\"bg-dark-footer padding-20px-bottom text-center sm-padding-30px-tb\">
      <div class=\"container padding-0\">
        <div class=\"row\">
          <!-- start copyright -->
          <div class=\"col-md-6 text-md-left text-small text-center text-medium-gray\">
          <a href=\"https://www.konicaminolta.co.uk/en-gb/terms-of-use\" target=\"_blank\" class=\"text-extra-light-gray footer-links\">Term of Use</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href=\"https://dx360.konicaminolta.co.uk/sites/default/files/DX360Assessment-PrivacyPolicy-Website-v1-0.pdf\" target=\"_blank\" class=\"text-extra-light-gray footer-links\">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href=\"https://dx360.konicaminolta.co.uk/sitemap\" class=\"text-extra-light-gray footer-links\">Sitemap</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href=\"https://www.konicaminolta.co.uk/en-gb/imprint\" target=\"_blank\" class=\"text-extra-light-gray footer-links\">Imprint</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t  <a href=\"javascript:void(0);\" class=\"text-extra-light-gray footer-links cookies\">Cookie Settings</a></div>
          <div class=\"col-md-6 text-md-right text-small text-center text-extra-light-gray sm-padding-30px-top\"> © 2021 Konica Minolta Business Solutions (UK) Limited.
          </div>
          <!-- end copyright -->
        </div>
      </div>
    </div>
</div></footer>
<!---  footer end here -->
<!-- flexibtys end -->


  </div>
<script id=\"usercentrics-cmp\" src=\"https://app.usercentrics.eu/browser-ui/latest/loader.js\" data-settings-id=\"TYs1T85gv\" async></script>

    <script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/jquery.js\"></script>
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/bootstrap.bundle.js\"></script>
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/jquery.easing.1.3.js\"></script>
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/skrollr.min.js\"></script>
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/smooth-scroll.js\"></script>
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/jquery.appear.js\"></script>
<!-- menu navigation -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/bootsnav.js\"></script>
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/jquery.nav.js\"></script>
<!-- animation -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/wow.min.js\"></script>
<!-- page scroll -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/page-scroll.js\"></script>
<!-- swiper carousel -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/swiper.min.js\"></script>
<!-- counter -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/jquery.count-to.js\"></script>
<!-- parallax -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/jquery.stellar.js\"></script>
<!-- magnific popup -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/jquery.magnific-popup.min.js\"></script>
<!-- portfolio with shorting tab -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/isotope.pkgd.min.js\"></script>
<!-- themes/Assessment/images loaded -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/imagesloaded.pkgd.min.js\"></script>
<!-- pull menu -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/classie.js\"></script>
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/hamburger-menu.js\"></script>
<!-- counter  -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/counter.js\"></script>
<!-- fit video  -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/jquery.fitvids.js\"></script>
<!-- skill bars  -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/skill.bars.jquery.js\"></script>
<!-- justified gallery  -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/justified-gallery.min.js\"></script>
<!--pie chart-->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/jquery.easypiechart.min.js\"></script>
<!-- retina -->
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/retina.min.js\"></script>

<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/main.js\"></script>

<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/canvasjsnew.js\"></script>
<script type=\"text/javascript\" src=\"{{base_url}}/themes/Assessment/js/classy/canvasjs.min.js\"></script>
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
         
          
      </script>", "themes/Assessment/templates/node--6.html.twig", "C:\\xampp\\htdocs\\new\\Konika360\\themes\\Assessment\\templates\\node--6.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 70];
        static $filters = ["clean_class" => 72, "escape" => 80];
        static $functions = ["attach_library" => 80, "url" => 96];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
                ['attach_library', 'url']
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
