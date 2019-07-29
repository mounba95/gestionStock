<?php

/* userManagerBundle:User:login.html.twig */
class __TwigTemplate_678d3f512e38facd8ce2be0f3b8564e473b49c9433bbe5aea9eb78068df60e14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutUserManager.html.twig", "userManagerBundle:User:login.html.twig", 1);
        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutUserManager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57554e1686c9ab139c09ebd29f915dd6cea08d6bac49b217d9f5fddca943fdd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57554e1686c9ab139c09ebd29f915dd6cea08d6bac49b217d9f5fddca943fdd1->enter($__internal_57554e1686c9ab139c09ebd29f915dd6cea08d6bac49b217d9f5fddca943fdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userManagerBundle:User:login.html.twig"));

        $__internal_a5227f46d4106f49cd4780a19807c2530f8209d09b249af4c5f6f9b61d065488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5227f46d4106f49cd4780a19807c2530f8209d09b249af4c5f6f9b61d065488->enter($__internal_a5227f46d4106f49cd4780a19807c2530f8209d09b249af4c5f6f9b61d065488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userManagerBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57554e1686c9ab139c09ebd29f915dd6cea08d6bac49b217d9f5fddca943fdd1->leave($__internal_57554e1686c9ab139c09ebd29f915dd6cea08d6bac49b217d9f5fddca943fdd1_prof);

        
        $__internal_a5227f46d4106f49cd4780a19807c2530f8209d09b249af4c5f6f9b61d065488->leave($__internal_a5227f46d4106f49cd4780a19807c2530f8209d09b249af4c5f6f9b61d065488_prof);

    }

    // line 2
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_1f77ecca39de78ba90c05d4e1f44bcbc02d09f3a070a87785979bd8e110b5767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f77ecca39de78ba90c05d4e1f44bcbc02d09f3a070a87785979bd8e110b5767->enter($__internal_1f77ecca39de78ba90c05d4e1f44bcbc02d09f3a070a87785979bd8e110b5767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        $__internal_6cc5cab08ccd6e73586b519bab794f484dfe8132b49b50dcca9814ce007b9fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc5cab08ccd6e73586b519bab794f484dfe8132b49b50dcca9814ce007b9fd5->enter($__internal_6cc5cab08ccd6e73586b519bab794f484dfe8132b49b50dcca9814ce007b9fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        // line 3
        echo "<div class=\"login-box\">
    <div class=\"login-logo\">
        <b>Gestion</b>STOCK
    </div>
    <div class=\"login-box-body\">
        <p class=\"login-box-msg\">veuillez saisir vos donnée</p>
        ";
        // line 9
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 10
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 12
        echo "        ";
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 13
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 15
        echo "        <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login");
        echo "\" method=\"post\">

            <div class=\"form-group has-feedback\">
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" required=\"required\" placeholder=\"Email\" autocomplete=\"username\" />
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"mot de passe\" required=\"required\" autocomplete=\"current-password\" />
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-7\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class=\"col-xs-5\">
                    <button type=\"submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\">Se connecté</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href=\"#\">Mot de passe oublié</a><br>


    </div>
</div>

    ";
        
        $__internal_6cc5cab08ccd6e73586b519bab794f484dfe8132b49b50dcca9814ce007b9fd5->leave($__internal_6cc5cab08ccd6e73586b519bab794f484dfe8132b49b50dcca9814ce007b9fd5_prof);

        
        $__internal_1f77ecca39de78ba90c05d4e1f44bcbc02d09f3a070a87785979bd8e110b5767->leave($__internal_1f77ecca39de78ba90c05d4e1f44bcbc02d09f3a070a87785979bd8e110b5767_prof);

    }

    public function getTemplateName()
    {
        return "userManagerBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  68 => 13,  65 => 12,  59 => 10,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layoutUserManager.html.twig\" %}
{% block user_content %}
<div class=\"login-box\">
    <div class=\"login-logo\">
        <b>Gestion</b>STOCK
    </div>
    <div class=\"login-box-body\">
        <p class=\"login-box-msg\">veuillez saisir vos donnée</p>
        {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}
        <form action=\"{{ path(\"user_login\") }}\" method=\"post\">

            <div class=\"form-group has-feedback\">
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" required=\"required\" placeholder=\"Email\" autocomplete=\"username\" />
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"mot de passe\" required=\"required\" autocomplete=\"current-password\" />
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-7\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class=\"col-xs-5\">
                    <button type=\"submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\">Se connecté</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href=\"#\">Mot de passe oublié</a><br>


    </div>
</div>

    {% endblock user_content %}", "userManagerBundle:User:login.html.twig", "/home/rmag/projet/Stock_manager/src/userManagerBundle/Resources/views/User/login.html.twig");
    }
}
