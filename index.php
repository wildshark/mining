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
            BIT_COIN_CORE();
        break;

        case "bitcash";
            bit_coin_core();
        break;

        case"dogecoin";
            DOG_E_COIN();
        break;

        case"litecoin";
            LITE_COIN();
        break;

        case"dash";
            DASH();
        break;

        case"coinpot";
            COIN_POT_TOKENS();
        break;

        default:
            $data = ['status'=>'100', 'token'=> uniqid().'-F9'];
            header("Content-type: application/json; charset=utf-8");
            echo json_encode($data);
    }
}
?>
