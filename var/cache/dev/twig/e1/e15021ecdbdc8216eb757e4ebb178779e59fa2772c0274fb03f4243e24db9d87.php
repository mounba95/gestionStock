<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f02b750e751757696878949059e1a10793bea012a080c0a67a3273b33d08a584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fbb1ade25169947b6fd11f741d7327040eee2727665fa75746d9bbf6c867a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fbb1ade25169947b6fd11f741d7327040eee2727665fa75746d9bbf6c867a39->enter($__internal_6fbb1ade25169947b6fd11f741d7327040eee2727665fa75746d9bbf6c867a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a5378068e4435988a752a76b36e04d2afdd74e0765b20c0df2b2036973bd42c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5378068e4435988a752a76b36e04d2afdd74e0765b20c0df2b2036973bd42c6->enter($__internal_a5378068e4435988a752a76b36e04d2afdd74e0765b20c0df2b2036973bd42c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fbb1ade25169947b6fd11f741d7327040eee2727665fa75746d9bbf6c867a39->leave($__internal_6fbb1ade25169947b6fd11f741d7327040eee2727665fa75746d9bbf6c867a39_prof);

        
        $__internal_a5378068e4435988a752a76b36e04d2afdd74e0765b20c0df2b2036973bd42c6->leave($__internal_a5378068e4435988a752a76b36e04d2afdd74e0765b20c0df2b2036973bd42c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_86e911c38946f8b059fa718e46dd90b1e2fd543d95e9c831f42f312105bef12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e911c38946f8b059fa718e46dd90b1e2fd543d95e9c831f42f312105bef12d->enter($__internal_86e911c38946f8b059fa718e46dd90b1e2fd543d95e9c831f42f312105bef12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_748f181a6397fbb7afaf81c5c6fe81b1fcc00b7f8a6db94b2a65d204a4fb0720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748f181a6397fbb7afaf81c5c6fe81b1fcc00b7f8a6db94b2a65d204a4fb0720->enter($__internal_748f181a6397fbb7afaf81c5c6fe81b1fcc00b7f8a6db94b2a65d204a4fb0720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_748f181a6397fbb7afaf81c5c6fe81b1fcc00b7f8a6db94b2a65d204a4fb0720->leave($__internal_748f181a6397fbb7afaf81c5c6fe81b1fcc00b7f8a6db94b2a65d204a4fb0720_prof);

        
        $__internal_86e911c38946f8b059fa718e46dd90b1e2fd543d95e9c831f42f312105bef12d->leave($__internal_86e911c38946f8b059fa718e46dd90b1e2fd543d95e9c831f42f312105bef12d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c7e4b1535c2d9fc8be98131dd351457f760d66d9f82121afaf4e0dcf3fcc1a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c7e4b1535c2d9fc8be98131dd351457f760d66d9f82121afaf4e0dcf3fcc1a3->enter($__internal_7c7e4b1535c2d9fc8be98131dd351457f760d66d9f82121afaf4e0dcf3fcc1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2c54cd2e1bca5608e4b3e9a1d0d0eb790b55157b2b3e9fe5ddf28897f75d2f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c54cd2e1bca5608e4b3e9a1d0d0eb790b55157b2b3e9fe5ddf28897f75d2f9e->enter($__internal_2c54cd2e1bca5608e4b3e9a1d0d0eb790b55157b2b3e9fe5ddf28897f75d2f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c54cd2e1bca5608e4b3e9a1d0d0eb790b55157b2b3e9fe5ddf28897f75d2f9e->leave($__internal_2c54cd2e1bca5608e4b3e9a1d0d0eb790b55157b2b3e9fe5ddf28897f75d2f9e_prof);

        
        $__internal_7c7e4b1535c2d9fc8be98131dd351457f760d66d9f82121afaf4e0dcf3fcc1a3->leave($__internal_7c7e4b1535c2d9fc8be98131dd351457f760d66d9f82121afaf4e0dcf3fcc1a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f947329f5dbfedd01e603e32cbfd93c3ac173bbd74e237fcf78a14634261128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f947329f5dbfedd01e603e32cbfd93c3ac173bbd74e237fcf78a14634261128->enter($__internal_3f947329f5dbfedd01e603e32cbfd93c3ac173bbd74e237fcf78a14634261128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25fb3efa229f0fada85eaedf549be1189ea4322f56ecb3f7cbf312c01818c07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fb3efa229f0fada85eaedf549be1189ea4322f56ecb3f7cbf312c01818c07d->enter($__internal_25fb3efa229f0fada85eaedf549be1189ea4322f56ecb3f7cbf312c01818c07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_25fb3efa229f0fada85eaedf549be1189ea4322f56ecb3f7cbf312c01818c07d->leave($__internal_25fb3efa229f0fada85eaedf549be1189ea4322f56ecb3f7cbf312c01818c07d_prof);

        
        $__internal_3f947329f5dbfedd01e603e32cbfd93c3ac173bbd74e237fcf78a14634261128->leave($__internal_3f947329f5dbfedd01e603e32cbfd93c3ac173bbd74e237fcf78a14634261128_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/rmag/projet/Stock_manager/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
