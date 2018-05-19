<?php
/**
 * Created by PhpStorm.
 * User: daijiale
 * Date: 2018/5/20
 * Time: 上午12:10
 */


namespace Daijiale\reEncrytionApi;

class reEncrytion
{

//Todo:生成原始 RSA私钥文件 openssl genrsa -out rsa_private_key.pem 1024
//Todo:将原始 RSA私钥转换为 pkcs8格式 openssl pkcs8 -topk8 -inform PEM -in rsa_private_key.pem -outform PEM -nocrypt -out private_key.pem
//Todo:生成RSA公钥 openssl rsa -in rsa_private_key.pem -pubout -out rsa_public_key.pem

//从上面看出通过私钥能生成对应的公钥

    public $strRSAPubKey = ''; //设置为public,公钥发放给Android\iOS\前端等
    private $strRSAPriKey = '';//设置为private,我们将私钥private_key.pem用在服务器端

    /**
     * 私钥签名加密方法
     */
    public function signEncryption($objFile)
    {
        //Todo:RSA私钥参与的签名加密算法
    }

    /**
     * 公钥验签解密方法
     */
    public function signDecryption($objFile)
    {
        //Todo:RSA公钥参与的签名解密算法
    }


    /**base64加密方法
     * @param $objFile
     * @return string
     */
    public static function base64Encryption($objFile)
    {
        return base64_encode($objFile);
    }


    /**base64解密方法
     * @param $objFile
     * @return string
     */

    public static function base64Decryption($objFile)
    {
        return base64_decode($objFile);
    }

}