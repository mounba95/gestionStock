<?php

/* StockBundle:Vente:rapportventebyuser.html.twig */
class __TwigTemplate_f085021e51b116cece4d43647df26b5646cef95fe5c1c60a071bc0ae1f867108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StockBundle:Vente:rapportventebyuser.html.twig", 1);
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
        $__internal_e2e02338a4214fc435c90938bdaa8a406d3f0ee2e034c7e5a66238cb1c7b296f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e02338a4214fc435c90938bdaa8a406d3f0ee2e034c7e5a66238cb1c7b296f->enter($__internal_e2e02338a4214fc435c90938bdaa8a406d3f0ee2e034c7e5a66238cb1c7b296f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Vente:rapportventebyuser.html.twig"));

        $__internal_f1e33fe1d450068efa328370a5da72903a07776ada2c1fefdc84a21621f1b7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e33fe1d450068efa328370a5da72903a07776ada2c1fefdc84a21621f1b7d8->enter($__internal_f1e33fe1d450068efa328370a5da72903a07776ada2c1fefdc84a21621f1b7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Vente:rapportventebyuser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2e02338a4214fc435c90938bdaa8a406d3f0ee2e034c7e5a66238cb1c7b296f->leave($__internal_e2e02338a4214fc435c90938bdaa8a406d3f0ee2e034c7e5a66238cb1c7b296f_prof);

        
        $__internal_f1e33fe1d450068efa328370a5da72903a07776ada2c1fefdc84a21621f1b7d8->leave($__internal_f1e33fe1d450068efa328370a5da72903a07776ada2c1fefdc84a21621f1b7d8_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_6f4ec08e6e88d529669f26e041d85bdd29308994677fca542bbb5b79b4f30098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4ec08e6e88d529669f26e041d85bdd29308994677fca542bbb5b79b4f30098->enter($__internal_6f4ec08e6e88d529669f26e041d85bdd29308994677fca542bbb5b79b4f30098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_bb3d461671ff793849e7f7979907450a62082919184ff6d282b3af0755de396a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3d461671ff793849e7f7979907450a62082919184ff6d282b3af0755de396a->enter($__internal_bb3d461671ff793849e7f7979907450a62082919184ff6d282b3af0755de396a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_bb3d461671ff793849e7f7979907450a62082919184ff6d282b3af0755de396a->leave($__internal_bb3d461671ff793849e7f7979907450a62082919184ff6d282b3af0755de396a_prof);

        
        $__internal_6f4ec08e6e88d529669f26e041d85bdd29308994677fca542bbb5b79b4f30098->leave($__internal_6f4ec08e6e88d529669f26e041d85bdd29308994677fca542bbb5b79b4f30098_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d59f13a907b9907a79383f4acc4c9be7d5790bd8886cc7f5fb9b5d5fee8575b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d59f13a907b9907a79383f4acc4c9be7d5790bd8886cc7f5fb9b5d5fee8575b->enter($__internal_7d59f13a907b9907a79383f4acc4c9be7d5790bd8886cc7f5fb9b5d5fee8575b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bb1a99f69df573ccf40bdb96d6c0fdc0129f8384bd946305ecaf2ba0db73497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb1a99f69df573ccf40bdb96d6c0fdc0129f8384bd946305ecaf2ba0db73497->enter($__internal_1bb1a99f69df573ccf40bdb96d6c0fdc0129f8384bd946305ecaf2ba0db73497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Agent"));
        echo "
            <div class=\"form-group  form-float\">
                <div class=\"form-line\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Agent")));
        echo "  ";
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", array()), 'errors');
        // line 35
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Date Debut"));
        echo "
            <div class=\"form-group  form-float\">
                <div class=\"form-line\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Debut")));
        echo "  ";
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateFrom", array()), 'errors');
        // line 44
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Date Fin"));
        echo "
            <div class=\"form-group  form-float\">
                <div class=\"form-line\">
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fin")));
        echo "  ";
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTo", array()), 'errors');
        // line 53
        echo "
                </div>
            </div>
        </div>
        
    </div>
                 
                ";
        // line 60
        echo " 
                <div class=\"pull-right\">
                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                </div>
                ";
        // line 65
        echo "                ";
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo " ";
        // line 67
        echo "                     
                      ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    
           
           

            <p>Montant Toral des ventes est : <b>";
        // line 73
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
        // line 97
        if ((($context["result"] ?? $this->getContext($context, "result")) == 1)) {
            // line 98
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["venteListe"] ?? $this->getContext($context, "venteListe")));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 99
                echo "                        <tr>
                          
                            <td>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "referenceFacture", array()), "html", null, true);
                echo "</td>
                           <td>";
                // line 103
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "dateFacture", array()), "d-m-Y"), "html", null, true);
                echo "</td>
                            
                            
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                 
               ";
        }
        // line 110
        echo "                </tbody>

            </table>
        </div>

";
        
        $__internal_1bb1a99f69df573ccf40bdb96d6c0fdc0129f8384bd946305ecaf2ba0db73497->leave($__internal_1bb1a99f69df573ccf40bdb96d6c0fdc0129f8384bd946305ecaf2ba0db73497_prof);

        
        $__internal_7d59f13a907b9907a79383f4acc4c9be7d5790bd8886cc7f5fb9b5d5fee8575b->leave($__internal_7d59f13a907b9907a79383f4acc4c9be7d5790bd8886cc7f5fb9b5d5fee8575b_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Vente:rapportventebyuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 110,  239 => 108,  228 => 103,  224 => 102,  220 => 101,  216 => 99,  211 => 98,  209 => 97,  182 => 73,  174 => 68,  171 => 67,  166 => 65,  160 => 60,  151 => 53,  146 => 52,  140 => 49,  133 => 44,  128 => 43,  122 => 40,  115 => 35,  110 => 34,  104 => 31,  98 => 28,  93 => 27,  79 => 15,  70 => 14,  50 => 3,  41 => 2,  11 => 1,);
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
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
            {{ form_label(form.user, \"Agent\", {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"form-group  form-float\">
                <div class=\"form-line\">
                    {{ form_widget(form.user, {'attr': {'class': 'form-control', 'placeholder':'Agent' } }) }}  {# Affichage des erreurs pour ce champ précis. #} {{ form_errors(form.dateTo)
                    }}
                </div>
            </div>
        </div>
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
            {{ form_label(form.dateFrom, \"Date Debut\", {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"form-group  form-float\">
                <div class=\"form-line\">
                    {{ form_widget(form.dateFrom, {'attr': {'class': 'form-control', 'placeholder':'Debut'} }) }}  {# Affichage des erreurs pour ce champ précis. #} {{ form_errors(form.dateFrom)
                    }}
                </div>
            </div>
        </div>
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
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

{% endblock %}", "StockBundle:Vente:rapportventebyuser.html.twig", "/home/rmag/projet/Stock_manager/src/Novatech/StockBundle/Resources/views/Vente/rapportventebyuser.html.twig");
    }
}
