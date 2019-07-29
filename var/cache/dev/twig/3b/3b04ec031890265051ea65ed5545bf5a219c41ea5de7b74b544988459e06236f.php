<?php

/* StockBundle:Vente:listeVente.html.twig */
class __TwigTemplate_b33b2404cff95b4e31e20a3639ec4a39adfbe90f32520f26e03a0c9660adde65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:listeVente.html.twig", 1);
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
        $__internal_2c27d30d2bc78256d5d3422607fd45a203f718bc9fab451c5d4da5dfce2a77b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c27d30d2bc78256d5d3422607fd45a203f718bc9fab451c5d4da5dfce2a77b8->enter($__internal_2c27d30d2bc78256d5d3422607fd45a203f718bc9fab451c5d4da5dfce2a77b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Vente:listeVente.html.twig"));

        $__internal_e0f2952d378674540a7a6125d080c0e7d0972c1d62530931623390b47fcaa691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f2952d378674540a7a6125d080c0e7d0972c1d62530931623390b47fcaa691->enter($__internal_e0f2952d378674540a7a6125d080c0e7d0972c1d62530931623390b47fcaa691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Vente:listeVente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c27d30d2bc78256d5d3422607fd45a203f718bc9fab451c5d4da5dfce2a77b8->leave($__internal_2c27d30d2bc78256d5d3422607fd45a203f718bc9fab451c5d4da5dfce2a77b8_prof);

        
        $__internal_e0f2952d378674540a7a6125d080c0e7d0972c1d62530931623390b47fcaa691->leave($__internal_e0f2952d378674540a7a6125d080c0e7d0972c1d62530931623390b47fcaa691_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_19202236740205c149a64dcb4c7378dfda24ac30186e76207f157e7dd82fb29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19202236740205c149a64dcb4c7378dfda24ac30186e76207f157e7dd82fb29f->enter($__internal_19202236740205c149a64dcb4c7378dfda24ac30186e76207f157e7dd82fb29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0736d94b7e46e733bc689322105add3695a15fb928901d7b3d4132761d6bcff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0736d94b7e46e733bc689322105add3695a15fb928901d7b3d4132761d6bcff5->enter($__internal_0736d94b7e46e733bc689322105add3695a15fb928901d7b3d4132761d6bcff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "      <section class=\"content-header\">
      <h1>
        Vente
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste");
        echo "\">Liste ventes</a></li>
      </ol>
    </section>
    ";
        
        $__internal_0736d94b7e46e733bc689322105add3695a15fb928901d7b3d4132761d6bcff5->leave($__internal_0736d94b7e46e733bc689322105add3695a15fb928901d7b3d4132761d6bcff5_prof);

        
        $__internal_19202236740205c149a64dcb4c7378dfda24ac30186e76207f157e7dd82fb29f->leave($__internal_19202236740205c149a64dcb4c7378dfda24ac30186e76207f157e7dd82fb29f_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_19bcd296bc2b0132fd2abf03a729bb8ca0496bbbd1048f26a229bc3f715895b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19bcd296bc2b0132fd2abf03a729bb8ca0496bbbd1048f26a229bc3f715895b0->enter($__internal_19bcd296bc2b0132fd2abf03a729bb8ca0496bbbd1048f26a229bc3f715895b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b69ed973de2ce11dc52197ad6a34d33f6254cd237f9ec533c68e896c91238f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69ed973de2ce11dc52197ad6a34d33f6254cd237f9ec533c68e896c91238f0b->enter($__internal_b69ed973de2ce11dc52197ad6a34d33f6254cd237f9ec533c68e896c91238f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "         <div class=\"box-header box box-success\">
             <h3 class=\"box-title\">Liste des ventes</h3>
   
<div class=\"pull-right\" >
                                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_ajouter");
        echo "\"  class=\"btn bg-olive btn-flat margin\">Ajouter Vente</a>
                            </div>  
        </div>

        <div class=\"box-body\">
            <table id=\"table_vente\" class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Reference </th>
                        <th>Offre</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tfoot>
                 <tr>
                        <th>Reference </th>
                        <th>Offre</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                    </tr>
                </tfoot>
                <tbody>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devisListe"] ?? $this->getContext($context, "devisListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 43
            echo "                        <tr>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "referenceFacture", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "offre", array()), "html", null, true);
            echo "</td>
                            <td>
                            ";
            // line 47
            if (($this->getAttribute($context["liste"], "statut", array()) == 0)) {
                // line 48
                echo "                            <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_modifier", array("id" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
                echo "\">Modifier</i></a>
                            ";
            } elseif (($this->getAttribute(            // line 49
$context["liste"], "statut", array()) == 1)) {
                // line 50
                echo "                                 <span class=\"label label-success label-mini\">Validée</span>
                            ";
            }
            // line 52
            echo "                            </td>

                            <td>
                            ";
            // line 55
            if (($this->getAttribute($context["liste"], "statut", array()) == 0)) {
                // line 56
                echo "                            <a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produitvente_ajouter", array("idVente" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
                echo "\" >Detail</a></td>
                            ";
            } elseif (($this->getAttribute(            // line 57
$context["liste"], "statut", array()) == 1)) {
                // line 58
                echo "                            <a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_imprimerrecu", array("idVente" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
                echo "\" >Detail</a></td>
                            ";
            }
            // line 60
            echo "                         
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </tbody>
            </table>
        </div>

";
        
        $__internal_b69ed973de2ce11dc52197ad6a34d33f6254cd237f9ec533c68e896c91238f0b->leave($__internal_b69ed973de2ce11dc52197ad6a34d33f6254cd237f9ec533c68e896c91238f0b_prof);

        
        $__internal_19bcd296bc2b0132fd2abf03a729bb8ca0496bbbd1048f26a229bc3f715895b0->leave($__internal_19bcd296bc2b0132fd2abf03a729bb8ca0496bbbd1048f26a229bc3f715895b0_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Vente:listeVente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 63,  163 => 60,  157 => 58,  155 => 57,  150 => 56,  148 => 55,  143 => 52,  139 => 50,  137 => 49,  132 => 48,  130 => 47,  125 => 45,  121 => 44,  118 => 43,  114 => 42,  88 => 19,  82 => 15,  73 => 14,  59 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
        Vente
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        <li><a href=\"{{path('vente_liste')}}\">Liste ventes</a></li>
      </ol>
    </section>
    {%endblock%}
    {%block body%}
         <div class=\"box-header box box-success\">
             <h3 class=\"box-title\">Liste des ventes</h3>
   
<div class=\"pull-right\" >
                                <a href=\"{{path('vente_ajouter')}}\"  class=\"btn bg-olive btn-flat margin\">Ajouter Vente</a>
                            </div>  
        </div>

        <div class=\"box-body\">
            <table id=\"table_vente\" class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Reference </th>
                        <th>Offre</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tfoot>
                 <tr>
                        <th>Reference </th>
                        <th>Offre</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                    </tr>
                </tfoot>
                <tbody>
                    {% for liste in devisListe %}
                        <tr>
                            <td>{{ liste.referenceFacture }}</td>
                            <td>{{ liste.offre }}</td>
                            <td>
                            {% if liste.statut == 0 %}
                            <a class=\"btn btn-primary\" href=\"{{ path('vente_modifier', {'id': liste.id}) }}\">Modifier</i></a>
                            {% elseif liste.statut == 1 %}
                                 <span class=\"label label-success label-mini\">Validée</span>
                            {% endif %}
                            </td>

                            <td>
                            {% if liste.statut == 0 %}
                            <a class=\"btn btn-info\" href=\"{{ path('produitvente_ajouter', {'idVente': liste.id}) }}\" >Detail</a></td>
                            {% elseif liste.statut == 1 %}
                            <a class=\"btn btn-info\" href=\"{{ path('vente_imprimerrecu', {'idVente': liste.id}) }}\" >Detail</a></td>
                            {% endif %}
                         
                        </tr>
                    {%endfor%}
                </tbody>
            </table>
        </div>

{% endblock %}
", "StockBundle:Vente:listeVente.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/StockBundle/Resources/views/Vente/listeVente.html.twig");
    }
}
