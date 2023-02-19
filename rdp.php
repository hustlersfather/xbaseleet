<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>




</div>
<div class="row m-3 pt-1" style="color: var(--font-color);">
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
<select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All Countries</option>
<option value="Australia">Australia</option><option value="Belgium">Belgium</option><option value="Canada">Canada</option><option value="China">China</option><option value="France">France</option><option value="Germany">Germany</option><option value="Hong Kong">Hong Kong</option><option value="Ireland">Ireland</option><option value="Norway">Norway</option><option value="Puerto Rico">Puerto Rico</option><option value="Singapore">Singapore</option><option value="South Africa">South Africa</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Taiwan">Taiwan</option><option value="Thailand">Thailand</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option> </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="hosting" style="margin-bottom: 10px; margin-top: 5px">Hosting :</label>
<select name="detect_hosting" id="detect_hosting" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
<option value="2020 Communications LLC">2020 Communications LLC</option><option value="AARON CONCRETE CONTRACTOR">AARON CONCRETE CONTRACTOR</option><option value="Amazon Technologies Inc. (AMAZON)">Amazon Technologies Inc. (AMAZON)</option><option value="Amazon Technologies Inc. (EC2)">Amazon Technologies Inc. (EC2)</option><option value="AT&T Services, Inc.">AT&T Services, Inc.</option><option value="BRET ACHTENAGEN'S SEASONAL SERVICES">BRET ACHTENAGEN'S SEASONAL SERVICES</option><option value="British Telecommunications PLC">British Telecommunications PLC</option><option value="CABLE ONE, INC.">CABLE ONE, INC.</option><option value="Charter Communications">Charter Communications</option><option value="Charter Communications Inc">Charter Communications Inc</option><option value="Chunghwa Telecom Co., Ltd.">Chunghwa Telecom Co., Ltd.</option><option value="Cologix, Inc">Cologix, Inc</option><option value="Comcast">Comcast</option><option value="Cox Communications Inc.">Cox Communications Inc.</option><option value="Fasthosts Internet Limited">Fasthosts Internet Limited</option><option value="Fusion Voice and Data Corp.">Fusion Voice and Data Corp.</option><option value="iiNet Limited">iiNet Limited</option><option value="Illinois Century Network">Illinois Century Network</option><option value="InfraCom Managed Services AB">InfraCom Managed Services AB</option><option value="Kalamazoo RESA">Kalamazoo RESA</option><option value="KOOKS HEADERS">KOOKS HEADERS</option><option value="Liberty Global B.V.">Liberty Global B.V.</option><option value="METALS ENGINEERING INC">METALS ENGINEERING INC</option><option value="Microsoft">Microsoft</option><option value="Microsoft Limited">Microsoft Limited</option><option value="MICROSOFT-CORP-MSN-AS-BLOCK">MICROSOFT-CORP-MSN-AS-BLOCK</option><option value="MIINC LP">MIINC LP</option><option value="MOREY'S DOWNTOWN BOOKS">MOREY'S DOWNTOWN BOOKS</option><option value="NTS Communications, LLC">NTS Communications, LLC</option><option value="Otava, LLC">Otava, LLC</option><option value="Ponce Site- Choice Cable TV">Ponce Site- Choice Cable TV</option><option value="Proximus NV">Proximus NV</option><option value="Rogers Communications Canada Inc.">Rogers Communications Canada Inc.</option><option value="Scaleway">Scaleway</option><option value="Shaw Communications Inc.">Shaw Communications Inc.</option><option value="TCC Technology Co., Ltd.">TCC Technology Co., Ltd.</option><option value="TELEFONICA DE ESPANA S.A.U.">TELEFONICA DE ESPANA S.A.U.</option><option value="Telia Company AB">Telia Company AB</option><option value="Tencent Cloud">Tencent Cloud</option><option value="Vast Networks">Vast Networks</option><option value="Verizon Business">Verizon Business</option><option value="Vodafone Deutschland GmbH">Vodafone Deutschland GmbH</option><option value="Vodafone Limited">Vodafone Limited</option><option value="Wide Open West">Wide Open West</option><option value="Xneelo (Pty) Ltd">Xneelo (Pty) Ltd</option><option value="zColo">zColo</option><option value="Zen Internet Ltd">Zen Internet Ltd</option> </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="windows" style="margin-bottom: 10px; margin-top: 5px">windows :</label>
<select name="windows" id="windows" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
<option value="10">10</option><option value="2008">2008</option><option value="2012">2012</option><option value="2016">2016</option><option value="2019">2019</option><option value="7">7</option><option value="8">8</option> </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
<label for="ram" style="margin-bottom: 10px; margin-top: 5px">Ram :</label>
<input type="search" class="form-control" id="ram" style="color: var(--font-color); background-color: var(--color-card);">
</div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="type" style="margin-bottom: 10px">Type :</label>
<select name="source" id="source" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
<option value="cracked">cracked</option><option value="created">created</option> </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="access" style="margin-bottom: 10px; margin-top: 5px">Access :</label>
<select name="access" id="access" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
<option value="ADMIN">ADMIN</option><option value="USER">USER</option> </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
<label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
<select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
<option value="Seller349">Seller349</option><option value="Seller469">Seller469</option><option value="Seller457">Seller457</option><option value="Seller306">Seller306</option> </select>
</div>
</div>
<div class="row m-2 pt-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="col-sm-12 table-responsive">
<table id="rdp_data" class="display responsive table-hover" style="width:100%" style="color: var(--font-color); background-color: var(--color-card);">
<thead>
<tr>
<th data-priority="1"></th>
<th class="all">ID</th>
<th data-priority="3">Country</th>
<th data-priority="15">City</th>
<th data-priority="14">Windows</th>
<th data-priority="6">Ram</th>
<th data-priority="17">Access</th>
<th data-priority="8">Hosting</th>
<th data-priority="9">CPU</th>
<th data-priority="10">Warranty</th>
<th data-priority="11">Seller</th>
<th data-priority="12">Source</th>
<th data-priority="13">Price</th>
<th class="all" style="width:9% !important;">Ip BlackList</th>
<th class="all">Check</th>
<th data-priority="16">Added on</th>
<th class="all">Buy</th>
</tr>
</thead>
</table>
</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
<div class="modal-content">
<div class="modal-header">
<p class="heading" id="myModalHeader"></p>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true" class="white-text">&times;</span>
</button>
</div>
<div class="modal-body" id="modelbody">
</div>
<div class="modal-footer justify-content-center">
<a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
</div>
</div>
</div>
</div>

<div class="modal fade" id="modalConfirmBuy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">

<div class="modal-content text-center">

<div class="modal-header d-flex justify-content-center">
<p class="heading">Are you sure?</p>
</div>

<div class="modal-body">
<i class='fas fa-shopping-cart fa-4x animated rotateIn'></i>
</div>

<div class="modal-footer flex-center">
<a onClick='confirmbye()' class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
<a type="button" class="btn btn-info" data-dismiss="modal">No</a>
</div>
</div>

</div>
</div>


<div class="modal fade top" id="modalCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">

<div class="modal-content">

<div class="modal-body">
 <div class="row d-flex justify-content-center align-items-center">
<img src="layout/images/balance.png">
<span class="pt-3 mx-4" style="font-size: 14 px"><b>No enough balance !</b> Please refill your balance</span>
<a type="button" href="addBalance" onclick="window.open(this.href);return false;" class="btn btn-danger">Add Balance
<i class="fas fa-book ml-1 white-text"></i>
</a>
<a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
</div>
</div>
</div>

</div>
</div>

<script>

