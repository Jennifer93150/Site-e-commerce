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

/* home/index.html.twig */
class __TwigTemplate_34eec068dbe58017dfc53a9c55f4e1371753012364b0f9dd31bb75dfd2b76c36 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "       
 ";
        // line 5
        $this->loadTemplate("home/_header.html.twig", "home/index.html.twig", 5)->display($context);
        // line 6
        echo " 
<div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active text-center row\">
      <img class=\"img-carousel col-md-3 m-5\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/body1.jpeg"), "html", null, true);
        echo "\"  alt=\"Photo article body\">
      <img class=\"img-carousel col-md-3 m-5\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/body2.jpeg"), "html", null, true);
        echo "\"  alt=\"Photo article body\">
      <img class=\"img-carousel col-md-3 m-5\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/tshirt3.jpeg"), "html", null, true);
        echo "\"  alt=\"Photo article t-shirt\">
    </div>
    <div class=\"carousel-item text-center carousel2\">
      <img class=\"img-carousel col-md-3 m-5\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/shoes1.jpeg"), "html", null, true);
        echo "\"  alt=\"Photo article chaussure\">
      <img class=\"img-carousel col-md-3 m-5\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/shoes2.jpeg"), "html", null, true);
        echo "\"  alt=\"Photo article chaussure\">
      <img class=\"img-carousel col-md-3 m-5\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/shoes3.jpeg"), "html", null, true);
        echo "\"  alt=\"Photo article chaussure\">
      
    </div>
    
  </div>
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>


<div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img class=\"img-carousel col-md-3\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/body1.jpeg"), "html", null, true);
        echo "\"  alt=\"Photo article body\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"img-carousel col-md-3\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/body2.jpeg"), "html", null, true);
        echo "\"  alt=\"Photo article body\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"img-carousel col-md-3\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/tshirt3.jpeg"), "html", null, true);
        echo "\"  alt=\"Photo article t-shirt\">
    </div>
  </div>
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 42,  129 => 39,  123 => 36,  101 => 17,  97 => 16,  93 => 15,  87 => 12,  83 => 11,  79 => 10,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
       
 {% include 'home/_header.html.twig' %}
 
<div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active text-center row\">
      <img class=\"img-carousel col-md-3 m-5\" src=\"{{ asset('assets/image/body1.jpeg') }}\"  alt=\"Photo article body\">
      <img class=\"img-carousel col-md-3 m-5\" src=\"{{ asset('assets/image/body2.jpeg') }}\"  alt=\"Photo article body\">
      <img class=\"img-carousel col-md-3 m-5\" src=\"{{ asset('assets/image/tshirt3.jpeg') }}\"  alt=\"Photo article t-shirt\">
    </div>
    <div class=\"carousel-item text-center carousel2\">
      <img class=\"img-carousel col-md-3 m-5\" src=\"{{ asset('assets/image/shoes1.jpeg') }}\"  alt=\"Photo article chaussure\">
      <img class=\"img-carousel col-md-3 m-5\" src=\"{{ asset('assets/image/shoes2.jpeg') }}\"  alt=\"Photo article chaussure\">
      <img class=\"img-carousel col-md-3 m-5\" src=\"{{ asset('assets/image/shoes3.jpeg') }}\"  alt=\"Photo article chaussure\">
      
    </div>
    
  </div>
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>


<div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img class=\"img-carousel col-md-3\" src=\"{{ asset('assets/image/body1.jpeg') }}\"  alt=\"Photo article body\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"img-carousel col-md-3\" src=\"{{ asset('assets/image/body2.jpeg') }}\"  alt=\"Photo article body\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"img-carousel col-md-3\" src=\"{{ asset('assets/image/tshirt3.jpeg') }}\"  alt=\"Photo article t-shirt\">
    </div>
  </div>
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>
{% endblock %}", "home/index.html.twig", "/Applications/MAMP/htdocs/KOABABI/Koababi/templates/home/index.html.twig");
    }
}
