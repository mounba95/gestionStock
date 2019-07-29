<?php

/* StockBundle:Stock:listeStock.html.twig */
class __TwigTemplate_0cf1c109650a22064a9f32f9b42406c496a34b2971b1e745fb015a5e3680fe1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Stock:listeStock.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09334a1727ba9d6c64f80698cbd5abd4c5c762e0caec5d001b1b21cd17f7e502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09334a1727ba9d6c64f80698cbd5abd4c5c762e0caec5d001b1b21cd17f7e502->enter($__internal_09334a1727ba9d6c64f80698cbd5abd4c5c762e0caec5d001b1b21cd17f7e502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Stock:listeStock.html.twig"));

        $__internal_bb887e4e328af3af3a72c421724c873d162e69aa65a4a0b948f3383608f71f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb887e4e328af3af3a72c421724c873d162e69aa65a4a0b948f3383608f71f67->enter($__internal_bb887e4e328af3af3a72c421724c873d162e69aa65a4a0b948f3383608f71f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Stock:listeStock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09334a1727ba9d6c64f80698cbd5abd4c5c762e0caec5d001b1b21cd17f7e502->leave($__internal_09334a1727ba9d6c64f80698cbd5abd4c5c762e0caec5d001b1b21cd17f7e502_prof);

        
        $__internal_bb887e4e328af3af3a72c421724c873d162e69aa65a4a0b948f3383608f71f67->leave($__internal_bb887e4e328af3af3a72c421724c873d162e69aa65a4a0b948f3383608f71f67_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_a7acf54abf2dbd9d5cc1c699c7b3b0a1fb2081a71896e7de5dee67e1d6a74a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7acf54abf2dbd9d5cc1c699c7b3b0a1fb2081a71896e7de5dee67e1d6a74a97->enter($__internal_a7acf54abf2dbd9d5cc1c699c7b3b0a1fb2081a71896e7de5dee67e1d6a74a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e3515ccb9568dc61556832adbe102e72fca6a7e49dc13b59763e95da8969612a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3515ccb9568dc61556832adbe102e72fca6a7e49dc13b59763e95da8969612a->enter($__internal_e3515ccb9568dc61556832adbe102e72fca6a7e49dc13b59763e95da8969612a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_e3515ccb9568dc61556832adbe102e72fca6a7e49dc13b59763e95da8969612a->leave($__internal_e3515ccb9568dc61556832adbe102e72fca6a7e49dc13b59763e95da8969612a_prof);

        
        $__internal_a7acf54abf2dbd9d5cc1c699c7b3b0a1fb2081a71896e7de5dee67e1d6a74a97->leave($__internal_a7acf54abf2dbd9d5cc1c699c7b3b0a1fb2081a71896e7de5dee67e1d6a74a97_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf4f02f347b200f3ef9391731a5832ee7f80429c4f81e5e66549a2c868e7d896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4f02f347b200f3ef9391731a5832ee7f80429c4f81e5e66549a2c868e7d896->enter($__internal_bf4f02f347b200f3ef9391731a5832ee7f80429c4f81e5e66549a2c868e7d896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4d85fc80a304f44ef113a79bbefaa08047047a066b08252bbab9e766768d53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d85fc80a304f44ef113a79bbefaa08047047a066b08252bbab9e766768d53c->enter($__internal_f4d85fc80a304f44ef113a79bbefaa08047047a066b08252bbab9e766768d53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            if (($this->getAttribute($context["liste"], "quantiteProduit", array()) <= $this->getAttribute($context["liste"], "limiteProduit", array()))) {
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["liste"], "produit", array()), "nomProduit", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "prixProduit", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "quantiteProduit", array()), "html", null, true);
            echo "</td>
                             ";
            // line 64
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 65
                echo "                            <td><a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_modifier", array("id" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
                echo "\">Modifier</a></td>
                            
                            <td><a class=\"btn btn-info\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_detail", array("id" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
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
        
        $__internal_f4d85fc80a304f44ef113a79bbefaa08047047a066b08252bbab9e766768d53c->leave($__internal_f4d85fc80a304f44ef113a79bbefaa08047047a066b08252bbab9e766768d53c_prof);

        
        $__internal_bf4f02f347b200f3ef9391731a5832ee7f80429c4f81e5e66549a2c868e7d896->leave($__internal_bf4f02f347b200f3ef9391731a5832ee7f80429c4f81e5e66549a2c868e7d896_prof);

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
        return array (  194 => 72,  186 => 69,  181 => 67,  175 => 65,  173 => 64,  169 => 63,  165 => 62,  161 => 61,  157 => 60,  154 => 59,  150 => 57,  146 => 55,  143 => 54,  139 => 53,  134 => 50,  129 => 47,  127 => 46,  116 => 37,  111 => 34,  109 => 33,  96 => 22,  90 => 20,  88 => 19,  82 => 15,  73 => 14,  59 => 10,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
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
", "StockBundle:Stock:listeStock.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/StockBundle/Resources/views/Stock/listeStock.html.twig");
    }
}
