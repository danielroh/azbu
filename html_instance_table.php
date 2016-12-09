<table class="instance" border=0>
	<tr>
		<th>인스턴스명</th>
		<td colspan=2>
			<input type="text" name="instance" style="" />
			<input type="button" class="del_instance_table" value="인스턴스 삭제" />
		</td>
		
	</tr>
	<tr>
		<th>운영체제</th>
		<td colspan=2>
			<select name="os">
				<option selected="selected" value="default">OS Version</option>
				<optgroup label="Windows Client">
					<option value="W10">Windows 10</option>
					<option value="W81">Windows 8.1</option>
					<option value="W8">Windows 8</option>
					<option value="W7">Windows 7</option>
				</optgroup>
				<optgroup label="Windows Server">
					<option value="WS2012R2">Windows Server 2012 R2</option>
					<option value="WS2012">Windows Server 2012</option>
					<option value="WSS2012R2">Windows Storage Server 2012</option>
					<option value="WS2008R2">Windows Server 2008 R2</option>
					<option value="WS2008">Windows Server 2008</option>
				</optgroup>
				<optgroup label="Linux">
					<option value="LNXCOS63">CentOS 6.3</option>
					<option value="LNXCOS64">CentOS 6.4 이상</option>
					<option value="LNXDBN79">Debian 7.9 이상</option>
					<option value="LNXORC64">Oracle Linux 6.4 이상</option>
					<option value="LNXORC70">Oracle Linux 7.0 이상</option>
					<option value="LNXRHEL67">Red Hat Enterprise Linux 6.7 이상</option>
					<option value="LNXRHEL71">Red Hat Enterprise Linux 7.1 이상</option>
					<option value="LNXSLES11">SUSE Linux Enterprise Server 11 SP4</option>
					<option value="LNXSLES12">SUSE Linux Enterprise Server 12 이상</option>
					<option value="LNXOPS132">openSUSE 13.2 이상</option>
					<option value="LNXUBT1204">Ubuntu 12.04</option>
					<option value="LNXUBT1404">Ubuntu 14.04</option>
					<option value="LNXUBT1604">Ubuntu 16.04</option>
				</optgroup>
			</select>
			<br />
			<select name="edition">
				<option value="default" selected="selected">OS Edition</option>
			</select>
			<select name="env">
				<option value="default" selected="selected">환경 선택</option>
				<option value="physical">On-premise - Physical Machine</option>
				<option value="hyperv">On-premise - Hyper-V VM</option>
				<option value="vmware">On-premise - VMware VM</option>
				<option value="azure">Azure - IaaS VM</option>
			</select>
		</td>
	</tr>
	<tr>
		<th rowspan=4>볼륨정보</th>
		<td>
			Disk1:
			<input type="text" class="disk_volume" name="disk1" placeholder="0" onKeyup="num_format(this);" /> GB
		</td>
		<td>
			Disk2:
			<input type="text" class="disk_volume" name="disk2" placeholder="0" onKeyup="num_format(this);" /> GB
		</td>
	</tr>
	<tr>
		<td>
			Disk3:
			<input type="text" class="disk_volume" name="disk3" placeholder="0" onKeyup="num_format(this);" /> GB
		</td>
		<td>
			Disk4:
			<input type="text" class="disk_volume" name="disk4" placeholder="0" onKeyup="num_format(this);" /> GB
		</td>
	</td>

</table>

