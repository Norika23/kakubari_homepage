<?php

class Sale extends Db_object{

    protected static $db_table = "sales";
    protected static $db_table_fields = array('name', 'price', 'address', 'land_area', 'building_area', 'per_tsubo', 
    'layout', 'station', 'on_foot', 'thumb_image' , 'image', 'built', 'status');
    public $id;
    public $name;
    public $price;
    public $address;
    public $land_area;
    public $building_area;
    public $per_tsubo;
    public $layout;
    public $station;
    public $on_foot;
    public $image;
    public $thumb_image;
    public $built;
    public $status;
    public $upload_directory = "images";
    public $image_placeholder = "http://placehold.it/400x400&text=image";
    public $db_table_name = "sales";

} // End of Class
































?>