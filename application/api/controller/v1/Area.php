<?php

namespace app\api\controller\v1;

use app\api\model\AreaModel;
use think\Controller;
use think\Request;
use Util\Check;
use Util\Util;

class Area extends Controller
{
    public function getProvince(){
        $areaModel = new AreaModel();
        $list = $areaModel->getProvince();
        $list = array_column($list,'province');
        $data['province'] = $list;
        Util::printResult($GLOBALS['ERROR_SUCCESS'],$data);
    }

    public function getCity(){

        $params = Request::instance()->request();
        $province = Check::check($params['province'] ?? '');

        $areaModel = new AreaModel();
        $list = $areaModel->getCity($province);
        $list = array_column($list,'city');
        $data['city'] = $list;
        Util::printResult($GLOBALS['ERROR_SUCCESS'],$data);
    }

    public function getArea(){

        $params = Request::instance()->request();
        $city = Check::check($params['city'] ?? '');

        $areaModel = new AreaModel();
        $list = $areaModel->getArea($city);
        $list = array_column($list,'area');
        $data['area'] = $list;
        Util::printResult($GLOBALS['ERROR_SUCCESS'],$data);
    }



}