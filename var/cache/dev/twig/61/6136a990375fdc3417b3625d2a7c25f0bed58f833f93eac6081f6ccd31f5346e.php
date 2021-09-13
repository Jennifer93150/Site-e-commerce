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

/* cart/index.html.twig */
class __TwigTemplate_e68e78c43fdf3f4996efc42a9b2e10f3d6b0c2e89adee03699727af4464a1d6f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Votre panier";
        
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
        echo "    <div class=\"container\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-success\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        <div class=\"p-3\">
            <h1>Votre panier</h1>
        </div>
       <div class=\"tableau\">
        <table class=\"table\" max-width=\"\" width=\"100%\">
        <thead>
            <tr>
                <th>Produit</th>
                <th></th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <!-- Je declare à twig une nouvelle variable \"total\" qui sera incrémenter à chaque entrée dans la boucle -->
            ";
        // line 29
        $context["total"] = null;
        // line 30
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 31
            echo "                <tr>
                    <td>
                        <img src=\"/uploads/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 33), "illustration", [], "any", false, false, false, 33), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "\" height=\"75px\">
                    </td>
                    <td class=\"\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td class=\"\">";
            // line 36
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 36), "price", [], "any", false, false, false, 36) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
                    <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn btn-add\">
                            <i class=\"bi bi-cart-plus\">+</i>
                        </a>
                        ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 40), "html", null, true);
            echo "
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-decrease\">
                            <i class=\"bi bi-cart-dash\">-</i>
                        </a>
                    </td>
                    <td class=\"\">";
            // line 45
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 45) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 45), "price", [], "any", false, false, false, 45)) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
                    <td>
                        
                        
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-delete\">
                            <i class=\"bi bi-cart-x\">x</i>
                        </a>
                    </td>
                </tr>
                ";
            // line 54
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 54, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 54) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 54), "price", [], "any", false, false, false, 54)));
            // line 55
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                <tr>
                    <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"3\">
                    <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_cart");
        echo "\" class=\"btn btn-danger\"><i class=\"bi bi-cart-x\"></i>Vider le panier</a>
                </td>
            </tr>
            <tr>
                <td colspan=\"3\">Total</td>
                <td class=\"text-end\"> ";
        // line 69
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 69, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo "€</td>
            </tr>
        </tfoot>
        </table>
       </div>
        
        <div class=\"text-end\">
            <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "\" class=\"btn form-button\">Valider mon panier</a>
        </div>
    </div>
   


    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 76,  215 => 69,  207 => 64,  201 => 60,  192 => 56,  187 => 55,  185 => 54,  177 => 49,  170 => 45,  163 => 41,  159 => 40,  153 => 37,  149 => 36,  145 => 35,  138 => 33,  134 => 31,  128 => 30,  126 => 29,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre panier{% endblock %}

{% block body %}
    <div class=\"container\">
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
        <div class=\"p-3\">
            <h1>Votre panier</h1>
        </div>
       <div class=\"tableau\">
        <table class=\"table\" max-width=\"\" width=\"100%\">
        <thead>
            <tr>
                <th>Produit</th>
                <th></th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <!-- Je declare à twig une nouvelle variable \"total\" qui sera incrémenter à chaque entrée dans la boucle -->
            {% set total = null %}
            {% for element in cart %}
                <tr>
                    <td>
                        <img src=\"/uploads/{{ element.product.illustration}}\" alt=\"{{ element.product.name }}\" height=\"75px\">
                    </td>
                    <td class=\"\">{{ element.product.name }}</td>
                    <td class=\"\">{{ (element.product.price / 100) |number_format(2,',','.') }} €</td>
                    <td><a href=\"{{path(\"add_to_cart\", {id: element.product.id})}}\" class=\"btn btn-add\">
                            <i class=\"bi bi-cart-plus\">+</i>
                        </a>
                        {{ element.quantity }}
                        <a href=\"{{path(\"decrease\", {id: element.product.id})}}\" class=\"btn btn-decrease\">
                            <i class=\"bi bi-cart-dash\">-</i>
                        </a>
                    </td>
                    <td class=\"\">{{ (element.quantity * element.product.price / 100) |number_format(2,',','.') }} €</td>
                    <td>
                        
                        
                        <a href=\"{{path(\"delete\", {id: element.product.id})}}\" class=\"btn btn-danger btn-delete\">
                            <i class=\"bi bi-cart-x\">x</i>
                        </a>
                    </td>
                </tr>
                {% set total = total + (element.quantity * element.product.price) %}
            {% else %}
                <tr>
                    <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
                </tr>
            {% endfor %}
        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"3\">
                    <a href=\"{{path(\"remove_cart\")}}\" class=\"btn btn-danger\"><i class=\"bi bi-cart-x\"></i>Vider le panier</a>
                </td>
            </tr>
            <tr>
                <td colspan=\"3\">Total</td>
                <td class=\"text-end\"> {{ (total / 100) |number_format(2,',','.')}}€</td>
            </tr>
        </tfoot>
        </table>
       </div>
        
        <div class=\"text-end\">
            <a href=\"{{path(\"order\")}}\" class=\"btn form-button\">Valider mon panier</a>
        </div>
    </div>
   


    
{% endblock %}", "cart/index.html.twig", "/Applications/MAMP/htdocs/KOABABI/Koababi/templates/cart/index.html.twig");
    }
}
