<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Adsazad\BlokerBundle;

/**
 * Description of BlokerBundle
 *
 * @author arashdeep
 */
class BlokerBundle extends \Symfony\Component\HttpKernel\Bundle {

    public function getContainerExtension() {
        return new \Adsazad\BlokerBundle\DependencyInjection\Extension();
    }

}
