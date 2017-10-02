/**
 * Main.js
 */
$(document).ready(function(){
	if (
		document.title != $("h1").text()) {document.title = $("h1").text();
	}
	$('#basicExample').on('show.bs.modal', function (e) {
        var userid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'POST',
            url : 'fetch_user.php', //Here you will fetch records
            data :  'userid='+ userid, //Pass $id
            success : function(data){
            	$('.modal-body').html(data);//Show fetched data from database
			}
        });
     });
});
