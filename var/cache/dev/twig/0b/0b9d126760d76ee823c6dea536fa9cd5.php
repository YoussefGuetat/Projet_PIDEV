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
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
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
        // line 16
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
                  <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/team/kais.jpg"), "html", null, true);
        echo "\" class=\"img-fluid profil__img\" alt=\"#\">
               </div>
               <br><br>
               <a class=\"button btn-hdr\" style=\"position:relative;left:23%;\">Changer photo</a>
            </div>
            <div class=\"col-lg-8 col-md-8 pl-5 mt-4 profile-content_container\">
               <h2>Guetat Youssef</h2>
               <h4 class=\"mb-3\">JE SUIS<span class=\"main-color\"> INVESTISSEUR</span></h4>
               <p class=\"\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
               <div class=\"row mt-5\" >
                  <div class=\"col-lg-6 col-sm-12\">
                     <ul class=\"team-details\">
                        <li class=\"mb-3\">
                           <h5 class=\"mr-3\">Nom  :</h5>
                           <p class=\"mb-0\">Guetat</p>
                        </li>
                        <li class=\"mb-3\">
                           <h5 class=\"mr-3\">Nom de l'utilisateur  :</h5>
                           <p class=\"mb-0\">Joseph15</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\">
                           <h5 class=\"mr-3\" >Téléphone :</h5>
                           <p class=\"mb-0\">+21655025447</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\" style=\"margin-top: 1rem;\">
                           <h5 class=\"mr-3\" >Adresse :</h5>
                           <p class=\"mb-0\">La Petite Ariana, Ariana, Tunisie</p>
                        </li>
                        <br><br>
                        <li><a class=\"button btn-hdr\" style=\"position:relative;left:50%;\" href=\"modifierProfile.html\">Modifier</a></li>
                     </ul>
                  </div>
                  <div class=\"col-lg-6 col-sm-12\" >
                     <ul class=\"team-details\">
                        <li class=\"mb-3\">
                           <h5 class=\"mr-3\">Prénom :</h5>
                           <p class=\"mb-0\">Youssef</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\">
                           <h5 class=\"mr-3\">E-mail :</h5>
                           <p class=\"mb-0\">guetat1youssef@gmail.com</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\" style=\"margin-top: 1rem;\">
                           <h5 class=\"mr-3\">Date de naissance :</h5>
                           <p class=\"mb-0\">15-05-2001</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\" style=\"margin-top: 1rem;\">
                           <h5 class=\"mr-3\">Date de création le compte :</h5>
                           <p class=\"mb-0\">10-02-2023</p>
                        </li>
                        <br><br>
                        <li><a class=\"button btn-hdr\" href=\"changer_Mdp.html\">Changer mot de passe</a></li>
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
        // line 118
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
        // line 129
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
        // line 140
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
        // line 151
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
        // line 162
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
        // line 173
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
        // line 184
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
        // line 195
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
        // line 206
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
        return array (  303 => 206,  289 => 195,  275 => 184,  261 => 173,  247 => 162,  233 => 151,  219 => 140,  205 => 129,  191 => 118,  100 => 30,  83 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/homeC.html.twig' %}
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
                  <img src=\"{{asset('front/images/team/kais.jpg')}}\" class=\"img-fluid profil__img\" alt=\"#\">
               </div>
               <br><br>
               <a class=\"button btn-hdr\" style=\"position:relative;left:23%;\">Changer photo</a>
            </div>
            <div class=\"col-lg-8 col-md-8 pl-5 mt-4 profile-content_container\">
               <h2>Guetat Youssef</h2>
               <h4 class=\"mb-3\">JE SUIS<span class=\"main-color\"> INVESTISSEUR</span></h4>
               <p class=\"\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
               <div class=\"row mt-5\" >
                  <div class=\"col-lg-6 col-sm-12\">
                     <ul class=\"team-details\">
                        <li class=\"mb-3\">
                           <h5 class=\"mr-3\">Nom  :</h5>
                           <p class=\"mb-0\">Guetat</p>
                        </li>
                        <li class=\"mb-3\">
                           <h5 class=\"mr-3\">Nom de l'utilisateur  :</h5>
                           <p class=\"mb-0\">Joseph15</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\">
                           <h5 class=\"mr-3\" >Téléphone :</h5>
                           <p class=\"mb-0\">+21655025447</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\" style=\"margin-top: 1rem;\">
                           <h5 class=\"mr-3\" >Adresse :</h5>
                           <p class=\"mb-0\">La Petite Ariana, Ariana, Tunisie</p>
                        </li>
                        <br><br>
                        <li><a class=\"button btn-hdr\" style=\"position:relative;left:50%;\" href=\"modifierProfile.html\">Modifier</a></li>
                     </ul>
                  </div>
                  <div class=\"col-lg-6 col-sm-12\" >
                     <ul class=\"team-details\">
                        <li class=\"mb-3\">
                           <h5 class=\"mr-3\">Prénom :</h5>
                           <p class=\"mb-0\">Youssef</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\">
                           <h5 class=\"mr-3\">E-mail :</h5>
                           <p class=\"mb-0\">guetat1youssef@gmail.com</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\" style=\"margin-top: 1rem;\">
                           <h5 class=\"mr-3\">Date de naissance :</h5>
                           <p class=\"mb-0\">15-05-2001</p>
                        </li>
                        <li class=\"mb-3 mb-lg-0\" style=\"margin-top: 1rem;\">
                           <h5 class=\"mr-3\">Date de création le compte :</h5>
                           <p class=\"mb-0\">10-02-2023</p>
                        </li>
                        <br><br>
                        <li><a class=\"button btn-hdr\" href=\"changer_Mdp.html\">Changer mot de passe</a></li>
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
