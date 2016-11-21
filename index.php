<!DOCTYPE html>
<html>
<head>
	<LINK rel="stylesheet" type="text/css" href="./css/common.css">
	<SCRIPT type="text/javascript" src="./js/jquery-3.1.1.min.js"></SCRIPT>
	<SCRIPT type="text/javascript" src="./js/check_values.js"></SCRIPT>
</head>
<body>

	<div id="div_notice" style="border: 2px solid red;">
		<ul>
			<li>
				Linux환경 Backup은 반드시 상세 검증이 필요합니다. 
			</li>
		</ul>

	</div>

	<div id="div_instance_list">
		<input type="button" id="add_instance_table" value="인스턴스 추가" />
		<br />
		<div class="div_instance" cnt="0">
			<!--// -->
		</div>
	</div>

	<div id="div_backup_calc">

	</div>

	<SCRIPT type="text/javascript">
	/*
	 * 작성자 : hmroh@tangunsoft.com
	 */
	$(document).ready(function(){
		var ttt = "1234564";


		$("#div_instance_list").find(".div_instance[cnt='0']").load("./html_instance_table.php");
		set_cnt_to_disk(0);

		$("#add_instance_table").click(function(){
			var cnt = $(".div_instance").length;
			$("#div_instance_list").append("<div class=\"div_instance\" cnt=\""+cnt+"\">\r\n</div>");
			$(".div_instance[cnt='"+cnt+"']").load("./html_instance_table.php");
			set_cnt_to_disk(cnt);
		});

		$(".disk_volume").focusout(function() {
			console.log($(this).value);
		});

	});
	</SCRIPT>

</body>
</html>