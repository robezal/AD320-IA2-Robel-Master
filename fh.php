<?php

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
