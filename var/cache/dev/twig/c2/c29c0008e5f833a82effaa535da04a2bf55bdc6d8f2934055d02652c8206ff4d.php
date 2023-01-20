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

/* StockBundle:Stock:listeStock.html.twig */
class __TwigTemplate_cf7fe5c5dc1ab3ec6fd8673e3adf8c8ab8660140cfab305707caffe39274cf25 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Stock:listeStock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Stock:listeStock.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Stock:listeStock.html.twig", 1);
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
        echo "      <section class=\"content-header\">
      <h1>
        Stock
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_ajouter");
        echo "\">Stock</a></li>
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
        echo "         <div class=\"box-header box box-success\">
             <h3 class=\"box-title\">Liste des produits en stock</h3>
   
<div class=\"pull-right\" >
";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_ajouter");
            echo "\"  class=\"btn bg-olive btn-flat margin\">Ajouter Stock</a>
                                ";
        }
        // line 22
        echo "                            </div>  
        </div>

        <div class=\"box-body\">
            <table id=\"table_stock\" class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Produit</th>
                        <th>Prix de vente</th>
                        <th>Quantite en stock</th>
                        ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "                        <th>Modifer</th>
                       <th>Detail</th>
                        ";
        }
        // line 37
        echo "                        
                    </tr>
                </thead>
                <tfoot>
                 <tr>
                        <th>N°</th>
                        <th>Produit</th>
                        <th>Prix de vente</th>
                        <th>Quantite en stock</th>
                       ";
        // line 46
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 47
            echo "                        <th>Modifer</th>
                        <th>Detail</th>
                        ";
        }
        // line 50
        echo "                    </tr>
                </tfoot>
                <tbody>
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stockListe"] ?? $this->getContext($context, "stockListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 54
            echo "                        ";
            if (($this->getAttribute($context["liste"], "quantiteProduit", []) <= $this->getAttribute($context["liste"], "limiteProduit", []))) {
                // line 55
                echo "                            <tr class=\"danger\">
                        ";
            } else {
                // line 57
                echo "                                <tr>
                        ";
            }
            // line 59
            echo "
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "id", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["liste"], "produit", []), "nomProduit", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "prixProduit", []), "html", null, true);
            echo "</td>
                             <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "quantiteProduit", []), "html", null, true);
            echo "</td>
                             ";
            // line 64
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 65
                echo "                            <td><a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_modifier", ["id" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
                echo "\">Modifier</a></td>
                            
                            <td><a class=\"btn btn-info\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_detail", ["id" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
                echo "\" >Detail</a></td>
                            ";
            }
            // line 69
            echo "                            
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </tbody>
            </table>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Stock:listeStock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 72,  197 => 69,  192 => 67,  186 => 65,  184 => 64,  180 => 63,  176 => 62,  172 => 61,  168 => 60,  165 => 59,  161 => 57,  157 => 55,  154 => 54,  150 => 53,  145 => 50,  140 => 47,  138 => 46,  127 => 37,  122 => 34,  120 => 33,  107 => 22,  101 => 20,  99 => 19,  93 => 15,  84 => 14,  70 => 10,  61 => 3,  52 => 2,  30 => 1,);
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
        Stock
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        <li><a href=\"{{path('stock_ajouter')}}\">Stock</a></li>
      </ol>
    </section>
    {%endblock%}
    {%block body%}
         <div class=\"box-header box box-success\">
             <h3 class=\"box-title\">Liste des produits en stock</h3>
   
<div class=\"pull-right\" >
{% if is_granted('ROLE_ADMIN') %}
                                <a href=\"{{path('stock_ajouter')}}\"  class=\"btn bg-olive btn-flat margin\">Ajouter Stock</a>
                                {% endif %}
                            </div>  
        </div>

        <div class=\"box-body\">
            <table id=\"table_stock\" class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Produit</th>
                        <th>Prix de vente</th>
                        <th>Quantite en stock</th>
                        {% if is_granted('ROLE_ADMIN') %}
                        <th>Modifer</th>
                       <th>Detail</th>
                        {% endif %}
                        
                    </tr>
                </thead>
                <tfoot>
                 <tr>
                        <th>N°</th>
                        <th>Produit</th>
                        <th>Prix de vente</th>
                        <th>Quantite en stock</th>
                       {% if is_granted('ROLE_ADMIN') %}
                        <th>Modifer</th>
                        <th>Detail</th>
                        {% endif %}
                    </tr>
                </tfoot>
                <tbody>
                    {% for liste in stockListe %}
                        {% if liste.quantiteProduit <= liste.limiteProduit %}
                            <tr class=\"danger\">
                        {% else %}
                                <tr>
                        {% endif %}

                            <td>{{ liste.id }}</td>
                            <td>{{ liste.produit.nomProduit }}</td>
                            <td>{{ liste.prixProduit }}</td>
                             <td>{{ liste.quantiteProduit }}</td>
                             {% if is_granted('ROLE_ADMIN') %}
                            <td><a class=\"btn btn-primary\" href=\"{{ path('stock_modifier', {'id': liste.id}) }}\">Modifier</a></td>
                            
                            <td><a class=\"btn btn-info\" href=\"{{ path('stock_detail', {'id': liste.id}) }}\" >Detail</a></td>
                            {% endif %}
                            
                        </tr>
                    {%endfor%}
                </tbody>
            </table>
        </div>

{% endblock %}
", "StockBundle:Stock:listeStock.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\StockBundle/Resources/views/Stock/listeStock.html.twig");
    }
}
