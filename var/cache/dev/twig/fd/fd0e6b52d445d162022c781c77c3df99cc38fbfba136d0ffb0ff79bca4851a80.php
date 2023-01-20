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

/* ClientBundle:Default:tableaubord.html.twig */
class __TwigTemplate_242462f982e52d692d208fde845f1f41f5c8ba82084b28aae325a6b0f72d9404 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'partieJs' => [$this, 'block_partieJs'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClientBundle:Default:tableaubord.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClientBundle:Default:tableaubord.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "ClientBundle:Default:tableaubord.html.twig", 1);
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
                Bienvenue
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
            </ol>
        </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
        <div class=\"col-md-6\">
            <div class=\"box box-danger\">
                <div class=\"box-body chart-responsive\">
                    <div id=\"chartContainer\" style=\"height: 370px; width: 100%;\"></div>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"box box-success\">
                <div id=\"chartContainer2\" style=\"height: 350px; width: 100%;\"></div>
                <br>
                <br>
            </div>
        </div>
        <script>
            window.onload = function () {

                var options = {
                    animationEnabled: true,
                    title: {
                        text: \"Les produits les plus vendus\"
                    },
                    axisY: {
                        title: \"Nombre produit (en %)\",
                        suffix: \"%\",
                        includeZero: false
                    },
                    axisX: {
                        title: \"Produits\"
                    },
                    data: [{
                        type: \"column\",
                        yValueFormatString: \"#,##0.0#\"%\"\",
                        dataPoints:  [ ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 50
            echo "                            {label: '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "label", []), "html", null, true);
            echo "', y: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "y", []), "html", null, true);
            echo " },
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "]
                    }]
                };
                \$(\"#chartContainer2\").CanvasJSChart(options);


                var chart = new CanvasJS.Chart(\"chartContainer\", {
                    theme: \"light1\", // \"light1\", \"light2\", \"dark1\", \"dark2\"
                    exportEnabled: true,
                    animationEnabled: true,
                    title: {
                        text: \"Produits vendus par type\"
                    },
                    data: [{
                        type: \"pie\",
                        startAngle: 35,
                        toolTipContent: \"<b>{label}</b>: {y}%\",
                        showInLegend: \"true\",
                        legendText: \"{label}\",
                        indexLabelFontSize: 16,
                        indexLabel: \"{label} - {y}%\",
                        dataPoints: [ ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataType"] ?? $this->getContext($context, "dataType")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 73
            echo "                            {label: '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "label", []), "html", null, true);
            echo "', y: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "y", []), "html", null, true);
            echo " },
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "]
                    }]
                });
                chart.render();
                0

            }
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_partieJs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "partieJs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "partieJs"));

        // line 84
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  207 => 84,  198 => 83,  180 => 74,  169 => 73,  165 => 72,  142 => 51,  131 => 50,  127 => 49,  90 => 14,  81 => 13,  62 => 3,  53 => 2,  31 => 1,);
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
                Bienvenue
                <small></small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
            </ol>
        </section>
    {%endblock%}
    {%block body%}

        <div class=\"col-md-6\">
            <div class=\"box box-danger\">
                <div class=\"box-body chart-responsive\">
                    <div id=\"chartContainer\" style=\"height: 370px; width: 100%;\"></div>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"box box-success\">
                <div id=\"chartContainer2\" style=\"height: 350px; width: 100%;\"></div>
                <br>
                <br>
            </div>
        </div>
        <script>
            window.onload = function () {

                var options = {
                    animationEnabled: true,
                    title: {
                        text: \"Les produits les plus vendus\"
                    },
                    axisY: {
                        title: \"Nombre produit (en %)\",
                        suffix: \"%\",
                        includeZero: false
                    },
                    axisX: {
                        title: \"Produits\"
                    },
                    data: [{
                        type: \"column\",
                        yValueFormatString: \"#,##0.0#\"%\"\",
                        dataPoints:  [ {% for p in data %}
                            {label: '{{p.label}}', y: {{p.y}} },
                            {% endfor %}]
                    }]
                };
                \$(\"#chartContainer2\").CanvasJSChart(options);


                var chart = new CanvasJS.Chart(\"chartContainer\", {
                    theme: \"light1\", // \"light1\", \"light2\", \"dark1\", \"dark2\"
                    exportEnabled: true,
                    animationEnabled: true,
                    title: {
                        text: \"Produits vendus par type\"
                    },
                    data: [{
                        type: \"pie\",
                        startAngle: 35,
                        toolTipContent: \"<b>{label}</b>: {y}%\",
                        showInLegend: \"true\",
                        legendText: \"{label}\",
                        indexLabelFontSize: 16,
                        indexLabel: \"{label} - {y}%\",
                        dataPoints: [ {% for t in dataType %}
                            {label: '{{t.label}}', y: {{t.y}} },
                            {% endfor %}]
                    }]
                });
                chart.render();
                0

            }
        </script>
    {% endblock %}
{%block partieJs%}

{%endblock%}", "ClientBundle:Default:tableaubord.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\ClientBundle/Resources/views/Default/tableaubord.html.twig");
    }
}
