<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userManagerBundle\\Controller\\UserController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userManagerBundle\\Controller\\UserController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userManagerBundle\\Controller\\UserController::userAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listeUser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_profil' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'userManagerBundle\\Controller\\UserController::ProfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/profil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_active' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userManagerBundle\\Controller\\UserController::ActiveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/active',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_desactive' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userManagerBundle\\Controller\\UserController::DesactiveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/desactive',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'userManagerBundle\\Controller\\UserController::createUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\FournisseurBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'information_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\InformationBundle\\Controller\\InformationController::listeInformationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste_information',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'information_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\InformationBundle\\Controller\\InformationController::addInformationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_information',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'information_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\InformationBundle\\Controller\\InformationController::editInformationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit_information',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'information_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\InformationBundle\\Controller\\InformationController::deleteInformationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete_information',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\ClientBundle\\Controller\\ClientController::listeClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste_client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\ClientBundle\\Controller\\ClientController::addClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\ClientBundle\\Controller\\ClientController::editClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit_client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\ClientBundle\\Controller\\ClientController::deleteClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete_client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tableau_bord' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\ClientBundle\\Controller\\DefaultController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\ClientBundle\\Controller\\FournisseurController::listeFournisseurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste_fournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\ClientBundle\\Controller\\FournisseurController::addFournisseurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_fournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\ClientBundle\\Controller\\FournisseurController::editFournisseurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit_fournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\ClientBundle\\Controller\\FournisseurController::deleteFournisseurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete_fournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stock_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::listeStockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste_stock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stock_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::addStockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_stock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stock_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::editStockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit_stock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stock_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::deleteStockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete_stock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stock_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::deltailStockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detail_stock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'approvisioner_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\StockFournisseurController::listeApprovisionerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste_approvisioner',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'achat_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::addAchatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_achat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'achat_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::editAchatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifier_devis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'achat_facture_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::editAchatFactureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifier_facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'achat_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::listeachatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste_devis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produitachat_ajouter' => array (  0 =>   array (    0 => 'idFacture',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::addProduitAchatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idFacture',    ),    1 =>     array (      0 => 'text',      1 => '/ajouterproduit_devis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produitachat_retirer' => array (  0 =>   array (    0 => 'idAchat',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::removeProduitAchatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAchat',    ),    1 =>     array (      0 => 'text',      1 => '/retirerproduit_devis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'imprimerachat_ajouter' => array (  0 =>   array (    0 => 'idFacture',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerDevisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idFacture',    ),    1 =>     array (      0 => 'text',      1 => '/imprimer_devis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'imprimer_facture' => array (  0 =>   array (    0 => 'idFacture',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerFactureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idFacture',    ),    1 =>     array (      0 => 'text',      1 => '/imprimer_facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'facture_imprimer' => array (  0 =>   array (    0 => 'idFacture',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::factureImprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idFacture',    ),    1 =>     array (      0 => 'text',      1 => '/facture_imprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientfacture_ajouter' => array (  0 =>   array (    0 => 'idFacture',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajoutClientFactureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idFacture',    ),    1 =>     array (      0 => 'text',      1 => '/ajouterclient_devis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remise_devis_ajouter' => array (  0 =>   array (    0 => 'idFacture',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajoutremiseFactureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idFacture',    ),    1 =>     array (      0 => 'text',      1 => '/remise_devis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tva_devis_ajouter' => array (  0 =>   array (    0 => 'idFacture',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajouttvaFactureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idFacture',    ),    1 =>     array (      0 => 'text',      1 => '/tva_devis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vente_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::listeVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vente_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::addVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vente_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::editVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vente_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::deleteVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vente_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::deltailVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detail_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produitvente_ajouter' => array (  0 =>   array (    0 => 'idVente',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::addProduitVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idVente',    ),    1 =>     array (      0 => 'text',      1 => '/ajouterproduit_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produitvente_retirer' => array (  0 =>   array (    0 => 'idVente',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::removeProduitVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idVente',    ),    1 =>     array (      0 => 'text',      1 => '/retirerproduit_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'imprimervente_ajouter' => array (  0 =>   array (    0 => 'idVente',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idVente',    ),    1 =>     array (      0 => 'text',      1 => '/imprimer_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientvente_ajouter' => array (  0 =>   array (    0 => 'idVente',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajoutClientVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idVente',    ),    1 =>     array (      0 => 'text',      1 => '/ajouterclient_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remise_vente_ajouter' => array (  0 =>   array (    0 => 'idVente',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajoutremiseVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idVente',    ),    1 =>     array (      0 => 'text',      1 => '/remise_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tva_vente_ajouter' => array (  0 =>   array (    0 => 'idVente',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajouttvaVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idVente',    ),    1 =>     array (      0 => 'text',      1 => '/tva_client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vente_valider' => array (  0 =>   array (    0 => 'idVente',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::validerVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idVente',    ),    1 =>     array (      0 => 'text',      1 => '/valider_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vente_imprimerrecu' => array (  0 =>   array (    0 => 'idVente',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerRecuVenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idVente',    ),    1 =>     array (      0 => 'text',      1 => '/imprimerrecu_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vente_rapport_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::rapportVenteAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rapport_vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vente_rapport_by_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::rapportVenteByUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rapport_vente_byuser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tva_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tva_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tva_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newtva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tva_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edittva',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tva_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deletetva',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_type_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::listeTypeProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste_produit_type',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_type_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::addTypeProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_produit_type',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_type_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::editTypeProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit_produit_type',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_type_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::deleteTypeProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete_produit_type',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_type_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::detailTypeProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detail_produit_type',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\ProduitBundle\\Controller\\ProduitController::listeProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste_produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Novatech\\ProduitBundle\\Controller\\ProduitController::addProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\ProduitBundle\\Controller\\ProduitController::editProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit_produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Novatech\\ProduitBundle\\Controller\\ProduitController::deleteProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete_produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
