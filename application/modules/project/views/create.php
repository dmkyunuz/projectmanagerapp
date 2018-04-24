<form class="" id="form-event"  autocomplete="off">
	<fieldset>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
				<label class="control-label">Start Date</label>
					<input type="text" name="start_date" readonly style="cursor: pointer; background: white" id="start_date" autocomplete="off" class="form-control required">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
				<label class="control-label">End Date</label>
					<input type="text" name="end_date"  readonly style="cursor: pointer; background: white" id="end_date" class="form-control required">
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<label>Title</label>
					<input type="text" name="title" class="form-control required" placeholder="Enter title">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<label>Description</label>
				<div class="form-group">
					<textarea name="description" id="description" class="form-control required" placeholder="Enter task description"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<label>Media</label>
				<div class="form-group">
					<div class="dropzone" id="form-upload">
						<div class="fallback" id="dropzoneContent">
							<input name="file" type="file" multiple />
						</div>
					</div>
				</div>
			</div>
		</div>
	</fieldset>
	<div class="">
		<button class="btn btn-block btn-info">Save</button>
	</div>
</form>
<!-- <form action="<?= base_url();?>/administrator/media/upload" id="form-upload" method="post" class="dropzone"> -->

<!-- </form> -->
<script type="text/javascript">
Dropzone.autoDiscover = false;
  var foto_upload= new Dropzone(".dropzone",{
    url: "<?= base_url()."administrator/media/upload"?>",
    maxFilesize: 2,
    method:"post",
    acceptedFiles:"image/*",
    paramName:"media",
    dictInvalidFileType:"Type file ini tidak dizinkan",
    addRemoveLinks:true,
  });

$( function() {
    $( "#start_date" ).datepicker({
    	dateFormat: "d-MM-yy",
    	changeMonth: true,
    	minDate: new Date(),
    	changeYear: true,
    	
    	inline: true,
    	onSelect: function(dateText, inst){
    		var start_date = $("#start_date");
    		var end_date = $("#end_date");
    		end_date.datepicker("option","minDate",
     		$("#start_date").datepicker("getDate"));
     		end_date.prop('disabled', false);
     		
    	},
    	onKeyup: function(dateText, inst){
    		var start_date = $("#start_date");
    		var end_date = $("#end_date");
    		end_date.datepicker("option","minDate",
     		$("#start_date").datepicker("getDate"));
     		end_date.prop('disabled', false);
     		
    	}
    }).datepicker("setDate", new Date());

    $("#end_date").datepicker({
    	dateFormat: "d-MM-yy",
    	changeMonth: true,
    	minDate: new Date(),
    	changeYear: true,
    	inline: true,
    	onSelect: function(dateText, inst){
    		var start_date = $("#start_date");
    		var end_date = $("#end_date");
    		
     		
    	}
    }).datepicker("setDate", new Date());
});
var validator = $( "#form-event" ).validate({
		messages : {
			start_date : {
			required : 'Please intput start date',
		}
	},
	submitHandler : function(form){
		saveEvent();
	}
});

function saveEvent(){
	$.ajax({
		type : 'POST',
		dataType : 'JSON',
		data : $("#form-event").serialize(),
		url : '<?= site_url('/events/create') ?>',
		success : function(response){
			alert(1);
			$('#calendar').fullCalendar( 'refetchEvents' );
		}
	})
}
</script>