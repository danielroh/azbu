<?php
/*
$_POST {
	action : 수행할 작업명.
	instance_name : 인스턴스 명.
	cnt : 인스턴스 구분 번호.
	volume_total : 인스턴스 디스크볼륨 총량.
	oscode: default, W10, W81, WS2012R2, LNXCOS63 등등.
	edition: OS Edition 정보이며, 확인 연산에 쓰이진 않음.
	env: default, physical, hyperv, vmware, azure.
}
*/

//echo "<pre>".print_r($_POST, 1)."</pre>";

$f_storage = Array();
$f_protect = Array();

class PricingClass
{
	function __construct() {
		// Nothing.
	}
	function __destruct() {
		//Nothing.
	}

	public $standard = Array(50, 500);
	public $protect = Array(6000, 12000);
	public $storage = Array('LRS'=>18, 'GRS'=>36); //https://azure.microsoft.com/ko-kr/pricing/details/storage/blobs/ --> Blob Storage[Cool]

	public function get_protection_price($volume_total) {
		$rst = 0;

		if($volume_total <= 0){
			//echo "<p class='desc warning'>정확한 용량을 입력해주세요.</p>";
			$rst = 0;
		}
		elseif($volume_total <= $this->standard[0]){
			$rst = $this->protect[0];
		}
		elseif($volume_total <= $this->standard[1]){
			$rst = $this->protect[1];
		}
		else{
			$rst = $this->protect[1] * ceil($volume_total / $this->standard[1]);
		}

		return $rst;
	}

	public function get_storage_price($volume_total) {
		$rst = array();

		if($volume_total <= 0){
			//echo "<p class='desc warning'>정확한 용량을 입력해주세요.</p>";
			$rst['LRS'] = 0;
			$rst['GRS'] = 0;
		}
		else{
			$rst['LRS'] = $this->storage['LRS'] * $volume_total;
			$rst['GRS'] = $this->storage['GRS'] * $volume_total;
		}
		return $rst;
	}

}


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

	const p_FF = "Files & Folders";
	const p_VL = "Volumes";
	const p_VM = "Virtual Machines";
	const p_AP = "Applications";
	const p_WL = "Workloads";
	const p_DK = "All Disks(using PowerShell)";
	const w_Az = "Azure Backup Vault";
	const w_Lc = "Locally attached Disk";
	const w_Tp = "Tape(On-premise Only)";
/*
	((Ref)) https://docs.microsoft.com/en-us/azure/backup/backup-introduction-to-azure-backup
*/
	protected $BackupTypeCheckList = array(
		'ABA' => array(
			'code_' => "ABA",
			'name_' => "Azure Backup Agent",
			'protect_' => array(self::p_FF),
			'where_' => array(self::w_Az),
			'exp_' => "<li>파일/폴더.</li><li>최대 하루 3회.</li><li>Application 인식 안함.</li><li>Linux 지원 안함.</li>",
			'physical_' => array("Windows Client", "Windows Server"),
			'hyperv_' => array("Windows Client", "Windows Server"),
			'vmware_' => array("Windows Client", "Windows Server"),
			'azure_' => array("Windows Client", "Windows Server"),
			),
		'SCDPM' => array(
			'code_' => "SCDPM",
			'name_' => "System Center DPM",
			'protect_' => array(self::p_FF, self::p_VL, self::p_VM, self::p_AP, self::p_WL),
			'where_' => array(self::w_Az, self::w_Lc, self::w_Tp),
			//'exp_' => "최대 하루 2회 백업.<br />Oracle Workload 백업 지원 안함.<br />Linux는 Hyper-V에 호스팅된 경우에만 백업 가능.<br />VMware VM은 DPM 2012 R2로 백업 가능.",
			'exp_' => "<li>파일/폴더, VM, App Workloads.</li><li>최대 하루 2회.</li><li>Oracle Workload 백업 안됨.</li><li>Linux는 VM만 가능.</li><li>VMware VM 백업 가능.</li><li>On-premise Tape 백업 지원.</li>",
			'physical_' => array("Windows Client", "Windows Server"),
			'hyperv_' => array("Windows Client", "Windows Server", "Linux"),
			'vmware_' => array("Windows Client", "Windows Server"),
			'azure_' => array("Windows Client", "Windows Server"),
			),
		'ABS' => array(
			'code_' => "ABS",
			'name_' => "Azure Backup Server",
			'protect_' => array(self::p_FF, self::p_VL, self::p_VM, self::p_AP, self::p_WL),
			'where_' => array(self::w_Az, self::w_Lc),
			'exp_' => "<li>파일/폴더, VM, App Workloads.</li><li>최대 하루 2회.</li><li>Oracle Workload 백업 지원 안함.</li><li>Linux는 Hyper-V일 경우에만 가능.</li><li>Tape 백업 지원 안함.</li><li>항상 활성화된 Azure 구독 필요.</li><li>System Center 라이선스 필요 없음.</li>",
			'physical_' => array("Windows Client", "Windows Server"),
			'hyperv_' => array("Windows Client", "Windows Server", "Linux"),
			'vmware_' => array(),
			'azure_' => array("Windows Client", "Windows Server"),
			),
		'AVMB' => array(
			'code_' => "AVMB",
			'name_' => "Azure IaaS VM Backup",
			'protect_' => array(self::p_VM, self::p_DK),
			'where_' => array(self::w_Az),
			'exp_' => "<li>VM, All disks.</li><li>최대 하루 1회.</li><li>Windows/Linux 기본 백업.</li><li>Agent 설치 필요 없음.</li><li>Disk 수준으로 VM 복원.</li><li>On-premise VM 미지원.</li><li>Azure VM 백업만 지원.</li><li>Backup Infrastructure가 필요없는 Fabric 수준 백업.</li>",
			'physical_' => array(),
			'hyperv_' => array(),
			'vmware_' => array(),
			'azure_' => array("Windows Client", "Windows Server", "Linux"),
			),
		);
	public function get_edition_list($code) {
		return json_encode(explode(",", $this->OSInfo[$code]['edition_']));
	}
	public function get_os_name($code) {

		return ($code == 'default')? 'default' : $this->OSInfo[$code]['name_'];
	}
	public function get_os_type($code) {
		return ($code == 'default')? 'default' :  $this->OSInfo[$code]['type_'];
	}
	public function get_service_pack($code) {
		return ($code == 'default')? 'default' :  $this->OSInfo[$code]['sp_'];
	}

	private function get_error_text() {
		return "<div class='desc col-xs-12'>OS/환경 정보 미입력.</div>";
	}

	public function check_volume_total($oscode, $volume_total) {
		if($oscode == "default") {
			return -1;
		}
		else {
			$limit = intval($this->OSInfo[$oscode]['datalimit_']);
			if($limit == 0) {
				return -1;
			}
			elseif($limit < $volume_total) {
				return 0;
			}
			else {
				return 1;
			}
		}
	}
	public function check_env($oscode, $env) {
		if($oscode == "default" || $env == "default") {
			return $this->get_error_text();
		}
		else {
			$rst_desc = "<div class='desc important col-xs-12'>"; //결과가 저장되는 변수.

			$info = $this->OSInfo[$oscode];
			$OStype = $info['type_'];
			
			$availableType = (trim($info[$env."_"]) == "")? array() : explode(",", $info[$env."_"]);
			$is_possible = 0;
			foreach($availableType as $key=>$val) {
				if(in_array($OStype, $this->BackupTypeCheckList[$val][$env."_"])) {
					$rst_desc .= '<a href="javascript:void(0);" name="stay_here'. $_POST['cnt'] .'_'. $is_possible .'" data-toggle="popover" data-trigger="focus" data-html="true" title="'.$this->BackupTypeCheckList[$val]['name_'].'" data-content="'.$this->BackupTypeCheckList[$val]['exp_'].'" class="available_type" backupType="'.$val.'">';
					$rst_desc .= $this->BackupTypeCheckList[$val]['code_'];
					$rst_desc .= '</a>';
					$is_possible++;
				}
				//$rst_desc .= "<pre>".print_r($availableType, true)."</pre>";
			}

			if(0 == $is_possible) {
				return "<div class='desc warning col-xs-12'>백업 가능한 시나리오 없음.</div>";
			}
			else {
				return $rst_desc."</div>";
			}
		}
	}
}

$env_obj = new EnvClass;
$price_obj = new PricingClass();

if(isset($_POST['action']) && !empty($_POST['action'])) {
	$_Action = $_POST['action'];
} else {
	echo "<script>alert('js [action] parameter Error!');</script>";
	return;
}


switch ($_Action) {
	case 'get_editions':
		$_OSCode = $_POST['oscode'];
		//$_OSName = $env_obj->get_os_name($_OSCode);
		echo $env_obj->get_edition_list($_OSCode);
		break;

	case 'calculate':
		$_OSCode = $_POST['oscode'];
		//$_OSName = $env_obj->get_os_name($_OSCode);
		$_Env = $_POST['env'];
		$_VolTotal = $_POST['volume_total'];

		//총 용량 검사
		$chk_volume = $env_obj->check_volume_total($_OSCode, $_VolTotal); 
		switch ($chk_volume) {
			case -1:
				$chk_volume_desc = "<div class='desc col-xs-12'>선택된 환경에 대한 용량 한도 없음.</div>";
				break;
			case 0:
				$chk_volume_desc = "<div class='desc warning col-xs-12'>용량 한도 초과!</div>";
				break;
			default:
				$chk_volume_desc = "";
				break;
		}

		//인스턴스 보호 비용
		$p_protect = 0;
		$p_protect = $price_obj->get_protection_price($_VolTotal);

		//저장소 비용 ['LRS', 'GRS']
		$p_storage = array();
		$p_storage['LRS'] = 0;
		$p_storage['GRS'] = 0;
		$p_storage = $price_obj->get_storage_price($_VolTotal);

		//가능한 백업 옵션 검사
		$backup_option = "---html---";
		$backup_option = $env_obj->check_env($_OSCode, $_Env);
?>
<div class="calc_instance" cnt="<?php echo $_POST['cnt']; ?>">
	<ul class="nav nav-tabs nav-justified">
		<li class="nav-item active">
			<a class="nav-link" href="" data-target="#tab<?php echo $_POST['cnt']; ?>_1" data-toggle="tab" aria-expanded="true">로컬 중복 저장소(LRS)</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="" data-target="#tab<?php echo $_POST['cnt']; ?>_2" data-toggle="tab" aria-expanded="false">지역 중복 저장소(GRS)</a>
		</li>
	</ul>

	<div class="calc-header">
		<?php echo trim($_POST['instance_name']) == ""? "(이름없음)" : $_POST['instance_name']; ?>
	</div>
	<div class="calc-content tab-content col-xs-12">
		<div class="protect_price">
			<div class="col-xs-12 col-md-6 col-lg-6">
				인스턴스 보호 비용 : 
			</div>
			<div class="desc important col-xs-12 col-md-6 col-lg-6">
				<?php echo number_format($p_protect); ?>원/월
			</div>
		</div>
        <div class="tab-pane fade LRS active in" id="tab<?php echo $_POST['cnt']; ?>_1" aria-expanded="true">
			<div class="storage_price">
				<div class="col-xs-12 col-md-6 col-lg-6">
					저장소 비용 : 
				</div>
				<div class="desc important col-xs-12 col-md-6 col-lg-6">
					<?php echo number_format($p_storage['LRS']); ?>원/월
				</div>
				<?php echo $chk_volume_desc; ?>
			</div>
			<div class="backup_desc">
				<div class="col-xs-12 col-md-6 col-lg-6">
					백업 가능한 시나리오 : 
				</div>
				<?php echo $backup_option; ?>
			</div>
			<div class="total_price">
				<div class="desc impact col-xs-12">
					약 <?php echo number_format(ceil(($p_protect + $p_storage['LRS'])/1000)*1000); ?>원/월
				</div>
			</div>
		</div>
		<div class="tab-pane fade GRS" id="tab<?php echo $_POST['cnt']; ?>_2" aria-expanded="false">
			<div class="storage_price">
				<div class="col-xs-12 col-md-6 col-lg-6">
					저장소 비용 : 
				</div>
				<div class="desc important col-xs-12 col-md-6 col-lg-6">
					<?php echo number_format($p_storage['GRS']); ?>원/월
				</div>
				<?php echo $chk_volume_desc; ?>
			</div>
			<div class="backup_desc">
				<div class="col-xs-12 col-md-6 col-lg-6">
					백업 가능한 시나리오 : 
				</div>
				<?php echo $backup_option; ?>
			</div>
			<div class="total_price">
				<div class="desc impact col-xs-12">
					약 <?php echo number_format(ceil(($p_protect + $p_storage['GRS'])/1000)*1000); ?>원/월
				</div>
			</div>
		</div>
	</div>
</div>

<?php
		break;

	default:
		# code...
		break;
}


?>

