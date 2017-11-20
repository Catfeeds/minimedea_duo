<?php
return array(
	//'配置项'=>'配置值'
	
// +----------------------------------------------------------------------
// | 数据库配置设定
// +----------------------------------------------------------------------		
	'DB_TYPE'               =>  'mysql',        // 数据库类型
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'lr_',       // 数据库表前缀   ！开发时配置常量 ！
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8		
// +----------------------------------------------------------------------
// | 弹性WEB服务器和数据库
// +----------------------------------------------------------------------
//  'DB_HOST'               =>  'rm-bp12j54a6nuw04l8t.mysql.rds.aliyuncs.com', // 服务器地址
//  'DB_NAME'               =>  'r6hpk2l184',          // 数据库名
//  'DB_USER'               =>  'r6hpk2l184',      // 用户名
//  'DB_PWD'                =>  'leren888_win',//'1234QWERasdf',          // 密码
// +----------------------------------------------------------------------
// | 本地测试服务器和数据库
// +----------------------------------------------------------------------  	 
	'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'minimeidea_duo',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',      //'1234QWERasdf',          // 密码
    'content'=>array(
        'dir' =>"/minimeidea_duo/Data/"
    ),
    'wxpay'  =>array(
        'applyshop_notify_url'=>"https://gzleren.com/minimeidea_duo/index.php/Api/Applyshop/wxnotifyurl",
        'wx_notify_url'       =>"https://gzleren.com/minimeidea_duo/index.php/Api/Pay/wxnotifyurl",
        'wx_rznotify_url'       =>"https://gzleren.com/minimeidea_duo/index.php/Api/Renzheng/wxrznotifyurl"
    ),
    'weixin' => array(
        'appid'  => 'wx2ba518f4bb9fccc0', 
        'secret' => 'd65af36e27210b63d2008aa330a902d8',
        'key'    => 'XIWmy5UAs37TeNquZOAtjollVK9yJFaX',
        'mchid'  => '1474898802'
    ),

    'zhifubao' => array(
        'appid' => '2017111409931485',
        'rsaPrivateKey' => 'MIIEogIBAAKCAQEAqcjwmqHqBu60N/hu2OAipuNo9GFtc+dEW0G4TjPZCAdYexLc
                                4E/CtrzdXs0lquP3IWoS+xIpg6usVdqu27VWFWKZednzlmulfBSwlGiZnkH6wSjF
                                tl5PawHfw3gVlVjpY3SJdJf2MQFlAx6A/nz754hoBzZW8l2OwQVb2VMPTxtHKnf4
                                qCku43swsgxg+1xLmKvY3LucO4BsqOoaYyq239EzW0XgVq5ng+JY1M2Qh/snR8sr
                                K+SJ/HZXuFleke9wQ5RBnS2Co7n/3UdbszT2d1LqGwBRuMxLMENx03DG/Gtk1AZ0
                                FJvNqhg8jRkXlaw3Fns465RM/mAbRpPD8oSwLwIDAQABAoIBADJmyz4sOKvsKqW+
                                4zEQgFjog1ygm3xfuAQbI1pbu97NR2/prpYMN3JF6LVe0wLC/7b0pUPRJW/IA7XM
                                4EGquC5LAeKRV+VceVi3T6AO2SOI1KaIswCrSIosmT+Oo2GdblMu4isxfU0Y6+Kc
                                KJDji2g1LySM9gymx1z3eUevh4jkxViTNj2tMxJTk3kFNh19eqwNKvWU+4uB3IGt
                                G6+tC2rBYMXmsbqudDrnyXgJMkxMq6Ex7Hr6FxZml513nBJSmtDMIb3FkC8MHhMG
                                nKto6PEY3AqU2c6gt9c7cxIM5oHj++Q2ZSCwB+xCx/MlgrY57Ag2TO2EHFzcyxUT
                                v5NhT2kCgYEA0VtR/vZ3UyLmigaHTLq51ArAAJQe2vnDPUsqHSL5eFN7ZWKiNowK
                                OzuPIsHdGA3fDtXu2xynFwtKHYtYtXeZ8xwE4lmJm3WZ2nEWB/+3jXATcWYvZDxs
                                lFshAqTY9XnV5Kyj2RZ02l8dhthbqcEzujtVA03hoVznsHQVB/NtPxsCgYEAz5yj
                                bn22bYC6DOQed3+T0cM3MNFbYadAhUIfPUh/u+Y8uwTsWyaoIob8ZjJ8Hj39GEaF
                                qvXSxYgvSwE79Yq5vgIBlNjhePt2CzIaClDEQ7lCe6XlTiEWAcITu3FH86INhdX0
                                x49NYOZizfHvNbLvLLSXG67RFNw1S88nrov0oH0CgYB+GVUQDv/cUV8ur7P64VVg
                                hIEVWCIlnt6cIpPhLNm6Qf5HGNu/oyXee4dBVieHf4Nk+jJ+Q4nY9XHUzcPGuZ0+
                                sxe2Blw+CN18lzS/6KR0SpdLbFMLOuHjkegWIZiUcqgErn+aGE6V4Uh1mgfL/ZTc
                                jTQtY1GN0dmzjJfGTDb3FQKBgEE99TH8uX5x7IWujlB5PAe4NDjYIcJvX9xAqjaE
                                +PcgZEdVRb1jSYUILHslNFIAou+lAc52z9SZdls4uRHxlWs7kCmpejmdtDvSc9J4
                                DSVHK7hVqtjBlvvYdID8GWNbsqozUWgBBY0E+VnExKp4X6cJ3U6qwjOu++Sl5c95
                                Vde1AoGAVd8vIFcG+e699KoO0ul0UlrXfq6FDDwq3PD1GSOgLB2FKrMjpC+1NsMH
                                6ZAllKFJ2/MBD2SJDE3NJsthq40uSWCvMkz9ueZXh8g0BdfJGicwI36h3yHlC1hc
                                yf8CBSKw+5qMEY5cY8US5jgK/vxSD/FFWsiKK811UnnTRRx67X8=',
        'alipayrsaPublicKey' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqcjwmqHqBu60N/hu2OAipuNo9GFtc+dEW0G4TjPZCAdYexLc4E/CtrzdXs0lquP3IWoS+xIpg6usVdqu27VWFWKZednzlmulfBSwlGiZnkH6wSjFtl5PawHfw3gVlVjpY3SJdJf2MQFlAx6A/nz754hoBzZW8l2OwQVb2VMPTxtHKnf4qCku43swsgxg+1xLmKvY3LucO4BsqOoaYyq239EzW0XgVq5ng+JY1M2Qh/snR8srK+SJ/HZXuFleke9wQ5RBnS2Co7n/3UdbszT2d1LqGwBRuMxLMENx03DG/Gtk1AZ0FJvNqhg8jRkXlaw3Fns465RM/mAbRpPD8oSwLwIDAQAB'
    ),	

);
