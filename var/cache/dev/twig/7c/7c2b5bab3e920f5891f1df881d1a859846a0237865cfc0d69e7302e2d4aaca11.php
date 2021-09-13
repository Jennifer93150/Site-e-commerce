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

/* order/add.html.twig */
class __TwigTemplate_de3a8bfbdb57f7c9a1999e32ad65d9b809a73587b4ec720814604223b3c5d92e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Koababi | Vérification de ma commande ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <h1>Verifiez vos informations avant de passer au paiement</h1>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">

            <h4>Mon adresse de livraison <br/></h4>
            <div class=\"form-check\">
                ";
        // line 14
        echo twig_replace_filter((isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 14, $this->source); })()), ["[br]" => "<br>"]);
        echo "
            </div>
            <hr>
            <h4>Mon transporteur</h4>
            <div class=\"form-check\">
                
                <h5>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</h5>
                <small>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        echo "</small>
                <p>";
        // line 22
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 22, $this->source); })()), "price", [], "any", false, false, false, 22) / 100), 2, ",", "."), "html", null, true);
        echo "€</p>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <h4>Ma commande</h4>
            </div>
            <div class=\"\">
                 <!-- Je declare à twig une nouvelle variable \"total\" qui sera incrémenter à chaque entrée dans la boucle -->
                ";
        // line 31
        $context["total"] = null;
        // line 32
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 33
            echo "                <!-- boucle pour afficher le recap des produits
                key > 0 = Si il ya + que 1 produit (key=l'emplacement du produit ds array) alors met une margin -->
                <div class=\"row ";
            // line 35
            if ((1 === twig_compare($context["key"], 0))) {
                echo "mt-2";
            }
            echo "\">
                    <div class=\"col-4 my-auto\">
                        <img src=\"/uploads/";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 37), "illustration", [], "any", false, false, false, 37), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "\" height=\"75px\">
                    </div>
                    <div class=\"col-6 my-auto\">
                        ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
            echo "
                    </div>
                    <div class=\"col-2 my-auto\"> x ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42), "html", null, true);
            echo "
                    </div>
                    <div class=\"col-2 my-auto\"> ";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 44) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "price", [], "any", false, false, false, 44)) / 100), 2, ",", "."), "html", null, true);
            echo " €
                    </div>
                </div>
                ";
            // line 47
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 47, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 47) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 47), "price", [], "any", false, false, false, 47)));
            // line 48
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </div>
            <div>
                <hr>
                <strong>Sous-total :</strong> ";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €
                <strong>Livraison :</strong> ";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 53, $this->source); })()), "price", [], "any", false, false, false, 53) / 100), 2, ",", "."), "html", null, true);
        echo " €
                <hr>
                <strong>Total :</strong>  ";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 55, $this->source); })()), "price", [], "any", false, false, false, 55) / 100) + ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 55, $this->source); })()) / 100)), 2, ",", "."), "html", null, true);
        echo " €

            </div>
        </div>
        <div class=\"container\">
            <a id=\"checkout-button\" class=\"btn form-button mt-3\">Payer ";
        // line 60
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 60, $this->source); })()), "price", [], "any", false, false, false, 60) / 100) + ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 60, $this->source); })()) / 100)), 2, ",", "."), "html", null, true);
        echo " €</a>
        </div>
        
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 68
        echo "<!-- FONCTION JS POUR STRIPE -->
<script src=\"https://js.stripe.com/v3/\"></script>
<script type=\"text/javascript\">

    var stripe = Stripe(\"pk_test_51JVFJfLAcmw2xXj9IAgGOGgJfaUEqYiQ0ScVZCcIN3XMGfmgkbacZO5q2G2MaI8NyaQapiQHYG69Q4eZGzZKKOYL00O4AW7kef\");
    var checkoutButton = document.getElementById(\"checkout-button\");
    checkoutButton.addEventListener(\"click\", function (){
            fetch(\"/compte/commande/create-session/";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "\", {
                method: \"POST\",
            })
            .then(function (response){
                return response.json();
            })
            .then(function (session){
                // Si erreur = à order
                if( session.error == 'order'){
                    // Alors redirection vers la selection de l'adresse de livraison et transporteur
                    window.location.replace('";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "');
                }else{// Sinon renvoi vers le paiement
                    return stripe.redirectToCheckout({sessionId: session.id});
                }
                
            })
            .then(function (result){
                if(result.error){
                    alert(result.error.message);
                }
            })
            .catch(function (error) {
                console.error(\"Error:\", error);
            });
    });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 85,  235 => 75,  226 => 68,  216 => 67,  200 => 60,  192 => 55,  187 => 53,  183 => 52,  178 => 49,  172 => 48,  170 => 47,  164 => 44,  159 => 42,  154 => 40,  146 => 37,  139 => 35,  135 => 33,  130 => 32,  128 => 31,  116 => 22,  112 => 21,  108 => 20,  99 => 14,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Koababi | Vérification de ma commande {% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Verifiez vos informations avant de passer au paiement</h1>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">

            <h4>Mon adresse de livraison <br/></h4>
            <div class=\"form-check\">
                {{ delivery|replace({'[br]':'<br>'})|raw }}
            </div>
            <hr>
            <h4>Mon transporteur</h4>
            <div class=\"form-check\">
                
                <h5>{{carrier.name}}</h5>
                <small>{{carrier.description}}</small>
                <p>{{(carrier.price / 100) |number_format(2,',','.')}}€</p>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <h4>Ma commande</h4>
            </div>
            <div class=\"\">
                 <!-- Je declare à twig une nouvelle variable \"total\" qui sera incrémenter à chaque entrée dans la boucle -->
                {% set total = null %}
                {% for key,product in cart %}
                <!-- boucle pour afficher le recap des produits
                key > 0 = Si il ya + que 1 produit (key=l'emplacement du produit ds array) alors met une margin -->
                <div class=\"row {% if key > 0 %}mt-2{% endif %}\">
                    <div class=\"col-4 my-auto\">
                        <img src=\"/uploads/{{ product.product.illustration}}\" alt=\"{{ product.product.name }}\" height=\"75px\">
                    </div>
                    <div class=\"col-6 my-auto\">
                        {{ product.product.name}}
                    </div>
                    <div class=\"col-2 my-auto\"> x {{ product.quantity}}
                    </div>
                    <div class=\"col-2 my-auto\"> {{ (product.quantity * product.product.price / 100) |number_format(2,',','.') }} €
                    </div>
                </div>
                {% set total = total + (product.quantity * product.product.price) %}
                {% endfor %}
            </div>
            <div>
                <hr>
                <strong>Sous-total :</strong> {{ (total / 100) |number_format(2,',','.')}} €
                <strong>Livraison :</strong> {{ (carrier.price / 100) |number_format(2,',','.')}} €
                <hr>
                <strong>Total :</strong>  {{ ((carrier.price / 100) + (total / 100)) |number_format(2,',','.')}} €

            </div>
        </div>
        <div class=\"container\">
            <a id=\"checkout-button\" class=\"btn form-button mt-3\">Payer {{ ((carrier.price / 100) + (total / 100)) |number_format(2,',','.')}} €</a>
        </div>
        
    </div>
</div>
{% endblock %}

{% block javascript %}
<!-- FONCTION JS POUR STRIPE -->
<script src=\"https://js.stripe.com/v3/\"></script>
<script type=\"text/javascript\">

    var stripe = Stripe(\"pk_test_51JVFJfLAcmw2xXj9IAgGOGgJfaUEqYiQ0ScVZCcIN3XMGfmgkbacZO5q2G2MaI8NyaQapiQHYG69Q4eZGzZKKOYL00O4AW7kef\");
    var checkoutButton = document.getElementById(\"checkout-button\");
    checkoutButton.addEventListener(\"click\", function (){
            fetch(\"/compte/commande/create-session/{{ reference }}\", {
                method: \"POST\",
            })
            .then(function (response){
                return response.json();
            })
            .then(function (session){
                // Si erreur = à order
                if( session.error == 'order'){
                    // Alors redirection vers la selection de l'adresse de livraison et transporteur
                    window.location.replace('{{path('order')}}');
                }else{// Sinon renvoi vers le paiement
                    return stripe.redirectToCheckout({sessionId: session.id});
                }
                
            })
            .then(function (result){
                if(result.error){
                    alert(result.error.message);
                }
            })
            .catch(function (error) {
                console.error(\"Error:\", error);
            });
    });
    </script>
{% endblock %}
", "order/add.html.twig", "/Applications/MAMP/htdocs/KOABABI/Koababi/templates/order/add.html.twig");
    }
}
