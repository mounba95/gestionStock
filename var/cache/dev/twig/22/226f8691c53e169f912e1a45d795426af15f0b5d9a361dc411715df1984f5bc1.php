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

/* ClientBundle:Client:ajouterClient.html.twig */
class __TwigTemplate_fe411317e40f5af8a8fa37053fa3edabe07b06e546b69bb30e27fb955a99ae8d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClientBundle:Client:ajouterClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClientBundle:Client:ajouterClient.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "ClientBundle:Client:ajouterClient.html.twig", 1);
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
                Client
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
                <h3 class=\"box-title\">Ajouter Client</h3>

                <div class=\"pull-right\" >
                    <!--       <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_liste");
        echo "\"  class=\"btn bg-olive btn-flat margin\">liste client</a>-->
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomClient", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom et prénom du client"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Email</label>
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "emailClient", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "adresse email client"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Numéro de téléphone</label>
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroClient", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "numero de téléphone du client", "min" => "0"]]);
        echo "
                        </div>

                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Adresse</label>
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresseClient", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "adresse du client"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"pull-right\" >
                            <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_ajouter");
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
        // line 74
        if ((($context["result"] ?? $this->getContext($context, "result")) == 3)) {
            // line 75
            echo "                    <div class=\"alert alert-default alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Veuillez remplir les champs pour ajouter un nouveau type</strong>
                    </div>

                ";
        } elseif ((        // line 80
($context["result"] ?? $this->getContext($context, "result")) == 2)) {
            // line 81
            echo "                    <div class=\"alert alert-success alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Enregistrement éffectué avec succée.</strong>
                    </div>
                ";
        } elseif ((        // line 85
($context["result"] ?? $this->getContext($context, "result")) == 1)) {
            // line 86
            echo "                    <div class=\"alert alert-danger alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Cet enregistrement existe déja.</strong>
                    </div>
                ";
        }
        // line 91
        echo "                </br>
                <table id=\"table_client\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Reference</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Noméro de téléphone</th>
                        <th>Adresse</th>
                        <th>Modifer</th>
                        <!-- <th>Supprimer</th> -->
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Reference</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Noméro de téléphone</th>
                        <th>Adresse</th>
                        <th>Modifer</th>
                        <!--  <th>Supprimer</th> -->
                    </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clientListe"] ?? $this->getContext($context, "clientListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 117
            echo "                        <tr>
                            <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "referenceClient", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomClient", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "emailClient", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "numeroClient", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "adresseClient", []), "html", null, true);
            echo "</td>

                            <td><a class=\"btn btn-primary\" href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_modifier", ["id" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
            echo "\">Modifier</a></td>

                            <!--   <td><a class=\"btn btn-danger\" href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_supprimer", ["id" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce client?');\">Supprimer</a></td>-->


                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
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
        return "ClientBundle:Client:ajouterClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 131,  261 => 126,  256 => 124,  251 => 122,  247 => 121,  243 => 120,  239 => 119,  235 => 118,  232 => 117,  228 => 116,  201 => 91,  194 => 86,  192 => 85,  186 => 81,  184 => 80,  177 => 75,  175 => 74,  161 => 63,  156 => 61,  147 => 55,  136 => 47,  126 => 40,  116 => 33,  112 => 32,  98 => 21,  90 => 15,  81 => 14,  61 => 3,  52 => 2,  30 => 1,);
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
                Client
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
                <h3 class=\"box-title\">Ajouter Client</h3>

                <div class=\"pull-right\" >
                    <!--       <a href=\"{{path('client_liste')}}\"  class=\"btn bg-olive btn-flat margin\">liste client</a>-->
                </div>
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Nom et prénom</label>
                            {{ form_start(form) }}
                            {{ form_widget(form.nomClient, {'attr': {'class': 'form-control', 'placeholder':'nom et prénom du client'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Email</label>
                            {{ form_widget(form.emailClient, {'attr': {'class': 'form-control', 'placeholder':'adresse email client'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Numéro de téléphone</label>
                            {{ form_widget(form.numeroClient, {'attr': {'class': 'form-control', 'placeholder':'numero de téléphone du client','min':'0'} }) }}
                        </div>

                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Adresse</label>
                            {{ form_widget(form.adresseClient, {'attr': {'class': 'form-control', 'placeholder':'adresse du client'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"pull-right\" >
                            <a href=\"{{path('client_ajouter')}}\"  class=\"btn bg-maroon btn-flat\">Annuler</a>
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
                </br>
                <table id=\"table_client\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Reference</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Noméro de téléphone</th>
                        <th>Adresse</th>
                        <th>Modifer</th>
                        <!-- <th>Supprimer</th> -->
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Reference</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Noméro de téléphone</th>
                        <th>Adresse</th>
                        <th>Modifer</th>
                        <!--  <th>Supprimer</th> -->
                    </tr>
                    </tfoot>
                    <tbody>
                    {% for liste in clientListe %}
                        <tr>
                            <td>{{ liste.referenceClient}}</td>
                            <td>{{ liste.nomClient }}</td>
                            <td>{{ liste.emailClient}}</td>
                            <td>{{ liste.numeroClient }}</td>
                            <td>{{ liste.adresseClient }}</td>

                            <td><a class=\"btn btn-primary\" href=\"{{ path('client_modifier', {'id': liste.id}) }}\">Modifier</a></td>

                            <!--   <td><a class=\"btn btn-danger\" href=\"{{ path('client_supprimer', {'id': liste.id}) }}\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce client?');\">Supprimer</a></td>-->


                        </tr>
                    {%endfor%}
                    </tbody>
                </table>
            </div>
        </div>

    {% endblock %}
", "ClientBundle:Client:ajouterClient.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\ClientBundle/Resources/views/Client/ajouterClient.html.twig");
    }
}
