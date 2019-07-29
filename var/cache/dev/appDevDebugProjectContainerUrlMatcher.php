<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // user_login
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'userManagerBundle\\Controller\\UserController::loginAction',  '_route' => 'user_login',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_user_login;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_login'));
            }

            return $ret;
        }
        not_user_login:

        if (0 === strpos($pathinfo, '/l')) {
            // user_logout
            if ('/logout' === $pathinfo) {
                return array (  '_controller' => 'userManagerBundle\\Controller\\UserController::logoutAction',  '_route' => 'user_logout',);
            }

            // user_liste
            if ('/listeUser' === $pathinfo) {
                return array (  '_controller' => 'userManagerBundle\\Controller\\UserController::userAction',  '_route' => 'user_liste',);
            }

            if (0 === strpos($pathinfo, '/liste_')) {
                // information_liste
                if ('/liste_information' === $pathinfo) {
                    return array (  '_controller' => 'Novatech\\InformationBundle\\Controller\\InformationController::listeInformationAction',  '_route' => 'information_liste',);
                }

                // client_liste
                if ('/liste_client' === $pathinfo) {
                    return array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\ClientController::listeClientAction',  '_route' => 'client_liste',);
                }

                // fournisseur_liste
                if ('/liste_fournisseur' === $pathinfo) {
                    return array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\FournisseurController::listeFournisseurAction',  '_route' => 'fournisseur_liste',);
                }

                // stock_liste
                if ('/liste_stock' === $pathinfo) {
                    return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::listeStockAction',  '_route' => 'stock_liste',);
                }

                // approvisioner_liste
                if ('/liste_approvisioner' === $pathinfo) {
                    return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\StockFournisseurController::listeApprovisionerAction',  '_route' => 'approvisioner_liste',);
                }

                // achat_liste
                if ('/liste_devis' === $pathinfo) {
                    return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::listeachatAction',  '_route' => 'achat_liste',);
                }

                // vente_liste
                if ('/liste_vente' === $pathinfo) {
                    return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::listeVenteAction',  '_route' => 'vente_liste',);
                }

            }

        }

        // user_profil
        if (0 === strpos($pathinfo, '/profil') && preg_match('#^/profil/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_profil')), array (  '_controller' => 'userManagerBundle\\Controller\\UserController::ProfilAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // user_active
            if ('/active' === $pathinfo) {
                return array (  '_controller' => 'userManagerBundle\\Controller\\UserController::ActiveAction',  '_route' => 'user_active',);
            }

            // tableau_bord
            if ('/accueil' === $pathinfo) {
                return array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'tableau_bord',);
            }

            if (0 === strpos($pathinfo, '/ajouter')) {
                if (0 === strpos($pathinfo, '/ajouter_')) {
                    // information_ajouter
                    if ('/ajouter_information' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\InformationBundle\\Controller\\InformationController::addInformationAction',  '_route' => 'information_ajouter',);
                    }

                    // client_ajouter
                    if ('/ajouter_client' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\ClientController::addClientAction',  '_route' => 'client_ajouter',);
                    }

                    // fournisseur_ajouter
                    if ('/ajouter_fournisseur' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\FournisseurController::addFournisseurAction',  '_route' => 'fournisseur_ajouter',);
                    }

                    // stock_ajouter
                    if ('/ajouter_stock' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::addStockAction',  '_route' => 'stock_ajouter',);
                    }

                    // achat_ajouter
                    if ('/ajouter_achat' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::addAchatAction',  '_route' => 'achat_ajouter',);
                    }

                    // vente_ajouter
                    if ('/ajouter_vente' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::addVenteAction',  '_route' => 'vente_ajouter',);
                    }

                }

                // produitachat_ajouter
                if (0 === strpos($pathinfo, '/ajouterproduit_devis') && preg_match('#^/ajouterproduit_devis/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produitachat_ajouter')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::addProduitAchatAction',));
                }

                // produitvente_ajouter
                if (0 === strpos($pathinfo, '/ajouterproduit_vente') && preg_match('#^/ajouterproduit_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produitvente_ajouter')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::addProduitVenteAction',));
                }

                // clientfacture_ajouter
                if (0 === strpos($pathinfo, '/ajouterclient_devis') && preg_match('#^/ajouterclient_devis/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientfacture_ajouter')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajoutClientFactureAction',));
                }

                // clientvente_ajouter
                if (0 === strpos($pathinfo, '/ajouterclient_vente') && preg_match('#^/ajouterclient_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientvente_ajouter')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajoutClientVenteAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/de')) {
            // user_desactive
            if ('/desactive' === $pathinfo) {
                return array (  '_controller' => 'userManagerBundle\\Controller\\UserController::DesactiveAction',  '_route' => 'user_desactive',);
            }

            if (0 === strpos($pathinfo, '/delete_')) {
                // information_supprimer
                if (0 === strpos($pathinfo, '/delete_information') && preg_match('#^/delete_information/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'information_supprimer')), array (  '_controller' => 'Novatech\\InformationBundle\\Controller\\InformationController::deleteInformationAction',));
                }

                // client_supprimer
                if (0 === strpos($pathinfo, '/delete_client') && preg_match('#^/delete_client/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_supprimer')), array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\ClientController::deleteClientAction',));
                }

                // fournisseur_supprimer
                if (0 === strpos($pathinfo, '/delete_fournisseur') && preg_match('#^/delete_fournisseur/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_supprimer')), array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\FournisseurController::deleteFournisseurAction',));
                }

                // stock_supprimer
                if (0 === strpos($pathinfo, '/delete_stock') && preg_match('#^/delete_stock/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_supprimer')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::deleteStockAction',));
                }

                // vente_supprimer
                if (0 === strpos($pathinfo, '/delete_vente') && preg_match('#^/delete_vente/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vente_supprimer')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::deleteVenteAction',));
                }

            }

            // stock_detail
            if (0 === strpos($pathinfo, '/detail_stock') && preg_match('#^/detail_stock/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_detail')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::deltailStockAction',));
            }

            // vente_detail
            if (0 === strpos($pathinfo, '/detail_vente') && preg_match('#^/detail_vente/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vente_detail')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::deltailVenteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            // user_register
            if ('/register' === $pathinfo) {
                return array (  '_controller' => 'userManagerBundle\\Controller\\UserController::createUserAction',  '_route' => 'user_register',);
            }

            // produitachat_retirer
            if (0 === strpos($pathinfo, '/retirerproduit_devis') && preg_match('#^/retirerproduit_devis/(?P<idAchat>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produitachat_retirer')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::removeProduitAchatAction',));
            }

            // produitvente_retirer
            if (0 === strpos($pathinfo, '/retirerproduit_vente') && preg_match('#^/retirerproduit_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produitvente_retirer')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::removeProduitVenteAction',));
            }

            // remise_devis_ajouter
            if (0 === strpos($pathinfo, '/remise_devis') && preg_match('#^/remise_devis/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remise_devis_ajouter')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajoutremiseFactureAction',));
            }

            // remise_vente_ajouter
            if (0 === strpos($pathinfo, '/remise_vente') && preg_match('#^/remise_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remise_vente_ajouter')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajoutremiseVenteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/rapport_vente')) {
            // vente_rapport_all
            if ('/rapport_vente' === $pathinfo) {
                return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::rapportVenteAllAction',  '_route' => 'vente_rapport_all',);
            }

            // vente_rapport_by_user
            if ('/rapport_vente_byuser' === $pathinfo) {
                return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::rapportVenteByUserAction',  '_route' => 'vente_rapport_by_user',);
            }

        }

        // fournisseur_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Novatech\\FournisseurBundle\\Controller\\DefaultController::indexAction',  '_route' => 'fournisseur_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_fournisseur_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fournisseur_homepage'));
            }

            return $ret;
        }
        not_fournisseur_homepage:

        if (0 === strpos($pathinfo, '/edit_')) {
            // information_modifier
            if (0 === strpos($pathinfo, '/edit_information') && preg_match('#^/edit_information/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'information_modifier')), array (  '_controller' => 'Novatech\\InformationBundle\\Controller\\InformationController::editInformationAction',));
            }

            // client_modifier
            if (0 === strpos($pathinfo, '/edit_client') && preg_match('#^/edit_client/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_modifier')), array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\ClientController::editClientAction',));
            }

            // fournisseur_modifier
            if (0 === strpos($pathinfo, '/edit_fournisseur') && preg_match('#^/edit_fournisseur/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_modifier')), array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\FournisseurController::editFournisseurAction',));
            }

            // stock_modifier
            if (0 === strpos($pathinfo, '/edit_stock') && preg_match('#^/edit_stock/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_modifier')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::editStockAction',));
            }

            // vente_modifier
            if (0 === strpos($pathinfo, '/edit_vente') && preg_match('#^/edit_vente/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vente_modifier')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::editVenteAction',));
            }

        }

        // achat_modifier
        if (0 === strpos($pathinfo, '/modifier_devis') && preg_match('#^/modifier_devis/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'achat_modifier')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::editAchatAction',));
        }

        // achat_facture_modifier
        if (0 === strpos($pathinfo, '/modifier_facture') && preg_match('#^/modifier_facture/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'achat_facture_modifier')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::editAchatFactureAction',));
        }

        if (0 === strpos($pathinfo, '/imprimer_')) {
            // imprimerachat_ajouter
            if (0 === strpos($pathinfo, '/imprimer_devis') && preg_match('#^/imprimer_devis/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imprimerachat_ajouter')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerDevisAction',));
            }

            // imprimer_facture
            if (0 === strpos($pathinfo, '/imprimer_facture') && preg_match('#^/imprimer_facture/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imprimer_facture')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerFactureAction',));
            }

            // imprimervente_ajouter
            if (0 === strpos($pathinfo, '/imprimer_vente') && preg_match('#^/imprimer_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imprimervente_ajouter')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerVenteAction',));
            }

        }

        // vente_imprimerrecu
        if (0 === strpos($pathinfo, '/imprimerrecu_vente') && preg_match('#^/imprimerrecu_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vente_imprimerrecu')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerRecuVenteAction',));
        }

        // facture_imprimer
        if (0 === strpos($pathinfo, '/facture_imprimer') && preg_match('#^/facture_imprimer/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_imprimer')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::factureImprimerAction',));
        }

        if (0 === strpos($pathinfo, '/tva')) {
            // tva_devis_ajouter
            if (0 === strpos($pathinfo, '/tva_devis') && preg_match('#^/tva_devis/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tva_devis_ajouter')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajouttvaFactureAction',));
            }

            // tva_vente_ajouter
            if (0 === strpos($pathinfo, '/tva_client') && preg_match('#^/tva_client/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tva_vente_ajouter')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajouttvaVenteAction',));
            }

            // tva_index
            if ('/tva' === $pathinfo) {
                $ret = array (  '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::indexAction',  '_route' => 'tva_index',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_tva_index;
                }

                return $ret;
            }
            not_tva_index:

        }

        // vente_valider
        if (0 === strpos($pathinfo, '/valider_vente') && preg_match('#^/valider_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vente_valider')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::validerVenteAction',));
        }

        // tva_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'tva_show')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::showAction',));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_tva_show;
            }

            return $ret;
        }
        not_tva_show:

        // tva_new
        if ('/newtva' === $pathinfo) {
            $ret = array (  '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::newAction',  '_route' => 'tva_new',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_tva_new;
            }

            return $ret;
        }
        not_tva_new:

        // tva_edit
        if (preg_match('#^/(?P<id>[^/]++)/edittva$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'tva_edit')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::editAction',));
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_tva_edit;
            }

            return $ret;
        }
        not_tva_edit:

        // tva_delete
        if (preg_match('#^/(?P<id>[^/]++)/deletetva$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'tva_delete')), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::deleteAction',));
            if (!in_array($requestMethod, array('DELETE'))) {
                $allow = array_merge($allow, array('DELETE'));
                goto not_tva_delete;
            }

            return $ret;
        }
        not_tva_delete:

        if (0 === strpos($pathinfo, '/liste_produit')) {
            // produit_type_liste
            if ('/liste_produit_type' === $pathinfo) {
                return array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::listeTypeProduitAction',  '_route' => 'produit_type_liste',);
            }

            // produit_liste
            if ('/liste_produit' === $pathinfo) {
                return array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\ProduitController::listeProduitAction',  '_route' => 'produit_liste',);
            }

        }

        elseif (0 === strpos($pathinfo, '/ajouter_produit')) {
            // produit_type_ajouter
            if ('/ajouter_produit_type' === $pathinfo) {
                return array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::addTypeProduitAction',  '_route' => 'produit_type_ajouter',);
            }

            // produit_ajouter
            if ('/ajouter_produit' === $pathinfo) {
                return array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\ProduitController::addProduitAction',  '_route' => 'produit_ajouter',);
            }

        }

        elseif (0 === strpos($pathinfo, '/edit_produit')) {
            // produit_type_modifier
            if (0 === strpos($pathinfo, '/edit_produit_type') && preg_match('#^/edit_produit_type/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_type_modifier')), array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::editTypeProduitAction',));
            }

            // produit_modifier
            if (preg_match('#^/edit_produit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_modifier')), array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\ProduitController::editProduitAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/delete_produit')) {
            // produit_type_supprimer
            if (0 === strpos($pathinfo, '/delete_produit_type') && preg_match('#^/delete_produit_type/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_type_supprimer')), array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::deleteTypeProduitAction',));
            }

            // produit_supprimer
            if (preg_match('#^/delete_produit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_supprimer')), array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\ProduitController::deleteProduitAction',));
            }

        }

        // produit_type_detail
        if (0 === strpos($pathinfo, '/detail_produit_type') && preg_match('#^/detail_produit_type/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_type_detail')), array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::detailTypeProduitAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
