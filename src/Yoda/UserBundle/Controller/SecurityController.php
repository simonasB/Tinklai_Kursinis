<?php

/**
 * Created by PhpStorm.
 * User: simonas_b
 * Date: 9/15/2016
 * Time: 3:41 PM
 */

namespace Yoda\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login_form")
     * @Template
     */
    public function loginAction(Request $request) {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
        );
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction() {

    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction() {

    }
}