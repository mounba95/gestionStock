<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9f132a8e90aaa7003ff94dec52570dc02c50d2fd637a8c45911b29a44329eb0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_639897523d94189ca0000724e2a6cc55a5790808d7f6709dccce81029be62deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639897523d94189ca0000724e2a6cc55a5790808d7f6709dccce81029be62deb->enter($__internal_639897523d94189ca0000724e2a6cc55a5790808d7f6709dccce81029be62deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bba7fd6ba859b45ff38edab7199ffd91a934867b7bf58b6093d9724541fc3fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba7fd6ba859b45ff38edab7199ffd91a934867b7bf58b6093d9724541fc3fcf->enter($__internal_bba7fd6ba859b45ff38edab7199ffd91a934867b7bf58b6093d9724541fc3fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_639897523d94189ca0000724e2a6cc55a5790808d7f6709dccce81029be62deb->leave($__internal_639897523d94189ca0000724e2a6cc55a5790808d7f6709dccce81029be62deb_prof);

        
        $__internal_bba7fd6ba859b45ff38edab7199ffd91a934867b7bf58b6093d9724541fc3fcf->leave($__internal_bba7fd6ba859b45ff38edab7199ffd91a934867b7bf58b6093d9724541fc3fcf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e0be1c3af9c3b88f1d93f5843b1eddbbd824bb34dc18de744ba62ba2adb2e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0be1c3af9c3b88f1d93f5843b1eddbbd824bb34dc18de744ba62ba2adb2e68->enter($__internal_9e0be1c3af9c3b88f1d93f5843b1eddbbd824bb34dc18de744ba62ba2adb2e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41f32ae0350d62a55a1884b4b9ef1da00dbb792cb9e28b807b544906d2000e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f32ae0350d62a55a1884b4b9ef1da00dbb792cb9e28b807b544906d2000e38->enter($__internal_41f32ae0350d62a55a1884b4b9ef1da00dbb792cb9e28b807b544906d2000e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_41f32ae0350d62a55a1884b4b9ef1da00dbb792cb9e28b807b544906d2000e38->leave($__internal_41f32ae0350d62a55a1884b4b9ef1da00dbb792cb9e28b807b544906d2000e38_prof);

        
        $__internal_9e0be1c3af9c3b88f1d93f5843b1eddbbd824bb34dc18de744ba62ba2adb2e68->leave($__internal_9e0be1c3af9c3b88f1d93f5843b1eddbbd824bb34dc18de744ba62ba2adb2e68_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1fb9451d934682c06f99594b767e7a9d9edae56680cdbd8f1e6473b7ad01b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1fb9451d934682c06f99594b767e7a9d9edae56680cdbd8f1e6473b7ad01b2c->enter($__internal_c1fb9451d934682c06f99594b767e7a9d9edae56680cdbd8f1e6473b7ad01b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_237b3a40289900f7db4f0e14fe268a8e39684d22b92e5fa1e09b2e3e78333f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237b3a40289900f7db4f0e14fe268a8e39684d22b92e5fa1e09b2e3e78333f81->enter($__internal_237b3a40289900f7db4f0e14fe268a8e39684d22b92e5fa1e09b2e3e78333f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_237b3a40289900f7db4f0e14fe268a8e39684d22b92e5fa1e09b2e3e78333f81->leave($__internal_237b3a40289900f7db4f0e14fe268a8e39684d22b92e5fa1e09b2e3e78333f81_prof);

        
        $__internal_c1fb9451d934682c06f99594b767e7a9d9edae56680cdbd8f1e6473b7ad01b2c->leave($__internal_c1fb9451d934682c06f99594b767e7a9d9edae56680cdbd8f1e6473b7ad01b2c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a77dae0f5f07d4531b9d3eba3694f8aa3643d3fec564f5edcaef33b11ae8175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a77dae0f5f07d4531b9d3eba3694f8aa3643d3fec564f5edcaef33b11ae8175->enter($__internal_9a77dae0f5f07d4531b9d3eba3694f8aa3643d3fec564f5edcaef33b11ae8175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_75b18c868540a1dc747993b801440b0d5de36ffba438098641bd78c687cfe014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b18c868540a1dc747993b801440b0d5de36ffba438098641bd78c687cfe014->enter($__internal_75b18c868540a1dc747993b801440b0d5de36ffba438098641bd78c687cfe014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_75b18c868540a1dc747993b801440b0d5de36ffba438098641bd78c687cfe014->leave($__internal_75b18c868540a1dc747993b801440b0d5de36ffba438098641bd78c687cfe014_prof);

        
        $__internal_9a77dae0f5f07d4531b9d3eba3694f8aa3643d3fec564f5edcaef33b11ae8175->leave($__internal_9a77dae0f5f07d4531b9d3eba3694f8aa3643d3fec564f5edcaef33b11ae8175_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/rmag/projet/Stock_manager/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
