<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 1/20/2019
 * Time: 5:44 PM
 */



$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$state = $_GET['state'];


echo "<ul>
        <li>Name: ".$name."</li>
        <li>Email: ".$email."</li>
        <li>Phone: ".$phone."</li>
        <li>State: ".$state."</li>
        
    </ul>";