


function num_format(obj) {
	var objVal = obj.value;
	
//jQuery Number Plugin 사용,
	obj.value = $.number(objVal);
	return;

//자체 number_format 함수 구현,
	//"0"으로 시작할 경우 예외처리,
	if(parseInt(objVal.substr(0,1)) == 0) {
		objVal = objVal.substr(1);
	}
	if(objVal < 1000) {
		obj.value = objVal;
	}
	else {
		var objVal_onlyNum = objVal.split(",").join("");
		//console.log("objVal_onlyNum: "+objVal_onlyNum);
		var objVal_len = (objVal_onlyNum+"").length;
		//console.log("objVal_len: "+objVal_len);
		var rst = new Array(); //결과 배열
		var vNum = objVal_onlyNum;
		for(var i = 1; i < (objVal_len / 3); i++) {
			/* 숫자형으로 변환 시, 0으로 시작하는 경우 오류 발생
			rst[0] = vNum % 1000;
			rst.unshift(parseInt(vNum / 1000));
			*/
			rst[0] = vNum.substr(-3);
			rst.unshift(vNum.substr(0,vNum.length-3));
			vNum = rst[0];
			console.log(i+")-->"+rst);
		}
		obj.value = rst;
	}
	
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