<hr />
<center>
<table class="ss-cpu-table">
<tr>
<!-- Start Server Space Info -->
<td valign="top" class="ss-td-style"><span class="ss-span-style"></span>
<?php echo lang(276); ?>:<b><span id="inuse"><?php echo ZahlenFormatieren($belegt); ?></span></b>&nbsp;<b>/ <span id="diskspace"><?php echo ZahlenFormatieren($insgesamt); ?></span></b><br />
<?php if (extension_loaded('gd') && function_exists('gd_info')) { ?>
<img src="<?php echo CLASS_DIR ?>bar.php?rating=<?php echo round($prozent_belegt,"2"); ?>" id="diskpercent" alt="" /><br />
<?php } ?>
<?php echo lang(277); ?> = <b><span id="freespace"><?php echo ZahlenFormatieren($frei); ?></span></b><br />
</td>

<!-- End Server Space -->


<!-- Start CPU Info -->
<td valign="top" class="cpu-td"><span class="cpu-span">
<?php
if ($cpu_string === -1) { echo lang(135).'</span><hr />'; }
else { echo '</span>'.$cpu_string; }
?>
<span class="cpu-clock-st-text"><?php echo lang(280); ?>:</span> &nbsp;&nbsp;&nbsp;<span class="cpu-clock-st-time"><span id="server"></span></span>
</td>
<!-- End CPU Info -->

</tr>
</table>
<script type="text/javascript"> 
//<![CDATA[
    function goforit(){
		setTimeout("getthedate()",1000);
		timeDiff('<?php echo date('Y'); ?>','<?php echo date('n'); ?>','<?php echo date('j'); ?>','<?php echo date('G'); ?>','<?php echo date('i'); ?>','<?php echo date('s'); ?>','dd-mm-yyyy');
    }
    $(document).ready(function() {
        goforit();
    })
//]]> 
</script>
</center>