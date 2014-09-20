<?php

class VoyageModel
{


    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

        /**
     * Get all songs from database
     */
    public function getAllVoyages()
    {
        $sql = "select id, name, who, `where`, `when`, how from voyage";

        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // libs/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change libs/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }
    public function getUsersVoyages($user_id)
    {
        $sql = "select * from voyage_manifest left join voyage on voyage_id = voyage.id where user_id = " . $user_id;
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // libs/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change libs/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }
    public function getTravelTypes()
    {
        $sql = "select * from travel_type";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // libs/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change libs/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        $results = $query->fetchAll();
        $trips =  array();
        $i = 0;
        foreach($results as $a) {
            $trips[$i]["travel_key"] =$a->travel_key;
            $trips[$i++]["travel_type"] =$a->travel_type;
        }
        return $trips;
    }

    
    public function getVoyagesTravelers($voyage_id)
    {
        $sql = "select * from voyage_manifest left join users on voyage_manifest.user_id = users.user_id where voyage_id = " . $voyage_id;
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // libs/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change libs/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }
    public function getRecentVoyageFromMe($user_id)
    {
        $sql = "select id from voyage  where created_by = $user_id order by id desc limit 1 " ;
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // libs/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change libs/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...

        return $query->fetchAll();
    }



    //dtails of voyage
    public function getViewVoyage($voy_id)
    {
        $sql = "select * from voyage where id = ". $voy_id;
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // libs/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change libs/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        
        //returning only a single voyage
        $single_view = $query->fetchAll();
        return $single_view[0];
    }


    /**
     * Add a song to database
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addVoyage($name, $where, $who, $when, $how, $event_type, $leader, $created_by)
    {
        // clean the input from javascript code for example
        $name = strip_tags($name);
        $where = strip_tags($where);
        $who = strip_tags($who);
        $when = strip_tags($when);
        $how = strip_tags($how);
        $event_type = strip_tags($event_type);
        $leader = strip_tags($leader);
        $leader = 1;


        $sql = "INSERT INTO voyage (`name`,`where`, who, `when`, how, event_type, leader, created_by) VALUES ('$name','$where', '$who', '$when', '$how', '$event_type', '$leader', '$created_by')";
       $con=mysqli_connect("localhost","root","root", "voyagur");
  

        // Check connection
        if (mysqli_connect_errno()) {
            echo "  Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $result = mysqli_query($con,$sql);
    }

    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */
    public function deleteVoyage($voyage_id)
    {
        $sql = "DELETE FROM voyage WHERE id = $voyage_id";
         $con=mysqli_connect("localhost","root","root", "voyagur");
        
        // Check connection
        if (mysqli_connect_errno()) {
            echo "  Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $result = mysqli_query($con,$sql);
    }
}
