<?php

/* InformationBundle:Information:listeInformation.html.twig */
class __TwigTemplate_cb82f85e3376c98225f619c1450dcb88ddf223ca23a844e99e8c0b7a16086f32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "InformationBundle:Information:listeInformation.html.twig", 1);
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
        $__internal_097618d0e1b78ba59b087acbae239e2d3041e0626ec54b15cd1da6aab74a273e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097618d0e1b78ba59b087acbae239e2d3041e0626ec54b15cd1da6aab74a273e->enter($__internal_097618d0e1b78ba59b087acbae239e2d3041e0626ec54b15cd1da6aab74a273e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InformationBundle:Information:listeInformation.html.twig"));

        $__internal_0fd2a8f60084b68be5c4788a3f40fe78903adb98ef9526d972e80888a3033175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd2a8f60084b68be5c4788a3f40fe78903adb98ef9526d972e80888a3033175->enter($__internal_0fd2a8f60084b68be5c4788a3f40fe78903adb98ef9526d972e80888a3033175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InformationBundle:Information:listeInformation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_097618d0e1b78ba59b087acbae239e2d3041e0626ec54b15cd1da6aab74a273e->leave($__internal_097618d0e1b78ba59b087acbae239e2d3041e0626ec54b15cd1da6aab74a273e_prof);

        
        $__internal_0fd2a8f60084b68be5c4788a3f40fe78903adb98ef9526d972e80888a3033175->leave($__internal_0fd2a8f60084b68be5c4788a3f40fe78903adb98ef9526d972e80888a3033175_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_e52eaa5822ef7ac336b666540f9e77630a172332c2b137fb5e5e434909787cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52eaa5822ef7ac336b666540f9e77630a172332c2b137fb5e5e434909787cd4->enter($__internal_e52eaa5822ef7ac336b666540f9e77630a172332c2b137fb5e5e434909787cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_1ae70763af1f291a0ecc7be2de45e495fa463d2b4829c4276093de028d04543f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae70763af1f291a0ecc7be2de45e495fa463d2b4829c4276093de028d04543f->enter($__internal_1ae70763af1f291a0ecc7be2de45e495fa463d2b4829c4276093de028d04543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_1ae70763af1f291a0ecc7be2de45e495fa463d2b4829c4276093de028d04543f->leave($__internal_1ae70763af1f291a0ecc7be2de45e495fa463d2b4829c4276093de028d04543f_prof);

        
        $__internal_e52eaa5822ef7ac336b666540f9e77630a172332c2b137fb5e5e434909787cd4->leave($__internal_e52eaa5822ef7ac336b666540f9e77630a172332c2b137fb5e5e434909787cd4_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f13629a847113077ab9594050b9967741ef98d3d934a8a76c23b5c27fa7145e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f13629a847113077ab9594050b9967741ef98d3d934a8a76c23b5c27fa7145e->enter($__internal_3f13629a847113077ab9594050b9967741ef98d3d934a8a76c23b5c27fa7145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06ce2789f87195e518cfd4c83b81b2e1f063fae215b2993b2ed8ff4ce976d6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ce2789f87195e518cfd4c83b81b2e1f063fae215b2993b2ed8ff4ce976d6b3->enter($__internal_06ce2789f87195e518cfd4c83b81b2e1f063fae215b2993b2ed8ff4ce976d6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/logos/" . $this->getAttribute($context["liste"], "path", array()))), "html", null, true);
            echo "\"  ></td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomInformation", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>DG</th>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "dg", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "adresse", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Téléphone</th>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "tel", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Cellulaire</th>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "cel", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "email", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Situation juridique</th>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "situationJuridique", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Slogant</th>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "slogant", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Compte banquaire</th>
                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "compteBancaire", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Code postal</th>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "codePostal", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Site web</th>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "siteweb", array()), "html", null, true);
            echo "</td>
                    </tr>
                     <tr>
                        <th>Message</th>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "message", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a class=\"btn btn-primary\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("information_modifier", array("id" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
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
        
        $__internal_06ce2789f87195e518cfd4c83b81b2e1f063fae215b2993b2ed8ff4ce976d6b3->leave($__internal_06ce2789f87195e518cfd4c83b81b2e1f063fae215b2993b2ed8ff4ce976d6b3_prof);

        
        $__internal_3f13629a847113077ab9594050b9967741ef98d3d934a8a76c23b5c27fa7145e->leave($__internal_3f13629a847113077ab9594050b9967741ef98d3d934a8a76c23b5c27fa7145e_prof);

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
        return array (  210 => 86,  200 => 82,  193 => 78,  186 => 74,  179 => 70,  172 => 66,  165 => 62,  158 => 58,  151 => 54,  144 => 50,  137 => 46,  130 => 42,  123 => 38,  116 => 34,  109 => 30,  105 => 28,  101 => 27,  94 => 22,  88 => 19,  85 => 18,  83 => 17,  79 => 15,  70 => 14,  50 => 3,  41 => 2,  11 => 1,);
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
", "InformationBundle:Information:listeInformation.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/InformationBundle/Resources/views/Information/listeInformation.html.twig");
    }
}
