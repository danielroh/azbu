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
			//echo "<font color='red'>정확한 용량을 입력해주세요.</font>";
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
			//echo "<font color='red'>정확한 용량을 입력해주세요.</font>";
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
			'name_' => "Azure Backup (MARS) Agent",
			'protect_' => array(self::p_FF),
			'where_' => array(self::w_Az),
			'exp_' => "최대 하루 3회 백업, 응용 프로그램 인식 안함, Linux 지원 안함.",
			'physical_' => array("Windows Client", "Windows Server"),
			'hyperv_' => array("Windows Client", "Windows Server"),
			'vmware_' => array("Windows Client", "Windows Server"),
			'azure_' => array("Windows Client", "Windows Server"),
			),
		'SCDPM' => array(
			'name_' => "System Center DPM",
			'protect_' => array(self::p_FF, self::p_VL, self::p_VM, self::p_AP, self::p_WL),
			'where_' => array(self::w_Az, self::w_Lc, self::w_Tp),
			'exp_' => "최대 하루 2회 백업, Oracle Workload 백업 지원 안함, Linux는 Hyper-V에 호스팅된 경우에만 백업 가능, VMware VM은 DPM 2012 R2로 백업 가능.",
			'physical_' => array("Windows Client", "Windows Server"),
			'hyperv_' => array("Windows Client", "Windows Server", "Linux"),
			'vmware_' => array("Windows Client", "Windows Server"),
			'azure_' => array("Windows Client", "Windows Server"),
			),
		'ABS' => array(
			'name_' => "Azure Backup Server",
			'protect_' => array(self::p_FF, self::p_VL, self::p_VM, self::p_AP, self::p_WL),
			'where_' => array(self::w_Az, self::w_Lc),
			'exp_' => "최대 하루 2회 백업, VMware VM/Oracle Workload 백업 지원 안함, Linux는 Hyper-V에 호스팅된 경우에만 백업 가능, 활성화 되어있는 Azure 구독 반드시 필요, Tape 백업 지원 안함, System Center License 필요 없음.",
			'physical_' => array("Windows Client", "Windows Server"),
			'hyperv_' => array("Windows Client", "Windows Server", "Linux"),
			'vmware_' => array(),
			'azure_' => array("Windows Client", "Windows Server"),
			),
		'AVMB' => array(
			'name_' => "Azure IaaS VM Backup",
			'protect_' => array(self::p_VM, self::p_DK),
			'where_' => array(self::w_Az),
			'exp_' => "최대 하루 1회 백업, Disk 수준으로 VM 복원, On-premise VM 대상이 아닌 Azure VM만 지원, Agent 프로그램 설치 불필요, Backup Infrastructure가 필요없는 Fabric 수준 백업.",
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
		return "<font color='red'>OS와 환경 정보를 모두 선택해주세요.</font>";
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
			$rst_desc = ""; //결과가 저장되는 변수.

			$info = $this->OSInfo[$oscode];
			$OStype = $info['type_'];
			
			$availableType = (trim($info[$env."_"]) == "")? array() : explode(",", $info[$env."_"]);
			$is_possible = false;
			foreach($availableType as $key=>$val) {
				if(in_array($OStype, $this->BackupTypeCheckList[$val][$env."_"])) {
					$rst_desc .= "<input type='button' class='available_type' backupType='".$val."' value='".$this->BackupTypeCheckList[$val]['name_']."' />";
					$is_possible = true;
				}
				//$rst_desc .= "<pre>".print_r($availableType, true)."</pre>";
			}

			if($is_possible == false) {
				$rst_desc .= "<font color='red'>백업 가능한 시나리오가 없습니다. 다른 환경을 선택해주세요.</font>";
			}
			return $rst_desc;
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
				$chk_volume_desc = "<font color=gray>(용량 한도값 없음.)</font>";
				break;
			case 0:
				$chk_volume_desc = "<font color=red>(용량 한도 초과!)</font>";
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
	<div class="instance_title">
		<?php echo trim($_POST['instance_name']) == ""? "(이름없음)" : $_POST['instance_name']; ?>
	</div>
	<div class="option_block">
		<label>
		<div class="calc_left selected_div">
			<input type="radio" name="storage_type<?php echo $_POST['cnt']; ?>" value="LRS" checked="true" />로컬 중복 저장소(LRS)
		</div>
		</label>
		<label>
		<div class="calc_right">
			<input type="radio" name="storage_type<?php echo $_POST['cnt']; ?>" value="GRS" />지역 중복 저장소(GRS)
		</div>
		</label>
	</div>
	<div class="protect_price">
		인스턴스 보호 비용 : 
		<span class="price"><?php echo number_format($p_protect); ?>원</span>/월
	</div>
	<div class="storage_price">
		<div class="LRS price_option" style="display: block;">
			로컬 중복 저장소(LRS) 사용료 : <span class="price"><?php echo number_format($p_storage['LRS']); ?>원</span>/월
			<?php echo $chk_volume_desc; ?>
		</div>
		<div class="GRS price_option" style="display: none;">
			지역 중복 저장소(GRS) 사용료 : <span class="price"><?php echo number_format($p_storage['GRS']); ?>원</span>/월
			<?php echo $chk_volume_desc; ?>
		</div>
	</div>
	<div class="os_env_check">
		<div class="backup_desc">
			<?php echo $backup_option; ?>
		</div>
	</div>
	<div class="total_price">
		<div class="LRS price_option" style="display: block;">
			약 <span class="price impact"><?php echo number_format(ceil(($p_protect + $p_storage['LRS'])/1000)*1000); ?>원</span>/월
		</div>
		<div class="GRS price_option" style="display: none;">
			약 <span class="price impact"><?php echo number_format(ceil(($p_protect + $p_storage['GRS'])/1000)*1000); ?>원</span>/월
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

