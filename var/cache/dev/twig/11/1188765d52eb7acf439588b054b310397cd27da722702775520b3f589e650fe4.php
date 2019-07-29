<?php

/* StockBundle:Stock:ajouterStock.html.twig */
class __TwigTemplate_76c6da953b0d30d381522079bb77621d04a955073e46c77a1112a26ccc52db9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Stock:ajouterStock.html.twig", 1);
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
        $__internal_12b98377bf219ca46ab1ecc51410c992687388e043d2374ab997391c21204d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b98377bf219ca46ab1ecc51410c992687388e043d2374ab997391c21204d8a->enter($__internal_12b98377bf219ca46ab1ecc51410c992687388e043d2374ab997391c21204d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Stock:ajouterStock.html.twig"));

        $__internal_fbb3167b69623e73d08c6ca92777f291f66bb0e047d3f02005579682d912ce7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb3167b69623e73d08c6ca92777f291f66bb0e047d3f02005579682d912ce7b->enter($__internal_fbb3167b69623e73d08c6ca92777f291f66bb0e047d3f02005579682d912ce7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Stock:ajouterStock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12b98377bf219ca46ab1ecc51410c992687388e043d2374ab997391c21204d8a->leave($__internal_12b98377bf219ca46ab1ecc51410c992687388e043d2374ab997391c21204d8a_prof);

        
        $__internal_fbb3167b69623e73d08c6ca92777f291f66bb0e047d3f02005579682d912ce7b->leave($__internal_fbb3167b69623e73d08c6ca92777f291f66bb0e047d3f02005579682d912ce7b_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_81e0f4a644a3887dcf350b12defda2df3f1932444a74c43e58aa6f1ee95fdb29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e0f4a644a3887dcf350b12defda2df3f1932444a74c43e58aa6f1ee95fdb29->enter($__internal_81e0f4a644a3887dcf350b12defda2df3f1932444a74c43e58aa6f1ee95fdb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_bd3db5cf2a3eb4f20be9008e6eea44eeb4ace39f634a08411664e7a0f69707c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3db5cf2a3eb4f20be9008e6eea44eeb4ace39f634a08411664e7a0f69707c7->enter($__internal_bd3db5cf2a3eb4f20be9008e6eea44eeb4ace39f634a08411664e7a0f69707c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "      <section class=\"content-header\">
      <h1>
        Stock
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        
      </ol>
    </section>
    ";
        
        $__internal_bd3db5cf2a3eb4f20be9008e6eea44eeb4ace39f634a08411664e7a0f69707c7->leave($__internal_bd3db5cf2a3eb4f20be9008e6eea44eeb4ace39f634a08411664e7a0f69707c7_prof);

        
        $__internal_81e0f4a644a3887dcf350b12defda2df3f1932444a74c43e58aa6f1ee95fdb29->leave($__internal_81e0f4a644a3887dcf350b12defda2df3f1932444a74c43e58aa6f1ee95fdb29_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f381cfb577ad4cb046e291504bdd47e66a302839cfa4c720bcc449dc18a6862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f381cfb577ad4cb046e291504bdd47e66a302839cfa4c720bcc449dc18a6862->enter($__internal_2f381cfb577ad4cb046e291504bdd47e66a302839cfa4c720bcc449dc18a6862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_168dac384b0b75ef5627a2d6ffab46eaa2e3d599f80faf6729f10c2720e15ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168dac384b0b75ef5627a2d6ffab46eaa2e3d599f80faf6729f10c2720e15ebf->enter($__internal_168dac384b0b75ef5627a2d6ffab46eaa2e3d599f80faf6729f10c2720e15ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "                           ";
        if ((($context["result"] ?? $this->getContext($context, "result")) == 3)) {
            // line 16
            echo "                             <div class=\"alert alert-default alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>Veuillez remplir les champs pour ajouter un nouveau type</strong> 
                                </div>                          
                                
                             ";
        } elseif ((        // line 21
($context["result"] ?? $this->getContext($context, "result")) == 2)) {
            // line 22
            echo "                                <div class=\"alert alert-success alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>Enregistrement éffectué avec succée.</strong> 
                                </div>
                            ";
        } elseif ((        // line 26
($context["result"] ?? $this->getContext($context, "result")) == 1)) {
            // line 27
            echo "                                <div class=\"alert alert-danger alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>Cet enregistrement existe déja.</strong> 
                                </div>
                            ";
        }
        // line 32
        echo "           <div class=\"box box-success\">
             <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Approvisioner</h3>
            
<div class=\"pull-right\" >
                                <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_liste");
        echo "\"  class=\"btn bg-olive btn-flat margin\">liste produit en stock</a>
                            </div>  
            </div>
  
            <!-- /.box-header -->
          
            <div class=\"box-body\">
              <div class=\"row\">
                 <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Fournisseur</label>
                  ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fournisseur", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fournisseur")));
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Produit</label>
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", array()), "produit", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "produit")));
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Quantité livrée</label>
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantiteProduitFournisseur", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "quantité livrée", "min" => "0")));
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Limite</label>
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", array()), "limiteProduit", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "quantité mininum en stosk", "min" => "0")));
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Prix d'achat par unité</label>
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", array()), "prixProduit", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "prix d entré produit", "min" => "0")));
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Prix de vente par unité</label>
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prixProduitFournisseur", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "prix de vente du produit", "min" => "0")));
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Date de perromption</label>
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", array()), "datePermptionProduit", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "date perromption produit")));
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                 <div class=\"col-md-6\">
                  <div class=\"form-group\">
                            <div class=\"pull-right\" >
                             <a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_liste");
        echo "\"  class=\"btn bg-maroon btn-flat margin\">Annuler</a>
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>  
                            ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
               
                <!-- /.col -->
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
              
            </div>
        </div>
        </div>

";
        
        $__internal_168dac384b0b75ef5627a2d6ffab46eaa2e3d599f80faf6729f10c2720e15ebf->leave($__internal_168dac384b0b75ef5627a2d6ffab46eaa2e3d599f80faf6729f10c2720e15ebf_prof);

        
        $__internal_2f381cfb577ad4cb046e291504bdd47e66a302839cfa4c720bcc449dc18a6862->leave($__internal_2f381cfb577ad4cb046e291504bdd47e66a302839cfa4c720bcc449dc18a6862_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Stock:ajouterStock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 101,  201 => 98,  191 => 91,  181 => 84,  171 => 77,  161 => 70,  151 => 63,  141 => 56,  131 => 49,  127 => 48,  113 => 37,  106 => 32,  99 => 27,  97 => 26,  91 => 22,  89 => 21,  82 => 16,  79 => 15,  70 => 14,  50 => 3,  41 => 2,  11 => 1,);
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
        
      </ol>
    </section>
    {%endblock%}
    {%block body%}
                           {%if result == 3 %}
                             <div class=\"alert alert-default alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>Veuillez remplir les champs pour ajouter un nouveau type</strong> 
                                </div>                          
                                
                             {% elseif result == 2 %}
                                <div class=\"alert alert-success alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>Enregistrement éffectué avec succée.</strong> 
                                </div>
                            {% elseif result == 1 %}
                                <div class=\"alert alert-danger alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>Cet enregistrement existe déja.</strong> 
                                </div>
                            {% endif %}
           <div class=\"box box-success\">
             <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Approvisioner</h3>
            
<div class=\"pull-right\" >
                                <a href=\"{{path('stock_liste')}}\"  class=\"btn bg-olive btn-flat margin\">liste produit en stock</a>
                            </div>  
            </div>
  
            <!-- /.box-header -->
          
            <div class=\"box-body\">
              <div class=\"row\">
                 <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Fournisseur</label>
                  {{ form_start(form) }}
                            {{ form_widget(form.fournisseur, {'attr': {'class': 'form-control', 'placeholder':'Fournisseur'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>
                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Produit</label>
                            {{ form_widget(form.stock.produit, {'attr': {'class': 'form-control', 'placeholder':'produit'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Quantité livrée</label>
                            {{ form_widget(form.quantiteProduitFournisseur, {'attr': {'class': 'form-control', 'placeholder':'quantité livrée', 'min':'0'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Limite</label>
                            {{ form_widget(form.stock.limiteProduit, {'attr': {'class': 'form-control', 'placeholder':'quantité mininum en stosk', 'min':'0'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Prix d'achat par unité</label>
                            {{ form_widget(form.stock.prixProduit, {'attr': {'class': 'form-control', 'placeholder':'prix d entré produit', 'min':'0'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>
                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Prix de vente par unité</label>
                            {{ form_widget(form.prixProduitFournisseur, {'attr': {'class': 'form-control', 'placeholder':'prix de vente du produit', 'min':'0'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Date de perromption</label>
                            {{ form_widget(form.stock.datePermptionProduit, {'attr': {'class': 'form-control', 'placeholder':'date perromption produit'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>
                 <div class=\"col-md-6\">
                  <div class=\"form-group\">
                            <div class=\"pull-right\" >
                             <a href=\"{{path('stock_liste')}}\"  class=\"btn bg-maroon btn-flat margin\">Annuler</a>
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>  
                            {{ form_end(form) }}
                  </div>
                  <!-- /.form-group -->
                </div>
               
                <!-- /.col -->
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
              
            </div>
        </div>
        </div>

{% endblock %}
", "StockBundle:Stock:ajouterStock.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/StockBundle/Resources/views/Stock/ajouterStock.html.twig");
    }
}
