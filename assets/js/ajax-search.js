jQuery(function ($) {
	let $search = $('.search_form input[name="s"]');
	$search.on('keyup', function () {
		let $search_val = $search.val();
		if ($search_val.length < 3) return false;

		var data = {
			s: $search_val,
			action: 'search_action',
			nonce: search_form.nonce
		};


		$.ajax({
			url: search_form.url,
			data: data,
			type: 'POST',
			dataType: 'json',
			beforeSend: function (xhr) {
				$('.search-result-close').text('Ищем....');
			},
			success: function (data) {

				$('.search-result-close').text('Очистить');
				$('.search_form').css('overflow', 'visible');
				$('.search_form .search-result').html(data.out);
				$('.search-result').addClass('search-result-over');
			}
		});
	});

	$('.search-result-close').click(hideCard);
	$('.icon-search').click(hideCard);

	function hideCard() {
		$('.search-result').removeClass('search-result-over');
		$('.search-result').empty();
		$('.search_form input[name="s"]').val('');
	}


});