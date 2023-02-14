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

/* back/GestionUtilisateur/followers.html.twig */
class __TwigTemplate_3a7583c4cc666f0e0dca80e63409718c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/GestionUtilisateur/followers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/GestionUtilisateur/followers.html.twig"));

        $this->parent = $this->loadTemplate("back/GestionUtilisateur/login.html.twig", "back/GestionUtilisateur/followers.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body>
\t<!-- ===============================================-->
\t<!--    Main Content-->
\t<!-- ===============================================-->
\t\t<main class=\"main\" id=\"top\"> <div class=\"container\" data-layout=\"container\">
\t\t\t<script>
\t\t\t\tvar isFluid = JSON.parse(localStorage.getItem(\"isFluid\"));
if (isFluid) {
var container = document.querySelector(\"[data-layout]\");
container.classList.remove(\"container\");
container.classList.add(\"container-fluid\");
}
\t\t\t</script>
\t\t\t<nav class=\"navbar navbar-light navbar-vertical navbar-expand-xl\" style=\"display: none\">
\t\t\t\t<script>
\t\t\t\t\tvar navbarStyle = localStorage.getItem(\"navbarStyle\");
if (navbarStyle && navbarStyle !== \"transparent\") {
document.querySelector(\".navbar-vertical\").classList.add(`navbar-\${navbarStyle}`);
}
\t\t\t\t</script>
\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t<div class=\"toggle-icon-wrapper\">
\t\t\t\t\t\t<button class=\"btn navbar-toggler-humburger-icon navbar-vertical-toggle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"Toggle Navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggle-icon\">
\t\t\t\t\t\t\t\t<span class=\"toggle-line\"></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center py-3\">
\t\t\t\t\t\t\t<img class=\"me-2\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" width=\"140\"/><span class=\"font-sans-serif\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarVerticalCollapse\">
\t\t\t\t\t<div class=\"navbar-vertical-content scrollbar\">
\t\t\t\t\t\t<ul class=\"navbar-nav flex-column mb-3\" id=\"navbarVerticalNav\">
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tclass=\"nav-item\">
\t\t\t\t\t\t\t\t<!-- parent pages-->
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#dashboard\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dashboard\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-chart-pie\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Dashboard</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tclass=\"nav-item\">
\t\t\t\t\t\t\t\t<!-- label-->
\t\t\t\t\t\t\t\t<div class=\"row navbar-vertical-label-wrapper mt-3 mb-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col-auto navbar-vertical-label\">Pages</div>
\t\t\t\t\t\t\t\t\t<div class=\"col ps-0\">
\t\t\t\t\t\t\t\t\t\t<hr class=\"mb-0 navbar-vertical-divider\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t  <a class=\"nav-link dropdown-indicator\" href=\"#user\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"user\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-user\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Utilisateurs</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav collapse false\" id=\"user\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"profile.html\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Mon profile</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashListe");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Liste des utilisateurs</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index-2.html#authentication-modal\" data-bs-toggle=\"modal\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Ajouter un admin</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t  <a class=\"nav-link dropdown-indicator\" href=\"#authentication\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"authentication\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-calendar-day\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Evènements</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav collapse false\" id=\"authentication\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"create-an-event.html\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Ajouter un évènement</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"event-list.html\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Liste des évènements</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- parent pages-->
\t\t\t\t\t\t\t\t<!-- parent pages-->
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-indicator\" href=\"#pricing\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"pricing\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-tags\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Annonces</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav collapse false\" id=\"pricing\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"annonces.html\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Liste des annonces</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- parent pages-->
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-indicator\" href=\"#faq\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"faq\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-question-circle\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Rendez-vous</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav collapse false\" id=\"faq\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/faq/faq-basic.html\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Liste des rendez-vous</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- parent pages-->
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-indicator\" href=\"#errors\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"errors\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-exclamation-triangle\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Réclamations</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav collapse false\" id=\"errors\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/errors/404.html\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Listes des réclamation</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<nav class=\"navbar navbar-light navbar-glass navbar-top navbar-expand-xl\" style=\"display: none\">
\t\t\t\t<button class=\"btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarStandard\" aria-controls=\"navbarStandard\" aria-expanded=\"false\" aria-label=\"Toggle Navigation\">
\t\t\t\t\t<span class=\"navbar-toggle-icon\">
\t\t\t\t\t\t<span class=\"toggle-line\"></span>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand me-1 me-sm-3\" href=\"index.html\">
\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t<img class=\"me-2\" src=\"assets/img/icons/spot-illustrations/falcon.png\" alt=\"\" width=\"40\"/><span class=\"font-sans-serif\">falcon</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<div class=\"collapse navbar-collapse scrollbar\" id=\"navbarStandard\">
\t\t\t\t\t<ul class=\"navbar-nav\" data-top-nav-dropdowns=\"data-top-nav-dropdowns\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"dashboards\">Dashboard</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"dashboards\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1000 rounded-3 py-2\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"index.html\">Default</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/analytics.html\">Analytics</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/crm.html\">CRM</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/e-commerce.html\">E commerce</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/project-management.html\">Management</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/saas.html\">SaaS</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"apps\">App</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"apps\">
\t\t\t\t\t\t\t\t<div class=\"card navbar-card-app shadow-none dark__bg-1000\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body scrollbar max-h-dropdown\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-dropdown\" src=\"assets/img/icons/spot-illustrations/authentication-corner.png\" width=\"130\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../calendar.html\">Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../chat.html\">Chat</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../kanban.html\">Kanban</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Email</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../email/inbox.html\">Inbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../email/email-detail.html\">Email detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../email/compose.html\">Compose</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Events</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../events/create-an-event.html\">Create an event</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../events/event-detail.html\">Event detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../events/event-list.html\">Event list</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Social</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"feed.html\">Feed</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"activity-log.html\">Activity log</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"notifications.html\">Notifications</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"followers.html\">Followers</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tE-Commerce
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/product/product-list.html\">Product list</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/product/product-grid.html\">Product grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/product/product-details.html\">Product details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/orders/order-list.html\">Order list</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/orders/order-details.html\">Order details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/customers.html\">Customers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/customer-details.html\">Customer details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/shopping-cart.html\">Shopping cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/checkout.html\">Checkout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/billing.html\">Billing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/invoice.html\">Invoice</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"pagess\">Pages</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"pagess\">
\t\t\t\t\t\t\t\t<div class=\"card navbar-card-pages shadow-none dark__bg-1000\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body scrollbar max-h-dropdown\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-dropdown\" src=\"assets/img/icons/spot-illustrations/authentication-corner.png\" width=\"130\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSimple Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/forgot-password.html\">Forgot password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/confirm-mail.html\">Confirm mail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/reset-password.html\">Reset password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/lock-screen.html\">Lock screen</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCard Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/forgot-password.html\">Forgot password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/confirm-mail.html\">Confirm mail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/reset-password.html\">Reset password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/lock-screen.html\">Lock screen</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSplit Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/forgot-password.html\">Forgot password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/confirm-mail.html\">Confirm mail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/reset-password.html\">Reset password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/lock-screen.html\">Lock screen</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tOther Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/wizard.html\">Wizard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"index-2.html#authentication-modal\" data-bs-toggle=\"modal\">Modal</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMiscellaneous
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/miscellaneous/associations.html\">Associations</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/miscellaneous/invite-people.html\">Invite people</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/miscellaneous/privacy-policy.html\">Privacy policy</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">User</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/user/profile.html\">Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/user/settings.html\">Settings</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tPricing
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/pricing/pricing-default.html\">Pricing default</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/pricing/pricing-alt.html\">Pricing alt</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Errors</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/errors/404.html\">404</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/errors/500.html\">500</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Others</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/starter.html\">Starter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/landing.html\">Landing</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"moduless\">Modules</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"moduless\">
\t\t\t\t\t\t\t\t<div class=\"card navbar-card-components shadow-none dark__bg-1000\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body scrollbar max-h-dropdown\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-dropdown\" src=\"assets/img/icons/spot-illustrations/authentication-corner.png\" width=\"130\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tComponents
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/accordion.html\">Accordion</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/alerts.html\">Alerts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/anchor.html\">Anchor</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/animated-icons.html\">Animated icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/background.html\">Background</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/badges.html\">Badges</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/breadcrumbs.html\">Breadcrumbs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/buttons.html\">Buttons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/calendar.html\">Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/cards.html\">Cards</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/carousel/bootstrap.html\">Bootstrap carousel</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-md-4 pt-md-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/carousel/swiper.html\">Swiper</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/collapse.html\">Collapse</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/cookie-notice.html\">Cookie notice</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/countup.html\">Countup</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/draggable.html\">Draggable</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/dropdowns.html\">Dropdowns</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/list-group.html\">List group</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/modals.html\">Modals</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/navs.html\">Navs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/navbar.html\">Navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/vertical-navbar.html\">Vertical navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-xxl-4 pt-xxl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/top-navbar.html\">Top navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/combo-navbar.html\">Combo navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/tabs.html\">Tabs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/offcanvas.html\">Offcanvas</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/avatar.html\">Avatar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/images.html\">Images</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/figures.html\">Figures</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/hoverbox.html\">Hoverbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/lightbox.html\">Lightbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/progress-bar.html\">Progress bar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/placeholder.html\">Placeholder</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-xxl-4 pt-xxl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pagination.html\">Pagination</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/popovers.html\">Popovers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/scrollspy.html\">Scrollspy</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/search.html\">Search</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/spinners.html\">Spinners</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/toasts.html\">Toasts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/tooltips.html\">Tooltips</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/typed-text.html\">Typed text</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/videos/embed.html\">Embed</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/videos/plyr.html\">Plyr</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Forms</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/form-control.html\">Form control</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/input-group.html\">Input group</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/select.html\">Select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/checks.html\">Checks</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/range.html\">Range</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/layout.html\">Layout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/advance-select.html\">Advance select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/date-picker.html\">Date picker</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/editor.html\">Editor</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/emoji-button.html\">Emoji button</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/file-uploader.html\">File uploader</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/rating.html\">Rating</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/floating-labels.html\">Floating labels</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/wizard.html\">Wizard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/validation.html\">Validation</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Tables</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/tables/basic-tables.html\">Basic tables</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/tables/advance-tables.html\">Advance tables</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/tables/bulk-select.html\">Bulk select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Charts</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/chartjs.html\">Chartjs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tECharts
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/line-charts.html\">Line charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/bar-charts.html\">Bar charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/candlestick-charts.html\">Candlestick charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/geo-map.html\">Geo map</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/scatter-charts.html\">Scatter charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/pie-charts.html\">Pie charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/radar-charts.html\">Radar charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/heatmap-charts.html\">Heatmap charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/how-to-use.html\">How to use</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tUtilities
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/borders.html\">Borders</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/clearfix.html\">Clearfix</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/colors.html\">Colors</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/colored-links.html\">Colored links</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/display.html\">Display</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/flex.html\">Flex</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/float.html\">Float</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/grid.html\">Grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/overlayscrollbars.html\">Overlayscrollbars</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/position.html\">Position</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/spacing.html\">Spacing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/sizing.html\">Sizing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/stretched-link.html\">Stretched link</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/text-truncation.html\">Text truncation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/typography.html\">Typography</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/vertical-align.html\">Vertical align</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/visibility.html\">Visibility</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-xxl-4 pt-xxl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Icons</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/font-awesome.html\">Font awesome</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/bootstrap-icons.html\">Bootstrap icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/feather.html\">Feather</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/material-icons.html\">Material icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Maps</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/maps/google-map.html\">Google map</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/maps/leaflet-map.html\">Leaflet map</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"documentations\">Documentation</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"documentations\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1000 rounded-3 py-2\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/getting-started.html\">Getting started</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/configuration.html\">Configuration</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/styling.html\">Styling</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/dark-mode.html\">Dark mode<span class=\"badge rounded-pill ms-2 badge-soft-success\">New</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/plugin.html\">Plugin</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/gulp.html\">Gulp</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/design-file.html\">Design file</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"changelog.html\">Changelog</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<ul class=\"navbar-nav navbar-nav-icons ms-auto flex-row align-items-center\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"theme-control-toggle fa-icon-wait px-2\">
\t\t\t\t\t\t\t<input class=\"form-check-input ms-0 theme-control-toggle-input\" id=\"themeControlToggle\" type=\"checkbox\" data-theme-control=\"theme\" value=\"dark\"/><label class=\"mb-0 theme-control-toggle-label theme-control-toggle-light\" for=\"themeControlToggle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"Switch to light theme\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-sun fs-0\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"mb-0 theme-control-toggle-label theme-control-toggle-dark\" for=\"themeControlToggle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"Switch to dark theme\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-moon fs-0\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait\" href=\"../e-commerce/shopping-cart.html\">
\t\t\t\t\t\t\t<span class=\"fas fa-shopping-cart\" data-fa-transform=\"shrink-7\" style=\"font-size: 33px\"></span>
\t\t\t\t\t\t\t<span class=\"notification-indicator-number\">1</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait\" id=\"navbarDropdownNotification\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"fas fa-bell\" data-fa-transform=\"shrink-6\" style=\"font-size: 33px\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification\" aria-labelledby=\"navbarDropdownNotification\">
\t\t\t\t\t\t\t<div class=\"card card-notification shadow-none\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-header-title mb-0\">Notifications</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto ps-0 ps-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"card-link fw-normal\" href=\"#\">Mark all as read</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"scrollbar-overlay\" style=\"max-height: 19rem\">
\t\t\t\t\t\t\t\t\t<div class=\"list-group list-group-flush fw-normal fs--1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-title border-bottom\">NEW</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush notification-unread\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/1-thumb.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Emma Watson</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\treplied to your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  comment : \"Hello world 😍\"
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">💬</span>Just now</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush notification-unread\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-name rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>AB</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Albert Brooks</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\treacted to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Mia Khalifa's</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstatus
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2 fab fa-gratipay text-danger\"></span>9hr</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-title border-bottom\">EARLIER</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/icons/weather-sm.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tThe forecast today shows a low of 20&#8451; in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  California. See today's weather.
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">🌤️</span>1d</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"border-bottom-0 notification-unread notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/logos/oxford.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>University of Oxford</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tcreated an
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  event : \"Causal Inference Hilary 2019\"
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">✌️</span>1w</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"border-bottom-0 notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/10.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>James Cameron</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tinvited to join the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  group: United Nations International Children's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  Fund
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">🙋‍</span>2d</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer text-center border-top\">
\t\t\t\t\t\t\t\t\t<a class=\"card-link d-block\" href=\"notifications.html\">View all</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link pe-0\" id=\"navbarDropdownUser\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<div class=\"avatar avatar-xl\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/team/3-thumb.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-0\" aria-labelledby=\"navbarDropdownUser\">
\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1000 rounded-2 py-2\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item fw-bold text-warning\" href=\"#!\">
\t\t\t\t\t\t\t\t\t<span class=\"fas fa-crown me-1\"></span>
\t\t\t\t\t\t\t\t\t<span>Go Pro</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Set status</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages/user/profile.html\">Profile &amp; account</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Feedback</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages/user/settings.html\">Settings</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages/authentication/card/logout.html\">Logout</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<div class=\"content\">
\t\t\t\t<nav class=\"navbar navbar-light navbar-glass navbar-top navbar-expand\" style=\"display: none\">
\t\t\t\t\t<button class=\"btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarVerticalCollapse\" aria-controls=\"navbarVerticalCollapse\" aria-expanded=\"false\" aria-label=\"Toggle Navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggle-icon\">
\t\t\t\t\t\t\t<span class=\"toggle-line\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand me-1 me-sm-3\" href=\"index.html\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<img class=\"me-2\" src=\"assets/img/icons/spot-illustrations/falcon.png\" alt=\"\" width=\"40\"/><span class=\"font-sans-serif\">falcon</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"navbar-nav align-items-center d-none d-lg-block\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<div class=\"search-box\" data-list='{\"valueNames\":[\"title\"]}'>
\t\t\t\t\t\t\t\t<form class=\"position-relative\" data-bs-toggle=\"search\" data-bs-display=\"static\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control search-input fuzzy-search\" type=\"search\" placeholder=\"Recherche...\" aria-label=\"Search\"/>
\t\t\t\t\t\t\t\t\t<span class=\"fas fa-search search-box-icon\"></span>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<div class=\"btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none\" data-bs-dismiss=\"search\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-close-falcon\" aria-label=\"Close\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"scrollbar list py-3\" style=\"max-height: 24rem\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2\">
\t\t\t\t\t\t\t\t\t\t\tRecently Browsed
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item fs--1 px-card py-1 hover-primary\" href=\"../events/event-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-circle me-2 text-300 fs--2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-normal title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tPages
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-chevron-right mx-1 text-500 fs--2\" data-fa-transform=\"shrink-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\tEvents
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item fs--1 px-card py-1 hover-primary\" href=\"../e-commerce/customers.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-circle me-2 text-300 fs--2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-normal title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tE-commerce
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-chevron-right mx-1 text-500 fs--2\" data-fa-transform=\"shrink-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\tCustomers
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<hr class=\"bg-200 dark__bg-900\"/>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2\">
\t\t\t\t\t\t\t\t\t\t\tSuggested Filter
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-1 fs-0\" href=\"../e-commerce/customers.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge fw-medium text-decoration-none me-2 badge-soft-warning\">customers:</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1 fs--1 title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tAll customers list
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-1 fs-0\" href=\"../events/event-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge fw-medium text-decoration-none me-2 badge-soft-success\">events:</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1 fs--1 title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tLatest events in current month
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-1 fs-0\" href=\"../e-commerce/product/product-grid.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge fw-medium text-decoration-none me-2 badge-soft-info\">products:</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1 fs--1 title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMost popular products
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<hr class=\"bg-200 dark__bg-900\"/>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2\">
\t\t\t\t\t\t\t\t\t\t\tFiles
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-2\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-thumbnail me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"border h-100 w-100 fit-cover rounded-3\" src=\"assets/img/products/3-thumb.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 title\">iPhone</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-0 d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semi-bold\">Antony</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-medium text-600 ms-2\">27 Sep at 10:30 AM</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-2\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-thumbnail me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/icons/zip.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 title\">Falcon v1.8.2</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-0 d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semi-bold\">John</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-medium text-600 ms-2\">30 Sep at 12:30 PM</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<hr class=\"bg-200 dark__bg-900\"/>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2\">
\t\t\t\t\t\t\t\t\t\t\tMembers
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-2\" href=\"pages/user/profile.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-l status-online me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/1.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 title\">Anna Karinina</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-0 d-flex\">Technext Limited</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-2\" href=\"pages/user/profile.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-l me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/2.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 title\">Antony Hopkins</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-0 d-flex\">Brain Trust</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-2\" href=\"pages/user/profile.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-l me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/3.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 title\">Emma Watson</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-0 d-flex\">Google</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-n3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"fallback fw-bold fs-1 d-none\">
\t\t\t\t\t\t\t\t\t\t\tNo Result Found.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"navbar-nav navbar-nav-icons ms-auto flex-row align-items-center\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t  <div class=\"theme-control-toggle fa-icon-wait px-2\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t  class=\"form-check-input ms-0 theme-control-toggle-input\"
\t\t\t\t\t\t\t  id=\"themeControlToggle\"
\t\t\t\t\t\t\t  type=\"checkbox\"
\t\t\t\t\t\t\t  data-theme-control=\"theme\"
\t\t\t\t\t\t\t  value=\"dark\"
\t\t\t\t\t\t\t/><label
\t\t\t\t\t\t\t  class=\"mb-0 theme-control-toggle-label theme-control-toggle-light\"
\t\t\t\t\t\t\t  for=\"themeControlToggle\"
\t\t\t\t\t\t\t  data-bs-toggle=\"tooltip\"
\t\t\t\t\t\t\t  data-bs-placement=\"left\"
\t\t\t\t\t\t\t  title=\"Switch to light theme\"
\t\t\t\t\t\t\t  ><span class=\"fas fa-sun fs-0\"></span></label
\t\t\t\t\t\t\t><label
\t\t\t\t\t\t\t  class=\"mb-0 theme-control-toggle-label theme-control-toggle-dark\"
\t\t\t\t\t\t\t  for=\"themeControlToggle\"
\t\t\t\t\t\t\t  data-bs-toggle=\"tooltip\"
\t\t\t\t\t\t\t  data-bs-placement=\"left\"
\t\t\t\t\t\t\t  title=\"Switch to dark theme\"
\t\t\t\t\t\t\t  ><span class=\"fas fa-moon fs-0\"></span
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t  <a
\t\t\t\t\t\t\tclass=\"nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait\"
\t\t\t\t\t\t\tid=\"navbarDropdownNotification\"
\t\t\t\t\t\t\thref=\"#\"
\t\t\t\t\t\t\trole=\"button\"
\t\t\t\t\t\t\tdata-bs-toggle=\"dropdown\"
\t\t\t\t\t\t\taria-haspopup=\"true\"
\t\t\t\t\t\t\taria-expanded=\"false\"
\t\t\t\t\t\t\t><span
\t\t\t\t\t\t\t  class=\"fas fa-bell\"
\t\t\t\t\t\t\t  data-fa-transform=\"shrink-6\"
\t\t\t\t\t\t\t  style=\"font-size: 33px\"
\t\t\t\t\t\t\t></span
\t\t\t\t\t\t  ></a>
\t\t\t\t\t\t  <div
\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification\"
\t\t\t\t\t\t\taria-labelledby=\"navbarDropdownNotification\"
\t\t\t\t\t\t  >
\t\t\t\t\t\t\t<div class=\"card card-notification shadow-none\">
\t\t\t\t\t\t\t  <div class=\"card-header\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t  class=\"row justify-content-between align-items-center\"
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t  <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t<h6 class=\"card-header-title mb-0\">Notifications</h6>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"col-auto ps-0 ps-sm-3\">
\t\t\t\t\t\t\t\t\t<a class=\"card-link fw-normal\" href=\"#\"
\t\t\t\t\t\t\t\t\t  >Mark all as read</a
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"scrollbar-overlay\" style=\"max-height: 19rem\">
\t\t\t\t\t\t\t\t<div class=\"list-group list-group-flush fw-normal fs--1\">
\t\t\t\t\t\t\t\t  <div class=\"list-group-title border-bottom\">NEW</div>
\t\t\t\t\t\t\t\t  <div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t  class=\"notification notification-flush notification-unread\"
\t\t\t\t\t\t\t\t\t  href=\"#!\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t  <img
\t\t\t\t\t\t\t\t\t\t\tclass=\"rounded-circle\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"assets/img/team/1-thumb.png\"
\t\t\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\t\t  />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t  <strong>Emma Watson</strong> replied to your
\t\t\t\t\t\t\t\t\t\t  comment : \"Hello world 😍\"
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\"
\t\t\t\t\t\t\t\t\t\t  ><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"me-2\"
\t\t\t\t\t\t\t\t\t\t\trole=\"img\"
\t\t\t\t\t\t\t\t\t\t\taria-label=\"Emoji\"
\t\t\t\t\t\t\t\t\t\t\t>💬</span
\t\t\t\t\t\t\t\t\t\t  >Just now</span
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t  class=\"notification notification-flush notification-unread\"
\t\t\t\t\t\t\t\t\t  href=\"#!\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t  <div class=\"avatar-name rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t<span>AB</span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t  <strong>Albert Brooks</strong> reacted to
\t\t\t\t\t\t\t\t\t\t  <strong>Mia Khalifa's</strong> status
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\"
\t\t\t\t\t\t\t\t\t\t  ><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"me-2 fab fa-gratipay text-danger\"
\t\t\t\t\t\t\t\t\t\t  ></span
\t\t\t\t\t\t\t\t\t\t  >9hr</span
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"list-group-title border-bottom\">
\t\t\t\t\t\t\t\t\tEARLIER
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t  <div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t  <img
\t\t\t\t\t\t\t\t\t\t\tclass=\"rounded-circle\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"assets/img/icons/weather-sm.jpg\"
\t\t\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\t\t  />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t  The forecast today shows a low of 20&#8451; in
\t\t\t\t\t\t\t\t\t\t  California. See today's weather.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\"
\t\t\t\t\t\t\t\t\t\t  ><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"me-2\"
\t\t\t\t\t\t\t\t\t\t\trole=\"img\"
\t\t\t\t\t\t\t\t\t\t\taria-label=\"Emoji\"
\t\t\t\t\t\t\t\t\t\t\t>🌤️</span
\t\t\t\t\t\t\t\t\t\t  >1d</span
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t  class=\"border-bottom-0 notification-unread notification notification-flush\"
\t\t\t\t\t\t\t\t\t  href=\"#!\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl me-3\">
\t\t\t\t\t\t\t\t\t\t  <img
\t\t\t\t\t\t\t\t\t\t\tclass=\"rounded-circle\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"assets/img/logos/oxford.png\"
\t\t\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\t\t  />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t  <strong>University of Oxford</strong> created an
\t\t\t\t\t\t\t\t\t\t  event : \"Causal Inference Hilary 2019\"
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\"
\t\t\t\t\t\t\t\t\t\t  ><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"me-2\"
\t\t\t\t\t\t\t\t\t\t\trole=\"img\"
\t\t\t\t\t\t\t\t\t\t\taria-label=\"Emoji\"
\t\t\t\t\t\t\t\t\t\t\t>✌️</span
\t\t\t\t\t\t\t\t\t\t  >1w</span
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t  class=\"border-bottom-0 notification notification-flush\"
\t\t\t\t\t\t\t\t\t  href=\"#!\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl me-3\">
\t\t\t\t\t\t\t\t\t\t  <img
\t\t\t\t\t\t\t\t\t\t\tclass=\"rounded-circle\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"assets/img/team/10.jpg\"
\t\t\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\t\t  />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t  <strong>James Cameron</strong> invited to join
\t\t\t\t\t\t\t\t\t\t  the group: United Nations International
\t\t\t\t\t\t\t\t\t\t  Children's Fund
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\"
\t\t\t\t\t\t\t\t\t\t  ><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"me-2\"
\t\t\t\t\t\t\t\t\t\t\trole=\"img\"
\t\t\t\t\t\t\t\t\t\t\taria-label=\"Emoji\"
\t\t\t\t\t\t\t\t\t\t\t>🙋‍</span
\t\t\t\t\t\t\t\t\t\t  >2d</span
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"card-footer text-center border-top\">
\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t  class=\"card-link d-block\"
\t\t\t\t\t\t\t\t  href=\"../social/notifications.html\"
\t\t\t\t\t\t\t\t  >View all</a
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t   <a class=\"nav-link pe-0\" id=\"navbarDropdownUser\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t   <div class=\"avatar avatar-xl\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"";
        // line 1074
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/team/3-thumb.png"), "html", null, true);
        echo "\" alt=\"\"  />
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t   </a>
\t\t\t\t\t\t   <div class=\"dropdown-menu dropdown-menu-end py-0\" aria-labelledby=\"navbarDropdownUser\">
\t\t\t\t\t\t\t\t <div class=\"bg-white dark__bg-1000 rounded-2 py-2\">
\t\t\t\t\t\t\t\t\t <a class=\"dropdown-item\" href=\"pages/authentication/card/logout.html\">Déconnecter</a>
\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t  </ul>
\t\t\t\t</nav>
\t\t\t\t<nav class=\"navbar navbar-light navbar-glass navbar-top navbar-expand-lg\" style=\"display: none\" data-move-target=\"#navbarVerticalNav\" data-navbar-top=\"combo\">
\t\t\t\t\t<button class=\"btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarVerticalCollapse\" aria-controls=\"navbarVerticalCollapse\" aria-expanded=\"false\" aria-label=\"Toggle Navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggle-icon\">
\t\t\t\t\t\t\t<span class=\"toggle-line\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand me-1 me-sm-3\" href=\"index.html\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<img class=\"me-2\" src=\"assets/img/icons/spot-illustrations/falcon.png\" alt=\"\" width=\"40\"/><span class=\"font-sans-serif\">falcon</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse navbar-collapse scrollbar\" id=\"navbarStandard\">
\t\t\t\t\t\t<ul class=\"navbar-nav\" data-top-nav-dropdowns=\"data-top-nav-dropdowns\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"dashboards\">Dashboard</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"dashboards\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1000 rounded-3 py-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"index.html\">Default</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/analytics.html\">Analytics</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/crm.html\">CRM</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/e-commerce.html\">E commerce</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/project-management.html\">Management</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/saas.html\">SaaS</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"apps\">App</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"apps\">
\t\t\t\t\t\t\t\t\t<div class=\"card navbar-card-app shadow-none dark__bg-1000\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body scrollbar max-h-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-dropdown\" src=\"assets/img/icons/spot-illustrations/authentication-corner.png\" width=\"130\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../calendar.html\">Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../chat.html\">Chat</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../kanban.html\">Kanban</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../email/inbox.html\">Inbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../email/email-detail.html\">Email detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../email/compose.html\">Compose</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEvents
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../events/create-an-event.html\">Create an event</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../events/event-detail.html\">Event detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../events/event-list.html\">Event list</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSocial
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"feed.html\">Feed</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"activity-log.html\">Activity log</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"notifications.html\">Notifications</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"followers.html\">Followers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tE-Commerce
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/product/product-list.html\">Product list</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/product/product-grid.html\">Product grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/product/product-details.html\">Product details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/orders/order-list.html\">Order list</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/orders/order-details.html\">Order details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/customers.html\">Customers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/customer-details.html\">Customer details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/shopping-cart.html\">Shopping cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/checkout.html\">Checkout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/billing.html\">Billing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/invoice.html\">Invoice</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"pagess\">Pages</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"pagess\">
\t\t\t\t\t\t\t\t\t<div class=\"card navbar-card-pages shadow-none dark__bg-1000\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body scrollbar max-h-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-dropdown\" src=\"assets/img/icons/spot-illustrations/authentication-corner.png\" width=\"130\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSimple Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/forgot-password.html\">Forgot password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/confirm-mail.html\">Confirm mail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/reset-password.html\">Reset password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/lock-screen.html\">Lock screen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCard Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/forgot-password.html\">Forgot password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/confirm-mail.html\">Confirm mail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/reset-password.html\">Reset password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/lock-screen.html\">Lock screen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSplit Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/forgot-password.html\">Forgot password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/confirm-mail.html\">Confirm mail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/reset-password.html\">Reset password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/lock-screen.html\">Lock screen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOther Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/wizard.html\">Wizard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"index-2.html#authentication-modal\" data-bs-toggle=\"modal\">Modal</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMiscellaneous
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/miscellaneous/associations.html\">Associations</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/miscellaneous/invite-people.html\">Invite people</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/miscellaneous/privacy-policy.html\">Privacy policy</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">User</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/user/profile.html\">Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/user/settings.html\">Settings</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPricing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/pricing/pricing-default.html\">Pricing default</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/pricing/pricing-alt.html\">Pricing alt</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tErrors
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/errors/404.html\">404</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/errors/500.html\">500</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOthers
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/starter.html\">Starter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/landing.html\">Landing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"moduless\">Modules</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"moduless\">
\t\t\t\t\t\t\t\t\t<div class=\"card navbar-card-components shadow-none dark__bg-1000\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body scrollbar max-h-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-dropdown\" src=\"assets/img/icons/spot-illustrations/authentication-corner.png\" width=\"130\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tComponents
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/accordion.html\">Accordion</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/alerts.html\">Alerts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/anchor.html\">Anchor</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/animated-icons.html\">Animated icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/background.html\">Background</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/badges.html\">Badges</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/breadcrumbs.html\">Breadcrumbs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/buttons.html\">Buttons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/calendar.html\">Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/cards.html\">Cards</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/carousel/bootstrap.html\">Bootstrap carousel</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-md-4 pt-md-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/carousel/swiper.html\">Swiper</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/collapse.html\">Collapse</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/cookie-notice.html\">Cookie notice</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/countup.html\">Countup</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/draggable.html\">Draggable</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/dropdowns.html\">Dropdowns</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/list-group.html\">List group</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/modals.html\">Modals</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/navs.html\">Navs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/navbar.html\">Navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/vertical-navbar.html\">Vertical navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-xxl-4 pt-xxl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/top-navbar.html\">Top navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/combo-navbar.html\">Combo navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/tabs.html\">Tabs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/offcanvas.html\">Offcanvas</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/avatar.html\">Avatar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/images.html\">Images</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/figures.html\">Figures</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/hoverbox.html\">Hoverbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/lightbox.html\">Lightbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/progress-bar.html\">Progress bar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/placeholder.html\">Placeholder</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-xxl-4 pt-xxl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pagination.html\">Pagination</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/popovers.html\">Popovers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/scrollspy.html\">Scrollspy</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/search.html\">Search</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/spinners.html\">Spinners</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/toasts.html\">Toasts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/tooltips.html\">Tooltips</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/typed-text.html\">Typed text</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/videos/embed.html\">Embed</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/videos/plyr.html\">Plyr</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tForms
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/form-control.html\">Form control</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/input-group.html\">Input group</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/select.html\">Select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/checks.html\">Checks</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/range.html\">Range</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/layout.html\">Layout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/advance-select.html\">Advance select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/date-picker.html\">Date picker</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/editor.html\">Editor</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/emoji-button.html\">Emoji button</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/file-uploader.html\">File uploader</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/rating.html\">Rating</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/floating-labels.html\">Floating labels</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/wizard.html\">Wizard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/validation.html\">Validation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTables
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/tables/basic-tables.html\">Basic tables</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/tables/advance-tables.html\">Advance tables</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/tables/bulk-select.html\">Bulk select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCharts
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/chartjs.html\">Chartjs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tECharts
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/line-charts.html\">Line charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/bar-charts.html\">Bar charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/candlestick-charts.html\">Candlestick charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/geo-map.html\">Geo map</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/scatter-charts.html\">Scatter charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/pie-charts.html\">Pie charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/radar-charts.html\">Radar charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/heatmap-charts.html\">Heatmap charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/how-to-use.html\">How to use</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUtilities
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/borders.html\">Borders</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/clearfix.html\">Clearfix</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/colors.html\">Colors</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/colored-links.html\">Colored links</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/display.html\">Display</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/flex.html\">Flex</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/float.html\">Float</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/grid.html\">Grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/overlayscrollbars.html\">Overlayscrollbars</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/position.html\">Position</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/spacing.html\">Spacing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/sizing.html\">Sizing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/stretched-link.html\">Stretched link</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/text-truncation.html\">Text truncation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/typography.html\">Typography</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/vertical-align.html\">Vertical align</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/visibility.html\">Visibility</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-xxl-4 pt-xxl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIcons
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/font-awesome.html\">Font awesome</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/bootstrap-icons.html\">Bootstrap icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/feather.html\">Feather</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/material-icons.html\">Material icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Maps</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/maps/google-map.html\">Google map</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/maps/leaflet-map.html\">Leaflet map</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"documentations\">Documentation</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"documentations\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1000 rounded-3 py-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/getting-started.html\">Getting started</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/configuration.html\">Configuration</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/styling.html\">Styling</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/dark-mode.html\">Dark mode<span class=\"badge rounded-pill ms-2 badge-soft-success\">New</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/plugin.html\">Plugin</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/gulp.html\">Gulp</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/design-file.html\">Design file</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"changelog.html\">Changelog</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"navbar-nav navbar-nav-icons ms-auto flex-row align-items-center\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<div class=\"theme-control-toggle fa-icon-wait px-2\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input ms-0 theme-control-toggle-input\" id=\"themeControlToggle\" type=\"checkbox\" data-theme-control=\"theme\" value=\"dark\"/><label class=\"mb-0 theme-control-toggle-label theme-control-toggle-light\" for=\"themeControlToggle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"Switch to light theme\">
\t\t\t\t\t\t\t\t\t<span class=\"fas fa-sun fs-0\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"mb-0 theme-control-toggle-label theme-control-toggle-dark\" for=\"themeControlToggle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"Switch to dark theme\">
\t\t\t\t\t\t\t\t\t<span class=\"fas fa-moon fs-0\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait\" href=\"../e-commerce/shopping-cart.html\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-shopping-cart\" data-fa-transform=\"shrink-7\" style=\"font-size: 33px\"></span>
\t\t\t\t\t\t\t\t<span class=\"notification-indicator-number\">1</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait\" id=\"navbarDropdownNotification\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-bell\" data-fa-transform=\"shrink-6\" style=\"font-size: 33px\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification\" aria-labelledby=\"navbarDropdownNotification\">
\t\t\t\t\t\t\t\t<div class=\"card card-notification shadow-none\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-header-title mb-0\">Notifications</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto ps-0 ps-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"card-link fw-normal\" href=\"#\">Mark all as read</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"scrollbar-overlay\" style=\"max-height: 19rem\">
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group list-group-flush fw-normal fs--1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-title border-bottom\">NEW</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush notification-unread\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/1-thumb.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Emma Watson</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treplied to your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcomment : \"Hello world 😍\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">💬</span>Just now</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush notification-unread\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-name rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>AB</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Albert Brooks</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treacted to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Mia Khalifa's</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstatus
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2 fab fa-gratipay text-danger\"></span>9hr</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-title border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\tEARLIER
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/icons/weather-sm.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tThe forecast today shows a low of 20&#8451; in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCalifornia. See today's weather.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">🌤️</span>1d</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"border-bottom-0 notification-unread notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/logos/oxford.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>University of Oxford</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcreated an
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tevent : \"Causal Inference Hilary 2019\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">✌️</span>1w</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"border-bottom-0 notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/10.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>James Cameron</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tinvited to join
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthe group: United Nations International
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChildren's Fund
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">🙋‍</span>2d</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-footer text-center border-top\">
\t\t\t\t\t\t\t\t\t\t<a class=\"card-link d-block\" href=\"notifications.html\">View all</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link pe-0\" id=\"navbarDropdownUser\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"";
        // line 1595
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/team/3-thumb.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-0\" aria-labelledby=\"navbarDropdownUser\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1000 rounded-2 py-2\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item fw-bold text-warning\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-crown me-1\"></span>
\t\t\t\t\t\t\t\t\t\t<span>Go Pro</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Set status</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages/user/profile.html\">Profile &amp; account</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Feedback</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages/user/settings.html\">Settings</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages/authentication/card/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<script>
\t\t\t\t\tvar navbarPosition = localStorage.getItem(\"navbarPosition\");
var navbarVertical = document.querySelector(\".navbar-vertical\");
var navbarTopVertical = document.querySelector(\".content .navbar-top\");
var navbarTop = document.querySelector(\"[data-layout] .navbar-top\");
var navbarTopCombo = document.querySelector('.content [data-navbar-top=\"combo\"]');
if (navbarPosition === \"top\") {
navbarTop.removeAttribute(\"style\");
navbarTopVertical.remove(navbarTopVertical);
navbarVertical.remove(navbarVertical);
navbarTopCombo.remove(navbarTopCombo);
} else if (navbarPosition === \"combo\") {
navbarVertical.removeAttribute(\"style\");
navbarTopCombo.removeAttribute(\"style\");
navbarTop.remove(navbarTop);
navbarTopVertical.remove(navbarTopVertical);
} else {
navbarVertical.removeAttribute(\"style\");
navbarTopVertical.removeAttribute(\"style\");
navbarTop.remove(navbarTop);
navbarTopCombo.remove(navbarTopCombo);
}
\t\t\t\t</script>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header bg-light\">
\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\" id=\"followers\">
\t\t\t\t\t\t\t\t\tListe des utilisateurs
\t\t\t\t\t\t\t\t\t<span class=\"d-none d-sm-inline-block\">(233)</span>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher...\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col d-md-block d-none\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-select form-select-sm ms-2\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\">Tous utlisateurs</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Admins</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Invistesseur</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Entrepreneur</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body bg-light px-1 py-0\">
\t\t\t\t\t\t<div class=\"row g-0 text-center fs--1\">
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"";
        // line 1671
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/team/joseph.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:green\">
\t\t\t\t\t\t\t\t\t\tActif
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"";
        // line 1685
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/team/joseph.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:red\">
\t\t\t\t\t\t\t\t\t\tBloqué
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"";
        // line 1699
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/team/joseph.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:green\">
\t\t\t\t\t\t\t\t\t\tActif
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"";
        // line 1713
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/team/joseph.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:green\">
\t\t\t\t\t\t\t\t\t\tActif
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"";
        // line 1727
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/team/joseph.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:red\">
\t\t\t\t\t\t\t\t\t\tBloqué
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"";
        // line 1741
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/team/joseph.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:red\">
\t\t\t\t\t\t\t\t\t\tBloqué
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"";
        // line 1755
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/team/joseph.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:red\">
\t\t\t\t\t\t\t\t\t\tBloqué
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"";
        // line 1769
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/team/joseph.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:green\">
\t\t\t\t\t\t\t\t\t\tActif
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"";
        // line 1783
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/team/joseph.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:green\">
\t\t\t\t\t\t\t\t\t\tActif
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t<div class=\"row g-0 justify-content-between fs--1 mt-4 mb-3\">
\t\t\t\t\t\t<div class=\"col-12 col-sm-auto text-center\">
\t\t\t\t\t\t\t<p class=\"mb-0 text-600\">
\t\t\t\t\t\t\t\tThank you for creating with Falcon
\t\t\t\t\t\t\t\t<span class=\"d-none d-sm-inline-block\">|
\t\t\t\t\t\t\t\t</span><br class=\"d-sm-none\"/>
\t\t\t\t\t\t\t\t2021 &copy;
\t\t\t\t\t\t\t\t<a href=\"https://themewagon.com/\">Themewagon</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-sm-auto text-center\">
\t\t\t\t\t\t\t<p class=\"mb-0 text-600\">v3.3.0</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</div>
\t\t\t<div class=\"modal fade\" id=\"authentication-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"authentication-modal-label\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog mt-6\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content border-0\">
\t\t\t\t\t\t<div class=\"modal-header px-5 position-relative modal-shape-header bg-shape\">
\t\t\t\t\t\t\t<div class=\"position-relative z-index-1 light\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-0 text-white\" id=\"authentication-modal-label\">
\t\t\t\t\t\t\t\t\tAjouter un admin
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body py-4 px-5\">
\t\t\t\t\t\t\t<form>
\t\t\t  <div class=\"row gx-2\">
\t\t\t\t\t\t\t\t<div class=\"mb-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"modal-auth-name\">Nom</label><input class=\"form-control\" type=\"text\" autocomplete=\"on\" id=\"modal-auth-name\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t  <div class=\"mb-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"modal-auth-name\">Prénom</label><input class=\"form-control\" type=\"text\" autocomplete=\"on\" id=\"modal-auth-name\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"modal-auth-email\">Addresse E-mail</label><input class=\"form-control\" type=\"email\" autocomplete=\"on\" id=\"modal-auth-email\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row gx-2\">
\t\t\t\t\t\t\t\t\t<div class=\"mb-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"modal-auth-password\">Mot de passe</label><input class=\"form-control\" type=\"password\" autocomplete=\"on\" id=\"modal-auth-password\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"modal-auth-confirm-password\">Confirmer Mot de passe</label><input class=\"form-control\" type=\"password\" autocomplete=\"on\" id=\"modal-auth-confirm-password\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary d-block w-100 mt-3\" type=\"submit\" name=\"submit\">
\t\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
\t<!-- ===============================================-->
\t<!--    End of Main Content-->
\t<!-- ===============================================-->

\t\t<div class=\"offcanvas offcanvas-end settings-panel border-0\" id=\"settings-offcanvas\" tabindex=\"-1\" aria-labelledby=\"settings-offcanvas\"> <div class=\"offcanvas-header settings-panel-header bg-shape\">
\t\t\t<div class=\"z-index-1 py-1 light\">
\t\t\t\t<h5 class=\"text-white\">
\t\t\t\t\t<span class=\"fas fa-palette me-2 fs-0\"></span>Settings
\t\t\t\t</h5>
\t\t\t\t<p class=\"mb-0 fs--1 text-white opacity-75\">
\t\t\t\t\tSet your own customized style
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<button class=\"btn-close btn-close-white z-index-1 mt-0\" type=\"button\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t\t</div>
\t\t<div class=\"offcanvas-body scrollbar-overlay px-card\" id=\"themeController\">
\t\t\t<h5 class=\"fs-0\">Color Scheme</h5>
\t\t\t<p class=\"fs--1\">Choose the perfect color mode for your app.</p>
\t\t\t<div class=\"btn-group d-block w-100 btn-group-navbar-style\">
\t\t\t\t<div class=\"row gx-2\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<input class=\"btn-check\" id=\"themeSwitcherLight\" name=\"theme-color\" type=\"radio\" value=\"light\" data-theme-control=\"theme\"/><label class=\"btn d-inline-block btn-navbar-style fs--1\" for=\"themeSwitcherLight\">
\t\t\t\t\t\t\t<span class=\"hover-overlay mb-2 rounded d-block\"><img class=\"img-fluid img-prototype mb-0\" src=\"assets/img/generic/falcon-mode-default.jpg\" alt=\"\"/></span>
\t\t\t\t\t\t\t<span class=\"label-text\">Light</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<input class=\"btn-check\" id=\"themeSwitcherDark\" name=\"theme-color\" type=\"radio\" value=\"dark\" data-theme-control=\"theme\"/><label class=\"btn d-inline-block btn-navbar-style fs--1\" for=\"themeSwitcherDark\">
\t\t\t\t\t\t\t<span class=\"hover-overlay mb-2 rounded d-block\"><img class=\"img-fluid img-prototype mb-0\" src=\"assets/img/generic/falcon-mode-dark.jpg\" alt=\"\"/></span>
\t\t\t\t\t\t\t<span class=\"label-text\">
\t\t\t\t\t\t\t\tDark</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr/>
\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t<img class=\"me-2\" src=\"assets/img/icons/left-arrow-from-left.svg\" width=\"20\" alt=\"\"/>
\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t<h5 class=\"fs-0\">RTL Mode</h5>
\t\t\t\t\t\t<p class=\"fs--1 mb-0\">Switch your language direction</p>
\t\t\t\t\t\t<a class=\"fs--1\" href=\"documentation/customization/configuration.html\">RTL Documentation</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t<input class=\"form-check-input ms-0\" id=\"mode-rtl\" type=\"checkbox\" data-theme-control=\"isRTL\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr/>
\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t<img class=\"me-2\" src=\"assets/img/icons/arrows-h.svg\" width=\"20\" alt=\"\"/>
\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t<h5 class=\"fs-0\">Fluid Layout</h5>
\t\t\t\t\t\t<p class=\"fs--1 mb-0\">Toggle container layout system</p>
\t\t\t\t\t\t<a class=\"fs--1\" href=\"documentation/customization/configuration.html\">Fluid Documentation</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t<input class=\"form-check-input ms-0\" id=\"mode-fluid\" type=\"checkbox\" data-theme-control=\"isFluid\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr/>
\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t<img class=\"me-2\" src=\"assets/img/icons/paragraph.svg\" width=\"20\" alt=\"\"/>
\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t<h5 class=\"fs-0 d-flex align-items-center\">Navigation Position</h5>
\t\t\t\t\t<p class=\"fs--1 mb-2\">
\t\t\t\t\t\tSelect a suitable navigation system for your web application
\t\t\t\t\t</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" id=\"option-navbar-vertical\" type=\"radio\" name=\"navbar\" value=\"vertical\" data-theme-control=\"navbarPosition\"/><label class=\"form-check-label\" for=\"option-navbar-vertical\">Vertical</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" id=\"option-navbar-top\" type=\"radio\" name=\"navbar\" value=\"top\" data-theme-control=\"navbarPosition\"/><label class=\"form-check-label\" for=\"option-navbar-top\">Top</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-check form-check-inline me-0\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" id=\"option-navbar-combo\" type=\"radio\" name=\"navbar\" value=\"combo\" data-theme-control=\"navbarPosition\"/><label class=\"form-check-label\" for=\"option-navbar-combo\">Combo</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr/>
\t\t\t<h5 class=\"fs-0 d-flex align-items-center\">Vertical Navbar Style</h5>
\t\t\t<p class=\"fs--1 mb-0\">Switch between styles for your vertical navbar</p>
\t\t\t<p>
\t\t\t\t<a class=\"fs--1\" href=\"modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles\">See Documentation</a>
\t\t\t</p>
\t\t\t<div class=\"btn-group d-block w-100 btn-group-navbar-style\">
\t\t\t\t<div class=\"row gx-2\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<input class=\"btn-check\" id=\"navbar-style-transparent\" type=\"radio\" name=\"navbarStyle\" value=\"transparent\" data-theme-control=\"navbarStyle\"/><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-transparent\">
\t\t\t\t\t\t\t<img class=\"img-fluid img-prototype\" src=\"assets/img/generic/default.png\" alt=\"\"/><span class=\"label-text\">
\t\t\t\t\t\t\t\tTransparent</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<input class=\"btn-check\" id=\"navbar-style-inverted\" type=\"radio\" name=\"navbarStyle\" value=\"inverted\" data-theme-control=\"navbarStyle\"/><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-inverted\">
\t\t\t\t\t\t\t<img class=\"img-fluid img-prototype\" src=\"assets/img/generic/inverted.png\" alt=\"\"/><span class=\"label-text\">
\t\t\t\t\t\t\t\tInverted</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<input class=\"btn-check\" id=\"navbar-style-card\" type=\"radio\" name=\"navbarStyle\" value=\"card\" data-theme-control=\"navbarStyle\"/><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-card\">
\t\t\t\t\t\t\t<img class=\"img-fluid img-prototype\" src=\"assets/img/generic/card.png\" alt=\"\"/><span class=\"label-text\">
\t\t\t\t\t\t\t\tCard</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<input class=\"btn-check\" id=\"navbar-style-vibrant\" type=\"radio\" name=\"navbarStyle\" value=\"vibrant\" data-theme-control=\"navbarStyle\"/><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-vibrant\">
\t\t\t\t\t\t\t<img class=\"img-fluid img-prototype\" src=\"assets/img/generic/vibrant.png\" alt=\"\"/><span class=\"label-text\">
\t\t\t\t\t\t\t\tVibrant</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"text-center mt-5\">
\t\t\t\t<img class=\"mb-4\" src=\"assets/img/icons/spot-illustrations/47.png\" alt=\"\" width=\"120\"/>
\t\t\t\t<h5>Like What You See?</h5>
\t\t\t\t<p class=\"fs--1\">
\t\t\t\t\tGet Falcon now and create beautiful dashboards with hundreds of
\t\t\t\t\t\t\t\twidgets.
\t\t\t\t</p>
\t\t\t\t<a class=\"mb-3 btn btn-primary\" href=\"https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/\" target=\"_blank\">Purchase</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<a class=\"card setting-toggle\" href=\"#settings-offcanvas\" data-bs-toggle=\"offcanvas\">
\t\t<div class=\"card-body d-flex align-items-center py-md-2 px-2 py-1\">
\t\t\t<div class=\"bg-soft-primary position-relative rounded-start\" style=\"height: 34px; width: 28px\">
\t\t\t\t<div class=\"settings-popover\">
\t\t\t\t\t<span class=\"ripple\">
\t\t\t\t\t\t<span class=\"fa-spin position-absolute all-0 d-flex flex-center\">
\t\t\t\t\t\t\t<span class=\"icon-spin position-absolute all-0 d-flex flex-center\">
\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewbox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z\" fill=\"#2A7BE4\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<small class=\"text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end\">customize</small>
\t\t</div>
\t</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/GestionUtilisateur/followers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1889 => 1783,  1872 => 1769,  1855 => 1755,  1838 => 1741,  1821 => 1727,  1804 => 1713,  1787 => 1699,  1770 => 1685,  1753 => 1671,  1674 => 1595,  1150 => 1074,  747 => 674,  149 => 79,  100 => 33,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/GestionUtilisateur/login.html.twig'%}
{%block body%}
<body>
\t<!-- ===============================================-->
\t<!--    Main Content-->
\t<!-- ===============================================-->
\t\t<main class=\"main\" id=\"top\"> <div class=\"container\" data-layout=\"container\">
\t\t\t<script>
\t\t\t\tvar isFluid = JSON.parse(localStorage.getItem(\"isFluid\"));
if (isFluid) {
var container = document.querySelector(\"[data-layout]\");
container.classList.remove(\"container\");
container.classList.add(\"container-fluid\");
}
\t\t\t</script>
\t\t\t<nav class=\"navbar navbar-light navbar-vertical navbar-expand-xl\" style=\"display: none\">
\t\t\t\t<script>
\t\t\t\t\tvar navbarStyle = localStorage.getItem(\"navbarStyle\");
if (navbarStyle && navbarStyle !== \"transparent\") {
document.querySelector(\".navbar-vertical\").classList.add(`navbar-\${navbarStyle}`);
}
\t\t\t\t</script>
\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t<div class=\"toggle-icon-wrapper\">
\t\t\t\t\t\t<button class=\"btn navbar-toggler-humburger-icon navbar-vertical-toggle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"Toggle Navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggle-icon\">
\t\t\t\t\t\t\t\t<span class=\"toggle-line\"></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center py-3\">
\t\t\t\t\t\t\t<img class=\"me-2\" src=\"{{asset('back/assets/img/logo.png')}}\" alt=\"\" width=\"140\"/><span class=\"font-sans-serif\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarVerticalCollapse\">
\t\t\t\t\t<div class=\"navbar-vertical-content scrollbar\">
\t\t\t\t\t\t<ul class=\"navbar-nav flex-column mb-3\" id=\"navbarVerticalNav\">
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tclass=\"nav-item\">
\t\t\t\t\t\t\t\t<!-- parent pages-->
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#dashboard\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dashboard\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-chart-pie\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Dashboard</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tclass=\"nav-item\">
\t\t\t\t\t\t\t\t<!-- label-->
\t\t\t\t\t\t\t\t<div class=\"row navbar-vertical-label-wrapper mt-3 mb-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col-auto navbar-vertical-label\">Pages</div>
\t\t\t\t\t\t\t\t\t<div class=\"col ps-0\">
\t\t\t\t\t\t\t\t\t\t<hr class=\"mb-0 navbar-vertical-divider\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t  <a class=\"nav-link dropdown-indicator\" href=\"#user\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"user\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-user\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Utilisateurs</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav collapse false\" id=\"user\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"profile.html\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Mon profile</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_dashListe')}}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Liste des utilisateurs</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index-2.html#authentication-modal\" data-bs-toggle=\"modal\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Ajouter un admin</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t  <a class=\"nav-link dropdown-indicator\" href=\"#authentication\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"authentication\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-calendar-day\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Evènements</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav collapse false\" id=\"authentication\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"create-an-event.html\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Ajouter un évènement</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"event-list.html\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Liste des évènements</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- parent pages-->
\t\t\t\t\t\t\t\t<!-- parent pages-->
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-indicator\" href=\"#pricing\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"pricing\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-tags\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Annonces</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav collapse false\" id=\"pricing\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"annonces.html\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Liste des annonces</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- parent pages-->
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-indicator\" href=\"#faq\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"faq\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-question-circle\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Rendez-vous</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav collapse false\" id=\"faq\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/faq/faq-basic.html\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Liste des rendez-vous</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- parent pages-->
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-indicator\" href=\"#errors\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"errors\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-exclamation-triangle\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Réclamations</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav collapse false\" id=\"errors\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/errors/404.html\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ps-1\">Listes des réclamation</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- more inner pages-->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<nav class=\"navbar navbar-light navbar-glass navbar-top navbar-expand-xl\" style=\"display: none\">
\t\t\t\t<button class=\"btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarStandard\" aria-controls=\"navbarStandard\" aria-expanded=\"false\" aria-label=\"Toggle Navigation\">
\t\t\t\t\t<span class=\"navbar-toggle-icon\">
\t\t\t\t\t\t<span class=\"toggle-line\"></span>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand me-1 me-sm-3\" href=\"index.html\">
\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t<img class=\"me-2\" src=\"assets/img/icons/spot-illustrations/falcon.png\" alt=\"\" width=\"40\"/><span class=\"font-sans-serif\">falcon</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<div class=\"collapse navbar-collapse scrollbar\" id=\"navbarStandard\">
\t\t\t\t\t<ul class=\"navbar-nav\" data-top-nav-dropdowns=\"data-top-nav-dropdowns\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"dashboards\">Dashboard</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"dashboards\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1000 rounded-3 py-2\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"index.html\">Default</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/analytics.html\">Analytics</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/crm.html\">CRM</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/e-commerce.html\">E commerce</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/project-management.html\">Management</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/saas.html\">SaaS</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"apps\">App</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"apps\">
\t\t\t\t\t\t\t\t<div class=\"card navbar-card-app shadow-none dark__bg-1000\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body scrollbar max-h-dropdown\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-dropdown\" src=\"assets/img/icons/spot-illustrations/authentication-corner.png\" width=\"130\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../calendar.html\">Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../chat.html\">Chat</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../kanban.html\">Kanban</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Email</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../email/inbox.html\">Inbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../email/email-detail.html\">Email detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../email/compose.html\">Compose</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Events</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../events/create-an-event.html\">Create an event</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../events/event-detail.html\">Event detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../events/event-list.html\">Event list</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Social</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"feed.html\">Feed</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"activity-log.html\">Activity log</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"notifications.html\">Notifications</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"followers.html\">Followers</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tE-Commerce
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/product/product-list.html\">Product list</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/product/product-grid.html\">Product grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/product/product-details.html\">Product details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/orders/order-list.html\">Order list</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/orders/order-details.html\">Order details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/customers.html\">Customers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/customer-details.html\">Customer details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/shopping-cart.html\">Shopping cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/checkout.html\">Checkout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/billing.html\">Billing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/invoice.html\">Invoice</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"pagess\">Pages</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"pagess\">
\t\t\t\t\t\t\t\t<div class=\"card navbar-card-pages shadow-none dark__bg-1000\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body scrollbar max-h-dropdown\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-dropdown\" src=\"assets/img/icons/spot-illustrations/authentication-corner.png\" width=\"130\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSimple Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/forgot-password.html\">Forgot password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/confirm-mail.html\">Confirm mail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/reset-password.html\">Reset password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/lock-screen.html\">Lock screen</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCard Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/forgot-password.html\">Forgot password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/confirm-mail.html\">Confirm mail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/reset-password.html\">Reset password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/lock-screen.html\">Lock screen</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSplit Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/forgot-password.html\">Forgot password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/confirm-mail.html\">Confirm mail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/reset-password.html\">Reset password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/lock-screen.html\">Lock screen</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tOther Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/wizard.html\">Wizard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"index-2.html#authentication-modal\" data-bs-toggle=\"modal\">Modal</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMiscellaneous
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/miscellaneous/associations.html\">Associations</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/miscellaneous/invite-people.html\">Invite people</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/miscellaneous/privacy-policy.html\">Privacy policy</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">User</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/user/profile.html\">Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/user/settings.html\">Settings</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tPricing
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/pricing/pricing-default.html\">Pricing default</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/pricing/pricing-alt.html\">Pricing alt</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Errors</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/errors/404.html\">404</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/errors/500.html\">500</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Others</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/starter.html\">Starter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/landing.html\">Landing</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"moduless\">Modules</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"moduless\">
\t\t\t\t\t\t\t\t<div class=\"card navbar-card-components shadow-none dark__bg-1000\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body scrollbar max-h-dropdown\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-dropdown\" src=\"assets/img/icons/spot-illustrations/authentication-corner.png\" width=\"130\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tComponents
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/accordion.html\">Accordion</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/alerts.html\">Alerts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/anchor.html\">Anchor</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/animated-icons.html\">Animated icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/background.html\">Background</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/badges.html\">Badges</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/breadcrumbs.html\">Breadcrumbs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/buttons.html\">Buttons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/calendar.html\">Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/cards.html\">Cards</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/carousel/bootstrap.html\">Bootstrap carousel</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-md-4 pt-md-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/carousel/swiper.html\">Swiper</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/collapse.html\">Collapse</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/cookie-notice.html\">Cookie notice</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/countup.html\">Countup</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/draggable.html\">Draggable</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/dropdowns.html\">Dropdowns</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/list-group.html\">List group</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/modals.html\">Modals</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/navs.html\">Navs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/navbar.html\">Navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/vertical-navbar.html\">Vertical navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-xxl-4 pt-xxl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/top-navbar.html\">Top navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/combo-navbar.html\">Combo navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/tabs.html\">Tabs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/offcanvas.html\">Offcanvas</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/avatar.html\">Avatar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/images.html\">Images</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/figures.html\">Figures</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/hoverbox.html\">Hoverbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/lightbox.html\">Lightbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/progress-bar.html\">Progress bar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/placeholder.html\">Placeholder</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-xxl-4 pt-xxl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pagination.html\">Pagination</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/popovers.html\">Popovers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/scrollspy.html\">Scrollspy</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/search.html\">Search</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/spinners.html\">Spinners</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/toasts.html\">Toasts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/tooltips.html\">Tooltips</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/typed-text.html\">Typed text</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/videos/embed.html\">Embed</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/videos/plyr.html\">Plyr</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Forms</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/form-control.html\">Form control</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/input-group.html\">Input group</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/select.html\">Select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/checks.html\">Checks</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/range.html\">Range</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/layout.html\">Layout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/advance-select.html\">Advance select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/date-picker.html\">Date picker</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/editor.html\">Editor</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/emoji-button.html\">Emoji button</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/file-uploader.html\">File uploader</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/rating.html\">Rating</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/floating-labels.html\">Floating labels</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/wizard.html\">Wizard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/validation.html\">Validation</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Tables</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/tables/basic-tables.html\">Basic tables</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/tables/advance-tables.html\">Advance tables</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/tables/bulk-select.html\">Bulk select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Charts</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/chartjs.html\">Chartjs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tECharts
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/line-charts.html\">Line charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/bar-charts.html\">Bar charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/candlestick-charts.html\">Candlestick charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/geo-map.html\">Geo map</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/scatter-charts.html\">Scatter charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/pie-charts.html\">Pie charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/radar-charts.html\">Radar charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/heatmap-charts.html\">Heatmap charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/how-to-use.html\">How to use</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tUtilities
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/borders.html\">Borders</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/clearfix.html\">Clearfix</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/colors.html\">Colors</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/colored-links.html\">Colored links</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/display.html\">Display</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/flex.html\">Flex</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/float.html\">Float</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/grid.html\">Grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/overlayscrollbars.html\">Overlayscrollbars</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/position.html\">Position</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/spacing.html\">Spacing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/sizing.html\">Sizing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/stretched-link.html\">Stretched link</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/text-truncation.html\">Text truncation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/typography.html\">Typography</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/vertical-align.html\">Vertical align</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/visibility.html\">Visibility</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-xxl-4 pt-xxl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Icons</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/font-awesome.html\">Font awesome</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/bootstrap-icons.html\">Bootstrap icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/feather.html\">Feather</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/material-icons.html\">Material icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Maps</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/maps/google-map.html\">Google map</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/maps/leaflet-map.html\">Leaflet map</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"documentations\">Documentation</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"documentations\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1000 rounded-3 py-2\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/getting-started.html\">Getting started</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/configuration.html\">Configuration</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/styling.html\">Styling</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/dark-mode.html\">Dark mode<span class=\"badge rounded-pill ms-2 badge-soft-success\">New</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/plugin.html\">Plugin</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/gulp.html\">Gulp</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/design-file.html\">Design file</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"changelog.html\">Changelog</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<ul class=\"navbar-nav navbar-nav-icons ms-auto flex-row align-items-center\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"theme-control-toggle fa-icon-wait px-2\">
\t\t\t\t\t\t\t<input class=\"form-check-input ms-0 theme-control-toggle-input\" id=\"themeControlToggle\" type=\"checkbox\" data-theme-control=\"theme\" value=\"dark\"/><label class=\"mb-0 theme-control-toggle-label theme-control-toggle-light\" for=\"themeControlToggle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"Switch to light theme\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-sun fs-0\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"mb-0 theme-control-toggle-label theme-control-toggle-dark\" for=\"themeControlToggle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"Switch to dark theme\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-moon fs-0\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait\" href=\"../e-commerce/shopping-cart.html\">
\t\t\t\t\t\t\t<span class=\"fas fa-shopping-cart\" data-fa-transform=\"shrink-7\" style=\"font-size: 33px\"></span>
\t\t\t\t\t\t\t<span class=\"notification-indicator-number\">1</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait\" id=\"navbarDropdownNotification\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"fas fa-bell\" data-fa-transform=\"shrink-6\" style=\"font-size: 33px\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification\" aria-labelledby=\"navbarDropdownNotification\">
\t\t\t\t\t\t\t<div class=\"card card-notification shadow-none\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-header-title mb-0\">Notifications</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto ps-0 ps-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"card-link fw-normal\" href=\"#\">Mark all as read</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"scrollbar-overlay\" style=\"max-height: 19rem\">
\t\t\t\t\t\t\t\t\t<div class=\"list-group list-group-flush fw-normal fs--1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-title border-bottom\">NEW</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush notification-unread\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/1-thumb.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Emma Watson</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\treplied to your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  comment : \"Hello world 😍\"
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">💬</span>Just now</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush notification-unread\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-name rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>AB</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Albert Brooks</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\treacted to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Mia Khalifa's</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstatus
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2 fab fa-gratipay text-danger\"></span>9hr</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-title border-bottom\">EARLIER</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/icons/weather-sm.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tThe forecast today shows a low of 20&#8451; in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  California. See today's weather.
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">🌤️</span>1d</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"border-bottom-0 notification-unread notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/logos/oxford.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>University of Oxford</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tcreated an
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  event : \"Causal Inference Hilary 2019\"
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">✌️</span>1w</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"border-bottom-0 notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/10.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>James Cameron</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tinvited to join the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  group: United Nations International Children's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  Fund
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">🙋‍</span>2d</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer text-center border-top\">
\t\t\t\t\t\t\t\t\t<a class=\"card-link d-block\" href=\"notifications.html\">View all</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link pe-0\" id=\"navbarDropdownUser\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<div class=\"avatar avatar-xl\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"{{asset('back/assets/img/team/3-thumb.png')}}\" alt=\"\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-0\" aria-labelledby=\"navbarDropdownUser\">
\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1000 rounded-2 py-2\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item fw-bold text-warning\" href=\"#!\">
\t\t\t\t\t\t\t\t\t<span class=\"fas fa-crown me-1\"></span>
\t\t\t\t\t\t\t\t\t<span>Go Pro</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Set status</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages/user/profile.html\">Profile &amp; account</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Feedback</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages/user/settings.html\">Settings</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages/authentication/card/logout.html\">Logout</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<div class=\"content\">
\t\t\t\t<nav class=\"navbar navbar-light navbar-glass navbar-top navbar-expand\" style=\"display: none\">
\t\t\t\t\t<button class=\"btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarVerticalCollapse\" aria-controls=\"navbarVerticalCollapse\" aria-expanded=\"false\" aria-label=\"Toggle Navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggle-icon\">
\t\t\t\t\t\t\t<span class=\"toggle-line\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand me-1 me-sm-3\" href=\"index.html\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<img class=\"me-2\" src=\"assets/img/icons/spot-illustrations/falcon.png\" alt=\"\" width=\"40\"/><span class=\"font-sans-serif\">falcon</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"navbar-nav align-items-center d-none d-lg-block\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<div class=\"search-box\" data-list='{\"valueNames\":[\"title\"]}'>
\t\t\t\t\t\t\t\t<form class=\"position-relative\" data-bs-toggle=\"search\" data-bs-display=\"static\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control search-input fuzzy-search\" type=\"search\" placeholder=\"Recherche...\" aria-label=\"Search\"/>
\t\t\t\t\t\t\t\t\t<span class=\"fas fa-search search-box-icon\"></span>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<div class=\"btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none\" data-bs-dismiss=\"search\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-close-falcon\" aria-label=\"Close\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"scrollbar list py-3\" style=\"max-height: 24rem\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2\">
\t\t\t\t\t\t\t\t\t\t\tRecently Browsed
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item fs--1 px-card py-1 hover-primary\" href=\"../events/event-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-circle me-2 text-300 fs--2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-normal title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tPages
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-chevron-right mx-1 text-500 fs--2\" data-fa-transform=\"shrink-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\tEvents
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item fs--1 px-card py-1 hover-primary\" href=\"../e-commerce/customers.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-circle me-2 text-300 fs--2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-normal title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tE-commerce
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-chevron-right mx-1 text-500 fs--2\" data-fa-transform=\"shrink-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\tCustomers
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<hr class=\"bg-200 dark__bg-900\"/>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2\">
\t\t\t\t\t\t\t\t\t\t\tSuggested Filter
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-1 fs-0\" href=\"../e-commerce/customers.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge fw-medium text-decoration-none me-2 badge-soft-warning\">customers:</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1 fs--1 title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tAll customers list
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-1 fs-0\" href=\"../events/event-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge fw-medium text-decoration-none me-2 badge-soft-success\">events:</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1 fs--1 title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tLatest events in current month
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-1 fs-0\" href=\"../e-commerce/product/product-grid.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge fw-medium text-decoration-none me-2 badge-soft-info\">products:</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1 fs--1 title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMost popular products
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<hr class=\"bg-200 dark__bg-900\"/>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2\">
\t\t\t\t\t\t\t\t\t\t\tFiles
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-2\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-thumbnail me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"border h-100 w-100 fit-cover rounded-3\" src=\"assets/img/products/3-thumb.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 title\">iPhone</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-0 d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semi-bold\">Antony</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-medium text-600 ms-2\">27 Sep at 10:30 AM</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-2\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-thumbnail me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/icons/zip.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 title\">Falcon v1.8.2</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-0 d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semi-bold\">John</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-medium text-600 ms-2\">30 Sep at 12:30 PM</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<hr class=\"bg-200 dark__bg-900\"/>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2\">
\t\t\t\t\t\t\t\t\t\t\tMembers
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-2\" href=\"pages/user/profile.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-l status-online me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/1.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 title\">Anna Karinina</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-0 d-flex\">Technext Limited</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-2\" href=\"pages/user/profile.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-l me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/2.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 title\">Antony Hopkins</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-0 d-flex\">Brain Trust</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item px-card py-2\" href=\"pages/user/profile.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-l me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/3.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 title\">Emma Watson</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-0 d-flex\">Google</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-n3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"fallback fw-bold fs-1 d-none\">
\t\t\t\t\t\t\t\t\t\t\tNo Result Found.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"navbar-nav navbar-nav-icons ms-auto flex-row align-items-center\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t  <div class=\"theme-control-toggle fa-icon-wait px-2\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t  class=\"form-check-input ms-0 theme-control-toggle-input\"
\t\t\t\t\t\t\t  id=\"themeControlToggle\"
\t\t\t\t\t\t\t  type=\"checkbox\"
\t\t\t\t\t\t\t  data-theme-control=\"theme\"
\t\t\t\t\t\t\t  value=\"dark\"
\t\t\t\t\t\t\t/><label
\t\t\t\t\t\t\t  class=\"mb-0 theme-control-toggle-label theme-control-toggle-light\"
\t\t\t\t\t\t\t  for=\"themeControlToggle\"
\t\t\t\t\t\t\t  data-bs-toggle=\"tooltip\"
\t\t\t\t\t\t\t  data-bs-placement=\"left\"
\t\t\t\t\t\t\t  title=\"Switch to light theme\"
\t\t\t\t\t\t\t  ><span class=\"fas fa-sun fs-0\"></span></label
\t\t\t\t\t\t\t><label
\t\t\t\t\t\t\t  class=\"mb-0 theme-control-toggle-label theme-control-toggle-dark\"
\t\t\t\t\t\t\t  for=\"themeControlToggle\"
\t\t\t\t\t\t\t  data-bs-toggle=\"tooltip\"
\t\t\t\t\t\t\t  data-bs-placement=\"left\"
\t\t\t\t\t\t\t  title=\"Switch to dark theme\"
\t\t\t\t\t\t\t  ><span class=\"fas fa-moon fs-0\"></span
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t  <a
\t\t\t\t\t\t\tclass=\"nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait\"
\t\t\t\t\t\t\tid=\"navbarDropdownNotification\"
\t\t\t\t\t\t\thref=\"#\"
\t\t\t\t\t\t\trole=\"button\"
\t\t\t\t\t\t\tdata-bs-toggle=\"dropdown\"
\t\t\t\t\t\t\taria-haspopup=\"true\"
\t\t\t\t\t\t\taria-expanded=\"false\"
\t\t\t\t\t\t\t><span
\t\t\t\t\t\t\t  class=\"fas fa-bell\"
\t\t\t\t\t\t\t  data-fa-transform=\"shrink-6\"
\t\t\t\t\t\t\t  style=\"font-size: 33px\"
\t\t\t\t\t\t\t></span
\t\t\t\t\t\t  ></a>
\t\t\t\t\t\t  <div
\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification\"
\t\t\t\t\t\t\taria-labelledby=\"navbarDropdownNotification\"
\t\t\t\t\t\t  >
\t\t\t\t\t\t\t<div class=\"card card-notification shadow-none\">
\t\t\t\t\t\t\t  <div class=\"card-header\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t  class=\"row justify-content-between align-items-center\"
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t  <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t<h6 class=\"card-header-title mb-0\">Notifications</h6>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"col-auto ps-0 ps-sm-3\">
\t\t\t\t\t\t\t\t\t<a class=\"card-link fw-normal\" href=\"#\"
\t\t\t\t\t\t\t\t\t  >Mark all as read</a
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"scrollbar-overlay\" style=\"max-height: 19rem\">
\t\t\t\t\t\t\t\t<div class=\"list-group list-group-flush fw-normal fs--1\">
\t\t\t\t\t\t\t\t  <div class=\"list-group-title border-bottom\">NEW</div>
\t\t\t\t\t\t\t\t  <div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t  class=\"notification notification-flush notification-unread\"
\t\t\t\t\t\t\t\t\t  href=\"#!\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t  <img
\t\t\t\t\t\t\t\t\t\t\tclass=\"rounded-circle\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"assets/img/team/1-thumb.png\"
\t\t\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\t\t  />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t  <strong>Emma Watson</strong> replied to your
\t\t\t\t\t\t\t\t\t\t  comment : \"Hello world 😍\"
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\"
\t\t\t\t\t\t\t\t\t\t  ><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"me-2\"
\t\t\t\t\t\t\t\t\t\t\trole=\"img\"
\t\t\t\t\t\t\t\t\t\t\taria-label=\"Emoji\"
\t\t\t\t\t\t\t\t\t\t\t>💬</span
\t\t\t\t\t\t\t\t\t\t  >Just now</span
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t  class=\"notification notification-flush notification-unread\"
\t\t\t\t\t\t\t\t\t  href=\"#!\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t  <div class=\"avatar-name rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t<span>AB</span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t  <strong>Albert Brooks</strong> reacted to
\t\t\t\t\t\t\t\t\t\t  <strong>Mia Khalifa's</strong> status
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\"
\t\t\t\t\t\t\t\t\t\t  ><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"me-2 fab fa-gratipay text-danger\"
\t\t\t\t\t\t\t\t\t\t  ></span
\t\t\t\t\t\t\t\t\t\t  >9hr</span
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"list-group-title border-bottom\">
\t\t\t\t\t\t\t\t\tEARLIER
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t  <div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t  <img
\t\t\t\t\t\t\t\t\t\t\tclass=\"rounded-circle\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"assets/img/icons/weather-sm.jpg\"
\t\t\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\t\t  />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t  The forecast today shows a low of 20&#8451; in
\t\t\t\t\t\t\t\t\t\t  California. See today's weather.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\"
\t\t\t\t\t\t\t\t\t\t  ><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"me-2\"
\t\t\t\t\t\t\t\t\t\t\trole=\"img\"
\t\t\t\t\t\t\t\t\t\t\taria-label=\"Emoji\"
\t\t\t\t\t\t\t\t\t\t\t>🌤️</span
\t\t\t\t\t\t\t\t\t\t  >1d</span
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t  class=\"border-bottom-0 notification-unread notification notification-flush\"
\t\t\t\t\t\t\t\t\t  href=\"#!\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl me-3\">
\t\t\t\t\t\t\t\t\t\t  <img
\t\t\t\t\t\t\t\t\t\t\tclass=\"rounded-circle\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"assets/img/logos/oxford.png\"
\t\t\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\t\t  />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t  <strong>University of Oxford</strong> created an
\t\t\t\t\t\t\t\t\t\t  event : \"Causal Inference Hilary 2019\"
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\"
\t\t\t\t\t\t\t\t\t\t  ><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"me-2\"
\t\t\t\t\t\t\t\t\t\t\trole=\"img\"
\t\t\t\t\t\t\t\t\t\t\taria-label=\"Emoji\"
\t\t\t\t\t\t\t\t\t\t\t>✌️</span
\t\t\t\t\t\t\t\t\t\t  >1w</span
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t  class=\"border-bottom-0 notification notification-flush\"
\t\t\t\t\t\t\t\t\t  href=\"#!\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl me-3\">
\t\t\t\t\t\t\t\t\t\t  <img
\t\t\t\t\t\t\t\t\t\t\tclass=\"rounded-circle\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"assets/img/team/10.jpg\"
\t\t\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\t\t  />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t  <strong>James Cameron</strong> invited to join
\t\t\t\t\t\t\t\t\t\t  the group: United Nations International
\t\t\t\t\t\t\t\t\t\t  Children's Fund
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\"
\t\t\t\t\t\t\t\t\t\t  ><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"me-2\"
\t\t\t\t\t\t\t\t\t\t\trole=\"img\"
\t\t\t\t\t\t\t\t\t\t\taria-label=\"Emoji\"
\t\t\t\t\t\t\t\t\t\t\t>🙋‍</span
\t\t\t\t\t\t\t\t\t\t  >2d</span
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"card-footer text-center border-top\">
\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t  class=\"card-link d-block\"
\t\t\t\t\t\t\t\t  href=\"../social/notifications.html\"
\t\t\t\t\t\t\t\t  >View all</a
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t   <a class=\"nav-link pe-0\" id=\"navbarDropdownUser\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t   <div class=\"avatar avatar-xl\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"{{asset('back/assets/img/team/3-thumb.png')}}\" alt=\"\"  />
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t   </a>
\t\t\t\t\t\t   <div class=\"dropdown-menu dropdown-menu-end py-0\" aria-labelledby=\"navbarDropdownUser\">
\t\t\t\t\t\t\t\t <div class=\"bg-white dark__bg-1000 rounded-2 py-2\">
\t\t\t\t\t\t\t\t\t <a class=\"dropdown-item\" href=\"pages/authentication/card/logout.html\">Déconnecter</a>
\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t  </ul>
\t\t\t\t</nav>
\t\t\t\t<nav class=\"navbar navbar-light navbar-glass navbar-top navbar-expand-lg\" style=\"display: none\" data-move-target=\"#navbarVerticalNav\" data-navbar-top=\"combo\">
\t\t\t\t\t<button class=\"btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarVerticalCollapse\" aria-controls=\"navbarVerticalCollapse\" aria-expanded=\"false\" aria-label=\"Toggle Navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggle-icon\">
\t\t\t\t\t\t\t<span class=\"toggle-line\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand me-1 me-sm-3\" href=\"index.html\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<img class=\"me-2\" src=\"assets/img/icons/spot-illustrations/falcon.png\" alt=\"\" width=\"40\"/><span class=\"font-sans-serif\">falcon</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse navbar-collapse scrollbar\" id=\"navbarStandard\">
\t\t\t\t\t\t<ul class=\"navbar-nav\" data-top-nav-dropdowns=\"data-top-nav-dropdowns\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"dashboards\">Dashboard</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"dashboards\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1000 rounded-3 py-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"index.html\">Default</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/analytics.html\">Analytics</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/crm.html\">CRM</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/e-commerce.html\">E commerce</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/project-management.html\">Management</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"dashboard/saas.html\">SaaS</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"apps\">App</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"apps\">
\t\t\t\t\t\t\t\t\t<div class=\"card navbar-card-app shadow-none dark__bg-1000\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body scrollbar max-h-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-dropdown\" src=\"assets/img/icons/spot-illustrations/authentication-corner.png\" width=\"130\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../calendar.html\">Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../chat.html\">Chat</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../kanban.html\">Kanban</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../email/inbox.html\">Inbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../email/email-detail.html\">Email detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../email/compose.html\">Compose</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEvents
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../events/create-an-event.html\">Create an event</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../events/event-detail.html\">Event detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../events/event-list.html\">Event list</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSocial
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"feed.html\">Feed</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"activity-log.html\">Activity log</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"notifications.html\">Notifications</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"followers.html\">Followers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tE-Commerce
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/product/product-list.html\">Product list</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/product/product-grid.html\">Product grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/product/product-details.html\">Product details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/orders/order-list.html\">Order list</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/orders/order-details.html\">Order details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/customers.html\">Customers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/customer-details.html\">Customer details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/shopping-cart.html\">Shopping cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/checkout.html\">Checkout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/billing.html\">Billing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"../e-commerce/invoice.html\">Invoice</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"pagess\">Pages</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"pagess\">
\t\t\t\t\t\t\t\t\t<div class=\"card navbar-card-pages shadow-none dark__bg-1000\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body scrollbar max-h-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-dropdown\" src=\"assets/img/icons/spot-illustrations/authentication-corner.png\" width=\"130\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSimple Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/forgot-password.html\">Forgot password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/confirm-mail.html\">Confirm mail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/reset-password.html\">Reset password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/simple/lock-screen.html\">Lock screen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCard Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/forgot-password.html\">Forgot password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/confirm-mail.html\">Confirm mail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/reset-password.html\">Reset password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/card/lock-screen.html\">Lock screen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSplit Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/forgot-password.html\">Forgot password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/confirm-mail.html\">Confirm mail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/reset-password.html\">Reset password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/split/lock-screen.html\">Lock screen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOther Auth
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/authentication/wizard.html\">Wizard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"index-2.html#authentication-modal\" data-bs-toggle=\"modal\">Modal</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMiscellaneous
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/miscellaneous/associations.html\">Associations</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/miscellaneous/invite-people.html\">Invite people</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/miscellaneous/privacy-policy.html\">Privacy policy</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">User</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/user/profile.html\">Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/user/settings.html\">Settings</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPricing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/pricing/pricing-default.html\">Pricing default</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/pricing/pricing-alt.html\">Pricing alt</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tErrors
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/errors/404.html\">404</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/errors/500.html\">500</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOthers
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/starter.html\">Starter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"pages/landing.html\">Landing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"moduless\">Modules</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"moduless\">
\t\t\t\t\t\t\t\t\t<div class=\"card navbar-card-components shadow-none dark__bg-1000\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body scrollbar max-h-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-dropdown\" src=\"assets/img/icons/spot-illustrations/authentication-corner.png\" width=\"130\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tComponents
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/accordion.html\">Accordion</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/alerts.html\">Alerts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/anchor.html\">Anchor</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/animated-icons.html\">Animated icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/background.html\">Background</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/badges.html\">Badges</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/breadcrumbs.html\">Breadcrumbs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/buttons.html\">Buttons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/calendar.html\">Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/cards.html\">Cards</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/carousel/bootstrap.html\">Bootstrap carousel</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-md-4 pt-md-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/carousel/swiper.html\">Swiper</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/collapse.html\">Collapse</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/cookie-notice.html\">Cookie notice</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/countup.html\">Countup</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/draggable.html\">Draggable</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/dropdowns.html\">Dropdowns</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/list-group.html\">List group</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/modals.html\">Modals</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/navs.html\">Navs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/navbar.html\">Navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/vertical-navbar.html\">Vertical navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-xxl-4 pt-xxl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/top-navbar.html\">Top navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/combo-navbar.html\">Combo navbar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/navs-and-tabs/tabs.html\">Tabs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/offcanvas.html\">Offcanvas</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/avatar.html\">Avatar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/images.html\">Images</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/figures.html\">Figures</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/hoverbox.html\">Hoverbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pictures/lightbox.html\">Lightbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/progress-bar.html\">Progress bar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/placeholder.html\">Placeholder</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-xxl-4 pt-xxl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/pagination.html\">Pagination</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/popovers.html\">Popovers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/scrollspy.html\">Scrollspy</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/search.html\">Search</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/spinners.html\">Spinners</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/toasts.html\">Toasts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/tooltips.html\">Tooltips</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/typed-text.html\">Typed text</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/videos/embed.html\">Embed</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/components/videos/plyr.html\">Plyr</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tForms
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/form-control.html\">Form control</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/input-group.html\">Input group</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/select.html\">Select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/checks.html\">Checks</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/range.html\">Range</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/basic/layout.html\">Layout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/advance-select.html\">Advance select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/date-picker.html\">Date picker</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/editor.html\">Editor</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/emoji-button.html\">Emoji button</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/file-uploader.html\">File uploader</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/advance/rating.html\">Rating</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/floating-labels.html\">Floating labels</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/wizard.html\">Wizard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/forms/validation.html\">Validation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTables
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/tables/basic-tables.html\">Basic tables</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/tables/advance-tables.html\">Advance tables</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/tables/bulk-select.html\">Bulk select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCharts
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/chartjs.html\">Chartjs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tECharts
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/line-charts.html\">Line charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/bar-charts.html\">Bar charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/candlestick-charts.html\">Candlestick charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/geo-map.html\">Geo map</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/scatter-charts.html\">Scatter charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/pie-charts.html\">Pie charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/radar-charts.html\">Radar charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/heatmap-charts.html\">Heatmap charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/charts/echarts/how-to-use.html\">How to use</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUtilities
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/borders.html\">Borders</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/clearfix.html\">Clearfix</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/colors.html\">Colors</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/colored-links.html\">Colored links</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/display.html\">Display</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/flex.html\">Flex</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/float.html\">Float</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/grid.html\">Grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/overlayscrollbars.html\">Overlayscrollbars</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/position.html\">Position</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/spacing.html\">Spacing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/sizing.html\">Sizing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/stretched-link.html\">Stretched link</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/text-truncation.html\">Text truncation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/typography.html\">Typography</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/vertical-align.html\">Vertical align</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/utilities/visibility.html\">Visibility</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-xxl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav flex-column mt-xxl-4 pt-xxl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIcons
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/font-awesome.html\">Font awesome</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/bootstrap-icons.html\">Bootstrap icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/feather.html\">Feather</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/icons/material-icons.html\">Material icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link text-700 mb-0 fw-bold\">Maps</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/maps/google-map.html\">Google map</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-1 link-600 fw-medium\" href=\"modules/maps/leaflet-map.html\">Leaflet map</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"documentations\">Documentation</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-card border-0 mt-0\" aria-labelledby=\"documentations\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1000 rounded-3 py-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/getting-started.html\">Getting started</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/configuration.html\">Configuration</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/styling.html\">Styling</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/dark-mode.html\">Dark mode<span class=\"badge rounded-pill ms-2 badge-soft-success\">New</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/customization/plugin.html\">Plugin</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/gulp.html\">Gulp</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"documentation/design-file.html\">Design file</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item link-600 fw-medium\" href=\"changelog.html\">Changelog</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"navbar-nav navbar-nav-icons ms-auto flex-row align-items-center\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<div class=\"theme-control-toggle fa-icon-wait px-2\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input ms-0 theme-control-toggle-input\" id=\"themeControlToggle\" type=\"checkbox\" data-theme-control=\"theme\" value=\"dark\"/><label class=\"mb-0 theme-control-toggle-label theme-control-toggle-light\" for=\"themeControlToggle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"Switch to light theme\">
\t\t\t\t\t\t\t\t\t<span class=\"fas fa-sun fs-0\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"mb-0 theme-control-toggle-label theme-control-toggle-dark\" for=\"themeControlToggle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"Switch to dark theme\">
\t\t\t\t\t\t\t\t\t<span class=\"fas fa-moon fs-0\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait\" href=\"../e-commerce/shopping-cart.html\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-shopping-cart\" data-fa-transform=\"shrink-7\" style=\"font-size: 33px\"></span>
\t\t\t\t\t\t\t\t<span class=\"notification-indicator-number\">1</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait\" id=\"navbarDropdownNotification\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-bell\" data-fa-transform=\"shrink-6\" style=\"font-size: 33px\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification\" aria-labelledby=\"navbarDropdownNotification\">
\t\t\t\t\t\t\t\t<div class=\"card card-notification shadow-none\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-header-title mb-0\">Notifications</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto ps-0 ps-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"card-link fw-normal\" href=\"#\">Mark all as read</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"scrollbar-overlay\" style=\"max-height: 19rem\">
\t\t\t\t\t\t\t\t\t\t<div class=\"list-group list-group-flush fw-normal fs--1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-title border-bottom\">NEW</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush notification-unread\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/1-thumb.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Emma Watson</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treplied to your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcomment : \"Hello world 😍\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">💬</span>Just now</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush notification-unread\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-name rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>AB</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Albert Brooks</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treacted to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Mia Khalifa's</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstatus
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2 fab fa-gratipay text-danger\"></span>9hr</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-title border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\tEARLIER
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-2xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/icons/weather-sm.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tThe forecast today shows a low of 20&#8451; in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCalifornia. See today's weather.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">🌤️</span>1d</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"border-bottom-0 notification-unread notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/logos/oxford.png\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>University of Oxford</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcreated an
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tevent : \"Causal Inference Hilary 2019\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">✌️</span>1w</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"border-bottom-0 notification notification-flush\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"assets/img/team/10.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>James Cameron</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tinvited to join
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthe group: United Nations International
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChildren's Fund
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"me-2\" role=\"img\" aria-label=\"Emoji\">🙋‍</span>2d</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-footer text-center border-top\">
\t\t\t\t\t\t\t\t\t\t<a class=\"card-link d-block\" href=\"notifications.html\">View all</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link pe-0\" id=\"navbarDropdownUser\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xl\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"{{asset('back/assets/img/team/3-thumb.png')}}\" alt=\"\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-0\" aria-labelledby=\"navbarDropdownUser\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1000 rounded-2 py-2\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item fw-bold text-warning\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-crown me-1\"></span>
\t\t\t\t\t\t\t\t\t\t<span>Go Pro</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Set status</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages/user/profile.html\">Profile &amp; account</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Feedback</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages/user/settings.html\">Settings</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages/authentication/card/logout.html\">Logout</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<script>
\t\t\t\t\tvar navbarPosition = localStorage.getItem(\"navbarPosition\");
var navbarVertical = document.querySelector(\".navbar-vertical\");
var navbarTopVertical = document.querySelector(\".content .navbar-top\");
var navbarTop = document.querySelector(\"[data-layout] .navbar-top\");
var navbarTopCombo = document.querySelector('.content [data-navbar-top=\"combo\"]');
if (navbarPosition === \"top\") {
navbarTop.removeAttribute(\"style\");
navbarTopVertical.remove(navbarTopVertical);
navbarVertical.remove(navbarVertical);
navbarTopCombo.remove(navbarTopCombo);
} else if (navbarPosition === \"combo\") {
navbarVertical.removeAttribute(\"style\");
navbarTopCombo.removeAttribute(\"style\");
navbarTop.remove(navbarTop);
navbarTopVertical.remove(navbarTopVertical);
} else {
navbarVertical.removeAttribute(\"style\");
navbarTopVertical.removeAttribute(\"style\");
navbarTop.remove(navbarTop);
navbarTopCombo.remove(navbarTopCombo);
}
\t\t\t\t</script>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header bg-light\">
\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\" id=\"followers\">
\t\t\t\t\t\t\t\t\tListe des utilisateurs
\t\t\t\t\t\t\t\t\t<span class=\"d-none d-sm-inline-block\">(233)</span>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher...\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col d-md-block d-none\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-select form-select-sm ms-2\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\">Tous utlisateurs</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Admins</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Invistesseur</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Entrepreneur</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body bg-light px-1 py-0\">
\t\t\t\t\t\t<div class=\"row g-0 text-center fs--1\">
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"{{asset('back/assets/img/team/joseph.png')}}\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:green\">
\t\t\t\t\t\t\t\t\t\tActif
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"{{asset('back/assets/img/team/joseph.png')}}\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:red\">
\t\t\t\t\t\t\t\t\t\tBloqué
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"{{asset('back/assets/img/team/joseph.png')}}\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:green\">
\t\t\t\t\t\t\t\t\t\tActif
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"{{asset('back/assets/img/team/joseph.png')}}\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:green\">
\t\t\t\t\t\t\t\t\t\tActif
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"{{asset('back/assets/img/team/joseph.png')}}\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:red\">
\t\t\t\t\t\t\t\t\t\tBloqué
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"{{asset('back/assets/img/team/joseph.png')}}\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:red\">
\t\t\t\t\t\t\t\t\t\tBloqué
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"{{asset('back/assets/img/team/joseph.png')}}\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:red\">
\t\t\t\t\t\t\t\t\t\tBloqué
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"{{asset('back/assets/img/team/joseph.png')}}\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:green\">
\t\t\t\t\t\t\t\t\t\tActif
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-md-4 col-lg-3 col-xxl-2 mb-1\">
\t\t\t\t\t\t\t\t<div class=\"bg-white dark__bg-1100 p-3 h-100\">
\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\"><img class=\"img-thumbnail img-fluid rounded-circle mb-3 shadow-sm\" src=\"{{asset('back/assets/img/team/joseph.png')}}\" alt=\"\" width=\"100\"/></a>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile1.html\">Guetat youssef</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"fs--2 mb-1\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-700\" href=\"#!\">Admin</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\" style=\"color:green\">
\t\t\t\t\t\t\t\t\t\tActif
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t<div class=\"row g-0 justify-content-between fs--1 mt-4 mb-3\">
\t\t\t\t\t\t<div class=\"col-12 col-sm-auto text-center\">
\t\t\t\t\t\t\t<p class=\"mb-0 text-600\">
\t\t\t\t\t\t\t\tThank you for creating with Falcon
\t\t\t\t\t\t\t\t<span class=\"d-none d-sm-inline-block\">|
\t\t\t\t\t\t\t\t</span><br class=\"d-sm-none\"/>
\t\t\t\t\t\t\t\t2021 &copy;
\t\t\t\t\t\t\t\t<a href=\"https://themewagon.com/\">Themewagon</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-sm-auto text-center\">
\t\t\t\t\t\t\t<p class=\"mb-0 text-600\">v3.3.0</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</div>
\t\t\t<div class=\"modal fade\" id=\"authentication-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"authentication-modal-label\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog mt-6\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content border-0\">
\t\t\t\t\t\t<div class=\"modal-header px-5 position-relative modal-shape-header bg-shape\">
\t\t\t\t\t\t\t<div class=\"position-relative z-index-1 light\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-0 text-white\" id=\"authentication-modal-label\">
\t\t\t\t\t\t\t\t\tAjouter un admin
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body py-4 px-5\">
\t\t\t\t\t\t\t<form>
\t\t\t  <div class=\"row gx-2\">
\t\t\t\t\t\t\t\t<div class=\"mb-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"modal-auth-name\">Nom</label><input class=\"form-control\" type=\"text\" autocomplete=\"on\" id=\"modal-auth-name\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t  <div class=\"mb-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"modal-auth-name\">Prénom</label><input class=\"form-control\" type=\"text\" autocomplete=\"on\" id=\"modal-auth-name\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"modal-auth-email\">Addresse E-mail</label><input class=\"form-control\" type=\"email\" autocomplete=\"on\" id=\"modal-auth-email\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row gx-2\">
\t\t\t\t\t\t\t\t\t<div class=\"mb-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"modal-auth-password\">Mot de passe</label><input class=\"form-control\" type=\"password\" autocomplete=\"on\" id=\"modal-auth-password\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"modal-auth-confirm-password\">Confirmer Mot de passe</label><input class=\"form-control\" type=\"password\" autocomplete=\"on\" id=\"modal-auth-confirm-password\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary d-block w-100 mt-3\" type=\"submit\" name=\"submit\">
\t\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
\t<!-- ===============================================-->
\t<!--    End of Main Content-->
\t<!-- ===============================================-->

\t\t<div class=\"offcanvas offcanvas-end settings-panel border-0\" id=\"settings-offcanvas\" tabindex=\"-1\" aria-labelledby=\"settings-offcanvas\"> <div class=\"offcanvas-header settings-panel-header bg-shape\">
\t\t\t<div class=\"z-index-1 py-1 light\">
\t\t\t\t<h5 class=\"text-white\">
\t\t\t\t\t<span class=\"fas fa-palette me-2 fs-0\"></span>Settings
\t\t\t\t</h5>
\t\t\t\t<p class=\"mb-0 fs--1 text-white opacity-75\">
\t\t\t\t\tSet your own customized style
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<button class=\"btn-close btn-close-white z-index-1 mt-0\" type=\"button\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t\t</div>
\t\t<div class=\"offcanvas-body scrollbar-overlay px-card\" id=\"themeController\">
\t\t\t<h5 class=\"fs-0\">Color Scheme</h5>
\t\t\t<p class=\"fs--1\">Choose the perfect color mode for your app.</p>
\t\t\t<div class=\"btn-group d-block w-100 btn-group-navbar-style\">
\t\t\t\t<div class=\"row gx-2\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<input class=\"btn-check\" id=\"themeSwitcherLight\" name=\"theme-color\" type=\"radio\" value=\"light\" data-theme-control=\"theme\"/><label class=\"btn d-inline-block btn-navbar-style fs--1\" for=\"themeSwitcherLight\">
\t\t\t\t\t\t\t<span class=\"hover-overlay mb-2 rounded d-block\"><img class=\"img-fluid img-prototype mb-0\" src=\"assets/img/generic/falcon-mode-default.jpg\" alt=\"\"/></span>
\t\t\t\t\t\t\t<span class=\"label-text\">Light</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<input class=\"btn-check\" id=\"themeSwitcherDark\" name=\"theme-color\" type=\"radio\" value=\"dark\" data-theme-control=\"theme\"/><label class=\"btn d-inline-block btn-navbar-style fs--1\" for=\"themeSwitcherDark\">
\t\t\t\t\t\t\t<span class=\"hover-overlay mb-2 rounded d-block\"><img class=\"img-fluid img-prototype mb-0\" src=\"assets/img/generic/falcon-mode-dark.jpg\" alt=\"\"/></span>
\t\t\t\t\t\t\t<span class=\"label-text\">
\t\t\t\t\t\t\t\tDark</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr/>
\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t<img class=\"me-2\" src=\"assets/img/icons/left-arrow-from-left.svg\" width=\"20\" alt=\"\"/>
\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t<h5 class=\"fs-0\">RTL Mode</h5>
\t\t\t\t\t\t<p class=\"fs--1 mb-0\">Switch your language direction</p>
\t\t\t\t\t\t<a class=\"fs--1\" href=\"documentation/customization/configuration.html\">RTL Documentation</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t<input class=\"form-check-input ms-0\" id=\"mode-rtl\" type=\"checkbox\" data-theme-control=\"isRTL\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr/>
\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t<img class=\"me-2\" src=\"assets/img/icons/arrows-h.svg\" width=\"20\" alt=\"\"/>
\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t<h5 class=\"fs-0\">Fluid Layout</h5>
\t\t\t\t\t\t<p class=\"fs--1 mb-0\">Toggle container layout system</p>
\t\t\t\t\t\t<a class=\"fs--1\" href=\"documentation/customization/configuration.html\">Fluid Documentation</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t<input class=\"form-check-input ms-0\" id=\"mode-fluid\" type=\"checkbox\" data-theme-control=\"isFluid\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr/>
\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t<img class=\"me-2\" src=\"assets/img/icons/paragraph.svg\" width=\"20\" alt=\"\"/>
\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t<h5 class=\"fs-0 d-flex align-items-center\">Navigation Position</h5>
\t\t\t\t\t<p class=\"fs--1 mb-2\">
\t\t\t\t\t\tSelect a suitable navigation system for your web application
\t\t\t\t\t</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" id=\"option-navbar-vertical\" type=\"radio\" name=\"navbar\" value=\"vertical\" data-theme-control=\"navbarPosition\"/><label class=\"form-check-label\" for=\"option-navbar-vertical\">Vertical</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" id=\"option-navbar-top\" type=\"radio\" name=\"navbar\" value=\"top\" data-theme-control=\"navbarPosition\"/><label class=\"form-check-label\" for=\"option-navbar-top\">Top</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-check form-check-inline me-0\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" id=\"option-navbar-combo\" type=\"radio\" name=\"navbar\" value=\"combo\" data-theme-control=\"navbarPosition\"/><label class=\"form-check-label\" for=\"option-navbar-combo\">Combo</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr/>
\t\t\t<h5 class=\"fs-0 d-flex align-items-center\">Vertical Navbar Style</h5>
\t\t\t<p class=\"fs--1 mb-0\">Switch between styles for your vertical navbar</p>
\t\t\t<p>
\t\t\t\t<a class=\"fs--1\" href=\"modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles\">See Documentation</a>
\t\t\t</p>
\t\t\t<div class=\"btn-group d-block w-100 btn-group-navbar-style\">
\t\t\t\t<div class=\"row gx-2\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<input class=\"btn-check\" id=\"navbar-style-transparent\" type=\"radio\" name=\"navbarStyle\" value=\"transparent\" data-theme-control=\"navbarStyle\"/><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-transparent\">
\t\t\t\t\t\t\t<img class=\"img-fluid img-prototype\" src=\"assets/img/generic/default.png\" alt=\"\"/><span class=\"label-text\">
\t\t\t\t\t\t\t\tTransparent</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<input class=\"btn-check\" id=\"navbar-style-inverted\" type=\"radio\" name=\"navbarStyle\" value=\"inverted\" data-theme-control=\"navbarStyle\"/><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-inverted\">
\t\t\t\t\t\t\t<img class=\"img-fluid img-prototype\" src=\"assets/img/generic/inverted.png\" alt=\"\"/><span class=\"label-text\">
\t\t\t\t\t\t\t\tInverted</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<input class=\"btn-check\" id=\"navbar-style-card\" type=\"radio\" name=\"navbarStyle\" value=\"card\" data-theme-control=\"navbarStyle\"/><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-card\">
\t\t\t\t\t\t\t<img class=\"img-fluid img-prototype\" src=\"assets/img/generic/card.png\" alt=\"\"/><span class=\"label-text\">
\t\t\t\t\t\t\t\tCard</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<input class=\"btn-check\" id=\"navbar-style-vibrant\" type=\"radio\" name=\"navbarStyle\" value=\"vibrant\" data-theme-control=\"navbarStyle\"/><label class=\"btn d-block w-100 btn-navbar-style fs--1\" for=\"navbar-style-vibrant\">
\t\t\t\t\t\t\t<img class=\"img-fluid img-prototype\" src=\"assets/img/generic/vibrant.png\" alt=\"\"/><span class=\"label-text\">
\t\t\t\t\t\t\t\tVibrant</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"text-center mt-5\">
\t\t\t\t<img class=\"mb-4\" src=\"assets/img/icons/spot-illustrations/47.png\" alt=\"\" width=\"120\"/>
\t\t\t\t<h5>Like What You See?</h5>
\t\t\t\t<p class=\"fs--1\">
\t\t\t\t\tGet Falcon now and create beautiful dashboards with hundreds of
\t\t\t\t\t\t\t\twidgets.
\t\t\t\t</p>
\t\t\t\t<a class=\"mb-3 btn btn-primary\" href=\"https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/\" target=\"_blank\">Purchase</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<a class=\"card setting-toggle\" href=\"#settings-offcanvas\" data-bs-toggle=\"offcanvas\">
\t\t<div class=\"card-body d-flex align-items-center py-md-2 px-2 py-1\">
\t\t\t<div class=\"bg-soft-primary position-relative rounded-start\" style=\"height: 34px; width: 28px\">
\t\t\t\t<div class=\"settings-popover\">
\t\t\t\t\t<span class=\"ripple\">
\t\t\t\t\t\t<span class=\"fa-spin position-absolute all-0 d-flex flex-center\">
\t\t\t\t\t\t\t<span class=\"icon-spin position-absolute all-0 d-flex flex-center\">
\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewbox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z\" fill=\"#2A7BE4\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<small class=\"text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end\">customize</small>
\t\t</div>
\t</a>
{%endblock%}
", "back/GestionUtilisateur/followers.html.twig", "C:\\Users\\Dell\\Desktop\\pidev\\templates\\back\\GestionUtilisateur\\followers.html.twig");
    }
}
