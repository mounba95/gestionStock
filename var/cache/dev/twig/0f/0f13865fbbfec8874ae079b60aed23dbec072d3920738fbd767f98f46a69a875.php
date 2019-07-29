<?php

/* ::base.html.twig */
class __TwigTemplate_3e7995f1086c8385b0fd8e6c7f54f180957ed16b88ce845759c389839cc6a2f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'partieJs' => array($this, 'block_partieJs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b4b92675fa1b5690f218c8bacf57092f4088483401825180229da42d8468fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4b92675fa1b5690f218c8bacf57092f4088483401825180229da42d8468fc7->enter($__internal_4b4b92675fa1b5690f218c8bacf57092f4088483401825180229da42d8468fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_3107014adf374ec00662cbdbfaaa26ddb6241da232e10504376494f599e2a8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3107014adf374ec00662cbdbfaaa26ddb6241da232e10504376494f599e2a8c5->enter($__internal_3107014adf374ec00662cbdbfaaa26ddb6241da232e10504376494f599e2a8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>gestion facture</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!--<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/css/mdb.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/css/mdb.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/css/style.min.css"), "html", null, true);
        echo "\">-->
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">

  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">

  <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/datatables/buttons.dataTables.min.css"), "html", null, true);
        echo "\" >

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
        // line 44
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
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
              ";
        // line 65
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 66
            echo "              <span class=\"hidden-xs\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</span>
              ";
        }
        // line 68
        echo "            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                <p>
                  ";
        // line 75
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 76
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "
                  ";
        }
        // line 78
        echo "                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                ";
        // line 87
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 88
            echo "                  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\">Profile</a>
                  ";
        }
        // line 90
        echo "                </div>
                <div class=\"pull-right\">
                  <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
        echo "\" class=\"btn btn-default btn-flat\">Deconnection</a>
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
        <!-- Optionally, you can add icons to the links -->
         ";
        // line 133
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 134
            echo "        <li class=\"treeview\">
          <a href=\"#\"><i class=\"fa fa-gg\"></i> <span>Gestion produit</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
            // line 141
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_type_liste");
            echo "\"><i class=\"fa fa-list-alt\"></i>Lister type</a></li>
            <li><a href=\"";
            // line 142
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_liste");
            echo "\"><i class=\"fa fa-list-alt\"></i>Lister produit</a></li>
          </ul>
        </li>
        ";
        }
        // line 146
        echo "        <li class=\"treeview\">
          <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Gestion stock</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_liste");
        echo "\"><i class=\"fa fa-list-alt\"></i>Stock</a></li>
             ";
        // line 154
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 155
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("approvisioner_liste");
            echo "\"><i class=\"fa fa-list-alt\"></i>Historique appro</a></li>
            ";
        }
        // line 157
        echo "          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\"><i class=\"fa fa-user\"></i> <span>Gestion client</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_liste");
        echo "\"><i class=\"fa fa-list-alt\"></i>Lister client</a></li>
          </ul>
        </li>
         ";
        // line 169
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 170
            echo "        <li class=\"treeview\">
          <a href=\"#\"><i class=\"fa fa-users\"></i> <span>Gestion fournisseur</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
            // line 177
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_liste");
            echo "\"><i class=\"fa fa-list-alt\"></i>Lister fournisseur</a></li>
          </ul>
        </li>
        ";
        }
        // line 181
        echo "        <li class=\"treeview\">
          <a href=\"#\"><i class=\"fa fa-money\"></i> <span>Gestion vente</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_ajouter");
        echo "\"><i class=\"fa fa-save\"></i> créer un vente</a></li>
            <li><a href=\"";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_liste");
        echo "\"><i class=\"fa fa-list-alt\"></i>Liste des ventes</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Gestion devis</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("achat_ajouter");
        echo "\"><i class=\"fa fa-save\"></i> créer un devis</a></li>
            <li><a href=\"";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("achat_liste");
        echo "\"><i class=\"fa fa-list-alt\"></i>Liste des devis</a></li>
          </ul>
        </li>
         ";
        // line 203
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 204
            echo "        <li class=\"treeview\">
          <a href=\"#\"><i class=\"fa fa-users\"></i> <span>Gestion des utilisateurs</span>
             <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
            // line 211
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
            // line 222
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_rapport_all");
            echo "\">Par période </a></li>
            <li><a href=\"";
            // line 223
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vente_rapport_by_user");
            echo "\">Par utilisateur & période</a></li>
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
            // line 234
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("information_liste");
            echo "\"><i class=\"fa fa-info-circle\"></i> Information</a></li>
            <li><a href=\"";
            // line 235
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_index");
            echo "\"><i class=\"fa fa-external-link-square\"></i> TVA</a></li>
          </ul>
        </li>
        ";
        }
        // line 239
        echo "      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
      ";
        // line 247
        $this->displayBlock('header', $context, $blocks);
        // line 249
        echo "    
    <section class=\"content\">
     <div class=\"row\" id=\"dashboard\">
      ";
        // line 252
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 253
            echo "        <div class=\"col-lg-3 col-xs-6\">
          <!-- small box -->
          <div class=\"small-box bg-aqua\">
            <div class=\"inner\">
              <h3>";
            // line 257
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Achat:getMontantTotalVenteParDayParUser"));
            echo "</h3>

              <p>Montant total de la vente</p>
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
            // line 272
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Achat:getNombreVenteParDayParUser"));
            echo "</h3>

              <p>Nombre de ventes de la journée</p>
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
            // line 287
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Achat:getNombreProduitVendusParDayParUser"));
            echo " </h3>

              <p>Produits vendus dans la journée</p>
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
            // line 302
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Stock:getNombreStock"));
            echo "</h3>

              <p>Nombre de produits en stock</p>
            </div>
            <div class=\"icon\">
              <i class=\"ion ion-pie-graph\"></i>
            </div>
            <a href=\"";
            // line 309
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_liste");
            echo "\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 315
            echo "         <div class=\"col-lg-3 col-xs-6\">
          <!-- small box -->
          <div class=\"small-box bg-aqua\">
            <div class=\"inner\">
              <h3>";
            // line 319
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Achat:getMontantTotalVenteParDay"));
            echo "</h3>

              <p>Montant total de la vente</p>
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
            // line 334
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Achat:getNombreVenteParDay"));
            echo "</h3>

              <p>Nombre de ventes de la journée</p>
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
            // line 349
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Achat:getNombreProduitVendusParDay"));
            echo " </h3>

              <p>Produits vendus dans la journée</p>
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
            // line 364
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("StockBundle:Stock:getNombreStock"));
            echo "</h3>

              <p>Nombre de produits en stock</p>
            </div>
            <div class=\"icon\">
              <i class=\"ion ion-pie-graph\"></i>
            </div>
            <a href=\"";
            // line 371
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_liste");
            echo "\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      ";
        }
        // line 377
        echo "      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"box\">
              ";
        // line 380
        $this->displayBlock('body', $context, $blocks);
        // line 383
        echo "          </div>
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
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--<script src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/js/mdb.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/js/mdb.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>-->
";
        // line 608
        $this->displayBlock('partieJs', $context, $blocks);
        // line 611
        echo "<!-- AdminLTE App -->
<script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/agritech.js"), "html", null, true);
        echo "\">
<script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/plugins/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\">


<script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/highcharts/highcharts.js"), "html", null, true);
        echo "\">
<script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/highcharts/modules/exporting.js"), "html", null, true);
        echo "\">
<script src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/highcharts/modules/export-data.js"), "html", null, true);
        echo "\">



</body>
</html>
";
        
        $__internal_4b4b92675fa1b5690f218c8bacf57092f4088483401825180229da42d8468fc7->leave($__internal_4b4b92675fa1b5690f218c8bacf57092f4088483401825180229da42d8468fc7_prof);

        
        $__internal_3107014adf374ec00662cbdbfaaa26ddb6241da232e10504376494f599e2a8c5->leave($__internal_3107014adf374ec00662cbdbfaaa26ddb6241da232e10504376494f599e2a8c5_prof);

    }

    // line 247
    public function block_header($context, array $blocks = array())
    {
        $__internal_f46eab29880b33c1a03b4e65962b051261ead1941f1d44f23ac03cb5f2788f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46eab29880b33c1a03b4e65962b051261ead1941f1d44f23ac03cb5f2788f11->enter($__internal_f46eab29880b33c1a03b4e65962b051261ead1941f1d44f23ac03cb5f2788f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e5612a948f278d1ab567a0187444ecf2b1995a0a8d31564e0cc53c284540d5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5612a948f278d1ab567a0187444ecf2b1995a0a8d31564e0cc53c284540d5bb->enter($__internal_e5612a948f278d1ab567a0187444ecf2b1995a0a8d31564e0cc53c284540d5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 248
        echo "      ";
        
        $__internal_e5612a948f278d1ab567a0187444ecf2b1995a0a8d31564e0cc53c284540d5bb->leave($__internal_e5612a948f278d1ab567a0187444ecf2b1995a0a8d31564e0cc53c284540d5bb_prof);

        
        $__internal_f46eab29880b33c1a03b4e65962b051261ead1941f1d44f23ac03cb5f2788f11->leave($__internal_f46eab29880b33c1a03b4e65962b051261ead1941f1d44f23ac03cb5f2788f11_prof);

    }

    // line 380
    public function block_body($context, array $blocks = array())
    {
        $__internal_476e31a69ead933bb7b21441692bf285bc9b69addd080b46990a49c8fe5b2652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476e31a69ead933bb7b21441692bf285bc9b69addd080b46990a49c8fe5b2652->enter($__internal_476e31a69ead933bb7b21441692bf285bc9b69addd080b46990a49c8fe5b2652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_106261f283e9b4c589c5785087c3f6f39770026e852bac42eba2886b8dc71f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106261f283e9b4c589c5785087c3f6f39770026e852bac42eba2886b8dc71f6c->enter($__internal_106261f283e9b4c589c5785087c3f6f39770026e852bac42eba2886b8dc71f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 381
        echo "
              ";
        
        $__internal_106261f283e9b4c589c5785087c3f6f39770026e852bac42eba2886b8dc71f6c->leave($__internal_106261f283e9b4c589c5785087c3f6f39770026e852bac42eba2886b8dc71f6c_prof);

        
        $__internal_476e31a69ead933bb7b21441692bf285bc9b69addd080b46990a49c8fe5b2652->leave($__internal_476e31a69ead933bb7b21441692bf285bc9b69addd080b46990a49c8fe5b2652_prof);

    }

    // line 608
    public function block_partieJs($context, array $blocks = array())
    {
        $__internal_a04ebd3e209f0e4c4cec33aa128d366edab51a5e28cc70f5e761c68730f0d9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04ebd3e209f0e4c4cec33aa128d366edab51a5e28cc70f5e761c68730f0d9dd->enter($__internal_a04ebd3e209f0e4c4cec33aa128d366edab51a5e28cc70f5e761c68730f0d9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partieJs"));

        $__internal_ee854dd69f42e89a4d02ab66a07483b904c4f3513d465fd78de06a284cd3b426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee854dd69f42e89a4d02ab66a07483b904c4f3513d465fd78de06a284cd3b426->enter($__internal_ee854dd69f42e89a4d02ab66a07483b904c4f3513d465fd78de06a284cd3b426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partieJs"));

        // line 609
        echo "
";
        
        $__internal_ee854dd69f42e89a4d02ab66a07483b904c4f3513d465fd78de06a284cd3b426->leave($__internal_ee854dd69f42e89a4d02ab66a07483b904c4f3513d465fd78de06a284cd3b426_prof);

        
        $__internal_a04ebd3e209f0e4c4cec33aa128d366edab51a5e28cc70f5e761c68730f0d9dd->leave($__internal_a04ebd3e209f0e4c4cec33aa128d366edab51a5e28cc70f5e761c68730f0d9dd_prof);

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
        return array (  914 => 609,  905 => 608,  894 => 381,  885 => 380,  875 => 248,  866 => 247,  849 => 621,  845 => 620,  841 => 619,  835 => 616,  831 => 615,  827 => 614,  823 => 613,  819 => 612,  816 => 611,  814 => 608,  810 => 607,  806 => 606,  802 => 605,  798 => 604,  793 => 602,  572 => 383,  570 => 380,  565 => 377,  556 => 371,  546 => 364,  528 => 349,  510 => 334,  492 => 319,  486 => 315,  477 => 309,  467 => 302,  449 => 287,  431 => 272,  413 => 257,  407 => 253,  405 => 252,  400 => 249,  398 => 247,  388 => 239,  381 => 235,  377 => 234,  363 => 223,  359 => 222,  345 => 211,  336 => 204,  334 => 203,  328 => 200,  324 => 199,  311 => 189,  307 => 188,  298 => 181,  291 => 177,  282 => 170,  280 => 169,  274 => 166,  263 => 157,  257 => 155,  255 => 154,  251 => 153,  242 => 146,  235 => 142,  231 => 141,  222 => 134,  220 => 133,  176 => 92,  172 => 90,  166 => 88,  164 => 87,  153 => 78,  146 => 76,  144 => 75,  138 => 72,  132 => 68,  126 => 66,  124 => 65,  120 => 64,  97 => 44,  78 => 28,  74 => 27,  69 => 25,  64 => 23,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  28 => 1,);
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
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>gestion facture</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"{{ asset('templates/bootstrap/css/bootstrap.min.css') }}\">
  <!--<link rel=\"stylesheet\" href=\"{{ asset('templates/bootstrap/css/mdb.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('templates/bootstrap/css/mdb.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('templates/bootstrap/css/style.min.css') }}\">-->
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"{{ asset('templates/dist/css/AdminLTE.min.css') }}\">

  <link rel=\"stylesheet\" href=\"{{ asset('templates/dist/css/skins/_all-skins.min.css')}}\">

  <link rel=\"stylesheet\" href=\"{{ asset('templates/plugins/datatables/dataTables.bootstrap.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset('templates/plugins/datatables/buttons.dataTables.min.css' )}}\" >

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
              <img src=\"{{ asset('templates/dist/img/user2-160x160.jpg')}}\" class=\"user-image\" alt=\"User Image\">
              {% if app.user %}
              <span class=\"hidden-xs\">{{ app.user.nom }}</span>
              {% endif %}
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"{{ asset('templates/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">

                <p>
                  {% if app.user %}
                  {{ app.user.nom }}{{ app.user.prenom }}
                  {% endif %}
                  <small>Member since Nov. 2012</small>
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
                  <a href=\"{{ path('user_logout') }}\" class=\"btn btn-default btn-flat\">Deconnection</a>
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
        <!-- Optionally, you can add icons to the links -->
         {% if is_granted('ROLE_ADMIN') %}
        <li class=\"treeview\">
          <a href=\"#\"><i class=\"fa fa-gg\"></i> <span>Gestion produit</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"{{path('produit_type_liste')}}\"><i class=\"fa fa-list-alt\"></i>Lister type</a></li>
            <li><a href=\"{{path('produit_liste')}}\"><i class=\"fa fa-list-alt\"></i>Lister produit</a></li>
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
            <li><a href=\"{{path('client_liste')}}\"><i class=\"fa fa-list-alt\"></i>Lister client</a></li>
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
            <li><a href=\"{{path('fournisseur_liste')}}\"><i class=\"fa fa-list-alt\"></i>Lister fournisseur</a></li>
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
          </ul>
        </li>
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
         {% if is_granted('ROLE_ADMIN') %}
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
            <li><a href=\"{{path('vente_rapport_all')}}\">Par période </a></li>
            <li><a href=\"{{path('vente_rapport_by_user')}}\">Par utilisateur & période</a></li>
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
            <li><a href=\"{{path('tva_index')}}\"><i class=\"fa fa-external-link-square\"></i> TVA</a></li>
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

              <p>Montant total de la vente</p>
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
              <h3>{{ render(controller('StockBundle:Achat:getNombreVenteParDayParUser')) }}</h3>

              <p>Nombre de ventes de la journée</p>
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
              <h3>{{ render(controller('StockBundle:Achat:getNombreProduitVendusParDayParUser')) }} </h3>

              <p>Produits vendus dans la journée</p>
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
      </div>
      {% elseif is_granted('ROLE_ADMIN') %}
         <div class=\"col-lg-3 col-xs-6\">
          <!-- small box -->
          <div class=\"small-box bg-aqua\">
            <div class=\"inner\">
              <h3>{{ render(controller('StockBundle:Achat:getMontantTotalVenteParDay')) }}</h3>

              <p>Montant total de la vente</p>
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
              <h3>{{ render(controller('StockBundle:Achat:getNombreVenteParDay')) }}</h3>

              <p>Nombre de ventes de la journée</p>
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
              <h3>{{ render(controller('StockBundle:Achat:getNombreProduitVendusParDay')) }} </h3>

              <p>Produits vendus dans la journée</p>
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
      </div>
      {% endif %}
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"box\">
              {%block body%}

              {%endblock%}
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
<!-- Bootstrap 3.3.6 -->
<script src=\"{{ asset('templates/bootstrap/js/bootstrap.min.js') }}\"></script>
<!--<script src=\"{{ asset('templates/bootstrap/js/mdb.min.js') }}\"></script>
<script src=\"{{ asset('templates/bootstrap/js/mdb.js') }}\"></script>
<script src=\"{{ asset('templates/bootstrap/js/popper.js') }}\"></script>-->
{%block partieJs%}

{%endblock%}
<!-- AdminLTE App -->
<script src=\"{{ asset('templates/dist/js/app.min.js') }}\"></script>
<script src=\"{{ asset('templates/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('templates/plugins/datatables/dataTables.bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('templates/agritech.js') }}\">
<script src=\"{{ asset('templates/plugins/flot/jquery.flot.pie.min.js') }}\">


<script src=\"{{ asset('templates/highcharts/highcharts.js') }}\">
<script src=\"{{ asset('templates/highcharts/modules/exporting.js') }}\">
<script src=\"{{ asset('templates/highcharts/modules/export-data.js') }}\">



</body>
</html>
", "::base.html.twig", "/home/rmag/projet/Stock_manager/app/Resources/views/base.html.twig");
    }
}
