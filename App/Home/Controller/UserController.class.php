<?php
namespace Home\Controller;

use Think\Controller;
use Home\Model\UserModel;

class UserController extends Controller{

    //注册行为返回给Ajax
    public function register(){
        if(IS_AJAX){
            $User = new UserModel();
            $uid = $User->register(I('post.username'),I('post.password'),I('post.repassword'),I('post.email'));
            echo $uid;
        }else{
            $this->error('非法访问！');
        }
    }
}