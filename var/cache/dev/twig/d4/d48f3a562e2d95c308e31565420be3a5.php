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

/* back/GestionUtilisateur/login.html.twig */
class __TwigTemplate_54f6147e271c37ee06f8b86512be64f6 extends Template
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
            'body' => [$this, 'block_body'],
            'contenu' => [$this, 'block_contenu'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/GestionUtilisateur/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/GestionUtilisateur/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\" dir=\"ltr\">

  
<!-- Mirrored from prium.github.io/falcon/v3.3.0/pages/authentication/simple/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 08:41:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 58
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 178
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 193
        echo "
<!-- Mirrored from prium.github.io/falcon/v3.3.0/pages/authentication/simple/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 08:41:31 GMT -->
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 8
        echo "<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/favicons/apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/favicons/favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/favicons/favicon-16x16.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/favicons/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/favicons/manifest.json"), "html", null, true);
        echo "\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/favicons/mstile-150x150.png"), "html", null, true);
        echo "\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/config.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/overlayscrollbars/OverlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/overlayscrollbars/OverlayScrollbars.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/theme-rtl.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style-rtl\">
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style-default\">
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/user-rtl.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"user-style-rtl\">
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/user.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"user-style-default\">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class=\"main\" id=\"top\">
      <div class=\"container\" data-layout=\"container\">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <div class=\"row flex-center min-vh-100 py-6\">
          <div class=\"col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4\"><a class=\"d-flex flex-center mb-4\" href=\"index.html\"><img class=\"me-2\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" width=\"200\" /><span class=\"font-sans-serif fw-bolder fs-5 d-inline-block\"></span></a>
            <div class=\"card\">
              ";
        // line 76
        $this->displayBlock('contenu', $context, $blocks);
        // line 97
        echo "            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class=\"offcanvas offcanvas-end settings-panel border-0\" id=\"settings-offcanvas\" tabindex=\"-1\" aria-labelledby=\"settings-offcanvas\">
      <div class=\"offcanvas-header settings-panel-header bg-shape\">
        <div class=\"z-index-1 py-1 light\">
          <h5 class=\"text-white\"> <span class=\"fas fa-palette me-2 fs-0\"></span>Settings</h5>
          <p class=\"mb-0 fs--1 text-white opacity-75\"> Set your own customized style</p>
        </div><button class=\"btn-close btn-close-white z-index-1 mt-0\" type=\"button\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
      </div>
      <div class=\"offcanvas-body scrollbar-overlay px-card\" id=\"themeController\">
        <h5 class=\"fs-0\">Color Scheme</h5>
        <p class=\"fs--1\">Choose the perfect color mode for your app.</p>
        <div class=\"btn-group d-block w-100 btn-group-navbar-style\">
          <div class=\"row gx-2\">
            <div class=\"col-6\"><input class=\"btn-check\" id=\"themeSwitcherLight\" name=\"theme-color\" type=\"radio\" value=\"light\" data-theme-control=\"theme\" /><label class=\"btn d-inline-block btn-navbar-style fs--1\" for=\"themeSwitcherLight\"> <span class=\"hover-overlay mb-2 rounded d-block\"><img class=\"img-fluid img-prototype mb-0\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/generic/falcon-mode-default.jpg"), "html", null, true);
        echo "\" alt=\"\"/></span><span class=\"label-text\">Light</span></label></div>
            <div class=\"col-6\"><input class=\"btn-check\" id=\"themeSwitcherDark\" name=\"theme-color\" type=\"radio\" value=\"dark\" data-theme-control=\"theme\" /><label class=\"btn d-inline-block btn-navbar-style fs--1\" for=\"themeSwitcherDark\"> <span class=\"hover-overlay mb-2 rounded d-block\"><img class=\"img-fluid img-prototype mb-0\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/generic/falcon-mode-dark.jpg"), "html", null, true);
        echo "\" alt=\"\"/></span><span class=\"label-text\"> Dark</span></label></div>
          </div>
        </div>
        <hr />
        <div class=\"d-flex justify-content-between\">
          <div class=\"d-flex align-items-start\"><img class=\"me-2\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/icons/left-arrow-from-left.svg"), "html", null, true);
        echo "\" width=\"20\" alt=\"\" />
            <div class=\"flex-1\">
              <h5 class=\"fs-0\">RTL Mode</h5>
              <p class=\"fs--1 mb-0\">Switch your language direction </p><a class=\"fs--1\" href=\"documentation/customization/configuration.html\">RTL Documentation</a>
            </div>
          </div>
          <div class=\"form-check form-switch\"><input class=\"form-check-input ms-0\" id=\"mode-rtl\" type=\"checkbox\" data-theme-control=\"isRTL\" /></div>
        </div>
        <hr />
        <div class=\"d-flex justify-content-between\">
          <div class=\"d-flex align-items-start\"><img class=\"me-2\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/icons/arrows-h.svg"), "html", null, true);
        echo "\" width=\"20\" alt=\"\" />
            <div class=\"flex-1\">
              <h5 class=\"fs-0\">Fluid Layout</h5>
              <p class=\"fs--1 mb-0\">Toggle container layout system </p><a class=\"fs--1\" href=\"documentation/customization/configuration.html\">Fluid Documentation</a>
            </div>
          </div>
          <div class=\"form-check form-switch\"><input class=\"form-check-input ms-0\" id=\"mode-fluid\" type=\"checkbox\" data-theme-control=\"isFluid\" /></div>
        </div>
        <hr />
        <div class=\"d-flex align-items-start\"><img class=\"me-2\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/icons/paragraph.svg"), "html", null, true);
        echo "\" width=\"20\" alt=\"\" />
          <div class=\"flex-1\">
            <h5 class=\"fs-0 d-flex align-items-center\">Navigation Position </h5>
            <p class=\"fs--1 mb-2\">Select a suitable navigation system for your web application </p>
            <div>
              <div class=\"form-check form-check-inline\"><input class=\"form-check-input\" id=\"option-navbar-vertical\" type=\"radio\" name=\"navbar\" value=\"vertical\" data-theme-control=\"navbarPosition\" /><label class=\"form-check-label\" for=\"option-navbar-vertical\">Vertical</label></div>
              <div class=\"form-check form-check-inline\"><input class=\"form-check-input\" id=\"option-navbar-top\" type=\"radio\" name=\"navbar\" value=\"top\" data-theme-control=\"navbarPosition\" /><label class=\"form-check-label\" for=\"option-navbar-top\">Top</label></div>
              <div class=\"form-check form-check-inline me-0\"><input class=\"form-check-input\" id=\"option-navbar-combo\" type=\"radio\" name=\"navbar\" value=\"combo\" data-theme-control=\"navbarPosition\" /><label class=\"form-check-label\" for=\"option-navbar-combo\">Combo</label></div>
            </div>
          </div>
        </div>
        <hr />
        <h5 class=\"fs-0 d-flex align-items-center\">Vertical Navbar Style</h5>
        <p class=\"fs--1 mb-0\">Switch between styles for your vertical navbar </p>
        <p> <a class=\"fs--1\" href=\"modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles\">See Documentation</a></p>
        <div class=\"btn-group d-block w-100 btn-group-navbar-style\">
          <div class=\"row gx-2\">
            <div class=\"col-6\"><input class=\"btn-check\" id=\"navbar-style-transparent\" type=\"radio\" name=\"navbarStyle\" value=\"transparent\" data-theme-control=\"navbarStyle\" /><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-transparent\"> <img class=\"img-fluid img-prototype\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/generic/default.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"label-text\"> Transparent</span></label></div>
            <div class=\"col-6\"><input class=\"btn-check\" id=\"navbar-style-inverted\" type=\"radio\" name=\"navbarStyle\" value=\"inverted\" data-theme-control=\"navbarStyle\" /><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-inverted\"> <img class=\"img-fluid img-prototype\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/generic/inverted.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"label-text\"> Inverted</span></label></div>
            <div class=\"col-6\"><input class=\"btn-check\" id=\"navbar-style-card\" type=\"radio\" name=\"navbarStyle\" value=\"card\" data-theme-control=\"navbarStyle\" /><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-card\"> <img class=\"img-fluid img-prototype\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/generic/card.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"label-text\"> Card</span></label></div>
            <div class=\"col-6\"><input class=\"btn-check\" id=\"navbar-style-vibrant\" type=\"radio\" name=\"navbarStyle\" value=\"vibrant\" data-theme-control=\"navbarStyle\" /><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-vibrant\"> <img class=\"img-fluid img-prototype\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/generic/vibrant.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"label-text\"> Vibrant</span></label></div>
          </div>
        </div>
        <div class=\"text-center mt-5\"><img class=\"mb-4\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/icons/spot-illustrations/47.png"), "html", null, true);
        echo "\" alt=\"\" width=\"120\" />
          <h5>Like What You See?</h5>
          <p class=\"fs--1\">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class=\"mb-3 btn btn-primary\" href=\"https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/\" target=\"_blank\">Purchase</a>
        </div>
      </div>
    </div><a class=\"card setting-toggle\" href=\"#settings-offcanvas\" data-bs-toggle=\"offcanvas\">
      <div class=\"card-body d-flex align-items-center py-md-2 px-2 py-1\">
        <div class=\"bg-soft-primary position-relative rounded-start\" style=\"height:34px;width:28px\">
          <div class=\"settings-popover\"><span class=\"ripple\"><span class=\"fa-spin position-absolute all-0 d-flex flex-center\"><span class=\"icon-spin position-absolute all-0 d-flex flex-center\"><svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z\" fill=\"#2A7BE4\"></path></svg></span></span></span></div>
        </div><small class=\"text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end\">customize</small>
      </div>
    </a>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 77
        echo "              <div class=\"card-body p-4 p-sm-5\">
                <div class=\"row flex-between-center mb-2\">
                  <div class=\"col-auto\">
                    <h5>Connexion</h5>
                  </div>
                </div>
                <form>
                  <div class=\"mb-3\"><input class=\"form-control\" type=\"email\" placeholder=\"Email address\" /></div>
                  <div class=\"mb-3\"><input class=\"form-control\" type=\"password\" placeholder=\"Password\" /></div>
                  <div class=\"row flex-between-center\">
                    <div class=\"col-auto\">
                    </div>
                    <div class=\"col-auto\"><a class=\"fs--1\" href=\"forgot-password.html\">Mot de passe oublié?</a></div>
                  </div>
                  <div class=\"mb-3\"><button class=\"btn btn-primary d-block w-100 mt-3\" type=\"submit\" name=\"submit\">Se connecter</button></div>
                </form>
                <div class=\"position-relative mt-4\">
                  <hr class=\"bg-300\" />
              </div>
              ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 178
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 179
        echo "    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/anchorjs/anchor.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/is/is.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/fontawesome/all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/lodash/lodash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/polyfill.io/v3/polyfill.min58be.js?features=window.scroll"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/list.js/list.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/theme.js"), "html", null, true);
        echo "\"></script>
  </body>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/GestionUtilisateur/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  423 => 190,  419 => 189,  415 => 188,  411 => 187,  407 => 186,  403 => 185,  399 => 184,  395 => 183,  391 => 182,  386 => 179,  376 => 178,  347 => 77,  337 => 76,  314 => 165,  308 => 162,  304 => 161,  300 => 160,  296 => 159,  276 => 142,  264 => 133,  251 => 123,  243 => 118,  239 => 117,  217 => 97,  215 => 76,  210 => 74,  193 => 59,  183 => 58,  155 => 40,  151 => 39,  147 => 38,  143 => 37,  139 => 36,  129 => 29,  125 => 28,  120 => 26,  116 => 25,  112 => 24,  108 => 23,  104 => 22,  100 => 21,  85 => 8,  75 => 7,  63 => 193,  60 => 178,  57 => 58,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-US\" dir=\"ltr\">

  
<!-- Mirrored from prium.github.io/falcon/v3.3.0/pages/authentication/simple/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 08:41:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
{%block head%}
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{asset('back/assets/img/favicons/apple-touch-icon.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{asset('back/assets/img/favicons/favicon-32x32.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{asset('back/assets/img/favicons/favicon-16x16.png')}}\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{asset('back/assets/img/favicons/favicon.ico')}}\">
    <link rel=\"manifest\" href=\"{{asset('back/assets/img/favicons/manifest.json')}}\">
    <meta name=\"msapplication-TileImage\" content=\"{{asset('back/assets/img/favicons/mstile-150x150.png')}}\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <script src=\"{{asset('back/assets/js/config.js')}}\"></script>
    <script src=\"{{asset('back/vendors/overlayscrollbars/OverlayScrollbars.min.js')}}\"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"{{asset('back/vendors/overlayscrollbars/OverlayScrollbars.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('back/assets/css/theme-rtl.min.css')}}\" rel=\"stylesheet\" id=\"style-rtl\">
    <link href=\"{{asset('back/assets/css/theme.min.css')}}\" rel=\"stylesheet\" id=\"style-default\">
    <link href=\"{{asset('back/assets/css/user-rtl.min.css')}}\" rel=\"stylesheet\" id=\"user-style-rtl\">
    <link href=\"{{asset('back/assets/css/user.min.css')}}\" rel=\"stylesheet\" id=\"user-style-default\">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>
  {%endblock%}
  {% block body%}
  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class=\"main\" id=\"top\">
      <div class=\"container\" data-layout=\"container\">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <div class=\"row flex-center min-vh-100 py-6\">
          <div class=\"col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4\"><a class=\"d-flex flex-center mb-4\" href=\"index.html\"><img class=\"me-2\" src=\"{{asset('back/assets/img/logo.png')}}\" alt=\"\" width=\"200\" /><span class=\"font-sans-serif fw-bolder fs-5 d-inline-block\"></span></a>
            <div class=\"card\">
              {% block contenu%}
              <div class=\"card-body p-4 p-sm-5\">
                <div class=\"row flex-between-center mb-2\">
                  <div class=\"col-auto\">
                    <h5>Connexion</h5>
                  </div>
                </div>
                <form>
                  <div class=\"mb-3\"><input class=\"form-control\" type=\"email\" placeholder=\"Email address\" /></div>
                  <div class=\"mb-3\"><input class=\"form-control\" type=\"password\" placeholder=\"Password\" /></div>
                  <div class=\"row flex-between-center\">
                    <div class=\"col-auto\">
                    </div>
                    <div class=\"col-auto\"><a class=\"fs--1\" href=\"forgot-password.html\">Mot de passe oublié?</a></div>
                  </div>
                  <div class=\"mb-3\"><button class=\"btn btn-primary d-block w-100 mt-3\" type=\"submit\" name=\"submit\">Se connecter</button></div>
                </form>
                <div class=\"position-relative mt-4\">
                  <hr class=\"bg-300\" />
              </div>
              {% endblock%}
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class=\"offcanvas offcanvas-end settings-panel border-0\" id=\"settings-offcanvas\" tabindex=\"-1\" aria-labelledby=\"settings-offcanvas\">
      <div class=\"offcanvas-header settings-panel-header bg-shape\">
        <div class=\"z-index-1 py-1 light\">
          <h5 class=\"text-white\"> <span class=\"fas fa-palette me-2 fs-0\"></span>Settings</h5>
          <p class=\"mb-0 fs--1 text-white opacity-75\"> Set your own customized style</p>
        </div><button class=\"btn-close btn-close-white z-index-1 mt-0\" type=\"button\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
      </div>
      <div class=\"offcanvas-body scrollbar-overlay px-card\" id=\"themeController\">
        <h5 class=\"fs-0\">Color Scheme</h5>
        <p class=\"fs--1\">Choose the perfect color mode for your app.</p>
        <div class=\"btn-group d-block w-100 btn-group-navbar-style\">
          <div class=\"row gx-2\">
            <div class=\"col-6\"><input class=\"btn-check\" id=\"themeSwitcherLight\" name=\"theme-color\" type=\"radio\" value=\"light\" data-theme-control=\"theme\" /><label class=\"btn d-inline-block btn-navbar-style fs--1\" for=\"themeSwitcherLight\"> <span class=\"hover-overlay mb-2 rounded d-block\"><img class=\"img-fluid img-prototype mb-0\" src=\"{{asset('back/assets/img/generic/falcon-mode-default.jpg')}}\" alt=\"\"/></span><span class=\"label-text\">Light</span></label></div>
            <div class=\"col-6\"><input class=\"btn-check\" id=\"themeSwitcherDark\" name=\"theme-color\" type=\"radio\" value=\"dark\" data-theme-control=\"theme\" /><label class=\"btn d-inline-block btn-navbar-style fs--1\" for=\"themeSwitcherDark\"> <span class=\"hover-overlay mb-2 rounded d-block\"><img class=\"img-fluid img-prototype mb-0\" src=\"{{asset('back/assets/img/generic/falcon-mode-dark.jpg')}}\" alt=\"\"/></span><span class=\"label-text\"> Dark</span></label></div>
          </div>
        </div>
        <hr />
        <div class=\"d-flex justify-content-between\">
          <div class=\"d-flex align-items-start\"><img class=\"me-2\" src=\"{{asset('back/assets/img/icons/left-arrow-from-left.svg')}}\" width=\"20\" alt=\"\" />
            <div class=\"flex-1\">
              <h5 class=\"fs-0\">RTL Mode</h5>
              <p class=\"fs--1 mb-0\">Switch your language direction </p><a class=\"fs--1\" href=\"documentation/customization/configuration.html\">RTL Documentation</a>
            </div>
          </div>
          <div class=\"form-check form-switch\"><input class=\"form-check-input ms-0\" id=\"mode-rtl\" type=\"checkbox\" data-theme-control=\"isRTL\" /></div>
        </div>
        <hr />
        <div class=\"d-flex justify-content-between\">
          <div class=\"d-flex align-items-start\"><img class=\"me-2\" src=\"{{asset('back/assets/img/icons/arrows-h.svg')}}\" width=\"20\" alt=\"\" />
            <div class=\"flex-1\">
              <h5 class=\"fs-0\">Fluid Layout</h5>
              <p class=\"fs--1 mb-0\">Toggle container layout system </p><a class=\"fs--1\" href=\"documentation/customization/configuration.html\">Fluid Documentation</a>
            </div>
          </div>
          <div class=\"form-check form-switch\"><input class=\"form-check-input ms-0\" id=\"mode-fluid\" type=\"checkbox\" data-theme-control=\"isFluid\" /></div>
        </div>
        <hr />
        <div class=\"d-flex align-items-start\"><img class=\"me-2\" src=\"{{asset('back/assets/img/icons/paragraph.svg')}}\" width=\"20\" alt=\"\" />
          <div class=\"flex-1\">
            <h5 class=\"fs-0 d-flex align-items-center\">Navigation Position </h5>
            <p class=\"fs--1 mb-2\">Select a suitable navigation system for your web application </p>
            <div>
              <div class=\"form-check form-check-inline\"><input class=\"form-check-input\" id=\"option-navbar-vertical\" type=\"radio\" name=\"navbar\" value=\"vertical\" data-theme-control=\"navbarPosition\" /><label class=\"form-check-label\" for=\"option-navbar-vertical\">Vertical</label></div>
              <div class=\"form-check form-check-inline\"><input class=\"form-check-input\" id=\"option-navbar-top\" type=\"radio\" name=\"navbar\" value=\"top\" data-theme-control=\"navbarPosition\" /><label class=\"form-check-label\" for=\"option-navbar-top\">Top</label></div>
              <div class=\"form-check form-check-inline me-0\"><input class=\"form-check-input\" id=\"option-navbar-combo\" type=\"radio\" name=\"navbar\" value=\"combo\" data-theme-control=\"navbarPosition\" /><label class=\"form-check-label\" for=\"option-navbar-combo\">Combo</label></div>
            </div>
          </div>
        </div>
        <hr />
        <h5 class=\"fs-0 d-flex align-items-center\">Vertical Navbar Style</h5>
        <p class=\"fs--1 mb-0\">Switch between styles for your vertical navbar </p>
        <p> <a class=\"fs--1\" href=\"modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles\">See Documentation</a></p>
        <div class=\"btn-group d-block w-100 btn-group-navbar-style\">
          <div class=\"row gx-2\">
            <div class=\"col-6\"><input class=\"btn-check\" id=\"navbar-style-transparent\" type=\"radio\" name=\"navbarStyle\" value=\"transparent\" data-theme-control=\"navbarStyle\" /><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-transparent\"> <img class=\"img-fluid img-prototype\" src=\"{{asset('back/assets/img/generic/default.png')}}\" alt=\"\" /><span class=\"label-text\"> Transparent</span></label></div>
            <div class=\"col-6\"><input class=\"btn-check\" id=\"navbar-style-inverted\" type=\"radio\" name=\"navbarStyle\" value=\"inverted\" data-theme-control=\"navbarStyle\" /><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-inverted\"> <img class=\"img-fluid img-prototype\" src=\"{{asset('back/assets/img/generic/inverted.png')}}\" alt=\"\" /><span class=\"label-text\"> Inverted</span></label></div>
            <div class=\"col-6\"><input class=\"btn-check\" id=\"navbar-style-card\" type=\"radio\" name=\"navbarStyle\" value=\"card\" data-theme-control=\"navbarStyle\" /><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-card\"> <img class=\"img-fluid img-prototype\" src=\"{{asset('back/assets/img/generic/card.png')}}\" alt=\"\" /><span class=\"label-text\"> Card</span></label></div>
            <div class=\"col-6\"><input class=\"btn-check\" id=\"navbar-style-vibrant\" type=\"radio\" name=\"navbarStyle\" value=\"vibrant\" data-theme-control=\"navbarStyle\" /><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-vibrant\"> <img class=\"img-fluid img-prototype\" src=\"{{asset('back/assets/img/generic/vibrant.png')}}\" alt=\"\" /><span class=\"label-text\"> Vibrant</span></label></div>
          </div>
        </div>
        <div class=\"text-center mt-5\"><img class=\"mb-4\" src=\"{{asset('back/assets/img/icons/spot-illustrations/47.png')}}\" alt=\"\" width=\"120\" />
          <h5>Like What You See?</h5>
          <p class=\"fs--1\">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class=\"mb-3 btn btn-primary\" href=\"https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/\" target=\"_blank\">Purchase</a>
        </div>
      </div>
    </div><a class=\"card setting-toggle\" href=\"#settings-offcanvas\" data-bs-toggle=\"offcanvas\">
      <div class=\"card-body d-flex align-items-center py-md-2 px-2 py-1\">
        <div class=\"bg-soft-primary position-relative rounded-start\" style=\"height:34px;width:28px\">
          <div class=\"settings-popover\"><span class=\"ripple\"><span class=\"fa-spin position-absolute all-0 d-flex flex-center\"><span class=\"icon-spin position-absolute all-0 d-flex flex-center\"><svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z\" fill=\"#2A7BE4\"></path></svg></span></span></span></div>
        </div><small class=\"text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end\">customize</small>
      </div>
    </a>
    {%endblock%}
    {%block js%}
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src=\"{{asset('back/vendors/popper/popper.min.js')}}\"></script>
    <script src=\"{{asset('back/vendors/bootstrap/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('back/vendors/anchorjs/anchor.min.js')}}\"></script>
    <script src=\"{{asset('back/vendors/is/is.min.js')}}\"></script>
    <script src=\"{{asset('back/vendors/fontawesome/all.min.js')}}\"></script>
    <script src=\"{{asset('back/vendors/lodash/lodash.min.js')}}\"></script>
    <script src=\"{{asset('back/polyfill.io/v3/polyfill.min58be.js?features=window.scroll')}}\"></script>
    <script src=\"{{asset('back/vendors/list.js/list.min.js')}}\"></script>
    <script src=\"{{asset('back/assets/js/theme.js')}}\"></script>
  </body>
  {%endblock%}

<!-- Mirrored from prium.github.io/falcon/v3.3.0/pages/authentication/simple/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 08:41:31 GMT -->
</html>", "back/GestionUtilisateur/login.html.twig", "C:\\Users\\Dell\\Desktop\\pidev\\templates\\back\\GestionUtilisateur\\login.html.twig");
    }
}
