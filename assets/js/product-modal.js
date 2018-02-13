$(document).on('click','.view-item-button',function(){
	var index = $(this).data('index')
	$.post('product-viewer.php',{
		index : index	
	},function(data){
		$(".modal-content").html(data);
		$('.product-modal').modal();
	})
})



$(document).on('click','.edit-item-button',function(){
	var index = $(this).data('index')
	$.post('product-editor.php',{
		index : index	
	},function(data){
		$(".modal-content").html(data);
		$('.product-modal').modal();
	})
})

$(document).on('click','.delete-item-button',function(){
	var index = $(this).data('index')
	$.post('product-deleter.php',{
		index : index	
	},function(data){
		$(".modal-content").html(data);
		$('.product-modal').modal();
	})
})

$(document).on('click','.additem-button',function(){
	$.post('product-adder.php',{
		// index : 1	
	},function(data){
		$(".modal-content").html(data);
		$('.product-modal').modal();
	})
})


$('.product-modal').on('hidden.bs.modal', function (e) {
  $(".modal-content").html("");
})