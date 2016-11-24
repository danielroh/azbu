<table class="instance" border=0>
	<tr>
		<th>인스턴스명</th>
		<td>
			<input type="text" name="instance" style="" />
			<input type="button" id="del_instance_table" value="인스턴스 삭제" />
		</td>
		
	</tr>
	<tr>
		<th>운영체제</th>
		<td>
			<select name="os">
				<option selected="selected" value="default">OS Version</option>
				<optgroup label="Windows Client">
					<option value="W10">Windows 10</option>
					<option value="W81">Windows 8.1</option>
					<option value="W8">Windows 8</option>
					<option value="W7">Windows 7</option>
					<!--option value="W10E">Windows 10 Enterprise</option>
					<option value="W10P">Windows 10 Pro</option>
					<option value="W10H">Windows 10 Home</option>
					<option value="W81E">Windows 8.1 Enterprise [최신 SP]</option>
					<option value="W81P">Windows 8.1 Pro [최신 SP]</option>
					<option value="W8E">Windows 8 Enterprise [최신 SP]</option>
					<option value="W8P">Windows 8 Pro [최신 SP]</option>
					<option value="W7U">Windows 7 Ultimate [최신 SP]</option>
					<option value="W7E">Windows 7 Enterprise [최신 SP]</option>
					<option value="W7P">Windows 7 Professional [최신 SP]</option>
					<option value="W7HP">Windows 7 Home Premium [최신 SP]</option>
					<option value="W7HB">Windows 7 Home Basic [최신 SP]</option>
					<option value="W7S">Windows 7 Starter [최신 SP]</option-->
				</optgroup>
				<optgroup label="Windows Server">
					<option value="WS2012R2">Windows Server 2012 R2</option>
					<option value="WS2012">Windows Server 2012</option>
					<option value="WSS2012R2">Windows Storage Server 2012</option>
					<option value="WS2008R2">Windows Server 2008 R2</option>
					<option value="WS2008">Windows Server 2008</option>
					<!--option value="WS2012R2D">Windows Server 2012 R2 Datacenter [최신 SP]</option>
					<option value="WS2012R2S">Windows Server 2012 R2 Standard [최신 SP]</option>
					<option value="WS2012R2E">Windows Server 2012 R2 Essential [최신 SP]</option>
					<option value="WS2012R2F">Windows Server 2012 R2 Foundation [최신 SP]</option>
					<option value="WS2012D">Windows Server 2012 Datacenter [최신 SP]</option>
					<option value="WS2012F">Windows Server 2012 Foundation [최신 SP]</option>
					<option value="WS2012S">Windows Server 2012 Standard [최신 SP]</option>
					<option value="WSS2012R2S">Windows Storage Server 2012 R2 Standard [최신 SP]</option>
					<option value="WSS2012R2W">Windows Storage Server 2012 R2 Workgroup [최신 SP]</option>
					<option value="WS2008R2DSP1">Windows Server 2008 R2 Datacenter [SP1]</option>
					<option value="WS2008R2SSP1">Windows Server 2008 R2 Standard [SP1]</option>
					<option value="WS2008R2ESP1">Windows Server 2008 R2 Enterprise [SP1]</option>
					<option value="WS2008R2FSP1">Windows Server 2008 R2 Foundation [SP1]</option>
					<option value="WS2008DSP2">Windows Server 2008 Datacenter [SP2]</option>
					<option value="WS2008SSP2">Windows Server 2008 Standard [SP2]</option>
					<option value="WS2008ESP2">Windows Server 2008 Enterprise [SP2]</option>
					<option value="WS2008FSP2">Windows Server 2008 Foundation [SP2]</option-->
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
				<!--optgroup label="Azure Linux VM - CentOS">
					<option value="LNXCOS63">CentOS 6.3</option>
					<option value="LNXCOS64">CentOS 6.4</option>
					<option value="LNXCOS65">CentOS 6.5</option>
					<option value="LNXCOS66">CentOS 6.6</option>
					<option value="LNXCOS67">CentOS 6.7</option>
					<option value="LNXCOS68">CentOS 6.8</option>
					<option value="LNXCOS70">CentOS 7.0</option>
					<option value="LNXCOS71">CentOS 7.1</option>
					<option value="LNXCOS72">CentOS 7.2</option>
				</optgroup>
				<optgroup label="Azure Linux VM - Debian">
					<option value="LNXDBN79">Debian 7.9</option>
				</optgroup-->
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
			<input type="text" class="disk_volume" name="disk1" placeholder="0" onKeyup="num_format(this);" /> GB 미만
		</td>
	</tr>
	<tr>
		<td>
			Disk2:
			<input type="text" class="disk_volume" name="disk2" placeholder="0" onKeyup="num_format(this);" /> GB 미만
		</td>
	</tr>
	<tr>
		<td>
			Disk3:
			<input type="text" class="disk_volume" name="disk3" placeholder="0" onKeyup="num_format(this);" /> GB 미만
		</td>
	</tr>
	<tr>
		<td>
			Disk4:
			<input type="text" class="disk_volume" name="disk4" placeholder="0" onKeyup="num_format(this);" /> GB 미만
		</td>
	</td>

</table>

