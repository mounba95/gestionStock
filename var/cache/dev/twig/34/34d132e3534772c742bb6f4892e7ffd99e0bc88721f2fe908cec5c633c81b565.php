<?php

/* StockBundle:Achat:listeAchat.html.twig */
class __TwigTemplate_80e10f610bc8fd32708936448ba39cb92b323e318faf449deb4385ad586a9667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Achat:listeAchat.html.twig", 1);
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
        $__internal_ed12c700e3005ec4346d667ccb804922716f999e7fd06bd4b8a13769e61d5479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed12c700e3005ec4346d667ccb804922716f999e7fd06bd4b8a13769e61d5479->enter($__internal_ed12c700e3005ec4346d667ccb804922716f999e7fd06bd4b8a13769e61d5479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Achat:listeAchat.html.twig"));

        $__internal_1efe2a6206399e10b4fe72f7979d38df8abb7d0802e76e4f0ee8047a4aeeefd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efe2a6206399e10b4fe72f7979d38df8abb7d0802e76e4f0ee8047a4aeeefd6->enter($__internal_1efe2a6206399e10b4fe72f7979d38df8abb7d0802e76e4f0ee8047a4aeeefd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Achat:listeAchat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed12c700e3005ec4346d667ccb804922716f999e7fd06bd4b8a13769e61d5479->leave($__internal_ed12c700e3005ec4346d667ccb804922716f999e7fd06bd4b8a13769e61d5479_prof);

        
        $__internal_1efe2a6206399e10b4fe72f7979d38df8abb7d0802e76e4f0ee8047a4aeeefd6->leave($__internal_1efe2a6206399e10b4fe72f7979d38df8abb7d0802e76e4f0ee8047a4aeeefd6_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_a2059ce811ccef1b7f1179735ad8b86718193db491465bcbd611cc489be2c313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2059ce811ccef1b7f1179735ad8b86718193db491465bcbd611cc489be2c313->enter($__internal_a2059ce811ccef1b7f1179735ad8b86718193db491465bcbd611cc489be2c313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c4c9d4eac5f9756d55435683b99643742ba91b971d03f99f811770df1809cb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c9d4eac5f9756d55435683b99643742ba91b971d03f99f811770df1809cb4e->enter($__internal_c4c9d4eac5f9756d55435683b99643742ba91b971d03f99f811770df1809cb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "      <section class=\"content-header\">
      <h1>
        Devis
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_ajouter");
        echo "\">Devis</a></li>
      </ol>
    </section>
    ";
        
        $__internal_c4c9d4eac5f9756d55435683b99643742ba91b971d03f99f811770df1809cb4e->leave($__internal_c4c9d4eac5f9756d55435683b99643742ba91b971d03f99f811770df1809cb4e_prof);

        
        $__internal_a2059ce811ccef1b7f1179735ad8b86718193db491465bcbd611cc489be2c313->leave($__internal_a2059ce811ccef1b7f1179735ad8b86718193db491465bcbd611cc489be2c313_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdbcb3cc0284f5fce71c1a9ad4a38677ef40c9c81b749dc964924a59a43ad233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdbcb3cc0284f5fce71c1a9ad4a38677ef40c9c81b749dc964924a59a43ad233->enter($__internal_bdbcb3cc0284f5fce71c1a9ad4a38677ef40c9c81b749dc964924a59a43ad233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c678d45045c34166c7662c4fab2d89739b14c80bada8b2ff41856442c647238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c678d45045c34166c7662c4fab2d89739b14c80bada8b2ff41856442c647238->enter($__internal_1c678d45045c34166c7662c4fab2d89739b14c80bada8b2ff41856442c647238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "         <div class=\"box-header box box-success\">
             <h3 class=\"box-title\">Listes des ventes</h3>
   
<div class=\"pull-right\" >
                                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("achat_ajouter");
        echo "\"  class=\"btn bg-olive btn-flat margin\">Ajouter Devis</a>
                            </div>  
        </div>

        <div class=\"box-body\">
            <table id=\"table_devis\" class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Reference </th>
                        <th>Offre</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Reference </th>
                        <th>Offre</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                        <th>Supprimer</th>
                    </tr>
                </tfoot>
                <tbody>
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devisListe"] ?? $this->getContext($context, "devisListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 45
            echo "                        <tr>
                            
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "referenceFacture", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "offre", array()), "html", null, true);
            echo "</td>
                            <td><a class=\"btn btn-primary\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("achat_modifier", array("id" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>

                            <td><a class=\"btn btn-info\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produitachat_ajouter", array("idFacture" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
            echo "\" >Detail</a></td>

                            <td><a class=\"btn btn-danger\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produitachat_ajouter", array("idFacture" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
            echo "\"  onclick=\"return confirm('Voulez-vous supprimer cet enregistrement?');\" >Supprimer</a></td>
          
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </tbody>
            </table>
        </div>

";
        
        $__internal_1c678d45045c34166c7662c4fab2d89739b14c80bada8b2ff41856442c647238->leave($__internal_1c678d45045c34166c7662c4fab2d89739b14c80bada8b2ff41856442c647238_prof);

        
        $__internal_bdbcb3cc0284f5fce71c1a9ad4a38677ef40c9c81b749dc964924a59a43ad233->leave($__internal_bdbcb3cc0284f5fce71c1a9ad4a38677ef40c9c81b749dc964924a59a43ad233_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Achat:listeAchat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 57,  142 => 53,  137 => 51,  132 => 49,  128 => 48,  124 => 47,  120 => 45,  116 => 44,  88 => 19,  82 => 15,  73 => 14,  59 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
        Devis
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        <li><a href=\"{{path('produit_ajouter')}}\">Devis</a></li>
      </ol>
    </section>
    {%endblock%}
    {%block body%}
         <div class=\"box-header box box-success\">
             <h3 class=\"box-title\">Listes des ventes</h3>
   
<div class=\"pull-right\" >
                                <a href=\"{{path('achat_ajouter')}}\"  class=\"btn bg-olive btn-flat margin\">Ajouter Devis</a>
                            </div>  
        </div>

        <div class=\"box-body\">
            <table id=\"table_devis\" class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Reference </th>
                        <th>Offre</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Reference </th>
                        <th>Offre</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                        <th>Supprimer</th>
                    </tr>
                </tfoot>
                <tbody>
                    {% for liste in devisListe %}
                        <tr>
                            
                            <td>{{ liste.referenceFacture }}</td>
                            <td>{{ liste.offre }}</td>
                            <td><a class=\"btn btn-primary\" href=\"{{ path('achat_modifier', {'id': liste.id}) }}\">Modifier</a></td>

                            <td><a class=\"btn btn-info\" href=\"{{ path('produitachat_ajouter', {'idFacture': liste.id}) }}\" >Detail</a></td>

                            <td><a class=\"btn btn-danger\" href=\"{{ path('produitachat_ajouter', {'idFacture': liste.id}) }}\"  onclick=\"return confirm('Voulez-vous supprimer cet enregistrement?');\" >Supprimer</a></td>
          
                        </tr>
                    {%endfor%}
                </tbody>
            </table>
        </div>

{% endblock %}
", "StockBundle:Achat:listeAchat.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/StockBundle/Resources/views/Achat/listeAchat.html.twig");
    }
}
