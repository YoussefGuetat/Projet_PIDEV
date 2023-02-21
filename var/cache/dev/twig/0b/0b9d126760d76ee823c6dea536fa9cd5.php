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

/* front/GestionUtilisateur/profile.html.twig */
class __TwigTemplate_a2f21e7e596bcce07bd128bd1a05fb47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'prof' => [$this, 'block_prof'],
            'contenu' => [$this, 'block_contenu'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/GestionUtilisateur/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/GestionUtilisateur/profile.html.twig"));

        $this->parent = $this->loadTemplate("front/homeC.html.twig", "front/GestionUtilisateur/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_prof($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "prof"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "prof"));

        echo "  <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\">PROFILE</a> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "<section class=\"iq-breadcrumb text-left green-bg\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-lg-8 col-md-8 text-left mb-4 mb-lg-0 align-self-center\">
            <h2 class=\"title\">Votre Profile</h2>
            <nav aria-label=\"breadcrumb\">
               <ol class=\"breadcrumb\">
                  <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i>ACCEUIL</a></li>
                  <li class=\"breadcrumb-item active\">PROFILE</li>
               </ol>
            </nav>
         </div>
         <div class=\"col-lg-4 col-md-4 text-right\">
            <img  src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/team/05.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\"/>
         </div>
      </div>
   </div>
</section>
<!-- Breadcrumb End -->
<!-- Main-Content Start -->
<div class=\"main-content\">
   <!-- Team Details Start -->
   <section class=\"team-details gray-bg\">
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-lg-4 col-md-3 \">
               <div class=\"img-box text-center profil__img-container border\">
                  ";
        // line 31
        $context["imagePath"] = twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 31, $this->source); })()), "photo", [], "any", false, false, false, 31);
        // line 32
        echo "                  <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 32, $this->source); })())), "html", null, true);
        echo "\" class=\"img-fluid profil__img\" alt=\"#\">
               </div>
               <br><br>
               <a class=\"button btn-hdr\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_photo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\" style=\"position:relative;left:23%;\">Changer photo</a>
            </div>
            <div class=\"col-lg-8 col-md-8 pl-5 mt-4 profile-content_container\">
               <h2>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 38, $this->source); })()), "prenom", [], "any", false, false, false, 38), "html", null, true);
        echo "</h2>
               <h4 class=\"mb-3\">JE SUIS<span class=\"main-color\"> ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 39, $this->source); })()), "role", [], "any", false, false, false, 39), "html", null, true);
        echo "</span></h4>
               <p class=\"\"><h4>Description : </h4>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
               <div class=\"row mt-5\" >
                  <div class=\"col-lg-6 col-sm-12\">
                     <ul class=\"team-details\">
                        <li class=\"mb-3\">
                           <h5 class=\"mr-3\">Nom  :</h5>
                           <p class=\"mb-0\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), "html", null, true);
        echo "</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\">
                           <h5 class=\"mr-3\" >Téléphone :</h5>
                           <p class=\"mb-0\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 50, $this->source); })()), "tel", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\" style=\"margin-top: 1rem;\">
                           <h5 class=\"mr-3\" >Adresse :</h5>
                           <p class=\"mb-0\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 54, $this->source); })()), "adresse", [], "any", false, false, false, 54), "html", null, true);
        echo "</p>
                        </li>
                        <br>
                        <li><a class=\"button btn-hdr\" style=\"position:relative;left:50%;\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_editU", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\">Modifier</a></li>
                     </ul>
                  </div>
                  <div class=\"col-lg-6 col-sm-12\" >
                     <ul class=\"team-details\">
                        <li class=\"mb-3\">
                           <h5 class=\"mr-3\">Prénom :</h5>
                           <p class=\"mb-0\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 64, $this->source); })()), "prenom", [], "any", false, false, false, 64), "html", null, true);
        echo "</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\">
                           <h5 class=\"mr-3\">E-mail :</h5>
                           <p class=\"mb-0\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), "html", null, true);
        echo "</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\" style=\"margin-top: 1rem;\">
                           <h5 class=\"mr-3\">Date de naissance :</h5>
                           <p class=\"mb-0\">";
        // line 72
        ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 72, $this->source); })()), "dateNaiss", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 72, $this->source); })()), "dateNaiss", [], "any", false, false, false, 72), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>
                        </li>
                        <br>
                        <li><a class=\"button btn-hdr\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_changepwd", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        echo "\">Changer mot de passe</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            </div>
         </div>
      </div>
      <div class=\"scrolling-text bottam right default\">
         <div data-bottom=\"transform:translatex(300px)\" data-top=\"transform:translatex(0);\">Votre Profile</div>
      </div>
      
   </section>
   <!-- Portfolio-start  -->
   <section id=\"our-portfolio\" class=\"iq-portfolio-page overview-block-ptb gray-light-bg\">
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-lg-12\">
               <div class=\"title-box text-center\">
                  <span class=\"text-warning\">We're in action</span>
                  <h2 class=\"title\">Our Amazing Portfolio</h2>
                  <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               </div>
            </div>
         </div>
         <div class=\"row\">
            <div class=\"col-sm-12\">
               <div class=\"iq-masonry-block\">
                  <div class=\"isotope-filters isotope-tooltip\">
                     <button data-filter=\"\" class=\"active\">All</button>
                     <button data-filter=\".branding\">branding</button>
                     <button data-filter=\".illustration\">Illustration</button>
                     <button data-filter=\".web-design\">web design</button>
                  </div>
                  <div class=\"iq-masonry iq-columns-3 \">
                     <div class=\"iq-masonry-item branding\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/portfolio/04.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\"/></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 4</a></h6>
                              <ul>
                                 <li>branding</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item web-design\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/portfolio/03.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\" /></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 3</a></h6>
                              <ul>
                                 <li>web design</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item illustration\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/portfolio/02.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\"  /></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 2</a></h6>
                              <ul>
                                 <li>Illustration</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item branding\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/portfolio/06.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\" /></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 13</a></h6>
                              <ul>
                                 <li>branding</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item branding\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/portfolio/05.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\"/></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 14</a></h6>
                              <ul>
                                 <li>branding</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item web-design\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/portfolio/06.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\"/></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 12</a></h6>
                              <ul>
                                 <li>web design</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item illustration\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/portfolio/02.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\"/></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 11</a></h6>
                              <ul>
                                 <li>Illustration</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item branding\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/portfolio/01.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\"/></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 10</a></h6>
                              <ul>
                                 <li>branding</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item branding\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/portfolio/01.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\" /></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 1</a></h6>
                              <ul>
                                 <li>branding</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=\"scrolling-text top right default\">
         <div data-bottom=\"transform:translatex(-300px)\" data-top=\"transform:translatex(0);\">In a Nutshell</div>
      </div>
   </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/GestionUtilisateur/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 200,  344 => 189,  330 => 178,  316 => 167,  302 => 156,  288 => 145,  274 => 134,  260 => 123,  246 => 112,  206 => 75,  200 => 72,  193 => 68,  186 => 64,  176 => 57,  170 => 54,  163 => 50,  156 => 46,  147 => 40,  143 => 39,  137 => 38,  131 => 35,  124 => 32,  122 => 31,  105 => 17,  90 => 4,  80 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/homeC.html.twig' %}
{%block prof%}  <a href=\"{{path('app_profile', {'id': utilisateur.id})}}\">PROFILE</a> {%endblock%} 
{% block contenu%}
<section class=\"iq-breadcrumb text-left green-bg\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-lg-8 col-md-8 text-left mb-4 mb-lg-0 align-self-center\">
            <h2 class=\"title\">Votre Profile</h2>
            <nav aria-label=\"breadcrumb\">
               <ol class=\"breadcrumb\">
                  <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i>ACCEUIL</a></li>
                  <li class=\"breadcrumb-item active\">PROFILE</li>
               </ol>
            </nav>
         </div>
         <div class=\"col-lg-4 col-md-4 text-right\">
            <img  src=\"{{asset('front/images/team/05.png')}}\" class=\"img-fluid\" alt=\"#\"/>
         </div>
      </div>
   </div>
</section>
<!-- Breadcrumb End -->
<!-- Main-Content Start -->
<div class=\"main-content\">
   <!-- Team Details Start -->
   <section class=\"team-details gray-bg\">
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-lg-4 col-md-3 \">
               <div class=\"img-box text-center profil__img-container border\">
                  {% set imagePath = utilisateur.photo %}
                  <img src=\"{{asset(imagePath)}}\" class=\"img-fluid profil__img\" alt=\"#\">
               </div>
               <br><br>
               <a class=\"button btn-hdr\" href=\"{{path('app_photo',{'id':utilisateur.id})}}\" style=\"position:relative;left:23%;\">Changer photo</a>
            </div>
            <div class=\"col-lg-8 col-md-8 pl-5 mt-4 profile-content_container\">
               <h2>{{ utilisateur.nom }} {{ utilisateur.prenom }}</h2>
               <h4 class=\"mb-3\">JE SUIS<span class=\"main-color\"> {{ utilisateur.role }}</span></h4>
               <p class=\"\"><h4>Description : </h4>{{ utilisateur.description }}</p>
               <div class=\"row mt-5\" >
                  <div class=\"col-lg-6 col-sm-12\">
                     <ul class=\"team-details\">
                        <li class=\"mb-3\">
                           <h5 class=\"mr-3\">Nom  :</h5>
                           <p class=\"mb-0\">{{ utilisateur.nom }}</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\">
                           <h5 class=\"mr-3\" >Téléphone :</h5>
                           <p class=\"mb-0\">{{ utilisateur.tel }}</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\" style=\"margin-top: 1rem;\">
                           <h5 class=\"mr-3\" >Adresse :</h5>
                           <p class=\"mb-0\">{{ utilisateur.adresse }}</p>
                        </li>
                        <br>
                        <li><a class=\"button btn-hdr\" style=\"position:relative;left:50%;\" href=\"{{path('app_editU',{'id':utilisateur.id})}}\">Modifier</a></li>
                     </ul>
                  </div>
                  <div class=\"col-lg-6 col-sm-12\" >
                     <ul class=\"team-details\">
                        <li class=\"mb-3\">
                           <h5 class=\"mr-3\">Prénom :</h5>
                           <p class=\"mb-0\">{{ utilisateur.prenom }}</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\">
                           <h5 class=\"mr-3\">E-mail :</h5>
                           <p class=\"mb-0\">{{ utilisateur.email }}</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\" style=\"margin-top: 1rem;\">
                           <h5 class=\"mr-3\">Date de naissance :</h5>
                           <p class=\"mb-0\">{{ utilisateur.dateNaiss ? utilisateur.dateNaiss|date('Y-m-d') : '' }}</p>
                        </li>
                        <br>
                        <li><a class=\"button btn-hdr\" href=\"{{path('app_changepwd',{'id':utilisateur.id})}}\">Changer mot de passe</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            </div>
         </div>
      </div>
      <div class=\"scrolling-text bottam right default\">
         <div data-bottom=\"transform:translatex(300px)\" data-top=\"transform:translatex(0);\">Votre Profile</div>
      </div>
      
   </section>
   <!-- Portfolio-start  -->
   <section id=\"our-portfolio\" class=\"iq-portfolio-page overview-block-ptb gray-light-bg\">
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-lg-12\">
               <div class=\"title-box text-center\">
                  <span class=\"text-warning\">We're in action</span>
                  <h2 class=\"title\">Our Amazing Portfolio</h2>
                  <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               </div>
            </div>
         </div>
         <div class=\"row\">
            <div class=\"col-sm-12\">
               <div class=\"iq-masonry-block\">
                  <div class=\"isotope-filters isotope-tooltip\">
                     <button data-filter=\"\" class=\"active\">All</button>
                     <button data-filter=\".branding\">branding</button>
                     <button data-filter=\".illustration\">Illustration</button>
                     <button data-filter=\".web-design\">web design</button>
                  </div>
                  <div class=\"iq-masonry iq-columns-3 \">
                     <div class=\"iq-masonry-item branding\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"{{asset('front/images/portfolio/04.jpg')}}\" class=\"img-fluid\" alt=\"#\"/></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 4</a></h6>
                              <ul>
                                 <li>branding</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item web-design\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"{{asset('front/images/portfolio/03.jpg')}}\" class=\"img-fluid\" alt=\"#\" /></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 3</a></h6>
                              <ul>
                                 <li>web design</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item illustration\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"{{asset('front/images/portfolio/02.jpg')}}\" class=\"img-fluid\" alt=\"#\"  /></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 2</a></h6>
                              <ul>
                                 <li>Illustration</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item branding\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"{{asset('front/images/portfolio/06.jpg')}}\" class=\"img-fluid\" alt=\"#\" /></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 13</a></h6>
                              <ul>
                                 <li>branding</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item branding\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"{{asset('front/images/portfolio/05.jpg')}}\" class=\"img-fluid\" alt=\"#\"/></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 14</a></h6>
                              <ul>
                                 <li>branding</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item web-design\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"{{asset('front/images/portfolio/06.jpg')}}\" class=\"img-fluid\" alt=\"#\"/></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 12</a></h6>
                              <ul>
                                 <li>web design</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item illustration\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"{{asset('front/images/portfolio/02.jpg')}}\" class=\"img-fluid\" alt=\"#\"/></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 11</a></h6>
                              <ul>
                                 <li>Illustration</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item branding\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"{{asset('front/images/portfolio/01.jpg')}}\" class=\"img-fluid\" alt=\"#\"/></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 10</a></h6>
                              <ul>
                                 <li>branding</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class=\"iq-masonry-item branding\">
                        <div class=\"iq-portfolio\">
                           <a href=\"#\" class=\"iq-portfolio-img\"><img src=\"{{asset('front/images/portfolio/01.jpg')}}\" class=\"img-fluid\" alt=\"#\" /></a>
                           <div class=\"iq-portfolio-content\">
                              <h6><a href=\"#\">Projects 1</a></h6>
                              <ul>
                                 <li>branding</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=\"scrolling-text top right default\">
         <div data-bottom=\"transform:translatex(-300px)\" data-top=\"transform:translatex(0);\">In a Nutshell</div>
      </div>
   </section>
{% endblock%}", "front/GestionUtilisateur/profile.html.twig", "C:\\Users\\Dell\\Desktop\\PI_DEV\\Projet_PIDEV\\templates\\front\\GestionUtilisateur\\profile.html.twig");
    }
}
