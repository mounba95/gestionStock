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

/* StockBundle:Vente:rapportchiffreaffaire.html.twig */
class __TwigTemplate_0be44959f37bcd3c31ec99110668d2d4f7636754ef89008c31638da7a00c32d7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:rapportchiffreaffaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:rapportchiffreaffaire.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:rapportchiffreaffaire.html.twig", 1);
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
                Rapport
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
                <li><a href=\"#\">Rapport sur le chiffre d'affaire</a></li>
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
            <h3 class=\"box-title\">Rapport sur le chiffre d'affaire</h3>


        </div>
        <div class=\"box-body\">
            <div class=\"callout callout-info\" style=\"margin-bottom: 0!important;\">
                <h4><i class=\"fa fa-info\"></i> Note:</h4>
                Veuillez choisir vos options.
            </div>
            <br>

            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo " ";
        // line 28
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <div class=\"row clearfix\">
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "compte", []), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Numéro du compte"]);
        echo "
                    <div class=\"form-group  form-float\">
                        <div class=\"form-line\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "compte", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro du compte"]]);
        echo "  ";
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "compte", []), 'errors');
        // line 35
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", []), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date Debut"]);
        echo "
                    <div class=\"form-group  form-float\">
                        <div class=\"form-line\">
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Debut"]]);
        echo "  ";
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", []), 'errors');
        // line 44
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", []), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date Fin"]);
        echo "
                    <div class=\"form-group  form-float\">
                        <div class=\"form-line\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Fin"]]);
        echo "  ";
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", []), 'errors');
        // line 53
        echo "
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 60
        echo "            <div class=\"pull-right\">
                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
            </div>
            ";
        // line 64
        echo "            ";
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo " ";
        // line 66
        echo "
            ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            <br>
            <br>


            <table class=\"table\">
                <thead>
                <tr>
                    <th>Recettes :";
        // line 77
        if (($context["montantRecette"] ?? $this->getContext($context, "montantRecette"))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["montantRecette"] ?? $this->getContext($context, "montantRecette")), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo "</th>
                    <th>Dépences : ";
        // line 78
        if (($context["montantDepence"] ?? $this->getContext($context, "montantDepence"))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["montantDepence"] ?? $this->getContext($context, "montantDepence")), "html", null, true);
        } else {
            echo " 0  ";
        }
        echo "</th>
                    <th>Chiffre d'affaire :";
        // line 79
        if ((($context["montantDepence"] ?? $this->getContext($context, "montantDepence")) || ($context["montantRecette"] ?? $this->getContext($context, "montantRecette")))) {
            echo " ";
            echo twig_escape_filter($this->env, (($context["montantRecette"] ?? $this->getContext($context, "montantRecette")) + ($context["montantDepence"] ?? $this->getContext($context, "montantDepence"))), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo "</th>
                </tr>
                </thead>
            </table>
            <div class=\"box box-success\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Historique</h3>
                </div>
                <div class=\"box-body\">
                    <table id=\"table_recette\" class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Montant</th>
                            <th>Employé</th>
                            <th>Date </th>
                            <th>Description </th>
                            <th>Type oprération</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Montant</th>
                            <th>Employé</th>
                            <th>Date </th>
                            <th>Description </th>
                            <th>Type oprération</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        ";
        // line 110
        if ((($context["result"] ?? $this->getContext($context, "result")) == 1)) {
            // line 111
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["operations"] ?? $this->getContext($context, "operations")));
            foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
                // line 112
                echo "                                <tr>
                                    <td>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "id", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "montantOperation", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["operation"], "user", []), "nom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["operation"], "user", []), "prenom", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 116
                if ($this->getAttribute($context["operation"], "dateOperation", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["operation"], "dateOperation", []), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                                    <td>";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "descriptionOperation", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 118
                if (($this->getAttribute($context["operation"], "typeOperation", []) == 1)) {
                    // line 119
                    echo "                                            <span class=\"label label-success label-mini\">Recette</span>
                                        ";
                } else {
                    // line 121
                    echo "                                            <span class=\"label label-danger label-mini\">Dépence</span>
                                        ";
                }
                // line 123
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                        ";
        }
        // line 127
        echo "                        </tbody>
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
        return "StockBundle:Vente:rapportchiffreaffaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 127,  306 => 126,  298 => 123,  294 => 121,  290 => 119,  288 => 118,  284 => 117,  278 => 116,  272 => 115,  268 => 114,  264 => 113,  261 => 112,  256 => 111,  254 => 110,  214 => 79,  205 => 78,  195 => 77,  182 => 67,  179 => 66,  174 => 64,  169 => 60,  161 => 53,  156 => 52,  150 => 49,  143 => 44,  138 => 43,  132 => 40,  125 => 35,  120 => 34,  114 => 31,  107 => 28,  104 => 27,  90 => 15,  81 => 14,  61 => 3,  52 => 2,  30 => 1,);
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
                Rapport
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
                <li><a href=\"#\">Rapport sur le chiffre d'affaire</a></li>
            </ol>
        </section>
    {%endblock%}
    {%block body%}
        <div class=\"box-header box box-success\">
            <h3 class=\"box-title\">Rapport sur le chiffre d'affaire</h3>


        </div>
        <div class=\"box-body\">
            <div class=\"callout callout-info\" style=\"margin-bottom: 0!important;\">
                <h4><i class=\"fa fa-info\"></i> Note:</h4>
                Veuillez choisir vos options.
            </div>
            <br>

            {{ form_start(form) }} {# Les erreurs générales du formulaire. #}
            {{ form_errors(form) }}
            <div class=\"row clearfix\">
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                    {{ form_label(form.compte, \"Numéro du compte\", {'label_attr': {'class': 'form-label'}}) }}
                    <div class=\"form-group  form-float\">
                        <div class=\"form-line\">
                            {{ form_widget(form.compte, {'attr': {'class': 'form-control', 'placeholder':'Numéro du compte'} }) }}  {# Affichage des erreurs pour ce champ précis. #} {{ form_errors(form.compte)
                            }}
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                    {{ form_label(form.dateFrom, \"Date Debut\", {'label_attr': {'class': 'form-label'}}) }}
                    <div class=\"form-group  form-float\">
                        <div class=\"form-line\">
                            {{ form_widget(form.dateFrom, {'attr': {'class': 'form-control', 'placeholder':'Debut'} }) }}  {# Affichage des erreurs pour ce champ précis. #} {{ form_errors(form.dateFrom)
                            }}
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                    {{ form_label(form.dateTo, \"Date Fin\", {'label_attr': {'class': 'form-label'}}) }}
                    <div class=\"form-group  form-float\">
                        <div class=\"form-line\">
                            {{ form_widget(form.dateTo, {'attr': {'class': 'form-control', 'placeholder':'Fin' } }) }}  {# Affichage des erreurs pour ce champ précis. #} {{ form_errors(form.dateTo)
                            }}
                        </div>
                    </div>
                </div>
            </div>

            {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
            <div class=\"pull-right\">
                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
            </div>
            {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
            {# Génération automatique des champs pas encore écrits. Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !) et tous les champs cachés (type « hidden »). #} {{ form_rest(form) }} {# Fermeture de la balise
                     <form> du formulaire HTML #}

            {{ form_end(form) }}


            <br>
            <br>


            <table class=\"table\">
                <thead>
                <tr>
                    <th>Recettes :{% if montantRecette %} {{ montantRecette }} {% else %} 0 {% endif %}</th>
                    <th>Dépences : {% if montantDepence %} {{ montantDepence }}{% else %} 0  {% endif %}</th>
                    <th>Chiffre d'affaire :{% if montantDepence or montantRecette %} {{ montantRecette + montantDepence }} {% else %} 0 {% endif %}</th>
                </tr>
                </thead>
            </table>
            <div class=\"box box-success\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Historique</h3>
                </div>
                <div class=\"box-body\">
                    <table id=\"table_recette\" class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Montant</th>
                            <th>Employé</th>
                            <th>Date </th>
                            <th>Description </th>
                            <th>Type oprération</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Montant</th>
                            <th>Employé</th>
                            <th>Date </th>
                            <th>Description </th>
                            <th>Type oprération</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        {%if result==1%}
                            {% for operation in operations %}
                                <tr>
                                    <td>{{ operation.id }}</td>
                                    <td>{{ operation.montantOperation }}</td>
                                    <td>{{ operation.user.nom  }} {{ operation.user.prenom  }}</td>
                                    <td>{% if operation.dateOperation %}{{ operation.dateOperation|date('Y-m-d H:i:s') }}{% endif %}</td>
                                    <td>{{ operation.descriptionOperation }}</td>
                                    <td>{% if operation.typeOperation == 1 %}
                                            <span class=\"label label-success label-mini\">Recette</span>
                                        {% else %}
                                            <span class=\"label label-danger label-mini\">Dépence</span>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        {% endif %}
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>

    {% endblock %}", "StockBundle:Vente:rapportchiffreaffaire.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\StockBundle/Resources/views/Vente/rapportchiffreaffaire.html.twig");
    }
}
