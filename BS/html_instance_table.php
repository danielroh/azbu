
<div class="card-header">
    <input type="text" name="instance" class="form-control" placeholder="인스턴스 이름" style="" />
    <input type="button" name="del_instance_card" class="btn btn-danger btn-md" value="인스턴스 삭제" />
</div>
<div class="card-block">
    <h4 class="card-title">운영체제</h4>
    <p class="card-text">
        <select name="os" class="col-lg-12" data-live-search="true">
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
    </p>
    <button type="button" class="btn btn-secondary btn-lg">Large</button>
</div>


<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" href="#home1" role="tab" data-toggle="tab">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#profile1" role="tab" data-toggle="tab">Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#messages1" role="tab" data-toggle="tab">Messages</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#settings1" role="tab" data-toggle="tab">Settings</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <br>
    <div role="tabpanel" class="tab-pane active" id="home1">
        <h4>Home</h4>
        <p>
            1. These Bootstrap 4 Tabs work basically the same as the Bootstrap 3.x tabs.
            <br>
            <br>
            <button class="btn btn-primary-outline btn-lg">Wow</button>
        </p>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile1">
        <h4>Pro</h4>
        <p>
            2. Tabs are helpful to hide or collapse some addtional content.
        </p>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages1">
        <h4>Messages</h4>
        <p>
            3. You can really put whatever you want into the tab pane.
        </p>
    </div>
    <div role="tabpanel" class="tab-pane" id="settings1">
        <h4>Settings</h4>
        <p>
            4. Some of the Bootstrap 3.x components like well and panel have been dropped for the new card component.
        </p>
    </div>
</div>

<div class="clearfix"></div>

<div class="card card-default card-block">
    <ul id="tabsJustified" class="nav nav-tabs nav-justified">
        <li class="nav-item">
            <a class="nav-link active" href="" data-target="#tab1" data-toggle="tab" aria-expanded="true">List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="" data-target="#tab2" data-toggle="tab" aria-expanded="false">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="" data-target="#tab3" data-toggle="tab" aria-expanded="false">More</a>
        </li>
    </ul>
    <!--/tabs-->
    <br>
    <div id="tabsJustifiedContent" class="tab-content">
        <div class="tab-pane fade active in" id="tab1" aria-expanded="true">
            <div class="list-group">
                <a href="" class="list-group-item"><span class="pull-right label label-success">51</span> Home Link</a>
                <a href="" class="list-group-item"><span class="pull-right label label-success">8</span> Link 2</a>
                <a href="" class="list-group-item"><span class="pull-right label label-success">23</span> Link 3</a>
                <a href="" class="list-group-item text-muted">Link n..</a>
            </div>
        </div>
        <div class="tab-pane fade" id="tab2" aria-expanded="false">
            <div class="row">
                <div class="col-sm-7">
                    <h4>Profile Section</h4>
                    <p>Imagine creating this simple user profile inside a tab card.</p>
                </div>
                <div class="col-sm-5"><img src="//placehold.it/170" class="pull-right img-responsive img-rounded"></div>
            </div>
            <hr>
            <a href="javascript:;" class="btn btn-info btn-block">Read More Profiles</a>
            <div class="spacer5"></div>
        </div>
        <div class="tab-pane fade" id="tab3" aria-expanded="false">
            <div class="list-group">
                <a href="" class="list-group-item"><span class="pull-right label label-info label-pill">44</span> <code>.panel</code> is now <code>.card</code></a>
                <a href="" class="list-group-item"><span class="pull-right label label-info label-pill">8</span> <code>.nav-justified</code> is deprecated</a>
                <a href="" class="list-group-item"><span class="pull-right label label-info label-pill">23</span> <code>.badge</code> is now <code>.label-pill</code></a>
                <a href="" class="list-group-item text-muted">Message n..</a>
            </div>
        </div>
    </div>
    <!--/tabs content-->
</div><!--/card-->

<div id="accordion" role="tablist" aria-multiselectable="true">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
    </div>
    <div id="collapseOne" class="card-block collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
         <p>This is a Bootstrap 4 accordion that uses the <code>.card</code> classes instead of <code>.panel</code>. The single-open section aspect is not working because the parent option (dependent on .panel) has not yet been finalized in BS 4 alpha. </p>
    </div>
    <div class="card-header" role="tab" id="headingTwo">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
    </div>
    <div id="collapseTwo" class="card-block collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
         <p>Just like it's predecesor, Bootstrap 4 is mobile-first so that you start by designing for smaller devices such as smartphones and tablets, then proceed to laptop and desktop layouts.</p>
    </div>
    <div class="card-header" role="tab" id="headingThree">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
    </div>
    <div id="collapseThree" class="card-block collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
         <p>Bootstrap employs a handful of important global styles and settings that you’ll need to be aware of when using it, all of which are almost exclusively geared towards the normalization of cross browser styles.</p>
    </div>
  </div>
</div>
