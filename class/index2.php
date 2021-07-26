<?php
    include("controller/User.php");
    include("controller/Boss.php");

    use Controller\User\Attack;


    $a = new Controller\Boss\Attack;
    $a->heavy();

    $b = new Controller\User\Attack;
    $b->heavy();

    $c = new Attack;
    $c->heavy();
