<?php
$t_instance = "
<table border=1 style=\"border-collapse:collapse; border:1px gray solid;\">
	<tr>
		<th>인스턴스명</th>
		<th>OS</th>
		<th>볼륨정보</th>
	</tr>
	<tr>
		<td>
			<input type=\"text\" name=\"instance\" style=\"font-size:12pt; color:#ff0000; font-weight:bold; border: 1px solid #ff0000; height:30px; padding:3px; \" />
		</td>
		<td>
			<select name=\"os\">
				<option value=\"W10E\">Windows 10 Enterprise</option>
				<option value=\"W10P\">Windows 10 Pro</option>
				<option value=\"W10H\">Windows 10 Home</option>
			</select>
			<select name=\"bits\">
				<option value=\"64b\" selected=\"selected\">64Bit</option>
				<option value=\"32b\">32Bit</option>
			</select>
		</td>

	</tr>
</table>
";

?>