<?php

/* ProduitBundle:Produit:listeProduit.html.twig */
class __TwigTemplate_db62d6edf4b3790e308057fe0df50ade2f2f1273ee9654284d8d794cf8cefaa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProduitBundle:Produit:listeProduit.html.twig", 1);
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
        $__internal_036a90bfec4dbbfa1c6936c922bd4947e4930c7d97d4a8eae8eecd7324f69df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036a90bfec4dbbfa1c6936c922bd4947e4930c7d97d4a8eae8eecd7324f69df8->enter($__internal_036a90bfec4dbbfa1c6936c922bd4947e4930c7d97d4a8eae8eecd7324f69df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProduitBundle:Produit:listeProduit.html.twig"));

        $__internal_3c85ef988d1d103e9ae3b7f3f95f57f71fac5bc1d1cf098988d3f7b6207fb7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c85ef988d1d103e9ae3b7f3f95f57f71fac5bc1d1cf098988d3f7b6207fb7a6->enter($__internal_3c85ef988d1d103e9ae3b7f3f95f57f71fac5bc1d1cf098988d3f7b6207fb7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProduitBundle:Produit:listeProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_036a90bfec4dbbfa1c6936c922bd4947e4930c7d97d4a8eae8eecd7324f69df8->leave($__internal_036a90bfec4dbbfa1c6936c922bd4947e4930c7d97d4a8eae8eecd7324f69df8_prof);

        
        $__internal_3c85ef988d1d103e9ae3b7f3f95f57f71fac5bc1d1cf098988d3f7b6207fb7a6->leave($__internal_3c85ef988d1d103e9ae3b7f3f95f57f71fac5bc1d1cf098988d3f7b6207fb7a6_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_ea1e3c948c3f6c622245d0ad6d005ebd947910e9ccf776d214a9f7da6ac9f925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1e3c948c3f6c622245d0ad6d005ebd947910e9ccf776d214a9f7da6ac9f925->enter($__internal_ea1e3c948c3f6c622245d0ad6d005ebd947910e9ccf776d214a9f7da6ac9f925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_558c519f828cc2a8508b4264b8fb3228839a8a3556d5fc71949ba66feb8049a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558c519f828cc2a8508b4264b8fb3228839a8a3556d5fc71949ba66feb8049a0->enter($__internal_558c519f828cc2a8508b4264b8fb3228839a8a3556d5fc71949ba66feb8049a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "        <section class=\"content-header\">
            <h1>
                Produit
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_ajouter");
        echo "\">Produit</a></li>
            </ol>
        </section>
    ";
        
        $__internal_558c519f828cc2a8508b4264b8fb3228839a8a3556d5fc71949ba66feb8049a0->leave($__internal_558c519f828cc2a8508b4264b8fb3228839a8a3556d5fc71949ba66feb8049a0_prof);

        
        $__internal_ea1e3c948c3f6c622245d0ad6d005ebd947910e9ccf776d214a9f7da6ac9f925->leave($__internal_ea1e3c948c3f6c622245d0ad6d005ebd947910e9ccf776d214a9f7da6ac9f925_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_80c69f4f5ce546a80f6906d35e5643c63bb4ee8e4562f1bd8d3f1edb61066ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c69f4f5ce546a80f6906d35e5643c63bb4ee8e4562f1bd8d3f1edb61066ee9->enter($__internal_80c69f4f5ce546a80f6906d35e5643c63bb4ee8e4562f1bd8d3f1edb61066ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c54ea4f417d26996817a72b4415ad93e4aea13accf5088abd51f84a20ec88c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54ea4f417d26996817a72b4415ad93e4aea13accf5088abd51f84a20ec88c24->enter($__internal_c54ea4f417d26996817a72b4415ad93e4aea13accf5088abd51f84a20ec88c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        <div class=\"box-header box box-success\">
            <h3 class=\"box-title\">Liste des produits</h3>

            <div class=\"pull-right\" >
                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_ajouter");
        echo "\"  class=\"btn bg-olive btn-flat margin\">Ajouter Produit</a>
            </div>
        </div>

        <div class=\"box-body\">
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produitListe"] ?? $this->getContext($context, "produitListe")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 45
            echo "                        <tr>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "referenceProduit", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "nomProduit", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["liste"], "typeProduit", array()), "nomType", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "descriptionProduit", array()), "html", null, true);
            echo "</td>

                            <td><a class=\"btn btn-primary\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_modifier", array("id" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
            echo "\">Modifer</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </tbody>
            </table>
        </div>

";
        
        $__internal_c54ea4f417d26996817a72b4415ad93e4aea13accf5088abd51f84a20ec88c24->leave($__internal_c54ea4f417d26996817a72b4415ad93e4aea13accf5088abd51f84a20ec88c24_prof);

        
        $__internal_80c69f4f5ce546a80f6906d35e5643c63bb4ee8e4562f1bd8d3f1edb61066ee9->leave($__internal_80c69f4f5ce546a80f6906d35e5643c63bb4ee8e4562f1bd8d3f1edb61066ee9_prof);

    }

    public function getTemplateName()
    {
        return "ProduitBundle:Produit:listeProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 54,  140 => 51,  135 => 49,  131 => 48,  127 => 47,  123 => 46,  120 => 45,  116 => 44,  88 => 19,  82 => 15,  73 => 14,  59 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
                Produit
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
                <li><a href=\"{{path('produit_ajouter')}}\">Produit</a></li>
            </ol>
        </section>
    {%endblock%}
    {%block body%}
        <div class=\"box-header box box-success\">
            <h3 class=\"box-title\">Liste des produits</h3>

            <div class=\"pull-right\" >
                <a href=\"{{path('produit_ajouter')}}\"  class=\"btn bg-olive btn-flat margin\">Ajouter Produit</a>
            </div>
        </div>

        <div class=\"box-body\">
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

{% endblock %}
", "ProduitBundle:Produit:listeProduit.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/ProduitBundle/Resources/views/Produit/listeProduit.html.twig");
    }
}
