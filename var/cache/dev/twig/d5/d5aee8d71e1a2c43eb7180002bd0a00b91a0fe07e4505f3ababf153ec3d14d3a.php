<?php

/* userManagerBundle:User:profil.html.twig */
class __TwigTemplate_09b04d2a6f764e3b95e5fea811a353c2df6b4d1d634df76146cad28309fccf15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e60cedc93ed2e8a9eb08a4ad009c2557e0133d91eabc9b954dcb17f028a474e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e60cedc93ed2e8a9eb08a4ad009c2557e0133d91eabc9b954dcb17f028a474e->enter($__internal_3e60cedc93ed2e8a9eb08a4ad009c2557e0133d91eabc9b954dcb17f028a474e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userManagerBundle:User:profil.html.twig"));

        $__internal_6216daf87e42ec3542f77861a863286acb5ec102e75775863ab7897c47e58b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6216daf87e42ec3542f77861a863286acb5ec102e75775863ab7897c47e58b93->enter($__internal_6216daf87e42ec3542f77861a863286acb5ec102e75775863ab7897c47e58b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userManagerBundle:User:profil.html.twig"));

        // line 1
        echo "<h1>Welcome</h1>";
        
        $__internal_3e60cedc93ed2e8a9eb08a4ad009c2557e0133d91eabc9b954dcb17f028a474e->leave($__internal_3e60cedc93ed2e8a9eb08a4ad009c2557e0133d91eabc9b954dcb17f028a474e_prof);

        
        $__internal_6216daf87e42ec3542f77861a863286acb5ec102e75775863ab7897c47e58b93->leave($__internal_6216daf87e42ec3542f77861a863286acb5ec102e75775863ab7897c47e58b93_prof);

    }

    public function getTemplateName()
    {
        return "userManagerBundle:User:profil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Welcome</h1>", "userManagerBundle:User:profil.html.twig", "/home/rmag/projet/Stock_manager/src/userManagerBundle/Resources/views/User/profil.html.twig");
    }
}
