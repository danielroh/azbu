
<div class="instance-header">
    <input type="text" name="instance" class="form-control" placeholder="인스턴스 이름" style="" />
    <!--input type="button" name="del_instance_card" class="btn btn-danger btn-md" value="인스턴스 삭제" /-->
    <img class="del_instance_card" src="./image/icon/btn_close.png" />
</div>
<div class="instance-block">
    <div class="instance-text env_area">
        <div class="div_for_margin col-xs-12">
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
        </div>
        <div class="div_for_margin col-xs-12 col-md-5 col-lg-5">
            <select name="edition">
                <option value="default" selected="selected">OS Edition</option>
            </select>
        </div>
        <div class="div_for_margin col-xs-12 col-md-7 col-lg-7">
            <select name="env">
                <option value="default" selected="selected">환경 선택</option>
                <option value="physical">On-premise - Physical Machine</option>
                <option value="hyperv">On-premise - Hyper-V VM</option>
                <option value="vmware">On-premise - VMware VM</option>
                <option value="azure">Azure - IaaS VM</option>
            </select>
        </div>
    </div>
    <div class="instance-text volume_area">
        <div class="div_for_margin col-xs-6 col-md-6 col-lg-3">
            Disk1 (단위: GB)
            <input type="text" class="form-control disk_volume" name="disk1" placeholder="0" onKeyup="num_format(this);" />
        </div>
        <div class="div_for_margin col-xs-6 col-md-6 col-lg-3">
            Disk2 (단위: GB)
            <input type="text" class="form-control disk_volume" name="disk2" placeholder="0" onKeyup="num_format(this);" />
        </div>
        <div class="div_for_margin col-xs-6 col-md-6 col-lg-3">
            Disk3 (단위: GB)
            <input type="text" class="form-control disk_volume" name="disk3" placeholder="0" onKeyup="num_format(this);" />
        </div>
        <div class="div_for_margin col-xs-6 col-md-6 col-lg-3">
            Disk4 (단위: GB)
            <input type="text" class="form-control disk_volume" name="disk4" placeholder="0" onKeyup="num_format(this);" />
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
