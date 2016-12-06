<?php
/*
$_POST {
	action : 수행할 작업명.
	oscode : 운영체제 코드명.
}
*/

class EnvClass 
{
	function __construct() {
		// Nothing.
	}
	function __destruct() {
		//Nothing.
	}

	protected $OSInfo = array(
		'W10' => array(
			'code_' => 'W10',
			'name_' => 'Windows 10',
			'type_' => 'Windows Client',
			'edition_' => 'Enterprise,Pro,Home',
			'bit_' => '64Bit',
			'sp_' => '0',
			'physical_' => 'ABA,SCDPM,ABS',
			'hyperv_' => 'ABA,SCDPM,ABS',
			'vmware_' => 'ABA,SCDPM,ABS',
			'azure_' => 'ABA,SCDPM,ABS,AVMB',
			'datalimit_' => '54400',

			), 
		'W81' => array(
			'code_' => 'W81',
			'name_' => 'Windows 8.1',
			'type_' => 'Windows Client',
			'edition_' => 'Enterprise,Pro',
			'bit_' => '64Bit',
			'sp_' => '0',
			'physical_' => 'ABA,SCDPM,ABS',
			'hyperv_' => 'ABA,SCDPM,ABS',
			'vmware_' => 'ABA,SCDPM,ABS',
			'azure_' => 'ABA,SCDPM,ABS,AVMB',
			'datalimit_' => '54400',

			), 
		'W8' => array(
			'code_' => 'W8',
			'name_' => 'Windows 8',
			'type_' => 'Windows Client',
			'edition_' => 'Enterprise,Pro',
			'bit_' => '64Bit',
			'sp_' => '0',
			'physical_' => 'ABA,SCDPM,ABS',
			'hyperv_' => 'ABA,SCDPM,ABS',
			'vmware_' => 'ABA,SCDPM,ABS',
			'azure_' => 'ABA,SCDPM,ABS,AVMB',
			'datalimit_' => '54400',

			), 
		'W7' => array(
			'code_' => 'W7',
			'name_' => 'Windows 7',
			'type_' => 'Windows Client',
			'edition_' => 'Ultimate,Enterprise,Professional,Home Premium,Home Basic,Starter',
			'bit_' => '64Bit',
			'sp_' => '1',
			'physical_' => 'ABA,SCDPM,ABS',
			'hyperv_' => 'ABA,SCDPM,ABS',
			'vmware_' => 'ABA,SCDPM,ABS',
			'azure_' => 'ABA,SCDPM,ABS,AVMB',
			'datalimit_' => '1700',

			), 
		'WS2012R2' => array(
			'code_' => 'WS2012R2',
			'name_' => 'Windows Server 2012 R2',
			'type_' => 'Windows Server',
			'edition_' => 'Datacenter,Standard,Essential,Foundation',
			'bit_' => '64Bit',
			'sp_' => '0',
			'physical_' => 'ABA,SCDPM,ABS',
			'hyperv_' => 'ABA,SCDPM,ABS',
			'vmware_' => 'ABA,SCDPM,ABS',
			'azure_' => 'ABA,SCDPM,ABS,AVMB',
			'datalimit_' => '54400',

			), 
		'WS2012' => array(
			'code_' => 'WS2012',
			'name_' => 'Windows Server 2012',
			'type_' => 'Windows Server',
			'edition_' => 'Datacenter,Standard,Foundation',
			'bit_' => '64Bit',
			'sp_' => '0',
			'physical_' => 'ABA,SCDPM,ABS',
			'hyperv_' => 'ABA,SCDPM,ABS',
			'vmware_' => 'ABA,SCDPM,ABS',
			'azure_' => 'ABA,SCDPM,ABS,AVMB',
			'datalimit_' => '54400',

			), 
		'WSS2012R2' => array(
			'code_' => 'WSS2012R2',
			'name_' => 'Windows Storage Server 2012 R2',
			'type_' => 'Windows Server',
			'edition_' => 'Standard,Workgroup',
			'bit_' => '64Bit',
			'sp_' => '0',
			'physical_' => 'ABA,SCDPM,ABS',
			'hyperv_' => 'ABA,SCDPM,ABS',
			'vmware_' => 'ABA,SCDPM,ABS',
			'azure_' => 'ABA,SCDPM,ABS,AVMB',
			'datalimit_' => '54400',

			), 
		'WSS2012' => array(
			'code_' => 'WSS2012',
			'name_' => 'Windows Storage Server 2012',
			'type_' => 'Windows Server',
			'edition_' => 'Standard,Workgroup',
			'bit_' => '64Bit',
			'sp_' => '0',
			'physical_' => 'ABA,SCDPM,ABS',
			'hyperv_' => 'ABA,SCDPM,ABS',
			'vmware_' => 'ABA,SCDPM,ABS',
			'azure_' => 'ABA,SCDPM,ABS,AVMB',
			'datalimit_' => '54400',

			), 
		'WS2008R2' => array(
			'code_' => 'WS2008R2',
			'name_' => 'Windows Server 2008 R2',
			'type_' => 'Windows Server',
			'edition_' => 'Datacenter,Standard,Enterprise,Foundation',
			'bit_' => '64Bit',
			'sp_' => '1',
			'physical_' => 'ABA,SCDPM,ABS',
			'hyperv_' => 'ABA,SCDPM,ABS',
			'vmware_' => 'ABA,SCDPM,ABS',
			'azure_' => 'ABA,SCDPM,ABS,AVMB',
			'datalimit_' => '1700',

			), 
		'WS2008' => array(
			'code_' => 'WS2008',
			'name_' => 'Windows Server 2008',
			'type_' => 'Windows Server',
			'edition_' => 'Datacenter,Standard,Enterprise,Foundation',
			'bit_' => '64Bit',
			'sp_' => '2',
			'physical_' => 'ABA,SCDPM,ABS',
			'hyperv_' => 'ABA,SCDPM,ABS',
			'vmware_' => 'ABA,SCDPM,ABS',
			'azure_' => 'ABA,SCDPM,ABS,AVMB',
			'datalimit_' => '1700',

			), 
		'LNXCOS63' => array(
			'code_' => 'LNXCOS63',
			'name_' => 'CentOS 6.3',
			'type_' => 'Linux',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		'LNXCOS64' => array(
			'code_' => 'LNXCOS64',
			'name_' => 'CentOS 6.4 이상',
			'type_' => 'Linux',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		'LNXDBN79' => array(
			'code_' => 'LNXDBN79',
			'name_' => 'Debian 7.9 이상',
			'type_' => 'Linux',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		'LNXORC64' => array(
			'code_' => 'LNXORC64',
			'name_' => 'Oracle Linux 6.4 이상',
			'type_' => 'Linux',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		'LNXORC70' => array(
			'code_' => 'LNXORC70',
			'name_' => 'Oracle Linux 7.0 이상',
			'type_' => 'Linux',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		'LNXRHEL67' => array(
			'code_' => 'LNXRHEL67',
			'name_' => 'Red Hat Enterprise Linux 6.7 이상',
			'type_' => 'Linux',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		'LNXRHEL71' => array(
			'code_' => 'LNXRHEL71',
			'name_' => 'Red Hat Enterprise Linux 7.1 이상',
			'type_' => 'Linux',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		'LNXSLES11' => array(
			'code_' => 'LNXSLES11',
			'name_' => 'SUSE Linux Enterprise Server 11 SP4',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		'LNXSLES12' => array(
			'code_' => 'LNXSLES12',
			'name_' => 'SUSE Linux Enterprise Server 12 이상',
			'type_' => 'Linux',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		'LNXOPS132' => array(
			'code_' => 'LNXOPS132',
			'name_' => 'openSUSE 13.2 이상',
			'type_' => 'Linux',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		'LNXUBT1204' => array(
			'code_' => 'LNXUBT1204',
			'name_' => 'Ubuntu 12.04',
			'type_' => 'Linux',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		'LNXUBT1404' => array(
			'code_' => 'LNXUBT1404',
			'name_' => 'Ubuntu 14.04',
			'type_' => 'Linux',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		'LNXUBT1604' => array(
			'code_' => 'LNXUBT1604',
			'name_' => 'Ubuntu 16.04',
			'type_' => 'Linux',
			'edition_' => '',
			'bit_' => '',
			'sp_' => '0',
			'physical_' => '',
			'hyperv_' => 'SCDPM,ABS',
			'vmware_' => '',
			'azure_' => 'AVMB',
			'datalimit_' => '0',

			), 
		);

	public function get_edition_list($code) {
		echo json_encode(explode(",", $this->OSInfo[$code]['edition_']));
	}
	public function get_os_name($code) {
		echo $this->OSInfo[$code]['name_'];
	}
	public function get_os_type($code) {
		echo $this->OSInfo[$code]['type_'];
	}
	public function get_service_pack($code) {
		echo $this->OSInfo[$code]['sp_'];
	}


}

$env = new EnvClass;

if(isset($_POST['action']) && !empty($_POST['action'])) {
	$ajaxAction = $_POST['action'];
	$ajaxOSCode = $_POST['oscode'];

	switch ($ajaxAction) {
		case 'get_editions':
			$env->get_edition_list($ajaxOSCode);
			break;
		
		default:
			# code...
			break;
	}
}

?>