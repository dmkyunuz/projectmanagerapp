
<link href='<?= base_url() ?>public/vendor/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='<?= base_url() ?>public/vendor/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='<?= base_url() ?>public/vendor/fullcalendar/lib/moment.min.js'></script>
<script src='<?= base_url() ?>public/vendor/fullcalendar/lib/jquery.min.js'></script>
<script src='<?= base_url() ?>public/vendor/fullcalendar/fullcalendar.min.js'></script>


<style>
#calendar {
max-width: 900px;
margin: 0 auto;
}
.demo-topbar {
height: 40px;
line-height: 40px;
padding-left: 1em;
background: #eee;
border-bottom: 1px solid #ddd;
font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif !important;
font-size: 14px !important;
color: #000 !important; }
.demo-topbar .codepen-button {
float: right;
margin-top: 7px;
margin-right: 7px; }

.codepen-button {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
height: 26px;
line-height: 26px;
padding: 0 6px;
border: 1px solid #ddd;
background: #fff;
border-radius: 4px;
font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif !important;
font-size: 11px !important;
color: #000 !important;
cursor: pointer; }
.codepen-button:after {
content: '\02197';
vertical-align: middle;
margin: -50% 0 -50% 2px; }

</style>


<div id='calendar'></div>


<script>

$(document).ready(function() {

  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today myCustomButtons myCustomButtonsx',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listWeek'
    },
    navLinks: true, 
    editable: true,
    eventLimit: true,
    resourceGroupField: 'building',
    resources: [
        { id: 'a', building: '460 Bryant', title: 'Auditorium A' },
        { id: 'b', building: '460 Bryant', title: 'Auditorium B' },
        { id: 'c', building: '460 Bryant', title: 'Auditorium C' },
        { id: 'd', building: '460 Bryant', title: 'Auditorium D' },
        { id: 'e', building: '460 Bryant', title: 'Auditorium E' },
        { id: 'f', building: '460 Bryant', title: 'Auditorium F' },
        { id: 'g', building: '564 Pacific', title: 'Auditorium G' },
        { id: 'h', building: '564 Pacific', title: 'Auditorium H' },
        { id: 'i', building: '564 Pacific', title: 'Auditorium I' },
        { id: 'j', building: '564 Pacific', title: 'Auditorium J' },
        { id: 'k', building: '564 Pacific', title: 'Auditorium K' },
        { id: 'l', building: '564 Pacific', title: 'Auditorium L' },
        { id: 'm', building: '564 Pacific', title: 'Auditorium M' },
        { id: 'n', building: '564 Pacific', title: 'Auditorium N' },
        { id: 'o', building: '101 Main St', title: 'Auditorium O' },
        { id: 'p', building: '101 Main St', title: 'Auditorium P' },
        { id: 'q', building: '101 Main St', title: 'Auditorium Q' },
        { id: 'r', building: '101 Main St', title: 'Auditorium R' },
        { id: 's', building: '101 Main St', title: 'Auditorium S' },
        { id: 't', building: '101 Main St', title: 'Auditorium T' },
        { id: 'u', building: '101 Main St', title: 'Auditorium U' },
        { id: 'v', building: '101 Main St', title: 'Auditorium V' },
        { id: 'w', building: '101 Main St', title: 'Auditorium W' },
        { id: 'x', building: '101 Main St', title: 'Auditorium X' },
        { id: 'y', building: '101 Main St', title: 'Auditorium Y' },
        { id: 'z', building: '101 Main St', title: 'Auditorium Z' }
      ],
    eventDrop: function(event,dayDelta,revertFunc) {
        var project_id = event.id;
        var xinterval = dayDelta.toString();

        if (!confirm("Are you sure to change this event?")) {
            revertFunc();
        }else{
           $.ajax({
            type : 'POST',
            dataType : 'JSON',
            data : { id : project_id, xinterval : xinterval },
            url : "<?= site_url('/events/drag_event') ?>",
            success : function (response){
              
            },
            error : function(response){
              alert('Internal server error');
            }
          });
        }
        
        

    },
    eventClick: function (i, evt, view) {
      alert(i.id);
    },
    eventResize: function(event, delta, revertFunc) {
      var end_date = event.end.format();
      var project_id = event.id;

      if (!confirm("Are you sure to change this event?")) {
        revertFunc();
      }else{
        $.ajax({
          type : 'POST',
          dataType : 'JSON',
          data : { id : project_id, end_date : end_date },
          url : "<?= site_url('/events/resize_event') ?>",
          success : function (response){
           
          },
          error : function(response){
            alert('Internal server error');
          }
        });
      }
    },
    events: {
        url: '<?= site_url("/api/events")?>',
        error: function() {
          alert("Can't get events");
        }
    },
    customButtons: {
      myCustomButtons: { 
        text: 'Add Events',
        click: function() {
          openModal('<?= site_url("/events/create") ?>');
        }
      },
    myCustomButtonsx: { 
        text: 'Refresh',
        click: function() {
          window.location = '<?= site_url("/events")?>';
        }
      }
    },
  });

});


function openModal(url){
  localStorage.setItem("eventCreateUrl", url);
  var formModal = $("#form-modal");
  formModal.modal('show');
}

$("body").off("show.bs.modal", "#form-modal").on("show.bs.modal", "#form-modal", function(e) {
    $(this).find(".modal-body").load(localStorage.eventCreateUrl);
});

$("body").off("hidden.bs.modal", "#form-modal").on("hidden.bs.modal", "#form-modal", function(e) {
    $(this).find(".modal-body").load(localStorage.eventCreateUrl);
});

function removeLocalStorage(item){
  localStorage.removeItem(item);
}

function closeModal(){
  var formModal = $("#form-modal");
  formModal.modal('hide');
}

var formEvent = $("#form-event");

// $('body').off('submit', "#form-event").on('submit', "#form-event", function(e){

    // validator.form();
    // e.preventDefault();
// }); 

</script>
