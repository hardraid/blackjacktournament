<?php

namespace BlackJack\Bundle\TournamentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlackJackTournamentBundle:Homepage:index.html.twig');
    }
}
