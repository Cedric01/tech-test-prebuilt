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
        $data = $this->load($people);
        
        if(isset($_Post['people']))
        {
            $data->attributes=$_Post['people'];
            if($data->save())
            $this->redirect(array('view'=>$data->firstname,lastname));
        }
        
        $this->render('update',array('data'=>$data,));
    }
    
    public function create(){
        $data=new $people;
        if(isset($_Post['people']))
        {
            $data->attributes=$_Post['people'];
            if($data->save())
            $data->password=crypt($data->password,'$6rounds=1212$16charactersaltt');
            $this->redirect(array('view'=>$data->firstname,lastname))
        }
        $this->render('update',array('data'=>$data,));
    }
}
