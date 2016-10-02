<?php
/**
 * Created by PhpStorm.
 * User: Simonas
 * Date: 2016-10-02
 * Time: 18:37
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    protected $breadcrumbs;

    protected function getBreadcrumbs() {
        if($this->breadcrumbs === null) {
            $this->breadcrumbs = $this->get("white_october_breadcrumbs");
            $this->breadcrumbs->addRouteItem("Home", "app_homepage");
        }
        return $this->breadcrumbs;
    }
}