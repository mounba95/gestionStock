<?php

/* userManagerBundle:User:register.html.twig */
class __TwigTemplate_f825020346c2e465db054d8e3905e958cce9f15b9d2412c3dbed685d067b46cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "userManagerBundle:User:register.html.twig", 1);
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
        $__internal_4eaf7cae76369234af8ee1a474474cf0108ebd33ccad9f8e446b514cde2645e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eaf7cae76369234af8ee1a474474cf0108ebd33ccad9f8e446b514cde2645e0->enter($__internal_4eaf7cae76369234af8ee1a474474cf0108ebd33ccad9f8e446b514cde2645e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userManagerBundle:User:register.html.twig"));

        $__internal_28650ef879be2703d6bb569de785b1a628f4cf4d1ed177b4ea0bfd301aec0650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28650ef879be2703d6bb569de785b1a628f4cf4d1ed177b4ea0bfd301aec0650->enter($__internal_28650ef879be2703d6bb569de785b1a628f4cf4d1ed177b4ea0bfd301aec0650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userManagerBundle:User:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eaf7cae76369234af8ee1a474474cf0108ebd33ccad9f8e446b514cde2645e0->leave($__internal_4eaf7cae76369234af8ee1a474474cf0108ebd33ccad9f8e446b514cde2645e0_prof);

        
        $__internal_28650ef879be2703d6bb569de785b1a628f4cf4d1ed177b4ea0bfd301aec0650->leave($__internal_28650ef879be2703d6bb569de785b1a628f4cf4d1ed177b4ea0bfd301aec0650_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_bd0b305c8b7856cae8d83df20ca3d6b45be18c7e403e21bbae00d7869f8920b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0b305c8b7856cae8d83df20ca3d6b45be18c7e403e21bbae00d7869f8920b6->enter($__internal_bd0b305c8b7856cae8d83df20ca3d6b45be18c7e403e21bbae00d7869f8920b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0dd7076190069bb2310c1dbda01e0fff7fb16d4d27e00701e9ac7e882389ce3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd7076190069bb2310c1dbda01e0fff7fb16d4d27e00701e9ac7e882389ce3e->enter($__internal_0dd7076190069bb2310c1dbda01e0fff7fb16d4d27e00701e9ac7e882389ce3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "        <section class=\"content-header\">
            <h1>
                Utilisateurs
                <small>Ajout d'un utilisateur</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>

            </ol>
        </section>
    ";
        
        $__internal_0dd7076190069bb2310c1dbda01e0fff7fb16d4d27e00701e9ac7e882389ce3e->leave($__internal_0dd7076190069bb2310c1dbda01e0fff7fb16d4d27e00701e9ac7e882389ce3e_prof);

        
        $__internal_bd0b305c8b7856cae8d83df20ca3d6b45be18c7e403e21bbae00d7869f8920b6->leave($__internal_bd0b305c8b7856cae8d83df20ca3d6b45be18c7e403e21bbae00d7869f8920b6_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf0b008b0e3d6c1a0adfda3cae9e386f3a522dbf8b9bfb5f343dba3251621fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0b008b0e3d6c1a0adfda3cae9e386f3a522dbf8b9bfb5f343dba3251621fbe->enter($__internal_cf0b008b0e3d6c1a0adfda3cae9e386f3a522dbf8b9bfb5f343dba3251621fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6189b3f78e02e105d93766c62c780f23f0c6ad2e492723bfcb513a7f2b41a2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6189b3f78e02e105d93766c62c780f23f0c6ad2e492723bfcb513a7f2b41a2dc->enter($__internal_6189b3f78e02e105d93766c62c780f23f0c6ad2e492723bfcb513a7f2b41a2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
        <div class=\"box box-success\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Ajouter utilisateur</h3>

                <div class=\"pull-right\" >
                    <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_liste");
        echo "\"  class=\"btn bg-olive btn-flat margin\">Liste des utilisateurs</a>
                </div>
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Nom</label>
                            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nom du client")));
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Prenom</label>
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "adresse email client")));
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Pseudo</label>
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "adresse email client")));
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Téléphone</label>
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "adresse email client")));
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Mot de passe</label>
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "mot de passe", "min" => "0")));
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Confirmez mot de passe</label>
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "confirm_password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "confirmez votre mot de passe ")));
        echo "
                            <div style=\"color: red\">
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "confirm_password", array()), 'errors');
        echo "
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Rôle</label>
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", array()), 'widget');
        echo "
                            <div class=\"pull-right\" >
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>
                            ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>                    <!-- /.col -->
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">

                </div>
            </div>
        </div>

    ";
        
        $__internal_6189b3f78e02e105d93766c62c780f23f0c6ad2e492723bfcb513a7f2b41a2dc->leave($__internal_6189b3f78e02e105d93766c62c780f23f0c6ad2e492723bfcb513a7f2b41a2dc_prof);

        
        $__internal_cf0b008b0e3d6c1a0adfda3cae9e386f3a522dbf8b9bfb5f343dba3251621fbe->leave($__internal_cf0b008b0e3d6c1a0adfda3cae9e386f3a522dbf8b9bfb5f343dba3251621fbe_prof);

    }

    public function getTemplateName()
    {
        return "userManagerBundle:User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 85,  177 => 81,  166 => 73,  161 => 71,  149 => 62,  139 => 55,  129 => 48,  119 => 41,  109 => 34,  105 => 33,  101 => 32,  87 => 21,  79 => 15,  70 => 14,  50 => 3,  41 => 2,  11 => 1,);
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
                Utilisateurs
                <small>Ajout d'un utilisateur</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Accueil</a></li>

            </ol>
        </section>
    {%endblock%}
    {%block body%}

        <div class=\"box box-success\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Ajouter utilisateur</h3>

                <div class=\"pull-right\" >
                    <a href=\"{{ path('user_liste') }}\"  class=\"btn bg-olive btn-flat margin\">Liste des utilisateurs</a>
                </div>
            </div>

            <!-- /.box-header -->

            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Nom</label>
                            {{ form_start(form) }}
                            {{ form_errors(form) }}
                            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder':'nom du client'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Prenom</label>
                            {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder':'adresse email client'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Pseudo</label>
                            {{ form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder':'adresse email client'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Téléphone</label>
                            {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder':'adresse email client'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Mot de passe</label>
                            {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder':'mot de passe','min':'0'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Confirmez mot de passe</label>
                            {{ form_widget(form.confirm_password, {'attr': {'class': 'form-control', 'placeholder':'confirmez votre mot de passe '} }) }}
                            <div style=\"color: red\">
                            {{ form_errors(form.confirm_password) }}
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Rôle</label>
                            {{ form_widget(form.roles) }}
                            <div class=\"pull-right\" >
                                <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                            </div>
                            {{ form_end(form) }}
                        </div>
                    </div>                    <!-- /.col -->
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">

                </div>
            </div>
        </div>

    {% endblock %}
", "userManagerBundle:User:register.html.twig", "/home/rmag/projet/Stock_manager/src/userManagerBundle/Resources/views/User/register.html.twig");
    }
}
