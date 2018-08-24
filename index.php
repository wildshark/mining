<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 24/08/2018
 * Time: 7:01 AM
 */

include_once "setup.inc";
include_once "miner/function.module";

if (isset($_REQUEST['coin'])){
    if (isset($_GET['coin'])){
        $coin = $_GET['coin'];
    }else{
        $coin = $_POST['coin'];
    }

    switch ($coin){

        case "bitcoin";
            BIT_COIN_CORE($ref);
        break;

        case "bitcash";
            bit_coin_core($ref);
        break;

        case"dogecoin";
            DOG_E_COIN($ref);
        break;

        case"litecoin";
            LITE_COIN($ref);
        break;

        case"dash";
            DASH($ref);
        break;

        case"coinpot";
            COIN_POT_TOKENS($ref);
        break;

        default:
            $data = ['status'=>'100', 'token'=> uniqid($ref).'-F9'];
            header("Content-type: application/json; charset=utf-8");
            echo json_encode($data);
    }
}

