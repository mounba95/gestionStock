<?php

/* StockBundle:Vente:rapportallvente.html.twig */
class __TwigTemplate_bfc70dd81aee3dd250227065952bd3ae1cff126e633779e5c38b7b1dc0d171bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:rapportallvente.html.twig", 1);
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
        $__internal_a7f53ac09a184f7ce2ebc29acc8db3033167a1fcd6fb1fc255b29d1f3616be2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f53ac09a184f7ce2ebc29acc8db3033167a1fcd6fb1fc255b29d1f3616be2d->enter($__internal_a7f53ac09a184f7ce2ebc29acc8db3033167a1fcd6fb1fc255b29d1f3616be2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Vente:rapportallvente.html.twig"));

        $__internal_5c1a24c14ed97d8850ce301c8ce8a123488203d8d19a7ae868fee7b9dc59fede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1a24c14ed97d8850ce301c8ce8a123488203d8d19a7ae868fee7b9dc59fede->enter($__internal_5c1a24c14ed97d8850ce301c8ce8a123488203d8d19a7ae868fee7b9dc59fede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Vente:rapportallvente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7f53ac09a184f7ce2ebc29acc8db3033167a1fcd6fb1fc255b29d1f3616be2d->leave($__internal_a7f53ac09a184f7ce2ebc29acc8db3033167a1fcd6fb1fc255b29d1f3616be2d_prof);

        
        $__internal_5c1a24c14ed97d8850ce301c8ce8a123488203d8d19a7ae868fee7b9dc59fede->leave($__internal_5c1a24c14ed97d8850ce301c8ce8a123488203d8d19a7ae868fee7b9dc59fede_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_ae08749e63965a2e09313fb434a72642454165b89269913e1ebee1f0f06a6f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae08749e63965a2e09313fb434a72642454165b89269913e1ebee1f0f06a6f33->enter($__internal_ae08749e63965a2e09313fb434a72642454165b89269913e1ebee1f0f06a6f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e3a70915de3d58cca14a27aa564a9eacd7991f184bc528d8854171470228ea3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a70915de3d58cca14a27aa564a9eacd7991f184bc528d8854171470228ea3f->enter($__internal_e3a70915de3d58cca14a27aa564a9eacd7991f184bc528d8854171470228ea3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "      <section class=\"content-header\">
      <h1>
        Rapport
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        <li><a href=\"#\">Rapport sur la vente</a></li>
      </ol>
    </section>
    ";
        
        $__internal_e3a70915de3d58cca14a27aa564a9eacd7991f184bc528d8854171470228ea3f->leave($__internal_e3a70915de3d58cca14a27aa564a9eacd7991f184bc528d8854171470228ea3f_prof);

        
        $__internal_ae08749e63965a2e09313fb434a72642454165b89269913e1ebee1f0f06a6f33->leave($__internal_ae08749e63965a2e09313fb434a72642454165b89269913e1ebee1f0f06a6f33_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_628fe01fcda45dc5bdb7ce0a7afb042499a872ad4fbae1c8f7e19288e9811565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628fe01fcda45dc5bdb7ce0a7afb042499a872ad4fbae1c8f7e19288e9811565->enter($__internal_628fe01fcda45dc5bdb7ce0a7afb042499a872ad4fbae1c8f7e19288e9811565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45b153b37f4a036492a94903224dd1aca4d7174af20d6b9a0df5a190ce0812c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b153b37f4a036492a94903224dd1aca4d7174af20d6b9a0df5a190ce0812c3->enter($__internal_45b153b37f4a036492a94903224dd1aca4d7174af20d6b9a0df5a190ce0812c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "         <div class=\"box-header box box-success\">
             <h3 class=\"box-title\">Rapport sur la vente</h3>
   

        </div>
<div class=\"box-body\">
        <div class=\"callout callout-info\" style=\"margin-bottom: 0!important;\">
        <h4><i class=\"fa fa-info\"></i> Note:</h4>
        Veuillez choisir vos options.
      </div>
               <br>
    
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo " ";
        echo " 
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo " 
            <div class=\"row clearfix\">
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Date Debut"));
        echo "
            <div class=\"form-group  form-float\">
                <div class=\"form-line\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Debut")));
        echo "  ";
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", array()), 'errors');
        // line 35
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Date Fin"));
        echo "
            <div class=\"form-group  form-float\">
                <div class=\"form-line\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fin")));
        echo "  ";
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", array()), 'errors');
        // line 44
        echo "
                </div>
            </div>
        </div>
    </div>
                 
                ";
        // line 50
        echo " 
                <div class=\"pull-right\">
                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                </div>
                ";
        // line 55
        echo "                ";
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo " ";
        // line 57
        echo "                     
                      ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    
           
           

            <p>Montant Toral des ventes est : <b>";
        // line 63
        echo twig_escape_filter($this->env, ($context["montantVente"] ?? $this->getContext($context, "montantVente")), "html", null, true);
        echo "</b></p>
            <table id=\"table_rapport\" class=\"table table-bordered\">
                <thead>
                    <tr>
                      
                        <th>id</th>
                        <th>Réference vente</th>
                                           
                         <th>Date</th>
                       
                      
                    </tr>
                </thead>
                <tfoot>
                <tr>
                      
                        <th>id</th>
                        <th>Réference vente</th>
                        <th>Date</th>
                       
                      
                    </tr>
                </tfoot>
                <tbody>
                ";
        // line 87
        if ((($context["result"] ?? $this->getContext($context, "result")) == 1)) {
            // line 88
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["venteListe"] ?? $this->getContext($context, "venteListe")));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 89
                echo "                        <tr>
                          
                            <td>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "referenceFacture", array()), "html", null, true);
                echo "</td>
                           <td>";
                // line 93
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "dateFacture", array()), "d-m-Y"), "html", null, true);
                echo "</td>
                            
                            
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                 
               ";
        }
        // line 100
        echo "                </tbody>

            </table>
        </div>

";
        
        $__internal_45b153b37f4a036492a94903224dd1aca4d7174af20d6b9a0df5a190ce0812c3->leave($__internal_45b153b37f4a036492a94903224dd1aca4d7174af20d6b9a0df5a190ce0812c3_prof);

        
        $__internal_628fe01fcda45dc5bdb7ce0a7afb042499a872ad4fbae1c8f7e19288e9811565->leave($__internal_628fe01fcda45dc5bdb7ce0a7afb042499a872ad4fbae1c8f7e19288e9811565_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Vente:rapportallvente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 100,  220 => 98,  209 => 93,  205 => 92,  201 => 91,  197 => 89,  192 => 88,  190 => 87,  163 => 63,  155 => 58,  152 => 57,  147 => 55,  141 => 50,  133 => 44,  128 => 43,  122 => 40,  115 => 35,  110 => 34,  104 => 31,  98 => 28,  93 => 27,  79 => 15,  70 => 14,  50 => 3,  41 => 2,  11 => 1,);
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
        Rapport
        <small></small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>
        <li><a href=\"#\">Rapport sur la vente</a></li>
      </ol>
    </section>
    {%endblock%}
    {%block body%}
         <div class=\"box-header box box-success\">
             <h3 class=\"box-title\">Rapport sur la vente</h3>
   

        </div>
<div class=\"box-body\">
        <div class=\"callout callout-info\" style=\"margin-bottom: 0!important;\">
        <h4><i class=\"fa fa-info\"></i> Note:</h4>
        Veuillez choisir vos options.
      </div>
               <br>
    
        {{ form_start(form) }} {# Les erreurs générales du formulaire. #} 
        {{ form_errors(form) }} 
            <div class=\"row clearfix\">
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
            {{ form_label(form.dateFrom, \"Date Debut\", {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"form-group  form-float\">
                <div class=\"form-line\">
                    {{ form_widget(form.dateFrom, {'attr': {'class': 'form-control', 'placeholder':'Debut'} }) }}  {# Affichage des erreurs pour ce champ précis. #} {{ form_errors(form.dateFrom)
                    }}
                </div>
            </div>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
            {{ form_label(form.dateTo, \"Date Fin\", {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"form-group  form-float\">
                <div class=\"form-line\">
                    {{ form_widget(form.dateTo, {'attr': {'class': 'form-control', 'placeholder':'Fin' } }) }}  {# Affichage des erreurs pour ce champ précis. #} {{ form_errors(form.dateTo)
                    }}
                </div>
            </div>
        </div>
    </div>
                 
                {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #} 
                <div class=\"pull-right\">
                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                </div>
                {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
                {# Génération automatique des champs pas encore écrits. Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !) et tous les champs cachés (type « hidden »). #} {{ form_rest(form) }} {# Fermeture de la balise
                     <form> du formulaire HTML #}
                     
                      {{ form_end(form) }}
    
           
           

            <p>Montant Toral des ventes est : <b>{{ montantVente }}</b></p>
            <table id=\"table_rapport\" class=\"table table-bordered\">
                <thead>
                    <tr>
                      
                        <th>id</th>
                        <th>Réference vente</th>
                                           
                         <th>Date</th>
                       
                      
                    </tr>
                </thead>
                <tfoot>
                <tr>
                      
                        <th>id</th>
                        <th>Réference vente</th>
                        <th>Date</th>
                       
                      
                    </tr>
                </tfoot>
                <tbody>
                {%if result==1%}
                    {% for f in venteListe %}
                        <tr>
                          
                            <td>{{ f.id }}</td>
                            <td>{{ f.referenceFacture}}</td>
                           <td>{{ f.dateFacture|date('d-m-Y') }}</td>
                            
                            
                        </tr>
                    {%endfor%}
                 
               {% endif %}
                </tbody>

            </table>
        </div>

{% endblock %}", "StockBundle:Vente:rapportallvente.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/StockBundle/Resources/views/Vente/rapportallvente.html.twig");
    }
}
