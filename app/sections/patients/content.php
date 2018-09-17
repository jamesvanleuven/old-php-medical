<? include APP_SHARED . "/patient_search.php"; ?>
<hr>
<div id="tab-patient-c">
		<div class="col-md-3"><? include APP_SHARED . "/patient_details_sm.php"; ?></div>
		<div class="col-md-9"><? include APP_SHARED . "/patient_details_lg.php"; ?></div>
	<hr>
	<div class="col-md-12">
		<p class="pull-right">
			<button type="button" data-id="#tab-patient-c" class="btn-reset btn btn-warning btn-sm"><i class="fa fa-save"></i> Reset</button>
			<button type="button" data-id="#tab-patient-c" class="btn-save btn btn-success btn-sm" disabled><i class="fa fa-save"></i> Save</button>
			<a href="javascript:void(0);" class="clear-panel btn btn-danger btn-sm" data-dir="right" data-id="#tab-patient-c">
			<i class="fa fa-times"></i> Cancel </a>
		</p>
	</div>
</div>
