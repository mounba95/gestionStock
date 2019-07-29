<?php

/* StockBundle:Vente:recuVente.html.twig */
class __TwigTemplate_f8feaf40e2451006dc59db4e8b5b00182c170d2d7d3b3c32c55c3a350dbde836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:recuVente.html.twig", 1);
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
        $__internal_9f7cdd18e1d550fd021a219e7a0335b07c5c54e968079b43815410b006a2157a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7cdd18e1d550fd021a219e7a0335b07c5c54e968079b43815410b006a2157a->enter($__internal_9f7cdd18e1d550fd021a219e7a0335b07c5c54e968079b43815410b006a2157a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Vente:recuVente.html.twig"));

        $__internal_40debd256aada57113773aed4fbba7b3abf378befcb96bcf341734203ba6ae02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40debd256aada57113773aed4fbba7b3abf378befcb96bcf341734203ba6ae02->enter($__internal_40debd256aada57113773aed4fbba7b3abf378befcb96bcf341734203ba6ae02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Vente:recuVente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f7cdd18e1d550fd021a219e7a0335b07c5c54e968079b43815410b006a2157a->leave($__internal_9f7cdd18e1d550fd021a219e7a0335b07c5c54e968079b43815410b006a2157a_prof);

        
        $__internal_40debd256aada57113773aed4fbba7b3abf378befcb96bcf341734203ba6ae02->leave($__internal_40debd256aada57113773aed4fbba7b3abf378befcb96bcf341734203ba6ae02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_6678e5050872e5bf26fe0cda19c120feea59cd8436728735ac2e10665434955d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6678e5050872e5bf26fe0cda19c120feea59cd8436728735ac2e10665434955d->enter($__internal_6678e5050872e5bf26fe0cda19c120feea59cd8436728735ac2e10665434955d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5643946365f6405cc096aefbf2ac2ce60f92f372af35f1e7c3e4751f65fe7958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5643946365f6405cc096aefbf2ac2ce60f92f372af35f1e7c3e4751f65fe7958->enter($__internal_5643946365f6405cc096aefbf2ac2ce60f92f372af35f1e7c3e4751f65fe7958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "        <section class=\"content-header\">
            <h1>
                Facture
                <small></small>
                <div class=\"pull-right\">
                    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste", array("idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente")))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i> Retour</a>
                    <a href=\"\" class=\"btn btn-info\"  onclick=\"imprimer_page()\"><i class=\"fa fa-print\"></i> Imprimer</a>
                </div>
            </h1>

        </section>
    ";
        
        $__internal_5643946365f6405cc096aefbf2ac2ce60f92f372af35f1e7c3e4751f65fe7958->leave($__internal_5643946365f6405cc096aefbf2ac2ce60f92f372af35f1e7c3e4751f65fe7958_prof);

        
        $__internal_6678e5050872e5bf26fe0cda19c120feea59cd8436728735ac2e10665434955d->leave($__internal_6678e5050872e5bf26fe0cda19c120feea59cd8436728735ac2e10665434955d_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cf706fc65b4218f4bdaee8938db83025ee115dc8bf1cd422dc578042fcc70d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf706fc65b4218f4bdaee8938db83025ee115dc8bf1cd422dc578042fcc70d5->enter($__internal_9cf706fc65b4218f4bdaee8938db83025ee115dc8bf1cd422dc578042fcc70d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fea159fe9b3710624a0fb41f5a52e0cb46f7ad3ce89f180d1e70562beb94d945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea159fe9b3710624a0fb41f5a52e0cb46f7ad3ce89f180d1e70562beb94d945->enter($__internal_fea159fe9b3710624a0fb41f5a52e0cb46f7ad3ce89f180d1e70562beb94d945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <style>
    #dashboard{
        display:none;
    }  
    </style>
        <script type=\"text/javascript\">
            function imprimer_page()
            {
                window.print() ;
            }
        </script>
        <div class=\"pad margin no-print\">
      <div class=\"callout callout-info\" style=\"margin-bottom: 0!important;\">
        <h4><i class=\"fa fa-info\"></i> Note:</h4>
        Cette page répresente le réçu de vente, pour l'imprimer veuillez cliquer sur imprimer.
      </div>
    </div>

    <!-- Main content -->
    <section class=\"invoice\">
     
      <div class=\"row invoice-info\">
        <div class=\"col-sm-4 invoice-col\">
         ";
        // line 39
        if (($context["information"] ?? $this->getContext($context, "information"))) {
            // line 40
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/logos/" . $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "path", array()))), "html", null, true);
            echo "\" width=\"110px\" height=\"65px\" />
          <address>
          Tel : ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "cel", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "tel", array()), "html", null, true);
            echo " <br>
          Adresse : ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "adresse", array()), "html", null, true);
            echo "<br> 
          </address>
           ";
        }
        // line 46
        echo "        </div>
        <!-- /.col -->
        <div class=\"col-sm-4 invoice-col\">
        <b>Client</b>
          ";
        // line 50
        if ((($context["client"] ?? $this->getContext($context, "client")) == "null")) {
            // line 51
            echo "                    <div class=\"pull-left\" style=\"border-color:#0c0c; padding: 3px; width: 50%;\" >
                         
                    </div>
                ";
        } else {
            // line 55
            echo "
          <address>
            <strong>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "nomClient", array()), "html", null, true);
            echo " </strong><br>
            Téléphone: ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "numeroClient", array()), "html", null, true);
            echo "<br>
            Adresse: ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "adresseClient", array()), "html", null, true);
            echo "<br>
          </address>
           ";
        }
        // line 62
        echo "        </div>
        <!-- /.col -->
        <div class=\"col-sm-4 invoice-col\">
          <b>Réçu de vente N° ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "referenceFacture", array()), "html", null, true);
        echo "</b><br>
         <b>Date :</b> ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "dateFacture", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "<br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class=\"row\">
        <div class=\"col-xs-12 table-responsive\">
          <table class=\"table table-striped\">
            <thead>
                    <tr style=\"background-color: #7a869d;\">
                        <th>Désignation</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Montant</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produitAchatListe"] ?? $this->getContext($context, "produitAchatListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 86
            echo "                        <tr>
                            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomProduit", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "quantiteAchat", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "prixProduit", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 90
            echo twig_escape_filter($this->env, ($this->getAttribute($context["liste"], "prixProduit", array()) * $this->getAttribute($context["liste"], "quantiteAchat", array())), "html", null, true);
            echo "</td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
                    </tbody>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class=\"row\">
        <!-- accepted payments column -->
        <div class=\"col-xs-6\">
          
          <p class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;\">
             ";
        // line 108
        if (($context["information"] ?? $this->getContext($context, "information"))) {
            // line 109
            echo "         ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "message", array()), "html", null, true);
            echo " 
           ";
        }
        // line 111
        echo "          </p>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-6\">
          
          <div class=\"table-responsive\">
            <table class=\"table\">
              <tr>
                                    <th>Total HT</th>
                                    <th>";
        // line 120
        echo twig_escape_filter($this->env, ($context["montantTotal"] ?? $this->getContext($context, "montantTotal")), "html", null, true);
        echo " </th>
                                </tr>
                                ";
        // line 122
        if (($context["remise"] ?? $this->getContext($context, "remise"))) {
            // line 123
            echo "                                <tr>
                                    <th>Remise (";
            // line 124
            echo twig_escape_filter($this->env, ($context["remise"] ?? $this->getContext($context, "remise")), "html", null, true);
            echo "%)</th>
                                    <th>";
            // line 125
            echo twig_escape_filter($this->env, ($context["montantRemise"] ?? $this->getContext($context, "montantRemise")), "html", null, true);
            echo "</th>
                                </tr>
                                ";
        }
        // line 128
        echo "                                <tr>
                                    <th>
                                        TVA ";
        // line 130
        if ((($context["tva"] ?? $this->getContext($context, "tva")) == 100)) {
            // line 131
            echo "                                        (<b> 0%</b>)
                                        ";
        } else {
            // line 133
            echo "                                       (  ";
            echo twig_escape_filter($this->env, ($context["tva"] ?? $this->getContext($context, "tva")), "html", null, true);
            echo "% ):
                                    </th>
                                    <th>
                                        ";
            // line 136
            echo twig_escape_filter($this->env, ($context["montantTva"] ?? $this->getContext($context, "montantTva")), "html", null, true);
            echo " 
                                    </th>
                                    ";
        }
        // line 139
        echo "                                </tr>
                                <tr>
                                <th>Total TTC</th>
                                <th>";
        // line 142
        echo twig_escape_filter($this->env, ($context["montantTTC"] ?? $this->getContext($context, "montantTTC")), "html", null, true);
        echo " </th>
                                </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<table class=\"table\" >
                        <tr>
                            <td style=\"border-color: #0c0c0c; width: 50%\">
                            ";
        // line 153
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 154
            echo "             <p> AGENT : <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " </b> (Tel :";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
            echo " )</p>
                            ";
        }
        // line 156
        echo "                              
                            </td>
                             ";
        // line 158
        if (($context["information"] ?? $this->getContext($context, "information"))) {
            // line 159
            echo "                            <td style=\"border-color:  #0c0c0c; width: 50%\">
                                CLIENT <br> 
                            </td>
                            ";
        }
        // line 163
        echo "                        </tr>
                    </table>
      <!-- this row will not appear when printing -->
    </section>
<p>---------------------------------------------------------------------------------------------------------------------------------------- </p>
 <section class=\"invoice\">
     
      <div class=\"row invoice-info\">
        <div class=\"col-sm-4 invoice-col\">
         ";
        // line 172
        if (($context["information"] ?? $this->getContext($context, "information"))) {
            // line 173
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/logos/" . $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "path", array()))), "html", null, true);
            echo "\" width=\"110px\" height=\"65px\" />
          <address>
          Tel : ";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "cel", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "tel", array()), "html", null, true);
            echo " <br>
          Adresse : ";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "adresse", array()), "html", null, true);
            echo "<br> 
          </address>
           ";
        }
        // line 179
        echo "        </div>
        <!-- /.col -->
        <div class=\"col-sm-4 invoice-col\">
        <b>Client</b>
          ";
        // line 183
        if ((($context["client"] ?? $this->getContext($context, "client")) == "null")) {
            // line 184
            echo "                    <div class=\"pull-left\" style=\"border-color:#0c0c; padding: 3px; width: 50%;\" >
                         
                    </div>
                ";
        } else {
            // line 188
            echo "
          <address>
            <strong>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "nomClient", array()), "html", null, true);
            echo " </strong><br>
            Téléphone: ";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "numeroClient", array()), "html", null, true);
            echo "<br>
            Adresse: ";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "adresseClient", array()), "html", null, true);
            echo "<br>
          </address>
           ";
        }
        // line 195
        echo "        </div>
        <!-- /.col -->
        <div class=\"col-sm-4 invoice-col\">
          <b>Réçu de vente N° ";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "referenceFacture", array()), "html", null, true);
        echo "</b><br>
         <b>Date :</b> ";
        // line 199
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "dateFacture", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "<br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class=\"row\">
        <div class=\"col-xs-12 table-responsive\">
          <table class=\"table table-striped\">
            <thead>
                    <tr style=\"background-color: #7a869d;\">
                        <th>Désignation</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Montant</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produitAchatListe"] ?? $this->getContext($context, "produitAchatListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 219
            echo "                        <tr>
                            <td>";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomProduit", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "quantiteAchat", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "prixProduit", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 223
            echo twig_escape_filter($this->env, ($this->getAttribute($context["liste"], "prixProduit", array()) * $this->getAttribute($context["liste"], "quantiteAchat", array())), "html", null, true);
            echo "</td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "
                    </tbody>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class=\"row\">
        <!-- accepted payments column -->
        <div class=\"col-xs-6\">
          
          <p class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;\">
             ";
        // line 241
        if (($context["information"] ?? $this->getContext($context, "information"))) {
            // line 242
            echo "         ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "message", array()), "html", null, true);
            echo " 
           ";
        }
        // line 244
        echo "          </p>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-6\">
          
          <div class=\"table-responsive\">
            <table class=\"table\">
              <tr>
                                    <th>Total HT</th>
                                    <th>";
        // line 253
        echo twig_escape_filter($this->env, ($context["montantTotal"] ?? $this->getContext($context, "montantTotal")), "html", null, true);
        echo " </th>
                                </tr>
                                ";
        // line 255
        if (($context["remise"] ?? $this->getContext($context, "remise"))) {
            // line 256
            echo "                                <tr>
                                    <th>Remise (";
            // line 257
            echo twig_escape_filter($this->env, ($context["remise"] ?? $this->getContext($context, "remise")), "html", null, true);
            echo "%)</th>
                                    <th>";
            // line 258
            echo twig_escape_filter($this->env, ($context["montantRemise"] ?? $this->getContext($context, "montantRemise")), "html", null, true);
            echo "</th>
                                </tr>
                                ";
        }
        // line 261
        echo "                                <tr>
                                    <th>
                                        TVA ";
        // line 263
        if ((($context["tva"] ?? $this->getContext($context, "tva")) == 100)) {
            // line 264
            echo "                                        (<b> 0%</b>)
                                        ";
        } else {
            // line 266
            echo "                                       (  ";
            echo twig_escape_filter($this->env, ($context["tva"] ?? $this->getContext($context, "tva")), "html", null, true);
            echo "% ):
                                    </th>
                                    <th>
                                        ";
            // line 269
            echo twig_escape_filter($this->env, ($context["montantTva"] ?? $this->getContext($context, "montantTva")), "html", null, true);
            echo " 
                                    </th>
                                    ";
        }
        // line 272
        echo "                                </tr>
                                <tr>
                                <th>Total TTC</th>
                                <th>";
        // line 275
        echo twig_escape_filter($this->env, ($context["montantTTC"] ?? $this->getContext($context, "montantTTC")), "html", null, true);
        echo " </th>
                                </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<table class=\"table\" >
                        <tr>
                            <td style=\"border-color: #0c0c0c; width: 50%\">
                            ";
        // line 286
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 287
            echo "             <p> AGENT : <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " </b> (Tel :";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
            echo " )</p>
                            ";
        }
        // line 289
        echo "                              
                            </td>
                             ";
        // line 291
        if (($context["information"] ?? $this->getContext($context, "information"))) {
            // line 292
            echo "                            <td style=\"border-color:  #0c0c0c; width: 50%\">
                                CLIENT <br> 
                            </td>
                            ";
        }
        // line 296
        echo "                        </tr>
                    </table>
      <!-- this row will not appear when printing -->
    </section>

        
    ";
        
        $__internal_fea159fe9b3710624a0fb41f5a52e0cb46f7ad3ce89f180d1e70562beb94d945->leave($__internal_fea159fe9b3710624a0fb41f5a52e0cb46f7ad3ce89f180d1e70562beb94d945_prof);

        
        $__internal_9cf706fc65b4218f4bdaee8938db83025ee115dc8bf1cd422dc578042fcc70d5->leave($__internal_9cf706fc65b4218f4bdaee8938db83025ee115dc8bf1cd422dc578042fcc70d5_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Vente:recuVente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 296,  579 => 292,  577 => 291,  573 => 289,  563 => 287,  561 => 286,  547 => 275,  542 => 272,  536 => 269,  529 => 266,  525 => 264,  523 => 263,  519 => 261,  513 => 258,  509 => 257,  506 => 256,  504 => 255,  499 => 253,  488 => 244,  482 => 242,  480 => 241,  464 => 227,  454 => 223,  450 => 222,  446 => 221,  442 => 220,  439 => 219,  435 => 218,  413 => 199,  409 => 198,  404 => 195,  398 => 192,  394 => 191,  390 => 190,  386 => 188,  380 => 184,  378 => 183,  372 => 179,  366 => 176,  360 => 175,  354 => 173,  352 => 172,  341 => 163,  335 => 159,  333 => 158,  329 => 156,  319 => 154,  317 => 153,  303 => 142,  298 => 139,  292 => 136,  285 => 133,  281 => 131,  279 => 130,  275 => 128,  269 => 125,  265 => 124,  262 => 123,  260 => 122,  255 => 120,  244 => 111,  238 => 109,  236 => 108,  220 => 94,  210 => 90,  206 => 89,  202 => 88,  198 => 87,  195 => 86,  191 => 85,  169 => 66,  165 => 65,  160 => 62,  154 => 59,  150 => 58,  146 => 57,  142 => 55,  136 => 51,  134 => 50,  128 => 46,  122 => 43,  116 => 42,  110 => 40,  108 => 39,  83 => 16,  74 => 15,  57 => 8,  50 => 3,  41 => 2,  11 => 1,);
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
                Facture
                <small></small>
                <div class=\"pull-right\">
                    <a href=\"{{path('vente_liste', {'idVente': idVente})}}\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i> Retour</a>
                    <a href=\"\" class=\"btn btn-info\"  onclick=\"imprimer_page()\"><i class=\"fa fa-print\"></i> Imprimer</a>
                </div>
            </h1>

        </section>
    {%endblock%}
    {%block body%}
    <style>
    #dashboard{
        display:none;
    }  
    </style>
        <script type=\"text/javascript\">
            function imprimer_page()
            {
                window.print() ;
            }
        </script>
        <div class=\"pad margin no-print\">
      <div class=\"callout callout-info\" style=\"margin-bottom: 0!important;\">
        <h4><i class=\"fa fa-info\"></i> Note:</h4>
        Cette page répresente le réçu de vente, pour l'imprimer veuillez cliquer sur imprimer.
      </div>
    </div>

    <!-- Main content -->
    <section class=\"invoice\">
     
      <div class=\"row invoice-info\">
        <div class=\"col-sm-4 invoice-col\">
         {% if information %}
          <img src=\"{{ asset('uploads/logos/'~information.path) }}\" width=\"110px\" height=\"65px\" />
          <address>
          Tel : {{ information.cel }} / {{ information.tel }} <br>
          Adresse : {{ information.adresse }}<br> 
          </address>
           {% endif %}
        </div>
        <!-- /.col -->
        <div class=\"col-sm-4 invoice-col\">
        <b>Client</b>
          {% if client == 'null' %}
                    <div class=\"pull-left\" style=\"border-color:#0c0c; padding: 3px; width: 50%;\" >
                         
                    </div>
                {% else %}

          <address>
            <strong>{{ client.nomClient }} </strong><br>
            Téléphone: {{ client.numeroClient }}<br>
            Adresse: {{ client.adresseClient }}<br>
          </address>
           {% endif %}
        </div>
        <!-- /.col -->
        <div class=\"col-sm-4 invoice-col\">
          <b>Réçu de vente N° {{ facture.referenceFacture }}</b><br>
         <b>Date :</b> {{ facture.dateFacture |date('d-m-Y H:i:s')}}<br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class=\"row\">
        <div class=\"col-xs-12 table-responsive\">
          <table class=\"table table-striped\">
            <thead>
                    <tr style=\"background-color: #7a869d;\">
                        <th>Désignation</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Montant</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for liste in produitAchatListe %}
                        <tr>
                            <td>{{ liste.nomProduit }}</td>
                            <td>{{ liste.quantiteAchat }}</td>
                            <td>{{ liste.prixProduit }}</td>
                            <td>{{ liste.prixProduit * liste.quantiteAchat}}</td>

                        </tr>
                    {%endfor%}

                    </tbody>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class=\"row\">
        <!-- accepted payments column -->
        <div class=\"col-xs-6\">
          
          <p class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;\">
             {% if information %}
         {{ information.message }} 
           {% endif %}
          </p>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-6\">
          
          <div class=\"table-responsive\">
            <table class=\"table\">
              <tr>
                                    <th>Total HT</th>
                                    <th>{{ montantTotal }} </th>
                                </tr>
                                {% if remise %}
                                <tr>
                                    <th>Remise ({{ remise }}%)</th>
                                    <th>{{ montantRemise }}</th>
                                </tr>
                                {% endif %}
                                <tr>
                                    <th>
                                        TVA {% if tva == 100 %}
                                        (<b> 0%</b>)
                                        {% else %}
                                       (  {{ tva }}% ):
                                    </th>
                                    <th>
                                        {{ montantTva }} 
                                    </th>
                                    {% endif %}
                                </tr>
                                <tr>
                                <th>Total TTC</th>
                                <th>{{ montantTTC }} </th>
                                </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<table class=\"table\" >
                        <tr>
                            <td style=\"border-color: #0c0c0c; width: 50%\">
                            {% if app.user %}
             <p> AGENT : <b>{{ app.user.nom }} {{ app.user.prenom }} </b> (Tel :{{ app.user.telephone }} )</p>
                            {% endif %}
                              
                            </td>
                             {% if information %}
                            <td style=\"border-color:  #0c0c0c; width: 50%\">
                                CLIENT <br> 
                            </td>
                            {% endif %}
                        </tr>
                    </table>
      <!-- this row will not appear when printing -->
    </section>
<p>---------------------------------------------------------------------------------------------------------------------------------------- </p>
 <section class=\"invoice\">
     
      <div class=\"row invoice-info\">
        <div class=\"col-sm-4 invoice-col\">
         {% if information %}
          <img src=\"{{ asset('uploads/logos/'~information.path) }}\" width=\"110px\" height=\"65px\" />
          <address>
          Tel : {{ information.cel }} / {{ information.tel }} <br>
          Adresse : {{ information.adresse }}<br> 
          </address>
           {% endif %}
        </div>
        <!-- /.col -->
        <div class=\"col-sm-4 invoice-col\">
        <b>Client</b>
          {% if client == 'null' %}
                    <div class=\"pull-left\" style=\"border-color:#0c0c; padding: 3px; width: 50%;\" >
                         
                    </div>
                {% else %}

          <address>
            <strong>{{ client.nomClient }} </strong><br>
            Téléphone: {{ client.numeroClient }}<br>
            Adresse: {{ client.adresseClient }}<br>
          </address>
           {% endif %}
        </div>
        <!-- /.col -->
        <div class=\"col-sm-4 invoice-col\">
          <b>Réçu de vente N° {{ facture.referenceFacture }}</b><br>
         <b>Date :</b> {{ facture.dateFacture |date('d-m-Y H:i:s')}}<br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class=\"row\">
        <div class=\"col-xs-12 table-responsive\">
          <table class=\"table table-striped\">
            <thead>
                    <tr style=\"background-color: #7a869d;\">
                        <th>Désignation</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Montant</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for liste in produitAchatListe %}
                        <tr>
                            <td>{{ liste.nomProduit }}</td>
                            <td>{{ liste.quantiteAchat }}</td>
                            <td>{{ liste.prixProduit }}</td>
                            <td>{{ liste.prixProduit * liste.quantiteAchat}}</td>

                        </tr>
                    {%endfor%}

                    </tbody>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class=\"row\">
        <!-- accepted payments column -->
        <div class=\"col-xs-6\">
          
          <p class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;\">
             {% if information %}
         {{ information.message }} 
           {% endif %}
          </p>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-6\">
          
          <div class=\"table-responsive\">
            <table class=\"table\">
              <tr>
                                    <th>Total HT</th>
                                    <th>{{ montantTotal }} </th>
                                </tr>
                                {% if remise %}
                                <tr>
                                    <th>Remise ({{ remise }}%)</th>
                                    <th>{{ montantRemise }}</th>
                                </tr>
                                {% endif %}
                                <tr>
                                    <th>
                                        TVA {% if tva == 100 %}
                                        (<b> 0%</b>)
                                        {% else %}
                                       (  {{ tva }}% ):
                                    </th>
                                    <th>
                                        {{ montantTva }} 
                                    </th>
                                    {% endif %}
                                </tr>
                                <tr>
                                <th>Total TTC</th>
                                <th>{{ montantTTC }} </th>
                                </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<table class=\"table\" >
                        <tr>
                            <td style=\"border-color: #0c0c0c; width: 50%\">
                            {% if app.user %}
             <p> AGENT : <b>{{ app.user.nom }} {{ app.user.prenom }} </b> (Tel :{{ app.user.telephone }} )</p>
                            {% endif %}
                              
                            </td>
                             {% if information %}
                            <td style=\"border-color:  #0c0c0c; width: 50%\">
                                CLIENT <br> 
                            </td>
                            {% endif %}
                        </tr>
                    </table>
      <!-- this row will not appear when printing -->
    </section>

        
    {% endblock %}
", "StockBundle:Vente:recuVente.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/StockBundle/Resources/views/Vente/recuVente.html.twig");
    }
}
