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

/* StockBundle:Vente:ajouterVente.html.twig */
class __TwigTemplate_d81370fe971e4e91f0d12c36f81512b2909081329fb11093c522d7bc89d53f8e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:ajouterVente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:ajouterVente.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:ajouterVente.html.twig", 1);
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
        echo "        ";
        if ((($context["result"] ?? $this->getContext($context, "result")) == 3)) {
            // line 16
            echo "            <div class=\"alert alert-default alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Veuillez remplir les champs pour créer une vente</strong>
            </div>

        ";
        } elseif ((        // line 21
($context["result"] ?? $this->getContext($context, "result")) == 2)) {
            // line 22
            echo "            <div class=\"alert alert-success alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Enregistrement éffectué avec succée.</strong>
            </div>
        ";
        } elseif ((        // line 26
($context["result"] ?? $this->getContext($context, "result")) == 1)) {
            // line 27
            echo "            <div class=\"alert alert-danger alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Cet enregistrement existe déja.</strong>
            </div>
        ";
        } elseif ((        // line 31
($context["result"] ?? $this->getContext($context, "result")) == 4)) {
            // line 32
            echo "            <div class=\"alert alert-danger alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>La quantité demandée(";
            // line 34
            echo twig_escape_filter($this->env, ($context["quantiteDemande"] ?? $this->getContext($context, "quantiteDemande")), "html", null, true);
            echo ") est superieur à la quantité disponible (";
            echo twig_escape_filter($this->env, ($context["quantiteDisponible"] ?? $this->getContext($context, "quantiteDisponible")), "html", null, true);
            echo ").</strong>
            </div>
        ";
        }
        // line 37
        echo "        <div class=\"box box-success\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">créer vente</h3>

                <div class=\"pull-right\" >
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste");
        echo "\"  class=\"btn bg-olive btn-flat margin\">liste des ventes</a>
                </div>
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Produit </label>
                            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stock", []), 'widget', ["attr" => ["class" => "select2 form-control", "placeholder" => "Produit"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Quantité</label>
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantiteAchat", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "quantite", "min" => "0"]]);
        echo "
                            <div class=\"pull-left\" >
                                <a class=\"btn bg-maroon btn-flat margin\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste");
        echo "\" >Annuler</a>
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>
                            ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                </div>
            </div>
        </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Vente:ajouterVente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 66,  169 => 63,  164 => 61,  154 => 54,  150 => 53,  136 => 42,  129 => 37,  121 => 34,  117 => 32,  115 => 31,  109 => 27,  107 => 26,  101 => 22,  99 => 21,  92 => 16,  89 => 15,  80 => 14,  61 => 3,  52 => 2,  30 => 1,);
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
        {%if result == 3 %}
            <div class=\"alert alert-default alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>Veuillez remplir les champs pour créer une vente</strong>
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
        {% elseif result == 4 %}
            <div class=\"alert alert-danger alert-dismissible\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>La quantité demandée({{quantiteDemande}}) est superieur à la quantité disponible ({{quantiteDisponible}}).</strong>
            </div>
        {% endif %}
        <div class=\"box box-success\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">créer vente</h3>

                <div class=\"pull-right\" >
                    <a href=\"{{path('vente_liste')}}\"  class=\"btn bg-olive btn-flat margin\">liste des ventes</a>
                </div>
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Produit </label>
                            {{ form_start(form) }}
                            {{ form_widget(form.stock, {'attr': {'class': 'select2 form-control', 'placeholder':'Produit'} }) }}
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Quantité</label>
                            {{ form_widget(form.quantiteAchat, {'attr': {'class': 'form-control', 'placeholder':'quantite', 'min':'0'} }) }}
                            <div class=\"pull-left\" >
                                <a class=\"btn bg-maroon btn-flat margin\" href=\"{{ path('vente_liste') }}\" >Annuler</a>
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>
                            {{ form_end(form) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                </div>
            </div>
        </div>

    {% endblock %}
", "StockBundle:Vente:ajouterVente.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\StockBundle/Resources/views/Vente/ajouterVente.html.twig");
    }
}
