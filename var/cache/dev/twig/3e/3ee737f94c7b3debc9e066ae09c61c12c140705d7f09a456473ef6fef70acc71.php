<?php

/* ProduitBundle:TypeProduit:listeTypeProduit.html.twig */
class __TwigTemplate_4b4a6bb396d70a6dc67b0588f946cc56887b0e5ab6e56a24e6955332782a29c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProduitBundle:TypeProduit:listeTypeProduit.html.twig", 1);
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
        $__internal_c13eb5a63043e85b9d5e666d03225bf2ee088b3e32204d8102524d41d599e9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13eb5a63043e85b9d5e666d03225bf2ee088b3e32204d8102524d41d599e9f9->enter($__internal_c13eb5a63043e85b9d5e666d03225bf2ee088b3e32204d8102524d41d599e9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProduitBundle:TypeProduit:listeTypeProduit.html.twig"));

        $__internal_c9b77700ba6bd5b4e4a2d6b215a93271a85bdec2629575a3acd21347937c20ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b77700ba6bd5b4e4a2d6b215a93271a85bdec2629575a3acd21347937c20ec->enter($__internal_c9b77700ba6bd5b4e4a2d6b215a93271a85bdec2629575a3acd21347937c20ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProduitBundle:TypeProduit:listeTypeProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c13eb5a63043e85b9d5e666d03225bf2ee088b3e32204d8102524d41d599e9f9->leave($__internal_c13eb5a63043e85b9d5e666d03225bf2ee088b3e32204d8102524d41d599e9f9_prof);

        
        $__internal_c9b77700ba6bd5b4e4a2d6b215a93271a85bdec2629575a3acd21347937c20ec->leave($__internal_c9b77700ba6bd5b4e4a2d6b215a93271a85bdec2629575a3acd21347937c20ec_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_ccf3762f357628491b6d8271c88ddc77d79ed4860a49ea362109338e5a75a27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf3762f357628491b6d8271c88ddc77d79ed4860a49ea362109338e5a75a27f->enter($__internal_ccf3762f357628491b6d8271c88ddc77d79ed4860a49ea362109338e5a75a27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_efe4b583d570e8b583826b55b6455069ecb0494b12d5892bfcf8bf137ac139d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe4b583d570e8b583826b55b6455069ecb0494b12d5892bfcf8bf137ac139d4->enter($__internal_efe4b583d570e8b583826b55b6455069ecb0494b12d5892bfcf8bf137ac139d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "      <section class=\"content-header\">
      <h1>
        Type
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_type_ajouter");
        echo "\">Type</a></li>
      </ol>
    </section>
    ";
        
        $__internal_efe4b583d570e8b583826b55b6455069ecb0494b12d5892bfcf8bf137ac139d4->leave($__internal_efe4b583d570e8b583826b55b6455069ecb0494b12d5892bfcf8bf137ac139d4_prof);

        
        $__internal_ccf3762f357628491b6d8271c88ddc77d79ed4860a49ea362109338e5a75a27f->leave($__internal_ccf3762f357628491b6d8271c88ddc77d79ed4860a49ea362109338e5a75a27f_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cb088c5b05f59e80db6392f745461e2c074419671a744ee3581be432f71c6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb088c5b05f59e80db6392f745461e2c074419671a744ee3581be432f71c6a6->enter($__internal_4cb088c5b05f59e80db6392f745461e2c074419671a744ee3581be432f71c6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63ab335192c755a3445a60f5421603f2a64625f523555e013d604ea1ce1ba264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ab335192c755a3445a60f5421603f2a64625f523555e013d604ea1ce1ba264->enter($__internal_63ab335192c755a3445a60f5421603f2a64625f523555e013d604ea1ce1ba264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "         <div class=\"box-header box box-success\">
             <h3 class=\"box-title\">Liste des types</h3>
   
<div class=\"pull-right\" >
                                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_type_ajouter");
        echo "\"  class=\"btn bg-olive btn-flat margin\">Ajouter Type</a>
                            </div>  
        </div>

        <div class=\"box-body\">
            <table id=\"table_typeProduit\" class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tfoot>
                <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                    </tr>
                </tfoot>
                <tbody>
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeProduitListe"] ?? $this->getContext($context, "typeProduitListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 45
            echo "                        <tr>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomType", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "descriptionType", array()), "html", null, true);
            echo "</td>

                            <td><a class=\"btn btn-primary\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_type_modifier", array("id" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>

                            <td><a class=\"btn btn-info\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_type_detail", array("id" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
            echo "\" >Detail</a></td>
          
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </tbody>
            </table>
        </div>

";
        
        $__internal_63ab335192c755a3445a60f5421603f2a64625f523555e013d604ea1ce1ba264->leave($__internal_63ab335192c755a3445a60f5421603f2a64625f523555e013d604ea1ce1ba264_prof);

        
        $__internal_4cb088c5b05f59e80db6392f745461e2c074419671a744ee3581be432f71c6a6->leave($__internal_4cb088c5b05f59e80db6392f745461e2c074419671a744ee3581be432f71c6a6_prof);

    }

    public function getTemplateName()
    {
        return "ProduitBundle:TypeProduit:listeTypeProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 56,  141 => 52,  136 => 50,  131 => 48,  127 => 47,  123 => 46,  120 => 45,  116 => 44,  88 => 19,  82 => 15,  73 => 14,  59 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
        Type
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        <li><a href=\"{{path('produit_type_ajouter')}}\">Type</a></li>
      </ol>
    </section>
    {%endblock%}
    {%block body%}
         <div class=\"box-header box box-success\">
             <h3 class=\"box-title\">Liste des types</h3>
   
<div class=\"pull-right\" >
                                <a href=\"{{path('produit_type_ajouter')}}\"  class=\"btn bg-olive btn-flat margin\">Ajouter Type</a>
                            </div>  
        </div>

        <div class=\"box-body\">
            <table id=\"table_typeProduit\" class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tfoot>
                <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                    </tr>
                </tfoot>
                <tbody>
                    {% for liste in typeProduitListe %}
                        <tr>
                            <td>{{ liste.id }}</td>
                            <td>{{ liste.nomType }}</td>
                            <td>{{ liste.descriptionType }}</td>

                            <td><a class=\"btn btn-primary\" href=\"{{ path('produit_type_modifier', {'id': liste.id}) }}\">Modifier</a></td>

                            <td><a class=\"btn btn-info\" href=\"{{ path('produit_type_detail', {'id': liste.id}) }}\" >Detail</a></td>
          
                        </tr>
                    {%endfor%}
                </tbody>
            </table>
        </div>

{% endblock %}
", "ProduitBundle:TypeProduit:listeTypeProduit.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/ProduitBundle/Resources/views/TypeProduit/listeTypeProduit.html.twig");
    }
}
