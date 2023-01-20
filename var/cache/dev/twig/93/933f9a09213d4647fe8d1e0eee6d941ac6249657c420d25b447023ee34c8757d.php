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

/* ClientBundle:Fournisseur:ajouterFournisseur.html.twig */
class __TwigTemplate_319644034740c2d1e21177e7b0a64903630790f277dfd8a9daba7f76b75a75d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClientBundle:Fournisseur:ajouterFournisseur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClientBundle:Fournisseur:ajouterFournisseur.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "ClientBundle:Fournisseur:ajouterFournisseur.html.twig", 1);
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
                Fournisseur
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
                <h3 class=\"box-title\">Ajouter Fournisseur</h3>

                <div class=\"pull-right\" >
                    <!--  <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_liste");
        echo "\"  class=\"btn bg-olive btn-flat margin\">liste fournisseur</a> -->
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomFournisseur", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom et prénom du fournisseur"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Numéro de téléphone</label>
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroFournisseur", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "numéro de téléphone du fournisseur"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Email</label>
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "emailFournisseur", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "adresse email du fournisseur"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Adresse</label>
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresseFournisseur", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "adresse du fournisseur"]]);
        echo "

                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"pull-right\" >
                            <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_ajouter");
        echo "\"  class=\"btn bg-maroon btn-flat\">Annuler</a>
                            <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>

                            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>

                    <!-- /.col -->
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">

                </div>

                ";
        // line 75
        if ((($context["result"] ?? $this->getContext($context, "result")) == 3)) {
            // line 76
            echo "                    <div class=\"alert alert-default alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Veuillez remplir les champs pour ajouter un nouveau type</strong>
                    </div>

                ";
        } elseif ((        // line 81
($context["result"] ?? $this->getContext($context, "result")) == 2)) {
            // line 82
            echo "                    <div class=\"alert alert-success alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Enregistrement éffectué avec succée.</strong>
                    </div>
                ";
        } elseif ((        // line 86
($context["result"] ?? $this->getContext($context, "result")) == 1)) {
            // line 87
            echo "                    <div class=\"alert alert-danger alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Cet enregistrement existe déja.</strong>
                    </div>
                ";
        }
        // line 92
        echo "
                <table id=\"table_fournisseur\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Réference</th>
                        <th>Nom</th>
                        <th>Noméro de téléphone</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Modifer</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Réference</th>
                        <th>Nom</th>
                        <th>Noméro de téléphone</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Modifer</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fournisseurListe"] ?? $this->getContext($context, "fournisseurListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 116
            echo "                        <tr>
                            <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "referenceFournisseur", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomFournisseur", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "numeroFournisseur", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "emailFournisseur", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "adresseFournisseur", []), "html", null, true);
            echo "</td>

                            <td><a class=\"btn btn-primary\" href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_modifier", ["id" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
            echo "\">Modifier</a></td>

                            <!--  <td><a class=\"btn btn-danger\" href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_supprimer", ["id" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce fornisseur?');\" >Supprimer</a></td> -->

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
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
        return "ClientBundle:Fournisseur:ajouterFournisseur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 129,  260 => 125,  255 => 123,  250 => 121,  246 => 120,  242 => 119,  238 => 118,  234 => 117,  231 => 116,  227 => 115,  202 => 92,  195 => 87,  193 => 86,  187 => 82,  185 => 81,  178 => 76,  176 => 75,  161 => 63,  155 => 60,  145 => 53,  136 => 47,  126 => 40,  116 => 33,  112 => 32,  98 => 21,  90 => 15,  81 => 14,  61 => 3,  52 => 2,  30 => 1,);
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
                Fournisseur
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
                <h3 class=\"box-title\">Ajouter Fournisseur</h3>

                <div class=\"pull-right\" >
                    <!--  <a href=\"{{path('fournisseur_liste')}}\"  class=\"btn bg-olive btn-flat margin\">liste fournisseur</a> -->
                </div>
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Nom et prénom</label>
                            {{ form_start(form) }}
                            {{ form_widget(form.nomFournisseur, {'attr': {'class': 'form-control', 'placeholder':'nom et prénom du fournisseur'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Numéro de téléphone</label>
                            {{ form_widget(form.numeroFournisseur, {'attr': {'class': 'form-control', 'placeholder':'numéro de téléphone du fournisseur'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Email</label>
                            {{ form_widget(form.emailFournisseur, {'attr': {'class': 'form-control', 'placeholder':'adresse email du fournisseur'} }) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Adresse</label>
                            {{ form_widget(form.adresseFournisseur, {'attr': {'class': 'form-control', 'placeholder':'adresse du fournisseur'} }) }}

                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"pull-right\" >
                            <a href=\"{{path('fournisseur_ajouter')}}\"  class=\"btn bg-maroon btn-flat\">Annuler</a>
                            <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>

                            {{ form_end(form) }}
                        </div>
                    </div>

                    <!-- /.col -->
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">

                </div>

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

                <table id=\"table_fournisseur\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Réference</th>
                        <th>Nom</th>
                        <th>Noméro de téléphone</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Modifer</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Réference</th>
                        <th>Nom</th>
                        <th>Noméro de téléphone</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Modifer</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    {% for liste in fournisseurListe %}
                        <tr>
                            <td>{{ liste.referenceFournisseur }}</td>
                            <td>{{ liste.nomFournisseur }}</td>
                            <td>{{ liste.numeroFournisseur }}</td>
                            <td>{{ liste.emailFournisseur}}</td>
                            <td>{{ liste.adresseFournisseur }}</td>

                            <td><a class=\"btn btn-primary\" href=\"{{ path('fournisseur_modifier', {'id': liste.id}) }}\">Modifier</a></td>

                            <!--  <td><a class=\"btn btn-danger\" href=\"{{ path('fournisseur_supprimer', {'id': liste.id}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce fornisseur?');\" >Supprimer</a></td> -->

                        </tr>
                    {%endfor%}
                    </tbody>
                </table>
            </div>
        </div>

    {% endblock %}
", "ClientBundle:Fournisseur:ajouterFournisseur.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\ClientBundle/Resources/views/Fournisseur/ajouterFournisseur.html.twig");
    }
}
