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

/* _nav.html.twig */
class __TwigTemplate_8f63dd65e37bc20837aff676d995da4eeba75028f8243c01e95a04688783003f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        // line 1
        echo "<div>
    <nav class=\"navbar navbar-expand-lg navbar-light mb-5 pt-4 fs-3\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand fs-1\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Koababi</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-link active link-nav fs-3\" aria-current=\"page\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">Collection</a>
                ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "                <a class=\"nav-link link-nav\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\"><i class=\"fas fa-tasks\"></i></a>
                ";
        }
        // line 14
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 15
            echo "                <a class=\"nav-link link-nav fs-3\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\"><i class=\"fas fa-user\"></i></a>
                 ";
        } else {
            // line 17
            echo "                <a class=\"nav-link link-nav fs-3\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                 ";
        }
        // line 19
        echo "                 <a class=\"nav-link link-nav fs-3\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\"><i class=\"fas fa-shopping-cart\"></i></a>
            </div>
            </div>
        </div>
    </nav>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  78 => 17,  72 => 15,  69 => 14,  63 => 12,  61 => 11,  57 => 10,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <nav class=\"navbar navbar-expand-lg navbar-light mb-5 pt-4 fs-3\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand fs-1\" href=\"{{path('home')}}\">Koababi</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-link active link-nav fs-3\" aria-current=\"page\" href=\"{{path('products')}}\">Collection</a>
                {% if is_granted('ROLE_ADMIN') %}
                <a class=\"nav-link link-nav\" href=\"{{path('admin')}}\"><i class=\"fas fa-tasks\"></i></a>
                {% endif %}
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <a class=\"nav-link link-nav fs-3\" href=\"{{path('account')}}\"><i class=\"fas fa-user\"></i></a>
                 {% else %}
                <a class=\"nav-link link-nav fs-3\" href=\"{{path('app_login')}}\">Connexion</a>
                 {% endif %}
                 <a class=\"nav-link link-nav fs-3\" href=\"{{path('cart')}}\"><i class=\"fas fa-shopping-cart\"></i></a>
            </div>
            </div>
        </div>
    </nav>
</div>", "_nav.html.twig", "/Applications/MAMP/htdocs/KOABABI/Koababi/templates/_nav.html.twig");
    }
}
