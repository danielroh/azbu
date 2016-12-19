<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<LINK rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
    <LINK rel="stylesheet" type="text/css" href="./css/font-awesome.min.css" />
    <!--LINK rel="stylesheet" type="text/css" href="./css/bootstrap-select-1.12.1.css" /-->
	<LINK rel="stylesheet" type="text/css" href="./css/common.css" />
</head>
<body class="container-fluid">
	<div id="div_notice" class="row">
		<ul>
			<li>
				Linux환경 Backup은 반드시 상세 검증이 필요합니다. 
			</li>
			<li>
				Disk 용량 정보는 입력값 "미만" 기준입니다. (500GB 입력 시, 백업하려는 데이터는 500GB 미만.)
			</li>
			<li>
				증분 백업이므로 저장소 비용은 조금씩 늘어날 수 있습니다.
			</li>
			<!--li>
				On-premise&lt;-&gt;Azure 및 Workload&lt;-&gt;Azure 데이터의 원활한 보호를 위해 다음 URL과 통신하도록 방화벽을 허용하는 것이 좋습니다.
				<ul>
					<li>www.msftncsi.com</li>
					<li>*.microsoft.com</li>
					<li>*.WindowsAzure.com</li>
					<li>*.microsoftonline.com</li>
					<li>*.windows.net</li>
				</ul>
			</li-->
		</ul>

	</div>
	<div id="div_function_buttons" class="row">
		<div class="div_for_margin col-xs-6 col-md-6 col-lg-6">
			<input type="button" id="add_instance_card" class="btn btn-primary btn-lg top_button" value="인스턴스 추가" />
		</div>
		<div class="div_for_margin col-xs-6 col-md-6 col-lg-6">
			<input type="button" id="calc" class="btn btn-success btn-lg top_button" value="계산하기" />
		</div>
	</div>
	<div id="wrapper" class="row">
		<div id="div_instance_list" class="col-xs-12 col-md-6 col-lg-6">
			<div class="div_instance row" cnt="0">
				<!--// -->
			</div>
		</div>
		<div id="div_backup_calc" class="col-xs-12 col-md-6 col-lg-6">
			<!--// -->
		</div>
	</div>
	<span id="hidden"></span>

	<SCRIPT type="text/javascript" src="./js/jquery-3.1.1.min.js"></SCRIPT>
	<SCRIPT type="text/javascript" src="./js/jquery.number.min.js"></SCRIPT>
	<!--SCRIPT type="text/javascript" src="./js/bootstrap-select-1.12.1.js"></SCRIPT-->
	<SCRIPT type="text/javascript" src="./js/bootstrap.min-3.3.7.js"></SCRIPT>
	<SCRIPT type="text/javascript" src="./js/check_values.js"></SCRIPT>
	<SCRIPT type="text/javascript">
	/*
	 * 작성자 : hmroh@tangunsoft.com
	 */
	$(document).ready(function() {

		//기본 인스턴스 블록 호출,
		$("#div_instance_list").find(".div_instance[cnt='0']").load("./html_instance_card.php");
		
		//인스턴스 추가 버튼,
		$("#add_instance_card").on("click", function(){
			var cnt = 0;
			$(".div_instance").each(function(){
				if(parseInt($(this).attr('cnt')) >= cnt){
					cnt = parseInt($(this).attr('cnt'));
				}
			});
			cnt++;
			$("#div_instance_list").append("<div class=\"div_instance row\" cnt=\""+cnt+"\">\r\n</div>");
			$(".div_instance[cnt='"+cnt+"']").load("./html_instance_card.php");
		});

		//인스턴스 삭제 버튼,
		$("#div_instance_list").on("click", ".del_instance_card", function(){
			if(confirm("이 인스턴스를 삭제합니까?")){
				$(this).closest(".div_instance").remove();
				//계산된 내용이 있으면 재계산,
				if($("#div_backup_calc").find(".calc_instance").length > 0){
					calc_price();
				}
			}
		});

		//계산 버튼,
		$("#calc").on("click", function(){
			calc_price();
		});

		//ref>> https://silviomoreto.github.io/bootstrap-select/
		


		//OS 선택 시 이벤트,
		$("#div_instance_list").on("change", "select[name='os']", function(){ 
			var this_card = $(this).closest(".div_instance ");
			var os = $(this).val();

			//OS Edition 선택박스 초기화,
			init_selectbox(this_card.find("select[name='edition']"));

			$.ajax({
				type: 'post',
				url: '/ajax_calc.php',
				data: {
					action: 'get_editions',
					oscode: os,
				},
				dataType: 'json',
				cache: false,
				success: function (data) {
					/*
					var ttt = data;
			        console.log("*** ajax 결과 : "+ttt+"("+(typeof ttt)+")");
			        */
			        if(data.length > 0) {
			        	//OS Edition 선택박스 Option 블록 생성,
				        for(var k in data) {
				        	if('' != data[k]) {
					        	this_card
								.find("select[name='edition']")
								.append("<option value=\""+k+"\">"+data[k]+"</option>");
							}
				        }
				    }
			    },
			    error: function (request, status, error) {
			    	console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
			    }
			});
		});
/*
		//저장소 타입 Radio 버튼,
		$("#div_backup_calc").on("click", "input[type='radio']", function(){
			//reset radio button,
			var ci_block = $(this).closest(".calc_instance");
			ci_block.find("input[name='storage_type']").removeAttr("checked");
			ci_block.find(".calc_left").removeClass("selected_div");
			ci_block.find(".calc_right").removeClass("selected_div");
			
			var s_type = $(this).val();
			ci_block.find(".price_option").css("display", "none");
			ci_block.find("div."+s_type).css("display", "block");
			$(this).parent().addClass("selected_div");
		});
*/

	});
	</SCRIPT>
</body>
</html>