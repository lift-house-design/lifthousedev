<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Set Environment */
// detect from host (local.domain.com => local, domain.lifthousedesign.com => development, other => production)
if(strpos($_SERVER['HTTP_HOST'],'local') === 0)
	$config['environment'] = 'local';
elseif(strpos($_SERVER['HTTP_HOST'],'.lifthousedesign.com') !== false)
	$config['environment'] = 'development';
else
	$config['environment'] = 'production';

$config['error_email'] = 'jdooling.locizzle@gmail.com';
/* Database Configuration */
$config['databases']=array(
	'default' => array(
		'hostname' => 'localhost',
		'dbdriver' => 'mysql',
		'db_debug' => true,
	),
	'local'=>array(
		'username'=>'root',
		'password'=>'root',
		'database'=>'riskpix',
	),
	'development'=>array(
		'username'=>'riskpix',
		'password'=>'riskpix',
		'database'=>'riskpix',
	),
	'production'=>array(
		'username'=>'riskpix',
		'password'=>'riskpix',
		'database'=>'riskpix',
		'db_debug' => false,
	)
);
$config['database'] = array_merge(
	$config['databases']['default'],
	$config['databases'][$config['environment']]
);
//var_dump($config['database']);
/* URL / Path Configuration */
$config['domain'] = $_SERVER['HTTP_HOST'];
$config['scheme'] = 'http';
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
	$config['scheme'] .= 's';
$config['base_path'] = $config['scheme'] . '://' . $config['domain'];
$config['full_path'] = $config['base_path'] . $_SERVER['REQUEST_URI'];
$config['assets_url'] = '/assets';
$config['module_path'] = APPPATH.'modules';

/* Metadata/SEO */
$config['site_name'] = 'RISKPIX';
$config['meta'] = array(
	'title' => "RISKPIX",
	'description' => "Insurance Quote Solutions",
	'keywords' =>'Insurance Quote Software, Insurance Quote System',
	'url' => $config['full_path'],
	'image' => '/assets/img/logo.png'
);
$config['copyright']='Copyright &copy; '.$config['site_name'].' '.date('Y').' All Rights Reserved.';
$config['seo_content'] = '';

/* Google Analytics */
$config['ga_code']=FALSE;

/* E-mail Notifications */
$config['contact_email'] = 'jdooling.locizzle@gmail.com';
$config['email_notifications']=array(
	'sender_email'=>'no-reply@riskpix.com',
	'sender_name'=>'RISKPIX',
	'config'=>array(
		'protocol'=>'sendmail',
		'mailtype'=>'html',
	),
);

/* SMS Notifications */
$config['sms_notifications']=array(
	'config'=>array(
		'mode'=>'prod',
		'account_sid'=>'ACbc39c48a6281fb1c17776a242fd592c9',
		'auth_token'=>'3e7012885483ba6d927af52f8c240d06',
		'api_version'=>'2010-04-01',
		'number'=>'+15126490010',
	),
);

/* Email/SMS resend */
$config['max_resends'] = 3;
