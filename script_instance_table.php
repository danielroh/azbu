
<SCRIPT type="text/javascript">
var script_on = true;
$(document).ready(function(){
	//OS 선택 시 이벤트,
	$("select[name='os']").on("change", function(){ //console.log('duplication check');
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