<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("location: logout.php");
?>

<html>
	<head>
		<title>ACM | Home</title>
		<?php include "css/acm.php"; ?>

		<!-- CUSTOM PAGE STYLES -->
		<style>
			.card {
				width: 95% !important;
				margin: 0 auto !important;
			}
			.search {
				width: 30% !important;
				float: right;
			}
			.tabs-container {
				padding: 0 !important;
				margin-bottom: 20px;
			}
			.custom-select {
				width: 30%;
				margin-top: 50px;
				margin-right: 10px;
				display: inline-block;
			}
			.modal-content {
				padding-bottom: 0 !important;
			}
			.new-proposal-content {
				margin: 20px 0 0 0;
			}
			.tab a.active {
				color: rgb(1, 130, 172) !important;
			}
			.tabs .indicator {
				background-color: rgb(1, 130, 172) !important;
			}

			.tabs .tab a {
				color: rgba(1, 130, 172,0.7) !important;
			}

			.tabs .tab a:focus, .tabs .tab a:focus.active {
				background-color: transparent !important;
			}
		</style>
	</head>
	<body class="container iframe-container">

		<div class="row">
			<button class="btn acm-btn modal-trigger" href="#new-proposal">New Proposal</button>
            <!--<button class="btn acm-btn modal-trigger" href="#edit-event">Show Edit Event Modal</button>-->
			<a class="btn acm-btn" href="./event-calendar.php">Event Calendar</a>
			<input class = "search" placeholder="Search by Event Title" type="text" id = "search-bar">
		</div>

		<div class="row" style="background-color: #fff">

			<div class="tabs-container col s12">
			<ul class="tabs">
				<li class="tab col s3"><a id="proposal_tab" class="active" href="#proposal">📝 Proposal</a></li>
				<li class="tab col s3"><a id="requirements_tab" href="#requirements">📋 Requirements Needed</a></li>
				<li class="tab col s3"><a id="approved_tab" href="#approved">✅ Approved</a></li>
				<li class="tab col s3"><a id="archieved_tab" href="#archieved">📦 Archieved</a></li>
			</ul>
			</div>

			<!--
			===========================================
				PROPOSALS
			===========================================
			-->
			<div id="proposal" class="col s12" >

			</div>


			<!--
			===========================================
				REQUIREMENTS NEEDED
			===========================================
			-->
			<div id="requirements" class="col s12">

			</div>


			<!--
			===========================================
				APPROVED
			===========================================
			-->
			<div id="approved" class="col s12">

			</div>

			<!--
			===========================================
				ARCHIEVED
			===========================================
			-->
			<div id="archieved" class="col s12">
			</div>

			<!--
			===========================================
				NEW PROPOSAL MODAL
			===========================================
			-->
			<div id="new-proposal" class="modal">
				<div class="modal-content">
					<h4>Create New Proposal</h4>
					<div class="new-proposal-content">
						<div class="row">
							<form class="col s12">
                                <!-- Event title -->
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="Enter event title" id="ne-event-title" type="text" class="validate" required>
										<label for="first_name">Event title</label>
									</div>
								</div>

                                <!-- Event description -->
                                <div class="row">
									<div class="input-field col s12">
										<textarea placeholder="Enter event description" id="ne-event-description" type="text" class="materialize-textarea" required></textarea>
										<label for="event-description">Event Description</label>
									</div>
								</div>

                                <!--  Venue  -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="ne-event-proponents" type="text" class="validate" required>
                                        <label for="ne-event-proponents">Event Proponents</label>
                                    </div>
                                </div>

                                <!-- event start_date -->
								<div class="row">
                                    <label for="ne-event-date-start">Start Date and Time</label>
									<div class="input-field col s12">
										<input id="ne-event-date-start" type="datetime-local" placeholder="Start Date and Time" required>
                                    </div>
								</div>

                                <!-- event end_date -->
                                <div class="row">
                                    <label for="ne-event-date-end">End Date and Time</label>
                                    <div class="input-field col s12">
                                        <input id="ne-event-date-end" type="datetime-local" placeholder="End Date and Time" required>
                                    </div>
                                </div>

                                <!--  Venue  -->
								<div class="row">
									<div class="input-field col s12">
                                        <input placeholder="Enter event venue" id="ne-event-venue" type="text" class="validate" required>
										<label for="event-venue">Venue</label>
									</div>
								</div>

                <!-- reg links -->
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Enter Registration Link" id="ne-event-reg" type="text" class="validate">
                        <label for="ne-event-reg">Registration/Website Link</label>
                    </div>
                </div>


                                <!-- links -->
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="Enter Google Drive link" id="ne-event-gdrive" type="text" class="validate">
										<label for="event-grive">Google Drive Documents</label>
										<small class="helper">This is optional. You can add google drive link later</small>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a id="ne-submit" href="#!" class="modal-close waves-effect waves-green btn acm-btn">Confirm</a>
				</div>
			</div>
            <!-- New Proposal Modal -->

            <!--  EDIT MODAL   -->
            <div id="edit-event" class="modal">
                <div class="modal-content">
                    <h4>Edit Event Information</h4>
                    <div class="edit-event-content">
                        <div class="row">
                            <form class="col s12">

                                <!-- event_id -->
                                <div class="row" hidden>
                                    <div class="input-field col s12">
                                        <input id="edit-event-id" type="number" class="validate" required value="">
                                    </div>
                                </div>

                                <!-- Event title -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Enter event title" id="edit-event-title" type="text" class="validate" required>
                                        <label for="edit-event-title">Event title</label>
                                    </div>
                                </div>

                                <!-- Event description -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea placeholder="Enter event description" id="edit-event-description" type="text" class="materialize-textarea" required></textarea>
                                        <label for="event-description">Event Description</label>
                                    </div>
                                </div>

                                <!--  Proponents  -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="edit-event-proponents" type="text" class="validate" required>
                                        <label for="edit-event-proponents">Event Proponents</label>
                                    </div>
                                </div>

                                <!-- event start_date -->
                                <div class="row">
                                    <label for="edit-event-date-start">Start Date and Time</label>
                                    <div class="input-field col s12">
                                        <input id="edit-event-date-start" type="datetime-local" placeholder="Start Date and Time" required>
                                    </div>
                                </div>

                                <!-- event end_date -->
                                <div class="row">
                                    <label for="edit-event-date-end">End Date and Time</label>
                                    <div class="input-field col s12">
                                        <input id="edit-event-date-end" type="datetime-local" placeholder="End Date and Time" required>
                                    </div>
                                </div>

                                <!--  Venue  -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Enter event venue" id="edit-event-venue" type="text" class="validate" required>
                                        <label for="edit-event-venue">Venue</label>
                                    </div>
                                </div>

                                <!-- reg links -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Enter Registration Link" id="edit-event-reg" type="text" class="validate">
                                        <label for="edit-event-reg">Registration/Website Link</label>
                                    </div>
                                </div>

                                <!-- links -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Enter Google Drive link" id="edit-event-gdrive" type="text" class="validate">
                                        <label for="edit-event-gdrive">Google Drive Documents</label>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a id="edit-submit" href="#!" class="modal-close waves-effect waves-green btn">Confirm</a>
                </div>
            </div>
            <!--  EDIT MODAL   -->

		</div>


		<!-- SCRIPTS -->
		<script>

            var selectedTab;

			function formatProposal(ev) {

                let sdate = DateFormatter(ev.start_date);

                let edate = DateFormatter(ev.end_date);

                return '<div class="row event_proposed">' +
                    '   <div class="col s12 m12">' +
                    '      <div class="card event-card">' +
                    //           Content 1
                    '         <div class="card-content modal-trigger" href="#edit-event" onClick="viewEventModal(' + ev.event_id + ')">' +
                    '            <span class="card-title">' + ev.event_title + '</span>' +
                    '            <p>' + ev.event_desc + '</p>' +
                    '            <br/>' +
                    '            <table>' +
                    '               <tr>' +
                    '                   <td>Venue</td>' +
                    '                   <td>' + ev.venue + '</td>' +
                    '               </tr>' +
                    '               <tr>' +
                    '                   <td>Proponents</td>' +
                    '                   <td>' + ev.proponents + '</td>' +
                    '               </tr>' +
                    '               <tr>' +
                    '                   <td>Dates</td>' +
                    // '                   <td>' + ev.start_date + ' to ' + ev.end_date + '</td>' +
                    '                   <td><h5>' + sdate + '</h5>to<h5>' + edate + '</h5></td>' +
                    '               </tr>' +
                    '            </table>' +
                    '         </div>' +
                    //          Content Links
                    '         <div class="card-content" id="links">' +
                    '            <table>' +
                    '               <tr>' +
                    '                   <td>Registration</td>' +
                    '                   <td><a href="' + ev.reg_link + '">' + ev.reg_link + '</a></td>' +
                    '               </tr>' +
                    '               <tr>' +
                    '                   <td>Files</td>' +
                    '                   <td><a href="' + ev.links + '">' + ev.links + '</a></td>' +
                    '               </tr>' +
                    '            </table>' +
                    '         </div>' +
                    //          Content Move Options
                    '         <div class="card-content">' +
                    '            <div class="input-field custom-select">' +
                    '               <select id="select-' + ev.event_id + '">' +
                    '                  <option value="" disabled selected>Choose your option</option>' +
                    '                  <option value="requirements"> Requirements Needed</option>' +
                    '                  <option value="approved"> Approved</option>' +
                    '                  <option value="archieved"> Archieved</option>' +
                    '               </select>' +
                    '               <label>Move to</label>' +
                    '            </div>' +
                    //             Submit Move
                    '            <a id="ue-submit" onClick="updateEvent(' + ev.event_id + ');" class="btn waves-effect waves-light acm-btn apply-btn">apply</a>' +
                    '          </div>' +
                    '      </div>' +
                    '   </div>' +
                    '</div>';
			}

			function DateFormatter(dateString){
                console.log(dateString);

                //Days and Months
			    let days = ['Sun', 'Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat'];
                let months = ['Jan', 'Feb', 'Mar', 'April', 'May',' Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

                d = new Date(dateString);
			    console.log(d);

                let day = days[d.getDay()];
                let date = d.getDate();
                let year = d.getFullYear();
                let month = months[d.getMonth()];
                let hour = d.getHours();
                let min = d.getMinutes();
                if(min === 0){
                    min = "00";
                }

                let new_date = day+" | "+month+" "+date+", "+year+" @"+hour+":"+min;
                console.log(new_date);

			    return new_date; //It should be like this "Wed | Jun 11, 2018 | 09:00"
            }

			function init() {
				$('.tabs').tabs();
				$('select').formSelect();
				$('.modal').modal();
				$('.datepicker').datepicker({
					format: 'mm/dd/yyyy'
				});
			}

			function fetchEvents(filter) {
				axios
					.get('api/getEvents.php?filter=' + filter)
					.then(function (resp) {
						$('#'+filter+'').html('');
						resp.data.events.forEach(function (ev) {
							$('#'+filter+'').append(formatProposal(ev))
						})
						init();
					})
			}


			$(document).ready(function() {

				// initialize components
				init();
				// fetching proposals
				selectedTab = 'proposal';
				fetchEvents('proposal');

				//Tabs Clicked Listener
				$("#proposal_tab").click(function(e) {
					fetchEvents('proposal');
					selectedTab = 'proposal'
				});

				$('#requirements_tab').click(function (e) {
					fetchEvents('requirements');
					selectedTab = 'requirements'
				});

				$('#approved_tab').click(function (e) {
					fetchEvents('approved');
					selectedTab = 'approved'
				});

				$('#archieved_tab').click(function (e) {
					fetchEvents('archieved');
					selectedTab = 'archieved'
				});


			});

			/**
			|--------------------------------------------------
			| 😎 New proposal submit listener 👂
			|--------------------------------------------------
			*/
            $('#ne-submit').on('click', function(e) {
                // form values
                var
                    ne_eventTitle = $('#ne-event-title').val(),
                    ne_eventDescription = $('#ne-event-description').val(),
                    ne_eventProponents = $('#ne-event-proponents').val(),
                    ne_eventStartDate = $('#ne-event-date-start').val(),
                    ne_eventEndDate = $('#ne-event-date-end').val(),
                    ne_eventVenue = $('#ne-event-venue').val(),
                    ne_eventGdrive = $('#ne-event-gdrive').val();
                    ne_eventReg = $('#ne-event-reg').val();

                axios

                    .post('api/create_event.php', Qs.stringify({
                        title: ne_eventTitle,
                        description: ne_eventDescription,
                        proponents: ne_eventProponents,
                        start_date: ne_eventStartDate,
                        end_date: ne_eventEndDate,
                        venue: ne_eventVenue,
                        gdrive_link: ne_eventGdrive,
                        reg_link: ne_eventReg
                        })
                    )
                    .then(function (resp) {
                        console.log(resp);
                        fetchEvents('proposal')
                    });
            });


			/**
			|--------------------------------------------------
			| 😎 Update Event Listener 👂
			|--------------------------------------------------
			*/
			function updateEvent(id){

			    var e = document.getElementById("select-"+id);

				if (e !== null) {
					var ue_status = e.options[e.selectedIndex].value;

                    axios
						.post('api/updateEvent.php', Qs.stringify({
							event_id: id,
							status: ue_status
						}))
						.then(function (resp) {
							$('#'+selectedTab+'').html('');
							fetchEvents(selectedTab)
							init()
						});
				}
			}

			/**
             * Search Bar LIstener
             */
				$('#search-bar').keyup(function(e){
	          let key = $('#search-bar').val();
						axios
	          //Get the event from API
            .get('api/search_event_by_title.php?title='+key+'&tab='+selectedTab)
            .then(function (resp) {
                //Check Response and Use data to show Proposal Modal
                if(resp.data.status === "success"){
                    $('#'+selectedTab).html('');
                    resp.data.events.forEach(function (ev) {
                        $('#'+selectedTab).append(formatProposal(ev))
                    });
                } else {
					$('#'+selectedTab).html('<center>'+
											'<span style = "color: red"> '+
											' NO SUCH EVENT FOUND! </span>'+
											'</center>');

                }
				init();
            	});
      });

            /**
             |--------------------------------------------------
             | 😎 Edit Event Information Listener
             |--------------------------------------------------
             */
            function viewEventModal(id){
                axios
                    //Get the event from API
                    .get('api/get_event_by_id.php?event_id='+id)
                    .then(function (resp) {
                        //Check Response and Use data to show Proposal Modal
                        if(resp.data.status === "success"){
                            var event = resp.data.event[0];
                            var
                                start_date = DateFormatter(event.start_date),
                                end_date = DateFormatter(event.end_date);

                            //Set the Edit Modals values
                            $('#edit-event-id').val(event.event_id);
                            $('#edit-event-title').val(event.event_title);
                            $('#edit-event-description').val(event.event_desc);
                            $('#edit-event-proponents').val(event.proponents);
                            $('#edit-event-date-start').val(start_date);
                            $('#edit-event-date-end').val(end_date);
                            $('#edit-event-venue').val(event.venue);
                            $('#edit-event-gdrive').val(event.links);
                            $('#edit-event-reg').val(event.reg_link);

                        } else {

                            alert("Event Data Doesn't Exist!");
                        }
                    });
            }

            /**
             |--------------------------------------------------
             | 😎 Edit Proposal submit listener 👂
             |--------------------------------------------------
             */
            $('#edit-submit').on('click', function(e) {
                // form values
                var
                    edit_eventId = $('#edit-event-id').val(),
                    edit_eventTitle = $('#edit-event-title').val(),
                    edit_eventDescription = $('#edit-event-description').val(),
                    edit_eventProponents = $('#edit-event-proponents').val(),
                    edit_eventStartDate = $('#edit-event-date-start').val(),
                    edit_eventEndDate = $('#edit-event-date-end').val(),
                    edit_eventVenue = $('#edit-event-venue').val(),
                    edit_eventGdrive = $('#edit-event-gdrive').val(),
                    edit_eventRegLink = $('#edit-event-reg').val();

                console.log( [edit_eventId, edit_eventTitle] );

                axios.post('api/edit_event.php', Qs.stringify({
                    id: edit_eventId,
                    title: edit_eventTitle,
                    description: edit_eventDescription,
                    proponents: edit_eventProponents,
                    start_date: edit_eventStartDate,
                    end_date: edit_eventEndDate,
                    venue: edit_eventVenue,
                    gdrive_link: edit_eventGdrive,
                    reg_link: edit_eventRegLink

                })).then(function (resp){

                    console.log(resp);
                });

            });


            //DATE FORMATIING FOR EDITING EVENT INFORMATION
            function formatDate(dateString){
                var d = new Date(dateString);
                var date =
                        [
                            d.getFullYear().AddZero(),
                            (d.getMonth()+1).AddZero(),
                            d.getDate().AddZero()
                        ].join('-') +'T'+
                        [
                            d.getHours().AddZero(),
                            d.getMinutes().AddZero()
                        ].join(':');
                return date;
            }
            Number.prototype.AddZero= function(b,c){
                var  l= (String(b|| 10).length - String(this).length)+1;
                return l> 0? new Array(l).join(c|| '0')+this : this;
            }//to add zero to less than 10,
            //

		</script>
	</body>
</html>
