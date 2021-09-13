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

/* account_order/show.html.twig */
class __TwigTemplate_c52c71e3e8039ed5b7ef68cb86e7e3a1ea901bdd701b734c420d3893725d1ea8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account_order/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account_order/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account_order/show.html.twig", 1);
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

        echo "Koababi | Ma commande";
        
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
    <h1 class=\"my-4\">Ma commande </h1>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order");
        echo "\"><strong><- Retour</strong></a>
    ";
        // line 9
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })())), 0))) {
            // line 10
            echo "     <p>Vous n'avez pas encore passé de commande sur notre site.
     ";
        } else {
            // line 12
            echo "     <div class=\"row my-4\">
        <div class=\"mb-4\">
            <div class=\"bg-light p-3\">
                <h3>Informations sur la commande</h3>
                <strong>Date : </strong>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "createdAt", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
            echo "<br/>
                <strong>Réference :</strong> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "reference", [], "any", false, false, false, 17), "html", null, true);
            echo "<br/>
                <strong>Transporteur: </strong>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "carrierName", [], "any", false, false, false, 18), "html", null, true);
            echo "
            </div>
            
        
            <h3 class=\"mt-4\">Détail de la commande</h3>
                <table class=\"table\">
                    <thead>
                        <tr>
                        <th scope=\"col\">Produit</th>
                        <th scope=\"col\">Quantité</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 33, $this->source); })()), "orderDetails", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 34
                echo "                            <tr>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37) / 100), 2, ",", "."), "html", null, true);
                echo "€</td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 38) / 100), 2, ",", "."), "html", null, true);
                echo "€</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                    </tbody>
                </table>
                <div>
                    <p>Sous-total : ";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 44, $this->source); })()), "total", [], "any", false, false, false, 44) / 100), 2, ",", "."), "html", null, true);
            echo "€</p>
                    <p>Livraison : ";
            // line 45
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 45, $this->source); })()), "carrierPrice", [], "any", false, false, false, 45) / 100), 2, ",", "."), "html", null, true);
            echo "€</p>
                    <p>Total : ";
            // line 46
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "carrierPrice", [], "any", false, false, false, 46) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "total", [], "any", false, false, false, 46)) / 100), 2, ",", "."), "html", null, true);
            echo "€</p>
                </div>
                
        </div>
     </div>
        
    ";
        }
        // line 53
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account_order/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 53,  175 => 46,  171 => 45,  167 => 44,  162 => 41,  153 => 38,  149 => 37,  145 => 36,  141 => 35,  138 => 34,  134 => 33,  116 => 18,  112 => 17,  108 => 16,  102 => 12,  98 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Koababi | Ma commande{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"my-4\">Ma commande </h1>
    <a href=\"{{path('account_order')}}\"><strong><- Retour</strong></a>
    {% if order|length == 0 %}
     <p>Vous n'avez pas encore passé de commande sur notre site.
     {% else %}
     <div class=\"row my-4\">
        <div class=\"mb-4\">
            <div class=\"bg-light p-3\">
                <h3>Informations sur la commande</h3>
                <strong>Date : </strong>{{order.createdAt| date('d/m/Y')}}<br/>
                <strong>Réference :</strong> {{order.reference}}<br/>
                <strong>Transporteur: </strong>{{order.carrierName}}
            </div>
            
        
            <h3 class=\"mt-4\">Détail de la commande</h3>
                <table class=\"table\">
                    <thead>
                        <tr>
                        <th scope=\"col\">Produit</th>
                        <th scope=\"col\">Quantité</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for product in order.orderDetails %}
                            <tr>
                            <td>{{product.product}}</td>
                            <td>{{product.quantity}}</td>
                            <td>{{((product.price)/ 100)|number_format(2,',','.')}}€</td>
                            <td>{{((product.total)/ 100)|number_format(2,',','.')}}€</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
                <div>
                    <p>Sous-total : {{((order.total)/ 100)|number_format(2,',','.')}}€</p>
                    <p>Livraison : {{((order.carrierPrice)/ 100)|number_format(2,',','.')}}€</p>
                    <p>Total : {{((order.carrierPrice + order.total)/ 100)|number_format(2,',','.')}}€</p>
                </div>
                
        </div>
     </div>
        
    {% endif %}
</div>
{% endblock %}

", "account_order/show.html.twig", "/Applications/MAMP/htdocs/KOABABI/Koababi/templates/account_order/show.html.twig");
    }
}
