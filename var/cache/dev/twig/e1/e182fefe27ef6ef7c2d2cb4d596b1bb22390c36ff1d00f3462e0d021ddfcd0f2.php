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

/* ProduitBundle:TypeProduit:ajouterTypeProduit.html.twig */
class __TwigTemplate_8ef1412339e96f37e01a2e98802e24140701f2f89a2e474c45b5c794414e5aef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProduitBundle:TypeProduit:ajouterTypeProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProduitBundle:TypeProduit:ajouterTypeProduit.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "ProduitBundle:TypeProduit:ajouterTypeProduit.html.twig", 1);
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
                Type
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
                <h3 class=\"box-title\">Ajouter Type</h3>

                <div class=\"pull-right\" >
                    <!--  <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_type_liste");
        echo "\"  class=\"btn bg-olive btn-flat margin\">liste Type</a>-->
                </div>
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                <div class=\"row\">

                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Nom</label>
                            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomType", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom du type"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                        <div class=\"pull-right\" >
                            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_type_ajouter");
        echo "\"  class=\"btn bg-maroon btn-flat\">Annuler</a>
                            <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Description</label>
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descriptionType", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "description du type"]]);
        echo "

                            ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                </div>
                <!-- /.col -->
                <!-- /.row -->
                </br>
                ";
        // line 54
        if ((($context["result"] ?? $this->getContext($context, "result")) == 3)) {
            // line 55
            echo "                    <div class=\"alert alert-default alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Veuillez remplir les champs pour ajouter un nouveau type</strong>
                    </div>

                ";
        } elseif ((        // line 60
($context["result"] ?? $this->getContext($context, "result")) == 2)) {
            // line 61
            echo "                    <div class=\"alert alert-success alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Enregistrement éffectué avec succée.</strong>
                    </div>
                ";
        } elseif ((        // line 65
($context["result"] ?? $this->getContext($context, "result")) == 0)) {
            // line 66
            echo "
                ";
        } elseif ((        // line 67
($context["result"] ?? $this->getContext($context, "result")) == 1)) {
            // line 68
            echo "                    <div class=\"alert alert-danger alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Cet enregistrement existe déja.</strong>
                    </div>
                ";
        }
        // line 73
        echo "
                <table id=\"table_typeProduit\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeProduitListe"] ?? $this->getContext($context, "typeProduitListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 95
            echo "                        <tr>
                            <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "id", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomType", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "descriptionType", []), "html", null, true);
            echo "</td>

                            <td><a class=\"btn btn-primary\" href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_type_modifier", ["id" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
            echo "\">Modifier</a></td>

                            <td><a class=\"btn btn-info\" href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_type_detail", ["id" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
            echo "\" >Detail</a></td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                    </tbody>
                </table>
                <!-- /.box-body -->
                <div class=\"box-footer\">

                </div>
            </div>
        </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ProduitBundle:TypeProduit:ajouterTypeProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 106,  228 => 102,  223 => 100,  218 => 98,  214 => 97,  210 => 96,  207 => 95,  203 => 94,  180 => 73,  173 => 68,  171 => 67,  168 => 66,  166 => 65,  160 => 61,  158 => 60,  151 => 55,  149 => 54,  138 => 46,  133 => 44,  123 => 37,  116 => 33,  112 => 32,  97 => 20,  90 => 15,  81 => 14,  61 => 3,  52 => 2,  30 => 1,);
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
                Type
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
                <h3 class=\"box-title\">Ajouter Type</h3>

                <div class=\"pull-right\" >
                    <!--  <a href=\"{{path('produit_type_liste')}}\"  class=\"btn bg-olive btn-flat margin\">liste Type</a>-->
                </div>
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                <div class=\"row\">

                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Nom</label>
                            {{ form_start(form) }}
                            {{ form_widget(form.nomType, {'attr': {'class': 'form-control', 'placeholder':'nom du type'} }) }}
                        </div>
                        <!-- /.form-group -->
                        <div class=\"pull-right\" >
                            <a href=\"{{path('produit_type_ajouter')}}\"  class=\"btn bg-maroon btn-flat\">Annuler</a>
                            <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Description</label>
                            {{ form_widget(form.descriptionType, {'attr': {'class': 'form-control', 'placeholder':'description du type'} }) }}

                            {{ form_end(form) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                </div>
                <!-- /.col -->
                <!-- /.row -->
                </br>
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
                {% elseif result == 0 %}

                {% elseif result == 1 %}
                    <div class=\"alert alert-danger alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Cet enregistrement existe déja.</strong>
                    </div>
                {% endif %}

                <table id=\"table_typeProduit\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Modifier</th>
                        <th>Detail</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    {% for liste in typeProduitListe %}
                        <tr>
                            <td>{{ liste.id }}</td>
                            <td>{{ liste.nomType }}</td>
                            <td>{{ liste.descriptionType }}</td>

                            <td><a class=\"btn btn-primary\" href=\"{{ path('produit_type_modifier', {'id': liste.id}) }}\">Modifier</a></td>

                            <td><a class=\"btn btn-info\" href=\"{{ path('produit_type_detail', {'id': liste.id}) }}\" >Detail</a></td>

                        </tr>
                    {%endfor%}
                    </tbody>
                </table>
                <!-- /.box-body -->
                <div class=\"box-footer\">

                </div>
            </div>
        </div>

    {% endblock %}
", "ProduitBundle:TypeProduit:ajouterTypeProduit.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\ProduitBundle/Resources/views/TypeProduit/ajouterTypeProduit.html.twig");
    }
}
