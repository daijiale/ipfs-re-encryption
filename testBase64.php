<?php
/**
 * Created by PhpStorm.
 * User: daijiale
 * Date: 2018/5/19
 * Time: 下午11:50
 */

require('src/ipfs.php');
require('src/reEncrytion.php');

use Daijiale\IpfsPhpApi;
use Daijiale\reEncrytionApi;

$objIpfsApiModel = new IpfsPhpApi\IPFS();

$objOriginData = 'hello,ipfser,daijiale';
echo '加密前原始数据: '.$objOriginData;

$objFile = reEncrytionApi\reEncrytion::base64Encryption($objOriginData);

echo "\n";
echo '加密后数据为: '.$objFile;
echo "\n";

$strFingerHash = $objIpfsApiModel->add($objFile);

echo "\n";
echo '上传原始数据至IPFS完成,得到文件指纹为: '.$strFingerHash;
echo "\n";

$strDecypto = $objIpfsApiModel->cat($strFingerHash);

echo "\n";
echo '模拟一个外部请求,通过指纹请求刚才上传的原始数据,得到: '.$strDecypto;
echo "\n";

echo '解密数据,得到原始数据: '. reEncrytionApi\reEncrytion::base64Decryption($strDecypto);

