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
        $allow = [];
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
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
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
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/liste_')) {
                // compte_liste
                if ('/liste_compte' === $pathinfo) {
                    return array (  '_controller' => 'Banque\\CompteBundle\\Controller\\CompteController::listeCompteAction',  '_route' => 'compte_liste',);
                }

                // client_liste
                if ('/liste_client' === $pathinfo) {
                    return array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\ClientController::listeClientAction',  '_route' => 'client_liste',);
                }

                // information_liste
                if ('/liste_information' === $pathinfo) {
                    return array (  '_controller' => 'Novatech\\InformationBundle\\Controller\\InformationController::listeInformationAction',  '_route' => 'information_liste',);
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

                if (0 === strpos($pathinfo, '/liste_vente')) {
                    // vente_liste
                    if ('/liste_vente' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::listeVenteAction',  '_route' => 'vente_liste',);
                    }

                    // vente_liste_total
                    if ('/liste_vente_total' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::listeVenteTotalAction',  '_route' => 'vente_liste_total',);
                    }

                    // vente_liste_partiel
                    if ('/liste_vente_partiel' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::listeVentePartielAction',  '_route' => 'vente_liste_partiel',);
                    }

                }

            }

            // user_liste
            if ('/listeUser' === $pathinfo) {
                return array (  '_controller' => 'userManagerBundle\\Controller\\UserController::userAction',  '_route' => 'user_liste',);
            }

            // user_logout
            if ('/logout' === $pathinfo) {
                return array (  '_controller' => 'userManagerBundle\\Controller\\UserController::logoutAction',  '_route' => 'user_logout',);
            }

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/ajouter')) {
                if (0 === strpos($pathinfo, '/ajouter_')) {
                    // compte_ajouter
                    if ('/ajouter_compte' === $pathinfo) {
                        return array (  '_controller' => 'Banque\\CompteBundle\\Controller\\CompteController::addCompteAction',  '_route' => 'compte_ajouter',);
                    }

                    // client_ajouter
                    if ('/ajouter_client' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\ClientController::addClientAction',  '_route' => 'client_ajouter',);
                    }

                    // information_ajouter
                    if ('/ajouter_information' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\InformationBundle\\Controller\\InformationController::addInformationAction',  '_route' => 'information_ajouter',);
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
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'produitachat_ajouter']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::addProduitAchatAction',));
                }

                // produitvente_ajouter
                if (0 === strpos($pathinfo, '/ajouterproduit_vente') && preg_match('#^/ajouterproduit_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'produitvente_ajouter']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::addProduitVenteAction',));
                }

                // clientfacture_ajouter
                if (0 === strpos($pathinfo, '/ajouterclient_devis') && preg_match('#^/ajouterclient_devis/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'clientfacture_ajouter']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajoutClientFactureAction',));
                }

                // clientvente_ajouter
                if (0 === strpos($pathinfo, '/ajouterclient_vente') && preg_match('#^/ajouterclient_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'clientvente_ajouter']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajoutClientVenteAction',));
                }

            }

            // user_active
            if ('/active' === $pathinfo) {
                return array (  '_controller' => 'userManagerBundle\\Controller\\UserController::ActiveAction',  '_route' => 'user_active',);
            }

            // tableau_bord
            if ('/accueil' === $pathinfo) {
                return array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'tableau_bord',);
            }

            // vente_annuler
            if (0 === strpos($pathinfo, '/annuler_vente') && preg_match('#^/annuler_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'vente_annuler']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::annulerVenteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/edit_')) {
            // compte_modifier
            if (0 === strpos($pathinfo, '/edit_compte') && preg_match('#^/edit_compte/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'compte_modifier']), array (  '_controller' => 'Banque\\CompteBundle\\Controller\\CompteController::editCompteAction',));
            }

            // client_modifier
            if (0 === strpos($pathinfo, '/edit_client') && preg_match('#^/edit_client/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'client_modifier']), array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\ClientController::editClientAction',));
            }

            // information_modifier
            if (0 === strpos($pathinfo, '/edit_information') && preg_match('#^/edit_information/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'information_modifier']), array (  '_controller' => 'Novatech\\InformationBundle\\Controller\\InformationController::editInformationAction',));
            }

            // fournisseur_modifier
            if (0 === strpos($pathinfo, '/edit_fournisseur') && preg_match('#^/edit_fournisseur/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'fournisseur_modifier']), array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\FournisseurController::editFournisseurAction',));
            }

            // stock_modifier
            if (0 === strpos($pathinfo, '/edit_stock') && preg_match('#^/edit_stock/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'stock_modifier']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::editStockAction',));
            }

            // vente_modifier
            if (0 === strpos($pathinfo, '/edit_vente') && preg_match('#^/edit_vente/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'vente_modifier']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::editVenteAction',));
            }

        }

        // compte_activer_desactiver
        if (0 === strpos($pathinfo, '/etat_compte') && preg_match('#^/etat_compte/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'compte_activer_desactiver']), array (  '_controller' => 'Banque\\CompteBundle\\Controller\\CompteController::etatCompteAction',));
        }

        if (0 === strpos($pathinfo, '/de')) {
            if (0 === strpos($pathinfo, '/delete')) {
                // compte_supprimer
                if (0 === strpos($pathinfo, '/delete_compte') && preg_match('#^/delete_compte/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'compte_supprimer']), array (  '_controller' => 'Banque\\CompteBundle\\Controller\\CompteController::deleteCompteAction',));
                }

                // user_delete
                if (preg_match('#^/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_delete']), array (  '_controller' => 'userManagerBundle\\Controller\\UserController::deleteAction',));
                }

                if (0 === strpos($pathinfo, '/delete_')) {
                    // information_supprimer
                    if (0 === strpos($pathinfo, '/delete_information') && preg_match('#^/delete_information/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'information_supprimer']), array (  '_controller' => 'Novatech\\InformationBundle\\Controller\\InformationController::deleteInformationAction',));
                    }

                    // client_supprimer
                    if (0 === strpos($pathinfo, '/delete_client') && preg_match('#^/delete_client/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'client_supprimer']), array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\ClientController::deleteClientAction',));
                    }

                    // fournisseur_supprimer
                    if (0 === strpos($pathinfo, '/delete_fournisseur') && preg_match('#^/delete_fournisseur/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'fournisseur_supprimer']), array (  '_controller' => 'Novatech\\ClientBundle\\Controller\\FournisseurController::deleteFournisseurAction',));
                    }

                    // stock_supprimer
                    if (0 === strpos($pathinfo, '/delete_stock') && preg_match('#^/delete_stock/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'stock_supprimer']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::deleteStockAction',));
                    }

                    // vente_supprimer
                    if (0 === strpos($pathinfo, '/delete_vente') && preg_match('#^/delete_vente/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'vente_supprimer']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::deleteVenteAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/detail_')) {
                // compte_detail
                if (0 === strpos($pathinfo, '/detail_compte') && preg_match('#^/detail_compte/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'compte_detail']), array (  '_controller' => 'Banque\\CompteBundle\\Controller\\CompteController::detailCompteAction',));
                }

                // stock_detail
                if (0 === strpos($pathinfo, '/detail_stock') && preg_match('#^/detail_stock/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'stock_detail']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::deltailStockAction',));
                }

                // vente_detail
                if (0 === strpos($pathinfo, '/detail_vente') && preg_match('#^/detail_vente/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'vente_detail']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::deltailVenteAction',));
                }

            }

            // user_desactive
            if ('/desactive' === $pathinfo) {
                return array (  '_controller' => 'userManagerBundle\\Controller\\UserController::DesactiveAction',  '_route' => 'user_desactive',);
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

        // user_profil
        if ('/profil' === $pathinfo) {
            return array (  '_controller' => 'userManagerBundle\\Controller\\UserController::ProfilAction',  '_route' => 'user_profil',);
        }

        if (0 === strpos($pathinfo, '/r')) {
            if (0 === strpos($pathinfo, '/re')) {
                // user_register
                if ('/register' === $pathinfo) {
                    return array (  '_controller' => 'userManagerBundle\\Controller\\UserController::createUserAction',  '_route' => 'user_register',);
                }

                // user_reset
                if ('/reset' === $pathinfo) {
                    return array (  '_controller' => 'userManagerBundle\\Controller\\UserController::ResetpasswordAction',  '_route' => 'user_reset',);
                }

                // produitachat_retirer
                if (0 === strpos($pathinfo, '/retirerproduit_devis') && preg_match('#^/retirerproduit_devis/(?P<idAchat>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'produitachat_retirer']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::removeProduitAchatAction',));
                }

                // produitvente_retirer
                if (0 === strpos($pathinfo, '/retirerproduit_vente') && preg_match('#^/retirerproduit_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'produitvente_retirer']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::removeProduitVenteAction',));
                }

                // remise_devis_ajouter
                if (0 === strpos($pathinfo, '/remise_devis') && preg_match('#^/remise_devis/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'remise_devis_ajouter']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajoutremiseFactureAction',));
                }

                // remise_vente_ajouter
                if (0 === strpos($pathinfo, '/remise_vente') && preg_match('#^/remise_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'remise_vente_ajouter']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajoutremiseVenteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/rapport_vente')) {
                // vente_rapport_all
                if ('/rapport_vente' === $pathinfo) {
                    return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::rapportVenteAllAction',  '_route' => 'vente_rapport_all',);
                }

                if (0 === strpos($pathinfo, '/rapport_vente_')) {
                    // vente_rapport_allproduit
                    if ('/rapport_vente_produit' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::rapportProduitVenteAllAction',  '_route' => 'vente_rapport_allproduit',);
                    }

                    // vente_rapport_byclientproduit
                    if ('/rapport_vente_client' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::rapportClientVenteAllAction',  '_route' => 'vente_rapport_byclientproduit',);
                    }

                    // vente_rapport_by_user
                    if ('/rapport_vente_byclient' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::rapportVenteByClientAction',  '_route' => 'vente_rapport_by_user',);
                    }

                    // vente_rapport_by_client
                    if ('/rapport_vente_byuser' === $pathinfo) {
                        return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::rapportVenteByUserAction',  '_route' => 'vente_rapport_by_client',);
                    }

                }

                // ventenonvalider_rapport_byclientproduit
                if ('/rapport_ventenonvalider_client' === $pathinfo) {
                    return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::rapportClientVenteNonValiderAllAction',  '_route' => 'ventenonvalider_rapport_byclientproduit',);
                }

                // vente_rapport_by_user_byproduit
                if ('/rapport_venteproduit_byuser' === $pathinfo) {
                    return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::rapportVenteProduitByUserAction',  '_route' => 'vente_rapport_by_user_byproduit',);
                }

            }

            // chiffreAffaire_rapport_all
            if ('/rapport_chiffre' === $pathinfo) {
                return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::rapportChiffreAffaireAction',  '_route' => 'chiffreAffaire_rapport_all',);
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

        if (0 === strpos($pathinfo, '/i')) {
            // stock_inventaire
            if ('/inventaire_stock' === $pathinfo) {
                return array (  '_controller' => 'Novatech\\StockBundle\\Controller\\StockController::inventaireStockAction',  '_route' => 'stock_inventaire',);
            }

            if (0 === strpos($pathinfo, '/imprimer_')) {
                // imprimerachat_ajouter
                if (0 === strpos($pathinfo, '/imprimer_devis') && preg_match('#^/imprimer_devis/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'imprimerachat_ajouter']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerDevisAction',));
                }

                // imprimer_facture
                if (0 === strpos($pathinfo, '/imprimer_facture') && preg_match('#^/imprimer_facture/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'imprimer_facture']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerFactureAction',));
                }

                // imprimervente_ajouter
                if (0 === strpos($pathinfo, '/imprimer_vente') && preg_match('#^/imprimer_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'imprimervente_ajouter']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerVenteAction',));
                }

                // imprimer_versement
                if (0 === strpos($pathinfo, '/imprimer_versement') && preg_match('#^/imprimer_versement/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'imprimer_versement']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerVersementAction',));
                }

            }

            // vente_imprimerrecu
            if (0 === strpos($pathinfo, '/imprimerrecu_vente') && preg_match('#^/imprimerrecu_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'vente_imprimerrecu']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::imprimerRecuVenteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/modifier')) {
            // achat_modifier
            if (0 === strpos($pathinfo, '/modifier_devis') && preg_match('#^/modifier_devis/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'achat_modifier']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::editAchatAction',));
            }

            // achat_facture_modifier
            if (0 === strpos($pathinfo, '/modifier_facture') && preg_match('#^/modifier_facture/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'achat_facture_modifier']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::editAchatFactureAction',));
            }

            // produitvente_modifier_prix
            if (0 === strpos($pathinfo, '/modifierprix_vente') && preg_match('#^/modifierprix_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'produitvente_modifier_prix']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::midifierPrixVenteAction',));
            }

            // produitachat_modifier_prix
            if (0 === strpos($pathinfo, '/modifierprix_achat') && preg_match('#^/modifierprix_achat/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'produitachat_modifier_prix']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::midifierPrixAchatAction',));
            }

        }

        // modepaiement_vente_ajouter
        if (0 === strpos($pathinfo, '/mode_paiement') && preg_match('#^/mode_paiement/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'modepaiement_vente_ajouter']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::modepaiementVenteAction',));
        }

        // facture_imprimer
        if (0 === strpos($pathinfo, '/facture_imprimer') && preg_match('#^/facture_imprimer/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'facture_imprimer']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::factureImprimerAction',));
        }

        if (0 === strpos($pathinfo, '/tva')) {
            // tva_devis_ajouter
            if (0 === strpos($pathinfo, '/tva_devis') && preg_match('#^/tva_devis/(?P<idFacture>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'tva_devis_ajouter']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajouttvaFactureAction',));
            }

            // tva_vente_ajouter
            if (0 === strpos($pathinfo, '/tva_client') && preg_match('#^/tva_client/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'tva_vente_ajouter']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::ajouttvaVenteAction',));
            }

            // tva_index
            if ('/tva' === $pathinfo) {
                $ret = array (  '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::indexAction',  '_route' => 'tva_index',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_tva_index;
                }

                return $ret;
            }
            not_tva_index:

        }

        // vente_valider
        if (0 === strpos($pathinfo, '/valider_vente') && preg_match('#^/valider_vente/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'vente_valider']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::validerVenteAction',));
        }

        // versement_vente_ajouter
        if (0 === strpos($pathinfo, '/versement') && preg_match('#^/versement/(?P<idVente>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'versement_vente_ajouter']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\AchatController::versementVenteAction',));
        }

        // tva_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'tva_show']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::showAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_tva_show;
            }

            return $ret;
        }
        not_tva_show:

        // tva_new
        if ('/newtva' === $pathinfo) {
            $ret = array (  '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::newAction',  '_route' => 'tva_new',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_tva_new;
            }

            return $ret;
        }
        not_tva_new:

        // tva_edit
        if (preg_match('#^/(?P<id>[^/]++)/edittva$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'tva_edit']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::editAction',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_tva_edit;
            }

            return $ret;
        }
        not_tva_edit:

        // tva_delete
        if (preg_match('#^/(?P<id>[^/]++)/deletetva$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'tva_delete']), array (  '_controller' => 'Novatech\\StockBundle\\Controller\\TvaController::deleteAction',));
            if (!in_array($requestMethod, ['DELETE'])) {
                $allow = array_merge($allow, ['DELETE']);
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
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_type_modifier']), array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::editTypeProduitAction',));
            }

            // produit_modifier
            if (preg_match('#^/edit_produit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_modifier']), array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\ProduitController::editProduitAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/delete_produit')) {
            // produit_type_supprimer
            if (0 === strpos($pathinfo, '/delete_produit_type') && preg_match('#^/delete_produit_type/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_type_supprimer']), array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::deleteTypeProduitAction',));
            }

            // produit_supprimer
            if (preg_match('#^/delete_produit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_supprimer']), array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\ProduitController::deleteProduitAction',));
            }

        }

        // produit_type_detail
        if (0 === strpos($pathinfo, '/detail_produit_type') && preg_match('#^/detail_produit_type/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_type_detail']), array (  '_controller' => 'Novatech\\ProduitBundle\\Controller\\TypeProduitController::detailTypeProduitAction',));
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

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
