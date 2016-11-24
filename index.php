<!DOCTYPE html>
<html>
<head>
	<LINK rel="stylesheet" type="text/css" href="./css/common.css">
	<SCRIPT type="text/javascript" src="./js/jquery-3.1.1.min.js"></SCRIPT>
	<SCRIPT type="text/javascript" src="./js/jquery.number.min.js"></SCRIPT>
	<SCRIPT type="text/javascript" src="./js/check_values.js"></SCRIPT>
</head>
<body>

	<div id="div_notice" style="border: 2px solid red;">
		<ul>
			<li>
				Linux환경 Backup은 반드시 상세 검증이 필요합니다. 
			</li>
			<li>
				On-premise&lt-&gtAzure 및 Workload&lt-&gtAzure 데이터의 원활한 보호를 위해 다음 URL과 통신하도록 방화벽을 허용하는 것이 좋습니다.
				<ul>
					<li>www.msftncsi.com</li>
					<li>*.microsoft.com</li>
					<li>*.WindowsAzure.com</li>
					<li>*.microsoftonline.com</li>
					<li>*.windows.net</li>
				</ul>
			</li>
		</ul>

	</div>

	<div id="div_instance_list">
		<input type="button" id="add_instance_table" value="인스턴스 추가" />
		<input type="button" id="calc" onClick="calc_price();" value="계산하기" />
		<br />
		<div class="div_instance" cnt="0">
			<!--// -->
		</div>
	</div>

	<div id="div_backup_calc">

	</div>
	
	<span id="hidden"></span>

	<SCRIPT type="text/javascript">
	/*
	 * 작성자 : hmroh@tangunsoft.com
	 */
	$(document).ready(function() {
		
		$("#div_instance_list").find(".div_instance[cnt='0']").load("./html_instance_table.php");
		set_cnt_to_disk(0);
		$("span#hidden").load("./script_instance_table.php");

		$("#add_instance_table").on("click", function(){
			//충돌 방지를 위해 기존 스크립트 삭제, ----> 이거 해도 중복 발생함..다른 방법 찾아볼 것.
			$("#div_instance_list").find("script").remove();

			var cnt = $(".div_instance").length;
			$("#div_instance_list").append("<div class=\"div_instance\" cnt=\""+cnt+"\">\r\n</div>");
			$(".div_instance[cnt='"+cnt+"']").load("./html_instance_table.php");
			set_cnt_to_disk(cnt);
			$("span#hidden").load("./script_instance_table.php");
		});
		/*
		$(".disk_volume").focusout(function() {
			console.log($(this).value);
		});
		*/
	});
	</SCRIPT>

</body>
</html>