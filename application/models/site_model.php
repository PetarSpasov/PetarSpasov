<?php
class Site_model extends CI_Model
{
function insert_into_db()
{
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$message = $_POST['message'];
$this->db->query("INSERT INTO ci VALUES('$fullName','$email','$message')");
}
}
?>