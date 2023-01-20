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

/* StockBundle:Vente:modepaiementVente.html.twig */
class __TwigTemplate_0f3d11266ea737d9930a37fea5e405041576356b9c01bbe3184964ddc98b972f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:modepaiementVente.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StockBundle:Vente:modepaiementVente.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:modepaiementVente.html.twig", 1);
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
        echo "      <section class=\"content-header\">
      <h1>
        Mode paiement
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

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "                          
           <div class=\"box box-success\">
             <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Mode de paiement</h3>
            
            </div>
  
            <!-- /.box-header -->
          
            <div class=\"box-body\">
                <div class=\"callout callout-success\">
                    <h4>Info importante!</h4>

                    <p>Le mode de paiement actuel est : ";
        // line 28
        if (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "typeReglementFacture", []) == 2)) {
            // line 29
            echo "                            <b>Patiel</b>
                        ";
        } else {
            // line 31
            echo "                            <b>Total</b>
                        ";
        }
        // line 33
        echo "                </div>
              <div class=\"row\">

                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Mode de paiement</label>
                  ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                             ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typePaiement", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "mode de réglement de votre facture"]]);
        echo "
                            <div class=\"pull-right\" >
                              <a class=\"btn bg-maroon btn-flat margin\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produitvente_ajouter", ["idVente" => ($context["idVente"] ?? $this->getContext($context, "idVente"))]), "html", null, true);
        echo "\" >Annuler</a>
                              <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>
                            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                  </div>
                  <!-- /.form-group -->
                </div>
               
                <!-- /.col -->
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
              
            </div>
        </div>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Vente:modepaiementVente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 45,  132 => 42,  127 => 40,  123 => 39,  115 => 33,  111 => 31,  107 => 29,  105 => 28,  90 => 15,  81 => 14,  61 => 3,  52 => 2,  30 => 1,);
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
        Mode paiement
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        
      </ol>
    </section>
    {%endblock%}
    {%block body%}
                          
           <div class=\"box box-success\">
             <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Mode de paiement</h3>
            
            </div>
  
            <!-- /.box-header -->
          
            <div class=\"box-body\">
                <div class=\"callout callout-success\">
                    <h4>Info importante!</h4>

                    <p>Le mode de paiement actuel est : {% if facture.typeReglementFacture == 2 %}
                            <b>Patiel</b>
                        {% else %}
                            <b>Total</b>
                        {% endif %}
                </div>
              <div class=\"row\">

                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                  <label>Mode de paiement</label>
                  {{ form_start(form) }}
                             {{ form_widget(form.typePaiement, {'attr': {'class': 'form-control','placeholder':'mode de réglement de votre facture'} }) }}
                            <div class=\"pull-right\" >
                              <a class=\"btn bg-maroon btn-flat margin\" href=\"{{ path('produitvente_ajouter', {'idVente': idVente}) }}\" >Annuler</a>
                              <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>
                            {{ form_end(form) }}
                  </div>
                  <!-- /.form-group -->
                </div>
               
                <!-- /.col -->
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
              
            </div>
        </div>
        </div>

{% endblock %}
", "StockBundle:Vente:modepaiementVente.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\Novatech\\StockBundle/Resources/views/Vente/modepaiementVente.html.twig");
    }
}
