<?php
namespace Opine;

use PHPUnit_Framework_TestCase;
use Opine\Config\Service as Config;
use Opine\Container\Service as Container;

class BundleTest extends PHPUnit_Framework_TestCase {

    public function setup () {
        $root = __DIR__ . '/../public';
        $config = new Config($root);
        $config->cacheSet();
        $container = Container::instance($root, $config, $root . '/../container.yml');
    }

    public function testSample () {
        $this->assertTrue(true);
    }
}