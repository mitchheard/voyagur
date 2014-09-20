<?php

/**
 * Class Dashboard
 * This is a demo controller that simply shows an area that is only visible for the logged in user
 * because of Auth::handleLogin(); in line 19.
 */
class On extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    function __construct()
    {
        parent::__construct();

        // this controller should only be visible/usable by logged in users, so we put login-check here
        Auth::handleLogin();
    }

    /**
     * This method controls what happens when you move to /dashboard/index in your app.
     */
    function index()
    {
        $this->view->render('on/index');
    }

    //show view of voyages you are on 
    public function view()
    {
        $user_id = Session::get('user_id'); 

        //gonna figure out what 

        if (isset($user_id)) {
            // load model, perform an action on the model
            $voyage_model = $this->loadModel('VoyageModel');
            $voyages = $voyage_model->getUsersVoyages($user_id);
        }


        require 'application/views/_templates/header.php';
        require 'application/views/on/view.php';
        require 'application/views/_templates/footer.php';
    }
    //show details of specific voyage you are looking at 
    public function main($voyage_id)
    {
        //check here if the user id has permission to see a specific voyage
        $user_id = Session::get('user_id'); 

        //gonna figure out what 

        if (isset($voyage_id)) {
            // load model, perform an action on the model
            $voyage_model = $this->loadModel('VoyageModel');
            $voyages = $voyage_model->getViewVoyage($voyage_id);
            $travelers = $voyage_model->getVoyagesTravelers($voyage_id);
            require 'application/views/_templates/header.php';
            require 'application/views/on/main.php';
            require 'application/views/_templates/footer.php';
        } else {
            require 'application/views/_templates/header.php';
            require 'application/views/on/view.php';
            require 'application/views/_templates/footer.php';
        }

    }


    public function create()
    {
        $voyage_model = $this->loadModel('VoyageModel');
        $voyages = $voyage_model->getAllVoyages();
        $travel_types = $voyage_model->getTravelTypes();
        $voyage_types = $voyage_model->getVoyageTypes();

        require 'application/views/_templates/header.php';
        require 'application/views/on/create.php';
        require 'application/views/_templates/footer.php';
    }
    public function addvoyage()
    {
        echo 'Message from Controller: You are in the Controller: Songs, using the method addSong().';
        $user_id = Session::get('user_id'); 
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_add_voyage"])) {
            // load model, perform an action on the model
            $voyage_model = $this->loadModel('VoyageModel');
            $voyage_model->addVoyage($_POST["name"], $_POST["where"], $_POST["who"],  $_POST["when"],  $_POST["how"],  $_POST["event_type"],  $_POST["leader"], $user_id);
        }

        $user_id = Session::get('user_id'); 
        $voyage_recent_add = $voyage_model->getRecentVoyageFromMe($user_id);

        // where to go after song has been added
        header('location: ' . URL . 'on/main/' . $voyage_recent_add[0]->id);
    }

}
