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

/* StockBundle:Vente:versementVente.html.twig */
class __TwigTemplate_80299ff2c723f2817423522dbcf3b63264631ce517020b352b2c64a9e29adeb2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:versementVente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:versementVente.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:versementVente.html.twig", 1);
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
            Gérer paiement
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

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <div style=\"padding: 25px;\">
        <h1>Gestion de paiement d'une vente</h1>
        <div class=\"pull-right\">
            <a class=\"btn bg-olive btn-flat margin\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste");
        echo "\">Retour à la liste des ventes</a>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <table class=\"table\">
                    <tr>
                        <th><p>Référence vente </th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "referenceFacture", []), "html", null, true);
        echo " </td>
                    </tr>
                    <tr>
                        <th>Client</th>
                        <td>
                            ";
        // line 31
        if ((($context["client"] ?? $this->getContext($context, "client")) == "null")) {
            // line 32
            echo "                            ";
        } else {
            // line 33
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "nomClient", []), "html", null, true);
            echo "
                            ";
        }
        // line 35
        echo "                        </td>
                    </tr>
                    <tr class=\"success\">
                        <th>
                            Montant total à verser
                        </th>
                        <td>
                            ";
        // line 42
        echo twig_escape_filter($this->env, ($context["montantTotal"] ?? $this->getContext($context, "montantTotal")), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr class=\"info\">
                        <th>
                            Montant total versé
                        </th>
                        <td>
                            ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "montantVerseFacture", []), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr class=\"warning\">
                        <th>
                            Montant à completer
                        </th>
                        <td>
                            ";
        // line 58
        echo twig_escape_filter($this->env, (($context["montantTotal"] ?? $this->getContext($context, "montantTotal")) - $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "montantVerseFacture", [])), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <th>Mode de paiement</th>
                        <td>
                            ";
        // line 64
        if (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 2)) {
            // line 65
            echo "                                Patiel
                            ";
        } else {
            // line 67
            echo "                                Total
                            ";
        }
        // line 69
        echo "                        </td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td> ";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "dateFacture", []), "d-m-Y H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Etat vente</th>
                        <td>
                            ";
        // line 78
        if (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 0)) {
            // line 79
            echo "                                <span class=\"label label-danger label-mini\">Non validée</span>
                            ";
        } elseif (($this->getAttribute(        // line 80
($context["facture"] ?? $this->getContext($context, "facture")), "statut", []) == 1)) {
            // line 81
            echo "                                <span class=\"label label-success label-mini\">Validée</span>
                            ";
        }
        // line 83
        echo "                        </td>
                    </tr>
                    <tr>
                        <th>Etat de paiement</th>
                        <td>
                            ";
        // line 88
        if (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statutVersement", []) == 2)) {
            // line 89
            echo "                                <span class=\"label label-success label-mini\">Payé</span>
                            ";
        } else {
            // line 91
            echo "                                <span class=\"label label-warning label-mini\">En cours de paiement</span>
                            ";
        }
        // line 93
        echo "                        </td>
                    </tr>
                </table>
                <a class=\"btn bg-blue-gradient btn-info margin\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produitvente_ajouter", ["idVente" => $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", [])]), "html", null, true);
        echo "\" >Détail vente</a>
                <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimer_versement", ["idVente" => $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", [])]), "html", null, true);
        echo "\"  class=\"btn bg-primary btn-default margin\">Imprimer</a>
            </div>
            <!-- /.col -->
            <div class=\"col-xs-6\">
                ";
        // line 101
        if (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "statutVersement", []) == 2)) {
            // line 102
            echo "                    <div class=\"alert alert-info alert-dismissible\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
                        Vous avez payé la totalité du montant de la vente.
                    </div>
                ";
        } else {
            // line 108
            echo "                    <div class=\"box box-primary\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Formulaire pour les opérations</h3>
                        </div>
                        <div class=\"box-body\">

                            <div class=\"form-group\">
                                <label>Montant</label>
                                ";
            // line 116
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
                                ";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montantVersement", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Montant à verser", "min" => "0"]]);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label>Description</label>
                                ";
            // line 121
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descriptionVersement", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description operation"]]);
            echo "
                            </div>
                            <div class=\"pull-right\" >
                                <a href=\"\"  class=\"btn bg-maroon btn-flat refresh\">Annuler</a>
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                                ";
            // line 126
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                ";
        }
        // line 132
        echo "            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        ";
        // line 136
        if ((($context["result"] ?? $this->getContext($context, "result")) == 5)) {
            // line 137
            echo "            <div class=\"alert alert-info alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Veuillez remplir les champs pour ajouter un nouveau compte</strong>
            </div>
        ";
        } elseif ((        // line 141
($context["result"] ?? $this->getContext($context, "result")) == 1)) {
            // line 142
            echo "            <div class=\"alert alert-danger alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Utilisateur non trouvé.</strong>
            </div>
        ";
        } elseif ((        // line 146
($context["result"] ?? $this->getContext($context, "result")) == 2)) {
            // line 147
            echo "            <div class=\"alert alert-danger alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Le montant saisir est nettement superieur au reste du montant à verser.</strong>
            </div>

        ";
        } elseif ((        // line 152
($context["result"] ?? $this->getContext($context, "result")) == 3)) {
            // line 153
            echo "            <div class=\"alert alert-success alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Enregistrement éffectué avec succée.</strong>
            </div>
        ";
        } elseif ((        // line 157
($context["result"] ?? $this->getContext($context, "result")) == 4)) {
            // line 158
            echo "            <div class=\"alert alert-danger alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Une erreur s'est produite.</strong>
            </div>
        ";
        }
        // line 163
        echo "        </br>
        <div class=\"box box-danger\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Historique des versements</h3>
            </div>
            <div class=\"box-body\">
                <table id=\"table_versement\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Montant versé</th>
                        <th>Employé</th>
                        <th>Date </th>
                        <th>Description </th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Montant versé</th>
                        <th>Employé</th>
                        <th>Date </th>
                        <th>Description </th>
                    </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["versements"] ?? $this->getContext($context, "versements")));
        foreach ($context['_seq'] as $context["_key"] => $context["versement"]) {
            // line 190
            echo "                        <tr>
                            <td>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["versement"], "id", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["versement"], "montantVersement", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["versement"], "user", []), "nom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["versement"], "user", []), "prenom", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 194
            if ($this->getAttribute($context["versement"], "dateVersement", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["versement"], "dateVersement", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($context["versement"], "descriptionVersement", []), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['versement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Vente:versementVente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 198,  383 => 195,  377 => 194,  371 => 193,  367 => 192,  363 => 191,  360 => 190,  356 => 189,  328 => 163,  321 => 158,  319 => 157,  313 => 153,  311 => 152,  304 => 147,  302 => 146,  296 => 142,  294 => 141,  288 => 137,  286 => 136,  280 => 132,  271 => 126,  263 => 121,  256 => 117,  252 => 116,  242 => 108,  234 => 102,  232 => 101,  225 => 97,  221 => 96,  216 => 93,  212 => 91,  208 => 89,  206 => 88,  199 => 83,  195 => 81,  193 => 80,  190 => 79,  188 => 78,  180 => 73,  174 => 69,  170 => 67,  166 => 65,  164 => 64,  155 => 58,  144 => 50,  133 => 42,  124 => 35,  118 => 33,  115 => 32,  113 => 31,  105 => 26,  95 => 19,  90 => 16,  81 => 15,  61 => 3,  52 => 2,  30 => 1,);
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
            Gérer paiement
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>

        </ol>
    </section>
{%endblock%}

{%block body%}
    <div style=\"padding: 25px;\">
        <h1>Gestion de paiement d'une vente</h1>
        <div class=\"pull-right\">
            <a class=\"btn bg-olive btn-flat margin\" href=\"{{ path('vente_liste') }}\">Retour à la liste des ventes</a>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <table class=\"table\">
                    <tr>
                        <th><p>Référence vente </th>
                        <td>{{ facture.referenceFacture }} </td>
                    </tr>
                    <tr>
                        <th>Client</th>
                        <td>
                            {% if client == 'null' %}
                            {% else %}
                                {{ client.nomClient }}
                            {% endif %}
                        </td>
                    </tr>
                    <tr class=\"success\">
                        <th>
                            Montant total à verser
                        </th>
                        <td>
                            {{ montantTotal }}
                        </td>
                    </tr>
                    <tr class=\"info\">
                        <th>
                            Montant total versé
                        </th>
                        <td>
                            {{ facture.montantVerseFacture }}
                        </td>
                    </tr>
                    <tr class=\"warning\">
                        <th>
                            Montant à completer
                        </th>
                        <td>
                            {{montantTotal - facture.montantVerseFacture }}
                        </td>
                    </tr>
                    <tr>
                        <th>Mode de paiement</th>
                        <td>
                            {% if facture.typeReglementFacture == 2 %}
                                Patiel
                            {% else %}
                                Total
                            {% endif %}
                        </td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td> {{ facture.dateFacture |date('d-m-Y H:i:s')}}</td>
                    </tr>
                    <tr>
                        <th>Etat vente</th>
                        <td>
                            {% if facture.statut == 0 %}
                                <span class=\"label label-danger label-mini\">Non validée</span>
                            {% elseif facture.statut == 1 %}
                                <span class=\"label label-success label-mini\">Validée</span>
                            {% endif %}
                        </td>
                    </tr>
                    <tr>
                        <th>Etat de paiement</th>
                        <td>
                            {% if facture.statutVersement == 2 %}
                                <span class=\"label label-success label-mini\">Payé</span>
                            {% else %}
                                <span class=\"label label-warning label-mini\">En cours de paiement</span>
                            {% endif %}
                        </td>
                    </tr>
                </table>
                <a class=\"btn bg-blue-gradient btn-info margin\" href=\"{{ path('produitvente_ajouter', {'idVente': facture.id}) }}\" >Détail vente</a>
                <a href=\"{{path('imprimer_versement', {'idVente':facture.id})}}\"  class=\"btn bg-primary btn-default margin\">Imprimer</a>
            </div>
            <!-- /.col -->
            <div class=\"col-xs-6\">
                {% if facture.statutVersement == 2 %}
                    <div class=\"alert alert-info alert-dismissible\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
                        Vous avez payé la totalité du montant de la vente.
                    </div>
                {% else %}
                    <div class=\"box box-primary\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Formulaire pour les opérations</h3>
                        </div>
                        <div class=\"box-body\">

                            <div class=\"form-group\">
                                <label>Montant</label>
                                {{ form_start(form) }}
                                {{ form_widget(form.montantVersement, {'attr': {'class': 'form-control', 'placeholder':'Montant à verser','min':'0'} }) }}
                            </div>
                            <div class=\"form-group\">
                                <label>Description</label>
                                {{ form_widget(form.descriptionVersement, {'attr': {'class': 'form-control', 'placeholder':'Description operation'} }) }}
                            </div>
                            <div class=\"pull-right\" >
                                <a href=\"\"  class=\"btn bg-maroon btn-flat refresh\">Annuler</a>
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                                {{ form_end(form) }}
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                {% endif %}
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        {% if result == 5 %}
            <div class=\"alert alert-info alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Veuillez remplir les champs pour ajouter un nouveau compte</strong>
            </div>
        {% elseif result == 1 %}
            <div class=\"alert alert-danger alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Utilisateur non trouvé.</strong>
            </div>
        {% elseif result == 2 %}
            <div class=\"alert alert-danger alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Le montant saisir est nettement superieur au reste du montant à verser.</strong>
            </div>

        {% elseif result == 3 %}
            <div class=\"alert alert-success alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Enregistrement éffectué avec succée.</strong>
            </div>
        {% elseif result == 4 %}
            <div class=\"alert alert-danger alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Une erreur s'est produite.</strong>
            </div>
        {% endif %}
        </br>
        <div class=\"box box-danger\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Historique des versements</h3>
            </div>
            <div class=\"box-body\">
                <table id=\"table_versement\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Montant versé</th>
                        <th>Employé</th>
                        <th>Date </th>
                        <th>Description </th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Montant versé</th>
                        <th>Employé</th>
                        <th>Date </th>
                        <th>Description </th>
                    </tr>
                    </tfoot>
                    <tbody>
                    {% for versement in versements %}
                        <tr>
                            <td>{{ versement.id }}</td>
                            <td>{{ versement.montantVersement }}</td>
                            <td>{{ versement.user.nom  }} {{ versement.user.prenom  }}</td>
                            <td>{% if versement.dateVersement %}{{ versement.dateVersement|date('Y-m-d H:i:s') }}{% endif %}</td>
                            <td>{{ versement.descriptionVersement }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>

{% endblock %}
", "StockBundle:Vente:versementVente.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\StockBundle/Resources/views/Vente/versementVente.html.twig");
    }
}
