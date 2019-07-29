<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d047e29216e996210d9bd1e8c59a20111d53fc949bd35509bbe67cf816cd1ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_276b6fcaeb10c0a0989a0dc10a445649f470448de383a4d76139267a2a7e94eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276b6fcaeb10c0a0989a0dc10a445649f470448de383a4d76139267a2a7e94eb->enter($__internal_276b6fcaeb10c0a0989a0dc10a445649f470448de383a4d76139267a2a7e94eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f0e739cff5bdb245ee923015c63eee019cacced2739f4c11be94ffd269d72e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e739cff5bdb245ee923015c63eee019cacced2739f4c11be94ffd269d72e33->enter($__internal_f0e739cff5bdb245ee923015c63eee019cacced2739f4c11be94ffd269d72e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_276b6fcaeb10c0a0989a0dc10a445649f470448de383a4d76139267a2a7e94eb->leave($__internal_276b6fcaeb10c0a0989a0dc10a445649f470448de383a4d76139267a2a7e94eb_prof);

        
        $__internal_f0e739cff5bdb245ee923015c63eee019cacced2739f4c11be94ffd269d72e33->leave($__internal_f0e739cff5bdb245ee923015c63eee019cacced2739f4c11be94ffd269d72e33_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04aa0b9e30309834c9447be29a1754db76d026ed11253ca56e07ac23251ed8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04aa0b9e30309834c9447be29a1754db76d026ed11253ca56e07ac23251ed8fb->enter($__internal_04aa0b9e30309834c9447be29a1754db76d026ed11253ca56e07ac23251ed8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d133177d9b86faa562bcdc7eeec89406c0ed64fb6d366bcf3d58a99c8930466e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d133177d9b86faa562bcdc7eeec89406c0ed64fb6d366bcf3d58a99c8930466e->enter($__internal_d133177d9b86faa562bcdc7eeec89406c0ed64fb6d366bcf3d58a99c8930466e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d133177d9b86faa562bcdc7eeec89406c0ed64fb6d366bcf3d58a99c8930466e->leave($__internal_d133177d9b86faa562bcdc7eeec89406c0ed64fb6d366bcf3d58a99c8930466e_prof);

        
        $__internal_04aa0b9e30309834c9447be29a1754db76d026ed11253ca56e07ac23251ed8fb->leave($__internal_04aa0b9e30309834c9447be29a1754db76d026ed11253ca56e07ac23251ed8fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/rmag/projet/Stock_manager/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
