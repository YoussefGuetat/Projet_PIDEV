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

/* front/GestionUtilisateur/modifierProfile.html.twig */
class __TwigTemplate_1a66a73221c635fc25d98b475c17abd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/GestionUtilisateur/modifierProfile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/GestionUtilisateur/modifierProfile.html.twig"));

        $this->parent = $this->loadTemplate("front/GestionUtilisateur/profile.html.twig", "front/GestionUtilisateur/modifierProfile.html.twig", 1);
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
                 <h2 class=\"title\">Modifier votre informations</h2>
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
                     <label>Date de naissance<br>
                     <span class=\"form-control-wrap your-name\">
                     <input type=\"date\" name=\"date\" Placeholder=\"Date de naissance\" class=\"form-control text\" aria-required=\"true\" aria-invalid=\"false\"></span>
                     </label>
                  </div>
                  <div class=\"col-md-6\">
                     <label>Numéro de téléphone<br>
                     <span class=\"form-control-wrap your-name\">
                     <input type=\"number\" name=\"num\" Placeholder=\"Numéro de téléphone\" class=\"form-control text\" aria-required=\"true\" aria-invalid=\"false\"></span>
                     </label>
                  </div>
                  <div class=\"col-xl-12\">
                     <label>Addresse<br>
                     <span class=\"form-control-wrap your-name\">
                     <input type=\"text\" name=\"address\" Placeholder=\"Adresse\" class=\"form-control text email\" aria-required=\"true\" aria-invalid=\"false\"></span>
                     </label>
                  </div>
                  <div class=\"col-xl-12\">
                     <label>Description<br>
                     <span class=\"form-control-wrap your-name\">
                     <textarea type=\"text\" name=\"description\" Placeholder=\"Description\" class=\"form-control text email\" aria-required=\"true\" aria-invalid=\"false\"></textarea></span>
                     </label>
                  </div>
                    <div class=\"col-xl-12\" style=\"position: relative;left:73%;\">
                       <button id=\"submit\" name=\"submit\" type=\"submit\" value=\"Send\" class=\"button btn-yellow\" >Modifier</button>
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
        return "front/GestionUtilisateur/modifierProfile.html.twig";
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
                 <h2 class=\"title\">Modifier votre informations</h2>
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
                     <label>Date de naissance<br>
                     <span class=\"form-control-wrap your-name\">
                     <input type=\"date\" name=\"date\" Placeholder=\"Date de naissance\" class=\"form-control text\" aria-required=\"true\" aria-invalid=\"false\"></span>
                     </label>
                  </div>
                  <div class=\"col-md-6\">
                     <label>Numéro de téléphone<br>
                     <span class=\"form-control-wrap your-name\">
                     <input type=\"number\" name=\"num\" Placeholder=\"Numéro de téléphone\" class=\"form-control text\" aria-required=\"true\" aria-invalid=\"false\"></span>
                     </label>
                  </div>
                  <div class=\"col-xl-12\">
                     <label>Addresse<br>
                     <span class=\"form-control-wrap your-name\">
                     <input type=\"text\" name=\"address\" Placeholder=\"Adresse\" class=\"form-control text email\" aria-required=\"true\" aria-invalid=\"false\"></span>
                     </label>
                  </div>
                  <div class=\"col-xl-12\">
                     <label>Description<br>
                     <span class=\"form-control-wrap your-name\">
                     <textarea type=\"text\" name=\"description\" Placeholder=\"Description\" class=\"form-control text email\" aria-required=\"true\" aria-invalid=\"false\"></textarea></span>
                     </label>
                  </div>
                    <div class=\"col-xl-12\" style=\"position: relative;left:73%;\">
                       <button id=\"submit\" name=\"submit\" type=\"submit\" value=\"Send\" class=\"button btn-yellow\" >Modifier</button>
                    </div>
                 </div>
              </form>
           </div>
        </div>
     </div>
  </section>
{%endblock%}
", "front/GestionUtilisateur/modifierProfile.html.twig", "C:\\Users\\Dell\\Desktop\\pidev\\templates\\front\\GestionUtilisateur\\modifierProfile.html.twig");
    }
}
