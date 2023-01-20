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

/* StockBundle:Vente:ajouterProduitVente.html.twig */
class __TwigTemplate_c51dd00c049ebe40bb785d5ca89389a30e2710c777178e5f9cef1811b2a1e26e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:ajouterProduitVente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:ajouterProduitVente.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:ajouterProduitVente.html.twig", 1);
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
        echo "        <section class=\"content-header\">
            <h1>
                Vente
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
        echo "        <div class=\"box box-success\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Ajouter produit à la vente</h3>
                ";
        // line 18
        if (((($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 1) && ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 2)) && (($context["nomClient"] ?? $this->getContext($context, "nomClient")) != "null"))) {
            // line 19
            echo "                    <div class=\"pull-right\" >
                       <a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste");
            echo "\"  class=\"btn bg-olive btn-flat margin\">Liste des ventes</a>
                    </div>
                ";
        } elseif ((($this->getAttribute(        // line 22
($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 1) && ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 1))) {
            // line 23
            echo "                    <div class=\"pull-right\">
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientvente_ajouter", ["idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente"))]), "html", null, true);
            echo "\"  class=\"btn bg-navy btn-flat margin\">Client</a>
                    </div>
                ";
        } elseif (((($this->getAttribute(        // line 26
($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 0) && ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 1)) || (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 0) && ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 2)))) {
            // line 27
            echo "                    <div class=\"pull-right\" >
                        <a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste");
            echo "\"  class=\"btn bg-olive btn-flat margin\">Liste des ventes</a>
                    </div>
                     <div class=\"pull-right\" >
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modepaiement_vente_ajouter", ["idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente"))]), "html", null, true);
            echo "\"  class=\"btn bg-purple-active btn-flat margin\">Mode de paiement</a>
                    </div>
                      <div class=\"pull-right\">
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientvente_ajouter", ["idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente"))]), "html", null, true);
            echo "\"  class=\"btn bg-navy btn-flat margin\">Client</a>
                    </div>
                ";
        }
        // line 37
        echo "            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                ";
        // line 42
        if ((($context["result"] ?? $this->getContext($context, "result")) == 4)) {
            // line 43
            echo "                    <div class=\"alert alert-danger alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>La quantité demandée(";
            // line 45
            echo twig_escape_filter($this->env, ($context["quantiteDemande"] ?? $this->getContext($context, "quantiteDemande")), "html", null, true);
            echo ") est superieur à la quantité disponible (";
            echo twig_escape_filter($this->env, ($context["quantiteDisponible"] ?? $this->getContext($context, "quantiteDisponible")), "html", null, true);
            echo ").</strong>
                    </div>
                ";
        }
        // line 48
        echo "                   ";
        if (((($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 1) && (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 2) || ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 1))) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 49
            echo "                    ";
        } else {
            // line 50
            echo "                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Produit </label>
                            ";
            // line 54
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
                            ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "prduit"]]);
            echo "
                        </div>
                        <!-- /.form-group -->
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Quantité</label>
                            ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantiteAchat", []), 'widget', ["attr" => ["class" => "form-control", "min" => "0", "placeholder" => "quantite"]]);
            echo "
                            <div class=\"pull-left\" >
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>
                            ";
            // line 67
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
                        </div>
                        <!-- /.form-group -->
                    </div>

                    <!-- /.col -->
                    <!-- /.row -->
                </div>
                ";
        }
        // line 76
        echo "                <!-- /.box-body -->
                <div class=\"box-footer\">

                </div>
            </div>
        </div>

        <div class=\"box-body\">
            <table class=\"table\">
                <tr class=\"success\">
                    <td><p>Référence vente :<b>";
        // line 86
        echo twig_escape_filter($this->env, ($context["referenceFacture"] ?? $this->getContext($context, "referenceFacture")), "html", null, true);
        echo "</b> </td>
                    <td>
                        Client :
                        ";
        // line 89
        if ((($context["nomClient"] ?? $this->getContext($context, "nomClient")) == "null")) {
            // line 90
            echo "                        ";
        } else {
            // line 91
            echo "                            <b>  ";
            echo twig_escape_filter($this->env, ($context["nomClient"] ?? $this->getContext($context, "nomClient")), "html", null, true);
            echo "</b>
                        ";
        }
        // line 93
        echo "                    </td>
                    <td>Mode de paiement :
                        ";
        // line 95
        if (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 2)) {
            // line 96
            echo "                            <b>Patiel</b>
                        ";
        } else {
            // line 98
            echo "                            <b>Total</b>
                        ";
        }
        // line 100
        echo "                    </td>
                </tr>
            </table>


            <br>
            <table class=\"table table-bordered\">
                <thead>
                <tr>
                    ";
        // line 109
        if (((($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 1) && (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 2) || ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 1))) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 110
            echo "                    ";
        } else {
            // line 111
            echo "                        <th></th>
                    ";
        }
        // line 113
        echo "                    <th>Désignation</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Montant</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produitAchatListe"] ?? $this->getContext($context, "produitAchatListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 121
            echo "                    <tr>
                        ";
            // line 122
            if (((($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 1) && (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 2) || ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 1))) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
                // line 123
                echo "                        ";
            } else {
                // line 124
                echo "                            <td><a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produitvente_retirer", ["idVente" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-close\"></i></a></td>
                        ";
            }
            // line 126
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomProduit", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "prixProduit", []), "html", null, true);
            echo " &nbsp
                            ";
            // line 128
            if (((($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 1) && (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 2) || ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 1))) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
                // line 129
                echo "                            ";
            } else {
                // line 130
                echo "                                <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produitvente_modifier_prix", ["idVente" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
                echo "\"> <i class=\"fa fa-edit\"></i></a>
                            ";
            }
            // line 132
            echo "                        </td>
                        <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "quantiteAchat", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 134
            echo twig_escape_filter($this->env, ($this->getAttribute($context["liste"], "prixProduit", []) * $this->getAttribute($context["liste"], "quantiteAchat", [])), "html", null, true);
            echo " F</td>


                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                </tbody>
            </table>

            <div class=\"row\">
                <div class=\"col-md-9\"><p class=\"pull-right\"><b>Total HT = ";
        // line 143
        echo twig_escape_filter($this->env, ($context["montantTotal"] ?? $this->getContext($context, "montantTotal")), "html", null, true);
        echo " F CFA</b></p></div>
                <div class=\"col-md-3\"></div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-9\"><p class=\"pull-right\"><b>Total TTC = ";
        // line 148
        echo twig_escape_filter($this->env, ($context["montantTotal"] ?? $this->getContext($context, "montantTotal")), "html", null, true);
        echo " F CFA</b></p></div>
                <div class=\"col-md-3\"></div>
            </div>

            ";
        // line 152
        if (((($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 0) && ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 2)) && (($context["nomClient"] ?? $this->getContext($context, "nomClient")) == "null"))) {
            // line 153
            echo "                <div  style=\"padding: 25px;\">
                    <div class=\"callout callout-danger\">
                        <h5>Info importante!</h5>

                        <p>Pour les ventes avec mode de paiement partiel, le choix du client est obligatoire, donc veuillez selection un client existant ou tout d'abord le créer (partie client) ensuite retourner le selectioner dans la vente.</p>
                    </div>
                </div>
            ";
        } elseif (((($this->getAttribute(        // line 160
($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 0) && ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 2)) && (($context["nomClient"] ?? $this->getContext($context, "nomClient")) != "null"))) {
            // line 161
            echo "                <div class=\"pull-right\" >
                    <a href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("versement_vente_ajouter", ["idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente"))]), "html", null, true);
            echo "\"  class=\"btn bg-olive btn-flat margin\" onclick=\"return confirm('Cette action consiste à valider la vente ensuite passer au versemet, voulez vous vraiment continuer cette opération?');\">Gérer versement vente</a>
                </div>
            ";
        } elseif ((($this->getAttribute(        // line 164
($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 1) && ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 2))) {
            // line 165
            echo "                <div class=\"pull-right\" >
                    <a href=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("versement_vente_ajouter", ["idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente"))]), "html", null, true);
            echo "\"  class=\"btn bg-olive btn-flat margin\">Gérer versement vente</a>
                </div>
            ";
        } elseif ((($this->getAttribute(        // line 168
($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 0) && ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 1))) {
            // line 169
            echo "                <div class=\"pull-right\" >
                    <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_valider", ["idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente"))]), "html", null, true);
            echo "\"  class=\"btn bg-olive btn-flat margin\" onclick=\"return confirm('Voulez-vous vraiment valider cette vente?');\">Valider la vente</a>
                </div>
                 <div class=\"pull-right\" >
                    <a href=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_imprimerrecu", ["idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente"))]), "html", null, true);
            echo "\"  class=\"btn bg-primary btn-flat margin\">Imprimer</a>
                </div>
            ";
        } elseif ((($this->getAttribute(        // line 175
($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 1) && ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 1))) {
            // line 176
            echo "              <div class=\"pull-right\" >
                    <a href=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_imprimerrecu", ["idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente"))]), "html", null, true);
            echo "\"  class=\"btn bg-primary btn-flat margin\">Imprimer</a>
                </div>
            ";
        }
        // line 180
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  412 => 180,  406 => 177,  403 => 176,  401 => 175,  396 => 173,  390 => 170,  387 => 169,  385 => 168,  380 => 166,  377 => 165,  375 => 164,  370 => 162,  367 => 161,  365 => 160,  356 => 153,  354 => 152,  347 => 148,  339 => 143,  333 => 139,  322 => 134,  318 => 133,  315 => 132,  309 => 130,  306 => 129,  304 => 128,  300 => 127,  295 => 126,  289 => 124,  286 => 123,  284 => 122,  281 => 121,  277 => 120,  268 => 113,  264 => 111,  261 => 110,  259 => 109,  248 => 100,  244 => 98,  240 => 96,  238 => 95,  234 => 93,  228 => 91,  225 => 90,  223 => 89,  217 => 86,  205 => 76,  193 => 67,  186 => 63,  175 => 55,  171 => 54,  165 => 50,  162 => 49,  159 => 48,  151 => 45,  147 => 43,  145 => 42,  138 => 37,  132 => 34,  126 => 31,  120 => 28,  117 => 27,  115 => 26,  110 => 24,  107 => 23,  105 => 22,  100 => 20,  97 => 19,  95 => 18,  90 => 15,  81 => 14,  61 => 3,  52 => 2,  30 => 1,);
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
                {% if facture.statut == 1 and facture.typeReglementFacture == 2 and nomClient != 'null'%}
                    <div class=\"pull-right\" >
                       <a href=\"{{path('vente_liste')}}\"  class=\"btn bg-olive btn-flat margin\">Liste des ventes</a>
                    </div>
                {% elseif facture.statut == 1 and facture.typeReglementFacture == 1 %}
                    <div class=\"pull-right\">
                        <a href=\"{{path('clientvente_ajouter', {'idVente': idVente})}}\"  class=\"btn bg-navy btn-flat margin\">Client</a>
                    </div>
                {% elseif (facture.statut == 0 and facture.typeReglementFacture == 1) or (facture.statut == 0 and facture.typeReglementFacture == 2) %}
                    <div class=\"pull-right\" >
                        <a href=\"{{path('vente_liste')}}\"  class=\"btn bg-olive btn-flat margin\">Liste des ventes</a>
                    </div>
                     <div class=\"pull-right\" >
                        <a href=\"{{path('modepaiement_vente_ajouter', {'idVente': idVente})}}\"  class=\"btn bg-purple-active btn-flat margin\">Mode de paiement</a>
                    </div>
                      <div class=\"pull-right\">
                        <a href=\"{{path('clientvente_ajouter', {'idVente': idVente})}}\"  class=\"btn bg-navy btn-flat margin\">Client</a>
                    </div>
                {% endif %}
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                {% if result == 4 %}
                    <div class=\"alert alert-danger alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>La quantité demandée({{quantiteDemande}}) est superieur à la quantité disponible ({{quantiteDisponible}}).</strong>
                    </div>
                {% endif %}
                   {% if facture.statut == 1 and (facture.typeReglementFacture == 2 or facture.typeReglementFacture == 1) and is_granted('ROLE_USER') %}
                    {% else %}
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
                            <div class=\"pull-left\" >
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>
                            {{ form_end(form) }}
                        </div>
                        <!-- /.form-group -->
                    </div>

                    <!-- /.col -->
                    <!-- /.row -->
                </div>
                {% endif %}
                <!-- /.box-body -->
                <div class=\"box-footer\">

                </div>
            </div>
        </div>

        <div class=\"box-body\">
            <table class=\"table\">
                <tr class=\"success\">
                    <td><p>Référence vente :<b>{{ referenceFacture }}</b> </td>
                    <td>
                        Client :
                        {% if nomClient == 'null' %}
                        {% else %}
                            <b>  {{ nomClient }}</b>
                        {% endif %}
                    </td>
                    <td>Mode de paiement :
                        {% if facture.typeReglementFacture == 2 %}
                            <b>Patiel</b>
                        {% else %}
                            <b>Total</b>
                        {% endif %}
                    </td>
                </tr>
            </table>


            <br>
            <table class=\"table table-bordered\">
                <thead>
                <tr>
                    {% if facture.statut == 1 and (facture.typeReglementFacture == 2 or facture.typeReglementFacture == 1) and is_granted('ROLE_USER') %}
                    {% else %}
                        <th></th>
                    {% endif %}
                    <th>Désignation</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Montant</th>
                </tr>
                </thead>
                <tbody>
                {% for liste in produitAchatListe %}
                    <tr>
                        {% if facture.statut == 1 and (facture.typeReglementFacture == 2 or facture.typeReglementFacture == 1) and is_granted('ROLE_USER') %}
                        {% else %}
                            <td><a class=\"btn btn-danger\" href=\"{{ path('produitvente_retirer', {'idVente': liste.id}) }}\"><i class=\"fa fa-close\"></i></a></td>
                        {% endif %}
                        <td>{{ liste.nomProduit }}</td>
                        <td>{{ liste.prixProduit }} &nbsp
                            {% if facture.statut == 1 and (facture.typeReglementFacture == 2 or facture.typeReglementFacture == 1) and is_granted('ROLE_USER') %}
                            {% else %}
                                <a class=\"btn btn-primary\" href=\"{{ path('produitvente_modifier_prix', {'idVente': liste.id}) }}\"> <i class=\"fa fa-edit\"></i></a>
                            {% endif %}
                        </td>
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
                <div class=\"col-md-9\"><p class=\"pull-right\"><b>Total TTC = {{ montantTotal }} F CFA</b></p></div>
                <div class=\"col-md-3\"></div>
            </div>

            {% if facture.statut == 0 and facture.typeReglementFacture == 2 and nomClient == 'null'%}
                <div  style=\"padding: 25px;\">
                    <div class=\"callout callout-danger\">
                        <h5>Info importante!</h5>

                        <p>Pour les ventes avec mode de paiement partiel, le choix du client est obligatoire, donc veuillez selection un client existant ou tout d'abord le créer (partie client) ensuite retourner le selectioner dans la vente.</p>
                    </div>
                </div>
            {% elseif facture.statut == 0 and facture.typeReglementFacture == 2 and nomClient != 'null'%}
                <div class=\"pull-right\" >
                    <a href=\"{{path('versement_vente_ajouter', {'idVente':idVente})}}\"  class=\"btn bg-olive btn-flat margin\" onclick=\"return confirm('Cette action consiste à valider la vente ensuite passer au versemet, voulez vous vraiment continuer cette opération?');\">Gérer versement vente</a>
                </div>
            {% elseif facture.statut == 1 and facture.typeReglementFacture == 2%}
                <div class=\"pull-right\" >
                    <a href=\"{{path('versement_vente_ajouter', {'idVente':idVente})}}\"  class=\"btn bg-olive btn-flat margin\">Gérer versement vente</a>
                </div>
            {% elseif facture.statut == 0 and facture.typeReglementFacture == 1 %}
                <div class=\"pull-right\" >
                    <a href=\"{{path('vente_valider', {'idVente':idVente})}}\"  class=\"btn bg-olive btn-flat margin\" onclick=\"return confirm('Voulez-vous vraiment valider cette vente?');\">Valider la vente</a>
                </div>
                 <div class=\"pull-right\" >
                    <a href=\"{{path('vente_imprimerrecu', {'idVente':idVente})}}\"  class=\"btn bg-primary btn-flat margin\">Imprimer</a>
                </div>
            {% elseif facture.statut == 1 and facture.typeReglementFacture == 1 %}
              <div class=\"pull-right\" >
                    <a href=\"{{path('vente_imprimerrecu', {'idVente':idVente})}}\"  class=\"btn bg-primary btn-flat margin\">Imprimer</a>
                </div>
            {% endif %}
        </div>
    {% endblock %}
", "StockBundle:Vente:ajouterProduitVente.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\StockBundle/Resources/views/Vente/ajouterProduitVente.html.twig");
    }
}
