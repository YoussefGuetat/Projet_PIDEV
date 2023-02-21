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

/* front/GestionUtilisateur/login.html.twig */
class __TwigTemplate_1253cca9b72c57b2fe383e3e92cbd138 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navMenu' => [$this, 'block_navMenu'],
            'contenu' => [$this, 'block_contenu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/GestionUtilisateur/home-2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/GestionUtilisateur/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/GestionUtilisateur/login.html.twig"));

        $this->parent = $this->loadTemplate("front/GestionUtilisateur/home-2.html.twig", "front/GestionUtilisateur/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_navMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navMenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navMenu"));

        // line 3
        echo "               <ul class=\"menu-links\">
                  <!-- active class -->
                  <li>
                     <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landing");
        echo "\">Acceuil</a>
                  </li>
                 
               <li><a class=\"button btn-hdr\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">S'inscrire</a></li>
            </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 13
        echo "<div class=\"main-content\">
  <!-- Contact Us Start -->
  <section class=\"iq-contactus gray-bg\">
     <div class=\"container\">
        <div class=\"row\">
           <div class=\"col-lg-6\">
              <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/project/02.png"), "html", null, true);
        echo "\" alt=\"login\"></div>
           <div class=\"col-lg-6\">
              <div class=\"title-box  text-left\">
                 <span class=\"text-warning\">Bienvenue chez SandBoX</span>
                 <h2 class=\"title\">Connexion</h2>
              </div>
              <form  class=\"contact-us\" method=\"post\">
               ";
        // line 26
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "               <div class=\"alert alert-danger\"> Merci de verifier votre Email et mot de passe</div>
           ";
        }
        // line 29
        echo "       
           ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
            // line 31
            echo "               <div class=\"mb-3\">
                   You are logged in as ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "userIdentifier", [], "any", false, false, false, 32), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
               </div>
           ";
        }
        // line 35
        echo "       
           <h1 class=\"h3 mb-3 font-weight-normal\">Connecter s'il vous plait</h1>
           <label for=\"inputEmail\">Email</label>
           <input type=\"email\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control text\" autocomplete=\"email\" required autofocus>
           <label for=\"inputPassword\">Mot de passe</label>
           <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control text\" autocomplete=\"current-password\" required>
       
           <input type=\"hidden\" name=\"_csrf_token\"
                  value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
           >
           <a style=\"color:#6f6f6f;\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forget");
        echo "\">J'oublie mon mot de passe</a>
           ";
        // line 56
        echo "           <br>
           <div class=\"col-xl-12\" style=\"position: relative;left:77%;\">
           <button class=\"button btn-yellow\" type=\"submit\">
               Se connecter
           </button>
         </div>
              </form>
           </div>
        </div>
     </div>
  </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/GestionUtilisateur/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 56,  161 => 45,  156 => 43,  148 => 38,  143 => 35,  135 => 32,  132 => 31,  130 => 30,  127 => 29,  123 => 27,  121 => 26,  111 => 19,  103 => 13,  93 => 12,  80 => 9,  74 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/GestionUtilisateur/home-2.html.twig' %}
{%block navMenu%}
               <ul class=\"menu-links\">
                  <!-- active class -->
                  <li>
                     <a href=\"{{path('app_landing')}}\">Acceuil</a>
                  </li>
                 
               <li><a class=\"button btn-hdr\" href=\"{{path('app_register')}}\">S'inscrire</a></li>
            </ul>
{%endblock%}
{%block contenu%}
<div class=\"main-content\">
  <!-- Contact Us Start -->
  <section class=\"iq-contactus gray-bg\">
     <div class=\"container\">
        <div class=\"row\">
           <div class=\"col-lg-6\">
              <img src=\"{{asset('front/images/project/02.png')}}\" alt=\"login\"></div>
           <div class=\"col-lg-6\">
              <div class=\"title-box  text-left\">
                 <span class=\"text-warning\">Bienvenue chez SandBoX</span>
                 <h2 class=\"title\">Connexion</h2>
              </div>
              <form  class=\"contact-us\" method=\"post\">
               {% if error %}
               <div class=\"alert alert-danger\"> Merci de verifier votre Email et mot de passe</div>
           {% endif %}
       
           {% if app.user %}
               <div class=\"mb-3\">
                   You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
               </div>
           {% endif %}
       
           <h1 class=\"h3 mb-3 font-weight-normal\">Connecter s'il vous plait</h1>
           <label for=\"inputEmail\">Email</label>
           <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control text\" autocomplete=\"email\" required autofocus>
           <label for=\"inputPassword\">Mot de passe</label>
           <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control text\" autocomplete=\"current-password\" required>
       
           <input type=\"hidden\" name=\"_csrf_token\"
                  value=\"{{ csrf_token('authenticate') }}\"
           >
           <a style=\"color:#6f6f6f;\" href=\"{{path('app_forget')}}\">J'oublie mon mot de passe</a>
           {#
               Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
               See https://symfony.com/doc/current/security/remember_me.html
       
               <div class=\"checkbox mb-3\">
                   <label>
                       <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                   </label>
               </div>
           #}
           <br>
           <div class=\"col-xl-12\" style=\"position: relative;left:77%;\">
           <button class=\"button btn-yellow\" type=\"submit\">
               Se connecter
           </button>
         </div>
              </form>
           </div>
        </div>
     </div>
  </section>
{%endblock%}
", "front/GestionUtilisateur/login.html.twig", "C:\\Users\\Dell\\Desktop\\PI_DEV\\Projet_PIDEV\\templates\\front\\GestionUtilisateur\\login.html.twig");
    }
}
