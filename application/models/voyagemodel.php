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
    //hold
    public function getViewVoyage($voy_id)
    {
        $sql = "select * from voyage where id = ". $voy_id;
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // libs/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change libs/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }


    /**
     * Add a song to database
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addvoyage($name, $where, $who, $when, $how, $event_type, $leader)
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


        $sql = "INSERT INTO voyage (`name`,`where`, who, `when`, how, event_type, leader) VALUES ('$name','$where', '$who', '$when', '$how', '$event_type', '$leader')";

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
