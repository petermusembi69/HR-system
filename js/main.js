$(document).ready(function(){
	
	//  ============= show leave =========
    function leavedisplay(){
	   $.ajax({
		  url     :"action.php",
		  method  :"POST",
		  data    : {leaveCheck:1},
		  success : function(data){
			if(data.success){
				$("#leave_msg").html(data);
		    }else{
			console.log('error');
		}
	}
	   })
    }
	leavedisplay();
	
	//  ============= LOGIN =========
       $("#loginhr").click(function(event){
		event.preventDefault();
		var email = $("#email_hr").val();
		var pass = $("#pass_wordhr").val();
		  $.ajax({
		    url    : "login.php",
			method : "POST",
		    data   : {userLogin:1,userEmail:email,userPassword:pass},
			success: function(data){
				window.location.href ="profile.php";
				leavedisplay();
				}

		})
	})
       //  ============= ADMIN LOGIN =========
       $("#loginadminhr").click(function(event){
		event.preventDefault();
		var email = $("#email_adminhr").val();
		var pass = $("#pass_wordadminhr").val();
		  $.ajax({
		    url    : "loginadmin.php",
			method : "POST",
		    data   : {userLogin:1,userEmail:email,userPassword:pass},
			success: function(data){
				window.location.href ="adminprofile.php";
				}

		})
	})
	//  ============= Register employee =========
	$("#signup_button").click(function(event){
		event.preventDefault();
		$.ajax({
			url     :"register.php",
			method  :"POST",
			data    : $("form").serialize(),
			success : function(data){
				$("#signup_msg").html(data);
			}
	  })
	})
	//  ============= Search employee =========
	
    $("#search_btn").click(function(event){
        var key = $("#search_hr").val();
        if(key !=""){
        $.ajax({
           url    : "action.php",
           method : "POST",
           data   : {search:1,userKeyword:key},
           success: function(data){
               $("#get_results").html(data);
           }
       })
    }	event.preventDefault();
}) 
	//  ============= Search employee =========
	
    $("#searchemp_btn").click(function(event){
        var keyword = $("#searchemp_hr").val();
        if(keyword !=""){
        $.ajax({
           url    : "action.php",
           method : "POST",
           data   : {empSearch:1,empKey:keyword},
           success: function(data){
               $("#get_emp").html(data);
           }
       })
    }	event.preventDefault();
}) 
	//  ============= Delete employee =========
	
    $("body").delegate(".remove","click",function(event){
		event.preventDefault();
		var pid = $(this).attr("remove_id");
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {removeEmp:1,removeId:pid},
			success : function(data){
				$("#get_emp").html(data);
		    }
		})
		
	})

		//  ============= assign leave =========
		$("#assign_button").click(function(event){
			event.preventDefault();
			$.ajax({
				url     :"regleave.php",
				method  :"POST",
				data    : $("form").serialize(),
				success : function(data){
					$("#assign_msg").html(data);
				}
		  })
		})
		
		//  ============= show leave =========
		function leavedisplay(){
			$.ajax({
				url     :"action.php",
				method  :"POST",
				data    : {leaveCheck:1},
				success : function(data){
					$("#leave_msg").html(data);
				}
		    })
		}
		$("#complainsubmit").click(function(event){
			event.preventDefault();
			$.ajax({
				url     :"complain.php",
				method  :"POST",
				data    : $("form").serialize(),
				success : function(data){
					$("#complain_msg").html(data);
				}
		  })
		})
		$("body").delegate(".ddate","keyup",function(){
			var sdate =$("#start_date").val();
			var edate =$("#end_date").val();
			var daysz = edate - sdate;
			$("#days").val(daysz);	
		
		})

 })
