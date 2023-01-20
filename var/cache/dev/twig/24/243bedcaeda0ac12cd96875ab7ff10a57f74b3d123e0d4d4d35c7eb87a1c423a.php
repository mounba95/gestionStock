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

/* userManagerBundle:User:register.html.twig */
class __TwigTemplate_2fa6f1be40ef69b1f21ecf84a906605ea23fddad72f5255e9b43b307632a3eae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userManagerBundle:User:register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userManagerBundle:User:register.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "userManagerBundle:User:register.html.twig", 1);
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
                Utilisateurs
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
        <div class=\"box box-success\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Ajouter utilisateur</h3>

                <div class=\"pull-right\" >
                    <a href=\"";
        // line 20
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
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Prenom</label>
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "prenom"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Nom d'utilisateur</label>
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom d'utilisateur"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Téléphone</label>
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "adresse"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Mot de passe</label>
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "mot de passe", "min" => "0"]]);
        echo "
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Confirmez mot de passe</label>
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "confirm_password", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "confirmez votre mot de passe "]]);
        echo "
                            <div style=\"color: red\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "confirm_password", []), 'errors');
        echo "
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Rôle</label>
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", []), 'widget', ["attr" => ["class" => "form-control", "min" => "0"]]);
        echo "
                        </div>
                        <div class=\"pull-right\" >
                            <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                        </div>
                    </div>
                    ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "<!-- /.col -->
                    <!-- /.row -->
                </div>
            </div>
        </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  194 => 84,  185 => 78,  174 => 70,  169 => 68,  159 => 61,  149 => 54,  139 => 47,  129 => 40,  119 => 33,  115 => 32,  111 => 31,  97 => 20,  89 => 14,  80 => 13,  61 => 3,  52 => 2,  30 => 1,);
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
                Utilisateurs
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
                            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder':'nom'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Prenom</label>
                            {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder':'prenom'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Nom d'utilisateur</label>
                            {{ form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder':'nom d\\'utilisateur'} }) }}
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label>Téléphone</label>
                            {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder':'adresse'} }) }}
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
                            {{ form_widget(form.roles, {'attr': {'class': 'form-control','min':'0'} }) }}
                        </div>
                        <div class=\"pull-right\" >
                            <input type=\"submit\" value=\"valider\" class=\"btn bg-olive btn-flat margin\"/>
                        </div>
                    </div>
                    {{ form_end(form) }}<!-- /.col -->
                    <!-- /.row -->
                </div>
            </div>
        </div>

    {% endblock %}
", "userManagerBundle:User:register.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\src\\userManagerBundle/Resources/views/User/register.html.twig");
    }
}
