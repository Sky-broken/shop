<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/28
 * Time: 17:55
 */
session_start();

//var_dump($_SESSION['cart']);
//$_SESSION['cart'][106]['count']++
if(isset($_GET['addId'])){
    $id = $_GET['addId'];
    //�Դ���id�ĵ���Ʒ����+1
    echo --$_SESSION['cart'][$id]['count'];
}

if(isset($_GET['reduId'])){
    //��ȡ��Ʒid�������ﳵ����Ӧ����Ʒ������1
    $id = $_GET['reduId'];
    if($_SESSION['cart'][$id]['count']>1){
        echo --$_SESSION['cart'][$id]['count'];
    }else
    {
        echo $_SESSION['cart'][$id]['count'];
    }

}