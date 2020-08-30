<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Adsazad\BlokerBundle\Services;

use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\RouteCollection;

/**
 * Description of RoutingLoader
 *
 * @author arashdeep
 */
class RoutingLoader extends Loader {

    public function load($resource, $type = null) {
        $collection = new RouteCollection();

        $resource = '@BlokerBundle/Resources/config/routing.yml';
        $type = 'yaml';

        $importedRoutes = $this->import($resource, $type);

        $collection->addCollection($importedRoutes);

        return $collection;
    }

    public function supports($resource, $type = null) {
        return 'advanced_extra' === $type; // ??
    }

}
