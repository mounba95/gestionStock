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

/* userManagerBundle:User:listeUser.html.twig */
class __TwigTemplate_311fec54ddbcc20d0feae80230a584382b70059ac11f30f9d35d4bf327c69023 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userManagerBundle:User:listeUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userManagerBundle:User:listeUser.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "userManagerBundle:User:listeUser.html.twig", 1);
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
        echo "<section class=\"content-header\">
    <h1>
        Utilisateurs
    </h1>
    <ol class=\"breadcrumb\">
        <li>
            <a href=\"#\">
                <i class=\"fa fa-dashboard\"></i>Accueil</a>
        </li>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_liste");
        echo "\">liste des ulisateurs</a>
        </li>
    </ol>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"box-header box box-success\">
        <h3 class=\"box-title\">Listes des utilisateurs</h3>

        <div class=\"pull-right\">
            <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\" class=\"btn bg-olive btn-flat margin\">Ajouter utilisateur</a>
        </div>
    </div>

    <div class=\"box-body\">
        <table class=\"table table-bordered\" id=\"table_user\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Nom d'utilisateur</th>
                    <th>Rôle</th>
                    <th>Téléphone</th>
                    <th>Reinitialiser MDP</th>
                   <!-- <th>Supprimer</th> -->

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Nom d'utilisateur</th>
                    <th>Rôle</th>
                    <th>Téléphone</th>
                    <th>Reinitialiser MDP</th>
                    <!-- <th>Supprimer</th> -->

                </tr>
            </tfoot>
            <tbody>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 55
            echo "                    <tr>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 61
                echo "                                ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo ",
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                        </td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "telephone", []), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-warning\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_reset", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
            echo "\">
                                <i class=\"fa fa-refresh\"></i>
                            </a>
                        </td>
                        <!--
                        <td>
                            <a class=\"btn btn-danger\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
            echo "\">
                                <i class=\"fa fa-close\"></i>
                            </a>
                        </td>
                        -->
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "</tbody>
            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "userManagerBundle:User:listeUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 78,  187 => 72,  178 => 66,  173 => 64,  170 => 63,  161 => 61,  157 => 60,  152 => 58,  148 => 57,  144 => 56,  141 => 55,  137 => 54,  103 => 23,  97 => 19,  88 => 18,  73 => 13,  61 => 3,  52 => 2,  30 => 1,);
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
        Utilisateurs
    </h1>
    <ol class=\"breadcrumb\">
        <li>
            <a href=\"#\">
                <i class=\"fa fa-dashboard\"></i>Accueil</a>
        </li>
        <li>
            <a href=\"{{path('user_liste')}}\">liste des ulisateurs</a>
        </li>
    </ol>
</section>
{%endblock%}
{%block body%}
    <div class=\"box-header box box-success\">
        <h3 class=\"box-title\">Listes des utilisateurs</h3>

        <div class=\"pull-right\">
            <a href=\"{{path('user_register')}}\" class=\"btn bg-olive btn-flat margin\">Ajouter utilisateur</a>
        </div>
    </div>

    <div class=\"box-body\">
        <table class=\"table table-bordered\" id=\"table_user\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Nom d'utilisateur</th>
                    <th>Rôle</th>
                    <th>Téléphone</th>
                    <th>Reinitialiser MDP</th>
                   <!-- <th>Supprimer</th> -->

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Nom d'utilisateur</th>
                    <th>Rôle</th>
                    <th>Téléphone</th>
                    <th>Reinitialiser MDP</th>
                    <!-- <th>Supprimer</th> -->

                </tr>
            </tfoot>
            <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ user.nom}}</td>
                        <td>{{ user.prenom }}</td>
                        <td>{{ user.username}}</td>
                        <td>
                            {% for role in user.roles %}
                                {{ role }},
                            {% endfor %}
                        </td>
                        <td>{{ user.telephone }}</td>
                        <td>
                            <a class=\"btn btn-warning\" href=\"{{ path('user_reset',{'id':user.id}) }}\">
                                <i class=\"fa fa-refresh\"></i>
                            </a>
                        </td>
                        <!--
                        <td>
                            <a class=\"btn btn-danger\" href=\"{{ path('user_delete',{'id':user.id})}}\">
                                <i class=\"fa fa-close\"></i>
                            </a>
                        </td>
                        -->
                    </tr>
                    {%endfor%}</tbody>
            </tbody>
        </table>
    </div>
{% endblock %}
", "userManagerBundle:User:listeUser.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\userManagerBundle/Resources/views/User/listeUser.html.twig");
    }
}
