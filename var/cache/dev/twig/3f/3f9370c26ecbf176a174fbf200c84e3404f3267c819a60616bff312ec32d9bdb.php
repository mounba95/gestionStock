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

/* StockBundle:Vente:recuversement.html.twig */
class __TwigTemplate_f727d3b05325e012b52a4dc5b1f5a2db9f31fd84a7f29c02a30a45f47385c707 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:recuversement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:recuversement.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:recuversement.html.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h1>
            Facture
            <small></small>
            <div class=\"pull-right\">
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("versement_vente_ajouter", ["idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente"))]), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i> Retour</a>
                <a href=\"\" class=\"btn btn-info\"  onclick=\"imprimer_page()\"><i class=\"fa fa-print\"></i> Imprimer</a>
            </div>
        </h1>
    </section>
     <style>
        #dashboard{
            display:none;
        }
       
        table, td, th, tr {
            border: 1px solid black;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
    <script type=\"text/javascript\">
        function imprimer_page()
        {
            window.print() ;
        }
    </script>
   
     <section class=\"invoice\">
       <div class=\"row\">
            <div class=\"col-sm-2 invoice-col\">
                ";
        // line 36
        if (($context["information"] ?? $this->getContext($context, "information"))) {
            // line 37
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/logos/" . $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "path", []))), "html", null, true);
            echo "\" width=\"160px\" height=\"85px\" />
                ";
        }
        // line 39
        echo "
            </div>
           
            <!-- /.col -->
            <div class=\"col-sm-6 invoice-col\">
                <div style=\"border: 2px solid black; padding: 2px; border-radius: 7px; margin-bottom: 1px; padding-left: 8px;\" >
                    Réçu de vente N°<b>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "referenceFacture", []), "html", null, true);
        echo "</b><br> Date :<b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "dateFacture", []), "d-m-Y H:i:s"), "html", null, true);
        echo "</b> <br>
                    ";
        // line 46
        if (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statutVersement", []) == 2)) {
            // line 47
            echo "                              <b> Payé </b>
                            ";
        } else {
            // line 49
            echo "                                <b>En cours de paiement</b>
                            ";
        }
        // line 51
        echo "                </div>
            </div>
        </div>
       
        <br>
       
        <div class=\"row\">

            <div class=\"col-xs-12 table-responsive\">
                ";
        // line 60
        if ((($context["client"] ?? $this->getContext($context, "client")) == "null")) {
            // line 61
            echo "
                ";
        } else {
            // line 63
            echo "
                    <div style=\"border: 2px solid black; padding-left: 20px; border-radius: 7px;\">
                        <b>Client :</b>
                        <strong>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "nomClient", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "referenceClient", []), "html", null, true);
            echo " </strong> &nbsp;
                        <b>Téléphone:</b> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "numeroClient", []), "html", null, true);
            echo "&nbsp;
                        <b>Adresse: </b>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "adresseClient", []), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 71
        echo "<table  class=\"table\">

                     <tr>
                        <th style=\"border: 1px solid black;\">
                            Montant total à verser :
                            ";
        // line 76
        echo twig_escape_filter($this->env, ($context["montantTotal"] ?? $this->getContext($context, "montantTotal")), "html", null, true);
        echo "
                        </th>
                    
                        <th>
                            Montant total versé :
                       ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "montantVerseFacture", []), "html", null, true);
        echo "
                        </th>
                   
                        <th>
                            Montant à completer :
                        ";
        // line 86
        echo twig_escape_filter($this->env, (($context["montantTotal"] ?? $this->getContext($context, "montantTotal")) - $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "montantVerseFacture", [])), "html", null, true);
        echo "
                        </td>
                    </tr>
                                    
                </table>

                 <div class=\"row\">

            <div class=\"col-xs-12 table-responsive\">
              
                <table class=\"table\" style=\"margin-top: 2px;\">
                    <thead>
                    <tr style=\"background-color: #7a869d;\">
                        <th style=\"border: 1px solid black; \">Désignation</th>
                        <th style=\"border: 1px solid black; \">Quantité</th>
                        <th style=\"border: 1px solid black; \">Prix unitaire</th>
                        <th style=\"border: 1px solid black; \">Montant</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produitAchatListe"] ?? $this->getContext($context, "produitAchatListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 107
            echo "                        <tr>
                            <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomProduit", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "quantiteAchat", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "prixProduit", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 111
            echo twig_escape_filter($this->env, ($this->getAttribute($context["liste"], "prixProduit", []) * $this->getAttribute($context["liste"], "quantiteAchat", [])), "html", null, true);
            echo "</td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
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
        // line 128
        if (($context["information"] ?? $this->getContext($context, "information"))) {
            // line 129
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "message", []), "html", null, true);
            echo "
                    ";
        }
        // line 131
        echo "                </p>
            </div>
            <!-- /.col -->
            <div class=\"col-xs-6\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <th style=\"border: 1px solid black; \">Montant total </th>
                        <th style=\"border: 1px solid black; \">";
        // line 138
        echo twig_escape_filter($this->env, ($context["montantTotal"] ?? $this->getContext($context, "montantTotal")), "html", null, true);
        echo " </th>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
  <table class=\"table\" >
            <tr>
                <td style=\"border-color: #fff; width: 50%\">
                    ";
        // line 151
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 152
            echo "                        <p> AGENT : <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "nom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "prenom", []), "html", null, true);
            echo " </b> (Tel :";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "telephone", []), "html", null, true);
            echo " )</p>
                    ";
        }
        // line 154
        echo "
                </td>
                ";
        // line 156
        if (($context["information"] ?? $this->getContext($context, "information"))) {
            // line 157
            echo "                    <td style=\"border-color:  #fff; width: 50%\">
                        CLIENT <br>
                    </td>
                ";
        }
        // line 161
        echo "            </tr>
        </table>
 <p>------------------------------------------------------------------------------------------------------------------------------------------- </p>

 <div class=\"row\">
            <div class=\"col-sm-2 invoice-col\">
                ";
        // line 167
        if (($context["information"] ?? $this->getContext($context, "information"))) {
            // line 168
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/logos/" . $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "path", []))), "html", null, true);
            echo "\" width=\"160px\" height=\"85px\" />
                ";
        }
        // line 170
        echo "
            </div>
           
            <!-- /.col -->
            <div class=\"col-sm-6 invoice-col\">
                <div style=\"border: 2px solid black; padding: 2px; border-radius: 7px; margin-bottom: 1px; padding-left: 8px;\" >
                    Réçu de vente N°<b>";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "referenceFacture", []), "html", null, true);
        echo "</b><br> Date :<b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "dateFacture", []), "d-m-Y H:i:s"), "html", null, true);
        echo "</b> 
                    <br>
                    ";
        // line 178
        if (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statutVersement", []) == 2)) {
            // line 179
            echo "                              <b> Payé </b>
                            ";
        } else {
            // line 181
            echo "                                <b>En cours de paiement</b>
                            ";
        }
        // line 183
        echo "                </div>
            </div>
        </div>
       
        <br>
       
        <div class=\"row\">

            <div class=\"col-xs-12 table-responsive\">
                ";
        // line 192
        if ((($context["client"] ?? $this->getContext($context, "client")) == "null")) {
            // line 193
            echo "
                ";
        } else {
            // line 195
            echo "
                    <div style=\"border: 2px solid black; padding-left: 20px; border-radius: 7px;\">
                        <b>Client :</b>
                        <strong>";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "nomClient", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "referenceClient", []), "html", null, true);
            echo " </strong> &nbsp;
                        <b>Téléphone:</b> ";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "numeroClient", []), "html", null, true);
            echo "&nbsp;
                        <b>Adresse: </b>";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "adresseClient", []), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 203
        echo "<table  class=\"table\">

                     <tr>
                        <th style=\"border: 1px solid black;\">
                            Montant total à verser :
                            ";
        // line 208
        echo twig_escape_filter($this->env, ($context["montantTotal"] ?? $this->getContext($context, "montantTotal")), "html", null, true);
        echo "
                        </th>
                    
                        <th>
                            Montant total versé :
                       ";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "montantVerseFacture", []), "html", null, true);
        echo "
                        </th>
                   
                        <th>
                            Montant à completer :
                        ";
        // line 218
        echo twig_escape_filter($this->env, (($context["montantTotal"] ?? $this->getContext($context, "montantTotal")) - $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "montantVerseFacture", [])), "html", null, true);
        echo "
                        </td>
                    </tr>
                    
                   
                </table>

                 <div class=\"row\">

            <div class=\"col-xs-12 table-responsive\">
              
                <table class=\"table\" style=\"margin-top: 2px;\">
                    <thead>
                    <tr style=\"background-color: #7a869d;\">
                        <th style=\"border: 1px solid black; \">Désignation</th>
                        <th style=\"border: 1px solid black; \">Quantité</th>
                        <th style=\"border: 1px solid black; \">Prix unitaire</th>
                        <th style=\"border: 1px solid black; \">Montant</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produitAchatListe"] ?? $this->getContext($context, "produitAchatListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 240
            echo "                        <tr>
                            <td>";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomProduit", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 242
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "quantiteAchat", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "prixProduit", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 244
            echo twig_escape_filter($this->env, ($this->getAttribute($context["liste"], "prixProduit", []) * $this->getAttribute($context["liste"], "quantiteAchat", [])), "html", null, true);
            echo "</td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "
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
        // line 261
        if (($context["information"] ?? $this->getContext($context, "information"))) {
            // line 262
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["information"] ?? $this->getContext($context, "information")), "message", []), "html", null, true);
            echo "
                    ";
        }
        // line 264
        echo "                </p>
            </div>
            <!-- /.col -->
            <div class=\"col-xs-6\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <th style=\"border: 1px solid black; \">Montant total </th>
                        <th style=\"border: 1px solid black; \">";
        // line 271
        echo twig_escape_filter($this->env, ($context["montantTotal"] ?? $this->getContext($context, "montantTotal")), "html", null, true);
        echo " </th>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
  <table class=\"table\" >
            <tr>
                <td style=\"border-color: #fff; width: 50%\">
                    ";
        // line 284
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 285
            echo "                        <p> AGENT : <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "nom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "prenom", []), "html", null, true);
            echo " </b> (Tel :";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "telephone", []), "html", null, true);
            echo " )</p>
                    ";
        }
        // line 287
        echo "
                </td>
                ";
        // line 289
        if (($context["information"] ?? $this->getContext($context, "information"))) {
            // line 290
            echo "                    <td style=\"border-color:  #fff; width: 50%\">
                        CLIENT <br>
                    </td>
                ";
        }
        // line 294
        echo "            </tr>
        </table>
         <p>--------------------------------------------------------------------------------------------------------------------------------------------- </p>
        <p>Réçu de vente N°<b>";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "referenceFacture", []), "html", null, true);
        echo "</b>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Date :<b> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "dateFacture", []), "d-m-Y H:i:s"), "html", null, true);
        echo "</b>  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp    Montant Total :<b> ";
        echo twig_escape_filter($this->env, ($context["montantTotal"] ?? $this->getContext($context, "montantTotal")), "html", null, true);
        echo " </b> </p>

    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Vente:recuversement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 297,  559 => 294,  553 => 290,  551 => 289,  547 => 287,  537 => 285,  535 => 284,  519 => 271,  510 => 264,  504 => 262,  502 => 261,  487 => 248,  477 => 244,  473 => 243,  469 => 242,  465 => 241,  462 => 240,  458 => 239,  434 => 218,  426 => 213,  418 => 208,  411 => 203,  405 => 200,  401 => 199,  395 => 198,  390 => 195,  386 => 193,  384 => 192,  373 => 183,  369 => 181,  365 => 179,  363 => 178,  356 => 176,  348 => 170,  342 => 168,  340 => 167,  332 => 161,  326 => 157,  324 => 156,  320 => 154,  310 => 152,  308 => 151,  292 => 138,  283 => 131,  277 => 129,  275 => 128,  260 => 115,  250 => 111,  246 => 110,  242 => 109,  238 => 108,  235 => 107,  231 => 106,  208 => 86,  200 => 81,  192 => 76,  185 => 71,  179 => 68,  175 => 67,  169 => 66,  164 => 63,  160 => 61,  158 => 60,  147 => 51,  143 => 49,  139 => 47,  137 => 46,  131 => 45,  123 => 39,  117 => 37,  115 => 36,  102 => 25,  93 => 24,  68 => 8,  61 => 3,  52 => 2,  30 => 1,);
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
            Facture
            <small></small>
            <div class=\"pull-right\">
                <a href=\"{{path('versement_vente_ajouter', {'idVente': idVente})}}\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\"></i> Retour</a>
                <a href=\"\" class=\"btn btn-info\"  onclick=\"imprimer_page()\"><i class=\"fa fa-print\"></i> Imprimer</a>
            </div>
        </h1>
    </section>
     <style>
        #dashboard{
            display:none;
        }
       
        table, td, th, tr {
            border: 1px solid black;
        }
    </style>
{%endblock%}

{%block body%}

    <script type=\"text/javascript\">
        function imprimer_page()
        {
            window.print() ;
        }
    </script>
   
     <section class=\"invoice\">
       <div class=\"row\">
            <div class=\"col-sm-2 invoice-col\">
                {% if information %}
                    <img src=\"{{ asset('uploads/logos/'~information.path) }}\" width=\"160px\" height=\"85px\" />
                {% endif %}

            </div>
           
            <!-- /.col -->
            <div class=\"col-sm-6 invoice-col\">
                <div style=\"border: 2px solid black; padding: 2px; border-radius: 7px; margin-bottom: 1px; padding-left: 8px;\" >
                    Réçu de vente N°<b>{{ facture.referenceFacture }}</b><br> Date :<b>{{ facture.dateFacture |date('d-m-Y H:i:s')}}</b> <br>
                    {% if facture.statutVersement == 2 %}
                              <b> Payé </b>
                            {% else %}
                                <b>En cours de paiement</b>
                            {% endif %}
                </div>
            </div>
        </div>
       
        <br>
       
        <div class=\"row\">

            <div class=\"col-xs-12 table-responsive\">
                {% if client == 'null' %}

                {% else %}

                    <div style=\"border: 2px solid black; padding-left: 20px; border-radius: 7px;\">
                        <b>Client :</b>
                        <strong>{{ client.nomClient }} - {{ client.referenceClient }} </strong> &nbsp;
                        <b>Téléphone:</b> {{ client.numeroClient }}&nbsp;
                        <b>Adresse: </b>{{ client.adresseClient }}
                    </div>
                {% endif %}
<table  class=\"table\">

                     <tr>
                        <th style=\"border: 1px solid black;\">
                            Montant total à verser :
                            {{ montantTotal }}
                        </th>
                    
                        <th>
                            Montant total versé :
                       {{ facture.montantVerseFacture }}
                        </th>
                   
                        <th>
                            Montant à completer :
                        {{montantTotal - facture.montantVerseFacture }}
                        </td>
                    </tr>
                                    
                </table>

                 <div class=\"row\">

            <div class=\"col-xs-12 table-responsive\">
              
                <table class=\"table\" style=\"margin-top: 2px;\">
                    <thead>
                    <tr style=\"background-color: #7a869d;\">
                        <th style=\"border: 1px solid black; \">Désignation</th>
                        <th style=\"border: 1px solid black; \">Quantité</th>
                        <th style=\"border: 1px solid black; \">Prix unitaire</th>
                        <th style=\"border: 1px solid black; \">Montant</th>
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
                        <th style=\"border: 1px solid black; \">Montant total </th>
                        <th style=\"border: 1px solid black; \">{{ montantTotal }} </th>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
  <table class=\"table\" >
            <tr>
                <td style=\"border-color: #fff; width: 50%\">
                    {% if app.user %}
                        <p> AGENT : <b>{{ app.user.nom }} {{ app.user.prenom }} </b> (Tel :{{ app.user.telephone }} )</p>
                    {% endif %}

                </td>
                {% if information %}
                    <td style=\"border-color:  #fff; width: 50%\">
                        CLIENT <br>
                    </td>
                {% endif %}
            </tr>
        </table>
 <p>------------------------------------------------------------------------------------------------------------------------------------------- </p>

 <div class=\"row\">
            <div class=\"col-sm-2 invoice-col\">
                {% if information %}
                    <img src=\"{{ asset('uploads/logos/'~information.path) }}\" width=\"160px\" height=\"85px\" />
                {% endif %}

            </div>
           
            <!-- /.col -->
            <div class=\"col-sm-6 invoice-col\">
                <div style=\"border: 2px solid black; padding: 2px; border-radius: 7px; margin-bottom: 1px; padding-left: 8px;\" >
                    Réçu de vente N°<b>{{ facture.referenceFacture }}</b><br> Date :<b>{{ facture.dateFacture |date('d-m-Y H:i:s')}}</b> 
                    <br>
                    {% if facture.statutVersement == 2 %}
                              <b> Payé </b>
                            {% else %}
                                <b>En cours de paiement</b>
                            {% endif %}
                </div>
            </div>
        </div>
       
        <br>
       
        <div class=\"row\">

            <div class=\"col-xs-12 table-responsive\">
                {% if client == 'null' %}

                {% else %}

                    <div style=\"border: 2px solid black; padding-left: 20px; border-radius: 7px;\">
                        <b>Client :</b>
                        <strong>{{ client.nomClient }} - {{ client.referenceClient }} </strong> &nbsp;
                        <b>Téléphone:</b> {{ client.numeroClient }}&nbsp;
                        <b>Adresse: </b>{{ client.adresseClient }}
                    </div>
                {% endif %}
<table  class=\"table\">

                     <tr>
                        <th style=\"border: 1px solid black;\">
                            Montant total à verser :
                            {{ montantTotal }}
                        </th>
                    
                        <th>
                            Montant total versé :
                       {{ facture.montantVerseFacture }}
                        </th>
                   
                        <th>
                            Montant à completer :
                        {{montantTotal - facture.montantVerseFacture }}
                        </td>
                    </tr>
                    
                   
                </table>

                 <div class=\"row\">

            <div class=\"col-xs-12 table-responsive\">
              
                <table class=\"table\" style=\"margin-top: 2px;\">
                    <thead>
                    <tr style=\"background-color: #7a869d;\">
                        <th style=\"border: 1px solid black; \">Désignation</th>
                        <th style=\"border: 1px solid black; \">Quantité</th>
                        <th style=\"border: 1px solid black; \">Prix unitaire</th>
                        <th style=\"border: 1px solid black; \">Montant</th>
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
                        <th style=\"border: 1px solid black; \">Montant total </th>
                        <th style=\"border: 1px solid black; \">{{ montantTotal }} </th>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
  <table class=\"table\" >
            <tr>
                <td style=\"border-color: #fff; width: 50%\">
                    {% if app.user %}
                        <p> AGENT : <b>{{ app.user.nom }} {{ app.user.prenom }} </b> (Tel :{{ app.user.telephone }} )</p>
                    {% endif %}

                </td>
                {% if information %}
                    <td style=\"border-color:  #fff; width: 50%\">
                        CLIENT <br>
                    </td>
                {% endif %}
            </tr>
        </table>
         <p>--------------------------------------------------------------------------------------------------------------------------------------------- </p>
        <p>Réçu de vente N°<b>{{ facture.referenceFacture }}</b>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Date :<b> {{ facture.dateFacture |date('d-m-Y H:i:s')}}</b>  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp    Montant Total :<b> {{ montantTotal }} </b> </p>

    </section>
{% endblock %}
", "StockBundle:Vente:recuversement.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\StockBundle/Resources/views/Vente/recuversement.html.twig");
    }
}
