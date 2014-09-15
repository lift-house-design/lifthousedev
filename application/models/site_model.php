<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* For Client Configuration */
class Site_model extends App_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function get_pricing() {
    $query = $this-$db->query('SELECT p_ID,p_volume,p_price FROM pricing WHERE p_expiration_date > NOW()');
    $rows = $query->row_array();
    return $rows;
  }

}
