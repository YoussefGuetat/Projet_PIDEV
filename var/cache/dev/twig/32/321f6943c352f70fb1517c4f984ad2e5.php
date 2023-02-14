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

/* front/GestionUtilisateur/home-2.html.twig */
class __TwigTemplate_570e7196daebcbe41c6b1cf20999f8f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'navMenu' => [$this, 'block_navMenu'],
            'insc' => [$this, 'block_insc'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/homeC.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/GestionUtilisateur/home-2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/GestionUtilisateur/home-2.html.twig"));

        $this->parent = $this->loadTemplate("front/homeC.html.twig", "front/GestionUtilisateur/home-2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "<!-- loading -->
<div id=\"loading\">
  <div id=\"loading-center\">
    <img src=\"";
        // line 6
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
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/looo.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-fluid\"
                /></a>
              </li>
            </ul>
            <!-- menu links -->
            ";
        // line 77
        $this->displayBlock('navMenu', $context, $blocks);
        // line 84
        echo "          </div>
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

    // line 77
    public function block_navMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navMenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navMenu"));

        // line 78
        echo "            <ul class=\"menu-links\">
              <li>
                  <a class=\"button btn-hdr\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">SE CONNECTER</a>
              </li>
            </ul>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 93
    public function block_insc($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "insc"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "insc"));

        // line 94
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        echo "\" class=\"btn slide-button button\">S'inscrire</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/GestionUtilisateur/home-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 94,  200 => 93,  186 => 80,  182 => 78,  172 => 77,  154 => 84,  152 => 77,  144 => 72,  75 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/homeC.html.twig' %}
{% block header%}
<!-- loading -->
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
            {%block navMenu%}
            <ul class=\"menu-links\">
              <li>
                  <a class=\"button btn-hdr\" href=\"{{path('app_login')}}\">SE CONNECTER</a>
              </li>
            </ul>
            {%endblock%}
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- menu end -->
</header>
{%endblock%}
{%block insc%}
<a href=\"{{path('app_signup')}}\" class=\"btn slide-button button\">S'inscrire</a>
{%endblock%}
", "front/GestionUtilisateur/home-2.html.twig", "C:\\Users\\Dell\\Desktop\\pidev\\templates\\front\\GestionUtilisateur\\home-2.html.twig");
    }
}
