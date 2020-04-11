<?php

class Parking extends Db_object{

    protected static $db_table = "parking";
    protected static $db_table_fields = array('name', 'price', 'address', 'traffic', 'image', 'thumb_image', 'parking_status', 'status');
    public $id;
    public $name;
    public $price;
    public $address;
    public $traffic;
    public $image;
    public $thumb_image;
    public $parking_status;
    public $status;
    public $upload_directory = "images";
    public $image_placeholder = "http://placehold.it/400x400&text=image";
    public $db_table_name = "parking";

    
} // End of Class
































?>