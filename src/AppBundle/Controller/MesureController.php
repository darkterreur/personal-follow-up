<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MesureController extends Controller
{
    public function addmesureAction(){
        return 'add mesure';
    }

    public function editMesureAction(){
        return 'edit mesure';
    }

    public function deleteMesureAction(){
        return 'delete mesure';
    }

    public function showAllmesureAction(){
        return 'show all mesures';
    }
}
