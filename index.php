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
				On-premise&lt;-&gt;Azure 및 Workload&lt;-&gt;Azure 데이터의 원활한 보호를 위해 다음 URL과 통신하도록 방화벽을 허용하는 것이 좋습니다.
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

		//기본 인스턴스 블록 호출,
		$("#div_instance_list").find(".div_instance[cnt='0']").load("./html_instance_table.php");
		set_cnt_to_disk(0);

		//인스턴스 추가 버튼,
		$("#add_instance_table").on("click", function(){
			var cnt = $(".div_instance").length;
			$("#div_instance_list").append("<div class=\"div_instance\" cnt=\""+cnt+"\">\r\n</div>");
			$(".div_instance[cnt='"+cnt+"']").load("./html_instance_table.php");
			set_cnt_to_disk(cnt);
		});

		//OS 선택 시 이벤트,
		$("#div_instance_list").on("change", "select[name='os']", function(){ 
			//console.log('duplication check');
			var this_table = $(this).parent().parent().parent().parent();
			var os = $(this).val();

			//선택박스 초기화,
			init_selectbox($(this).parent().parent().parent().parent().find("select[name='edition']"));

			//OS Edition Option블록 생성,
			for(var k in OSCheckList[os].edition_) {
				this_table
					.find("select[name='edition']")
					.append("<option value=\""+k+"\">"+OSCheckList[os].edition_[k]+"</option>");
			}

		});
	});
	</SCRIPT>

</body>
</html>