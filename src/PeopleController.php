<?php

namespace Skybet;

class PeopleController extends BaseController {

    /**
     * Display the list of people
     */
    public function display() {
        $data = $this->container->get('data');
        $people = $data->load('people');
        $this->render('people', ['people' => $people]);
    }

    /**
     * Update the list of people
     */
    public function update() {
    }
}
