<?php

class Reform extends Db_object{

    protected static $db_table = "reform";
    protected static $db_table_fields = array('name', 'price', 'building_type', 'description', 'manufacturer', 'product_type', 'thumb_image' , 'image', 'status');
    public $id;
    public $name;
    public $price;
    public $building_type;
    public $description;
    public $manufacturer;
    public $product_type;
    public $image;
    public $thumb_image;
    public $status;
    public $upload_directory = "images";
    public $image_placeholder = "http://placehold.it/400x400&text=image";
    public $db_table_name = "reform";


} // End of Class
































?>