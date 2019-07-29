<?php

/* StockBundle:Stock:detailStock.html.twig */
class __TwigTemplate_14a4f9c492b601da484a4a09c1c3d3373519c0626807dff9ecbe2948159dcfae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Stock:detailStock.html.twig", 1);
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
        $__internal_beea0d5f5a224dd1abef9c5d056971ba23f38a4c09060914dd7091605cd79825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beea0d5f5a224dd1abef9c5d056971ba23f38a4c09060914dd7091605cd79825->enter($__internal_beea0d5f5a224dd1abef9c5d056971ba23f38a4c09060914dd7091605cd79825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Stock:detailStock.html.twig"));

        $__internal_66c69c43e327f7e523bbf43e8e01959a92c3774396370653b84a43910a625b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c69c43e327f7e523bbf43e8e01959a92c3774396370653b84a43910a625b98->enter($__internal_66c69c43e327f7e523bbf43e8e01959a92c3774396370653b84a43910a625b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Stock:detailStock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beea0d5f5a224dd1abef9c5d056971ba23f38a4c09060914dd7091605cd79825->leave($__internal_beea0d5f5a224dd1abef9c5d056971ba23f38a4c09060914dd7091605cd79825_prof);

        
        $__internal_66c69c43e327f7e523bbf43e8e01959a92c3774396370653b84a43910a625b98->leave($__internal_66c69c43e327f7e523bbf43e8e01959a92c3774396370653b84a43910a625b98_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_433159aa9ae3049f29a78f7415988168d05c75f09e12ec37d4f8d193e495823b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433159aa9ae3049f29a78f7415988168d05c75f09e12ec37d4f8d193e495823b->enter($__internal_433159aa9ae3049f29a78f7415988168d05c75f09e12ec37d4f8d193e495823b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_2a32bbfa28fb98f87b54638bfd55ea46fc02742786b540e9093bf1e1860b4b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a32bbfa28fb98f87b54638bfd55ea46fc02742786b540e9093bf1e1860b4b48->enter($__internal_2a32bbfa28fb98f87b54638bfd55ea46fc02742786b540e9093bf1e1860b4b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_2a32bbfa28fb98f87b54638bfd55ea46fc02742786b540e9093bf1e1860b4b48->leave($__internal_2a32bbfa28fb98f87b54638bfd55ea46fc02742786b540e9093bf1e1860b4b48_prof);

        
        $__internal_433159aa9ae3049f29a78f7415988168d05c75f09e12ec37d4f8d193e495823b->leave($__internal_433159aa9ae3049f29a78f7415988168d05c75f09e12ec37d4f8d193e495823b_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cab3da97ca0ba1766abc3362cc7983fcd8a59a276052e3511aeb8c095630888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cab3da97ca0ba1766abc3362cc7983fcd8a59a276052e3511aeb8c095630888->enter($__internal_0cab3da97ca0ba1766abc3362cc7983fcd8a59a276052e3511aeb8c095630888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23c5725f6184ee45e0f855ca39d8a3f311cfe72cce74976affb6ff446dd8f7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c5725f6184ee45e0f855ca39d8a3f311cfe72cce74976affb6ff446dd8f7eb->enter($__internal_23c5725f6184ee45e0f855ca39d8a3f311cfe72cce74976affb6ff446dd8f7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "         <div class=\"box-header box box-success\">
             <h3 class=\"box-title\">Historique d'approvionement</h3>
   
<div class=\"pull-right\" >
                                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_liste");
        echo "\"  class=\"btn bg-olive btn-flat margin\">Liste produit en stock</a>
                            </div>  
    </div>
        <div class=\"box-body\">
            <table id=\"table_pays\" class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Fournisseur</th>
                        <th>Produit</th>
                        <th>Quantite d'entrée</th>
                        <th>Prix d'éntré</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["detailStock"] ?? $this->getContext($context, "detailStock")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 36
            echo "                        <tr>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["liste"], "fournisseur", array()), "nomFournisseur", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["liste"], "stock", array()), "produit", array()), "nomProduit", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "quantiteProduitFournisseur", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "prixProduitFournisseur", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["liste"], "dateApprovisioner", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
            </table>
        </div>

";
        
        $__internal_23c5725f6184ee45e0f855ca39d8a3f311cfe72cce74976affb6ff446dd8f7eb->leave($__internal_23c5725f6184ee45e0f855ca39d8a3f311cfe72cce74976affb6ff446dd8f7eb_prof);

        
        $__internal_0cab3da97ca0ba1766abc3362cc7983fcd8a59a276052e3511aeb8c095630888->leave($__internal_0cab3da97ca0ba1766abc3362cc7983fcd8a59a276052e3511aeb8c095630888_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Stock:detailStock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 45,  134 => 42,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  111 => 36,  107 => 35,  88 => 19,  82 => 15,  73 => 14,  59 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
             <h3 class=\"box-title\">Historique d'approvionement</h3>
   
<div class=\"pull-right\" >
                                <a href=\"{{path('stock_liste')}}\"  class=\"btn bg-olive btn-flat margin\">Liste produit en stock</a>
                            </div>  
    </div>
        <div class=\"box-body\">
            <table id=\"table_pays\" class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Fournisseur</th>
                        <th>Produit</th>
                        <th>Quantite d'entrée</th>
                        <th>Prix d'éntré</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    {% for liste in detailStock %}
                        <tr>
                            <td>{{ liste.id }}</td>
                            <td>{{ liste.fournisseur.nomFournisseur }}</td>
                            <td>{{ liste.stock.produit.nomProduit }}</td>
                            <td>{{ liste.quantiteProduitFournisseur }}</td>
                            <td>{{ liste.prixProduitFournisseur }}</td>
                            <td>{{ liste.dateApprovisioner |date('d-m-Y H:i:s')}}</td>
                        </tr>
                    {%endfor%}
                </tbody>
            </table>
        </div>

{% endblock %}
", "StockBundle:Stock:detailStock.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/StockBundle/Resources/views/Stock/detailStock.html.twig");
    }
}
