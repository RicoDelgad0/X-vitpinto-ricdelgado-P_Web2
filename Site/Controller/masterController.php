<?php
/**
 * Auteur : Vitor Silva & Ricardo Delgado
 * Date : 03.12.2020
 * Description : Controlleur principal
 */

 class MasterController {

     public function display() {

        $page = $_GET['action'] . "Display";

        $this->$page();
     }
 }
?>