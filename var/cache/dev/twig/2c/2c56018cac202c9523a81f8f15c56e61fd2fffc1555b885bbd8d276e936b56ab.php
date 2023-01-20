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

/* StockBundle:Stock:ajouterStock.html.twig */
class __TwigTemplate_3a5a4da044581edf78e7ee906f32f3e7cea2328cd3589770ca7509cdf862f08d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Stock:ajouterStock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Stock:ajouterStock.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Stock:ajouterStock.html.twig", 1);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fournisseur", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Fournisseur"]]);
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Produit</label>
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", []), "produit", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "produit"]]);
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Quantité reçue</label>
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantiteProduitFournisseur", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "quantité livrée", "min" => "0"]]);
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Limite</label>
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", []), "limiteProduit", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "quantité mininum en stosk", "min" => "0"]]);
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Prix d'achat par unité</label>
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prixProduitFournisseur", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "prix d entré produit", "min" => "0"]]);
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Prix de vente par unité</label>
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", []), "prixProduit", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "prix de vente du produit", "min" => "0"]]);
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Date de perromption</label>
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", []), "datePermptionProduit", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "date perromption produit"]]);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  218 => 101,  212 => 98,  202 => 91,  192 => 84,  182 => 77,  172 => 70,  162 => 63,  152 => 56,  142 => 49,  138 => 48,  124 => 37,  117 => 32,  110 => 27,  108 => 26,  102 => 22,  100 => 21,  93 => 16,  90 => 15,  81 => 14,  61 => 3,  52 => 2,  30 => 1,);
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
                  <label>Quantité reçue</label>
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
                            {{ form_widget(form.prixProduitFournisseur, {'attr': {'class': 'form-control', 'placeholder':'prix d entré produit', 'min':'0'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>
                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Prix de vente par unité</label>
                            {{ form_widget(form.stock.prixProduit, {'attr': {'class': 'form-control', 'placeholder':'prix de vente du produit', 'min':'0'} }) }}
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
", "StockBundle:Stock:ajouterStock.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\StockBundle/Resources/views/Stock/ajouterStock.html.twig");
    }
}
