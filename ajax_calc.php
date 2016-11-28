<?php
/*
$_POST {
	instance_name : 인스턴스 명,
	cnt : 인스턴스 구분 번호,
	volume_total : 인스턴스 디스크볼륨 총량,
}
*/

//echo "<pre>".print_r($_POST, 1)."</pre>";

$f_storage = Array();
$f_protect = Array();

class PricingClass
{
	public $standard = Array(50, 500);
	public $protect = Array(6000, 12000);
	public $storage = Array('LRS'=>18, 'GRS'=>36); //https://azure.microsoft.com/ko-kr/pricing/details/storage/blobs/ --> Blob Storage[Cool]

}

$p_obj = new PricingClass();
//인스턴스 보호 비용
$p_protect = 0; 

if($_POST['volume_total'] <= 0){
	//echo "<font color='red'>정확한 용량을 입력해주세요.</font>";
	$p_protect = 0;
}
elseif($_POST['volume_total'] <= $p_obj->standard[0]){
	$p_protect = $p_obj->protect[0];
}
elseif($_POST['volume_total'] <= $p_obj->standard[1]){
	$p_protect = $p_obj->protect[1];
}
else{
	$p_protect = $p_obj->protect[1] * ceil($_POST['volume_total'] / $p_obj->standard[1]);
}

//저장소 비용
$p_storage = array(
	'LRS' => 0,
	'GRS' => 0
	); 

if($_POST['volume_total'] <= 0){
	//echo "<font color='red'>정확한 용량을 입력해주세요.</font>";
}
else{
	$p_storage['LRS'] = $p_obj->storage['LRS'] * $_POST['volume_total'];
	$p_storage['GRS'] = $p_obj->storage['GRS'] * $_POST['volume_total'];
}
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
		</div>
		<div class="GRS price_option" style="display: none;">
			지역 중복 저장소(GRS) 사용료 : <span class="price"><?php echo number_format($p_storage['GRS']); ?>원</span>/월
		</div>
	</div>
	<div class="total_price">
		<div class="LRS price_option" style="display: block;">
			약 <span class="price"><?php echo number_format(ceil(($p_protect + $p_storage['LRS'])/1000)*1000); ?>원</span>/월
		</div>
		<div class="GRS price_option" style="display: none;">
			약 <span class="price"><?php echo number_format(ceil(($p_protect + $p_storage['GRS'])/1000)*1000); ?>원</span>/월
		</div>
	</div>

</div>

