<?php
namespace app\index\controller;

class Wechatquizzes extends Home
{
    public function __construct(){
        parent::__construct();
        error_reporting(E_ALL & ~E_NOTICE);
    }
    public function index()
    {
        return view();
    }
    public function share()
    {
        return view();
    }
    public function indexv2()
    {
        return view();
    }
    public function sharev2()
    {
        return view();
    }
    public function newshare()
    {
        return view();
    }
}
