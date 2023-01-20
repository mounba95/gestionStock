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

/* InformationBundle:Information:listeInformation.html.twig */
class __TwigTemplate_d54b6e89946d8c1f97bf9b25ae68cc9d9d619362715879a990f8c44c0a2b2f43 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "InformationBundle:Information:listeInformation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "InformationBundle:Information:listeInformation.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "InformationBundle:Information:listeInformation.html.twig", 1);
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
                Information
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
                <li><a href=\"#\">Information</a></li>
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
            <h3 class=\"box-title\">Information</h3>
            ";
        // line 17
        if (twig_test_empty(($context["informationListe"] ?? $this->getContext($context, "informationListe")))) {
            // line 18
            echo "            <div class=\"pull-right\" >
                <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("information_ajouter");
            echo "\"  class=\"btn bg-olive btn-flat margin\">Ajouter Information</a>
            </div>
            ";
        }
        // line 22
        echo "        </div>

        <div class=\"box-body\">
            <table id=\"table_pays\" class=\"table\">
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informationListe"] ?? $this->getContext($context, "informationListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 28
            echo "                    <tr>
                        <th>Logo</th>
                        <td>  <img width=\"160\" height=\"60\" alt=\"\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/logos/" . $this->getAttribute($context["liste"], "path", []))), "html", null, true);
            echo "\"  ></td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomInformation", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>DG</th>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "dg", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "adresse", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Téléphone</th>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "tel", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Cellulaire</th>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "cel", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "email", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Situation juridique</th>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "situationJuridique", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Slogant</th>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "slogant", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Compte banquaire</th>
                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "compteBancaire", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Code postal</th>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "codePostal", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Site web</th>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "siteweb", []), "html", null, true);
            echo "</td>
                    </tr>
                     <tr>
                        <th>Message</th>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "message", []), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a class=\"btn btn-primary\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("information_modifier", ["id" => $this->getAttribute($context["liste"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i></a></td>

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                </tbody>
            </table>
        </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "InformationBundle:Information:listeInformation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 86,  211 => 82,  204 => 78,  197 => 74,  190 => 70,  183 => 66,  176 => 62,  169 => 58,  162 => 54,  155 => 50,  148 => 46,  141 => 42,  134 => 38,  127 => 34,  120 => 30,  116 => 28,  112 => 27,  105 => 22,  99 => 19,  96 => 18,  94 => 17,  90 => 15,  81 => 14,  61 => 3,  52 => 2,  30 => 1,);
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
                Information
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
                <li><a href=\"#\">Information</a></li>
            </ol>
        </section>
    {%endblock%}
    {%block body%}
        <div class=\"box-header box box-success\">
            <h3 class=\"box-title\">Information</h3>
            {% if informationListe is empty %}
            <div class=\"pull-right\" >
                <a href=\"{{path('information_ajouter')}}\"  class=\"btn bg-olive btn-flat margin\">Ajouter Information</a>
            </div>
            {% endif %}
        </div>

        <div class=\"box-body\">
            <table id=\"table_pays\" class=\"table\">
                <tbody>
                {% for liste in informationListe %}
                    <tr>
                        <th>Logo</th>
                        <td>  <img width=\"160\" height=\"60\" alt=\"\" src=\"{{ asset('uploads/logos/'~ liste.path) }}\"  ></td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>{{ liste.nomInformation }}</td>
                    </tr>
                    <tr>
                        <th>DG</th>
                        <td>{{ liste.dg }}</td>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <td>{{ liste.adresse }}</td>
                    </tr>
                    <tr>
                        <th>Téléphone</th>
                        <td>{{ liste.tel }}</td>
                    </tr>
                    <tr>
                        <th>Cellulaire</th>
                        <td>{{ liste.cel }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ liste.email }}</td>
                    </tr>
                    <tr>
                        <th>Situation juridique</th>
                        <td>{{ liste.situationJuridique }}</td>
                    </tr>
                    <tr>
                        <th>Slogant</th>
                        <td>{{ liste.slogant }}</td>
                    </tr>
                    <tr>
                        <th>Compte banquaire</th>
                        <td>{{ liste.compteBancaire }}</td>
                    </tr>
                    <tr>
                        <th>Code postal</th>
                        <td>{{ liste.codePostal }}</td>
                    </tr>
                    <tr>
                        <th>Site web</th>
                        <td>{{ liste.siteweb }}</td>
                    </tr>
                     <tr>
                        <th>Message</th>
                        <td>{{ liste.message }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a class=\"btn btn-primary\" href=\"{{ path('information_modifier', {'id': liste.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>

                    </tr>
                {%endfor%}
                </tbody>
            </table>
        </div>

    {% endblock %}
", "InformationBundle:Information:listeInformation.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\InformationBundle/Resources/views/Information/listeInformation.html.twig");
    }
}
