$.ajax({
  type: 'GET',
  url: '../mapcall.php',
  success: function (data) {
	   $(data).find("airports").each(function(){
			var address = $(this).attr("address");	
			var to = document.getElementById("to");
			opt = document.createElement("option");
			opt.text=address;
			to.add(opt);
			opt2 = document.createElement("option");
			opt2.text=address;
			var froom = document.getElementById("from");
			froom.add(opt2);
   });
  }
});