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
               ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "contact-us", "novalidate" => "novalidate"]]);
        echo "
                  <div class=\"row\">
                     
                     <div class=\"col-md-6\">
                        <label>Votre Nom<br>
                           <span class=\"form-control-wrap your-name\">
                           ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control text", "placeholder" => "Votre Nom"]]);
        echo "
                           ";
        // line 32
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), 'errors'))) {
            // line 33
            echo "                            <div class=\"alert alert-danger\">
                           ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "form-control "]]);
            echo "   
                            </div> 
                            ";
        }
        // line 36
        echo "                    
                        </span>
                        </label>
                     </div>
                     <div class=\"col-md-6\">
                        <label>Votre Prénom<br>
                        <span class=\"form-control-wrap your-name\">
                           ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "prenom", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control text", "placeholder" => "Votre Prénom"]]);
        echo "
                           ";
        // line 44
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "prenom", [], "any", false, false, false, 44), 'errors'))) {
            // line 45
            echo "                           <div class=\"alert alert-danger\">
                          ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "prenom", [], "any", false, false, false, 46), 'errors', ["attr" => ["class" => "form-control "]]);
            echo "   
                           </div> 
                           ";
        }
        // line 48
        echo "      </span>
                        </label>
                     </div>
                     <div class=\"col-xl-12\">
                        <label>Votre E-mail<br>
                        <span class=\"form-control-wrap your-email\">
                           ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control text", "placeholder" => "Votre E-mail"]]);
        echo "
                           ";
        // line 55
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'errors'))) {
            // line 56
            echo "                           <div class=\"alert alert-danger\">
                          ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'errors', ["attr" => ["class" => "form-control "]]);
            echo "   
                           </div> 
                           ";
        }
        // line 60
        echo "                        </span>
                        </label>
                     </div>
                     <div class=\"col-xl-12\">
                        <label>votre mot de passe<br>
                        <span class=\"form-control-wrap your-email\">
                           ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "plainPassword", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control text", "placeholder" => "Votre mot de passe"]]);
        echo "
                           ";
        // line 67
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "plainPassword", [], "any", false, false, false, 67), 'errors'))) {
            // line 68
            echo "                           <div class=\"alert alert-danger\">
                          ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "plainPassword", [], "any", false, false, false, 69), 'errors', ["attr" => ["class" => "form-control "]]);
            echo "   
                           </div> 
                           ";
        }
        // line 72
        echo "                        </span>
                        </label>
                     </div>
                     <div class=\"col-xl-12\">
                        <label>Votre role<br>
                        <span class=\"form-control-wrap your-name\">
                           ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "role", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control text"]]);
        echo "
                           ";
        // line 79
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "role", [], "any", false, false, false, 79), 'errors'))) {
            // line 80
            echo "                           <div class=\"alert alert-danger\">
                          ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "role", [], "any", false, false, false, 81), 'errors', ["attr" => ["class" => "form-control "]]);
            echo "   
                           </div> 
                           ";
        }
        // line 84
        echo "                        </span>
                        </label>
                     </div>
                     <div class=\"col-xl-12\">
                        <label class=\"form-control-wrap your-email\">Vous devriez accepter nos conditions : 
                           ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 89, $this->source); })()), "agreeTerms", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control text"]]);
        echo "
                           ";
        // line 90
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "agreeTerms", [], "any", false, false, false, 90), 'errors'))) {
            // line 91
            echo "                           <div class=\"alert alert-danger\">
                          ";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 92, $this->source); })()), "agreeTerms", [], "any", false, false, false, 92), 'errors', ["attr" => ["class" => "form-control "]]);
            echo "   
                           </div> 
                           ";
        }
        // line 95
        echo "                        </label>
                     </div>
                     <div class=\"col-xl-12\" style=\"position: relative;left:73%;\">
                        <button type=\"submit\" class=\"button btn-yellow\" >";
        // line 98
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 98, $this->source); })()), "S inscrire")) : ("S inscrire")), "html", null, true);
        echo "</button>
                     </div>
                     
                  </div>
                  ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), 'form_end');
        echo "
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
        return array (  271 => 102,  264 => 98,  259 => 95,  253 => 92,  250 => 91,  248 => 90,  244 => 89,  237 => 84,  231 => 81,  228 => 80,  226 => 79,  222 => 78,  214 => 72,  208 => 69,  205 => 68,  203 => 67,  199 => 66,  191 => 60,  185 => 57,  182 => 56,  180 => 55,  176 => 54,  168 => 48,  162 => 46,  159 => 45,  157 => 44,  153 => 43,  144 => 36,  138 => 34,  135 => 33,  133 => 32,  129 => 31,  120 => 25,  111 => 19,  103 => 13,  93 => 12,  80 => 9,  74 => 6,  69 => 3,  59 => 2,  36 => 1,);
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
               {{ form_start(registrationForm,{'attr':{'class':'contact-us','novalidate':'novalidate'}}) }}
                  <div class=\"row\">
                     
                     <div class=\"col-md-6\">
                        <label>Votre Nom<br>
                           <span class=\"form-control-wrap your-name\">
                           {{form_widget(registrationForm.nom,{'attr':{'class':'form-control text','placeholder':'Votre Nom'}})}}
                           {% if form_errors(registrationForm.nom) is not empty %}
                            <div class=\"alert alert-danger\">
                           {{form_errors(registrationForm.nom,{'attr':{'class':'form-control '}})}}   
                            </div> 
                            {% endif %}                    
                        </span>
                        </label>
                     </div>
                     <div class=\"col-md-6\">
                        <label>Votre Prénom<br>
                        <span class=\"form-control-wrap your-name\">
                           {{form_widget(registrationForm.prenom,{'attr':{'class':'form-control text','placeholder':'Votre Prénom'}})}}
                           {% if form_errors(registrationForm.prenom) is not empty %}
                           <div class=\"alert alert-danger\">
                          {{form_errors(registrationForm.prenom,{'attr':{'class':'form-control '}})}}   
                           </div> 
                           {% endif %}      </span>
                        </label>
                     </div>
                     <div class=\"col-xl-12\">
                        <label>Votre E-mail<br>
                        <span class=\"form-control-wrap your-email\">
                           {{form_widget(registrationForm.email,{'attr':{'class':'form-control text','placeholder':'Votre E-mail'}})}}
                           {% if form_errors(registrationForm.email) is not empty %}
                           <div class=\"alert alert-danger\">
                          {{form_errors(registrationForm.email,{'attr':{'class':'form-control '}})}}   
                           </div> 
                           {% endif %}
                        </span>
                        </label>
                     </div>
                     <div class=\"col-xl-12\">
                        <label>votre mot de passe<br>
                        <span class=\"form-control-wrap your-email\">
                           {{form_widget(registrationForm.plainPassword,{'attr':{'class':'form-control text','placeholder':'Votre mot de passe'}})}}
                           {% if form_errors(registrationForm.plainPassword) is not empty %}
                           <div class=\"alert alert-danger\">
                          {{form_errors(registrationForm.plainPassword,{'attr':{'class':'form-control '}})}}   
                           </div> 
                           {% endif %}
                        </span>
                        </label>
                     </div>
                     <div class=\"col-xl-12\">
                        <label>Votre role<br>
                        <span class=\"form-control-wrap your-name\">
                           {{form_widget(registrationForm.role,{'attr':{'class':'form-control text'}})}}
                           {% if form_errors(registrationForm.role) is not empty %}
                           <div class=\"alert alert-danger\">
                          {{form_errors(registrationForm.role,{'attr':{'class':'form-control '}})}}   
                           </div> 
                           {% endif %}
                        </span>
                        </label>
                     </div>
                     <div class=\"col-xl-12\">
                        <label class=\"form-control-wrap your-email\">Vous devriez accepter nos conditions : 
                           {{form_widget(registrationForm.agreeTerms,{'attr':{'class':'form-control text'}})}}
                           {% if form_errors(registrationForm.agreeTerms) is not empty %}
                           <div class=\"alert alert-danger\">
                          {{form_errors(registrationForm.agreeTerms,{'attr':{'class':'form-control '}})}}   
                           </div> 
                           {% endif %}
                        </label>
                     </div>
                     <div class=\"col-xl-12\" style=\"position: relative;left:73%;\">
                        <button type=\"submit\" class=\"button btn-yellow\" >{{button_label|default('S inscrire')}}</button>
                     </div>
                     
                  </div>
                  {{ form_end(registrationForm) }}
            </div>
         </div>
      </div>
   </section>
{%endblock%}
", "front/GestionUtilisateur/signup.html.twig", "C:\\Users\\Dell\\Desktop\\PI_DEV\\Projet_PIDEV\\templates\\front\\GestionUtilisateur\\Signup.html.twig");
    }
}
