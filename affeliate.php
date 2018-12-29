{*
 **********************************************************
 * Developed by: MG Mynul
 * Website: https://www.mgmynul.com
 **********************************************************
*}

{if $inactive}

    {include file="$template/includes/alert.tpl" type="danger" msg=$LANG.affiliatesdisabled textcenter=true}

{else}

    <div class="row">

        <div class="col-sm-4">
            <div class="affiliate-stat affiliate-stat-green alert-danger">
                <i class="fa fa-mouse-pointer"></i>
                <span>{$visitors}</span>
                {$LANG.affiliatesclicks}
            </div>
        </div>

        <div class="col-sm-4">
            <div class="affiliate-stat affiliate-stat-green alert-info">
                <i class="fa fa-user-plus"></i>
                <span>{$signups}</span>
                {$LANG.affiliatessignups}
            </div>
        </div>

        <div class="col-sm-4">
            <div class="affiliate-stat affiliate-stat-green alert-success">
                
                <span>{$balance}</span>
                {$LANG.affiliatesbalance}
            </div>
        </div>

    </div>
    <hr>

    <div class="affiliate-referral-link text-center">

        <span><h3><b>{$LANG.affiliatesreferallink} </b></h3>
        
        <div class="<span>{$referrallink}"</span></div>
        
         <span><input value="{$referrallink}"id="myLink" >
<div class="btn btn-success"<button onclick="myFunction()">Copy link</button></span></div>




<script>
function myFunction() {
  var copyText = document.getElementById("myLink");
  copyText.select();
  document.execCommand("copy");
  alert("Copy link: " + copyText.value);
}
</script>

    </div>
<center>
    
<!--These buttons are created by MG Mynul--> <div id="share-buttons"> 
    <style type="text/css">
 
#share-buttons img {
width: 40px;
padding: 5px;
border: 0;
box-shadow: 0;
display: inline;
}
 
</style>
    <h5><u> Share your link by..</u></h5>
    <!-- Facebook --> <a href="https://www.facebook.com/sharer.php?u= https://bdhost71.com/aff.php?aff=1 " target="_blank"><img src="https://bdhost71.com/assets/img/share/facebook.png" alt="Facebook" /></a> 
    <!-- Twitter --> <a href="https://twitter.com/share?url=https://bdhost71.com/aff.php?aff=1 &text=BDHOST71" target="_blank"><img src="https://bdhost71.com/assets/img/share/twitter.png" alt="Twitter" /></a> 
    <!-- Google+ --> <a href="https://plus.google.com/share?url=https://bdhost71.com/aff.php?aff=1" target="_blank"><img src="https://bdhost71.com/assets/img/share/google.png" alt="Google" /></a> 
   
   
    <!-- LinkedIn --> <a href="https://www.linkedin.com/shareArticle?mini=true&url= https://bdhost71.com/aff.php?aff=1 " target="_blank"><img src="https://bdhost71.com/assets/img/share/linkedin.png" alt="LinkedIn" /></a> 
    <!-- Pinterest --> <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','https://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><img src="https://bdhost71.com/assets/img/share/pinterest.png" alt="Pinterest" /></a> 
    </div>
</center>
<br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <table class="table table-striped table-rounded">
                <tr>
                    <td class="text-right">{$LANG.affiliatesconversionrate}:</td>
                    <td><strong>{$conversionrate}% </strong></td>
                </tr>
                <tr>
                    <td class="text-right">{$LANG.affiliatescommissionspending}:</td>
                    <td><strong>{$pendingcommissions}</strong></td>
                </tr>
                <tr>
                    <td class="text-right">{$LANG.affiliateswithdrawn}:</td>
                    <td><strong>{$withdrawn}</strong></td>
                </tr>
            </table>
        </div>
    </div>
   
    {if $withdrawrequestsent}
        <div class="alert alert-success">
            <p>{$LANG.affiliateswithdrawalrequestsuccessful}</p>
        </div>
    {else}
        <p class="text-center">
            <a href="{$smarty.server.PHP_SELF}?action=withdrawrequest" class="btn btn-lg btn-danger"{if !$withdrawlevel} disabled="true"{/if}>
                <i class="fa fa-bank"></i> {$LANG.affiliatesrequestwithdrawal}
            </a>
        </p>
        {if !$withdrawlevel}
            <p class="text-muted text-center">{lang key="affiliateWithdrawalSummary" amountForWithdrawal=$affiliatePayoutMinimum}</p>
        {/if}
    {/if}

    {include file="$template/includes/subheader.tpl" title=$LANG.affiliatesreferals}

    {include file="$template/includes/tablelist.tpl" tableName="AffiliatesList"}
	ESET	

    <div class="table-container clearfix">
        <table id="tableAffiliatesList" class="datatable table table-hover table-bordered tc-table hidden">
            <thead>
                <tr>
                    <th data-hide="phone">{$LANG.affiliatessignupdate}</th>
                    <th data-class="expand">{$LANG.orderproduct}</th>
                    <th data-hide="phone,tablet">{$LANG.affiliatesamount}</th>
                    <th data-hide="phone,tablet">{$LANG.affiliatescommission}</th>
                    <th>{$LANG.affiliatesstatus}</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$referrals item=referral}
                <tr class="text-center">
                    <td><span class="hidden">{$referral.datets}</span>{$referral.date}</td>
                    <td>{$referral.service}</td>
                    <td>{$referral.amountdesc}</td>
                    <td>{$referral.commission}</td>
                    <td><span class='label status status-{$referral.rawstatus|strtolower}'>{$referral.status}</span></td>
                </tr>
            {/foreach}
            </tbody>
        </table>
        <div class="text-center" id="tableLoading">
            <p><i class="fa fa-spinner fa-spin"></i> {$LANG.loading}</p>
        </div>
    </div>

    {if $affiliatelinkscode}
        {include file="$template/includes/subheader.tpl" title=$LANG.affiliateslinktous}
        <div class="margin-bottom text-center">
            {$affiliatelinkscode}
        </div>
    {/if}

{/if}
