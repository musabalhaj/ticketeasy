$(document).ready(function($) {

	$('.confirm').click(function(){
		return confirm('هل تريد الحذف حقاً؟');
	 });

	 $(document).ready(function(){
		$(".alert-success").animate({
			top: '62px'
		},1000).fadeOut(4000);
	});
	
	// Datatable
	if($('.datatable').length > 0) {
		$('.datatable').DataTable({
			
			"lengthMenu":[[10,25,50,100,-1],[10,25,50,100,"الكل"]],
			"pagingType":"numbers",
			"language":{
				"lengthMenu":"عرض _MENU_ سجلات",
				"zeroRecords":"لا توجد سجلات!",
				"infoEmpty":"لم يتم إيجاد شيء!",
				"info":"عرض  _START_ الى _END_ من أصل _TOTAL_ سجل.",
				"infoFiltered":"(تمت التصفية من _MAX_ سجل)",
				"search":"<span>بحث</span> _INPUT_"
			}
			
		});
	}
});
    