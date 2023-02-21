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

/* front/homeC.html.twig */
class __TwigTemplate_40bf3fcdab245f634c9916879a2d7f62 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'prof' => [$this, 'block_prof'],
            'contenu' => [$this, 'block_contenu'],
            'insc' => [$this, 'block_insc'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/homeC.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/homeC.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "  <body>
    <!-- loading -->
    ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 139
        echo "    ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 723
        echo "      ";
        $this->displayBlock('footer', $context, $blocks);
        // line 852
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 883
        echo "  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />
    <title>SandBoX_Tn</title>
    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/log1.png"), "html", null, true);
        echo "\" />
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/animate.css"), "html", null, true);
        echo "\" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/revsilder/css/settings.css"), "html", null, true);
        echo "\" />
    <!-- Typography CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/typography.css"), "html", null, true);
        echo "\" />
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" />
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/responsive.css"), "html", null, true);
        echo "\" />
  </head>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "    <div id=\"loading\">
      <div id=\"loading-center\">
        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logoGif1.gif"), "html", null, true);
        echo "\" alt=\"loader\" />
      </div>
    </div>
    <!-- loading End -->
    <!-- Header Start -->
    <header id=\"main-header\" class=\"header-one\">
      <div class=\"topbar\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-lg-6 col-md-6\">
              <div class=\"number-info\">
                <ul>
                  <li class=\"email-header\">
                    <a href=\"mailto:support@bizbag.com\">
                      <i class=\"fas fa-envelope\"></i>support.tn@sandbox.tn</a
                    >
                  </li>
                  <li class=\"phone-header\">
                    <a href=\"tel:+0123456789\">
                      <i class=\"fas fa-phone\"></i>+21655025447</a
                    >
                  </li>
                  <li class=\"phone-header\">
                    <span class=\"text-warning\">Bienvenue ";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 56, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
              <div class=\"social-icone text-right\">
                <ul>
                  <li class=\"d-inline\">
                    <a href=\"https://www.facebook.com/\"
                      ><i class=\"fab fa-facebook-f\"></i
                    ></a>
                  </li>
                  <li class=\"d-inline\">
                    <a href=\"https://twitter.com/\"
                      ><i class=\"fab fa-twitter\"></i
                    ></a>
                  </li>
                  <li class=\"d-inline\">
                    <a href=\"https://plus.google.com/\"
                      ><i class=\"fab fa-google-plus-g\"></i
                    ></a>
                  </li>
                  <li class=\"d-inline\">
                    <a href=\"https://www.instagram.com/\"
                      ><i class=\"fab fa-instagram\"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- menu start -->
      <nav id=\"menu-1\" class=\"mega-menu\" data-color=\"\">
        <!-- menu list items container -->
        <div class=\"menu-list-items\">
          <div class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-sm-12\">
                <!-- menu logo -->
                <ul class=\"menu-logo\">
                  <li>
                    <a href=\"index.html\"
                      ><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/looo.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-fluid\"
                    /></a>
                  </li>
                </ul>
                <!-- menu links -->
                <ul class=\"menu-links\">
                  <!-- active class -->
                  <li class=\"active\">
                     <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_acceuil");
        echo "\">ACCEUIL</a>
                  </li>
                  <li>
                   ";
        // line 112
        $this->displayBlock('prof', $context, $blocks);
        echo " 
               </li>
               <li>
                  <a href=\"javascript:void(0)\">ANNONCES</a>
                  <!-- drop down multilevel  -->
                  <ul class=\"drop-down-multilevel\">
                     <li><a href=\"annonceentrepreneur.html\">PUBLIER</a></li>
                     <li><a href=\"listeAnnonces.html\">LISTE ANNONCES</a></li>
                  </ul>
               </li>
               <li>
                  <a href=\"evenement.html\">EVENEMENTS</a>
               </li>
               <li>
                  <a href=\"reclamation.html\">RECLAMATION</a>
                  <!-- drop down multilevel  -->
               </li>
               <li><a class=\"button btn-hdr\" href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnecter</a></li>
            </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- menu end -->
    </header>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 112
    public function block_prof($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "prof"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "prof"));

        echo "  <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => (isset($context["idp"]) || array_key_exists("idp", $context) ? $context["idp"] : (function () { throw new RuntimeError('Variable "idp" does not exist.', 112, $this->source); })())]), "html", null, true);
        echo "\">PROFILE</a> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 139
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 140
        echo "    <!-- Header End -->
    <!-- Slider Banner Start -->
    <div class=\"iq-banner\">
      <div class=\"container\">
        <div class=\"row slider-row-2 text-center justify-content-between\">
          <div class=\"col-lg-12 mb-5 mb-6\">
            <div class=\"slider-banner slider-banner2\">
              <h2 class=\"text-uppercase banner-title\">A quoi vous pensez ?</h2>
              <p class=\"mb-4\">
                Avoir le bon financement au bon moment avec le bon
                investisseur.<br />
                Avoir votre succès.
              </p>
              ";
        // line 153
        $this->displayBlock('insc', $context, $blocks);
        // line 154
        echo "            </div>
          </div>
          <div class=\"col-lg-12\">
            <div class=\"slider-image-2 slide-2\">
              <div class=\"slider-1\"></div>
              <div class=\"slider-2\"></div>
              <div class=\"slider-3\"></div>
              <div class=\"slider-4\"></div>
              <div class=\"slider-5\"></div>
              <div class=\"slider-6\"></div>
              <img
                class=\"banner-img img-fluid center-block\"
                src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/slider/banner-2/01.png"), "html", null, true);
        echo "\"
                alt=\"\"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Banner End -->
    <!-- Main-Content Start -->
    <div class=\"main-content\">
      <!-- Fancy Box Start -->
      <section class=\"fancy-box gray-bg\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"title-box text-center\">
                <span class=\"text-warning\">Meilleurs services</span>
                <h2 class=\"title\">Ce que nous excellons</h2>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 mb-5\">
              <div class=\"iq-fancy-box text-center\">
                <div class=\"iq-icon\">
                  <i aria-hidden=\"true\" class=\"ion ion-ios-pie-outline\"></i>
                </div>
                <div class=\"fancy-content\">
                  <h4>Performance</h4>
                  <p>
                    Notre site Web offre d'excellentes performances avec
                    simplicité et facilité d'utilisation.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
              <div class=\"iq-fancy-box text-center\">
                <div class=\"iq-icon\">
                  <i aria-hidden=\"true\" class=\"ion ion-ios-glasses-outline\"></i>
                </div>
                <div class=\"fancy-content\">
                  <h4>Sécurité</h4>
                  <p>
                    Nous garantissons une protection totale de vos données
                    personnelles ainsi que la protection de vos idées grâce à
                    notre contrat avec l'INNORPI.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0 mb-md-0\">
              <div class=\"iq-fancy-box text-center\">
                <div class=\"iq-icon\">
                  <i aria-hidden=\"true\" class=\"ion ion-android-bulb\"></i>
                </div>
                <div class=\"fancy-content\">
                  <h4>Idées intéressantes</h4>
                  <p>
                    Nous vous offrons la meilleure opportunité de vous inspirer
                    pour la réussite de vos projets.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"iq-fancy-box text-center\">
                <div class=\"iq-icon\">
                  <i
                    aria-hidden=\"true\"
                    class=\"ion ion-ios-stopwatch-outline\"
                  ></i>
                </div>
                <div class=\"fancy-content\">
                  <h4>Timing</h4>
                  <p>
                    Nos services sont disponibles à tout moment et dans les
                    meilleurs délais.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Fancy Box End -->
      <!-- Features Box Start -->
      <section class=\"features-box\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"title-box text-center\">
                <span class=\"text-warning\">Notre Plan</span>
                <h2 class=\"title\">Comment nous travaillons</h2>
                <p class=\"mb-0\">Nous avons trois étapes globales</p>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-6 col-md-12 text-center\">
              <img
                src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/features/04.png"), "html", null, true);
        echo "\"
                class=\"img-fluid center-block\"
                alt=\"#\"
              />
              <div class=\"iq-objects-style-1\">
                <span
                  class=\"iq-objects-01\"
                  data-bottom=\"transform:translatey(-50px)\"
                  data-top=\"transform:translatey(-50px);\"
                >
                  <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/effect/01.jpg"), "html", null, true);
        echo "\" alt=\"drive02\" />
                </span>
                <span
                  class=\"iq-objects-02\"
                  data-bottom=\"transform:translatey(50px)\"
                  data-top=\"transform:translatey(-100px);\"
                >
                  <img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/effect/02.jpg"), "html", null, true);
        echo "\" alt=\"drive02\" />
                </span>
                <span
                  class=\"iq-objects-03\"
                  data-bottom=\"transform:translatex(50px)\"
                  data-top=\"transform:translatex(-100px);\"
                >
                  <img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/effect/03.jpg\" alt=\"drive02"), "html", null, true);
        echo "\" />
                </span>
              </div>
            </div>
            <div class=\"col-lg-6 col-md-12 mt-5 mt-lg-0\">
              <div class=\"feature-box text- mb-5\">
                <div class=\"feature-number\">01</div>
                <div class=\"feature-info\">
                  <h4>Publier une annonce</h4>
                  <p class=\"mb-0\">
                    Vous pouvez poster vos idées ou rechercher des annonces qui
                    sont correspondants avec vos idées (des projets ou des
                    investissements).
                  </p>
                </div>
              </div>
              <div class=\"feature-box text- ml-5 mb-5\">
                <div class=\"feature-number\">02</div>
                <div class=\"feature-info\">
                  <h4>Demander un rendez-vous</h4>
                  <p class=\"mb-0\">
                    Vous pouvez demander un rendez-vous au propriétaire d’une
                    annonce que vous avez trouvé sur notre site ou à l’un de nos
                    évènements.
                  </p>
                </div>
              </div>
              <div class=\"feature-box text-\">
                <div class=\"feature-number\">03</div>
                <div class=\"feature-info\">
                  <h4>Signer un contrat</h4>
                  <p class=\"mb-0\">
                    Après le rendez-vous et en cas d'accord entre les deux
                    parties, nous pouvons procéder à la signature du contrat et
                    commencer les détails du projet.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"scrolling-text top right default\">
          <div
            data-bottom=\"transform:translatex(300px)\"
            data-top=\"transform:translatex(0);\"
          >
            Nos Étapes
          </div>
        </div>
      </section>
      <!-- Features Box End -->
      <!-- Our Portfolio Start -->
      <section class=\"counter-box gray-bg\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0 text-center\">
              <div class=\"iq-timer\">
                <i aria-hidden=\"true\" class=\"flaticon flaticon-project-1\"></i>
                <span class=\"timer\" data-to=\"1520\" data-speed=\"5000\">1520</span>
                <h6>Projets Réalisés</h6>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0 text-center\">
              <div class=\"iq-timer\">
                <i aria-hidden=\"true\" class=\"flaticon flaticon-enjoy\"></i>
                <span class=\"timer\" data-to=\"2100\" data-speed=\"5000\">2100</span>
                <h6>Clients Satisfaits</h6>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0 mb-md-0 text-center\">
              <div class=\"iq-timer\">
                <i aria-hidden=\"true\" class=\"flaticon flaticon-project\"></i>
                <span class=\"timer\" data-to=\"1200\" data-speed=\"5000\">1200</span>
                <h6>Projets en Cours</h6>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 text-center\">
              <div class=\"iq-timer\">
                <i aria-hidden=\"true\" class=\"flaticon flaticon-support\"></i>
                <span class=\"timer\" data-to=\"5\" data-speed=\"5000\">5</span>
                <h6>Administrateurs</h6>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Project End -->
      <!-- Our Team start -->
      <section id=\"our-team\" class=\"our-team\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"title-box text-center\">
                <span class=\"text-warning\">Leadership</span>
                <h2 class=\"title\">Équipe App Monsters</h2>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-12 col-md-12\">
              <div
                class=\"owl-carousel\"
                data-autoplay=\"true\"
                data-loop=\"true\"
                data-nav=\"false\"
                data-dots=\"true\"
                data-items=\"4\"
                data-items-laptop=\"4\"
                data-items-tab=\"2\"
                data-items-mobile=\"1\"
                data-items-mobile-sm=\"1\"
                data-margin=\"15\"
              >
                <div class=\"item\">
                  <div class=\"iq-team2\">
                    <div class=\"iq-team-img\">
                      <img
                        src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/team/7.png"), "html", null, true);
        echo "\"
                        class=\"img-fluid rounded-circle\"
                        alt=\"#1\"
                      />
                    </div>
                    <div class=\"iq-team-info text-center\">
                      <a href=\"team-details.html\"><h5>Guetat Youssef</h5></a>
                      <span class=\"team-post\">directeur général</span>
                      <div class=\"share\">
                        <ul>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-google\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-github\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item\">
                  <div class=\"iq-team2\">
                    <div class=\"iq-team-img\">
                      <img
                        src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/team/8.png"), "html", null, true);
        echo "\"
                        class=\"img-fluid rounded-circle\"
                        alt=\"#1\"
                      />
                    </div>
                    <div class=\"iq-team-info text-center\">
                      <a href=\"team-details.html\"><h5>Trifi Aymen</h5></a>
                      <span class=\"team-post\">Développeur</span>
                      <div class=\"share\">
                        <ul>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-google\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-github\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item\">
                  <div class=\"iq-team2\">
                    <div class=\"iq-team-img\">
                      <img
                        src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/team/9.png"), "html", null, true);
        echo "\"
                        class=\"img-fluid rounded-circle\"
                        alt=\"#1\"
                      />
                    </div>
                    <div class=\"iq-team-info text-center\">
                      <a href=\"team-details.html\"><h5>Akremi Houssem</h5></a>
                      <span class=\"team-post\">Développeur</span>
                      <div class=\"share\">
                        <ul>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-google\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-github\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item\">
                  <div class=\"iq-team2\">
                    <div class=\"iq-team-img\">
                      <img
                        src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/team/11.png"), "html", null, true);
        echo "\"
                        class=\"img-fluid rounded-circle\"
                        alt=\"#1\"
                      />
                    </div>
                    <div class=\"iq-team-info text-center\">
                      <a href=\"team-details.html\"><h5>Bibi Adly</h5></a>
                      <span class=\"team-post\">Dessinateur graphique</span>
                      <div class=\"share\">
                        <ul>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-google\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-github\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item\">
                  <div class=\"iq-team2\">
                    <div class=\"iq-team-img\">
                      <img
                        src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/team/10.png"), "html", null, true);
        echo "\"
                        class=\"img-fluid rounded-circle\"
                        alt=\"#1\"
                      />
                    </div>
                    <div class=\"iq-team-info text-center\">
                      <a href=\"team-details.html\"><h5>Ryahm Ali</h5></a>
                      <span class=\"team-post\">Responsable RH</span>
                      <div class=\"share\">
                        <ul>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-google\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-github\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"scrolling-text bottam left default\">
          <div
            data-bottom=\"transform:translatex(-300px)\"
            data-top=\"transform:translatex(0);\"
          >
            Notre Équipe
          </div>
        </div>
      </section>
      <!-- Our Team  end -->
      <!-- Client Testimonial start -->
      <section id=\"our-clients\" class=\"our-clients gray-bg\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"title-box text-center\">
                <span class=\"text-warning\">Client Note</span>
                <h2 class=\"title\">Customer Testimonial</h2>
                <p class=\"mb-0\">
                  It is a long established fact that a reader will be distracted
                </p>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-12 col-md-12\">
              <div
                class=\"owl-carousel\"
                data-autoplay=\"true\"
                data-loop=\"true\"
                data-nav=\"false\"
                data-dots=\"true\"
                data-items=\"3\"
                data-items-laptop=\"3\"
                data-items-tab=\"2\"
                data-items-mobile=\"1\"
                data-items-mobile-sm=\"1\"
                data-margin=\"30\"
              >
                <div class=\"item\">
                  <div class=\"iq-testimonial\">
                    <div class=\"testimonial-img\">
                      <img
                        class=\"img-fluid rounded-circle\"
                        src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/testimonial/01.jpg"), "html", null, true);
        echo "\"
                        alt=\"#\"
                      />
                    </div>
                    <p>
                      “Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a over 2000 years old.”
                    </p>
                    <div class=\"testimonial-info\">
                      <div class=\"testimonial-name\">
                        <h5>Richardson</h5>
                        <span class=\"sub-title\">Developer, Bizbag</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item\">
                  <div class=\"iq-testimonial\">
                    <div class=\"testimonial-img\">
                      <img
                        alt=\"#\"
                        class=\"img-fluid rounded-circle\"
                        src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/testimonial/02.jpg"), "html", null, true);
        echo "\"
                      />
                    </div>
                    <p>
                      “Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a over 2000 years old.”
                    </p>
                    <div class=\"testimonial-info\">
                      <div class=\"testimonial-name\">
                        <h5>Morales</h5>
                        <span class=\"sub-title\">Designer, CEO </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item\">
                  <div class=\"iq-testimonial\">
                    <div class=\"testimonial-img\">
                      <img
                        alt=\"#\"
                        class=\"img-fluid rounded-circle\"
                        src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/testimonial/03.jpg"), "html", null, true);
        echo "\"
                      />
                    </div>
                    <p>
                      “Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a over 2000 years old.”
                    </p>
                    <div class=\"testimonial-info\">
                      <div class=\"testimonial-name\">
                        <h5>Kelly</h5>
                        <span class=\"sub-title\">Designer, Co-Founder</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"scrolling-text bottam right default\">
          <div
            data-bottom=\"transform:translatex(300px)\"
            data-top=\"transform:translatex(0);\"
          >
            Our Testimonial
          </div>
        </div>
      </section>
      <!--Client Testimonial end -->
      <!-- Our Blog Start -->
      <section class=\"iq-creative\">
        <div class=\"container\">
          <div class=\"row flex-row-reverse\">
            <div class=\"col-lg-6\">
              <img src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/about/08.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\" />
              <div class=\"iq-objects-style-1\">
                <span
                  class=\"iq-objects-01\"
                  data-bottom=\"transform:translatey(-50px)\"
                  data-top=\"transform:translatey(-50px);\"
                >
                  <img src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/effect/01.jpg"), "html", null, true);
        echo "\" alt=\"drive02\" />
                </span>
                <span
                  class=\"iq-objects-02\"
                  data-bottom=\"transform:translatey(50px)\"
                  data-top=\"transform:translatey(-100px);\"
                >
                  <img src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/effect/02.jpg"), "html", null, true);
        echo "\" alt=\"drive02\" />
                </span>
                <span
                  class=\"iq-objects-03\"
                  data-bottom=\"transform:translatex(50px)\"
                  data-top=\"transform:translatex(-100px);\"
                >
                  <img src=\"";
        // line 706
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/effect/03.jpg"), "html", null, true);
        echo "\" alt=\"drive02\" />
                </span>
              </div>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"title-box text-left\">
                <span class=\"text-warning\">À propos de nous</span>
                <h2 class=\"title\">
                  Nous avons une équipe créative qui a construit votre succès.
                </h2>
                <p class=\"mb-0\">Votre SandBoX .</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 153
    public function block_insc($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "insc"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "insc"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 723
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 724
        echo "      <!--Our Blog End -->
      <div class=\"footer-subscribe\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <h3 class=\"subscribe-heading\">Abonnez-Vous Maintenant</h3>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-fields\">
                <input
                  type=\"email\"
                  name=\"EMAIL\"
                  placeholder=\"Votre E-mail\"
                  required=\"\"
                />
                <a class=\"button btn-yellow\" href=\"#\">S'inscrire</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Content End -->
    <!-- Footer Start -->
    <footer>
      <div class=\"container\">
        <div class=\"footer-top mt-5\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"footer-logo\">
                <a href=\"#\">
                  <img class=\"img-fluid\" src=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/looo.png"), "html", null, true);
        echo "\" alt=\"bizbag1\" />
                </a>
              </div>
              <div class=\"widget\">
                <div class=\"textwidget\">
                  <p>
                    Avoir le bon financement au bon moment avec le bon investisseur.
                    Avoir votre succès.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6 col-md-18 col-sm-18\">
              <div class=\"widget\">
              <div class=\"textwidget\">
                <p>
                  Dans le cadre de la mise en place d’un outil numérique de gestion des demandes de financement simple et rapide,
                   la marketplace SandBoX a été créée afin de mettre en relation des entrepreneurs tunisiennes avec des sources de
                    financement pour leur permettre d’assurer un rééquilibrage de leur bilan, 
                    un développement de leur portefeuille d’activité visant le maintien et la relance de leur croissance.
                </p>

              </div>
              </div>
            </div>
            
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"widget\">
                <h4 class=\"footer-title contact-info\">Contactez-Nous</h4>
                <ul class=\"iq-contact\">
                  <li>
                    <a href=\"tel:+0123456789\"
                      ><i class=\"fas fa-phone\"></i>+21655025447</a
                    >
                  </li>
                  <li>
                    <a href=\"mailto:support@bizbag.com\"
                      ><i class=\"fas fa-envelope\"></i>support.tn@sandbox.tn</a
                    >
                  </li>
                  <li>
                    <p>
                      <i class=\"fas fa-map-marker-alt\"></i> La Petite Ariana, Ariana, Tunisie 2082
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"copyright-footer pb-3 pt-3\">
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-6 mb-2 mb-lg-0\">
                <span class=\"copyright\"
                  >
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  | Bienvenue chez SandBoX</span
                >
              </div>
              <div class=\"col-lg-6 col-md-6\">
                <div class=\"social-icone\">
                  <ul>
                    <li class=\"d-inline\">
                      <a href=\"https://www.facebook.com/\"
                        ><i class=\"fab fa-facebook-f\"></i
                      ></a>
                    </li>
                    <li class=\"d-inline\">
                      <a href=\"https://twitter.com/\"
                        ><i class=\"fab fa-twitter\"></i
                      ></a>
                    </li>
                    <li class=\"d-inline\">
                      <a href=\"https://plus.google.com/\"
                        ><i class=\"fab fa-google-plus-g\"></i
                      ></a>
                    </li>
                    <li class=\"d-inline\">
                      <a href=\"https://www.instagram.com/\"
                        ><i class=\"fab fa-instagram\"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->
    <!-- back-to-top -->
    <div id=\"back-to-top\">
      <a class=\"top\" id=\"top\" href=\"#top\"> <i class=\"ion-ios-arrow-up\"></i> </a>
    </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 852
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 853
        echo "    <!-- back-to-top End -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"";
        // line 855
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- popper  -->
    <script src=\"";
        // line 857
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <!--  bootstrap -->
    <script src=\"";
        // line 859
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Appear JavaScript -->
    <script src=\"";
        // line 861
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/appear.js"), "html", null, true);
        echo "\"></script>
    <!-- Mega menu JavaScript -->
    <script src=\"";
        // line 863
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/mega_menu.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Count Down JavaScript -->
    <script src=\"";
        // line 865
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/countdown.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Owl Carousel JavaScript -->
    <script src=\"";
        // line 867
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Magnific Popup JavaScript -->
    <script src=\"";
        // line 869
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <!--  Counter -->
    <script src=\"";
        // line 871
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
    <!-- Skrollr JavaScript -->
    <script src=\"";
        // line 873
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/skrollr.js"), "html", null, true);
        echo "\"></script>
    <!-- Isotope JavaScript -->
    <script src=\"";
        // line 875
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Wow JavaScript -->
    <script src=\"";
        // line 878
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/wow.min.js"), "html", null, true);
        echo "\"></script>

    <!--  Custom -->
    <script src=\"";
        // line 881
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/custom.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/homeC.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1215 => 881,  1209 => 878,  1203 => 875,  1198 => 873,  1193 => 871,  1188 => 869,  1183 => 867,  1178 => 865,  1173 => 863,  1168 => 861,  1163 => 859,  1158 => 857,  1153 => 855,  1149 => 853,  1139 => 852,  1032 => 755,  999 => 724,  989 => 723,  971 => 153,  944 => 706,  934 => 699,  924 => 692,  914 => 685,  877 => 651,  853 => 630,  828 => 608,  750 => 533,  716 => 502,  682 => 471,  648 => 440,  614 => 409,  494 => 292,  484 => 285,  474 => 278,  461 => 268,  356 => 166,  342 => 154,  340 => 153,  325 => 140,  315 => 139,  294 => 112,  274 => 129,  254 => 112,  248 => 109,  237 => 101,  187 => 56,  161 => 33,  157 => 31,  147 => 30,  134 => 25,  129 => 23,  124 => 21,  119 => 19,  114 => 17,  109 => 15,  104 => 13,  93 => 4,  83 => 3,  71 => 883,  68 => 852,  65 => 723,  62 => 139,  60 => 30,  56 => 28,  54 => 3,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  {%block head%}
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />
    <title>SandBoX_Tn</title>
    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"{{asset('front/images/log1.png')}}\" />
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('front/css/bootstrap.min.css')}}\" />
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('front/css/animate.css')}}\" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('front/revsilder/css/settings.css')}}\" />
    <!-- Typography CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('front/css/typography.css')}}\" />
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('front/css/style.css')}}\" />
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('front/css/responsive.css')}}\" />
  </head>
  {%endblock%}
  <body>
    <!-- loading -->
    {% block header%}
    <div id=\"loading\">
      <div id=\"loading-center\">
        <img src=\"{{asset('front/images/logoGif1.gif')}}\" alt=\"loader\" />
      </div>
    </div>
    <!-- loading End -->
    <!-- Header Start -->
    <header id=\"main-header\" class=\"header-one\">
      <div class=\"topbar\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-lg-6 col-md-6\">
              <div class=\"number-info\">
                <ul>
                  <li class=\"email-header\">
                    <a href=\"mailto:support@bizbag.com\">
                      <i class=\"fas fa-envelope\"></i>support.tn@sandbox.tn</a
                    >
                  </li>
                  <li class=\"phone-header\">
                    <a href=\"tel:+0123456789\">
                      <i class=\"fas fa-phone\"></i>+21655025447</a
                    >
                  </li>
                  <li class=\"phone-header\">
                    <span class=\"text-warning\">Bienvenue {{ nom }} {{ prenom }}</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
              <div class=\"social-icone text-right\">
                <ul>
                  <li class=\"d-inline\">
                    <a href=\"https://www.facebook.com/\"
                      ><i class=\"fab fa-facebook-f\"></i
                    ></a>
                  </li>
                  <li class=\"d-inline\">
                    <a href=\"https://twitter.com/\"
                      ><i class=\"fab fa-twitter\"></i
                    ></a>
                  </li>
                  <li class=\"d-inline\">
                    <a href=\"https://plus.google.com/\"
                      ><i class=\"fab fa-google-plus-g\"></i
                    ></a>
                  </li>
                  <li class=\"d-inline\">
                    <a href=\"https://www.instagram.com/\"
                      ><i class=\"fab fa-instagram\"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- menu start -->
      <nav id=\"menu-1\" class=\"mega-menu\" data-color=\"\">
        <!-- menu list items container -->
        <div class=\"menu-list-items\">
          <div class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-sm-12\">
                <!-- menu logo -->
                <ul class=\"menu-logo\">
                  <li>
                    <a href=\"index.html\"
                      ><img src=\"{{asset('front/images/looo.png')}}\" alt=\"logo\" class=\"img-fluid\"
                    /></a>
                  </li>
                </ul>
                <!-- menu links -->
                <ul class=\"menu-links\">
                  <!-- active class -->
                  <li class=\"active\">
                     <a href=\"{{path('app_acceuil')}}\">ACCEUIL</a>
                  </li>
                  <li>
                   {%block prof%}  <a href=\"{{path('app_profile', {'id': idp})}}\">PROFILE</a> {%endblock%} 
               </li>
               <li>
                  <a href=\"javascript:void(0)\">ANNONCES</a>
                  <!-- drop down multilevel  -->
                  <ul class=\"drop-down-multilevel\">
                     <li><a href=\"annonceentrepreneur.html\">PUBLIER</a></li>
                     <li><a href=\"listeAnnonces.html\">LISTE ANNONCES</a></li>
                  </ul>
               </li>
               <li>
                  <a href=\"evenement.html\">EVENEMENTS</a>
               </li>
               <li>
                  <a href=\"reclamation.html\">RECLAMATION</a>
                  <!-- drop down multilevel  -->
               </li>
               <li><a class=\"button btn-hdr\" href=\"{{ path('app_logout') }}\">Déconnecter</a></li>
            </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- menu end -->
    </header>
    {%endblock%}
    {% block contenu%}
    <!-- Header End -->
    <!-- Slider Banner Start -->
    <div class=\"iq-banner\">
      <div class=\"container\">
        <div class=\"row slider-row-2 text-center justify-content-between\">
          <div class=\"col-lg-12 mb-5 mb-6\">
            <div class=\"slider-banner slider-banner2\">
              <h2 class=\"text-uppercase banner-title\">A quoi vous pensez ?</h2>
              <p class=\"mb-4\">
                Avoir le bon financement au bon moment avec le bon
                investisseur.<br />
                Avoir votre succès.
              </p>
              {%block insc%}{%endblock%}
            </div>
          </div>
          <div class=\"col-lg-12\">
            <div class=\"slider-image-2 slide-2\">
              <div class=\"slider-1\"></div>
              <div class=\"slider-2\"></div>
              <div class=\"slider-3\"></div>
              <div class=\"slider-4\"></div>
              <div class=\"slider-5\"></div>
              <div class=\"slider-6\"></div>
              <img
                class=\"banner-img img-fluid center-block\"
                src=\"{{asset('front/images/slider/banner-2/01.png')}}\"
                alt=\"\"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Banner End -->
    <!-- Main-Content Start -->
    <div class=\"main-content\">
      <!-- Fancy Box Start -->
      <section class=\"fancy-box gray-bg\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"title-box text-center\">
                <span class=\"text-warning\">Meilleurs services</span>
                <h2 class=\"title\">Ce que nous excellons</h2>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 mb-5\">
              <div class=\"iq-fancy-box text-center\">
                <div class=\"iq-icon\">
                  <i aria-hidden=\"true\" class=\"ion ion-ios-pie-outline\"></i>
                </div>
                <div class=\"fancy-content\">
                  <h4>Performance</h4>
                  <p>
                    Notre site Web offre d'excellentes performances avec
                    simplicité et facilité d'utilisation.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
              <div class=\"iq-fancy-box text-center\">
                <div class=\"iq-icon\">
                  <i aria-hidden=\"true\" class=\"ion ion-ios-glasses-outline\"></i>
                </div>
                <div class=\"fancy-content\">
                  <h4>Sécurité</h4>
                  <p>
                    Nous garantissons une protection totale de vos données
                    personnelles ainsi que la protection de vos idées grâce à
                    notre contrat avec l'INNORPI.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0 mb-md-0\">
              <div class=\"iq-fancy-box text-center\">
                <div class=\"iq-icon\">
                  <i aria-hidden=\"true\" class=\"ion ion-android-bulb\"></i>
                </div>
                <div class=\"fancy-content\">
                  <h4>Idées intéressantes</h4>
                  <p>
                    Nous vous offrons la meilleure opportunité de vous inspirer
                    pour la réussite de vos projets.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"iq-fancy-box text-center\">
                <div class=\"iq-icon\">
                  <i
                    aria-hidden=\"true\"
                    class=\"ion ion-ios-stopwatch-outline\"
                  ></i>
                </div>
                <div class=\"fancy-content\">
                  <h4>Timing</h4>
                  <p>
                    Nos services sont disponibles à tout moment et dans les
                    meilleurs délais.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Fancy Box End -->
      <!-- Features Box Start -->
      <section class=\"features-box\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"title-box text-center\">
                <span class=\"text-warning\">Notre Plan</span>
                <h2 class=\"title\">Comment nous travaillons</h2>
                <p class=\"mb-0\">Nous avons trois étapes globales</p>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-6 col-md-12 text-center\">
              <img
                src=\"{{asset('front/images/features/04.png')}}\"
                class=\"img-fluid center-block\"
                alt=\"#\"
              />
              <div class=\"iq-objects-style-1\">
                <span
                  class=\"iq-objects-01\"
                  data-bottom=\"transform:translatey(-50px)\"
                  data-top=\"transform:translatey(-50px);\"
                >
                  <img src=\"{{asset('front/images/effect/01.jpg')}}\" alt=\"drive02\" />
                </span>
                <span
                  class=\"iq-objects-02\"
                  data-bottom=\"transform:translatey(50px)\"
                  data-top=\"transform:translatey(-100px);\"
                >
                  <img src=\"{{asset('front/images/effect/02.jpg')}}\" alt=\"drive02\" />
                </span>
                <span
                  class=\"iq-objects-03\"
                  data-bottom=\"transform:translatex(50px)\"
                  data-top=\"transform:translatex(-100px);\"
                >
                  <img src=\"{{asset('front/images/effect/03.jpg\" alt=\"drive02')}}\" />
                </span>
              </div>
            </div>
            <div class=\"col-lg-6 col-md-12 mt-5 mt-lg-0\">
              <div class=\"feature-box text- mb-5\">
                <div class=\"feature-number\">01</div>
                <div class=\"feature-info\">
                  <h4>Publier une annonce</h4>
                  <p class=\"mb-0\">
                    Vous pouvez poster vos idées ou rechercher des annonces qui
                    sont correspondants avec vos idées (des projets ou des
                    investissements).
                  </p>
                </div>
              </div>
              <div class=\"feature-box text- ml-5 mb-5\">
                <div class=\"feature-number\">02</div>
                <div class=\"feature-info\">
                  <h4>Demander un rendez-vous</h4>
                  <p class=\"mb-0\">
                    Vous pouvez demander un rendez-vous au propriétaire d’une
                    annonce que vous avez trouvé sur notre site ou à l’un de nos
                    évènements.
                  </p>
                </div>
              </div>
              <div class=\"feature-box text-\">
                <div class=\"feature-number\">03</div>
                <div class=\"feature-info\">
                  <h4>Signer un contrat</h4>
                  <p class=\"mb-0\">
                    Après le rendez-vous et en cas d'accord entre les deux
                    parties, nous pouvons procéder à la signature du contrat et
                    commencer les détails du projet.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"scrolling-text top right default\">
          <div
            data-bottom=\"transform:translatex(300px)\"
            data-top=\"transform:translatex(0);\"
          >
            Nos Étapes
          </div>
        </div>
      </section>
      <!-- Features Box End -->
      <!-- Our Portfolio Start -->
      <section class=\"counter-box gray-bg\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0 text-center\">
              <div class=\"iq-timer\">
                <i aria-hidden=\"true\" class=\"flaticon flaticon-project-1\"></i>
                <span class=\"timer\" data-to=\"1520\" data-speed=\"5000\">1520</span>
                <h6>Projets Réalisés</h6>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0 text-center\">
              <div class=\"iq-timer\">
                <i aria-hidden=\"true\" class=\"flaticon flaticon-enjoy\"></i>
                <span class=\"timer\" data-to=\"2100\" data-speed=\"5000\">2100</span>
                <h6>Clients Satisfaits</h6>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0 mb-md-0 text-center\">
              <div class=\"iq-timer\">
                <i aria-hidden=\"true\" class=\"flaticon flaticon-project\"></i>
                <span class=\"timer\" data-to=\"1200\" data-speed=\"5000\">1200</span>
                <h6>Projets en Cours</h6>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 text-center\">
              <div class=\"iq-timer\">
                <i aria-hidden=\"true\" class=\"flaticon flaticon-support\"></i>
                <span class=\"timer\" data-to=\"5\" data-speed=\"5000\">5</span>
                <h6>Administrateurs</h6>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Project End -->
      <!-- Our Team start -->
      <section id=\"our-team\" class=\"our-team\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"title-box text-center\">
                <span class=\"text-warning\">Leadership</span>
                <h2 class=\"title\">Équipe App Monsters</h2>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-12 col-md-12\">
              <div
                class=\"owl-carousel\"
                data-autoplay=\"true\"
                data-loop=\"true\"
                data-nav=\"false\"
                data-dots=\"true\"
                data-items=\"4\"
                data-items-laptop=\"4\"
                data-items-tab=\"2\"
                data-items-mobile=\"1\"
                data-items-mobile-sm=\"1\"
                data-margin=\"15\"
              >
                <div class=\"item\">
                  <div class=\"iq-team2\">
                    <div class=\"iq-team-img\">
                      <img
                        src=\"{{asset('front/images/team/7.png')}}\"
                        class=\"img-fluid rounded-circle\"
                        alt=\"#1\"
                      />
                    </div>
                    <div class=\"iq-team-info text-center\">
                      <a href=\"team-details.html\"><h5>Guetat Youssef</h5></a>
                      <span class=\"team-post\">directeur général</span>
                      <div class=\"share\">
                        <ul>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-google\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-github\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item\">
                  <div class=\"iq-team2\">
                    <div class=\"iq-team-img\">
                      <img
                        src=\"{{asset('front/images/team/8.png')}}\"
                        class=\"img-fluid rounded-circle\"
                        alt=\"#1\"
                      />
                    </div>
                    <div class=\"iq-team-info text-center\">
                      <a href=\"team-details.html\"><h5>Trifi Aymen</h5></a>
                      <span class=\"team-post\">Développeur</span>
                      <div class=\"share\">
                        <ul>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-google\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-github\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item\">
                  <div class=\"iq-team2\">
                    <div class=\"iq-team-img\">
                      <img
                        src=\"{{asset('front/images/team/9.png')}}\"
                        class=\"img-fluid rounded-circle\"
                        alt=\"#1\"
                      />
                    </div>
                    <div class=\"iq-team-info text-center\">
                      <a href=\"team-details.html\"><h5>Akremi Houssem</h5></a>
                      <span class=\"team-post\">Développeur</span>
                      <div class=\"share\">
                        <ul>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-google\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-github\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item\">
                  <div class=\"iq-team2\">
                    <div class=\"iq-team-img\">
                      <img
                        src=\"{{asset('front/images/team/11.png')}}\"
                        class=\"img-fluid rounded-circle\"
                        alt=\"#1\"
                      />
                    </div>
                    <div class=\"iq-team-info text-center\">
                      <a href=\"team-details.html\"><h5>Bibi Adly</h5></a>
                      <span class=\"team-post\">Dessinateur graphique</span>
                      <div class=\"share\">
                        <ul>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-google\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-github\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item\">
                  <div class=\"iq-team2\">
                    <div class=\"iq-team-img\">
                      <img
                        src=\"{{asset('front/images/team/10.png')}}\"
                        class=\"img-fluid rounded-circle\"
                        alt=\"#1\"
                      />
                    </div>
                    <div class=\"iq-team-info text-center\">
                      <a href=\"team-details.html\"><h5>Ryahm Ali</h5></a>
                      <span class=\"team-post\">Responsable RH</span>
                      <div class=\"share\">
                        <ul>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-google\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-github\"></i></a>
                          </li>
                          <li>
                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"scrolling-text bottam left default\">
          <div
            data-bottom=\"transform:translatex(-300px)\"
            data-top=\"transform:translatex(0);\"
          >
            Notre Équipe
          </div>
        </div>
      </section>
      <!-- Our Team  end -->
      <!-- Client Testimonial start -->
      <section id=\"our-clients\" class=\"our-clients gray-bg\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"title-box text-center\">
                <span class=\"text-warning\">Client Note</span>
                <h2 class=\"title\">Customer Testimonial</h2>
                <p class=\"mb-0\">
                  It is a long established fact that a reader will be distracted
                </p>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-12 col-md-12\">
              <div
                class=\"owl-carousel\"
                data-autoplay=\"true\"
                data-loop=\"true\"
                data-nav=\"false\"
                data-dots=\"true\"
                data-items=\"3\"
                data-items-laptop=\"3\"
                data-items-tab=\"2\"
                data-items-mobile=\"1\"
                data-items-mobile-sm=\"1\"
                data-margin=\"30\"
              >
                <div class=\"item\">
                  <div class=\"iq-testimonial\">
                    <div class=\"testimonial-img\">
                      <img
                        class=\"img-fluid rounded-circle\"
                        src=\"{{asset('front/images/testimonial/01.jpg')}}\"
                        alt=\"#\"
                      />
                    </div>
                    <p>
                      “Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a over 2000 years old.”
                    </p>
                    <div class=\"testimonial-info\">
                      <div class=\"testimonial-name\">
                        <h5>Richardson</h5>
                        <span class=\"sub-title\">Developer, Bizbag</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item\">
                  <div class=\"iq-testimonial\">
                    <div class=\"testimonial-img\">
                      <img
                        alt=\"#\"
                        class=\"img-fluid rounded-circle\"
                        src=\"{{asset('front/images/testimonial/02.jpg')}}\"
                      />
                    </div>
                    <p>
                      “Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a over 2000 years old.”
                    </p>
                    <div class=\"testimonial-info\">
                      <div class=\"testimonial-name\">
                        <h5>Morales</h5>
                        <span class=\"sub-title\">Designer, CEO </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item\">
                  <div class=\"iq-testimonial\">
                    <div class=\"testimonial-img\">
                      <img
                        alt=\"#\"
                        class=\"img-fluid rounded-circle\"
                        src=\"{{asset('front/images/testimonial/03.jpg')}}\"
                      />
                    </div>
                    <p>
                      “Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a over 2000 years old.”
                    </p>
                    <div class=\"testimonial-info\">
                      <div class=\"testimonial-name\">
                        <h5>Kelly</h5>
                        <span class=\"sub-title\">Designer, Co-Founder</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"scrolling-text bottam right default\">
          <div
            data-bottom=\"transform:translatex(300px)\"
            data-top=\"transform:translatex(0);\"
          >
            Our Testimonial
          </div>
        </div>
      </section>
      <!--Client Testimonial end -->
      <!-- Our Blog Start -->
      <section class=\"iq-creative\">
        <div class=\"container\">
          <div class=\"row flex-row-reverse\">
            <div class=\"col-lg-6\">
              <img src=\"{{asset('front/images/about/08.png')}}\" class=\"img-fluid\" alt=\"#\" />
              <div class=\"iq-objects-style-1\">
                <span
                  class=\"iq-objects-01\"
                  data-bottom=\"transform:translatey(-50px)\"
                  data-top=\"transform:translatey(-50px);\"
                >
                  <img src=\"{{asset('front/images/effect/01.jpg')}}\" alt=\"drive02\" />
                </span>
                <span
                  class=\"iq-objects-02\"
                  data-bottom=\"transform:translatey(50px)\"
                  data-top=\"transform:translatey(-100px);\"
                >
                  <img src=\"{{asset('front/images/effect/02.jpg')}}\" alt=\"drive02\" />
                </span>
                <span
                  class=\"iq-objects-03\"
                  data-bottom=\"transform:translatex(50px)\"
                  data-top=\"transform:translatex(-100px);\"
                >
                  <img src=\"{{asset('front/images/effect/03.jpg')}}\" alt=\"drive02\" />
                </span>
              </div>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"title-box text-left\">
                <span class=\"text-warning\">À propos de nous</span>
                <h2 class=\"title\">
                  Nous avons une équipe créative qui a construit votre succès.
                </h2>
                <p class=\"mb-0\">Votre SandBoX .</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      {%endblock%}
      {% block footer%}
      <!--Our Blog End -->
      <div class=\"footer-subscribe\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <h3 class=\"subscribe-heading\">Abonnez-Vous Maintenant</h3>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-fields\">
                <input
                  type=\"email\"
                  name=\"EMAIL\"
                  placeholder=\"Votre E-mail\"
                  required=\"\"
                />
                <a class=\"button btn-yellow\" href=\"#\">S'inscrire</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Content End -->
    <!-- Footer Start -->
    <footer>
      <div class=\"container\">
        <div class=\"footer-top mt-5\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"footer-logo\">
                <a href=\"#\">
                  <img class=\"img-fluid\" src=\"{{asset('front/images/looo.png')}}\" alt=\"bizbag1\" />
                </a>
              </div>
              <div class=\"widget\">
                <div class=\"textwidget\">
                  <p>
                    Avoir le bon financement au bon moment avec le bon investisseur.
                    Avoir votre succès.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6 col-md-18 col-sm-18\">
              <div class=\"widget\">
              <div class=\"textwidget\">
                <p>
                  Dans le cadre de la mise en place d’un outil numérique de gestion des demandes de financement simple et rapide,
                   la marketplace SandBoX a été créée afin de mettre en relation des entrepreneurs tunisiennes avec des sources de
                    financement pour leur permettre d’assurer un rééquilibrage de leur bilan, 
                    un développement de leur portefeuille d’activité visant le maintien et la relance de leur croissance.
                </p>

              </div>
              </div>
            </div>
            
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"widget\">
                <h4 class=\"footer-title contact-info\">Contactez-Nous</h4>
                <ul class=\"iq-contact\">
                  <li>
                    <a href=\"tel:+0123456789\"
                      ><i class=\"fas fa-phone\"></i>+21655025447</a
                    >
                  </li>
                  <li>
                    <a href=\"mailto:support@bizbag.com\"
                      ><i class=\"fas fa-envelope\"></i>support.tn@sandbox.tn</a
                    >
                  </li>
                  <li>
                    <p>
                      <i class=\"fas fa-map-marker-alt\"></i> La Petite Ariana, Ariana, Tunisie 2082
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"copyright-footer pb-3 pt-3\">
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-6 mb-2 mb-lg-0\">
                <span class=\"copyright\"
                  >
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  | Bienvenue chez SandBoX</span
                >
              </div>
              <div class=\"col-lg-6 col-md-6\">
                <div class=\"social-icone\">
                  <ul>
                    <li class=\"d-inline\">
                      <a href=\"https://www.facebook.com/\"
                        ><i class=\"fab fa-facebook-f\"></i
                      ></a>
                    </li>
                    <li class=\"d-inline\">
                      <a href=\"https://twitter.com/\"
                        ><i class=\"fab fa-twitter\"></i
                      ></a>
                    </li>
                    <li class=\"d-inline\">
                      <a href=\"https://plus.google.com/\"
                        ><i class=\"fab fa-google-plus-g\"></i
                      ></a>
                    </li>
                    <li class=\"d-inline\">
                      <a href=\"https://www.instagram.com/\"
                        ><i class=\"fab fa-instagram\"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->
    <!-- back-to-top -->
    <div id=\"back-to-top\">
      <a class=\"top\" id=\"top\" href=\"#top\"> <i class=\"ion-ios-arrow-up\"></i> </a>
    </div>
    {% endblock %}
    {%block js%}
    <!-- back-to-top End -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"{{asset('front/js/jquery-1.11.1.min.js')}}\"></script>
    <!-- popper  -->
    <script src=\"{{asset('front/js/popper.min.js')}}\"></script>
    <!--  bootstrap -->
    <script src=\"{{asset('front/js/bootstrap.min.js')}}\"></script>
    <!-- Appear JavaScript -->
    <script src=\"{{asset('front/js/appear.js')}}\"></script>
    <!-- Mega menu JavaScript -->
    <script src=\"{{asset('front/js/mega_menu.min.js')}}\"></script>
    <!-- Count Down JavaScript -->
    <script src=\"{{asset('front/js/countdown.min.js')}}\"></script>
    <!-- Owl Carousel JavaScript -->
    <script src=\"{{asset('front/js/owl.carousel.min.js')}}\"></script>
    <!-- Magnific Popup JavaScript -->
    <script src=\"{{asset('front/js/jquery.magnific-popup.min.js')}}\"></script>
    <!--  Counter -->
    <script src=\"{{asset('front/js/jquery.countTo.js')}}\"></script>
    <!-- Skrollr JavaScript -->
    <script src=\"{{asset('front/js/skrollr.js')}}\"></script>
    <!-- Isotope JavaScript -->
    <script src=\"{{asset('front/js/isotope.pkgd.min.js')}}\"></script>

    <!-- Wow JavaScript -->
    <script src=\"{{asset('front/js/wow.min.js')}}\"></script>

    <!--  Custom -->
    <script src=\"{{asset('front/js/custom.js')}}\"></script>
    {%endblock%}
  </body>
</html>
", "front/homeC.html.twig", "C:\\Users\\Dell\\Desktop\\PI_DEV\\Projet_PIDEV\\templates\\front\\homeC.html.twig");
    }
}
