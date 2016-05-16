<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/dossier')) {
            // dossiers
            if (rtrim($pathinfo, '/') === '/dossier') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dossiers');
                }

                return array (  '_controller' => 'FichierBundle\\Controller\\DossierController::dossierAction',  '_route' => 'dossiers',);
            }

            // createdir
            if ($pathinfo === '/dossier/create') {
                return array (  '_controller' => 'FichierBundle\\Controller\\DossierController::createAction',  '_route' => 'createdir',);
            }

            // fichiers
            if (preg_match('#^/dossier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichiers')), array (  '_controller' => 'FichierBundle\\Controller\\FichierController::listAction',));
            }

            // fichierremove
            if (0 === strpos($pathinfo, '/dossier/remove') && preg_match('#^/dossier/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichierremove')), array (  '_controller' => 'FichierBundle\\Controller\\FichierController::removeAction',));
            }

            // fichierupload
            if (preg_match('#^/dossier/(?P<id>[^/]++)/upload$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichierupload')), array (  '_controller' => 'FichierBundle\\Controller\\FichierController::uploadAction',));
            }

        }

        if (0 === strpos($pathinfo, '/annuaire')) {
            // annuaire
            if (preg_match('#^/annuaire/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuaire')), array (  '_controller' => 'AnnuaireBundle\\Controller\\DefaultController::listAction',));
            }

            // annuaireempty
            if (rtrim($pathinfo, '/') === '/annuaire') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'annuaireempty');
                }

                return array (  '_controller' => 'AnnuaireBundle\\Controller\\DefaultController::redirAction',  '_route' => 'annuaireempty',);
            }

            if (0 === strpos($pathinfo, '/annuaire/profile')) {
                // profiluser
                if (preg_match('#^/annuaire/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profiluser')), array (  '_controller' => 'AnnuaireBundle\\Controller\\DefaultController::profilAction',));
                }

                // payslip
                if (preg_match('#^/annuaire/profile/(?P<id>[^/]++)/payslip$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'payslip')), array (  '_controller' => 'AnnuaireBundle\\Controller\\DefaultController::payslipAction',));
                }

                // editprofil
                if (0 === strpos($pathinfo, '/annuaire/profile/edit') && preg_match('#^/annuaire/profile/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editprofil')), array (  '_controller' => 'AnnuaireBundle\\Controller\\ProfilController::editAction',));
                }

            }

        }

        // stats
        if (rtrim($pathinfo, '/') === '/stats') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'stats');
            }

            return array (  '_controller' => 'StatsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'stats',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user',);
            }

            // user_initaccounts_index
            if ($pathinfo === '/user/initAccounts') {
                return array (  '_controller' => 'UserBundle\\Controller\\InitAccountsController::indexAction',  '_route' => 'user_initaccounts_index',);
            }

            // user_initaccounts_changestatus
            if ($pathinfo === '/user/updateRoles') {
                return array (  '_controller' => 'UserBundle\\Controller\\InitAccountsController::changeStatusAction',  '_route' => 'user_initaccounts_changestatus',);
            }

        }

        if (0 === strpos($pathinfo, '/for')) {
            if (0 === strpos($pathinfo, '/forum')) {
                if (0 === strpos($pathinfo, '/forum/categorie')) {
                    // createcategorie
                    if ($pathinfo === '/forum/categorie/create') {
                        return array (  '_controller' => 'ForumBundle\\Controller\\CategorieController::createAction',  '_route' => 'createcategorie',);
                    }

                    // editcategorie
                    if (0 === strpos($pathinfo, '/forum/categorie/edit') && preg_match('#^/forum/categorie/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'editcategorie')), array (  '_controller' => 'ForumBundle\\Controller\\CategorieController::editAction',));
                    }

                    // removecategorie
                    if (0 === strpos($pathinfo, '/forum/categorie/remove') && preg_match('#^/forum/categorie/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'removecategorie')), array (  '_controller' => 'ForumBundle\\Controller\\CategorieController::removeAction',));
                    }

                    // detailcategorie
                    if (0 === strpos($pathinfo, '/forum/categorie/detail') && preg_match('#^/forum/categorie/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailcategorie')), array (  '_controller' => 'ForumBundle\\Controller\\CategorieController::detailAction',));
                    }

                    // listTopics
                    if (preg_match('#^/forum/categorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'listTopics')), array (  '_controller' => 'ForumBundle\\Controller\\CategorieController::listAction',));
                    }

                }

                // forum
                if (rtrim($pathinfo, '/') === '/forum') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'forum');
                    }

                    return array (  '_controller' => 'ForumBundle\\Controller\\DefaultController::indexAction',  '_route' => 'forum',);
                }

                if (0 === strpos($pathinfo, '/forum/topic')) {
                    // topicreply
                    if (preg_match('#^/forum/topic/(?P<id>[^/]++)/reply$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topicreply')), array (  '_controller' => 'ForumBundle\\Controller\\RepliesController::replyAction',));
                    }

                    if (0 === strpos($pathinfo, '/forum/topic/re')) {
                        // replyedit
                        if (0 === strpos($pathinfo, '/forum/topic/reply/edit') && preg_match('#^/forum/topic/reply/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'replyedit')), array (  '_controller' => 'ForumBundle\\Controller\\RepliesController::editAction',));
                        }

                        // replyremove
                        if (0 === strpos($pathinfo, '/forum/topic/remove') && preg_match('#^/forum/topic/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'replyremove')), array (  '_controller' => 'ForumBundle\\Controller\\RepliesController::removeAction',));
                        }

                    }

                    // topicdisplay
                    if (preg_match('#^/forum/topic/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topicdisplay')), array (  '_controller' => 'ForumBundle\\Controller\\TopicController::displayAction',));
                    }

                    // createtopic
                    if (0 === strpos($pathinfo, '/forum/topic/create') && preg_match('#^/forum/topic/create/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'createtopic')), array (  '_controller' => 'ForumBundle\\Controller\\TopicController::createAction',));
                    }

                    // edittopic
                    if (0 === strpos($pathinfo, '/forum/topic/edit') && preg_match('#^/forum/topic/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'edittopic')), array (  '_controller' => 'ForumBundle\\Controller\\TopicController::editAction',));
                    }

                    // removetopic
                    if (0 === strpos($pathinfo, '/forum/topic/remove') && preg_match('#^/forum/topic/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'removetopic')), array (  '_controller' => 'ForumBundle\\Controller\\TopicController::removeAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/formation')) {
                // formation
                if (rtrim($pathinfo, '/') === '/formation') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'formation');
                    }

                    return array (  '_controller' => 'FormationBundle\\Controller\\FormationController::listAction',  '_route' => 'formation',);
                }

                // formationcreate
                if ($pathinfo === '/formation/create') {
                    return array (  '_controller' => 'FormationBundle\\Controller\\FormationController::createAction',  '_route' => 'formationcreate',);
                }

                // formationdetails
                if (0 === strpos($pathinfo, '/formation/details') && preg_match('#^/formation/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationdetails')), array (  '_controller' => 'FormationBundle\\Controller\\FormationController::detailsAction',));
                }

                // formationremove
                if (0 === strpos($pathinfo, '/formation/remove') && preg_match('#^/formation/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationremove')), array (  '_controller' => 'FormationBundle\\Controller\\FormationController::removeAction',));
                }

                // formationlock
                if (0 === strpos($pathinfo, '/formation/lock') && preg_match('#^/formation/lock/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationlock')), array (  '_controller' => 'FormationBundle\\Controller\\FormationController::lockAction',));
                }

                // formationedit
                if (0 === strpos($pathinfo, '/formation/edit') && preg_match('#^/formation/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationedit')), array (  '_controller' => 'FormationBundle\\Controller\\FormationController::editAction',));
                }

                if (0 === strpos($pathinfo, '/formation/inscription')) {
                    // formationinscription
                    if (preg_match('#^/formation/inscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationinscription')), array (  '_controller' => 'FormationBundle\\Controller\\InscriptionController::inscriptionAction',));
                    }

                    // formationvalidateinscription
                    if (0 === strpos($pathinfo, '/formation/inscription/validate') && preg_match('#^/formation/inscription/validate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationvalidateinscription')), array (  '_controller' => 'FormationBundle\\Controller\\InscriptionController::validateAction',));
                    }

                    // formationremoveinscription
                    if (0 === strpos($pathinfo, '/formation/inscription/remove') && preg_match('#^/formation/inscription/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'formationremoveinscription')), array (  '_controller' => 'FormationBundle\\Controller\\InscriptionController::removeAction',));
                    }

                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
