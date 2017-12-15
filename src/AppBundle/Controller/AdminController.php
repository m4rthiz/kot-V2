<?php


namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AdminController
 * @package AppBundle\Controller
 * @Route("admin/")
 */
class AdminController extends Controller
{
    /**
     * @Route("", name="admin_index")
     */
    public function adminIndexAction()
    {
        return $this->render(':admin:indexAdmin.html.twig');
    }


}