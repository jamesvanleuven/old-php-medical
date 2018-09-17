<div class="modal fade" id="ccModal" tabindex="-1" role="dialog" aria-labelledby="ccModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="ccModalLabel">Credit Card Details</h4>
      </div>
      <div class="cc-details modal-body text-left">
      	<div class="alert alert-info"><p><i class="fa fa-exclamation-triangle"></i> Please swipe the Credit Card to process this invoice.</p></div>
      	<form name="cc_details" id="cc_details" class="form-horizontal" role="form">
      		<input type="hidden" name="cc_payment" id="cc_payment">
      		<div class="form-group">
      			<label id="cc_selected" class="col-sm-4 control-label"><small>Credit Card: </small></label>
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-8">
							<div class="input-group input-group-sm">
								<input type="text" id="cc_number" pattern="" name="cc_number" class="form-control input-sm" placeholder="Credit Card Number">
								<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="input-group input-group-sm">
								<input type="text" id="cc_ccv" name="cc_ccv" class="form-control input-sm" placeholder="CCV">
								<span class="input-group-addon"><i class="fa fa-exclamation-triangle"></i></span>
							</div>
						</div>
					</div>
				</div>
      		</div>
      		<div class="form-group">
      			<label class="col-sm-4 control-label"><small>Expires: </small></label>
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-4">
							<div class="input-group input-group-sm">
								<input type="text" id="cc_expiry_month" name="cc_expiry_month" class="form-control input-sm" placeholder="MM">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="input-group input-group-sm">
								<input type="text" id="cc_expiry_year" name="cc_expiry_year" class="form-control input-sm" placeholder="YYYY">
								<span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
							</div>
						</div>
					</div>
				</div>
      		</div>
      		<div class="form-group">
      			<label for="cc_cardholder" class="col-sm-4 control-label"><small>CardHolder: <small></label>
				<div class="col-sm-8">
					<div class="input-group input-group-sm">
					  <input type="text" id="cc_cardholder" name="cc_cardholder" class="form-control input-sm" placeholder="Card Holder Name" disabled>
					  <span class="input-group-addon"><i class="fa fa-user"></i></span>
					</div>
				</div>
      		</div>
      	</form>
      </div>
      <div class="modal-footer">
        <a href="javascript:void(0);" class="btn btn-success btn-sm"><i class="fa fa-chevron-right"></i> Submit</a>
        <a href="javascript:void(0);" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</a>
      </div>
    </div>
  </div>
</div>
