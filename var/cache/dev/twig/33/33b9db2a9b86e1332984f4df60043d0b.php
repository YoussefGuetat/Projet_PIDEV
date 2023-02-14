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

/* front/GestionUtilisateur/changer_Mdp.html.twig */
class __TwigTemplate_d6587a4b9705289dce6264b95634751f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenu' => [$this, 'block_contenu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/GestionUtilisateur/profile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/GestionUtilisateur/changer_Mdp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/GestionUtilisateur/changer_Mdp.html.twig"));

        $this->parent = $this->loadTemplate("front/GestionUtilisateur/profile.html.twig", "front/GestionUtilisateur/changer_Mdp.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "<div class=\"main-content\">
  <!-- Contact Us Start -->
  <section class=\"iq-contactus gray-bg\">
     <div class=\"container\">
        <div class=\"row\">
           <div class=\"col-lg-6\">
              <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/project/02.png"), "html", null, true);
        echo "\" alt=\"login\"></div>
           <div class=\"col-lg-6\">
              <div class=\"title-box  text-left\">
                 <span class=\"text-warning\">Bienvenue chez SandBoX</span>
                 <h2 class=\"title\">Changer votre mot de passe</h2>
              </div>
              <form  class=\"contact-us\" id=\"contact\" method=\"post\">
                 <div class=\"row\">
                     <div class=\"col-xl-12\">
                         <label>Ancien mot de passe<br>
                         <span class=\"form-control-wrap your-subject\">
                         <input type=\"password\" name=\"password\" Placeholder=\"Ancien mot de passe\" class=\"form-control text\" aria-invalid=\"false\"></span>
                         </label>
                 </div>
                 <div class=\"col-xl-12\">
                     <label>Nouveau mot de passe<br>
                     <span class=\"form-control-wrap your-subject\">
                     <input type=\"password\" name=\"password\" Placeholder=\"Nouveau mot de passe\" class=\"form-control text\" aria-invalid=\"false\"></span>
                     </label>
                  </div>
                    <div class=\"col-xl-12\">
                       <label>Confirmer mot de passe<br>
                       <span class=\"form-control-wrap your-subject\">
                       <input type=\"password\" name=\"password\" Placeholder=\"Confirmer mot de passe\" class=\"form-control text\" aria-invalid=\"false\"></span>
                       </label>
                    </div>
                 
                    <div class=\"col-xl-12\" style=\"position: relative;left:73%;\">
                       <button id=\"submit\" name=\"submit\" type=\"submit\" value=\"Send\" class=\"button btn-yellow\" >Changer</button>
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
        return "front/GestionUtilisateur/changer_Mdp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/GestionUtilisateur/profile.html.twig' %}
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
                 <h2 class=\"title\">Changer votre mot de passe</h2>
              </div>
              <form  class=\"contact-us\" id=\"contact\" method=\"post\">
                 <div class=\"row\">
                     <div class=\"col-xl-12\">
                         <label>Ancien mot de passe<br>
                         <span class=\"form-control-wrap your-subject\">
                         <input type=\"password\" name=\"password\" Placeholder=\"Ancien mot de passe\" class=\"form-control text\" aria-invalid=\"false\"></span>
                         </label>
                 </div>
                 <div class=\"col-xl-12\">
                     <label>Nouveau mot de passe<br>
                     <span class=\"form-control-wrap your-subject\">
                     <input type=\"password\" name=\"password\" Placeholder=\"Nouveau mot de passe\" class=\"form-control text\" aria-invalid=\"false\"></span>
                     </label>
                  </div>
                    <div class=\"col-xl-12\">
                       <label>Confirmer mot de passe<br>
                       <span class=\"form-control-wrap your-subject\">
                       <input type=\"password\" name=\"password\" Placeholder=\"Confirmer mot de passe\" class=\"form-control text\" aria-invalid=\"false\"></span>
                       </label>
                    </div>
                 
                    <div class=\"col-xl-12\" style=\"position: relative;left:73%;\">
                       <button id=\"submit\" name=\"submit\" type=\"submit\" value=\"Send\" class=\"button btn-yellow\" >Changer</button>
                    </div>
                 </div>
              </form>
           </div>
        </div>
     </div>
  </section>
{%endblock%}
", "front/GestionUtilisateur/changer_Mdp.html.twig", "C:\\Users\\Dell\\Desktop\\pidev\\templates\\front\\GestionUtilisateur\\changer_Mdp.html.twig");
    }
}
