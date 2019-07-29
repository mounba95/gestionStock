<?php

/* userManagerBundle:User:listeUser.html.twig */
class __TwigTemplate_cb822e86860b5213e62266192013852cec0f5593d62d05379876326052059962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "userManagerBundle:User:listeUser.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43e7f5c6a03767c6d42812ddba5c018650951198d32e598d6819d6f0acd75b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e7f5c6a03767c6d42812ddba5c018650951198d32e598d6819d6f0acd75b26->enter($__internal_43e7f5c6a03767c6d42812ddba5c018650951198d32e598d6819d6f0acd75b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userManagerBundle:User:listeUser.html.twig"));

        $__internal_e4973cdb14c60e5b80de9bdc379688af0030787d80ef0e078b04eda1ea1d9182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4973cdb14c60e5b80de9bdc379688af0030787d80ef0e078b04eda1ea1d9182->enter($__internal_e4973cdb14c60e5b80de9bdc379688af0030787d80ef0e078b04eda1ea1d9182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userManagerBundle:User:listeUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43e7f5c6a03767c6d42812ddba5c018650951198d32e598d6819d6f0acd75b26->leave($__internal_43e7f5c6a03767c6d42812ddba5c018650951198d32e598d6819d6f0acd75b26_prof);

        
        $__internal_e4973cdb14c60e5b80de9bdc379688af0030787d80ef0e078b04eda1ea1d9182->leave($__internal_e4973cdb14c60e5b80de9bdc379688af0030787d80ef0e078b04eda1ea1d9182_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_2a964f0e4240507be061445331dad22604028425915892fb6904348468588c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a964f0e4240507be061445331dad22604028425915892fb6904348468588c66->enter($__internal_2a964f0e4240507be061445331dad22604028425915892fb6904348468588c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_477a164d426eb26d1fb31f0e86d771a3bfa3eaf2a9f50564dd64d3e9dbf29979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477a164d426eb26d1fb31f0e86d771a3bfa3eaf2a9f50564dd64d3e9dbf29979->enter($__internal_477a164d426eb26d1fb31f0e86d771a3bfa3eaf2a9f50564dd64d3e9dbf29979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "        <section class=\"content-header\">
            <h1>
                Utilisateurs
                <small>gestion des utilisateurs</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_liste");
        echo "\">liste des ulisateurs</a></li>
            </ol>
        </section>
    ";
        
        $__internal_477a164d426eb26d1fb31f0e86d771a3bfa3eaf2a9f50564dd64d3e9dbf29979->leave($__internal_477a164d426eb26d1fb31f0e86d771a3bfa3eaf2a9f50564dd64d3e9dbf29979_prof);

        
        $__internal_2a964f0e4240507be061445331dad22604028425915892fb6904348468588c66->leave($__internal_2a964f0e4240507be061445331dad22604028425915892fb6904348468588c66_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_11fd8d465e433c054ede9b2dfc83c37cff6783246f6925a435f10093cdf28732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fd8d465e433c054ede9b2dfc83c37cff6783246f6925a435f10093cdf28732->enter($__internal_11fd8d465e433c054ede9b2dfc83c37cff6783246f6925a435f10093cdf28732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8155b0223995804061edbfa636e3ef7457e0523be458998f2b561730625df65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8155b0223995804061edbfa636e3ef7457e0523be458998f2b561730625df65->enter($__internal_a8155b0223995804061edbfa636e3ef7457e0523be458998f2b561730625df65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        <div class=\"box-header box box-success\">
            <h3 class=\"box-title\">Listes des utilisateurs</h3>

            <div class=\"pull-right\" >
                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\"  class=\"btn bg-olive btn-flat margin\">Ajouter utilisateur</a>
            </div>
        </div>

        <div class=\"box-body\">
            <table id=\"table_pays\" class=\"table table-bordered\">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Pseudo</th>
                    <th>Rôle</th>
                    <th>Téléphone</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            echo "                    <tr>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 44
                echo "                                ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo ",
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 48
            if (($this->getAttribute($context["user"], "status", array()) == 1)) {
                // line 49
                echo "
                                <span class=\"label label-success label-mini\">Active</span>

                            ";
            } else {
                // line 53
                echo "
                                <span class=\"label label-warning label-mini\">Désactivé</span>

                            ";
            }
            // line 57
            echo "                        </td>

                        <td><a class=\"btn btn-primary\" href=\"\"><i class=\"fa fa-edit\"></i></a></td>

                        <td><a class=\"btn btn-danger\" href=\"\" ><i class=\"fa fa-close\"></i></a></td>


                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </tbody>
            </table>
        </div>
    ";
        
        $__internal_a8155b0223995804061edbfa636e3ef7457e0523be458998f2b561730625df65->leave($__internal_a8155b0223995804061edbfa636e3ef7457e0523be458998f2b561730625df65_prof);

        
        $__internal_11fd8d465e433c054ede9b2dfc83c37cff6783246f6925a435f10093cdf28732->leave($__internal_11fd8d465e433c054ede9b2dfc83c37cff6783246f6925a435f10093cdf28732_prof);

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
        return array (  178 => 66,  164 => 57,  158 => 53,  152 => 49,  150 => 48,  145 => 46,  142 => 45,  133 => 44,  129 => 43,  125 => 42,  121 => 41,  117 => 40,  114 => 39,  110 => 38,  88 => 19,  82 => 15,  73 => 14,  59 => 10,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
    {%block header%}
        <section class=\"content-header\">
            <h1>
                Utilisateurs
                <small>gestion des utilisateurs</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
                <li><a href=\"{{path('user_liste')}}\">liste des ulisateurs</a></li>
            </ol>
        </section>
    {%endblock%}
    {%block body%}
        <div class=\"box-header box box-success\">
            <h3 class=\"box-title\">Listes des utilisateurs</h3>

            <div class=\"pull-right\" >
                <a href=\"{{path('user_register')}}\"  class=\"btn bg-olive btn-flat margin\">Ajouter utilisateur</a>
            </div>
        </div>

        <div class=\"box-body\">
            <table id=\"table_pays\" class=\"table table-bordered\">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Pseudo</th>
                    <th>Rôle</th>
                    <th>Téléphone</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ user.nom}}</td>
                        <td>{{ user.prenom }}</td>
                        <td>{{ user.username}}</td>
                        <td>{% for role in user.roles %}
                                {{ role }},
                            {% endfor %}</td>
                        <td>{{ user.telephone }}</td>
                        <td>
                            {% if user.status == 1 %}

                                <span class=\"label label-success label-mini\">Active</span>

                            {% else %}

                                <span class=\"label label-warning label-mini\">Désactivé</span>

                            {% endif %}
                        </td>

                        <td><a class=\"btn btn-primary\" href=\"\"><i class=\"fa fa-edit\"></i></a></td>

                        <td><a class=\"btn btn-danger\" href=\"\" ><i class=\"fa fa-close\"></i></a></td>


                    </tr>
                {%endfor%}
                </tbody>
            </table>
        </div>
    {% endblock %}
", "userManagerBundle:User:listeUser.html.twig", "/home/rmag/projet/Stock_manager/src/userManagerBundle/Resources/views/User/listeUser.html.twig");
    }
}
