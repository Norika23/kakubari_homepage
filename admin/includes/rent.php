<?php

class Rent extends Db_object{

    protected static $db_table = "rents";
    protected static $db_table_fields = array('rent_house_name', 'house_type', 'rent_house_price', 'deposit', 'rent_house_layout', 'floor', 
    'rent_house_local_station', 'rent_house_address', 'rent_house_built', 'rent_house_area', 'thumb_image' , 'image', 'contract', 'status');
    public $id;
    public $rent_house_name;
    public $house_type;
    public $rent_house_price;
    public $deposit;
    public $rent_house_layout;
    public $floor;
    public $rent_house_local_station;
    public $rent_house_address;
    public $rent_house_built;
    public $rent_house_area;
    public $thumb_image;
    public $image;
    public $contract;
    public $status;
    public $upload_directory = "images";
    public $image_placeholder = "http://placehold.it/400x400&text=image";
    public $db_table_name = "rents";
    

} // End of Class
































?>