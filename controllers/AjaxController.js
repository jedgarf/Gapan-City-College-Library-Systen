
function loginval(evt, form, msg) {
	
	evt.preventDefault();

	$.ajax({
		url: form.attr("action"),
		type: "POST",
		data: form.serialize(),
		dataType: "json",

		beforeSend: function () {
			msg.html("<span class='text-primary text-center'><i class='fa fa-spinner fa-spin'></i> Loading...</span>");
		},
		success: function (response) {

			//console.log(response);

			if (response["rows"] === true) {
				if (response['type'] == "administrator") {

					//setting session
					sessionStorage.setItem("type", response['type']);
					sessionStorage.setItem("uname", response['uname']);
					
					msg.html("<span class='text-primary text-center'><i class='fa fa-check'></i> Administrator Succesfully Logged!</span>");
					window.location = "administrator/index.php";
				
				} else if (response['type'] == "librarian") {
					
					//setting session
					sessionStorage.setItem("type", response['type']);
					sessionStorage.setItem("uname", response['uname']);
				
					msg.html("<span class='text-primary text-center'><i class='fa fa-check'></i> Librarian Succesfully Logged!</span>");
					window.location = "librarian/index.php";
				
				}
			} else {
				msg.html("<span class='text-danger text-center'><i class='fa fa-warning'></i> Invalid Credentials!</span>");
			}
	
		},
		error: function (error) {
			console.log(error.statusText);
			msg.html("<span class='text-danger text-center'><i class='fa fa-warning'></i> Caught an Error!</span>");
		}
	});
}

/* ----------------------------------------------- Forgot Password ------------------------------------------------------------ */

/* -------------- AJAX Code -------------- */

/* -------------- Initialize Configuration ---------------- */
alertify.set('notifier','position', 'top-right');


/* -------------- Checking Username if Exist in Database -------------- */

function forgotpassCheckun(evt, form, baseUrl, fieldControl, selfControl, msg) {

    evt.preventDefault();

    $.ajax({
        url: form.attr("action"),
        type: "POST",
        data: form.serialize(),
        dataType: 'json',

        beforeSend: function() {
            msg.html("<span class='text-primary'><i class='fa fa-spinner fa-spin'></i> Loading....</span>");
        },

        success: function(response) {

        	//console.log(response.status);

            if (response.status == "false") {
                //fieldControl.css("display", "none");
            	msg.html("<span class='text-danger'><i class='fa fa-warning'></i> Invalid Username!</span>");

            } else if (response.status == "true") {
            	msg.html("");

                fieldControl.css("display", "block");
                selfControl.css("display", "none");
            }

        },

        error: function() {
            msg.html("<span class='text-danger'><i class='fa fa-warning'></i> Internal Error Occured!</span>");
        }
    });
}

/* ----------------- Verify Question/Answer ----------------------- */

function verifyQuest(evt, form, selfControl, newpassControl, submitButton, msg) {
    evt.preventDefault();


    $.ajax({

        url: form.attr("action"),
        type: "POST",
        data: form.serialize(),
        dataType: "json",

        beforeSend: function () {
            msg.html("<span class='text-primary'><i class='fa fa-spinner fa-spin'></i> Loading....</span>");
        },
        success: function (response) {
        	//console.log(response.status);

        	if (response.status == "true") {

        		msg.html("");
        		selfControl.css("display", "none");
	            newpassControl.css("display", "block");
	            submitButton.css("display", "block");

        	} else if (response.status == "false") {
        		msg.html("<span class='text-danger'><i class='fa fa-warning'></i> Incorrect Question/Answer!</span>");
        	}
            
        },
        error: function () {
            alertify.error("<span class='text-danger'><i class='fa fa-warning'></i> Internal Error Occured!</span>");
        }

    });

}


/* -------------- Submiting New Password -------------- */

function forgotPass(evt, form, userName, newPassword, confirmPassword, msg, closeButton) {
    evt.preventDefault();

    if (newPassword.val() == confirmPassword.val()) {
    	$.ajax({

	        url: form.attr("action"),
	        type: "POST",
	        data: {
	            user: userName.val(),
	            pwd: newPassword.val()
	        },
	        dataType: "json",

	        beforeSend: function() {
	            msg.html("<span class='text-primary'><i class='fa fa-spinner fa-spin'></i> Loading....</span>");
	        },

	        success: function(response) {

	            if (response.status == "true") {

	                //msg.html("<span class='text-primary'><i class='fa fa-spinner fa-spin'></i> Loading....</span>");
	                closeButton.trigger("click");
	                alertify.success("<b><i class='fa fa-check'></i> Updating Password Successfully!</b>");

	            } else if (response.status == "false") {

	                 msg.html("<span class='text-danger'><i class='fa fa-warning'></i> Updating Password Error!</span>");

	            }

	        },

	        error: function() {
	            msg.html("<span class='text-danger'><i class='fa fa-warning'></i> Internal Error Occured!</span>");
	        }

	    });

    } else {
    	msg.html("<span class='text-danger'><i class='fa fa-warning'></i> Password doesn't Match!</span>");
    }

}

function gatheringInfo() {

	$.ajax({
		url: "../../../models/gathering_info.php",
		type: "POST",
		data: {
				'type': sessionStorage.getItem('type'),
			 	'uname': sessionStorage.getItem('uname')
		},
		dataType: "json",

		success: function (response) {
			//console.log(response.rows);
			if (response.rows == true) {
				var upload_dir = "../../../storage/uploads/";
				$(".user-photo").attr("src", upload_dir + response.photo);
				$("#user-fullname").text(response.fullname);
				$("#user-role").text(response.type);
			} else {
				
			}
		},
		error: function (error) {
			//console.log(error);
			console.log('Gathering Info did not Work!');
		}

	});

}

function addBook(evt, form, msg) {
	evt.preventDefault();

	$.ajax({
		url: form.attr("action"),
		type: "POST",
		data: new FormData(form[0]),
		processData: false,
		contentType: false,

		beforeSend: function () {
			msg.html("<span class='text-primary'><i class='fa fa-spinner fa-spin'></i> Your Book is Currently Saving....</span>");
		},
		success: function (response) {
			console.log(response);
		},
		error: function () {
			msg.html("<span class='text-danger'><i class='fa fa-warning'></i> Caught an Error!</span>");
		}
	});
}

function addbkCat(evt, form, close, msg) {
	evt.preventDefault();

	$.ajax({
		url: form.attr('action'),
		type: "POST",
		data: form.serialize(),
		dataType: "json",

		beforeSend: function () {
			msg.html("<span class='text-primary'><i class='fa fa-spinner fa-spin'></i> Book Category is Currently Saving....</span>");
		},
		success: function (response) {
			console.log(response.status);
			msg.html("");
			close.trigger("click");
			$("#tblbookCat-body").load("../../../models/tbl_bookcat.php");
			alertify.success("<b><i class='fa fa-check'></i> Save Successfully!</b>");

		},
		error: function (error) {
			console.log(error);
			msg.html("<span class='text-danger'><i class='fa fa-warning'></i> Internal Error!</span>");
		}
	});
}


function addStudent(evt, form, msg, close) {
	evt.preventDefault();

	$.ajax({
		url: form.attr("action"),
		type: "POST",
		data: new FormData(form[0]),
		processData: false,
		contentType: false,

		beforeSend: function () {
			msg.html("<span class='text-primary'><i class='fa fa-spinner fa-spin'></i> Saving, Please Wait....</span>");
		},

		success: function (response) {
			console.log(response);
			//close.trigger("click");
			$("#tblstudlist-view").load("../../../models/tbl_addstudent.php");
			//alertify.success("<b><i class='fa fa-check'></i> Save Successfully!</b>");
			msg.html("<span>"+response+"</span>");
			

		},

		error: function (error) {
			msg.html("<span class='text-danger'><i class='fa fa-warning'></i> Caught an Error!</span>");
		}
	});
}