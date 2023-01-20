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

/* ProduitBundle:Produit:ajouterProduit.html.twig */
class __TwigTemplate_f17a8b0d8c9be89eba680305e860549b868e479d01f776fd558f5742906e64d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProduitBundle:Produit:ajouterProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProduitBundle:Produit:ajouterProduit.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "ProduitBundle:Produit:ajouterProduit.html.twig", 1);
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
                Produit
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
                <h3 class=\"box-title\">Ajouter Produit</h3>

                <div class=\"pull-right\" >
                    <!--                    <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_liste");
        echo "\"  class=\"btn bg-olive btn-flat margin\">liste des produits</a> -->
                </div>
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Type</label>
                            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeProduit", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom du type"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Nom</label>
                            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomProduit", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom produit"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Description</label>
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descriptionProduit", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "description du type"]]);
        echo "
                            <div class=\"pull-right\" >

                                <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_ajouter");
        echo "\"  class=\"btn bg-maroon btn-flat\">Annuler</a>
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>
                            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">
                </div>

                ";
        // line 64
        if ((($context["result"] ?? $this->getContext($context, "result")) == 3)) {
            // line 65
            echo "                    <div class=\"alert alert-default alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Veuillez remplir les champs pour ajouter un nouveau produit</strong>
                    </div>

                ";
        } elseif ((        // line 70
($context["result"] ?? $this->getContext($context, "result")) == 2)) {
            // line 71
            echo "                    <div class=\"alert alert-success alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Enregistrement éffectué avec succée.</strong>
                    </div>
                ";
        } elseif ((        // line 75
($context["result"] ?? $this->getContext($context, "result")) == 1)) {
            // line 76
            echo "                    <div class=\"alert alert-danger alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Cet enregistrement existe déja.</strong>
                    </div>
                ";
        }
        // line 81
        echo "                </br>
                <table id=\"table_produit\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Réference</th>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Modifer</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Réference</th>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Modifer</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produitListe"] ?? $this->getContext($context, "produitListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 103
            echo "                        <tr>
                            <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "referenceProduit", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomProduit", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["liste"], "typeProduit", []), "nomType", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "descriptionProduit", []), "html", null, true);
            echo "</td>

                            <td><a class=\"btn btn-primary\" href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_modifier", ["id" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
            echo "\">Modifer</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
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
        return "ProduitBundle:Produit:ajouterProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 112,  238 => 109,  233 => 107,  229 => 106,  225 => 105,  221 => 104,  218 => 103,  214 => 102,  191 => 81,  184 => 76,  182 => 75,  176 => 71,  174 => 70,  167 => 65,  165 => 64,  153 => 55,  147 => 52,  141 => 49,  131 => 42,  127 => 41,  116 => 33,  112 => 32,  98 => 21,  90 => 15,  81 => 14,  61 => 3,  52 => 2,  30 => 1,);
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
                Produit
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
                <h3 class=\"box-title\">Ajouter Produit</h3>

                <div class=\"pull-right\" >
                    <!--                    <a href=\"{{path('produit_liste')}}\"  class=\"btn bg-olive btn-flat margin\">liste des produits</a> -->
                </div>
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Type</label>
                            {{ form_start(form) }}
                            {{ form_widget(form.typeProduit, {'attr': {'class': 'form-control', 'placeholder':'nom du type'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Nom</label>
                            {{ form_start(form) }}
                            {{ form_widget(form.nomProduit, {'attr': {'class': 'form-control', 'placeholder':'nom produit'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Description</label>
                            {{ form_widget(form.descriptionProduit, {'attr': {'class': 'form-control', 'placeholder':'description du type'} }) }}
                            <div class=\"pull-right\" >

                                <a href=\"{{path('produit_ajouter')}}\"  class=\"btn bg-maroon btn-flat\">Annuler</a>
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>
                            {{ form_end(form) }}
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">
                </div>

                {%if result == 3 %}
                    <div class=\"alert alert-default alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Veuillez remplir les champs pour ajouter un nouveau produit</strong>
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
                </br>
                <table id=\"table_produit\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Réference</th>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Modifer</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Réference</th>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Modifer</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    {% for liste in produitListe %}
                        <tr>
                            <td>{{ liste.referenceProduit }}</td>
                            <td>{{ liste.nomProduit }}</td>
                            <td>{{ liste.typeProduit.nomType }}</td>
                            <td>{{ liste.descriptionProduit }}</td>

                            <td><a class=\"btn btn-primary\" href=\"{{ path('produit_modifier', {'id': liste.id}) }}\">Modifer</a></td>
                        </tr>
                    {%endfor%}
                    </tbody>
                </table>
            </div>
        </div>
    {% endblock %}
", "ProduitBundle:Produit:ajouterProduit.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\ProduitBundle/Resources/views/Produit/ajouterProduit.html.twig");
    }
}
