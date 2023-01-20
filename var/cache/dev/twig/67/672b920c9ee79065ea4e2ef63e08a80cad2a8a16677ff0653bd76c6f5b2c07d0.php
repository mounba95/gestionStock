<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* StockBundle:Stock:inventaireStock.html.twig */
class __TwigTemplate_3ecb8bf300c7ad85eed0ba4e164e7f0c13626e16d0dab4dbe65ae6d6ded8f013 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Stock:inventaireStock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Stock:inventaireStock.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Stock:inventaireStock.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "        <section class=\"content-header\">
            <h1>
                Inventaire des produits en stock
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_inventaire");
        echo "\">Inventaire</a></li>
            </ol>
        </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        <div class=\"box-header box box-success\">
            <h3 class=\"box-title\">Inventaire des produits en stock</h3>
        </div>

        <div class=\"box-body\">
            <table id=\"inventaire\" class=\"table table-bordered\">
                <thead>
                <tr class=\"info\">
                    <th>Produit</th>
                    <th>Prix de vente</th>
                    <th>Quantite en stock</th>
                    <th>Montant de vente</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 30
        $context["total"] = 0;
        // line 31
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stockListe"] ?? $this->getContext($context, "stockListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 32
            echo "                    <tr>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["liste"], "produit", []), "nomProduit", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "prixProduit", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "quantiteProduit", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, ($this->getAttribute($context["liste"], "prixProduit", []) * $this->getAttribute($context["liste"], "quantiteProduit", [])), "html", null, true);
            echo "</td>
                        ";
            // line 37
            $context["total"] = (($context["total"] ?? $this->getContext($context, "total")) + ($this->getAttribute($context["liste"], "prixProduit", []) * $this->getAttribute($context["liste"], "quantiteProduit", [])));
            // line 38
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                <tr>
                    <td><b>Total</b></td>
                    <td></td>
                    <td></td>
                    <td class=\"success\"><b>";
        // line 44
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo "</b></td>
                </tr>
                </tbody>
            </table>
        </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Stock:inventaireStock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 44,  145 => 40,  138 => 38,  136 => 37,  132 => 36,  128 => 35,  124 => 34,  120 => 33,  117 => 32,  112 => 31,  110 => 30,  93 => 15,  84 => 14,  70 => 10,  61 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"::base.html.twig\" %}
    {%block header%}
        <section class=\"content-header\">
            <h1>
                Inventaire des produits en stock
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
                <li><a href=\"{{path('stock_inventaire')}}\">Inventaire</a></li>
            </ol>
        </section>
    {%endblock%}
    {%block body%}
        <div class=\"box-header box box-success\">
            <h3 class=\"box-title\">Inventaire des produits en stock</h3>
        </div>

        <div class=\"box-body\">
            <table id=\"inventaire\" class=\"table table-bordered\">
                <thead>
                <tr class=\"info\">
                    <th>Produit</th>
                    <th>Prix de vente</th>
                    <th>Quantite en stock</th>
                    <th>Montant de vente</th>
                </tr>
                </thead>
                <tbody>
                {% set total = 0 %}
                {% for liste in stockListe %}
                    <tr>
                        <td>{{ liste.produit.nomProduit }}</td>
                        <td>{{ liste.prixProduit }}</td>
                        <td>{{ liste.quantiteProduit }}</td>
                        <td>{{ liste.prixProduit * liste.quantiteProduit}}</td>
                        {% set total = total+ liste.prixProduit*liste.quantiteProduit %}
                    </tr>
                {%endfor%}
                <tr>
                    <td><b>Total</b></td>
                    <td></td>
                    <td></td>
                    <td class=\"success\"><b>{{ total }}</b></td>
                </tr>
                </tbody>
            </table>
        </div>

    {% endblock %}
", "StockBundle:Stock:inventaireStock.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\StockBundle/Resources/views/Stock/inventaireStock.html.twig");
    }
}
