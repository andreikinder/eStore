jQuery(function ($) {
	$(document).ready(function () {
		$('a.modal-product-link').click(function () {
			let productId = $(this).data('product-id');
			let data = {
				id: productId,
				action: 'ajax_quick_view',
				nonce: ajax_qick.nonce
			};
			$.ajax({
				url: ajax_qick.url,
				data: data,
				type: 'POST',
				dataType: 'json',
				beforeSend: function (xhr) {
					$('#modal_qick_view .modal-body').text(productId);
				},
				success: function (data) {
					$('#modal_qick_view .modal-content section').html(data.product);
				}
			})



		})
	});
});