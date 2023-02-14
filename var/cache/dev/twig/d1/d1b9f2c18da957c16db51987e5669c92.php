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

/* front/GestionUtilisateur/signup.html.twig */
class __TwigTemplate_71a525f0fde9e43efd648ce4689c3f3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/GestionUtilisateur/signup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/GestionUtilisateur/signup.html.twig"));

        $this->parent = $this->loadTemplate("front/GestionUtilisateur/home-2.html.twig", "front/GestionUtilisateur/signup.html.twig", 1);
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
        echo "<ul class=\"menu-links\">
   <!-- active class -->
   <li>
      <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landing");
        echo "\">Acceuil</a>
   </li>
  
<li><a class=\"button btn-hdr\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Se Connecter</a></li>
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
                  <h2 class=\"title\">Inscription</h2>
               </div>
               <form  class=\"contact-us\" id=\"contact\" method=\"post\">
                  <div class=\"row\">
                     <div class=\"col-md-6\">
                        <label>Votre nom<br>
                        <span class=\"form-control-wrap your-name\">
                        <input type=\"text\" name=\"fname\" Placeholder=\"Votre nom\" class=\"form-control text\" aria-required=\"true\" aria-invalid=\"false\"></span>
                        </label>
                     </div>
                     <div class=\"col-md-6\">
                        <label>Votre Prénom<br>
                        <span class=\"form-control-wrap your-name\">
                        <input type=\"text\" name=\"lname\" Placeholder=\"Votre Prénom\" class=\"form-control text email\" aria-required=\"true\" aria-invalid=\"false\"></span>
                        </label>
                     </div>
                     <div class=\"col-md-6\">
                        <label>Votre E-mail<br>
                        <span class=\"form-control-wrap your-email\">
                        <input type=\"email\" name=\"email\" Placeholder=\"Votre E-mail\" class=\"form-control text\" aria-invalid=\"false\"></span>
                        </label>
                     </div>
                     <div class=\"col-md-6\">
                        <label>Votre nom de l'utilasateur<br>
                        <span class=\"form-control-wrap your-name\">
                        <input type=\"text\" name=\"usename\" Placeholder=\"Votre nom de l'utilasateur\" class=\"form-control text email\" aria-required=\"true\" aria-invalid=\"false\"></span>
                        </label>
                     </div>
                     <div class=\"col-md-6\">
                        <label>votre mot de passe<br>
                        <span class=\"form-control-wrap your-email\">
                        <input type=\"password\" name=\"password\" Placeholder=\"votre mot de passe\" class=\"form-control text\" aria-invalid=\"false\"></span>
                        </label>
                     </div>
                     <div class=\"col-md-6\">
                        <label>Confirmer votre mot de passe<br>
                        <span class=\"form-control-wrap your-name\">
                        <input type=\"password\" name=\"cpassword\" Placeholder=\"Confirmer votre mot de passe\" class=\"form-control text\" aria-required=\"true\" aria-invalid=\"false\"></span>
                        </label>
                     </div>
                     <div class=\"col-xl-10\">
                        <label>Votre role<br>
                        <span class=\"form-control-wrap your-name\">
                           <select name=\"role\" id=\"role\">
                              <option value=\"\">Selectionnez votre role</option>
                              <option value=\"investisseur\">Investisseur</option>
                              <option value=\"entrepreneur\">Entrepreneur</option>
                              </select>
                        </label>
                     </div>
                     <div class=\"col-xl-12\" style=\"position: relative;left:73%;\">
                        <button id=\"submit\" name=\"submit\" type=\"submit\" value=\"Send\" class=\"button btn-yellow\" >S'inscrire</button>
                     </div>
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
        return "front/GestionUtilisateur/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 19,  103 => 13,  93 => 12,  80 => 9,  74 => 6,  69 => 3,  59 => 2,  36 => 1,);
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
  
<li><a class=\"button btn-hdr\" href=\"{{path('app_login')}}\">Se Connecter</a></li>
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
                  <h2 class=\"title\">Inscription</h2>
               </div>
               <form  class=\"contact-us\" id=\"contact\" method=\"post\">
                  <div class=\"row\">
                     <div class=\"col-md-6\">
                        <label>Votre nom<br>
                        <span class=\"form-control-wrap your-name\">
                        <input type=\"text\" name=\"fname\" Placeholder=\"Votre nom\" class=\"form-control text\" aria-required=\"true\" aria-invalid=\"false\"></span>
                        </label>
                     </div>
                     <div class=\"col-md-6\">
                        <label>Votre Prénom<br>
                        <span class=\"form-control-wrap your-name\">
                        <input type=\"text\" name=\"lname\" Placeholder=\"Votre Prénom\" class=\"form-control text email\" aria-required=\"true\" aria-invalid=\"false\"></span>
                        </label>
                     </div>
                     <div class=\"col-md-6\">
                        <label>Votre E-mail<br>
                        <span class=\"form-control-wrap your-email\">
                        <input type=\"email\" name=\"email\" Placeholder=\"Votre E-mail\" class=\"form-control text\" aria-invalid=\"false\"></span>
                        </label>
                     </div>
                     <div class=\"col-md-6\">
                        <label>Votre nom de l'utilasateur<br>
                        <span class=\"form-control-wrap your-name\">
                        <input type=\"text\" name=\"usename\" Placeholder=\"Votre nom de l'utilasateur\" class=\"form-control text email\" aria-required=\"true\" aria-invalid=\"false\"></span>
                        </label>
                     </div>
                     <div class=\"col-md-6\">
                        <label>votre mot de passe<br>
                        <span class=\"form-control-wrap your-email\">
                        <input type=\"password\" name=\"password\" Placeholder=\"votre mot de passe\" class=\"form-control text\" aria-invalid=\"false\"></span>
                        </label>
                     </div>
                     <div class=\"col-md-6\">
                        <label>Confirmer votre mot de passe<br>
                        <span class=\"form-control-wrap your-name\">
                        <input type=\"password\" name=\"cpassword\" Placeholder=\"Confirmer votre mot de passe\" class=\"form-control text\" aria-required=\"true\" aria-invalid=\"false\"></span>
                        </label>
                     </div>
                     <div class=\"col-xl-10\">
                        <label>Votre role<br>
                        <span class=\"form-control-wrap your-name\">
                           <select name=\"role\" id=\"role\">
                              <option value=\"\">Selectionnez votre role</option>
                              <option value=\"investisseur\">Investisseur</option>
                              <option value=\"entrepreneur\">Entrepreneur</option>
                              </select>
                        </label>
                     </div>
                     <div class=\"col-xl-12\" style=\"position: relative;left:73%;\">
                        <button id=\"submit\" name=\"submit\" type=\"submit\" value=\"Send\" class=\"button btn-yellow\" >S'inscrire</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
{%endblock%}
", "front/GestionUtilisateur/signup.html.twig", "C:\\Users\\Dell\\Desktop\\pidev\\templates\\front\\GestionUtilisateur\\Signup.html.twig");
    }
}
