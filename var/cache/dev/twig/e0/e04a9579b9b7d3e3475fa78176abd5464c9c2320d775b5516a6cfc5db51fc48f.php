<?php

/* tva/index.html.twig */
class __TwigTemplate_2877391ad8e96e3f7e17bbaa62b6de991c035f791deb6aca23e54f40c7e8befa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "tva/index.html.twig", 1);
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
        $__internal_f64c8b102820184fc99dfde771ee804aa0ad63ad6de71350fa09a3faab11b78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64c8b102820184fc99dfde771ee804aa0ad63ad6de71350fa09a3faab11b78e->enter($__internal_f64c8b102820184fc99dfde771ee804aa0ad63ad6de71350fa09a3faab11b78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tva/index.html.twig"));

        $__internal_3c7f083d959ad76b5cae970e5d21d8d5605746c9c70d0486373c5f86d5870da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7f083d959ad76b5cae970e5d21d8d5605746c9c70d0486373c5f86d5870da8->enter($__internal_3c7f083d959ad76b5cae970e5d21d8d5605746c9c70d0486373c5f86d5870da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tva/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f64c8b102820184fc99dfde771ee804aa0ad63ad6de71350fa09a3faab11b78e->leave($__internal_f64c8b102820184fc99dfde771ee804aa0ad63ad6de71350fa09a3faab11b78e_prof);

        
        $__internal_3c7f083d959ad76b5cae970e5d21d8d5605746c9c70d0486373c5f86d5870da8->leave($__internal_3c7f083d959ad76b5cae970e5d21d8d5605746c9c70d0486373c5f86d5870da8_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_2face965b5220b2a14d2b309d72f7698134937d5636956f10501ff20494c2977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2face965b5220b2a14d2b309d72f7698134937d5636956f10501ff20494c2977->enter($__internal_2face965b5220b2a14d2b309d72f7698134937d5636956f10501ff20494c2977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3b53bd36b39349b3e06918fcba127aa8f7c1e51a4434760d480dd79bae0292ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b53bd36b39349b3e06918fcba127aa8f7c1e51a4434760d480dd79bae0292ca->enter($__internal_3b53bd36b39349b3e06918fcba127aa8f7c1e51a4434760d480dd79bae0292ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "        <section class=\"content-header\">
            <h1>
                TVA
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
                <li><a href=\"\">TVA</a></li>
            </ol>
        </section>
    ";
        
        $__internal_3b53bd36b39349b3e06918fcba127aa8f7c1e51a4434760d480dd79bae0292ca->leave($__internal_3b53bd36b39349b3e06918fcba127aa8f7c1e51a4434760d480dd79bae0292ca_prof);

        
        $__internal_2face965b5220b2a14d2b309d72f7698134937d5636956f10501ff20494c2977->leave($__internal_2face965b5220b2a14d2b309d72f7698134937d5636956f10501ff20494c2977_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_d26e79ad77a17f7ff7a92b7c5d021da98343f21b3addf97a5b011671c32184a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26e79ad77a17f7ff7a92b7c5d021da98343f21b3addf97a5b011671c32184a1->enter($__internal_d26e79ad77a17f7ff7a92b7c5d021da98343f21b3addf97a5b011671c32184a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0d5e81130990f4cad68fa192a5dcefb5d5af0716e1d86e9f3b9dae71101e47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d5e81130990f4cad68fa192a5dcefb5d5af0716e1d86e9f3b9dae71101e47e->enter($__internal_a0d5e81130990f4cad68fa192a5dcefb5d5af0716e1d86e9f3b9dae71101e47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        <div class=\"box-header box box-success\">
            <h3 class=\"box-title\">Liste TVA</h3>

            <div class=\"pull-right\" >
                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_new");
        echo "\"  class=\"btn bg-olive btn-flat margin\">Ajouter TVA</a>
            </div>
        </div>

        <div class=\"box-body\">

            <table id=\"table_tva\" class=\"table table-bordered\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Tvafacture</th>
                    <th>Referencetva</th>
                    <th>Modfier</th>
                   
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Tvafacture</th>
                    <th>Referencetva</th>
                    <th>Modfier</th>
                  
                </tr>

                </tfoot>
                <tbody>
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tvas"] ?? $this->getContext($context, "tvas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tva"]) {
            // line 47
            echo "                    <tr>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["tva"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["tva"], "tvaFacture", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["tva"], "referenceTva", array()), "html", null, true);
            echo "</td>

                        <td><a class=\"btn btn-primary\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_edit", array("id" => $this->getAttribute($context["tva"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>

                      

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                </tbody>
            </table>
        </div>

    ";
        
        $__internal_a0d5e81130990f4cad68fa192a5dcefb5d5af0716e1d86e9f3b9dae71101e47e->leave($__internal_a0d5e81130990f4cad68fa192a5dcefb5d5af0716e1d86e9f3b9dae71101e47e_prof);

        
        $__internal_d26e79ad77a17f7ff7a92b7c5d021da98343f21b3addf97a5b011671c32184a1->leave($__internal_d26e79ad77a17f7ff7a92b7c5d021da98343f21b3addf97a5b011671c32184a1_prof);

    }

    public function getTemplateName()
    {
        return "tva/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 58,  135 => 52,  130 => 50,  126 => 49,  122 => 48,  119 => 47,  115 => 46,  85 => 19,  79 => 15,  70 => 14,  50 => 3,  41 => 2,  11 => 1,);
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
                TVA
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
                <li><a href=\"\">TVA</a></li>
            </ol>
        </section>
    {%endblock%}
    {%block body%}
        <div class=\"box-header box box-success\">
            <h3 class=\"box-title\">Liste TVA</h3>

            <div class=\"pull-right\" >
                <a href=\"{{ path('tva_new') }}\"  class=\"btn bg-olive btn-flat margin\">Ajouter TVA</a>
            </div>
        </div>

        <div class=\"box-body\">

            <table id=\"table_tva\" class=\"table table-bordered\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Tvafacture</th>
                    <th>Referencetva</th>
                    <th>Modfier</th>
                   
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Tvafacture</th>
                    <th>Referencetva</th>
                    <th>Modfier</th>
                  
                </tr>

                </tfoot>
                <tbody>
                {% for tva in tvas %}
                    <tr>
                        <td>{{ tva.id }}</td>
                        <td>{{ tva.tvaFacture }}</td>
                        <td>{{ tva.referenceTva }}</td>

                        <td><a class=\"btn btn-primary\" href=\"{{ path('tva_edit', {'id': tva.id}) }}\">Modifier</a></td>

                      

                    </tr>
                {%endfor%}
                </tbody>
            </table>
        </div>

    {% endblock %}", "tva/index.html.twig", "/home/rmag/projet/Stock_manager/app/Resources/views/tva/index.html.twig");
    }
}
