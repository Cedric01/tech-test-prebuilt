<?php

namespace Skybet;

use Interop\Container\ContainerInterface;

abstract class BaseController {

    protected $container;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    /**
     * Render the template
     *
     * @param string $template The template file name
     * @param array  $data     The template data
     */
    protected function render($template, array $data = []) {
        $view = $this->container->get('view');
        $view->render($this->container->response, "$template.html", $data);
    }
}
