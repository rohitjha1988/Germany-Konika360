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

/* themes/Assessment/templates/page--front.html.twig */
class __TwigTemplate_b96f087f1ea8bfdce175bbfbc5647cf93e50af67c85c7cde9e962c8572d567d7 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/Assessment/templates/page--front.html.twig"));

        // line 1
        echo " 
";
        // line 2
        echo " 
";
        // line 15
        echo "
";
        // line 32
        echo "
";
        // line 41
        echo "
<![endif]-->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"></head><body>
<!-- start header -->
<header>
\t<div
\t\tclass=\"left-nav\">

\t\t<!-- start logo -->

\t\t<div class=\"sidebar-part1 md-padding-10px-top md-padding-70px-left sm-padding-10px-top sm-padding-80px-left\">
\t\t\t<div class=\"col-lg-4 dx360d padding-10px-left\">
\t\t\t\t<a href=\"";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" title=\"Konica Minolta\" class=\"\">

\t\t\t\t\t<img src=\"/themes/Assessment/images/dx360dgree.png\"></a>
\t\t\t\t<a href=\"";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" title=\"Konica Minolta\" class=\"\">

\t\t\t\t\t<img src=\"/themes/Assessment/images/logo.svg\"></a>

\t\t\t</div>
\t\t\t<div class=\"right-top-menu col-lg-8\" style=\"padding: 1.5% 0% 1.5% 3%;\">
\t\t\t\t<a href=\"#benefits-section\" title=\"Benefits\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\" style=\"text-align: end;\">Benefits</a>
\t\t\t\t<a href=\"#rethink-work\" title=\"Rethink Work\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\" style=\"text-align: center;\">Rethink Work</a>
\t\t\t\t<a href=\"#trusted-advisor\" title=\"Your Trusted Advisor\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\">Your Trusted Advisor</a>
\t\t\t\t<a href=\"#book-appointment\" title=\"Talk With An Expert\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\">Talk With An Expert</a>
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
\t\t\t\t<div class=\"sideHEad mainhomesh\">
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
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"defaultcolors\">DX360° HomePage<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://dx360.konicaminolta.co.uk/productivity-and-collaboration\" class=\"hasmenu produccolor\">PRODUCTIVITY & COLLABORATION<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/security-and-compliance\" class=\"hasmenu sectcolor\">SECURITY & COMPLIANCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/mobility\" class=\"hasmenu mobilitycolor\">MOBILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/flexibility-efficiency-and-sustainability\" class=\"hasmenu flexibilitycolor\">FLEXIBILITY, EFFICIENCY &
\t\t\t\t\t\t\t\t\t<br>SUSTAINABILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/analytics-and-intelligence\" class=\"hasmenu analyticescolor\">ANALYTICS & INTELLIGENCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Sidemenus blubars secndcolrsec\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\" https://www.konicaminolta.co.uk\" class=\"\">konica minolta homepage<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.konicaminolta.co.uk/en-gb/it-services\">it services<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\" https://www.konicaminolta.co.uk/en-gb/innovation\">innovation<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.konicaminolta.co.uk/en-gb/office-printing\">office printing<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\" https://www.konicaminolta.co.uk/en-gb/professional-printing\">professional printing<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.konicaminolta.co.uk/en-gb/customer-support/faqs\">support & faqs<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>


\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"Socialbar\">

\t\t\t\t\t<div class=\"sobar\">

\t\t\t\t\t\t<h2>Follow Us :</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/KonicaMinoltaBusinessSolutionsUKLtd/\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/company/konica-minolta-business-solutions-uk-ltd/\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/konicaminoltaGB\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.youtube.com/user/konicaminoltatv\"><i class=\"fa fa-youtube-play\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.instagram.com/Konica_minolta_uk/\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"serchover\"></div>
\t</body>
</div></body></header><!-- end header --><!-- start blog slider section --><section class=\"wow fadeIn main-slider mobile-height top-space overflow-visible no-padding\"><div class=\"swiper-container w-100\">
<div
\tclass=\"swiper-wrapper\">
\t<!-- start slider item -->
\t<div class=\"swiper-slide cover-background\" style=\"background-image:url('themes/Assessment/images/homepage-slider.jpg');\">
        <span  role=\"img\" aria-label=\"businessperson looking into the digital future \"> </span>
\t\t<div class=\"container position-relative fit-on-screen sm-height-400px\">
\t\t\t<div class=\"slider-typography\">
\t\t\t\t<div class=\"slider-text-middle-main\">
\t\t\t\t\t<div class=\"slider-text-middle\">
\t\t\t\t\t\t<div class=\"col-12 col-lg-6 col-md-8 slide-content\">
\t\t\t\t\t\t\t<div class=\"padding-40px-all sm-padding-30px-all bgd-white-opacity\">
\t\t\t\t\t\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">WHAT DOES DIGITAL TRANSFORMATION (DX)
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tLOOK LIKE FOR YOUR BUSINESS?
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<span class=\"text-pink text-large text-uppercase font-weight-700 margin-20px-bottom d-inline-block\">TAKE OUR SHORT
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tDX360&#176
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\tDIGITAL MATURITY ASSESSMENT
\t\t\t\t\t\t\t\t\t</strong><br>
\t\t\t\t\t\t\t\t\tTO FIND OUT
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<a class=\"btn btn-large btn-blue btn-rounded newcta js-anchor-link\" href=\"#pie-chart\">START THE ASSESSMENT
\t\t\t\t\t\t\t\t\t<i class=\"ti-angle-right font-weight-600\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end slider item -->
<!-- start slider item -->
\t<!-- <div class=\"swiper-slide cover-background\" style=\"background-image:url('themes/Assessment/images/blog-slider-img6.jpg')\">
\t\t\t\t          <div class=\"opacity-extra-medium bg-extra-dark-gray\"></div>
\t\t\t\t          <div class=\"container position-relative one-fourth-screen sm-height-400px\">
\t\t\t\t              <div class=\"slider-typography text-center\">
\t\t\t\t                  <div class=\"slider-text-middle-main\">
\t\t\t\t                      <div class=\"slider-text-middle\">
\t\t\t\t                          <div class=\"col-12 col-lg-6 col-md-8 mx-auto slide-content\">
\t\t\t\t                              <div class=\"padding-50px-all sm-padding-30px-all bg-black-opacity\">
\t\t\t\t                                  <a href=\"blog-grid.html\" class=\"text-medium-gray text-extra-small text-uppercase alt-font font-weight-600 margin-10px-bottom d-inline-block\">Branding and Identity</a>
\t\t\t\t                                  <h4><a href=\"blog-post-layout-02.html\" class=\"font-weight-600 text-white-2 alt-font\">Young pretty girl posing in the street</a></h4>
\t\t\t\t                                  <a class=\"btn btn-very-small btn-transparent-white\" href=\"blog-post-layout-02.html\">Continue Reading</a>
\t\t\t\t                              </div>
\t\t\t\t                          </div>
\t\t\t\t                      </div>
\t\t\t\t                  </div>
\t\t\t\t              </div>
\t\t\t\t          </div>
\t\t\t\t      </div>-->
\t<!-- end slider item -->
\t<!-- start slider item -->
\t<!--<div class=\"swiper-slide cover-background\" style=\"background-image:url('themes/Assessment/images/blog-slider-img7.jpg')\">
\t\t\t\t          <div class=\"opacity-extra-medium bg-extra-dark-gray\"></div>
\t\t\t\t          <div class=\"container position-relative one-fourth-screen sm-height-400px\">
\t\t\t\t              <div class=\"slider-typography text-center\">
\t\t\t\t                  <div class=\"slider-text-middle-main\">
\t\t\t\t                      <div class=\"slider-text-middle\">
\t\t\t\t                          <div class=\"col-12 col-lg-6 col-md-8 mx-auto slide-content\">
\t\t\t\t                              <div class=\"padding-50px-all sm-padding-30px-all bg-black-opacity\">
\t\t\t\t                                  <a href=\"blog-grid.html\" class=\"text-medium-gray text-extra-small text-uppercase alt-font font-weight-600 margin-10px-bottom d-inline-block\">Branding and Identity</a>
\t\t\t\t                                  <h4><a href=\"blog-post-layout-03.html\" class=\"font-weight-600 text-white-2 alt-font\">Do one thing every day that scares you</a></h4>
\t\t\t\t                                  <a class=\"btn btn-very-small btn-transparent-white\" href=\"blog-post-layout-03.html\">Continue Reading</a>
\t\t\t\t                              </div>
\t\t\t\t                          </div>
\t\t\t\t                      </div>
\t\t\t\t                  </div>
\t\t\t\t              </div>
\t\t\t\t          </div>
\t\t\t\t      </div> -->
\t<!-- end slider item -->
</div></div></div></section><!-- end slider section --><!-- Start Pie Chart Section --><section class=\"wow fadeIn no-padding margin-30px-tb sm-margin-70px-top ptopssd\" style=\"visibility: visible; animation-name: fadeIn;\"><div class=\"container\"><div class=\"row align-items-center\">
<div class=\"col-12 col-lg-6 wow fadeInRight last-paragraph-no-margin text-lg-left sm-padding-15px-lr text-center\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;\">
\t<div class=\"anchor\"></div>


\t<div class='mydiv' id='other' style=\"display: block;\">
\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t<span class=\"font-weight-700 text-blue text-uppercase\">KONICA MINOLTA'S DX360° DIGITAL MATURITY ASSESSMENT
\t\t\t\t</span>
\t\t\t</h6>
\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">
\t\t\t\tWith our free online DX360&#176 Digital Maturity Assessment, find out if you have the tools and procedures in place to enhance your digital transformation strategy and grow your business whilst boosting its resilience in a digital-first economy.</div>

\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">This assessment has 25 questions, split by 5 categories and it should take less than 10 minutes. Once completed, you will instantly receive a customised report to your email with recommendations on how to improve your digital maturity model score.</div>


\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">Every corner of our world is digitised, it's becoming easier for organisations to connect with customers, partners, and employees. Technology has gone from a supporting role to centre stage:  drastically affecting areas like productivity, collaboration, connection, and customer engagement. As it becomes more powerful and prevalent, however, the path forward is becoming more complex.</div>
\t\t\t<p class=\"margin-20px-bottom text-center\">
\t\t\t\t<span class=\"font-weight-700 text-blue  tostarts\">To start the assessment, select one of the strategic areas
\t\t\t\t\t<br>of digital transformation from the DX360&#176 pie chart.</span>

\t\t\t</p>


\t\t</div>
\t</div>


\t<div class='mydiv' id='mobility'>
\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t<span class=\"font-weight-700 text-piink text-uppercase\">Mobility</span>
\t\t\t</h6>
\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">
\t\t\t\tWith an increasingly distributed workforce, remote and hybrid working are here to stay. Businesses must consider how to support mobile working environments for the long-term. This means ensuring agile teams can flexibly scale up on a project-to-project basis and access work apps and data from anywhere.

\t\t\t\t<br><br>Understand how to gain a competitive edge by being more responsive, accessible, and be able to work whenever, and wherever.
\t\t\t</div>


\t\t</div>
\t</div>


\t<div class='mydiv' id='flexibility'>
\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t<span class=\"font-weight-700 text-violet text-uppercase\">FLEXIBILITY, EFFICIENCY
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                &amp; SUSTAINABILITY</span>
\t\t\t</h6>
\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">
\t\t\t\tIncreasing customer demands, rapid changes of market conditions and cost as well as resource reduction requests, drive all of us to find new ways to scale operations to different needs and meet changing demands with agility and efficiency while reducing an organisations´ physical footprint and wastage.
\t\t\t\t<br><br>Understand the flexibility and efficiency of your solutions and your drive towards a sustainable business.
\t\t\t</div>


\t\t</div>
\t</div>
\t<div class='mydiv' id='security'>
\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t<span class=\"font-weight-700 text-cyan text-uppercase\">Security &amp; Compliance
\t\t\t\t</span>
\t\t\t</h6>
\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">
\t\t\t\tYour cybersecurity posture has never been more important.  While business demands have driven IT leaders to focus on collaboration and digital transformation, it’s important to remember that none of those innovations matter if you can’t keep your business information secure.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                         When it comes to information security, organisations require knowledge, skills, tools, and experience across multiple platforms and disciplines to stay safe.
\t\t\t\t<br><br>Understand how information management and the workforce should work in harmony to ensure data security and compliance.
\t\t\t</div>


\t\t</div>
\t</div>
\t<div class='mydiv' id='productivity'>
\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t<span class=\"font-weight-700 text-yellow text-uppercase\">Productivity &amp; Collaboration
\t\t\t\t</span>
\t\t\t</h6>
\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">
\t\t\t\tThe way we work has changed dramatically in the past few years. Our environment changes just like our behavior. With new challenges, we have to think about how we want to collaborate in the future. How do we work across national borders? How do we manage to work together in the future despite pandemics or natural disasters? The Productivity & Collaboration section is dedicated to this question so that we can find new ways together to achieve more.
\t\t\t\t<br><br>Understand how your people and teams use technology to interact, communicate, and collaborate with each other and with your customers.
\t\t\t</div>


\t\t</div>
\t</div>
\t<div class='mydiv' id='analytics'>
\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t<span class=\"font-weight-700 text-blue text-uppercase\">Analytics &amp; Intelligence
\t\t\t\t</span>
\t\t\t</h6>
\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">
\t\t\t\tThe true measure of being data-driven is how well you understand insights, and take appropriate action when needed.  A good technology data-driven strategy for your business is not just about buying the right tools, it’s about making sure your systems are accessible whenever and wherever your team needs them to get the job done… and when your customers need you. Real digital maturity is all about being analytical, resilient and intelligent in your business decisions and enablement.
\t\t\t\t<br><br>Understand how to visualise trends and insights about your business and make predictions to enable growth.</div>


\t\t</div>
\t</div>
</div>
<div class=\"col-12 col-lg-6 text-center wow fadeInLeft\" style=\"visibility: visible; animation-name: fadeInLeft;\">
\t<div class=\"anchor\" id=\"pie-chart\"></div>
\t<div class=\"bg-white float-right width-70px height-80px position-relative z-index-2\" style=\"top: 440px;\"></div>

\t<div class=\"pie-chart-holder\">
\t\t<div id=\"chartContainer\" style=\"height: 500px; width: 100%;\"></div>
\t\t<a class=\"chart-btn-1\" href=\"flexibility-efficiency-and-sustainability\">Start Now</a>
\t\t<a class=\"chart-btn-2\" href=\"analytics-and-intelligence\">Start Now</a>
\t\t<a class=\"chart-btn-3\" href=\"mobility\">Start Now</a>
\t\t<a class=\"chart-btn-4\" href=\"security-and-compliance\">Start Now</a>
\t\t<a class=\"chart-btn-5\" href=\"productivity-and-collaboration\">Start Now</a>

\t</div>


</div></div></div><div id=\"benefits-section\"></div></section><!-- End Pie Chart Section --><!-- start benefits section --><section class=\"wow fadeIn bg-light-gray\"><div class=\"container\"><div class=\"row justify-content-center\">
<div class=\"col-12 col-lg-8 col-md-11 text-center wow fadeInUp margin-four-bottom\">
\t<h6 class=\"margin-20px-bottom\">
\t\t<span class=\"font-weight-700 text-blue alt-font\">THE BENEFITS OF BEING DIGITALLY MATURE
\t\t</span>
\t</h6>
</div></div><divclass=\"row\"><!-- start features box item --><div class=\"col-12 col-md-4 sm-margin-30px-bottom wow fadeInUp\">
\t<div
\t\tclass=\"bg-white text-center box-shadow\">
\t\t<!-- start rotate box item -->
\t\t<div class=\"card-container\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"front\">
\t\t\t\t\t<div class=\"card-front-back\">
\t\t\t\t\t\t<img src=\"themes/Assessment/images/efficiency_img_f.jpg\" alt=\"businessperson reviewing the company’s efficiency on a chart\">
\t\t\t\t\t\t<div class=\"descrip\">
\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">Efficiency</span>
\t\t\t\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">
\t\t\t\t\t\t\t\t<p>40% improvement in operational efficiency</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"back\">
\t\t\t\t\t<div class=\"card-front-back\">
\t\t\t\t\t\t<div class=\"descrip\">
\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">Efficiency</span>
\t\t\t\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">
\t\t\t\t\t\t\t\t<p>Digital maturity supports companies with faster and streamlined processes, increasing their efficiency while decreasing their errors and waste.</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"themes/Assessment/images/efficiency_img_b.jpg\" alt=\"accessing the entire world digitally on your phone\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end rotate box item -->
\t</div>
</div><!-- end feature box item --><!-- start features box item --><div class=\"col-12 col-md-4 sm-margin-30px-bottom wow fadeInUp\">
\t<div
\t\tclass=\"bg-white text-center box-shadow\">
\t\t<!-- start rotate box item -->
\t\t<div class=\"card-container\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"front\">
\t\t\t\t\t<div class=\"card-front-back\">
\t\t\t\t\t\t<img src=\"themes/Assessment/images/user-experience_img_f.jpg\" alt=\"person rates an application on their phone\">
\t\t\t\t\t\t<div class=\"descrip\">
\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">User Experience</span>
\t\t\t\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">
\t\t\t\t\t\t\t\t<p>35% increase in customer experience</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"back\">
\t\t\t\t\t<div class=\"card-front-back\">
\t\t\t\t\t\t<div class=\"descrip\">
\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">User Experience</span>
\t\t\t\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">
\t\t\t\t\t\t\t\t<p>Digital maturity enhances a user friendly, seamless experience through the whole customer journey.<br><br></p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"themes/Assessment/images/user-experience_img_b.jpg\" alt=\" \tgroup working together for usability-friendly application design\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end rotate box item -->
\t</div>
</div><!-- end feature box item --><!-- start features box item --><div class=\"col-12 col-md-4 sm-margin-30px-bottom wow fadeInUp\">
\t<div
\t\tclass=\"bg-white text-center box-shadow\">
\t\t<!-- start rotate box item -->
\t\t<div class=\"card-container\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"front\">
\t\t\t\t\t<div class=\"card-front-back\">
\t\t\t\t\t\t<img src=\"themes/Assessment/images/stay-ahead_img_f.jpg\" alt=\"person sitting at the laptop checking company figures \">
\t\t\t\t\t\t<div class=\"descrip\">
\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">Stay Ahead</span>
\t\t\t\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">
\t\t\t\t\t\t\t\t<p>36% faster time to market</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"back\">
\t\t\t\t\t<div class=\"card-front-back\">
\t\t\t\t\t\t<div class=\"descrip\">
\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">Stay Ahead</span>
\t\t\t\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">
\t\t\t\t\t\t\t\t<p>Digital maturity enables companies to launch innovations in a much shorter time, thereby, generating new revenue.</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"themes/Assessment/images/stay-ahead_img_b.jpg\" alt=\"holding the whole digital world in your hands\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end rotate box item -->
\t</div>
</div><!-- end feature box item --></div></div></section><!-- end benefits section --><div id=\"rethink-work\"></div><!-- start slider section --><section class=\"p-0 main-slider mobile-height wow fadeIn\"><div class=\"swiper-full-screen swiper-container h-100 w-100 white-move\"><div
class=\"swiper-wrapper\">
<!-- start slider item -->
<div class=\"swiper-slide\">
\t<div class=\"row m-0 justify-content-center\">
\t\t<div class=\"col-12 col-md-6 cover-background height-400px sm-height-300px margin-50px-tb sm-no-margin\" style=\"background-image:url('themes/Assessment/images/slider_01.jpg');\">   <span  role=\"img\" aria-label=\"business meeting to rethink the world of work \"> </span></div>
\t\t<div class=\"col-12 col-md-5 d-flex align-items-center height-400px sm-height-250px\">
\t\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">RETHINKING THE WORLD OF WORK
\t\t\t\t\t</span>
\t\t\t\t</h6>
\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">With technological, social, environmental and generational shifts, ‘work’ can no longer be defined as a physical space one goes from 9 to 5. Instead, work is anywhere, anytime.</span>
\t\t\t</div>
\t\t</div>

\t</div>
</div>
<!-- end slider item -->
<!-- start slider item -->
<div class=\"swiper-slide\">
\t<div class=\"row m-0 justify-content-center\">
\t\t<div class=\"col-12 col-md-6 cover-background height-400px sm-height-300px margin-50px-tb sm-no-margin\" style=\"background-image:url('themes/Assessment/images/slider_02.jpg');\"><span  role=\"img\" aria-label=\"businesspeople sitting together at their laptops and discussing new business ideas  \"> </span></div>
\t\t<div class=\"col-12 col-md-5 d-flex align-items-center height-400px sm-height-250px\">
\t\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">Manage changes in business
\t\t\t\t\t</span>
\t\t\t\t</h6>
\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">With models of remote and hybrid working here to stay, businesses must consider how to support mobile working environments. This means ensuring agile teams can flexibly scale up on a project-to-project basis, utilising data to optimise decision making.</span>
\t\t\t</div>
\t\t</div>

\t</div>
</div>
<!-- end slider item -->
<!-- start slider item -->
<div class=\"swiper-slide\">
\t<div class=\"row m-0 justify-content-center\">
\t\t<div class=\"col-12 col-md-6 cover-background height-400px sm-height-300px margin-50px-tb sm-no-margin\" style=\"background-image:url('themes/Assessment/images/slider_03.jpg');\"><span  role=\"img\" aria-label=\"virtual team having a video call  \"> </span></div>
\t\t<div class=\"col-12 col-md-5 d-flex align-items-center height-400px sm-height-250px\">
\t\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">EMBRACING DIGITAL</span>
\t\t\t\t</h6>
\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">This changing world of work, however, brings with it risks and opportunities that need to be navigated.  Businesses like yours now need to look more closely at your digital maturity level, to ensure you can confidently and securely prepare for, and optimise, your ideal workplace of tomorrow.</span>
\t\t\t</div>
\t\t</div>

\t</div>
</div>
<!-- end slider item --></div><!-- start slider pagination --><div class=\"swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination d-none\"></div><div class=\"half-circle_r half-circle_sr swiper-button-next swiper-next-style1\"></div><div class=\"half-circle_l half-circle_sl swiper-button-prev swiper-next-style1 \"></div><!-- end slider pagination --><!-- end slider pagination --></div></section><!-- end slider section --><!-- start digital transformation section --><section class=\"wow fadeIn bg-light-blue\"><div class=\"container\"><div class=\"row justify-content-center\">
<div class=\"col-12 col-lg-8 col-md-11 text-center sm-margin-30px-bottom\">
\t<h6 class=\"margin-20px-bottom\">
\t\t<span class=\"font-weight-700 text-blue\">
\t\t\tDIGITAL BUSINESS TRANSFORMATION IS KEY TO FUTURE SUCCESS
\t\t</span>
\t</h6>
</div></div><divclass=\"row\"><!-- feature box item--><div class=\"col-12 col-md-6 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\">
\t<div class=\"feature-box\">
\t\t<div class=\"content sm-content\">

\t\t\t<div class=\"chart-style2 wow fadeInUp text-center md-margin-30px-bottom sm-margin-15px-bottom\">
\t\t\t\t<div class=\"chart-percent\">
\t\t\t\t\t<span class=\"chart2 text-blue\" data-percent=\"45\">
\t\t\t\t\t\t<span class=\"percent font-weight-600 text-extra-large\"></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<p class=\"width-85 mx-auto md-width-100 text-black\">
\t\t\t\tof executives don’t think their company has the right technology to implement a digital transformation<sup>1</sup>
\t\t\t</p>
\t\t\t<div class=\"text-large font-weight-700 text-capitalize text-blue margin-10px-bottom md-margin-5px-bottom\">Choose the right technology
\t\t\t</div>

\t\t</div>
\t</div>
</div><!-- end feature box item--><!-- feature box item--><div class=\"col-12 col-md-6 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\" data-wow-delay=\"0.2s\">
\t<div class=\"feature-box\">
\t\t<div class=\"content sm-content\">

\t\t\t<div class=\"chart-style2 wow fadeInUp text-center md-margin-30px-bottom sm-margin-15px-bottom\">
\t\t\t\t<div class=\"chart-percent\">
\t\t\t\t\t<span class=\"chart2 text-blue\" data-percent=\"87\">
\t\t\t\t\t\t<span class=\"percent font-weight-600 text-extra-large\"></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<p class=\"width-85 mx-auto md-width-100 text-black\">of companies think digital will disrupt their industry, but only 44% are prepared for potential digital disruption<sup>2</sup>
\t\t\t</p>
\t\t\t<div class=\"text-large font-weight-700 text-capitalize text-blue margin-10px-bottom md-margin-5px-bottom\">Be prepared for digital disruptions</div>

\t\t</div>
\t</div>
</div><!-- end feature box item--><!-- feature box item--><div class=\"col-12 col-md-6 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\" data-wow-delay=\"0.4s\">
\t<div class=\"feature-box\">
\t\t<div class=\"content sm-content\">

\t\t\t<div class=\"chart-style2 wow fadeInUp text-center md-margin-30px-bottom sm-margin-15px-bottom\">
\t\t\t\t<div class=\"chart-percent\">
\t\t\t\t\t<span class=\"chart2 text-blue\" data-percent=\"77\">
\t\t\t\t\t\t<span class=\"percent font-weight-600 text-extra-large\"></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<p class=\"width-85 mx-auto md-width-100 text-black\">
\t\t\t\tof companies are dependent on digital products or operations<sup>3</sup>
\t\t\t</p>
\t\t\t<div class=\"text-large font-weight-700 text-capitalize text-blue margin-10px-bottom md-margin-5px-bottom\">Digital or done
\t\t\t</div>

\t\t</div>
\t</div>
</div><!-- end feature box item--><!-- feature box item--><div class=\"col-12 col-md-6 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\" data-wow-delay=\"0.4s\">
\t<div class=\"feature-box\">
\t\t<div class=\"content sm-content\">

\t\t\t<div class=\"chart-style2 wow fadeInUp text-center md-margin-30px-bottom sm-margin-15px-bottom\">
\t\t\t\t<div class=\"chart-percent\">
\t\t\t\t\t<span class=\"chart2 text-blue\" data-percent=\"70\">
\t\t\t\t\t\t<span class=\"percent font-weight-600 text-extra-large\"></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<p class=\"width-85 mx-auto md-width-100 text-black\">Intelligent systems will drive on your customer engagements by 2022<sup>4</sup>
\t\t\t</p>
\t\t\t<div class=\"text-large font-weight-700 text-capitalize text-blue margin-10px-bottom md-margin-5px-bottom\">Accelerate Digital Interaction
\t\t\t</div>

\t\t</div>
\t</div>
</div><!-- end feature box item--><div class=\"col-lg-12\">
\t<a class=\"modal-popup wow fadeInUp\" href=\"#modal-popup\">
\t\t<sup>*</sup>Sources
\t</a>
</div></div></div></section><!-- end digital transformation section --><!-- start clients logo section --><div id=\"trusted-advisor\"></div><br><br><section><div class=\"container\"><div class=\"row justify-content-center\">
<div class=\"col-12 col-lg-12 col-md-10 margin-five-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin\">
\t<h6 class=\"margin-20px-bottom\">
\t\t<span class=\"font-weight-700 text-blue\">YOUR TRUSTED ADVISOR FOR DIGITAL INNOVATION
\t\t</span>
\t</h6>
\t<p>We work hard to innovate and deliver quality products and services that help our customers pursue their digital agendas. Our dedication to providing our customers with exceptional experiences is proven with over 75 awards and certifications, recognising our efforts in digital transformation and digital transformation consulting. This is further enhanced by our collaboration with recognised global partners.</p>
</div></div><div class=\"container-fluid\">
<div class=\"yta\">
\t<ul class=\"wow fadeIn\" style=\"visibility: visible; animation-name: fadeIn;\">
\t\t<li><img src=\"themes/Assessment/images/top_employer_united_kingdom_2021.png\" alt=\"UK Top Employer 2020 logo \"/></li>
\t\t<li><img src=\"themes/Assessment/images/smart-workplace-vision.png\" alt=\"Smart workplace vision logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/iso_20000-1.png\" alt=\"ISO 27001 certification logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/iso-27001.png\" alt=\"ISO QMS certification logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/comptia-logo.png\" alt=\"Comptia certification logo\"/></li>
\t</ul>
\t<ul class=\"wow fadeIn\" style=\"visibility: visible; animation-name: fadeIn;\">
\t\t<li><img src=\"themes/Assessment/images/servicenow-logo.png\" alt=\"ServiceNow partnership logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/microsoft_partner.png\" alt=\"Microsoft gold partnership logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/itil.png\" alt=\"ITIL certification logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/prince2.png\" alt=\"PRINCE2 certification logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/iso_20000-1-full.png\" alt=\"Cyber Essentials certification logo\"/></li>
\t</ul>
</div></div></div></div></section><!-- end clients logo section --><!-- start business section --><section class=\"wow fadeIn no-padding-bottom business-section\" style=\"visibility: visible; animation-name: fadeIn;\"><div class=\"container\"><div class=\"row align-items-center padding-80px-btm\"><div class=\"col-12 col-lg-6 wow fadeInRight last-paragraph-no-margin padding-eight-lr text-lg-left sm-padding-15px-lr text-center minheauto\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;\">
<h6 class=\"margin-20px-bottom\">
\t<span class=\"font-weight-700 text-blue alt-font\">READY TO SEE<br>
\t\tHOW YOUR BUSINESS
\t\t<br>
\t\tREALLY SHAPES UP?
\t</span>
</h6>
<a class=\"btn btn-large btn-blue btn-rounded newcta margin-30px-bottom js-anchor-link\" href=\"#pie-chart\">START THE ASSESSMENT
\t<i class=\"ti-angle-right font-weight-600\"></i>
</a>
<div
\tclass=\"text-blue margin-50px-top position-absolute top-220\">


\t<!-- start modal pop-up -->
\t<div
\t\tid=\"modal-popup\" class=\"border-radius-10 height-200px white-popup-block mfp-hide col-xl-8 col-lg-6 col-md-8 col-11 mx-auto bg-white modal-popup-main padding-50px-top md-padding-30px-all sm-padding-20px-all float-none border-color-pop\">

\t\t<!-- <h6 class=\"text-blue text-uppercase text-extra-large font-weight-700 margin-20px-bottom d-block\">Sources</h6> -->
\t\t<ul class=\"padding-30px-lr text-blue\">
\t\t\t<li class=\"margin-5px-bottom padding-10px-lr\">
\t\t\t\t<a href=\"https://www.pwc.com/gx/en/advisory-services/digital-iq-survey-2015/campaign-site/digital-iq-survey-2015.pdf\" target=\"_blank\">
\t\t\t\t\t<sup>1</sup>
\t\t\t\t\tGlobal Digital IQ Survey 2015.</a>
\t\t\t</li>

\t\t\t<li class=\"margin-5px-bottom padding-10px-lr\">
\t\t\t\t<a href=\"https://www.siliconrepublic.com/business/deloitte-leadership-digital-disruption-infographic\" target=\"_blank\">
\t\t\t\t\t<sup>2</sup>
\t\t\t\t\tDeloitte Leadership Digital Disruption Infographic.</a>
\t\t\t</li>

\t\t\t<li class=\"margin-5px-bottom padding-10px-lr\">
\t\t\t\t<a href=\"https://futurumresearch.com/key-stats-2018-digital-transformation-index/\" target=\"_blank\">
\t\t\t\t\t<sup>3</sup>
\t\t\t\t\tKey Stats From The 2018 Digital Transformation Index.</a>
\t\t\t</li>

\t\t\t<li class=\"margin-5px-bottom padding-10px-lr\">
\t\t\t\t<a href=\"https://www.gartner.com/smarterwithgartner/top-cx-trends-for-cios-to-watch/\" target=\"_blank\">
\t\t\t\t\t<sup>4</sup>
\t\t\t\t\tTop CX Trends for CIOs to Watch.</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<!-- end modal pop-up -->
</div></div><div class=\"col-12 col-lg-6 text-center wow fadeInLeft\" style=\"visibility: visible; animation-name: fadeInLeft;\"><img src=\"themes/Assessment/images/parallax-bg11.jpg\" alt=\"Group of businesspeople reviewing assessment results\" class=\"w-100\" data-no-retina=\"\"></div></div><div id=\"book-appointment\"></div></div></section><!-- end business section --><!--Start calendly section--><section><iframe src='https://outlook.office365.com/owa/calendar/KonicaMinolta2606884@konicaminolta.eu/bookings/' width='100%' scrolling='yes' style='height: 1200px; border:0'></iframe></section><!--End Calendly Section--><!-- start footer --><footer class=\"footer-standard-dark bg-dark-footer\" id=\"footer\"><div class=\"footer-widget-area padding-20px-tb sm-padding-30px-tb padding-30px-btm\"><div class=\"container\"><div class=\"row\">
<div
\tclass=\"col-lg-6 col-md-6 widget sm-text-center\"><!-- start social media <!-- <div class=\"social-icon-style-8 d-inline-block vertical-align-middle\">
\t\t\t\t\t\t\t\t\t<ul class=\"small-icon no-margin-bottom\">
\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t        <a class=\"facebook text-white-2\" href=\"https://www.facebook.com/KonicaMinoltaBusinessSolutionsUKLtd/\" target=\"_blank\"><img src=\"themes/Assessment/images/fb-rethink.svg\" alt=\"Facebook logo\" /></a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t        <a class=\"linkedin text-white-2\" href=\"https://www.linkedin.com/company/konica-minolta-business-solutions-uk-ltd/\" target=\"_blank\"><img src=\"themes/Assessment/images/linkedin-rethink.svg\" alt=\"Linkedin logo\" /></a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t        <a class=\"twitter text-white-2\" href=\"https://twitter.com/konicaminoltaGB\" target=\"_blank\"><img src=\"themes/Assessment/images/twitter-rethink.svg\" alt=\"Twitter logo\" /></a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t        <a class=\"youtube text-white-2\" href=\"https://www.youtube.com/user/konicaminoltatv\" target=\"_blank\"><img src=\"themes/Assessment/images/youtube-rethink.svg\" alt=\"Youtube logo\" /></a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t\t</ul>
\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end social media -->
</div><!-- start text image --><div class=\"col-lg-6 col-md-6 widget md-padding-15px-left text-md-right text-center padding-5px-top\">
\t<img src=\"themes/Assessment/images/gsti_text.svg\" alt=\"\"></div><!-- end text image --></div></div></div><div class=\"border-top border-color-medium-dark-gray margin-60px-lr padding-16px-top\"><div class=\"bg-dark-footer padding-20px-bottom text-center sm-padding-30px-tb\"><div class=\"container padding-0\">
<div
\tclass=\"row\">
\t<!-- start copyright -->
\t<div class=\"col-md-6 text-md-left text-small text-center text-medium-gray\">
\t\t<a href=\"https://www.konicaminolta.co.uk/en-gb/terms-of-use\" target=\"_blank\" class=\"text-extra-light-gray footer-links\">Term of Use</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t<a href=\"https://dx360.konicaminolta.co.uk/sites/default/files/DX360Assessment-PrivacyPolicy-Website-v1-0.pdf\" target=\"_blank\" class=\"text-extra-light-gray footer-links\">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t<a href=\"https://dx360.konicaminolta.co.uk/sitemap\" class=\"text-extra-light-gray footer-links\">Sitemap</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t<a href=\"https://www.konicaminolta.co.uk/en-gb/imprint\" target=\"_blank\" class=\"text-extra-light-gray footer-links\">Imprint</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t<a href=\"javascript:void(0);\" class=\"text-extra-light-gray footer-links cookies\">Cookie Settings</a>
\t\t<!-- \t<a href=\"http://51.143.140.155/drupal-8.9.16/user.html\" target=\"_blank\" class=\"text-extra-light-gray footer-links cookies\">Cookie Settings</a> -->
\t</div>
\t<div class=\"col-md-6 text-md-right text-small text-center text-extra-light-gray sm-padding-30px-top\">
\t\t&copy; 2021 Konica Minolta Business Solutions (UK) Limited.
\t</div>
\t<!-- end copyright -->
</div></div></div></footer><!-- end footer --><!-- scroll to top --><!-- <a class=\"scroll-top-arrow\" href=\"javascript:void(0);\" style=\"display:none\"><i class=\"ti-arrow-up\"></i></a>--><!-- end scroll to top  --><!-- javascript libraries -->





<script src=\"themes/Assessment/js/classy/jquery.min.js\"></script>
<script>

\$(document).ready(function(){ 
if (\$(window).width() < 960) {
    \$(\".card-container\").click(function(){
        \$(this).toggleClass(\"activenow\")
    })
}
 
});
</script>
<script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.js\"> 
</script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/modernizr.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/bootstrap.bundle.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.easing.1.3.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/skrollr.min.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/smooth-scroll.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.appear.js\"></script><!-- menu navigation --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/bootsnav.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.nav.js\"></script><!-- animation --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/wow.min.js\"></script><!-- page scroll --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/page-scroll.js\"></script><!-- swiper carousel --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/swiper.min.js\"></script><!-- counter --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.count-to.js\"></script><!-- parallax --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.stellar.js\"></script><!-- magnific popup --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.magnific-popup.min.js\"></script><!-- portfolio with shorting tab --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/isotope.pkgd.min.js\"></script><!-- themes/Assessment/images loaded --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/imagesloaded.pkgd.min.js\"></script><!-- pull menu --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/classie.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/hamburger-menu.js\"></script><!-- counter  --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/counter.js\"></script><!-- fit video  --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.fitvids.js\"></script><!-- skill bars  --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/skill.bars.jquery.js\"></script><!-- justified gallery  --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/justified-gallery.min.js\"></script><!--pie chart--><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.easypiechart.min.js\"></script><!-- retina --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/retina.min.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/main.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/canvasjsnew.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/canvasjs.min.js\"></script><script id=\"usercentrics-cmp\" src=\"https://app.usercentrics.eu/browser-ui/latest/loader.js\" data-settings-id=\"TYs1T85gv\" async></script>


<script>\$(\".hasmenu\").click(function () {
\$(\".hasmenu\").removeClass(\"active\");
\$(this).addClass(\"active\");

//          \$(\".submenus\").slideUp()
\$(this).find(\".Sidemenus\").show();
});
\$(\".opneside\").click(function () {
\$(\".sidendat,.serchover\").addClass(\"active\");
});
\$(\".btnclose\").click(function () {
\$(\".sidendat,.serchover\").removeClass(\"active\");
});</script>

</body></html>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/Assessment/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 56,  61 => 53,  47 => 41,  44 => 32,  41 => 15,  38 => 2,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#<!-- title -->#} 
{#<!-- title -->#} 
{#<title>Konica Minolta</title>#}
{#<meta charset=\"utf-8\">#}
{#<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />#}
{#<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,maximum-scale=1\" />#}
{#<meta name=\"author\" content=\"\">#}
{#<!-- description -->#}
{#<meta name=\"description\" content=\"\">#}
{#<!-- keywords -->#}
{#<meta name=\"keywords\" content=\"\">#}
{#<!-- favicon -->#}
{#<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"themes/Assessment/images/favicon.ico\">#}
{#<link rel=\"icon\" type=\"image/x-icon\" href=\"themes/Assessment/images/favicon.ico\">#}

{#<!-- animation -->#}
{#<link rel=\"stylesheet\" href=\"themes\\Assessment\\css/base/animate.css\" />#}
{#<!-- bootstrap -->#}
{#<link rel=\"stylesheet\" href=\"themes\\Assessment\\css/base/bootstrap.min.css\" />#}
{#<!-- et line icon -->#}
{#<link rel=\"stylesheet\" href=\"themes\\Assessment\\css/base/et-line-icons.css\" />#}
{#<!-- font-awesome icon -->#}
{#<link rel=\"stylesheet\" href=\"themes\\Assessment\\css/base/font-awesome.min.css\" />#}
{#<!-- themify icon -->#}
{#<link rel=\"stylesheet\" href=\"themes\\Assessment\\css/base/themify-icons.css\">#}
{#<!-- swiper carousel -->#}
{#<link rel=\"stylesheet\" href=\"themes\\Assessment\\css/base/swiper.min.css\">#}
{#<!-- justified gallery  -->#}
{#<link rel=\"stylesheet\" href=\"themes\\Assessment\\css/base/justified-gallery.min.css\">#}
{#<!-- magnific popup -->#}
{#<link rel=\"stylesheet\" href=\"themes\\Assessment\\css/base/magnific-popup.css\" />#}

{#<!-- bootsnav -->#}
{#<link rel=\"stylesheet\" href=\"themes\\Assessment\\css/base/bootsnav.css\">#}
{#<!-- style -->#}
{#<link rel=\"stylesheet\" href=\"themes\\Assessment\\css/base/style.css\" />#}
{#<!-- style card flip -->#}
{#<link rel=\"stylesheet\" href=\"themes\\Assessment\\css/base/style_card-flip.css\" />#}
{#<!-- responsive css -->#}
{#<link rel=\"stylesheet\" href=\"themes\\Assessment\\css/base/responsive.css\" />#}

<![endif]-->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"></head><body>
<!-- start header -->
<header>
\t<div
\t\tclass=\"left-nav\">

\t\t<!-- start logo -->

\t\t<div class=\"sidebar-part1 md-padding-10px-top md-padding-70px-left sm-padding-10px-top sm-padding-80px-left\">
\t\t\t<div class=\"col-lg-4 dx360d padding-10px-left\">
\t\t\t\t<a href=\"{{ url('<front>') }}\" title=\"Konica Minolta\" class=\"\">

\t\t\t\t\t<img src=\"/themes/Assessment/images/dx360dgree.png\"></a>
\t\t\t\t<a href=\"{{ url('<front>') }}\" title=\"Konica Minolta\" class=\"\">

\t\t\t\t\t<img src=\"/themes/Assessment/images/logo.svg\"></a>

\t\t\t</div>
\t\t\t<div class=\"right-top-menu col-lg-8\" style=\"padding: 1.5% 0% 1.5% 3%;\">
\t\t\t\t<a href=\"#benefits-section\" title=\"Benefits\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\" style=\"text-align: end;\">Benefits</a>
\t\t\t\t<a href=\"#rethink-work\" title=\"Rethink Work\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\" style=\"text-align: center;\">Rethink Work</a>
\t\t\t\t<a href=\"#trusted-advisor\" title=\"Your Trusted Advisor\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\">Your Trusted Advisor</a>
\t\t\t\t<a href=\"#book-appointment\" title=\"Talk With An Expert\" class=\"alt-font col-lg-3 font-weight-700 logo padding-10px-left text-blue js-anchor-link\">Talk With An Expert</a>
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
\t\t\t\t<div class=\"sideHEad mainhomesh\">
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
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"defaultcolors\">DX360° HomePage<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://dx360.konicaminolta.co.uk/productivity-and-collaboration\" class=\"hasmenu produccolor\">PRODUCTIVITY & COLLABORATION<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/security-and-compliance\" class=\"hasmenu sectcolor\">SECURITY & COMPLIANCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/mobility\" class=\"hasmenu mobilitycolor\">MOBILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/flexibility-efficiency-and-sustainability\" class=\"hasmenu flexibilitycolor\">FLEXIBILITY, EFFICIENCY &
\t\t\t\t\t\t\t\t\t<br>SUSTAINABILITY<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/analytics-and-intelligence\" class=\"hasmenu analyticescolor\">ANALYTICS & INTELLIGENCE<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Sidemenus blubars secndcolrsec\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\" https://www.konicaminolta.co.uk\" class=\"\">konica minolta homepage<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.konicaminolta.co.uk/en-gb/it-services\">it services<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\" https://www.konicaminolta.co.uk/en-gb/innovation\">innovation<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.konicaminolta.co.uk/en-gb/office-printing\">office printing<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\" https://www.konicaminolta.co.uk/en-gb/professional-printing\">professional printing<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.konicaminolta.co.uk/en-gb/customer-support/faqs\">support & faqs<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>


\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"Socialbar\">

\t\t\t\t\t<div class=\"sobar\">

\t\t\t\t\t\t<h2>Follow Us :</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/KonicaMinoltaBusinessSolutionsUKLtd/\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/company/konica-minolta-business-solutions-uk-ltd/\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/konicaminoltaGB\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.youtube.com/user/konicaminoltatv\"><i class=\"fa fa-youtube-play\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.instagram.com/Konica_minolta_uk/\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"serchover\"></div>
\t</body>
</div></body></header><!-- end header --><!-- start blog slider section --><section class=\"wow fadeIn main-slider mobile-height top-space overflow-visible no-padding\"><div class=\"swiper-container w-100\">
<div
\tclass=\"swiper-wrapper\">
\t<!-- start slider item -->
\t<div class=\"swiper-slide cover-background\" style=\"background-image:url('themes/Assessment/images/homepage-slider.jpg');\">
        <span  role=\"img\" aria-label=\"businessperson looking into the digital future \"> </span>
\t\t<div class=\"container position-relative fit-on-screen sm-height-400px\">
\t\t\t<div class=\"slider-typography\">
\t\t\t\t<div class=\"slider-text-middle-main\">
\t\t\t\t\t<div class=\"slider-text-middle\">
\t\t\t\t\t\t<div class=\"col-12 col-lg-6 col-md-8 slide-content\">
\t\t\t\t\t\t\t<div class=\"padding-40px-all sm-padding-30px-all bgd-white-opacity\">
\t\t\t\t\t\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">WHAT DOES DIGITAL TRANSFORMATION (DX)
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tLOOK LIKE FOR YOUR BUSINESS?
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<span class=\"text-pink text-large text-uppercase font-weight-700 margin-20px-bottom d-inline-block\">TAKE OUR SHORT
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tDX360&#176
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\tDIGITAL MATURITY ASSESSMENT
\t\t\t\t\t\t\t\t\t</strong><br>
\t\t\t\t\t\t\t\t\tTO FIND OUT
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<a class=\"btn btn-large btn-blue btn-rounded newcta js-anchor-link\" href=\"#pie-chart\">START THE ASSESSMENT
\t\t\t\t\t\t\t\t\t<i class=\"ti-angle-right font-weight-600\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end slider item -->
<!-- start slider item -->
\t<!-- <div class=\"swiper-slide cover-background\" style=\"background-image:url('themes/Assessment/images/blog-slider-img6.jpg')\">
\t\t\t\t          <div class=\"opacity-extra-medium bg-extra-dark-gray\"></div>
\t\t\t\t          <div class=\"container position-relative one-fourth-screen sm-height-400px\">
\t\t\t\t              <div class=\"slider-typography text-center\">
\t\t\t\t                  <div class=\"slider-text-middle-main\">
\t\t\t\t                      <div class=\"slider-text-middle\">
\t\t\t\t                          <div class=\"col-12 col-lg-6 col-md-8 mx-auto slide-content\">
\t\t\t\t                              <div class=\"padding-50px-all sm-padding-30px-all bg-black-opacity\">
\t\t\t\t                                  <a href=\"blog-grid.html\" class=\"text-medium-gray text-extra-small text-uppercase alt-font font-weight-600 margin-10px-bottom d-inline-block\">Branding and Identity</a>
\t\t\t\t                                  <h4><a href=\"blog-post-layout-02.html\" class=\"font-weight-600 text-white-2 alt-font\">Young pretty girl posing in the street</a></h4>
\t\t\t\t                                  <a class=\"btn btn-very-small btn-transparent-white\" href=\"blog-post-layout-02.html\">Continue Reading</a>
\t\t\t\t                              </div>
\t\t\t\t                          </div>
\t\t\t\t                      </div>
\t\t\t\t                  </div>
\t\t\t\t              </div>
\t\t\t\t          </div>
\t\t\t\t      </div>-->
\t<!-- end slider item -->
\t<!-- start slider item -->
\t<!--<div class=\"swiper-slide cover-background\" style=\"background-image:url('themes/Assessment/images/blog-slider-img7.jpg')\">
\t\t\t\t          <div class=\"opacity-extra-medium bg-extra-dark-gray\"></div>
\t\t\t\t          <div class=\"container position-relative one-fourth-screen sm-height-400px\">
\t\t\t\t              <div class=\"slider-typography text-center\">
\t\t\t\t                  <div class=\"slider-text-middle-main\">
\t\t\t\t                      <div class=\"slider-text-middle\">
\t\t\t\t                          <div class=\"col-12 col-lg-6 col-md-8 mx-auto slide-content\">
\t\t\t\t                              <div class=\"padding-50px-all sm-padding-30px-all bg-black-opacity\">
\t\t\t\t                                  <a href=\"blog-grid.html\" class=\"text-medium-gray text-extra-small text-uppercase alt-font font-weight-600 margin-10px-bottom d-inline-block\">Branding and Identity</a>
\t\t\t\t                                  <h4><a href=\"blog-post-layout-03.html\" class=\"font-weight-600 text-white-2 alt-font\">Do one thing every day that scares you</a></h4>
\t\t\t\t                                  <a class=\"btn btn-very-small btn-transparent-white\" href=\"blog-post-layout-03.html\">Continue Reading</a>
\t\t\t\t                              </div>
\t\t\t\t                          </div>
\t\t\t\t                      </div>
\t\t\t\t                  </div>
\t\t\t\t              </div>
\t\t\t\t          </div>
\t\t\t\t      </div> -->
\t<!-- end slider item -->
</div></div></div></section><!-- end slider section --><!-- Start Pie Chart Section --><section class=\"wow fadeIn no-padding margin-30px-tb sm-margin-70px-top ptopssd\" style=\"visibility: visible; animation-name: fadeIn;\"><div class=\"container\"><div class=\"row align-items-center\">
<div class=\"col-12 col-lg-6 wow fadeInRight last-paragraph-no-margin text-lg-left sm-padding-15px-lr text-center\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;\">
\t<div class=\"anchor\"></div>


\t<div class='mydiv' id='other' style=\"display: block;\">
\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t<span class=\"font-weight-700 text-blue text-uppercase\">KONICA MINOLTA'S DX360° DIGITAL MATURITY ASSESSMENT
\t\t\t\t</span>
\t\t\t</h6>
\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">
\t\t\t\tWith our free online DX360&#176 Digital Maturity Assessment, find out if you have the tools and procedures in place to enhance your digital transformation strategy and grow your business whilst boosting its resilience in a digital-first economy.</div>

\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">This assessment has 25 questions, split by 5 categories and it should take less than 10 minutes. Once completed, you will instantly receive a customised report to your email with recommendations on how to improve your digital maturity model score.</div>


\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">Every corner of our world is digitised, it's becoming easier for organisations to connect with customers, partners, and employees. Technology has gone from a supporting role to centre stage:  drastically affecting areas like productivity, collaboration, connection, and customer engagement. As it becomes more powerful and prevalent, however, the path forward is becoming more complex.</div>
\t\t\t<p class=\"margin-20px-bottom text-center\">
\t\t\t\t<span class=\"font-weight-700 text-blue  tostarts\">To start the assessment, select one of the strategic areas
\t\t\t\t\t<br>of digital transformation from the DX360&#176 pie chart.</span>

\t\t\t</p>


\t\t</div>
\t</div>


\t<div class='mydiv' id='mobility'>
\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t<span class=\"font-weight-700 text-piink text-uppercase\">Mobility</span>
\t\t\t</h6>
\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">
\t\t\t\tWith an increasingly distributed workforce, remote and hybrid working are here to stay. Businesses must consider how to support mobile working environments for the long-term. This means ensuring agile teams can flexibly scale up on a project-to-project basis and access work apps and data from anywhere.

\t\t\t\t<br><br>Understand how to gain a competitive edge by being more responsive, accessible, and be able to work whenever, and wherever.
\t\t\t</div>


\t\t</div>
\t</div>


\t<div class='mydiv' id='flexibility'>
\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t<span class=\"font-weight-700 text-violet text-uppercase\">FLEXIBILITY, EFFICIENCY
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                &amp; SUSTAINABILITY</span>
\t\t\t</h6>
\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">
\t\t\t\tIncreasing customer demands, rapid changes of market conditions and cost as well as resource reduction requests, drive all of us to find new ways to scale operations to different needs and meet changing demands with agility and efficiency while reducing an organisations´ physical footprint and wastage.
\t\t\t\t<br><br>Understand the flexibility and efficiency of your solutions and your drive towards a sustainable business.
\t\t\t</div>


\t\t</div>
\t</div>
\t<div class='mydiv' id='security'>
\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t<span class=\"font-weight-700 text-cyan text-uppercase\">Security &amp; Compliance
\t\t\t\t</span>
\t\t\t</h6>
\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">
\t\t\t\tYour cybersecurity posture has never been more important.  While business demands have driven IT leaders to focus on collaboration and digital transformation, it’s important to remember that none of those innovations matter if you can’t keep your business information secure.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                         When it comes to information security, organisations require knowledge, skills, tools, and experience across multiple platforms and disciplines to stay safe.
\t\t\t\t<br><br>Understand how information management and the workforce should work in harmony to ensure data security and compliance.
\t\t\t</div>


\t\t</div>
\t</div>
\t<div class='mydiv' id='productivity'>
\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t<span class=\"font-weight-700 text-yellow text-uppercase\">Productivity &amp; Collaboration
\t\t\t\t</span>
\t\t\t</h6>
\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">
\t\t\t\tThe way we work has changed dramatically in the past few years. Our environment changes just like our behavior. With new challenges, we have to think about how we want to collaborate in the future. How do we work across national borders? How do we manage to work together in the future despite pandemics or natural disasters? The Productivity & Collaboration section is dedicated to this question so that we can find new ways together to achieve more.
\t\t\t\t<br><br>Understand how your people and teams use technology to interact, communicate, and collaborate with each other and with your customers.
\t\t\t</div>


\t\t</div>
\t</div>
\t<div class='mydiv' id='analytics'>
\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t<span class=\"font-weight-700 text-blue text-uppercase\">Analytics &amp; Intelligence
\t\t\t\t</span>
\t\t\t</h6>
\t\t\t<div class=\"text-mdm font-weight-400 text-black padding-10px-bottom\">
\t\t\t\tThe true measure of being data-driven is how well you understand insights, and take appropriate action when needed.  A good technology data-driven strategy for your business is not just about buying the right tools, it’s about making sure your systems are accessible whenever and wherever your team needs them to get the job done… and when your customers need you. Real digital maturity is all about being analytical, resilient and intelligent in your business decisions and enablement.
\t\t\t\t<br><br>Understand how to visualise trends and insights about your business and make predictions to enable growth.</div>


\t\t</div>
\t</div>
</div>
<div class=\"col-12 col-lg-6 text-center wow fadeInLeft\" style=\"visibility: visible; animation-name: fadeInLeft;\">
\t<div class=\"anchor\" id=\"pie-chart\"></div>
\t<div class=\"bg-white float-right width-70px height-80px position-relative z-index-2\" style=\"top: 440px;\"></div>

\t<div class=\"pie-chart-holder\">
\t\t<div id=\"chartContainer\" style=\"height: 500px; width: 100%;\"></div>
\t\t<a class=\"chart-btn-1\" href=\"flexibility-efficiency-and-sustainability\">Start Now</a>
\t\t<a class=\"chart-btn-2\" href=\"analytics-and-intelligence\">Start Now</a>
\t\t<a class=\"chart-btn-3\" href=\"mobility\">Start Now</a>
\t\t<a class=\"chart-btn-4\" href=\"security-and-compliance\">Start Now</a>
\t\t<a class=\"chart-btn-5\" href=\"productivity-and-collaboration\">Start Now</a>

\t</div>


</div></div></div><div id=\"benefits-section\"></div></section><!-- End Pie Chart Section --><!-- start benefits section --><section class=\"wow fadeIn bg-light-gray\"><div class=\"container\"><div class=\"row justify-content-center\">
<div class=\"col-12 col-lg-8 col-md-11 text-center wow fadeInUp margin-four-bottom\">
\t<h6 class=\"margin-20px-bottom\">
\t\t<span class=\"font-weight-700 text-blue alt-font\">THE BENEFITS OF BEING DIGITALLY MATURE
\t\t</span>
\t</h6>
</div></div><divclass=\"row\"><!-- start features box item --><div class=\"col-12 col-md-4 sm-margin-30px-bottom wow fadeInUp\">
\t<div
\t\tclass=\"bg-white text-center box-shadow\">
\t\t<!-- start rotate box item -->
\t\t<div class=\"card-container\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"front\">
\t\t\t\t\t<div class=\"card-front-back\">
\t\t\t\t\t\t<img src=\"themes/Assessment/images/efficiency_img_f.jpg\" alt=\"businessperson reviewing the company’s efficiency on a chart\">
\t\t\t\t\t\t<div class=\"descrip\">
\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">Efficiency</span>
\t\t\t\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">
\t\t\t\t\t\t\t\t<p>40% improvement in operational efficiency</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"back\">
\t\t\t\t\t<div class=\"card-front-back\">
\t\t\t\t\t\t<div class=\"descrip\">
\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">Efficiency</span>
\t\t\t\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">
\t\t\t\t\t\t\t\t<p>Digital maturity supports companies with faster and streamlined processes, increasing their efficiency while decreasing their errors and waste.</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"themes/Assessment/images/efficiency_img_b.jpg\" alt=\"accessing the entire world digitally on your phone\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end rotate box item -->
\t</div>
</div><!-- end feature box item --><!-- start features box item --><div class=\"col-12 col-md-4 sm-margin-30px-bottom wow fadeInUp\">
\t<div
\t\tclass=\"bg-white text-center box-shadow\">
\t\t<!-- start rotate box item -->
\t\t<div class=\"card-container\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"front\">
\t\t\t\t\t<div class=\"card-front-back\">
\t\t\t\t\t\t<img src=\"themes/Assessment/images/user-experience_img_f.jpg\" alt=\"person rates an application on their phone\">
\t\t\t\t\t\t<div class=\"descrip\">
\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">User Experience</span>
\t\t\t\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">
\t\t\t\t\t\t\t\t<p>35% increase in customer experience</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"back\">
\t\t\t\t\t<div class=\"card-front-back\">
\t\t\t\t\t\t<div class=\"descrip\">
\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">User Experience</span>
\t\t\t\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">
\t\t\t\t\t\t\t\t<p>Digital maturity enhances a user friendly, seamless experience through the whole customer journey.<br><br></p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"themes/Assessment/images/user-experience_img_b.jpg\" alt=\" \tgroup working together for usability-friendly application design\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end rotate box item -->
\t</div>
</div><!-- end feature box item --><!-- start features box item --><div class=\"col-12 col-md-4 sm-margin-30px-bottom wow fadeInUp\">
\t<div
\t\tclass=\"bg-white text-center box-shadow\">
\t\t<!-- start rotate box item -->
\t\t<div class=\"card-container\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"front\">
\t\t\t\t\t<div class=\"card-front-back\">
\t\t\t\t\t\t<img src=\"themes/Assessment/images/stay-ahead_img_f.jpg\" alt=\"person sitting at the laptop checking company figures \">
\t\t\t\t\t\t<div class=\"descrip\">
\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">Stay Ahead</span>
\t\t\t\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">
\t\t\t\t\t\t\t\t<p>36% faster time to market</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"back\">
\t\t\t\t\t<div class=\"card-front-back\">
\t\t\t\t\t\t<div class=\"descrip\">
\t\t\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">Stay Ahead</span>
\t\t\t\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">
\t\t\t\t\t\t\t\t<p>Digital maturity enables companies to launch innovations in a much shorter time, thereby, generating new revenue.</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"themes/Assessment/images/stay-ahead_img_b.jpg\" alt=\"holding the whole digital world in your hands\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end rotate box item -->
\t</div>
</div><!-- end feature box item --></div></div></section><!-- end benefits section --><div id=\"rethink-work\"></div><!-- start slider section --><section class=\"p-0 main-slider mobile-height wow fadeIn\"><div class=\"swiper-full-screen swiper-container h-100 w-100 white-move\"><div
class=\"swiper-wrapper\">
<!-- start slider item -->
<div class=\"swiper-slide\">
\t<div class=\"row m-0 justify-content-center\">
\t\t<div class=\"col-12 col-md-6 cover-background height-400px sm-height-300px margin-50px-tb sm-no-margin\" style=\"background-image:url('themes/Assessment/images/slider_01.jpg');\">   <span  role=\"img\" aria-label=\"business meeting to rethink the world of work \"> </span></div>
\t\t<div class=\"col-12 col-md-5 d-flex align-items-center height-400px sm-height-250px\">
\t\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">RETHINKING THE WORLD OF WORK
\t\t\t\t\t</span>
\t\t\t\t</h6>
\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">With technological, social, environmental and generational shifts, ‘work’ can no longer be defined as a physical space one goes from 9 to 5. Instead, work is anywhere, anytime.</span>
\t\t\t</div>
\t\t</div>

\t</div>
</div>
<!-- end slider item -->
<!-- start slider item -->
<div class=\"swiper-slide\">
\t<div class=\"row m-0 justify-content-center\">
\t\t<div class=\"col-12 col-md-6 cover-background height-400px sm-height-300px margin-50px-tb sm-no-margin\" style=\"background-image:url('themes/Assessment/images/slider_02.jpg');\"><span  role=\"img\" aria-label=\"businesspeople sitting together at their laptops and discussing new business ideas  \"> </span></div>
\t\t<div class=\"col-12 col-md-5 d-flex align-items-center height-400px sm-height-250px\">
\t\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">Manage changes in business
\t\t\t\t\t</span>
\t\t\t\t</h6>
\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">With models of remote and hybrid working here to stay, businesses must consider how to support mobile working environments. This means ensuring agile teams can flexibly scale up on a project-to-project basis, utilising data to optimise decision making.</span>
\t\t\t</div>
\t\t</div>

\t</div>
</div>
<!-- end slider item -->
<!-- start slider item -->
<div class=\"swiper-slide\">
\t<div class=\"row m-0 justify-content-center\">
\t\t<div class=\"col-12 col-md-6 cover-background height-400px sm-height-300px margin-50px-tb sm-no-margin\" style=\"background-image:url('themes/Assessment/images/slider_03.jpg');\"><span  role=\"img\" aria-label=\"virtual team having a video call  \"> </span></div>
\t\t<div class=\"col-12 col-md-5 d-flex align-items-center height-400px sm-height-250px\">
\t\t\t<div class=\"text-left padding-five-all sm-padding-two-all width-100 text-lg-left text-center\">
\t\t\t\t<h6 class=\"margin-20px-bottom\">
\t\t\t\t\t<span class=\"font-weight-700 text-blue alt-font\">EMBRACING DIGITAL</span>
\t\t\t\t</h6>
\t\t\t\t<span class=\"text-sm font-weight-400 text-black\">This changing world of work, however, brings with it risks and opportunities that need to be navigated.  Businesses like yours now need to look more closely at your digital maturity level, to ensure you can confidently and securely prepare for, and optimise, your ideal workplace of tomorrow.</span>
\t\t\t</div>
\t\t</div>

\t</div>
</div>
<!-- end slider item --></div><!-- start slider pagination --><div class=\"swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination d-none\"></div><div class=\"half-circle_r half-circle_sr swiper-button-next swiper-next-style1\"></div><div class=\"half-circle_l half-circle_sl swiper-button-prev swiper-next-style1 \"></div><!-- end slider pagination --><!-- end slider pagination --></div></section><!-- end slider section --><!-- start digital transformation section --><section class=\"wow fadeIn bg-light-blue\"><div class=\"container\"><div class=\"row justify-content-center\">
<div class=\"col-12 col-lg-8 col-md-11 text-center sm-margin-30px-bottom\">
\t<h6 class=\"margin-20px-bottom\">
\t\t<span class=\"font-weight-700 text-blue\">
\t\t\tDIGITAL BUSINESS TRANSFORMATION IS KEY TO FUTURE SUCCESS
\t\t</span>
\t</h6>
</div></div><divclass=\"row\"><!-- feature box item--><div class=\"col-12 col-md-6 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\">
\t<div class=\"feature-box\">
\t\t<div class=\"content sm-content\">

\t\t\t<div class=\"chart-style2 wow fadeInUp text-center md-margin-30px-bottom sm-margin-15px-bottom\">
\t\t\t\t<div class=\"chart-percent\">
\t\t\t\t\t<span class=\"chart2 text-blue\" data-percent=\"45\">
\t\t\t\t\t\t<span class=\"percent font-weight-600 text-extra-large\"></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<p class=\"width-85 mx-auto md-width-100 text-black\">
\t\t\t\tof executives don’t think their company has the right technology to implement a digital transformation<sup>1</sup>
\t\t\t</p>
\t\t\t<div class=\"text-large font-weight-700 text-capitalize text-blue margin-10px-bottom md-margin-5px-bottom\">Choose the right technology
\t\t\t</div>

\t\t</div>
\t</div>
</div><!-- end feature box item--><!-- feature box item--><div class=\"col-12 col-md-6 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\" data-wow-delay=\"0.2s\">
\t<div class=\"feature-box\">
\t\t<div class=\"content sm-content\">

\t\t\t<div class=\"chart-style2 wow fadeInUp text-center md-margin-30px-bottom sm-margin-15px-bottom\">
\t\t\t\t<div class=\"chart-percent\">
\t\t\t\t\t<span class=\"chart2 text-blue\" data-percent=\"87\">
\t\t\t\t\t\t<span class=\"percent font-weight-600 text-extra-large\"></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<p class=\"width-85 mx-auto md-width-100 text-black\">of companies think digital will disrupt their industry, but only 44% are prepared for potential digital disruption<sup>2</sup>
\t\t\t</p>
\t\t\t<div class=\"text-large font-weight-700 text-capitalize text-blue margin-10px-bottom md-margin-5px-bottom\">Be prepared for digital disruptions</div>

\t\t</div>
\t</div>
</div><!-- end feature box item--><!-- feature box item--><div class=\"col-12 col-md-6 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\" data-wow-delay=\"0.4s\">
\t<div class=\"feature-box\">
\t\t<div class=\"content sm-content\">

\t\t\t<div class=\"chart-style2 wow fadeInUp text-center md-margin-30px-bottom sm-margin-15px-bottom\">
\t\t\t\t<div class=\"chart-percent\">
\t\t\t\t\t<span class=\"chart2 text-blue\" data-percent=\"77\">
\t\t\t\t\t\t<span class=\"percent font-weight-600 text-extra-large\"></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<p class=\"width-85 mx-auto md-width-100 text-black\">
\t\t\t\tof companies are dependent on digital products or operations<sup>3</sup>
\t\t\t</p>
\t\t\t<div class=\"text-large font-weight-700 text-capitalize text-blue margin-10px-bottom md-margin-5px-bottom\">Digital or done
\t\t\t</div>

\t\t</div>
\t</div>
</div><!-- end feature box item--><!-- feature box item--><div class=\"col-12 col-md-6 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp\" data-wow-delay=\"0.4s\">
\t<div class=\"feature-box\">
\t\t<div class=\"content sm-content\">

\t\t\t<div class=\"chart-style2 wow fadeInUp text-center md-margin-30px-bottom sm-margin-15px-bottom\">
\t\t\t\t<div class=\"chart-percent\">
\t\t\t\t\t<span class=\"chart2 text-blue\" data-percent=\"70\">
\t\t\t\t\t\t<span class=\"percent font-weight-600 text-extra-large\"></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<p class=\"width-85 mx-auto md-width-100 text-black\">Intelligent systems will drive on your customer engagements by 2022<sup>4</sup>
\t\t\t</p>
\t\t\t<div class=\"text-large font-weight-700 text-capitalize text-blue margin-10px-bottom md-margin-5px-bottom\">Accelerate Digital Interaction
\t\t\t</div>

\t\t</div>
\t</div>
</div><!-- end feature box item--><div class=\"col-lg-12\">
\t<a class=\"modal-popup wow fadeInUp\" href=\"#modal-popup\">
\t\t<sup>*</sup>Sources
\t</a>
</div></div></div></section><!-- end digital transformation section --><!-- start clients logo section --><div id=\"trusted-advisor\"></div><br><br><section><div class=\"container\"><div class=\"row justify-content-center\">
<div class=\"col-12 col-lg-12 col-md-10 margin-five-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin\">
\t<h6 class=\"margin-20px-bottom\">
\t\t<span class=\"font-weight-700 text-blue\">YOUR TRUSTED ADVISOR FOR DIGITAL INNOVATION
\t\t</span>
\t</h6>
\t<p>We work hard to innovate and deliver quality products and services that help our customers pursue their digital agendas. Our dedication to providing our customers with exceptional experiences is proven with over 75 awards and certifications, recognising our efforts in digital transformation and digital transformation consulting. This is further enhanced by our collaboration with recognised global partners.</p>
</div></div><div class=\"container-fluid\">
<div class=\"yta\">
\t<ul class=\"wow fadeIn\" style=\"visibility: visible; animation-name: fadeIn;\">
\t\t<li><img src=\"themes/Assessment/images/top_employer_united_kingdom_2021.png\" alt=\"UK Top Employer 2020 logo \"/></li>
\t\t<li><img src=\"themes/Assessment/images/smart-workplace-vision.png\" alt=\"Smart workplace vision logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/iso_20000-1.png\" alt=\"ISO 27001 certification logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/iso-27001.png\" alt=\"ISO QMS certification logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/comptia-logo.png\" alt=\"Comptia certification logo\"/></li>
\t</ul>
\t<ul class=\"wow fadeIn\" style=\"visibility: visible; animation-name: fadeIn;\">
\t\t<li><img src=\"themes/Assessment/images/servicenow-logo.png\" alt=\"ServiceNow partnership logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/microsoft_partner.png\" alt=\"Microsoft gold partnership logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/itil.png\" alt=\"ITIL certification logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/prince2.png\" alt=\"PRINCE2 certification logo\"/></li>
\t\t<li><img src=\"themes/Assessment/images/iso_20000-1-full.png\" alt=\"Cyber Essentials certification logo\"/></li>
\t</ul>
</div></div></div></div></section><!-- end clients logo section --><!-- start business section --><section class=\"wow fadeIn no-padding-bottom business-section\" style=\"visibility: visible; animation-name: fadeIn;\"><div class=\"container\"><div class=\"row align-items-center padding-80px-btm\"><div class=\"col-12 col-lg-6 wow fadeInRight last-paragraph-no-margin padding-eight-lr text-lg-left sm-padding-15px-lr text-center minheauto\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;\">
<h6 class=\"margin-20px-bottom\">
\t<span class=\"font-weight-700 text-blue alt-font\">READY TO SEE<br>
\t\tHOW YOUR BUSINESS
\t\t<br>
\t\tREALLY SHAPES UP?
\t</span>
</h6>
<a class=\"btn btn-large btn-blue btn-rounded newcta margin-30px-bottom js-anchor-link\" href=\"#pie-chart\">START THE ASSESSMENT
\t<i class=\"ti-angle-right font-weight-600\"></i>
</a>
<div
\tclass=\"text-blue margin-50px-top position-absolute top-220\">


\t<!-- start modal pop-up -->
\t<div
\t\tid=\"modal-popup\" class=\"border-radius-10 height-200px white-popup-block mfp-hide col-xl-8 col-lg-6 col-md-8 col-11 mx-auto bg-white modal-popup-main padding-50px-top md-padding-30px-all sm-padding-20px-all float-none border-color-pop\">

\t\t<!-- <h6 class=\"text-blue text-uppercase text-extra-large font-weight-700 margin-20px-bottom d-block\">Sources</h6> -->
\t\t<ul class=\"padding-30px-lr text-blue\">
\t\t\t<li class=\"margin-5px-bottom padding-10px-lr\">
\t\t\t\t<a href=\"https://www.pwc.com/gx/en/advisory-services/digital-iq-survey-2015/campaign-site/digital-iq-survey-2015.pdf\" target=\"_blank\">
\t\t\t\t\t<sup>1</sup>
\t\t\t\t\tGlobal Digital IQ Survey 2015.</a>
\t\t\t</li>

\t\t\t<li class=\"margin-5px-bottom padding-10px-lr\">
\t\t\t\t<a href=\"https://www.siliconrepublic.com/business/deloitte-leadership-digital-disruption-infographic\" target=\"_blank\">
\t\t\t\t\t<sup>2</sup>
\t\t\t\t\tDeloitte Leadership Digital Disruption Infographic.</a>
\t\t\t</li>

\t\t\t<li class=\"margin-5px-bottom padding-10px-lr\">
\t\t\t\t<a href=\"https://futurumresearch.com/key-stats-2018-digital-transformation-index/\" target=\"_blank\">
\t\t\t\t\t<sup>3</sup>
\t\t\t\t\tKey Stats From The 2018 Digital Transformation Index.</a>
\t\t\t</li>

\t\t\t<li class=\"margin-5px-bottom padding-10px-lr\">
\t\t\t\t<a href=\"https://www.gartner.com/smarterwithgartner/top-cx-trends-for-cios-to-watch/\" target=\"_blank\">
\t\t\t\t\t<sup>4</sup>
\t\t\t\t\tTop CX Trends for CIOs to Watch.</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<!-- end modal pop-up -->
</div></div><div class=\"col-12 col-lg-6 text-center wow fadeInLeft\" style=\"visibility: visible; animation-name: fadeInLeft;\"><img src=\"themes/Assessment/images/parallax-bg11.jpg\" alt=\"Group of businesspeople reviewing assessment results\" class=\"w-100\" data-no-retina=\"\"></div></div><div id=\"book-appointment\"></div></div></section><!-- end business section --><!--Start calendly section--><section><iframe src='https://outlook.office365.com/owa/calendar/KonicaMinolta2606884@konicaminolta.eu/bookings/' width='100%' scrolling='yes' style='height: 1200px; border:0'></iframe></section><!--End Calendly Section--><!-- start footer --><footer class=\"footer-standard-dark bg-dark-footer\" id=\"footer\"><div class=\"footer-widget-area padding-20px-tb sm-padding-30px-tb padding-30px-btm\"><div class=\"container\"><div class=\"row\">
<div
\tclass=\"col-lg-6 col-md-6 widget sm-text-center\"><!-- start social media <!-- <div class=\"social-icon-style-8 d-inline-block vertical-align-middle\">
\t\t\t\t\t\t\t\t\t<ul class=\"small-icon no-margin-bottom\">
\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t        <a class=\"facebook text-white-2\" href=\"https://www.facebook.com/KonicaMinoltaBusinessSolutionsUKLtd/\" target=\"_blank\"><img src=\"themes/Assessment/images/fb-rethink.svg\" alt=\"Facebook logo\" /></a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t        <a class=\"linkedin text-white-2\" href=\"https://www.linkedin.com/company/konica-minolta-business-solutions-uk-ltd/\" target=\"_blank\"><img src=\"themes/Assessment/images/linkedin-rethink.svg\" alt=\"Linkedin logo\" /></a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t        <a class=\"twitter text-white-2\" href=\"https://twitter.com/konicaminoltaGB\" target=\"_blank\"><img src=\"themes/Assessment/images/twitter-rethink.svg\" alt=\"Twitter logo\" /></a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t        <a class=\"youtube text-white-2\" href=\"https://www.youtube.com/user/konicaminoltatv\" target=\"_blank\"><img src=\"themes/Assessment/images/youtube-rethink.svg\" alt=\"Youtube logo\" /></a>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t\t</ul>
\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end social media -->
</div><!-- start text image --><div class=\"col-lg-6 col-md-6 widget md-padding-15px-left text-md-right text-center padding-5px-top\">
\t<img src=\"themes/Assessment/images/gsti_text.svg\" alt=\"\"></div><!-- end text image --></div></div></div><div class=\"border-top border-color-medium-dark-gray margin-60px-lr padding-16px-top\"><div class=\"bg-dark-footer padding-20px-bottom text-center sm-padding-30px-tb\"><div class=\"container padding-0\">
<div
\tclass=\"row\">
\t<!-- start copyright -->
\t<div class=\"col-md-6 text-md-left text-small text-center text-medium-gray\">
\t\t<a href=\"https://www.konicaminolta.co.uk/en-gb/terms-of-use\" target=\"_blank\" class=\"text-extra-light-gray footer-links\">Term of Use</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t<a href=\"https://dx360.konicaminolta.co.uk/sites/default/files/DX360Assessment-PrivacyPolicy-Website-v1-0.pdf\" target=\"_blank\" class=\"text-extra-light-gray footer-links\">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t<a href=\"https://dx360.konicaminolta.co.uk/sitemap\" class=\"text-extra-light-gray footer-links\">Sitemap</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t<a href=\"https://www.konicaminolta.co.uk/en-gb/imprint\" target=\"_blank\" class=\"text-extra-light-gray footer-links\">Imprint</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t<a href=\"javascript:void(0);\" class=\"text-extra-light-gray footer-links cookies\">Cookie Settings</a>
\t\t<!-- \t<a href=\"http://51.143.140.155/drupal-8.9.16/user.html\" target=\"_blank\" class=\"text-extra-light-gray footer-links cookies\">Cookie Settings</a> -->
\t</div>
\t<div class=\"col-md-6 text-md-right text-small text-center text-extra-light-gray sm-padding-30px-top\">
\t\t&copy; 2021 Konica Minolta Business Solutions (UK) Limited.
\t</div>
\t<!-- end copyright -->
</div></div></div></footer><!-- end footer --><!-- scroll to top --><!-- <a class=\"scroll-top-arrow\" href=\"javascript:void(0);\" style=\"display:none\"><i class=\"ti-arrow-up\"></i></a>--><!-- end scroll to top  --><!-- javascript libraries -->





<script src=\"themes/Assessment/js/classy/jquery.min.js\"></script>
<script>

\$(document).ready(function(){ 
if (\$(window).width() < 960) {
    \$(\".card-container\").click(function(){
        \$(this).toggleClass(\"activenow\")
    })
}
 
});
</script>
<script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.js\"> 
</script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/modernizr.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/bootstrap.bundle.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.easing.1.3.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/skrollr.min.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/smooth-scroll.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.appear.js\"></script><!-- menu navigation --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/bootsnav.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.nav.js\"></script><!-- animation --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/wow.min.js\"></script><!-- page scroll --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/page-scroll.js\"></script><!-- swiper carousel --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/swiper.min.js\"></script><!-- counter --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.count-to.js\"></script><!-- parallax --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.stellar.js\"></script><!-- magnific popup --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.magnific-popup.min.js\"></script><!-- portfolio with shorting tab --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/isotope.pkgd.min.js\"></script><!-- themes/Assessment/images loaded --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/imagesloaded.pkgd.min.js\"></script><!-- pull menu --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/classie.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/hamburger-menu.js\"></script><!-- counter  --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/counter.js\"></script><!-- fit video  --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.fitvids.js\"></script><!-- skill bars  --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/skill.bars.jquery.js\"></script><!-- justified gallery  --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/justified-gallery.min.js\"></script><!--pie chart--><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/jquery.easypiechart.min.js\"></script><!-- retina --><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/retina.min.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/main.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/canvasjsnew.js\"></script><script type=\"text/javascript\" src=\"themes/Assessment/js/classy/canvasjs.min.js\"></script><script id=\"usercentrics-cmp\" src=\"https://app.usercentrics.eu/browser-ui/latest/loader.js\" data-settings-id=\"TYs1T85gv\" async></script>


<script>\$(\".hasmenu\").click(function () {
\$(\".hasmenu\").removeClass(\"active\");
\$(this).addClass(\"active\");

//          \$(\".submenus\").slideUp()
\$(this).find(\".Sidemenus\").show();
});
\$(\".opneside\").click(function () {
\$(\".sidendat,.serchover\").addClass(\"active\");
});
\$(\".btnclose\").click(function () {
\$(\".sidendat,.serchover\").removeClass(\"active\");
});</script>

</body></html>
", "themes/Assessment/templates/page--front.html.twig", "C:\\xampp\\htdocs\\Germany-Konika360\\themes\\Assessment\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = ["url" => 53];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
