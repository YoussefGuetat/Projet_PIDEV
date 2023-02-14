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

/* back/GestionUtilisateur/reset-password.html.twig */
class __TwigTemplate_722b1c5c5fde17b29645d6c0a043d3a5 extends Template
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
        return "back/GestionUtilisateur/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/GestionUtilisateur/reset-password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/GestionUtilisateur/reset-password.html.twig"));

        $this->parent = $this->loadTemplate("back/GestionUtilisateur/login.html.twig", "back/GestionUtilisateur/reset-password.html.twig", 1);
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
        echo "<div class=\"card-body p-4 p-sm-5\">
  <h5 class=\"text-center\">Réinitialiser le mot de passe</h5>
  <form class=\"mt-3\">
    <div class=\"mb-3\"><label class=\"form-label\"></label><input class=\"form-control\" type=\"password\" placeholder=\"Nouveau mot de passe\" /></div>
    <div class=\"mb-3\"><input class=\"form-control\" type=\"password\" placeholder=\"Confirmer mot de passe\" /></div><button class=\"btn btn-primary d-block w-100 mt-3\" type=\"submit\" name=\"submit\">Changer</button>
  </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/GestionUtilisateur/reset-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/GestionUtilisateur/login.html.twig'%}
{% block contenu%}
<div class=\"card-body p-4 p-sm-5\">
  <h5 class=\"text-center\">Réinitialiser le mot de passe</h5>
  <form class=\"mt-3\">
    <div class=\"mb-3\"><label class=\"form-label\"></label><input class=\"form-control\" type=\"password\" placeholder=\"Nouveau mot de passe\" /></div>
    <div class=\"mb-3\"><input class=\"form-control\" type=\"password\" placeholder=\"Confirmer mot de passe\" /></div><button class=\"btn btn-primary d-block w-100 mt-3\" type=\"submit\" name=\"submit\">Changer</button>
  </form>
</div>
{%endblock%}", "back/GestionUtilisateur/reset-password.html.twig", "C:\\Users\\Dell\\Desktop\\pidev\\templates\\back\\GestionUtilisateur\\reset-password.html.twig");
    }
}
