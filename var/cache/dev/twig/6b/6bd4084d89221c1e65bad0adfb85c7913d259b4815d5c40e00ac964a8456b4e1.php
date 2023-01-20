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

/* StockBundle:Vente:listeVente.html.twig */
class __TwigTemplate_1065e17d2429cc528ebea868a8ef9876fa49a7d2e98072f25426b92fbe858e35 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:listeVente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:listeVente.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:listeVente.html.twig", 1);
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
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste");
        echo "\">Liste ventes</a></li>
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
        echo "        <div class=\"box-header box box-success\">
            <h3 class=\"box-title\">Liste des ventes</h3>

            <div class=\"pull-right\" >
                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_ajouter");
        echo "\"  class=\"btn bg-olive btn-flat margin\">Ajouter Vente</a>
            </div>
        </div>

        <div class=\"box-body\">
            <table id=\"table_vente\" class=\"table table-bordered\">
                <thead>
                <tr>
                    <th>Reference </th>
                    <th>Client </th>
                    <th>Date</th>
                    <th>Mode de paiement</th>
                    <th>Etat</th>
                    <th>Détail</th>
                    <th>Annuler</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Reference </th>
                    <th>Client </th>
                    <th>Date</th>
                    <th>Mode de paiement</th>
                    <th>Etat</th>
                    <th>Détail</th>
                    <th>Annuler</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devisListe"] ?? $this->getContext($context, "devisListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 49
            echo "                    <tr>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "referenceFacture", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            if ($this->getAttribute($context["liste"], "client", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["liste"], "client", []), "nomClient", []), "html", null, true);
                echo " ";
            }
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["liste"], "dateFacture", []), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 54
            if (($this->getAttribute($context["liste"], "typeReglementFacture", []) == 2)) {
                // line 55
                echo "                                <b>
                                    <span class=\"label label-primary label-mini\">Patiel</span>
                                </b>
                            ";
            } else {
                // line 59
                echo "                                <b>
                                    <span class=\"label label-info label-mini\">Total</span>
                                </b>
                            ";
            }
            // line 63
            echo "                        </td>
                        <td>
                            ";
            // line 65
            if (($this->getAttribute($context["liste"], "statut", []) == 0)) {
                // line 66
                echo "                                <span class=\"label label-warning label-mini\">En cours de paiement</span>
                            ";
            } elseif (((($this->getAttribute(            // line 67
$context["liste"], "statut", []) == 1) && ($this->getAttribute($context["liste"], "typeReglementFacture", []) == 2)) && ($this->getAttribute($context["liste"], "statutVersement", []) == 2))) {
                // line 68
                echo "                                <span class=\"label label-success label-mini\">Validée & payée</span>
                            ";
            } elseif (((($this->getAttribute(            // line 69
$context["liste"], "statut", []) == 1) && ($this->getAttribute($context["liste"], "typeReglementFacture", []) == 2)) && ($this->getAttribute($context["liste"], "statutVersement", []) != 2))) {
                // line 70
                echo "                                <span class=\"label label-warning label-mini\">Validé mais en cours de paiement</span>
                            ";
            } elseif ((($this->getAttribute(            // line 71
$context["liste"], "statut", []) == 1) && ($this->getAttribute($context["liste"], "typeReglementFacture", []) == 1))) {
                // line 72
                echo "                                <span class=\"label label-success label-mini\">Validée & payée</span>
                            ";
            } elseif (($this->getAttribute(            // line 73
$context["liste"], "statut", []) == 4)) {
                // line 74
                echo "                                <span class=\"label label-danger label-mini\">Annuler</span>
                            ";
            }
            // line 76
            echo "                        </td>

                        <td>
                             <a class=\"btn btn-info\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produitvente_ajouter", ["idVente" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
            echo "\" >Detail</a></td>
                    
                        <td>
                            ";
            // line 82
            if ((($this->getAttribute($context["liste"], "statut", []) == 4) || ($this->getAttribute($context["liste"], "statut", []) == 0))) {
                // line 83
                echo "                            ";
            } else {
                // line 84
                echo "                                <a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_annuler", ["idVente" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
                echo " \" onclick=\"return confirm('Voulez-vous vraiment annuler cette vente?');\">Annuler</a>
                            ";
            }
            // line 86
            echo "                        </td>

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                </tbody>
            </table>
        </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Vente:listeVente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 90,  221 => 86,  215 => 84,  212 => 83,  210 => 82,  204 => 79,  199 => 76,  195 => 74,  193 => 73,  190 => 72,  188 => 71,  185 => 70,  183 => 69,  180 => 68,  178 => 67,  175 => 66,  173 => 65,  169 => 63,  163 => 59,  157 => 55,  155 => 54,  150 => 52,  142 => 51,  138 => 50,  135 => 49,  131 => 48,  99 => 19,  93 => 15,  84 => 14,  70 => 10,  61 => 3,  52 => 2,  30 => 1,);
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
                <li><a href=\"{{path('vente_liste')}}\">Liste ventes</a></li>
            </ol>
        </section>
    {%endblock%}
    {%block body%}
        <div class=\"box-header box box-success\">
            <h3 class=\"box-title\">Liste des ventes</h3>

            <div class=\"pull-right\" >
                <a href=\"{{path('vente_ajouter')}}\"  class=\"btn bg-olive btn-flat margin\">Ajouter Vente</a>
            </div>
        </div>

        <div class=\"box-body\">
            <table id=\"table_vente\" class=\"table table-bordered\">
                <thead>
                <tr>
                    <th>Reference </th>
                    <th>Client </th>
                    <th>Date</th>
                    <th>Mode de paiement</th>
                    <th>Etat</th>
                    <th>Détail</th>
                    <th>Annuler</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Reference </th>
                    <th>Client </th>
                    <th>Date</th>
                    <th>Mode de paiement</th>
                    <th>Etat</th>
                    <th>Détail</th>
                    <th>Annuler</th>
                </tr>
                </tfoot>
                <tbody>
                {% for liste in devisListe %}
                    <tr>
                        <td>{{ liste.referenceFacture }}</td>
                        <td>{% if  liste.client %} {{ liste.client.nomClient }} {% endif %}</td>
                        <td>{{ liste.dateFacture |date('d-m-Y H:i:s') }}</td>
                        <td>
                            {% if liste.typeReglementFacture == 2 %}
                                <b>
                                    <span class=\"label label-primary label-mini\">Patiel</span>
                                </b>
                            {% else %}
                                <b>
                                    <span class=\"label label-info label-mini\">Total</span>
                                </b>
                            {% endif %}
                        </td>
                        <td>
                            {% if liste.statut == 0%}
                                <span class=\"label label-warning label-mini\">En cours de paiement</span>
                            {% elseif liste.statut == 1 and liste.typeReglementFacture == 2 and liste.statutVersement == 2 %}
                                <span class=\"label label-success label-mini\">Validée & payée</span>
                            {% elseif liste.statut == 1 and liste.typeReglementFacture == 2 and liste.statutVersement != 2 %}
                                <span class=\"label label-warning label-mini\">Validé mais en cours de paiement</span>
                            {% elseif liste.statut == 1 and liste.typeReglementFacture == 1 %}
                                <span class=\"label label-success label-mini\">Validée & payée</span>
                            {% elseif liste.statut == 4 %}
                                <span class=\"label label-danger label-mini\">Annuler</span>
                            {% endif %}
                        </td>

                        <td>
                             <a class=\"btn btn-info\" href=\"{{ path('produitvente_ajouter', {'idVente': liste.id}) }}\" >Detail</a></td>
                    
                        <td>
                            {% if liste.statut == 4 or liste.statut == 0 %}
                            {% else %}
                                <a class=\"btn btn-danger\" href=\"{{ path('vente_annuler', {'idVente': liste.id}) }} \" onclick=\"return confirm('Voulez-vous vraiment annuler cette vente?');\">Annuler</a>
                            {% endif %}
                        </td>

                    </tr>
                {%endfor%}
                </tbody>
            </table>
        </div>

    {% endblock %}
", "StockBundle:Vente:listeVente.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\StockBundle/Resources/views/Vente/listeVente.html.twig");
    }
}
