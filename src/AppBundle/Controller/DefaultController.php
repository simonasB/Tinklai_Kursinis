<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class DefaultController extends Controller
{
    /**
     * Render Gentelella page.
     *
     * @Route("gentelella/{page}", name="app_gentelella", defaults={"page": "index"})
     *
     * @param Request $request
     * @param string  $page
     *
     * @return Response
     */
    public function gentelellaAction(Request $request, $page)
    {
        $templateName = basename(sprintf('gentelella/%s.html.twig', $page));
        if ($templateName !== sprintf('%s.html.twig', $page)) {
            throw $this->createNotFoundException('Page not found');
        }
        if (!$this->get('templating')->exists(sprintf('gentelella/%s', $templateName))) {
            throw $this->createNotFoundException(
                sprintf(
                    'Page "%s" not found',
                    $page
                )
            );
        }
        return $this->render(sprintf('gentelella/%s.html.twig', $page));
    }
    /**
     * @Route("/", name="app_homepage")
     * @param Request $request Request
     * @return Response
     */
    public function homepageAction(Request $request)
    {
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Home", $this->get("router")->generate("app_homepage"));
        return $this->render('base/pages/dashboard.html.twig', []);
    }
    /**
     * @Route("/base", name="app_base")
     * @param Request $request Request
     * @return Response
     */
    public function calendarAction(Request $request)
    {
        return $this->render('base/pages/index.html.twig', []);
    }
    /**
     * @Route("/contacts", name="app_contacts")
     * @param Request $request Request
     * @return Response
     */
    public function contactsAction(Request $request)
    {
        return $this->render('base/pages/contacts.html.twig', []);
    }
}
