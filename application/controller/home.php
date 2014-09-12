<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        

        $voyage_model = $this->loadModel('VoyageModel');
        $voyages = $voyage_model->getAllVoyages();
        // debug message to show where you are, just for the demo
        // echo 'Message from Controller: You are in the controller home, using the method index()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'application/views/_templates/header.php';
        require 'application/views/home/index.php';
        require 'application/views/_templates/footer.php';


    }

    public function signIn()
    {
        require 'application/views/home/signin.php';
    }

    public function create()
    {
        $voyage_model = $this->loadModel('VoyageModel');
        $voyages = $voyage_model->getAllVoyages();

        require 'application/views/_templates/header.php';
        require 'application/views/home/create.php';
        require 'application/views/_templates/footer.php';
    }
    public function addvoyage()
    {
        echo 'Message from Controller: You are in the Controller: Songs, using the method addSong().';
      
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_add_voyage"])) {
            // load model, perform an action on the model
            $voyage_model = $this->loadModel('VoyageModel');
            $voyage_model->addVoyage($_POST["name"], $_POST["where"], $_POST["who"],  $_POST["when"],  $_POST["how"],  $_POST["event_type"],  $_POST["leader"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'home/');
    }
     /**
     * ACTION: deleteSong
     * This method handles what happens when you move to http://yourproject/songs/deletesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a song" button on songs/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $song_id Id of the to-delete song
     */
    public function deleteVoyage($voyage_id)
    {
       

        // if we have an id of a song that should be deleted
        if (isset($voyage_id)) {
            // load model, perform an action on the model
            $voyage_model = $this->loadModel('VoyageModel');
            $voyage_model->deleteVoyage($voyage_id);
        }

        // where to go after song has been deleted
        header('location: ' . URL . 'home/');
    }

    public function modify()
    {
        require 'application/views/_templates/header.php';
        require 'application/views/home/modify.php';
        require 'application/views/_templates/footer.php';
    }
    public function db()
    {
        require 'application/views/_templates/header.php';
        require 'application/views/home/db.php';
        require 'application/views/_templates/footer.php';
    }
    public function profile()
    {
        require 'application/views/_templates/header.php';
        require 'application/views/home/profile.php';
        require 'application/views/_templates/footer.php';
    }

    
    public function view($voyage_id)
    {
        if (isset($voyage_id)) {
            // load model, perform an action on the model
            $voyage_model = $this->loadModel('VoyageModel');
            $voyages = $voyage_model->getViewVoyage($voyage_id);
        }


        require 'application/views/_templates/header.php';
        require 'application/views/home/view.php';
        require 'application/views/_templates/footer.php';
    }

    public function about()
    {
        require 'application/views/_templates/header.php';
        require 'application/views/home/about.php';
        require 'application/views/_templates/footer.php';
    }

    public function contact()
    {
        require 'application/views/_templates/header.php';
        require 'application/views/home/contact.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    public function exampleOne()
    {
        // debug message to show where you are, just for the demo
        echo 'Message from Controller: You are in the controller home, using the method exampleOne()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'application/views/_templates/header.php';
        require 'application/views/home/example_one.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * PAGE: exampletwo
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    public function exampleTwo()
    {
        // debug message to show where you are, just for the demo
        echo 'Message from Controller: You are in the controller home, using the method exampleTwo()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'application/views/_templates/header.php';
        require 'application/views/home/example_two.php';
        require 'application/views/_templates/footer.php';
    }

}
