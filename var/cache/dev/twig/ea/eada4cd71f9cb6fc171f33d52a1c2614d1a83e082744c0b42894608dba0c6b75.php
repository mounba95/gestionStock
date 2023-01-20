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

/* CompteBundle:Compte:ajouterCompte.html.twig */
class __TwigTemplate_e1cef151a01619f3b0a143c1bfaf36fb5062c96f0cb534fcd216151dc1d63c9a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "CompteBundle:Compte:ajouterCompte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "CompteBundle:Compte:ajouterCompte.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "CompteBundle:Compte:ajouterCompte.html.twig", 1);
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
                Compte
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
        echo "
        <div class=\"box box-success\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Ajouter Compte</h3>

                <div class=\"pull-right\" >
                    <!--       <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_liste");
        echo "\"  class=\"btn bg-olive btn-flat margin\">liste compte</a>-->
                </div>
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Nom et prénom</label>
                            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomCompte", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom et prénom du compte"]]);
        echo "
                        </div>
                        <div class=\"pull-right\" >
                            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_ajouter");
        echo "\"  class=\"btn bg-maroon btn-flat\">Annuler</a>
                            <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">

                </div>
                ";
        // line 47
        if ((($context["result"] ?? $this->getContext($context, "result")) == 3)) {
            // line 48
            echo "                    <div class=\"alert alert-default alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Veuillez remplir les champs pour ajouter un nouveau compte</strong>
                    </div>

                ";
        } elseif ((        // line 53
($context["result"] ?? $this->getContext($context, "result")) == 2)) {
            // line 54
            echo "                    <div class=\"alert alert-success alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Enregistrement éffectué avec succée.</strong>
                    </div>
                ";
        } elseif ((        // line 58
($context["result"] ?? $this->getContext($context, "result")) == 1)) {
            // line 59
            echo "                    <div class=\"alert alert-danger alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Cet enregistrement existe déja.</strong>
                    </div>
                ";
        } elseif ((        // line 63
($context["result"] ?? $this->getContext($context, "result")) == 7)) {
            // line 64
            echo "                    <div class=\"alert alert-danger alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Une erreur s'est produite.</strong>
                    </div>
                ";
        } elseif ((        // line 68
($context["result"] ?? $this->getContext($context, "result")) == 4)) {
            // line 69
            echo "
                ";
        } elseif ((        // line 70
($context["result"] ?? $this->getContext($context, "result")) == 6)) {
            // line 71
            echo "                    <div class=\"alert alert-success alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Compte activé.</strong>
                    </div>
                ";
        } elseif ((        // line 75
($context["result"] ?? $this->getContext($context, "result")) == 5)) {
            // line 76
            echo "                    <div class=\"alert alert-danger alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Compte desactivé.</strong>
                    </div>
                ";
        }
        // line 81
        echo "                </br>
                <table id=\"table_compte\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom et prènom</th>
                        <th>Numéro</th>
                        <th>Date de création </th>
                        <th>Solde</th>
                        <th>Etat</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nom et prènom</th>
                        <th>Numéro</th>
                        <th>Date de création </th>
                        <th>Solde</th>
                        <th>Etat</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["compteListe"] ?? $this->getContext($context, "compteListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 107
            echo "                        <tr>
                            <td><a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_detail", ["id" => $this->getAttribute($context["compte"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "id", []), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "nomCompte", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "numerCompte", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 111
            if ($this->getAttribute($context["compte"], "dateCompte", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["compte"], "dateCompte", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "soldeCompte", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 113
            if ($this->getAttribute($context["compte"], "etatCompte", [])) {
                // line 114
                echo "                                    <span class=\"label label-success label-mini\">Activé</span>
                                ";
            } else {
                // line 116
                echo "                                    <span class=\"label label-danger label-mini\">Desactivé</span>
                                ";
            }
            // line 118
            echo "                            </td>
                            <td>
                                ";
            // line 120
            if ($this->getAttribute($context["compte"], "etatCompte", [])) {
                // line 121
                echo "                                    <a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_activer_desactiver", ["id" => $this->getAttribute($context["compte"], "id", [])]), "html", null, true);
                echo "\" onclick=\"return confirm('Voulez-vous vraiment désactiver ce compte?');\">Desactiver</a>
                                ";
            } else {
                // line 123
                echo "                                    <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_activer_desactiver", ["id" => $this->getAttribute($context["compte"], "id", [])]), "html", null, true);
                echo "\" onclick=\"return confirm('Voulez-vous vraiment réactiver ce compte?');\">Activer</a>
                                ";
            }
            // line 125
            echo "
                                <a class=\"btn btn-info\" href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_detail", ["id" => $this->getAttribute($context["compte"], "id", [])]), "html", null, true);
            echo "\">Détail</a>
                                <a class=\"btn btn-primary\" href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_modifier", ["id" => $this->getAttribute($context["compte"], "id", [])]), "html", null, true);
            echo "\">Modifier</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                    </tbody>
                </table>
            </div>
        </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "CompteBundle:Compte:ajouterCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 131,  287 => 127,  283 => 126,  280 => 125,  274 => 123,  268 => 121,  266 => 120,  262 => 118,  258 => 116,  254 => 114,  252 => 113,  248 => 112,  242 => 111,  238 => 110,  234 => 109,  228 => 108,  225 => 107,  221 => 106,  194 => 81,  187 => 76,  185 => 75,  179 => 71,  177 => 70,  174 => 69,  172 => 68,  166 => 64,  164 => 63,  158 => 59,  156 => 58,  150 => 54,  148 => 53,  141 => 48,  139 => 47,  127 => 38,  122 => 36,  116 => 33,  112 => 32,  98 => 21,  90 => 15,  81 => 14,  61 => 3,  52 => 2,  30 => 1,);
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
                Compte
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
                <h3 class=\"box-title\">Ajouter Compte</h3>

                <div class=\"pull-right\" >
                    <!--       <a href=\"{{path('compte_liste')}}\"  class=\"btn bg-olive btn-flat margin\">liste compte</a>-->
                </div>
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Nom et prénom</label>
                            {{ form_start(form) }}
                            {{ form_widget(form.nomCompte, {'attr': {'class': 'form-control', 'placeholder':'nom et prénom du compte'} }) }}
                        </div>
                        <div class=\"pull-right\" >
                            <a href=\"{{path('compte_ajouter')}}\"  class=\"btn bg-maroon btn-flat\">Annuler</a>
                            <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            {{ form_end(form) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">

                </div>
                {%if result == 3 %}
                    <div class=\"alert alert-default alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Veuillez remplir les champs pour ajouter un nouveau compte</strong>
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
                {% elseif result == 7 %}
                    <div class=\"alert alert-danger alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Une erreur s'est produite.</strong>
                    </div>
                {% elseif result == 4 %}

                {% elseif result == 6 %}
                    <div class=\"alert alert-success alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Compte activé.</strong>
                    </div>
                {% elseif result == 5 %}
                    <div class=\"alert alert-danger alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Compte desactivé.</strong>
                    </div>
                {% endif %}
                </br>
                <table id=\"table_compte\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom et prènom</th>
                        <th>Numéro</th>
                        <th>Date de création </th>
                        <th>Solde</th>
                        <th>Etat</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nom et prènom</th>
                        <th>Numéro</th>
                        <th>Date de création </th>
                        <th>Solde</th>
                        <th>Etat</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    {% for compte in compteListe %}
                        <tr>
                            <td><a href=\"{{ path('compte_detail', { 'id': compte.id }) }}\">{{ compte.id }}</a></td>
                            <td>{{ compte.nomCompte }}</td>
                            <td>{{ compte.numerCompte }}</td>
                            <td>{% if compte.dateCompte %}{{ compte.dateCompte|date('Y-m-d H:i:s') }}{% endif %}</td>
                            <td>{{ compte.soldeCompte }}</td>
                            <td>{% if compte.etatCompte %}
                                    <span class=\"label label-success label-mini\">Activé</span>
                                {% else %}
                                    <span class=\"label label-danger label-mini\">Desactivé</span>
                                {% endif %}
                            </td>
                            <td>
                                {% if  compte.etatCompte %}
                                    <a class=\"btn btn-danger\" href=\"{{ path('compte_activer_desactiver', { 'id': compte.id }) }}\" onclick=\"return confirm('Voulez-vous vraiment désactiver ce compte?');\">Desactiver</a>
                                {% else %}
                                    <a class=\"btn btn-success\" href=\"{{ path('compte_activer_desactiver', { 'id': compte.id }) }}\" onclick=\"return confirm('Voulez-vous vraiment réactiver ce compte?');\">Activer</a>
                                {% endif %}

                                <a class=\"btn btn-info\" href=\"{{ path('compte_detail', { 'id': compte.id }) }}\">Détail</a>
                                <a class=\"btn btn-primary\" href=\"{{ path('compte_modifier', { 'id': compte.id }) }}\">Modifier</a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

    {% endblock %}
", "CompteBundle:Compte:ajouterCompte.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Banque\\CompteBundle/Resources/views/Compte/ajouterCompte.html.twig");
    }
}
