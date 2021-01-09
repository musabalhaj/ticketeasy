$(document).ready(function($) {


	$('.confirm').click(function(){
		return confirm('Do You Want To Delete ?!');
	 });

	$(document).ready(function(){
		$(".alert-success").animate({
			top: '62px'
		},1000).fadeOut(4000);
	});
	

	// Datatable
	if($('.datatable').length > 0) {
		$('.datatable').DataTable({
			
			"lengthMenu":[[10,25,50,100,-1],[10,25,50,100,"All"]],
			"pagingType":"numbers",
			"language":{
				"lengthMenu":"Show _MENU_ Records.",
				"zeroRecords":"No Records To Show!",
				"infoEmpty":"Nothing Found!",
				"info":"Showing  _START_ To _END_ From _TOTAL_ Records.",
				"infoFiltered":"(Fillterd From _MAX_ Records)",
				"search":"<span>Search</span> _INPUT_"
				
			}
		});
	}
});
    