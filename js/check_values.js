var OSCheckList = new Object();

OSCheckList = {
	W10: {
		code_: "W10",
		name_: "Windows 10",
		type_: "Windows Client",
		edition_: ["Enterprise", "Pro", "Home"],
		bit_: "64Bit",
		sp_: 0,
		physical_: ["ABA", "SCDPM", "ABS"],
		hyperv_: ["ABA", "SCDPM", "ABS"],
		vmware_: ["ABA", "SCDPM", "ABS"],
		azure_: ["ABA", "SCDPM", "ABS", "AVMB"],
		datalimit_: 54400,
	},
	W81: {
		code_: "W81",
		name_: "Windows 8.1",
		type_: "Windows Client",
		edition_: ["Enterprise", "Pro"],
		bit_: "64Bit",
		sp_: 0,
		physical_: ["ABA", "SCDPM", "ABS"],
		hyperv_: ["ABA", "SCDPM", "ABS"],
		vmware_: ["ABA", "SCDPM", "ABS"],
		azure_: ["ABA", "SCDPM", "ABS", "AVMB"],
		datalimit_: 54400,
	},
	W8: {
		code_: "W8",
		name_: "Windows 8",
		type_: "Windows Client",
		edition_: ["Enterprise", "Pro"],
		bit_: "64Bit",
		sp_: 0,
		physical_: ["ABA", "SCDPM", "ABS"],
		hyperv_: ["ABA", "SCDPM", "ABS"],
		vmware_: ["ABA", "SCDPM", "ABS"],
		azure_: ["ABA", "SCDPM", "ABS", "AVMB"],
		datalimit_: 54400,
	},
	W7: {
		code_: "W7",
		name_: "Windows 7",
		type_: "Windows Client",
		edition_: ["Ultimate", "Enterprise", "Professional", "Home Premium", "Home Basic", "Starter"],
		bit_: "64Bit",
		sp_: 1,
		physical_: ["ABA", "SCDPM", "ABS"],
		hyperv_: ["ABA", "SCDPM", "ABS"],
		vmware_: ["ABA", "SCDPM", "ABS"],
		azure_: ["ABA", "SCDPM", "ABS", "AVMB"],
		datalimit_: 1700,
	},
	WS2012R2: {
		code_: "WS2012R2",
		name_: "Windows Server 2012 R2",
		type_: "Windows Server",
		edition_: ["Datacenter", "Standard", "Essential", "Foundation"],
		bit_: "64Bit",
		sp_: 0,
		physical_: ["ABA", "SCDPM", "ABS"],
		hyperv_: ["ABA", "SCDPM", "ABS"],
		vmware_: ["ABA", "SCDPM", "ABS"],
		azure_: ["ABA", "SCDPM", "ABS", "AVMB"],
		datalimit_: 54400,
	},
	WS2012: {
		code_: "WS2012",
		name_: "Windows Server 2012",
		type_: "Windows Server",
		edition_: ["Datacenter", "Standard", "Foundation"],
		bit_: "64Bit",
		sp_: 0,
		physical_: ["ABA", "SCDPM", "ABS"],
		hyperv_: ["ABA", "SCDPM", "ABS"],
		vmware_: ["ABA", "SCDPM", "ABS"],
		azure_: ["ABA", "SCDPM", "ABS", "AVMB"],
		datalimit_: 54400,
	},
	WSS2012R2: {
		code_: "WSS2012R2",
		name_: "Windows Storage Server 2012 R2",
		type_: "Windows Server",
		edition_: ["Standard", "Workgroup"],
		bit_: "64Bit",
		sp_: 0,
		physical_: ["ABA", "SCDPM", "ABS"],
		hyperv_: ["ABA", "SCDPM", "ABS"],
		vmware_: ["ABA", "SCDPM", "ABS"],
		azure_: ["ABA", "SCDPM", "ABS", "AVMB"],
		datalimit_: 54400,
	},
	WSS2012: {
		code_: "WSS2012",
		name_: "Windows Storage Server 2012",
		type_: "Windows Server",
		edition_: ["Standard", "Workgroup"],
		bit_: "64Bit",
		sp_: 0,
		physical_: ["ABA", "SCDPM", "ABS"],
		hyperv_: ["ABA", "SCDPM", "ABS"],
		vmware_: ["ABA", "SCDPM", "ABS"],
		azure_: ["ABA", "SCDPM", "ABS", "AVMB"],
		datalimit_: 54400,
	},
	WS2008R2: {
		code_: "WS2008R2",
		name_: "Windows Server 2008 R2",
		type_: "Windows Server",
		edition_: ["Datacenter", "Standard", "Enterprise", "Foundation"],
		bit_: "64Bit",
		sp_: 1,
		physical_: ["ABA", "SCDPM", "ABS"],
		hyperv_: ["ABA", "SCDPM", "ABS"],
		vmware_: ["ABA", "SCDPM", "ABS"],
		azure_: ["ABA", "SCDPM", "ABS", "AVMB"],
		datalimit_: 1700,
	},
	WS2008: {
		code_: "WS2008",
		name_: "Windows Server 2008",
		type_: "Windows Server",
		edition_: ["Datacenter", "Standard", "Enterprise", "Foundation"],
		bit_: "64Bit",
		sp_: 2,
		physical_: ["ABA", "SCDPM", "ABS"],
		hyperv_: ["ABA", "SCDPM", "ABS"],
		vmware_: ["ABA", "SCDPM", "ABS"],
		azure_: ["ABA", "SCDPM", "ABS", "AVMB"],
		datalimit_: 1700,
	},
	LNXCOS63: {
		code_: "LNXCOS63",
		name_: "CentOS 6.3",
		type_: "Linux",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
	LNXCOS64: {
		code_: "LNXCOS64",
		name_: "CentOS 6.4 이상",
		type_: "Linux",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
	LNXDBN79: {
		code_: "LNXDBN79",
		name_: "Debian 7.9 이상",
		type_: "Linux",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
	LNXORC64: {
		code_: "LNXORC64",
		name_: "Oracle Linux 6.4 이상",
		type_: "Linux",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
	LNXORC70: {
		code_: "LNXORC70",
		name_: "Oracle Linux 7.0 이상",
		type_: "Linux",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
	LNXRHEL67: {
		code_: "LNXRHEL67",
		name_: "Red Hat Enterprise Linux 6.7 이상",
		type_: "Linux",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
	LNXRHEL71: {
		code_: "LNXRHEL71",
		name_: "Red Hat Enterprise Linux 7.1 이상",
		type_: "Linux",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
	LNXSLES11: {
		code_: "LNXSLES11",
		name_: "SUSE Linux Enterprise Server 11 SP4",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
	LNXSLES12: {
		code_: "LNXSLES12",
		name_: "SUSE Linux Enterprise Server 12 이상",
		type_: "Linux",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
	LNXOPS132: {
		code_: "LNXOPS132",
		name_: "openSUSE 13.2 이상",
		type_: "Linux",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
	LNXUBT1204: {
		code_: "LNXUBT1204",
		name_: "Ubuntu 12.04",
		type_: "Linux",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
	LNXUBT1404: {
		code_: "LNXUBT1404",
		name_: "Ubuntu 14.04",
		type_: "Linux",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
	LNXUBT1604: {
		code_: "LNXUBT1604",
		name_: "Ubuntu 16.04",
		type_: "Linux",
		edition_: [],
		bit_: "",
		sp_: 0,
		physical_: [],
		hyperv_: ["SCDPM", "ABS"],
		vmware_: [],
		azure_: ["AVMB"],
		datalimit_: 0,
	},
};


/*
OSCheckList['W10'] = ["Enterprise", "Pro", "Home"];
OSCheckList['W81'] = ["Enterprise", "Pro"];
OSCheckList['W8'] = ["Enterprise", "Pro"];
OSCheckList['W7SP1'] = ["Ultimate", "Enterprise", "Professional", "Home Premium", "Home Basic", "Starter"];
OSCheckList['WS2012R2'] = ["Datacenter", "Standard", "Essential", "Foundation"];
OSCheckList['WS2012'] = ["Datacenter", "Standard", "Foundation"];
OSCheckList['WSS2012R2'] = ["Standard", "Workgroup"];
OSCheckList['WS2008R2SP1'] = ["Datacenter", "Standard", "Enterprise", "Foundation"];
OSCheckList['WS2008SP2'] = ["Datacenter", "Standard", "Enterprise", "Foundation"];

OSCheckList['W10E'] = "Windows 10 Enterprise";
OSCheckList['W10P'] = "Windows 10 Pro";
OSCheckList['W10H'] = "Windows 10 Home";
OSCheckList['W81E'] = "Windows 8.1 Enterprise [최신 SP]";
OSCheckList['W81P'] = "Windows 8.1 Pro [최신 SP]";
OSCheckList['W8E'] = "Windows 8 Enterprise [최신 SP]";
OSCheckList['W8P'] = "Windows 8 Pro [최신 SP]";
OSCheckList['W7U'] = "Windows 7 Ultimate [최신 SP]";
OSCheckList['W7E'] = "Windows 7 Enterprise [최신 SP]";
OSCheckList['W7P'] = "Windows 7 Professional [최신 SP]";
OSCheckList['W7HP'] = "Windows 7 Home Premium [최신 SP]";
OSCheckList['W7HB'] = "Windows 7 Home Basic [최신 SP]";
OSCheckList['W7S'] = "Windows 7 Starter [최신 SP]";
OSCheckList['WS2012R2D'] = "Windows Server 2012 R2 Datacenter [최신 SP]";
OSCheckList['WS2012R2S'] = "Windows Server 2012 R2 Standard [최신 SP]";
OSCheckList['WS2012R2E'] = "Windows Server 2012 R2 Essential [최신 SP]";
OSCheckList['WS2012R2F'] = "Windows Server 2012 R2 Foundation [최신 SP]";
OSCheckList['WS2012D'] = "Windows Server 2012 Datacenter [최신 SP]";
OSCheckList['WS2012F'] = "Windows Server 2012 Foundation [최신 SP]";
OSCheckList['WS2012S'] = "Windows Server 2012 Standard [최신 SP]";
OSCheckList['WSS2012R2S'] = "Windows Storage Server 2012 R2 Standard [최신 SP]";
OSCheckList['WSS2012R2W'] = "Windows Storage Server 2012 R2 Workgroup [최신 SP]";
OSCheckList['WS2008R2DSP1'] = "Windows Server 2008 R2 Datacenter [SP1]";
OSCheckList['WS2008R2SSP1'] = "Windows Server 2008 R2 Standard [SP1]";
OSCheckList['WS2008R2ESP1'] = "Windows Server 2008 R2 Enterprise [SP1]";
OSCheckList['WS2008R2FSP1'] = "Windows Server 2008 R2 Foundation [SP1]";
OSCheckList['WS2008DSP2'] = "Windows Server 2008 Datacenter [SP2]";
OSCheckList['WS2008SSP2'] = "Windows Server 2008 Standard [SP2]";
OSCheckList['WS2008ESP2'] = "Windows Server 2008 Enterprise [SP2]";
OSCheckList['WS2008FSP2'] = "Windows Server 2008 Foundation [SP2]";
*/


var EnvCheckList = new Object();
var p_FF = "Files & Folders";
var p_VL = "Volumes";
var p_VM = "VMs";
var p_AP = "Applications";
var p_WL = "Workloads";
var p_DK = "All Disks(using PowerShell)";
var w_Az = "Azure Backup Vault";
var w_Lc = "Locally attached Disk";
var w_Tp = "Tape(On-premise Only)";

/*
	((Ref)) https://docs.microsoft.com/en-us/azure/backup/backup-introduction-to-azure-backup
*/
EnvCheckList = {
	ABA: {
		name_: "Azure Backup (MARS) Agent",
		protect_: [p_FF],
		where_: [w_Az],
		exp_: "최대 하루 3회 백업, 응용 프로그램 인식 안함, Linux 지원 안함.",
		physical_: ["Windows Client", "Windows Server"],
		hyperv_: ["Windows Client", "Windows Server"],
		vmware_: ["Windows Client", "Windows Server"],
		azure_: ["Windows Client", "Windows Server"],
	},
	SCDPM: {
		name_: "System Center DPM",
		protect_: [p_FF, p_VL, p_VM, p_AP, p_WL],
		where_: [w_Az, w_Lc, w_Tp],
		exp_: "최대 하루 2회 백업, Oracle Workload 백업 지원 안함, Linux는 Hyper-V에 호스팅된 경우에만 백업 가능, VMware VM은 DPM 2012 R2로 백업 가능.",
		physical_: ["Windows Client", "Windows Server"],
		hyperv_: ["Windows Client", "Windows Server", "Linux"],
		vmware_: ["Windows Client", "Windows Server"],
		azure_: ["Windows Client", "Windows Server"],
	},
	ABS: {
		name_: "Azure Backup Server",
		protect_: [p_FF, p_VL, p_VM, p_AP, p_WL],
		where_: [w_Az, w_Lc],
		exp_: "최대 하루 2회 백업, VMware VM/Oracle Workload 백업 지원 안함, Linux는 Hyper-V에 호스팅된 경우에만 백업 가능, 활성화 되어있는 Azure 구독 반드시 필요, Tape 백업 지원 안함, System Center License 필요 없음.",
		physical_: ["Windows Client", "Windows Server"],
		hyperv_: ["Windows Client", "Windows Server", "Linux"],
		vmware_: [],
		azure_: ["Windows Client", "Windows Server"],
	},
	AVMB: {
		name_: "Azure IaaS VM Backup",
		protect_: [p_VM, p_DK],
		where_: [w_Az],
		exp_: "최대 하루 1회 백업, Disk 수준으로 VM 복원, On-premise VM 대상이 아닌 Windows/Linux Azure VM만 지원, Agent 프로그램 설치 불필요, Backup Infrastructure가 필요없는 Fabric 수준 백업.",
		physical_: [],
		hyperv_: [],
		vmware_: [],
		azure_: ["Windows Client", "Windows Server", "Linux"],
	},
};



function create_OSCheckList(obj) {
	for (var k in OSCheckList) {
		obj.append('<option value="'+k+'">'+OSCheckList[k]+'</option>\r\n');
	}
}

function num_format(obj) {
	var ttt = obj.value;
	
//jQuery Number Plugin 사용,
	obj.value = $.number(ttt);
	return;

//자체 number_format 함수 구현,
	//"0"으로 시작할 경우 예외처리,
	if(parseInt(ttt.substr(0,1)) == 0) {
		ttt = ttt.substr(1);
	}
	if(ttt < 1000) {
		obj.value = ttt;
	}
	else {
		var ttt_s = ttt.split(",").join("");
		//console.log("ttt_s: "+ttt_s);
		var ttt_l = (ttt_s+"").length;
		//console.log("ttt_l: "+ttt_l);
		var rst = new Array(); //결과 배열
		var tmp = ttt_s;
		for(var i = 1; i < (ttt_l / 3); i++) {
			/* 숫자형으로 변환 시, 0으로 시작하는 경우 오류 발생
			rst[0] = tmp % 1000;
			rst.unshift(parseInt(tmp / 1000));
			*/
			rst[0] = tmp.substr(-3);
			rst.unshift(tmp.substr(0,tmp.length-3));
			tmp = rst[0];
			console.log(i+")-->"+rst);
		}
		obj.value = rst;
	}
	/*
	var reg = /(^[+-]?\d+)(\d{3})/; 
	var x = obj.value.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');
	
	//var x = obj.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	*/
	
}

//작동을 안하네...
function set_cnt_to_disk(_cnt){
	var div_instance = $(".div_instance[cnt='"+_cnt+"']");
	div_instance.find(".disk_volume").attr('cnt', _cnt);
	//$(".div_instance[cnt='"+cnt+"']").find(".disk_volume").attr('cnt') = cnt;
}

//select box 초기화,
function init_selectbox(obj){
	obj.find("option").each(function(){
		if($(this).val() != "default") {
			$(this).remove();
		}
	});
}

//계산하기,
function calc_price(){
	//계산 영역 html 초기화,
	$("#div_backup_calc").html('');

	var _cnt = 0;
	var _block = new Object();
	var _diskblock = new Object();
	var _voltotal = 0;
	var _volval = 0;
	$(".div_instance").each(function(){
		_block = $(this);
		_cnt = _block.attr("cnt"); //console.log("Block"+_cnt+" >");

		//volume 용량 변수 초기화,
		_voltotal = 0;
		_volval = 0;
		_block.find(".disk_volume").each(function(){
			_diskblock = $(this);
			_volval = _diskblock.val().replace(/,/g , "");
			if(_volval.trim() != "") {
				_volval = parseInt(_volval);
				_voltotal += _volval;
			}
			else {
				//console.log(" - "+_diskblock.attr('name')+" 내용 없음> "+_volval);
			}
		});

		$.ajax({
		    type: 'post',
		    url: '/ajax_calc.php',
		    data: {
		    	action: 'calculate',
		    	instance_name: _block.find("input[name='instance']").val(),
		    	cnt: _cnt,
		    	volume_total: _voltotal,
		    	oscode: _block.find("select[name='os']").val(),
		    	edition: _block.find("select[name='edition']").val(),
		    	env: _block.find("select[name='env']").val(),
		    },
		    success: function (data) {
		        //console.log("*** ajax 결과 : "+data);
		        $("#div_backup_calc").append(data);
		    },
		    error: function (request, status, error) {
		        console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
		    }
		});

	});
	

}