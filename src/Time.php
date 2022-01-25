<?php

namespace CDate;

class Time{

    //当前时间
    private $nowtime;

    public function __construct()
    {
        $this->nowtime=time();
    }

    /**
     * 获取当前时间
     * 获取中文时间格式为 2021年12月1日 12:11:23
     */
    public static function cnow(){
        return date("Y年 m月 d日 H:i:s",time());
    }
    /**
     * 获取页面展示时间
     */
    public function ptime(){

    }
    # todu 页面展示时间 
    # 例如 ：1分钟前发布，1个小时前发布，1个月前，
    /**
     * 0-1分钟 展示 *秒 例如：50秒
     * 1-30分钟 展示 *分钟 例如：10分钟
     * 30分钟-2小时 展示 *小时 例如：1.5小时
     * ....
     */

}