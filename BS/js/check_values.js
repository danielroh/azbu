


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