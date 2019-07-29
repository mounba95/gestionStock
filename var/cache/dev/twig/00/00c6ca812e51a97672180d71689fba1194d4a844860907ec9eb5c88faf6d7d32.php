<?php

/* ::layoutUserManager.html.twig */
class __TwigTemplate_d96fb46a26555753c3726dcd64f448b6d8ac22f3a84e6044b09046ce53d2859b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44300dbe2fd38a6422ae6757dfb5e49e994188f3a4a5628843bb9f706363c142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44300dbe2fd38a6422ae6757dfb5e49e994188f3a4a5628843bb9f706363c142->enter($__internal_44300dbe2fd38a6422ae6757dfb5e49e994188f3a4a5628843bb9f706363c142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layoutUserManager.html.twig"));

        $__internal_c4e535b0c1de99365db7b9a7c4b8d0142bedca43499224e516b0794ba9d2d137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e535b0c1de99365db7b9a7c4b8d0142bedca43499224e516b0794ba9d2d137->enter($__internal_c4e535b0c1de99365db7b9a7c4b8d0142bedca43499224e516b0794ba9d2d137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layoutUserManager.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body  class=\"hold-transition login-page\">

";
        // line 30
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 31
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 32
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 33
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 34
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 39
        echo "
<div>
    ";
        // line 41
        $this->displayBlock('user_content', $context, $blocks);
        // line 43
        echo "</div>

<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- iCheck -->
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(function () {
        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
";
        
        $__internal_44300dbe2fd38a6422ae6757dfb5e49e994188f3a4a5628843bb9f706363c142->leave($__internal_44300dbe2fd38a6422ae6757dfb5e49e994188f3a4a5628843bb9f706363c142_prof);

        
        $__internal_c4e535b0c1de99365db7b9a7c4b8d0142bedca43499224e516b0794ba9d2d137->leave($__internal_c4e535b0c1de99365db7b9a7c4b8d0142bedca43499224e516b0794ba9d2d137_prof);

    }

    // line 41
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_2e89d7cdc34fa441b28a3691c741eae83ad838f30c4be3ffd5d59ab3c4844355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e89d7cdc34fa441b28a3691c741eae83ad838f30c4be3ffd5d59ab3c4844355->enter($__internal_2e89d7cdc34fa441b28a3691c741eae83ad838f30c4be3ffd5d59ab3c4844355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        $__internal_5c50b0742961ef5967bac1c2099557a46354e35703b56162bfa89e7f1a51cc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c50b0742961ef5967bac1c2099557a46354e35703b56162bfa89e7f1a51cc55->enter($__internal_5c50b0742961ef5967bac1c2099557a46354e35703b56162bfa89e7f1a51cc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        // line 42
        echo "    ";
        
        $__internal_5c50b0742961ef5967bac1c2099557a46354e35703b56162bfa89e7f1a51cc55->leave($__internal_5c50b0742961ef5967bac1c2099557a46354e35703b56162bfa89e7f1a51cc55_prof);

        
        $__internal_2e89d7cdc34fa441b28a3691c741eae83ad838f30c4be3ffd5d59ab3c4844355->leave($__internal_2e89d7cdc34fa441b28a3691c741eae83ad838f30c4be3ffd5d59ab3c4844355_prof);

    }

    public function getTemplateName()
    {
        return "::layoutUserManager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 42,  145 => 41,  122 => 52,  117 => 50,  112 => 48,  105 => 43,  103 => 41,  99 => 39,  92 => 37,  83 => 34,  78 => 33,  73 => 32,  68 => 31,  66 => 30,  51 => 18,  46 => 16,  37 => 10,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"{{ asset('templates/bootstrap/css/bootstrap.min.css')}}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('templates/dist/css/AdminLTE.min.css')}}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ asset('templates/plugins/iCheck/square/blue.css')}}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body  class=\"hold-transition login-page\">

{% if app.request.hasPreviousSession %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"flash-{{ type }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}

<div>
    {% block user_content %}
    {% endblock user_content %}
</div>

<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src=\"{{ asset('templates/plugins/jQuery/jquery-2.2.3.min.js')}}\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"{{ asset('templates/bootstrap/js/bootstrap.min.js')}}\"></script>
<!-- iCheck -->
<script src=\"{{ asset('templates/plugins/iCheck/icheck.min.js')}}\"></script>
<script>
    \$(function () {
        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
", "::layoutUserManager.html.twig", "/home/rmag/projet/Stock_manager/app/Resources/views/layoutUserManager.html.twig");
    }
}
