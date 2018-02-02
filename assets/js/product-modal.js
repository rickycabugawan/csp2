$(".view-item-button").click(function(){
		var index = $(this).data('index')
		$.post('product-viewer.php',{
			index : index	
		},function(data){
			$(".modal-content").html(data);
		})
	})
