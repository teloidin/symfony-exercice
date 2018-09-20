<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListController extends Controller
{

    /**
     * @Route("/todolist", name="to_do_list")
     */
    public function displayToDoList() {

        return $this->render('to-do-list.html.twig');
    }

}
