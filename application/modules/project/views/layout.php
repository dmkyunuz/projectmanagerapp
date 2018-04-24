<style type="text/css">
  .content-wrapper {
  background: #fff !important;
}

.boxes {
  /*margin-left: 5px;*/
  margin-top: -12px;
}

.box {
position:relative;
  overflow-y: scroll;
  padding-top: 20px;
}

.box > .card{

 margin-bottom: 5px;
 border: none;
 border-bottom: 1px solid #f5f5f5;
 cursor: pointer;
 color: #78909C;
}
.box > .card > .card-body{
  padding: 8px;
  font-size :14px;
  line-height: 17px;
}
.box > .card > .card-body > .card-title{
  font-size :16px;
  line-height: 17px;
}
.box::-webkit-scrollbar{
        width: 4px;
        background: #F5F5F5;
    }
.box::-webkit-scrollbar-track {
    margin-left: -30px;
}
.box::-webkit-scrollbar-thumb {
  background-color: #CFD8DC;
  border-radius: 5px;
  outline: 1px solid slategrey;
}

</style>

<div class="row boxes">
   <!-- <div class="col-lg-3 box">
    <ul  class="list-group list-group-flush" style="margin-left: 13px;">
     <?php
    foreach ($model as $row) { ?>
      <li class="list-group-item"><?= $row->project_title; ?></li>
    <?php }
  ?>
  </ul>
   </div> -->
   <div class="col-lg-8 box">
     
   </div>
   <div class="col-lg-4 box activities">
    <div class="row" id="toolbar-activities" style="margin-bottom: 100px; position: fixed; right: 10px; background: white; z-index: 10; margin-top: -20px; padding-top:10px;padding-bottom:10px; ">
      <div class="col-lg-12">
        <div class="pull-right">
          <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">On Proggress</button>
        <button type="button" class="btn btn-info">Done</button>
        <button type="button" class="btn btn-secondary">Close</button>
      </div>
        </div>
         
      </div>
    </div>
   
     <div class="list-group list-group-flush small" style="margin-top:60px;">
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <strong>David Miller</strong>posted a new article to
                    <strong>David Miller Website</strong>.
                    <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <strong>Samantha King</strong>sent you a new message!
                    <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <strong>Jeffery Wellings</strong>added a new photo to the album
                    <strong>Beach</strong>.
                    <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <i class="fa fa-code-fork"></i>
                    <strong>Monica Dennis</strong>forked the
                    <strong>startbootstrap-sb-admin</strong>repository on
                    <strong>GitHub</strong>.
                    <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                  </div>
                </div>
              </a><a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <strong>David Miller</strong>posted a new article to
                    <strong>David Miller Website</strong>.
                    <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <strong>Samantha King</strong>sent you a new message!
                    <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <strong>Jeffery Wellings</strong>added a new photo to the album
                    <strong>Beach</strong>.
                    <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <i class="fa fa-code-fork"></i>
                    <strong>Monica Dennis</strong>forked the
                    <strong>startbootstrap-sb-admin</strong>repository on
                    <strong>GitHub</strong>.
                    <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action" href="#">View all activity...</a>
            </div>
   </div>
</div>

<script type="text/javascript">
  var screenHeight = parseInt($( window ).height());
  var navHeight = parseInt($("#mainNav").height());
  
  var getContentHeight = (screenHeight - 117);
  $('.box').css({ 'height' : getContentHeight })
  setWidth();
  function setWidth(){
    var activitiesWidth = parseInt($(".activities").width());
    activitiesWidth = activitiesWidth + 17;
    $('#toolbar-activities').css({ 'width' : activitiesWidth });
  }
  $("#sidenavToggler").click(function(){
      setWidth();
  })
</script>