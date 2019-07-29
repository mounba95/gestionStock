<?php

/* StockBundle:Vente:ajouterProduitVente.html.twig */
class __TwigTemplate_741c810d174d62a6ab9bee50d73d2a35e76b38c5d567d1280da223ede82d0604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:ajouterProduitVente.html.twig", 1);
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
        $__internal_589e8aa7f3f35600e521087d209e016d8e1f2cbc21348b096f171316507c53bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589e8aa7f3f35600e521087d209e016d8e1f2cbc21348b096f171316507c53bd->enter($__internal_589e8aa7f3f35600e521087d209e016d8e1f2cbc21348b096f171316507c53bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Vente:ajouterProduitVente.html.twig"));

        $__internal_64d6a13941c62c140179fe05ad2f0ba78b82388977430f69d5d992e0fb13c635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d6a13941c62c140179fe05ad2f0ba78b82388977430f69d5d992e0fb13c635->enter($__internal_64d6a13941c62c140179fe05ad2f0ba78b82388977430f69d5d992e0fb13c635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Vente:ajouterProduitVente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_589e8aa7f3f35600e521087d209e016d8e1f2cbc21348b096f171316507c53bd->leave($__internal_589e8aa7f3f35600e521087d209e016d8e1f2cbc21348b096f171316507c53bd_prof);

        
        $__internal_64d6a13941c62c140179fe05ad2f0ba78b82388977430f69d5d992e0fb13c635->leave($__internal_64d6a13941c62c140179fe05ad2f0ba78b82388977430f69d5d992e0fb13c635_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_ee25c07cbe20210ac28c34b3d2bdb1215a9f5b7631569587383d6af321f14ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee25c07cbe20210ac28c34b3d2bdb1215a9f5b7631569587383d6af321f14ea0->enter($__internal_ee25c07cbe20210ac28c34b3d2bdb1215a9f5b7631569587383d6af321f14ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d99c294d4f3cd1656521a823f42fa1b4f9a138724061d5e062b76b600e125923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99c294d4f3cd1656521a823f42fa1b4f9a138724061d5e062b76b600e125923->enter($__internal_d99c294d4f3cd1656521a823f42fa1b4f9a138724061d5e062b76b600e125923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_d99c294d4f3cd1656521a823f42fa1b4f9a138724061d5e062b76b600e125923->leave($__internal_d99c294d4f3cd1656521a823f42fa1b4f9a138724061d5e062b76b600e125923_prof);

        
        $__internal_ee25c07cbe20210ac28c34b3d2bdb1215a9f5b7631569587383d6af321f14ea0->leave($__internal_ee25c07cbe20210ac28c34b3d2bdb1215a9f5b7631569587383d6af321f14ea0_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_600065c1edf225de3e3cebafcddf8854b9b5f71d538e333e52f8ff8f3889c5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600065c1edf225de3e3cebafcddf8854b9b5f71d538e333e52f8ff8f3889c5ca->enter($__internal_600065c1edf225de3e3cebafcddf8854b9b5f71d538e333e52f8ff8f3889c5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d79dec67d96e749c9122f5b6e623013b92c15e2dd104d7b1ce132cfed35df7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79dec67d96e749c9122f5b6e623013b92c15e2dd104d7b1ce132cfed35df7cb->enter($__internal_d79dec67d96e749c9122f5b6e623013b92c15e2dd104d7b1ce132cfed35df7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "           <div class=\"box box-success\">
             <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Ajouter produit à la vente</h3>
                            <div class=\"pull-right\" >
                                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste");
        echo "\"  class=\"btn bg-olive btn-flat margin\">Liste des ventes</a>
                            </div>
                            <div class=\"pull-right\" >
                                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientvente_ajouter", array("idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente")))), "html", null, true);
        echo "\"  class=\"btn bg-navy btn-flat margin\">Client</a>
                            </div>
                 <div class=\"pull-right\" >
                     <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_vente_ajouter", array("idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente")))), "html", null, true);
        echo "\"  class=\"btn bg-maroon-active btn-flat margin\">TVA</a>
                     <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remise_vente_ajouter", array("idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente")))), "html", null, true);
        echo "\"  class=\"btn bg-purple-active btn-flat margin\">Remise</a>
                 </div>
             </div>
  
            <!-- /.box-header -->
          
            <div class=\"box-body\">
              ";
        // line 33
        if ((($context["result"] ?? $this->getContext($context, "result")) == 4)) {
            // line 34
            echo "                                <div class=\"alert alert-danger alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>La quantité demandée(";
            // line 36
            echo twig_escape_filter($this->env, ($context["quantiteDemande"] ?? $this->getContext($context, "quantiteDemande")), "html", null, true);
            echo ") est superieur à la quantité disponible (";
            echo twig_escape_filter($this->env, ($context["quantiteDisponible"] ?? $this->getContext($context, "quantiteDisponible")), "html", null, true);
            echo ").</strong> 
                                </div>
                                ";
        }
        // line 39
        echo "              <div class=\"row\">
                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Produit </label>
                  ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                      ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "prduit")));
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
              
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Quantité</label>
                             ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantiteAchat", array()), 'widget', array("attr" => array("class" => "form-control", "min" => "0", "placeholder" => "quantite")));
        echo "
                            <div class=\"pull-right\" >
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>  
                            ";
        // line 56
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

            <div class=\"box-body\">
              <p>La reference de la vente est <b>";
        // line 72
        echo twig_escape_filter($this->env, ($context["referenceFacture"] ?? $this->getContext($context, "referenceFacture")), "html", null, true);
        echo "</b> </p>
                ";
        // line 73
        if ((($context["nomClient"] ?? $this->getContext($context, "nomClient")) == "null")) {
            // line 74
            echo "                ";
        } else {
            // line 75
            echo "                    <div class=\"pull-right\" >
                        <p>Client :<b> ";
            // line 76
            echo twig_escape_filter($this->env, ($context["nomClient"] ?? $this->getContext($context, "nomClient")), "html", null, true);
            echo " </b></p>
                    </div>
                ";
        }
        // line 79
        echo "              <br>
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th></th>
                        <th>Désignation</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Montant</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produitAchatListe"] ?? $this->getContext($context, "produitAchatListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 92
            echo "                        <tr>
                            <td><a class=\"btn btn-danger\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produitvente_retirer", array("idVente" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-close\"></i></a></td>
                            <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomProduit", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "prixProduit", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "quantiteAchat", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 97
            echo twig_escape_filter($this->env, ($this->getAttribute($context["liste"], "prixProduit", array()) * $this->getAttribute($context["liste"], "quantiteAchat", array())), "html", null, true);
            echo " F</td>

          
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                </tbody>
            </table>

            <div class=\"row\">
                  <div class=\"col-md-9\"><p class=\"pull-right\"><b>Total HT = ";
        // line 106
        echo twig_escape_filter($this->env, ($context["montantTotal"] ?? $this->getContext($context, "montantTotal")), "html", null, true);
        echo " F CFA</b></p></div>
                  <div class=\"col-md-3\"></div>
            </div>

            <div class=\"row\">
                  <div class=\"col-md-9\"><p class=\"pull-right\"><b>Remise = ";
        // line 111
        echo twig_escape_filter($this->env, ($context["remise"] ?? $this->getContext($context, "remise")), "html", null, true);
        echo "%</b></p></div>
                  <div class=\"col-md-3\"></div>
            <div class=\"row\">
                  <div class=\"col-md-9\"><p class=\"pull-right\"><b>Montant de Remise = ";
        // line 114
        echo twig_escape_filter($this->env, ($context["montantRemise"] ?? $this->getContext($context, "montantRemise")), "html", null, true);
        echo " F CFA</b></p></div>
                  <div class=\"col-md-3\"></div>
            </div>
            </div>
                ";
        // line 118
        if ((($context["nouveauMontantTotal"] ?? $this->getContext($context, "nouveauMontantTotal")) == 0)) {
            // line 119
            echo "                <div class=\"row\">
                    <div class=\"col-md-9\"><p class=\"pull-right\"><b>Montant HT après Remise = ";
            // line 120
            echo twig_escape_filter($this->env, ($context["montantTotal"] ?? $this->getContext($context, "montantTotal")), "html", null, true);
            echo " F CFA</b></p></div>
                    <div class=\"col-md-3\"></div>
                </div>
                ";
        } else {
            // line 124
            echo "                <div class=\"row\">
                    <div class=\"col-md-9\"><p class=\"pull-right\"><b>Montant HT après Remise = ";
            // line 125
            echo twig_escape_filter($this->env, ($context["nouveauMontantTotal"] ?? $this->getContext($context, "nouveauMontantTotal")), "html", null, true);
            echo " F</b></p></div>
                    <div class=\"col-md-3\"></div>
                </div>
                ";
        }
        // line 129
        echo "                ";
        if ((($context["tva"] ?? $this->getContext($context, "tva")) == 100)) {
            // line 130
            echo "                    <div class=\"row\">
                        <div class=\"col-md-9\"><p class=\"pull-right\"><b>TVA (0%) : 0 F</b></p></div>
                        <div class=\"col-md-3\"></div>
                    </div>
                ";
        } else {
            // line 135
            echo "                    <div class=\"row\">
                        <div class=\"col-md-9\"><p class=\"pull-right\"><b>Tva ";
            // line 136
            echo twig_escape_filter($this->env, ($context["tva"] ?? $this->getContext($context, "tva")), "html", null, true);
            echo " %= ";
            echo twig_escape_filter($this->env, ($context["montantTva"] ?? $this->getContext($context, "montantTva")), "html", null, true);
            echo " F CFA</b></p></div>
                        <div class=\"col-md-3\"></div>
                    </div>
                ";
        }
        // line 140
        echo "            <div class=\"row\">
                  <div class=\"col-md-9\"><p class=\"pull-right\"><b>Total TTC = ";
        // line 141
        echo twig_escape_filter($this->env, ($context["montantTTC"] ?? $this->getContext($context, "montantTTC")), "html", null, true);
        echo " F CFA</b></p></div>
                  <div class=\"col-md-3\"></div>
            </div>

        </div>
        
        ";
        // line 147
        if (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statut", array()) == 0)) {
            // line 148
            echo "            <div class=\"pull-right\" >
                <a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_valider", array("idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente")))), "html", null, true);
            echo "\"  class=\"btn bg-olive btn-flat margin\">Valider la vente</a>
            </div>  
            
        ";
        } elseif (($this->getAttribute(        // line 152
($context["facture"] ?? $this->getContext($context, "facture")), "statut", array()) == 1)) {
            // line 153
            echo "            <div class=\"pull-right\" >
                <a href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimerachat_ajouter", array("idFacture" => ($context["idVente"] ?? $this->getContext($context, "idVente")))), "html", null, true);
            echo "\"  class=\"btn bg-primary btn-flat margin\">Imprimer</a>
            </div>
        ";
        }
        // line 157
        echo "
";
        
        $__internal_d79dec67d96e749c9122f5b6e623013b92c15e2dd104d7b1ce132cfed35df7cb->leave($__internal_d79dec67d96e749c9122f5b6e623013b92c15e2dd104d7b1ce132cfed35df7cb_prof);

        
        $__internal_600065c1edf225de3e3cebafcddf8854b9b5f71d538e333e52f8ff8f3889c5ca->leave($__internal_600065c1edf225de3e3cebafcddf8854b9b5f71d538e333e52f8ff8f3889c5ca_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Vente:ajouterProduitVente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 157,  337 => 154,  334 => 153,  332 => 152,  326 => 149,  323 => 148,  321 => 147,  312 => 141,  309 => 140,  300 => 136,  297 => 135,  290 => 130,  287 => 129,  280 => 125,  277 => 124,  270 => 120,  267 => 119,  265 => 118,  258 => 114,  252 => 111,  244 => 106,  238 => 102,  227 => 97,  223 => 96,  219 => 95,  215 => 94,  211 => 93,  208 => 92,  204 => 91,  190 => 79,  184 => 76,  181 => 75,  178 => 74,  176 => 73,  172 => 72,  153 => 56,  146 => 52,  135 => 44,  131 => 43,  125 => 39,  117 => 36,  113 => 34,  111 => 33,  101 => 26,  97 => 25,  91 => 22,  85 => 19,  79 => 15,  70 => 14,  50 => 3,  41 => 2,  11 => 1,);
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
           <div class=\"box box-success\">
             <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Ajouter produit à la vente</h3>
                            <div class=\"pull-right\" >
                                <a href=\"{{path('vente_liste')}}\"  class=\"btn bg-olive btn-flat margin\">Liste des ventes</a>
                            </div>
                            <div class=\"pull-right\" >
                                <a href=\"{{path('clientvente_ajouter', {'idVente': idVente})}}\"  class=\"btn bg-navy btn-flat margin\">Client</a>
                            </div>
                 <div class=\"pull-right\" >
                     <a href=\"{{path('tva_vente_ajouter', {'idVente': idVente})}}\"  class=\"btn bg-maroon-active btn-flat margin\">TVA</a>
                     <a href=\"{{path('remise_vente_ajouter', {'idVente': idVente})}}\"  class=\"btn bg-purple-active btn-flat margin\">Remise</a>
                 </div>
             </div>
  
            <!-- /.box-header -->
          
            <div class=\"box-body\">
              {% if result == 4 %}
                                <div class=\"alert alert-danger alert-dismissible\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    <strong>La quantité demandée({{quantiteDemande}}) est superieur à la quantité disponible ({{quantiteDisponible}}).</strong> 
                                </div>
                                {% endif %}
              <div class=\"row\">
                  <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Produit </label>
                  {{ form_start(form) }}
                      {{ form_widget(form.stock, {'attr': {'class': 'form-control', 'placeholder':'prduit'} }) }}
                  </div>
                  <!-- /.form-group -->
                </div>
              
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Quantité</label>
                             {{ form_widget(form.quantiteAchat, {'attr': {'class': 'form-control','min':'0' ,'placeholder':'quantite'} }) }}
                            <div class=\"pull-right\" >
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

            <div class=\"box-body\">
              <p>La reference de la vente est <b>{{ referenceFacture }}</b> </p>
                {% if nomClient == 'null' %}
                {% else %}
                    <div class=\"pull-right\" >
                        <p>Client :<b> {{ nomClient }} </b></p>
                    </div>
                {% endif %}
              <br>
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th></th>
                        <th>Désignation</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Montant</th>
                    </tr>
                </thead>
                <tbody>
                    {% for liste in produitAchatListe %}
                        <tr>
                            <td><a class=\"btn btn-danger\" href=\"{{ path('produitvente_retirer', {'idVente': liste.id}) }}\"><i class=\"fa fa-close\"></i></a></td>
                            <td>{{ liste.nomProduit }}</td>
                            <td>{{ liste.prixProduit }}</td>
                            <td>{{ liste.quantiteAchat }}</td>
                            <td>{{ liste.prixProduit * liste.quantiteAchat}} F</td>

          
                        </tr>
                    {%endfor%}
                </tbody>
            </table>

            <div class=\"row\">
                  <div class=\"col-md-9\"><p class=\"pull-right\"><b>Total HT = {{ montantTotal }} F CFA</b></p></div>
                  <div class=\"col-md-3\"></div>
            </div>

            <div class=\"row\">
                  <div class=\"col-md-9\"><p class=\"pull-right\"><b>Remise = {{ remise }}%</b></p></div>
                  <div class=\"col-md-3\"></div>
            <div class=\"row\">
                  <div class=\"col-md-9\"><p class=\"pull-right\"><b>Montant de Remise = {{ montantRemise }} F CFA</b></p></div>
                  <div class=\"col-md-3\"></div>
            </div>
            </div>
                {% if nouveauMontantTotal == 0 %}
                <div class=\"row\">
                    <div class=\"col-md-9\"><p class=\"pull-right\"><b>Montant HT après Remise = {{ montantTotal }} F CFA</b></p></div>
                    <div class=\"col-md-3\"></div>
                </div>
                {% else %}
                <div class=\"row\">
                    <div class=\"col-md-9\"><p class=\"pull-right\"><b>Montant HT après Remise = {{ nouveauMontantTotal }} F</b></p></div>
                    <div class=\"col-md-3\"></div>
                </div>
                {% endif %}
                {% if tva == 100 %}
                    <div class=\"row\">
                        <div class=\"col-md-9\"><p class=\"pull-right\"><b>TVA (0%) : 0 F</b></p></div>
                        <div class=\"col-md-3\"></div>
                    </div>
                {% else %}
                    <div class=\"row\">
                        <div class=\"col-md-9\"><p class=\"pull-right\"><b>Tva {{ tva }} %= {{ montantTva }} F CFA</b></p></div>
                        <div class=\"col-md-3\"></div>
                    </div>
                {% endif %}
            <div class=\"row\">
                  <div class=\"col-md-9\"><p class=\"pull-right\"><b>Total TTC = {{ montantTTC }} F CFA</b></p></div>
                  <div class=\"col-md-3\"></div>
            </div>

        </div>
        
        {% if facture.statut == 0 %}
            <div class=\"pull-right\" >
                <a href=\"{{path('vente_valider', {'idVente':idVente})}}\"  class=\"btn bg-olive btn-flat margin\">Valider la vente</a>
            </div>  
            
        {% elseif facture.statut == 1 %}
            <div class=\"pull-right\" >
                <a href=\"{{path('imprimerachat_ajouter', {'idFacture':idVente})}}\"  class=\"btn bg-primary btn-flat margin\">Imprimer</a>
            </div>
        {% endif %}

{% endblock %}
", "StockBundle:Vente:ajouterProduitVente.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/StockBundle/Resources/views/Vente/ajouterProduitVente.html.twig");
    }
}
