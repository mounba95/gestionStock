<?php

/* ClientBundle:Default:tableaubord.html.twig */
class __TwigTemplate_9d5c4166657e2be063f626aa989b7c34f6e3c09053efc3803a8ebb5cd23e3782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ClientBundle:Default:tableaubord.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'partieJs' => array($this, 'block_partieJs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ea79dbc38185e72349e7f442e7259bc51db974c5933c6dafa8c3ab879af74a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea79dbc38185e72349e7f442e7259bc51db974c5933c6dafa8c3ab879af74a2->enter($__internal_7ea79dbc38185e72349e7f442e7259bc51db974c5933c6dafa8c3ab879af74a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:tableaubord.html.twig"));

        $__internal_dc7f2bf4d8421944aecc1f30979ccc63ea63af48e334b97862f5638da0449a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7f2bf4d8421944aecc1f30979ccc63ea63af48e334b97862f5638da0449a6a->enter($__internal_dc7f2bf4d8421944aecc1f30979ccc63ea63af48e334b97862f5638da0449a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:tableaubord.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ea79dbc38185e72349e7f442e7259bc51db974c5933c6dafa8c3ab879af74a2->leave($__internal_7ea79dbc38185e72349e7f442e7259bc51db974c5933c6dafa8c3ab879af74a2_prof);

        
        $__internal_dc7f2bf4d8421944aecc1f30979ccc63ea63af48e334b97862f5638da0449a6a->leave($__internal_dc7f2bf4d8421944aecc1f30979ccc63ea63af48e334b97862f5638da0449a6a_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_7af9476c7fe9cf39a60f65c96d534964d929413ab5c62fea367c85ccfb4fcff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af9476c7fe9cf39a60f65c96d534964d929413ab5c62fea367c85ccfb4fcff4->enter($__internal_7af9476c7fe9cf39a60f65c96d534964d929413ab5c62fea367c85ccfb4fcff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_52c67aa1da90ea9b3bfa33e3695831199f1cefbb2c3fae310248f40acd28a7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c67aa1da90ea9b3bfa33e3695831199f1cefbb2c3fae310248f40acd28a7cc->enter($__internal_52c67aa1da90ea9b3bfa33e3695831199f1cefbb2c3fae310248f40acd28a7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "        <section class=\"content-header\">
            <h1>
                Bienvenue
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
            </ol>
        </section>
    ";
        
        $__internal_52c67aa1da90ea9b3bfa33e3695831199f1cefbb2c3fae310248f40acd28a7cc->leave($__internal_52c67aa1da90ea9b3bfa33e3695831199f1cefbb2c3fae310248f40acd28a7cc_prof);

        
        $__internal_7af9476c7fe9cf39a60f65c96d534964d929413ab5c62fea367c85ccfb4fcff4->leave($__internal_7af9476c7fe9cf39a60f65c96d534964d929413ab5c62fea367c85ccfb4fcff4_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d3152c3f6aff1fd153794b270d0b8ab9f505dcc72aa9a48bf40f8fa8f053424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3152c3f6aff1fd153794b270d0b8ab9f505dcc72aa9a48bf40f8fa8f053424->enter($__internal_9d3152c3f6aff1fd153794b270d0b8ab9f505dcc72aa9a48bf40f8fa8f053424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_549de1213cd2806bdef2333a8bd8702aef96d4b660ee345ea02edf97153a5951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549de1213cd2806bdef2333a8bd8702aef96d4b660ee345ea02edf97153a5951->enter($__internal_549de1213cd2806bdef2333a8bd8702aef96d4b660ee345ea02edf97153a5951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
     <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/accueil.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
     </div>
";
        
        $__internal_549de1213cd2806bdef2333a8bd8702aef96d4b660ee345ea02edf97153a5951->leave($__internal_549de1213cd2806bdef2333a8bd8702aef96d4b660ee345ea02edf97153a5951_prof);

        
        $__internal_9d3152c3f6aff1fd153794b270d0b8ab9f505dcc72aa9a48bf40f8fa8f053424->leave($__internal_9d3152c3f6aff1fd153794b270d0b8ab9f505dcc72aa9a48bf40f8fa8f053424_prof);

    }

    // line 18
    public function block_partieJs($context, array $blocks = array())
    {
        $__internal_7b7dacf7e46b9c5a749c4f713cc89aa860e9aeb75998688554bafd1adae89ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b7dacf7e46b9c5a749c4f713cc89aa860e9aeb75998688554bafd1adae89ed4->enter($__internal_7b7dacf7e46b9c5a749c4f713cc89aa860e9aeb75998688554bafd1adae89ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partieJs"));

        $__internal_f02b26a1904a03f7995521df2aa9c6ae815a9d246974a4852915fd6a86af6e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02b26a1904a03f7995521df2aa9c6ae815a9d246974a4852915fd6a86af6e6d->enter($__internal_f02b26a1904a03f7995521df2aa9c6ae815a9d246974a4852915fd6a86af6e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partieJs"));

        // line 19
        echo "

";
        
        $__internal_f02b26a1904a03f7995521df2aa9c6ae815a9d246974a4852915fd6a86af6e6d->leave($__internal_f02b26a1904a03f7995521df2aa9c6ae815a9d246974a4852915fd6a86af6e6d_prof);

        
        $__internal_7b7dacf7e46b9c5a749c4f713cc89aa860e9aeb75998688554bafd1adae89ed4->leave($__internal_7b7dacf7e46b9c5a749c4f713cc89aa860e9aeb75998688554bafd1adae89ed4_prof);

    }

    public function getTemplateName()
    {
        return "ClientBundle:Default:tableaubord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 19,  95 => 18,  82 => 15,  79 => 14,  70 => 13,  51 => 3,  42 => 2,  11 => 1,);
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
                Bienvenue
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
            </ol>
        </section>
    {%endblock%}
    {%block body%}
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
     <img src=\"{{ asset('templates/accueil.jpg')}}\" class=\"user-image\" alt=\"User Image\">
     </div>
{% endblock %}
{%block partieJs%}


{%endblock%}", "ClientBundle:Default:tableaubord.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/ClientBundle/Resources/views/Default/tableaubord.html.twig");
    }
}
