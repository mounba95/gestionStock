<?php

/* StockBundle:Vente:ajouterVente.html.twig */
class __TwigTemplate_06be690068afa250f8837fe5245f11335b14a11c6c9e8708566ecd315804a62c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:ajouterVente.html.twig", 1);
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
        $__internal_45aaa1b23e7994b0b30bb62bd55d2654fbbcf93175e2c531633bf017748c40d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45aaa1b23e7994b0b30bb62bd55d2654fbbcf93175e2c531633bf017748c40d7->enter($__internal_45aaa1b23e7994b0b30bb62bd55d2654fbbcf93175e2c531633bf017748c40d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Vente:ajouterVente.html.twig"));

        $__internal_35aa41ef66c3999cbbd5ee725832c7503d5afcce388c61be2431166231eac9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35aa41ef66c3999cbbd5ee725832c7503d5afcce388c61be2431166231eac9ae->enter($__internal_35aa41ef66c3999cbbd5ee725832c7503d5afcce388c61be2431166231eac9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Vente:ajouterVente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45aaa1b23e7994b0b30bb62bd55d2654fbbcf93175e2c531633bf017748c40d7->leave($__internal_45aaa1b23e7994b0b30bb62bd55d2654fbbcf93175e2c531633bf017748c40d7_prof);

        
        $__internal_35aa41ef66c3999cbbd5ee725832c7503d5afcce388c61be2431166231eac9ae->leave($__internal_35aa41ef66c3999cbbd5ee725832c7503d5afcce388c61be2431166231eac9ae_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_1bff319433094d512d4cec2dd2c265c582b03967e59e5377614f1f2122661a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bff319433094d512d4cec2dd2c265c582b03967e59e5377614f1f2122661a62->enter($__internal_1bff319433094d512d4cec2dd2c265c582b03967e59e5377614f1f2122661a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f33910681bdcae4edb947c11a12795bebbf95aeca4efca10e0e5cb13ef5009b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33910681bdcae4edb947c11a12795bebbf95aeca4efca10e0e5cb13ef5009b4->enter($__internal_f33910681bdcae4edb947c11a12795bebbf95aeca4efca10e0e5cb13ef5009b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "      <section class=\"content-header\">
      <h1>
        Vente
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        
      </ol>
    </section>
    ";
        
        $__internal_f33910681bdcae4edb947c11a12795bebbf95aeca4efca10e0e5cb13ef5009b4->leave($__internal_f33910681bdcae4edb947c11a12795bebbf95aeca4efca10e0e5cb13ef5009b4_prof);

        
        $__internal_1bff319433094d512d4cec2dd2c265c582b03967e59e5377614f1f2122661a62->leave($__internal_1bff319433094d512d4cec2dd2c265c582b03967e59e5377614f1f2122661a62_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_963248951e46ff8cb9cca59c98522e557ba009af2ef7085eee9abbaa48e4d3d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963248951e46ff8cb9cca59c98522e557ba009af2ef7085eee9abbaa48e4d3d1->enter($__internal_963248951e46ff8cb9cca59c98522e557ba009af2ef7085eee9abbaa48e4d3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2139fd4b9abe617a8998da3cfb0a41481d3056cb33914a4cf21f45f6a25525df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2139fd4b9abe617a8998da3cfb0a41481d3056cb33914a4cf21f45f6a25525df->enter($__internal_2139fd4b9abe617a8998da3cfb0a41481d3056cb33914a4cf21f45f6a25525df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "                           ";
        if ((($context["result"] ?? $this->getContext($context, "result")) == 3)) {
            // line 16
            echo "                             <div class=\"alert alert-default alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>Veuillez remplir les champs pour créer une vente</strong> 
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
        } elseif ((        // line 31
($context["result"] ?? $this->getContext($context, "result")) == 4)) {
            // line 32
            echo "                                <div class=\"alert alert-danger alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>La quantité demandée(";
            // line 34
            echo twig_escape_filter($this->env, ($context["quantiteDemande"] ?? $this->getContext($context, "quantiteDemande")), "html", null, true);
            echo ") est superieur à la quantité disponible (";
            echo twig_escape_filter($this->env, ($context["quantiteDisponible"] ?? $this->getContext($context, "quantiteDisponible")), "html", null, true);
            echo ").</strong> 
                                </div>
                            ";
        }
        // line 37
        echo "           <div class=\"box box-success\">
             <div class=\"box-header with-border\">
              <h3 class=\"box-title\">créer vente</h3>
            
<div class=\"pull-right\" >
                                <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste");
        echo "\"  class=\"btn bg-olive btn-flat margin\">liste des ventes</a>
                            </div>  
            </div>
  
            <!-- /.box-header -->
          
            <div class=\"box-body\">
              <div class=\"row\">
                  <div class=\"col-md-6\">
                      <div class=\"form-group\">
                          <label>Offre </label>
                          ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                          ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "facture", array()), "offre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "l offre")));
        echo "
                      </div>
                      <!-- /.form-group -->
                  </div>
                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Produit </label>
                      ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "reference facture")));
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>

                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                      <label>Quantité</label>
                      ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantiteAchat", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "quantite", "min" => "0")));
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                      <label>Tva </label>
                      ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "facture", array()), "tva", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "tva facture")));
        echo "
                            <div class=\"pull-right\" >
                             <a class=\"btn bg-maroon btn-flat margin\" href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste");
        echo "\" >Annuler</a>
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>
                             ";
        // line 81
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
        
        $__internal_2139fd4b9abe617a8998da3cfb0a41481d3056cb33914a4cf21f45f6a25525df->leave($__internal_2139fd4b9abe617a8998da3cfb0a41481d3056cb33914a4cf21f45f6a25525df_prof);

        
        $__internal_963248951e46ff8cb9cca59c98522e557ba009af2ef7085eee9abbaa48e4d3d1->leave($__internal_963248951e46ff8cb9cca59c98522e557ba009af2ef7085eee9abbaa48e4d3d1_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Vente:ajouterVente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 81,  180 => 78,  175 => 76,  165 => 69,  154 => 61,  144 => 54,  140 => 53,  126 => 42,  119 => 37,  111 => 34,  107 => 32,  105 => 31,  99 => 27,  97 => 26,  91 => 22,  89 => 21,  82 => 16,  79 => 15,  70 => 14,  50 => 3,  41 => 2,  11 => 1,);
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
        
      </ol>
    </section>
    {%endblock%}
    {%block body%}
                           {%if result == 3 %}
                             <div class=\"alert alert-default alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>Veuillez remplir les champs pour créer une vente</strong> 
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
                                {% elseif result == 4 %}
                                <div class=\"alert alert-danger alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>La quantité demandée({{quantiteDemande}}) est superieur à la quantité disponible ({{quantiteDisponible}}).</strong> 
                                </div>
                            {% endif %}
           <div class=\"box box-success\">
             <div class=\"box-header with-border\">
              <h3 class=\"box-title\">créer vente</h3>
            
<div class=\"pull-right\" >
                                <a href=\"{{path('vente_liste')}}\"  class=\"btn bg-olive btn-flat margin\">liste des ventes</a>
                            </div>  
            </div>
  
            <!-- /.box-header -->
          
            <div class=\"box-body\">
              <div class=\"row\">
                  <div class=\"col-md-6\">
                      <div class=\"form-group\">
                          <label>Offre </label>
                          {{ form_start(form) }}
                          {{ form_widget(form.facture.offre, {'attr': {'class': 'form-control', 'placeholder':'l offre'} }) }}
                      </div>
                      <!-- /.form-group -->
                  </div>
                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Produit </label>
                      {{ form_widget(form.stock, {'attr': {'class': 'form-control', 'placeholder':'reference facture'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>

                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                      <label>Quantité</label>
                      {{ form_widget(form.quantiteAchat, {'attr': {'class': 'form-control', 'placeholder':'quantite', 'min':'0'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                      <label>Tva </label>
                      {{ form_widget(form.facture.tva, {'attr': {'class': 'form-control', 'placeholder':'tva facture'} }) }}
                            <div class=\"pull-right\" >
                             <a class=\"btn bg-maroon btn-flat margin\" href=\"{{ path('vente_liste') }}\" >Annuler</a>
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
", "StockBundle:Vente:ajouterVente.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/StockBundle/Resources/views/Vente/ajouterVente.html.twig");
    }
}
