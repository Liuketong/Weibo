<?php
namespace Home\Model;

use Think\Model;

class UserModel extends Model{

    //批量验证
//    protected $patchValidate = true;

    //用户表自动验证
    protected $_validate = array(
        //-1,'账号长度不合法!'
        array('username','2,20','-1',self::EXISTS_VALIDATE,'length'),

        //-2,'密码长度不合法!'
        array('password','6,30','-2',self::EXISTS_VALIDATE,'length'),

        //-3,'密码和密码确认不一致!'
        array('repassword','password','-3',self::EXISTS_VALIDATE,'confirm'),

        //-4,'邮箱格式不正确!'
        array('email','email','-4',self::EXISTS_VALIDATE),

        //-5,'账号被占用!'
        array('username', '', '-5', self::EXISTS_VALIDATE,'unique',self::MODEL_INSERT),

        //-6,'邮箱被占用!'
        array('email', '', '-6', self::EXISTS_VALIDATE,'unique',self::MODEL_INSERT),
    );

    //用户表自动完成
    protected $_auto = array(
        array('password','sha1',self::MODEL_BOTH,'function'),
        array('create','time',self::MODEL_INSERT,'function'),
    );

    //注册一条用户
    public function register($username,$password,$repassword,$email){
        $data = array(
            'username'=>$username,
            'password'=>$password,
            'repassword'=>$repassword,
            'email'=>$email,
        );

        if($this->create($data)){
            $uid = $this->add();
            return $uid ? $uid : 0;
        }else{
            return $this->getError();
        }
    }
}