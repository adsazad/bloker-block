<?php

namespace Adsazad\BlokerBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestController
 *
 * @author arashdeep
 */
class TestTestController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController {

    /**
     * @Route("/thisistest", name="this_test")
     */
    public function test() {
        return 'tete';
        die;
    }

}
