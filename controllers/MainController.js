
function login_init() {

	if (sessionStorage.getItem('type') == "administrator") {
		window.location = "administrator/index.php";
	} else if (sessionStorage.getItem('type') == "librarian") {
		window.location = "librarian/index.php";
	} else {
		$("#username").focus();
	}

}

function jsInit() {
	//$('nav.side-navbar').toggleClass('shrink');
	//$('.page').toggleClass('active');
	
	//for disable select option
	document.onselectstart = new Function('return false');
	//----------------------------------------------------------------------------------//
	
	// Admin Route

	// default Load in Content
	 $("#admin-content").load("dashboard.php");

	// Menu Routing Function
	$("#dashboard-button").click(function () {
		$("#admin-content").load("dashboard.php");
	});

	$("#booklist-button").click(function () {
		$("#admin-content").load("book_list.php");
	});
	$("#bookcat-button").click(function () {
		
		$("#admin-content").load("book_category.php");

	});
	$("#bookinventory-button").click(function () {
		$("#admin-content").load("book_inventory.php");
	});

	$("#studentlist-button").click(function () {
		$("#admin-content").load("student_list.php");
	});
	$("#studentpenalty-button").click(function () {
		$("#admin-content").load("student_penalty.php");
	});

	$("#librarianlist-button").click(function () {
		$("#admin-content").load("librarian_list.php");
	});
	$("#librarianpenalty-button").click(function () {
		$("#admin-content").load("librarian_penalty.php");
	});

	$("#borrowed-button").click(function () {
		$("#admin-content").load("borrowed.php");
	});
	$("#return-button").click(function () {
		$("#admin-content").load("return.php");
	});

	$("#adminprofile-button").click(function () {
		$("#admin-content").load("administrator_profile.php");
	});
	$("#genaratedb-button").click(function () {
		$("#admin-content").load("generatedb_page.php");
	});
/*----------------------------------------------------------*/

// Librarian Routes

// default Load in Content
	 $("#librarian-content").load("dashboard.php");

	// Menu Routing Function
	$("#librarian-dashboard-button").click(function () {
		$("#librarian-content").load("dashboard.php");
	});

	$("#librarian-booklist-button").click(function () {
		$("#librarian-content").load("book_list.php");
	});
	$("#librarian-bookcat-button").click(function () {
		
		$("#librarian-content").load("book_category.php");

	});
	$("#librarian-bookinventory-button").click(function () {
		$("#librarian-content").load("book_inventory.php");
	});

	$("#librarian-studentlist-button").click(function () {
		$("#librarian-content").load("student_list.php");
	});
	$("#librarian-studentpenalty-button").click(function () {
		$("#librarian-content").load("student_penalty.php");
	});

	$("#librarian-borrowed-button").click(function () {
		$("#librarian-content").load("borrowed.php");
	});
	$("#librarian-return-button").click(function () {
		$("#librarian-content").load("returned.php");
	});

	$("#librarian-profile-button").click(function () {
		$("#librarian-content").load("librarian_profile.php");
	});

/*----------------------------------------------------------*/
	
}

function admin_init() {

	if (sessionStorage.getItem('type') == "administrator") {
		return gatheringInfo();
	} else if (sessionStorage.getItem('type') == "librarian") {
		window.location = "../librarian/index.php";
	} else {
		window.location = "../login.php";
	}
}

function lib_init() {
	if (sessionStorage.getItem('type') == "administrator") {
		window.location = "../administrator/index.php";
	} else if (sessionStorage.getItem('type') == "librarian") {
		return gatheringInfo();
	} else {
		window.location = "../login.php";
	}
}

function logout() {
	sessionStorage.removeItem('type');
	sessionStorage.removeItem('uname');
	window.location = "../login.php";
	return true;
}
	
function see() {
	if (document.getElementById('eye').checked == true) {
			$('#password').attr("type", "text");
			$('#eye-label').text("Hide Password");
		} else {
			$('#password').attr("type", "password");
			$('#eye-label').text("Show Password");
		}
}

function forgotpassSee() {
	if (document.getElementById('forgotpass-eye').checked == true) {
		$('#forgotNewpass').attr("type", "text");
		$('#forgotConpass').attr("type", "text");
		$('#forgotpass-eye-label').text("Hide Password");
	} else {
		$('#forgotNewpass').attr("type", "password");
		$('#forgotConpass').attr("type", "password");
		$('#forgotpass-eye-label').text("Show Password");
	}
}

function quest_Reset() {
	$("#forgotAns").val("");
}

function unameManipulate() {
	$("#quest_username").val($("#forgotUn").val());
}

function inputpwdReset() {
	$("#forgotNewpass").val("");
	$("#forgotConpass").val("");
	$("#msg").html("");
}

/* 
 * display none
 * verifyAcc
 * questFs
 * newpassFs
 * submitButton
 *
 * reset value
 * forgotUn
 *
 * trigger click
 * quest-reset
 * forgotReset
 * 
 */
function forgotpassResetall() {
	//alert("Im here!");
	$("#verifyAcc").css("display", "block");
	$("#questFs").css("display", "none");
	$("#newpassFs").css("display", "none");
	$("#submitButton").css("display", "none");
	$("#forgotUn").val("");
	$("#quest-reset").trigger("click");
	$("#forgotReset").trigger("click");
}

function bookImageupload(event) {
	var output = document.getElementById('stud-image-preview');
	output.src = URL.createObjectURL(event.target.files[0]);
}

function barcodeStrict(e) {
	var keyCode = (e.keyCode ? e.keyCode : e.which);
	//console.log(keyCode);
	if ((keyCode >= 48 && keyCode <= 57) || keyCode == 8) {
		return true;
	}else{
		e.preventDefault();
	}
}

function alphaStrict(e) {
	var keyCode = (e.keyCode ? e.keyCode : e.which);
	//console.log(keyCode);
	if ((keyCode >= 65 && keyCode <= 90) || keyCode == 8) {
		return true;
	}else{
		e.preventDefault();
	}
}

function restorePreview(ctrl) {
	ctrl.attr("src", "../../../library/import-images/preview.jpg");
}

function viewbookTable(evt) {
	evt.html("<tr><td>hello</td><td>hi</td></tr>");
}

function viewstudTable(evt) {
	evt.html("<tr><td>hello</td><td>hi</td></tr>");
}

function toggleFullScreen() {
  if (!document.fullscreenElement &&    // alternative standard method
      !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
    if (document.documentElement.requestFullscreen) {
      document.documentElement.requestFullscreen();
    } else if (document.documentElement.msRequestFullscreen) {
      document.documentElement.msRequestFullscreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullscreen) {
      document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}

function context() {
	$.contextMenu({
      selector: '.document', 
      trigger: 'left',
      callback: function(key, options) {
          var m = "clicked: " + key;
          window.console && console.log(m) || alert(m); 
      },
      items: {
          "edit": {name: "Edit", icon: "edit"},
          "cut": {name: "Cut", icon: "cut"},
          "copy": {name: "Copy", icon: "copy"},
          "paste": {name: "Paste", icon: "paste"},
          "delete": {name: "Delete", icon: "delete"},
          "sep1": "---------",
          "quit": {name: "Quit", icon: function($element, key, item){ return 'context-menu-icon context-menu-icon-quit'; }}
      }
  });
}