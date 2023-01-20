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

/* ::base.html.twig */
class __TwigTemplate_7cdf0fc732a2fe8aa6428e2d07a9c70bc13e97192f1903052cacb1b1b70ff2f5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset=\"utf-8\">
    <title>gestion stock</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/logo.jpg"), "html", null, true);
        echo "\" />
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <!-- Font Awesome -->
    <!-- <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">-->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <!--<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bower_components/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/script.js"), "html", null, true);
        echo "\"></script>

    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/datatables/buttons.dataTables.min.css"), "html", null, true);
        echo "\" >

    <style>
        #backButton {
            border-radius: 4px;
            padding: 8px;
            border: none;
            font-size: 16px;
            background-color: #2eacd1;
            color: white;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        .invisible {
            display: none;
        }
    </style>



    <div class=\"preloader\">
        <div class=\"cssload-speeding-wheel\"></div>
    </div>
</head>



<body class=\"hold-transition skin-green fixed sidebar-mini\">
<div class=\"wrapper\">

    <!-- Main Header -->
    <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tableau_bord");
        echo "\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>G</b>ST</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>GestionSTOCK</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">

                    <!-- User Account Menu -->
                    <li class=\"dropdown user user-menu \">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/img/profil.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            ";
        // line 88
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 89
            echo "                                <span class=\"hidden-xs\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "nom", []), "html", null, true);
            echo "</span>
                            ";
        }
        // line 91
        echo "                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">
                                <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/img/profil.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    ";
        // line 98
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 99
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "nom", []), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "prenom", []), "html", null, true);
            echo "
                                    ";
        }
        // line 101
        echo "                                    <small></small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    ";
        // line 110
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 111
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profil", ["id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\">Profile</a>
                                    ";
        }
        // line 113
        echo "                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
        echo "\" class=\"btn btn-default btn-flat\">Se déconnecter</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>-->
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar fixed\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                </div>
                <div class=\"pull-left info\">

                </div>
            </div>

            <!-- search form (Optional) -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">Menu</li>
                <li class=\"active\"><a href=\"";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tableau_bord");
        echo "\"><i class=\"fa fa-home\"></i> <span>Tableau de bord</span></a></li>
                <!-- Optionally, you can add icons to the links -->
                ";
        // line 157
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 158
            echo "                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-gg\"></i> <span>Gestion produit</span>
                            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
            // line 165
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_type_ajouter");
            echo "\"><i class=\"fa fa-list-alt\"></i>Type produit</a></li>
                            <li><a href=\"";
            // line 166
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_ajouter");
            echo "\"><i class=\"fa fa-list-alt\"></i>Produit</a></li>
                        </ul>
                    </li>
                ";
        }
        // line 170
        echo "                <li class=\"treeview\">
                    <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Gestion stock</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_liste");
        echo "\"><i class=\"fa fa-list-alt\"></i>Stock</a></li>
                        ";
        // line 178
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 179
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("approvisioner_liste");
            echo "\"><i class=\"fa fa-list-alt\"></i>Historique appro</a></li>
                            <li><a href=\"";
            // line 180
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_inventaire");
            echo "\"><i class=\"fa fa-building-o\"></i>Inventaire du stock</a></li>
                        ";
        }
        // line 182
        echo "                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\"><i class=\"fa fa-user\"></i> <span>Gestion client</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_ajouter");
        echo "\"><i class=\"fa fa-list-alt\"></i>Client</a></li>
                    </ul>
                </li>
                ";
        // line 194
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 195
            echo "                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-users\"></i> <span>Gestion fournisseur</span>
                            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
            // line 202
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_ajouter");
            echo "\"><i class=\"fa fa-list-alt\"></i>Fournisseur</a></li>
                        </ul>
                    </li>
                ";
        }
        // line 206
        echo "                <li class=\"treeview\">
                    <a href=\"#\"><i class=\"fa fa-money\"></i> <span>Gestion vente</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_ajouter");
        echo "\"><i class=\"fa fa-save\"></i> créer un vente</a></li>
                        <li><a href=\"";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste");
        echo "\"><i class=\"fa fa-list-alt\"></i>Liste des ventes</a></li>
                        <!--
                        <li><a href=\"";
        // line 216
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste_partiel");
        echo "\"><i class=\"fa fa-list-alt\"></i>Ventes avec paiement partiel</a></li>
                        <li><a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste_total");
        echo "\"><i class=\"fa fa-list-alt\"></i>Ventes avec paiement total</a></li>
                        -->
                    </ul>
                </li>
                <!--
                <li class=\"treeview\">
                    <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Gestion devis</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("achat_ajouter");
        echo "\"><i class=\"fa fa-save\"></i> créer un devis</a></li>
                        <li><a href=\"";
        // line 230
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("achat_liste");
        echo "\"><i class=\"fa fa-list-alt\"></i>Liste des devis</a></li>
                    </ul>
                </li>
                -->
                ";
        // line 234
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 235
            echo "
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-bank\"></i> <span>Gestion compte</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
            // line 243
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_ajouter");
            echo "\"><i class=\"fa fa-list-alt\"></i>Compte</a></li>
                            <li><a href=\"";
            // line 244
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chiffreAffaire_rapport_all");
            echo "\"><i class=\"fa fa-list-alt\"></i>Rapport compte</a></li>
                        </ul>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-users\"></i> <span>Gestion des utilisateurs</span>
                            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
            // line 255
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_liste");
            echo "\"><i class=\"fa fa-list-alt\"></i>Liste des utilisateurs</a></li>
                        </ul>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-files-o\"></i> <span>Rapport</span>
                            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
            // line 266
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_rapport_all");
            echo "\"><i class=\"fa fa-calendar-minus-o\"></i>Tableau complet </a></li>
                           <!-- <li><a href=\"";
            // line 267
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_rapport_allproduit");
            echo "\"><i class=\"fa fa-align-justify\"></i>Par période & produit</a></li>
                            <li><a href=\"";
            // line 268
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_rapport_by_user");
            echo "\"><i class=\"fa fa-user\"></i>Par utilisateur & période</a></li>
                            <li><a href=\"";
            // line 269
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_rapport_by_user_byproduit");
            echo "\"><i class=\"fa fa-calendar-minus-o\"></i>Par utilisateur & période & produit</a></li>
                            <li><a href=\"";
            // line 270
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_rapport_by_user");
            echo "\"><i class=\"fa fa-calendar-minus-o\"></i>Par période & produit & client</a></li>
                            <li><a href=\"";
            // line 271
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_rapport_byclientproduit");
            echo "\"><i class=\"fa fa-calendar-minus-o\"></i>Par période & client</a></li>
                            <li><a href=\"";
            // line 272
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ventenonvalider_rapport_byclientproduit");
            echo "\"><i class=\"fa fa-calendar-minus-o\"></i>Par client & vente non validée</a></li> -->
                        </ul>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-gears\"></i> <span>Parametres</span>
                            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
            // line 283
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("information_liste");
            echo "\"><i class=\"fa fa-info-circle\"></i> Information</a></li>
                            <!-- <li><a href=\"";
            // line 284
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_new");
            echo "\"><i class=\"fa fa-external-link-square\"></i> TVA</a></li>-->
                        </ul>
                    </li>
                ";
        }
        // line 288
        echo "            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        ";
        // line 296
        $this->displayBlock('header', $context, $blocks);
        // line 298
        echo "
        <section class=\"content\">
            <div class=\"row\" id=\"dashboard\">
                ";
        // line 301
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 302
            echo "                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-aqua\">
                            <div class=\"inner\">
                                <h3>";
            // line 306
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Achat:getMontantTotalVenteParDayParUser"));
            echo "</h3>

                                <p>Récette de la journée</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-bag\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3>";
            // line 321
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Achat:getMontantTotalCreditVenteParDayParUser"));
            echo "</h3>

                                <p>Crédit de la jounée</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-stats-bars\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-yellow\">
                            <div class=\"inner\">
                                <h3>";
            // line 336
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Achat:getNombreVenteParDayParUser"));
            echo " </h3>

                                <p>Nombre de ventes de la journée</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person-add\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-red\">
                            <div class=\"inner\">
                                <h3>";
            // line 351
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Stock:getNombreStock"));
            echo "</h3>

                                <p>Nombre de produits en stock</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-pie-graph\"></i>
                            </div>
                            <a href=\"";
            // line 358
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_liste");
            echo "\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 363
            echo "                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-aqua\">
                            <div class=\"inner\">
                                <h3>";
            // line 367
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Achat:getMontantTotalVenteParDay"));
            echo "</h3>

                                <p>Récette de la journée</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-bag\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3>";
            // line 382
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Achat:getMontantTotalCreditVenteParDay"));
            echo "</h3>

                                <p>Crédit de la journée</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-stats-bars\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-yellow\">
                            <div class=\"inner\">
                                <h3>";
            // line 397
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Achat:getNombreVenteParDay"));
            echo "</h3>

                                <p>Nombre ventes de la journée</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person-add\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-red\">
                            <div class=\"inner\">
                                <h3>";
            // line 412
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Stock:getNombreStock"));
            echo "</h3>

                                <p>Nombre de produits en stock</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-pie-graph\"></i>
                            </div>
                            <a href=\"";
            // line 419
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_liste");
            echo "\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                ";
        }
        // line 424
        echo "            </div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div style=\"padding-left: 13px; padding-right: 13px;\">
                        <div class=\"box\" >
                            ";
        // line 429
        $this->displayBlock('body', $context, $blocks);
        // line 432
        echo "                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer
    <footer class=\"main-footer\">

      <div class=\"pull-right hidden-xs\">

      </div>

      <strong><a href=\"#\">By RMAG TECH </a>&copy; 2019.</strong>
    </footer>
    -->
    <!-- Control Sidebar -->
    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <!-- <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>-->
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <!-- Home tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-user bg-yellow\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"label label-danger pull-right\">70%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Update Resume
                                <span class=\"label label-success pull-right\">95%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Laravel Integration
                                <span class=\"label label-warning pull-right\">50%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Back End Framework
                                <span class=\"label label-primary pull-right\">68%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Allow mail redirect
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Expose author name in posts
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Show me as online
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Turn off notifications
                            <input type=\"checkbox\" class=\"pull-right\">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Delete chat history
                            <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bower_components/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/canvas.min.js"), "html", null, true);
        echo "\"></script>
<!--<script src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/js/mdb.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/js/mdb.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>-->

<!-- AdminLTE App -->
<script src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/rmagdatatable.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 668
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
<!-- page specific plugin scripts -->
<script src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/dataTables.select.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/highcharts/modules/exporting.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/highcharts/modules/export-data.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/dataTables.select.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 296
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 297
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 429
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 430
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1038 => 430,  1029 => 429,  1019 => 297,  1010 => 296,  995 => 682,  991 => 681,  987 => 680,  983 => 679,  978 => 677,  974 => 676,  970 => 675,  966 => 674,  962 => 673,  958 => 672,  954 => 671,  950 => 670,  945 => 668,  941 => 667,  937 => 666,  931 => 663,  927 => 662,  923 => 661,  919 => 660,  915 => 659,  910 => 657,  906 => 656,  901 => 654,  897 => 653,  893 => 652,  671 => 432,  669 => 429,  662 => 424,  654 => 419,  644 => 412,  626 => 397,  608 => 382,  590 => 367,  584 => 363,  576 => 358,  566 => 351,  548 => 336,  530 => 321,  512 => 306,  506 => 302,  504 => 301,  499 => 298,  497 => 296,  487 => 288,  480 => 284,  476 => 283,  462 => 272,  458 => 271,  454 => 270,  450 => 269,  446 => 268,  442 => 267,  438 => 266,  424 => 255,  410 => 244,  406 => 243,  396 => 235,  394 => 234,  387 => 230,  383 => 229,  368 => 217,  364 => 216,  359 => 214,  355 => 213,  346 => 206,  339 => 202,  330 => 195,  328 => 194,  322 => 191,  311 => 182,  306 => 180,  301 => 179,  299 => 178,  295 => 177,  286 => 170,  279 => 166,  275 => 165,  266 => 158,  264 => 157,  259 => 155,  216 => 115,  212 => 113,  206 => 111,  204 => 110,  193 => 101,  185 => 99,  183 => 98,  177 => 95,  171 => 91,  165 => 89,  163 => 88,  159 => 87,  136 => 67,  97 => 31,  93 => 30,  88 => 28,  83 => 26,  79 => 25,  74 => 23,  69 => 21,  63 => 18,  56 => 14,  51 => 12,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset=\"utf-8\">
    <title>gestion stock</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('templates/logo.jpg') }}\" />
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"{{ asset('templates/bootstrap/css/bootstrap.min.css') }}\">

    <!-- Font Awesome -->
    <!-- <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">-->
    <link rel=\"stylesheet\" href=\"{{ asset('templates/bower_components/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Ionicons -->
    <!--<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">-->
    <link rel=\"stylesheet\" href=\"{{ asset('templates/bower_components/Ionicons/css/ionicons.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('templates/bower_components/select2/dist/css/select2.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('templates/dist/css/AdminLTE.min.css') }}\">
    <script src=\"{{ asset('templates/script.js') }}\"></script>

    <link rel=\"stylesheet\" href=\"{{ asset('templates/dist/css/skins/_all-skins.min.css')}}\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
    <link rel=\"stylesheet\" href=\"{{ asset('templates/plugins/datatables/dataTables.bootstrap.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('templates/plugins/datatables/buttons.dataTables.min.css' )}}\" >

    <style>
        #backButton {
            border-radius: 4px;
            padding: 8px;
            border: none;
            font-size: 16px;
            background-color: #2eacd1;
            color: white;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        .invisible {
            display: none;
        }
    </style>



    <div class=\"preloader\">
        <div class=\"cssload-speeding-wheel\"></div>
    </div>
</head>



<body class=\"hold-transition skin-green fixed sidebar-mini\">
<div class=\"wrapper\">

    <!-- Main Header -->
    <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"{{ path('tableau_bord') }}\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>G</b>ST</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>GestionSTOCK</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">

                    <!-- User Account Menu -->
                    <li class=\"dropdown user user-menu \">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                            <img src=\"{{ asset('templates/dist/img/profil.png')}}\" class=\"user-image\" alt=\"User Image\">
                            {% if app.user %}
                                <span class=\"hidden-xs\">{{ app.user.nom }}</span>
                            {% endif %}
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">
                                <img src=\"{{ asset('templates/dist/img/profil.png')}}\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    {% if app.user %}
                                        {{ app.user.nom }} &nbsp; {{ app.user.prenom }}
                                    {% endif %}
                                    <small></small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    {% if app.user %}
                                        <a href=\"{{ path('user_profil', {'id': app.user.id})  }}\" class=\"btn btn-default btn-flat\">Profile</a>
                                    {% endif %}
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"{{ path('user_logout') }}\" class=\"btn btn-default btn-flat\">Se déconnecter</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>-->
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar fixed\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                </div>
                <div class=\"pull-left info\">

                </div>
            </div>

            <!-- search form (Optional) -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">Menu</li>
                <li class=\"active\"><a href=\"{{path('tableau_bord')}}\"><i class=\"fa fa-home\"></i> <span>Tableau de bord</span></a></li>
                <!-- Optionally, you can add icons to the links -->
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-gg\"></i> <span>Gestion produit</span>
                            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{path('produit_type_ajouter')}}\"><i class=\"fa fa-list-alt\"></i>Type produit</a></li>
                            <li><a href=\"{{path('produit_ajouter')}}\"><i class=\"fa fa-list-alt\"></i>Produit</a></li>
                        </ul>
                    </li>
                {% endif %}
                <li class=\"treeview\">
                    <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Gestion stock</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{path('stock_liste')}}\"><i class=\"fa fa-list-alt\"></i>Stock</a></li>
                        {% if is_granted('ROLE_ADMIN') %}
                            <li><a href=\"{{path('approvisioner_liste')}}\"><i class=\"fa fa-list-alt\"></i>Historique appro</a></li>
                            <li><a href=\"{{path('stock_inventaire')}}\"><i class=\"fa fa-building-o\"></i>Inventaire du stock</a></li>
                        {% endif %}
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\"><i class=\"fa fa-user\"></i> <span>Gestion client</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{path('client_ajouter')}}\"><i class=\"fa fa-list-alt\"></i>Client</a></li>
                    </ul>
                </li>
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-users\"></i> <span>Gestion fournisseur</span>
                            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{path('fournisseur_ajouter')}}\"><i class=\"fa fa-list-alt\"></i>Fournisseur</a></li>
                        </ul>
                    </li>
                {% endif %}
                <li class=\"treeview\">
                    <a href=\"#\"><i class=\"fa fa-money\"></i> <span>Gestion vente</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{path('vente_ajouter')}}\"><i class=\"fa fa-save\"></i> créer un vente</a></li>
                        <li><a href=\"{{path('vente_liste')}}\"><i class=\"fa fa-list-alt\"></i>Liste des ventes</a></li>
                        <!--
                        <li><a href=\"{{path('vente_liste_partiel')}}\"><i class=\"fa fa-list-alt\"></i>Ventes avec paiement partiel</a></li>
                        <li><a href=\"{{path('vente_liste_total')}}\"><i class=\"fa fa-list-alt\"></i>Ventes avec paiement total</a></li>
                        -->
                    </ul>
                </li>
                <!--
                <li class=\"treeview\">
                    <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Gestion devis</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{path('achat_ajouter')}}\"><i class=\"fa fa-save\"></i> créer un devis</a></li>
                        <li><a href=\"{{path('achat_liste')}}\"><i class=\"fa fa-list-alt\"></i>Liste des devis</a></li>
                    </ul>
                </li>
                -->
                {% if is_granted('ROLE_ADMIN') %}

                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-bank\"></i> <span>Gestion compte</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{path('compte_ajouter')}}\"><i class=\"fa fa-list-alt\"></i>Compte</a></li>
                            <li><a href=\"{{path('chiffreAffaire_rapport_all')}}\"><i class=\"fa fa-list-alt\"></i>Rapport compte</a></li>
                        </ul>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-users\"></i> <span>Gestion des utilisateurs</span>
                            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{path('user_liste')}}\"><i class=\"fa fa-list-alt\"></i>Liste des utilisateurs</a></li>
                        </ul>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-files-o\"></i> <span>Rapport</span>
                            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{path('vente_rapport_all')}}\"><i class=\"fa fa-calendar-minus-o\"></i>Tableau complet </a></li>
                           <!-- <li><a href=\"{{path('vente_rapport_allproduit')}}\"><i class=\"fa fa-align-justify\"></i>Par période & produit</a></li>
                            <li><a href=\"{{path('vente_rapport_by_user')}}\"><i class=\"fa fa-user\"></i>Par utilisateur & période</a></li>
                            <li><a href=\"{{path('vente_rapport_by_user_byproduit')}}\"><i class=\"fa fa-calendar-minus-o\"></i>Par utilisateur & période & produit</a></li>
                            <li><a href=\"{{path('vente_rapport_by_user')}}\"><i class=\"fa fa-calendar-minus-o\"></i>Par période & produit & client</a></li>
                            <li><a href=\"{{path('vente_rapport_byclientproduit')}}\"><i class=\"fa fa-calendar-minus-o\"></i>Par période & client</a></li>
                            <li><a href=\"{{path('ventenonvalider_rapport_byclientproduit')}}\"><i class=\"fa fa-calendar-minus-o\"></i>Par client & vente non validée</a></li> -->
                        </ul>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-gears\"></i> <span>Parametres</span>
                            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{path('information_liste')}}\"><i class=\"fa fa-info-circle\"></i> Information</a></li>
                            <!-- <li><a href=\"{{path('tva_new')}}\"><i class=\"fa fa-external-link-square\"></i> TVA</a></li>-->
                        </ul>
                    </li>
                {% endif %}
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        {%block header%}
        {%endblock%}

        <section class=\"content\">
            <div class=\"row\" id=\"dashboard\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-aqua\">
                            <div class=\"inner\">
                                <h3>{{ render(controller('StockBundle:Achat:getMontantTotalVenteParDayParUser')) }}</h3>

                                <p>Récette de la journée</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-bag\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3>{{ render(controller('StockBundle:Achat:getMontantTotalCreditVenteParDayParUser')) }}</h3>

                                <p>Crédit de la jounée</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-stats-bars\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-yellow\">
                            <div class=\"inner\">
                                <h3>{{ render(controller('StockBundle:Achat:getNombreVenteParDayParUser')) }} </h3>

                                <p>Nombre de ventes de la journée</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person-add\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-red\">
                            <div class=\"inner\">
                                <h3>{{ render(controller('StockBundle:Stock:getNombreStock')) }}</h3>

                                <p>Nombre de produits en stock</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-pie-graph\"></i>
                            </div>
                            <a href=\"{{path('stock_liste')}}\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                {% elseif is_granted('ROLE_ADMIN') %}
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-aqua\">
                            <div class=\"inner\">
                                <h3>{{ render(controller('StockBundle:Achat:getMontantTotalVenteParDay')) }}</h3>

                                <p>Récette de la journée</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-bag\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3>{{ render(controller('StockBundle:Achat:getMontantTotalCreditVenteParDay')) }}</h3>

                                <p>Crédit de la journée</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-stats-bars\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-yellow\">
                            <div class=\"inner\">
                                <h3>{{ render(controller('StockBundle:Achat:getNombreVenteParDay')) }}</h3>

                                <p>Nombre ventes de la journée</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person-add\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-red\">
                            <div class=\"inner\">
                                <h3>{{ render(controller('StockBundle:Stock:getNombreStock')) }}</h3>

                                <p>Nombre de produits en stock</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-pie-graph\"></i>
                            </div>
                            <a href=\"{{path('stock_liste')}}\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                {% endif %}
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div style=\"padding-left: 13px; padding-right: 13px;\">
                        <div class=\"box\" >
                            {%block body%}

                            {%endblock%}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer
    <footer class=\"main-footer\">

      <div class=\"pull-right hidden-xs\">

      </div>

      <strong><a href=\"#\">By RMAG TECH </a>&copy; 2019.</strong>
    </footer>
    -->
    <!-- Control Sidebar -->
    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <!-- <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>-->
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <!-- Home tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-user bg-yellow\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"label label-danger pull-right\">70%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Update Resume
                                <span class=\"label label-success pull-right\">95%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Laravel Integration
                                <span class=\"label label-warning pull-right\">50%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Back End Framework
                                <span class=\"label label-primary pull-right\">68%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Allow mail redirect
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Expose author name in posts
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Show me as online
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Turn off notifications
                            <input type=\"checkbox\" class=\"pull-right\">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Delete chat history
                            <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src=\"{{ asset('templates/plugins/jQuery/jquery-2.2.3.min.js') }}\"></script>
<script src=\"{{ asset('templates/bootstrap/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('templates/bower_components/select2/dist/js/select2.full.min.js') }}\"></script>

<script src=\"{{ asset('templates/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}\"></script>
<script src=\"{{ asset('templates/bower_components/fastclick/lib/fastclick.js') }}\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"{{ asset('templates/chart.js') }}\"></script>
<script src=\"{{ asset('templates/canvas.min.js') }}\"></script>
<!--<script src=\"{{ asset('templates/bootstrap/js/mdb.min.js') }}\"></script>
<script src=\"{{ asset('templates/bootstrap/js/mdb.js') }}\"></script>
<script src=\"{{ asset('templates/bootstrap/js/popper.js') }}\"></script>-->

<!-- AdminLTE App -->
<script src=\"{{ asset('templates/rmagdatatable.js') }}\"></script>
<script src=\"{{ asset('templates/dist/js/app.min.js') }}\"></script>
<script src=\"{{ asset('templates/plugins/flot/jquery.flot.pie.min.js') }}\"></script>
<!-- page specific plugin scripts -->
<script src=\"{{ asset('template/assets/js/jquery.dataTables.min.js')}}\"></script>
<script src=\"{{ asset('template/assets/js/jquery.dataTables.bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('template/assets/js/dataTables.buttons.min.js') }}\"></script>
<script src=\"{{ asset('template/assets/js/buttons.flash.min.js') }}\"></script>
<script src=\"{{ asset('template/assets/js/buttons.html5.min.js') }}\"></script>
<script src=\"{{ asset('template/assets/js/buttons.print.min.js') }}\"></script>
<script src=\"{{ asset('template/assets/js/buttons.colVis.min.js') }}\"></script>
<script src=\"{{ asset('template/assets/js/dataTables.select.min.js') }}\"></script>

<script src=\"{{ asset('templates/highcharts/highcharts.js') }}\"></script>
<script src=\"{{ asset('templates/highcharts/modules/exporting.js') }}\"></script>
<script src=\"{{ asset('templates/highcharts/modules/export-data.js') }}\"></script>
<script src=\"{{ asset('template/assets/js/dataTables.select.min.js') }}\"></script>

</body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\Stock_manager\\app/Resources\\views/base.html.twig");
    }
}
