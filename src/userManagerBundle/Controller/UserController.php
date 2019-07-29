<?php

namespace userManagerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use userManagerBundle\Entity\User;
use userManagerBundle\Form\UserType;

class UserController extends Controller
{


    public function userAction()
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $repo  = $this->getDoctrine()->getRepository(User::class);

        $users = $repo->findAll();

        return $this->render('userManagerBundle:User:listeUser.html.twig', [
            'users' => $users
        ]);
    }


    public function createUserAction(Request $request){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $manager = $this->getDoctrine()->getManager();
        $passwordEncoder = $this->get('security.password_encoder');
        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $hash = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $user->setStatus('1');

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('user_liste');
        }

        return $this->render(
            'userManagerBundle:User:register.html.twig', array(
                'form' => $form->createView(),
            )

        );
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(Request $request){


        /** @var $session Session */
        $session = $request->getSession();

        $authErrorKey = Security::AUTHENTICATION_ERROR;
        $lastUsernameKey = Security::LAST_USERNAME;

        // get the error if any (works with forward and redirect -- see below)
        if ($request->attributes->has($authErrorKey)) {
            $error = $request->attributes->get($authErrorKey);
        } elseif (null !== $session && $session->has($authErrorKey)) {
            $error = $session->get($authErrorKey);
            $session->remove($authErrorKey);
        } else {
            $error = null;
        }

        if (!$error instanceof AuthenticationException) {
            $error = null; // The value does not come from the security component.
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);

        $csrfToken = $this->has('security.csrf.token_manager')
            ? $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue()
            : null;


        return $this->render('userManagerBundle:User:login.html.twig',array(
            'last_username' => $lastUsername,
            'error' => $error,
            'csrf_token' => $csrfToken,));
    }

    /**
     * deconnexion
     */
    public function logoutAction(){}

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ProfilAction(Request $request, User $user)
    {

        return $this->render('userManagerBundle:User:profil.html.twig', [
            'user'=>$user,

        ]);

    }

    /**
     * Active User
     */
    public function ActiveAction(Request $request){

        $user = new User();
        $em = $this->getDoctrine()->getManager();
        $request = Request::createFromGlobals();

        $id = $request->query->get('id');

        $user = $em->getRepository(User::class)->find($id);

        $user->setStatus(1);

        $em->persist($user);
        $em->flush();


        return $this->redirectToRoute('user_liste');
    }

    /*
     * Desactive User
     */
    public function DesactiveAction(Request $request){

        $user = new User();
        $em = $this->getDoctrine()->getManager();
        $request = Request::createFromGlobals();

        $id = $request->query->get('id');

        $user = $em->getRepository(User::class)->find($id);


            $user->setStatus(0);
            $em->persist($user);
            $em->flush();

        return $this->redirectToRoute('user_liste');
    }


}
