<style type="text/css">
  .content-wrapper{
    /*background: #f5f5f5 !important;*/
  }
</style>
<div class="container-fluid  animated fadeIn">
<div class="my-3 p-3 bg-white rounded box-shadow" id="p0" data-pjax-container="" data-pjax-push-state data-pjax-timeout="1000">
  <!-- <?php
    breadcrumb::create([
      ['label'=> 'Dashboard', 'url' => site_url('/')],
      ['label'=> 'Users']
    ]);

  ?> -->
<button type="button" class="btn btn-info" data-title="Create User" data-toggle="modal" data-remote="<?= site_url('/project/create');?>" data-target="#form-modal">Create Project</button>
<div class="clearfix">&nbsp;</div>
<div class="row">
  <?php
    foreach ($model as $row) { ?>
    <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="clear">&nbsp;</div>
  </div>
      <!-- echo $row->project_id; -->
    <?php }
  ?>
</div>
</div>
</div>
<script type="text/javascript">
function openModal(){
  var formModal = $("#form-modal");
  formModal.modal('show');
}
function closeModal(){
  var formModal = $("#form-modal");
  formModal.modal('hide');
}

$('body').on('click', '[data-toggle="modal"]', function(){

  $($(this).data("target")+' .modal-body').load($(this).data("remote"));
  $($(this).data("target")+' .modal-header h4').text($(this).data("title"));

});  

$("body").off('click', "#cancelBtn").on('click', "#cancelBtn", function(){
  closeModal();
});
// $(".content-wrapper").css({"background": "yellow !important"});
</script>