<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/JWT/JWT.php';
class Api extends CI_Controller {

    public function __construct()
	{
		parent::__construct();	
		
	}


public function verifyToken(){

    $Key = <<<EOD
    -----BEGIN PUBLIC KEY-----
    MIGeMA0GCSqGSIb3DQEBAQUAA4GMADCBiAKBgFTAV3g4z7SiGw4vp0nenFkP6QQV
    LLHH7yNelz2WZipEN2OImQJzHqnuDSIzxZ2hRJSPEGNlWBhqaZmBV8fRiYwXwv3D
    3oB6rRXAOqThCJRjjH84oS2FK+aCyaKCLhjDa+2N/PN534p0oBSkJPeGcX6P1g9w
    wcV983x+STr/oHQpAgMBAAE=
    -----END PUBLIC KEY-----
    EOD;

    $jwt="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.IkVhdE1lU2hhcmVTaGVsbEFkbWluIg.PM7i2qoGfVX-G5CQe2ODy18hmgVMY8V881We5QCa-8wy7BYWwg74S4GQFEJOLHdvEittNVBdFGGxwNCXLRX_tiepKtpHc6a-xUS6AH8s1P6xZLEU6cZcnJT_iZ0gjYl9qV4S1jRPIk0dfxXChkr5XQitoYqC4WgKMbEShtR7KBw";

    $decoded = JWT::decode($jwt, $Key, array('RS256'));

    $decoded_array = (array) $decoded;
    echo "Decode:\n" . print_r($decoded_array, true) . "\n";       
}

}

?>