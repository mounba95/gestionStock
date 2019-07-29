<?php

/* ProduitBundle:Produit:ajouterProduit.html.twig */
class __TwigTemplate_7dbf8ede3897852f9e8475a0614a6d96e5c1a0f6e3e5faed3f8952571cc24286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProduitBundle:Produit:ajouterProduit.html.twig", 1);
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
        $__internal_1a5f428dceca61b54e5dc0c3445294760a461c1689375f2113c55358d77b1ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5f428dceca61b54e5dc0c3445294760a461c1689375f2113c55358d77b1ddb->enter($__internal_1a5f428dceca61b54e5dc0c3445294760a461c1689375f2113c55358d77b1ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProduitBundle:Produit:ajouterProduit.html.twig"));

        $__internal_ede94b0de244124dba32fd112503a44aa32a184fd081a613337c5af7af14e7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede94b0de244124dba32fd112503a44aa32a184fd081a613337c5af7af14e7f8->enter($__internal_ede94b0de244124dba32fd112503a44aa32a184fd081a613337c5af7af14e7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProduitBundle:Produit:ajouterProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a5f428dceca61b54e5dc0c3445294760a461c1689375f2113c55358d77b1ddb->leave($__internal_1a5f428dceca61b54e5dc0c3445294760a461c1689375f2113c55358d77b1ddb_prof);

        
        $__internal_ede94b0de244124dba32fd112503a44aa32a184fd081a613337c5af7af14e7f8->leave($__internal_ede94b0de244124dba32fd112503a44aa32a184fd081a613337c5af7af14e7f8_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_a95a724203067b1d79e3798e013daf3174b2280770a3a4708cad28c1ab912a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95a724203067b1d79e3798e013daf3174b2280770a3a4708cad28c1ab912a31->enter($__internal_a95a724203067b1d79e3798e013daf3174b2280770a3a4708cad28c1ab912a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_51b8dc0e57800770863401f983b4e8c46d2724b37f108f513f74052023788626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b8dc0e57800770863401f983b4e8c46d2724b37f108f513f74052023788626->enter($__internal_51b8dc0e57800770863401f983b4e8c46d2724b37f108f513f74052023788626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "      <section class=\"content-header\">
      <h1>
        Produit
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        
      </ol>
    </section>
    ";
        
        $__internal_51b8dc0e57800770863401f983b4e8c46d2724b37f108f513f74052023788626->leave($__internal_51b8dc0e57800770863401f983b4e8c46d2724b37f108f513f74052023788626_prof);

        
        $__internal_a95a724203067b1d79e3798e013daf3174b2280770a3a4708cad28c1ab912a31->leave($__internal_a95a724203067b1d79e3798e013daf3174b2280770a3a4708cad28c1ab912a31_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeb32e78971fd91ccfec0291d44114b0803090a3081fec30f86b3e7dcfee3f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb32e78971fd91ccfec0291d44114b0803090a3081fec30f86b3e7dcfee3f6a->enter($__internal_eeb32e78971fd91ccfec0291d44114b0803090a3081fec30f86b3e7dcfee3f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d5dfd90f76082109bd9e32b545732d9f58b9e670a1078d129a670ccde4ab568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5dfd90f76082109bd9e32b545732d9f58b9e670a1078d129a670ccde4ab568->enter($__internal_1d5dfd90f76082109bd9e32b545732d9f58b9e670a1078d129a670ccde4ab568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "                           ";
        if ((($context["result"] ?? $this->getContext($context, "result")) == 3)) {
            // line 16
            echo "                             <div class=\"alert alert-default alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>Veuillez remplir les champs pour ajouter un nouveau produit</strong>
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
              <h3 class=\"box-title\">Ajouter Produit</h3>
            
<div class=\"pull-right\" >
                                <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_liste");
        echo "\"  class=\"btn bg-olive btn-flat margin\">liste des produits</a>
                            </div>  
            </div>
  
            <!-- /.box-header -->
          
            <div class=\"box-body\">
              <div class=\"row\">
                 <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Type</label>
                  ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeProduit", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nom du type")));
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>

                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Nom</label>
                  ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomProduit", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nom produit")));
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Description</label>
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descriptionProduit", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "description du type")));
        echo "
                            <div class=\"pull-right\" >
                                                          
                               <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_liste");
        echo "\"  class=\"btn bg-maroon btn-flat\">Annuler</a>
                               <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                                </div>  
                            ";
        // line 71
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
        
        $__internal_1d5dfd90f76082109bd9e32b545732d9f58b9e670a1078d129a670ccde4ab568->leave($__internal_1d5dfd90f76082109bd9e32b545732d9f58b9e670a1078d129a670ccde4ab568_prof);

        
        $__internal_eeb32e78971fd91ccfec0291d44114b0803090a3081fec30f86b3e7dcfee3f6a->leave($__internal_eeb32e78971fd91ccfec0291d44114b0803090a3081fec30f86b3e7dcfee3f6a_prof);

    }

    public function getTemplateName()
    {
        return "ProduitBundle:Produit:ajouterProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 71,  162 => 68,  156 => 65,  146 => 58,  142 => 57,  131 => 49,  127 => 48,  113 => 37,  106 => 32,  99 => 27,  97 => 26,  91 => 22,  89 => 21,  82 => 16,  79 => 15,  70 => 14,  50 => 3,  41 => 2,  11 => 1,);
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
        Produit
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
                                    <strong>Veuillez remplir les champs pour ajouter un nouveau produit</strong>
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
              <h3 class=\"box-title\">Ajouter Produit</h3>
            
<div class=\"pull-right\" >
                                <a href=\"{{path('produit_liste')}}\"  class=\"btn bg-olive btn-flat margin\">liste des produits</a>
                            </div>  
            </div>
  
            <!-- /.box-header -->
          
            <div class=\"box-body\">
              <div class=\"row\">
                 <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Type</label>
                  {{ form_start(form) }}
                            {{ form_widget(form.typeProduit, {'attr': {'class': 'form-control', 'placeholder':'nom du type'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>

                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Nom</label>
                  {{ form_start(form) }}
                            {{ form_widget(form.nomProduit, {'attr': {'class': 'form-control', 'placeholder':'nom produit'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Description</label>
                            {{ form_widget(form.descriptionProduit, {'attr': {'class': 'form-control', 'placeholder':'description du type'} }) }}
                            <div class=\"pull-right\" >
                                                          
                               <a href=\"{{path('produit_liste')}}\"  class=\"btn bg-maroon btn-flat\">Annuler</a>
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
", "ProduitBundle:Produit:ajouterProduit.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/ProduitBundle/Resources/views/Produit/ajouterProduit.html.twig");
    }
}
