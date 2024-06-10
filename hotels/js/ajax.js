$(document).ready(function () {

  var filter_form_timer;

  $("body").on("change", ".sidebar-filter:not(.new-sidebar-filter) form, form.order", function( event ) {

  	var form = $(this);

		if(!!filter_form_timer) {
			clearTimeout(filter_form_timer);
		}
		filter_form_timer = setTimeout(function(){
			form.submit();
		}, 500);
  });

  $("body").on("submit", ".sidebar-filter:not(.no-ajax,.new-sidebar-filter) form, form.order", function( event ) {

  	ajax_reload();

  	return false;

  });


	$("body").on("click", ".routes-show-more", function () {
		var ajaxLink = $(this);
    ajaxLink.addClass("loading");
		//var targetBlock = $(".objects-list");
		$.ajax({
			url: $(this).attr("href"),
			dataType: 'html',
			type: 'GET',
			processData: false,
			contentType: false,
			success: function (htmlData) {
				dataList = $(htmlData).filter('.objects-list').children();
				showMore = $(htmlData).filter('.show-more-wrapper');
				$(".show-more-wrapper").remove();
				$('.objects-list').append(dataList);
				$('.objects-list').after(showMore);
			}
		});
		return false;
	})

	
	$("body").on("click", ".guides-show-more", function () {
		var ajaxLink = $(this);
    ajaxLink.addClass("loading");
		//var targetBlock = $(".objects-list");
		$.ajax({
			url: $(this).attr("href"),
			dataType: 'html',
			type: 'GET',
			processData: false,
			contentType: false,
			success: function (htmlData) {
				dataList = $(htmlData).find('.objects-list').children();
				showMore = $(htmlData).filter('.show-more-wrapper');
				$(".show-more-wrapper").remove();
				$('.objects-list').append(dataList);
				//console.log(showMore);
				$('.objects-list-wrapper').after(showMore);
			}
		});
		return false;
	})
	

	
	$("body").on("click", ".cities-show-more", function () {
		var ajaxLink = $(this);
    ajaxLink.addClass("loading");
		var targetBlock = $(".cities-list");
		$.ajax({
			url: $(this).attr("href"),
			dataType: 'html',
			type: 'GET',
			processData: false,
			contentType: false,
			success: function (htmlData) {
				dataList = $(htmlData).filter('.cities-list').children();
				showMore = $(htmlData).filter('.show-more-wrapper');
				//console.log(showMore);
				$(".show-more-wrapper").remove();
				$('.cities-list').append(dataList);
				$('.cities-list').after(showMore);
			}
		});
		return false;
	})
	
	/*
		Обновление данных в разделе ГДЕ ОСТАНОВИТЬСЯ, ГДЕ ПОЕСТЬ, ЖУРНАЛ
	*/
	
	//обработка чекбокса "все"
	$("body").on("change", "form.filter-form input[type=checkbox]input", function () {
		if($(this).hasClass('checkbox-all')){
			if($(this).prop("checked")){
				$(this).closest('.form-checkboxes').find('input[type=checkbox]').prop("checked", true);
			}else{
				$(this).closest('.form-checkboxes').find('input[type=checkbox]').prop("checked", false);
			}
		}else{
			var all_chbx = $(this).closest('.form-checkboxes').find('.checkbox-all');
			if(all_chbx){
				var checkboxes = $(this).closest('.form-checkboxes').find('input[type=checkbox]');
				var all_checked = true;
				$.each(checkboxes, function( index, value ) {
					if($(value).hasClass('checkbox-all')) return;
					if(!$(value).prop("checked")) all_checked=false;
				});
				if(all_checked) all_chbx.prop("checked", true);
				else all_chbx.prop("checked", false);
			}
		}
	})
	
	function ajax_reload() {
		var form_obj = $(".sidebar-filter form:first");
		var form = $(".sidebar-filter form");
		var formData = $(form_obj).serialize();

		$(".list-wrapper").addClass("block-loading");

		if($('form.order').length > 0){
			var addData = $('form.order').serialize();
			if(addData) {
				if(formData) formData = formData+'&'+addData;
				else formData = addData;
			}
		}

		var url = form.attr('action');
		if(url) {
			//console.log(formData);
			$.ajax({
				url: url,
				dataType: 'html',
				type: 'GET',
				data: formData,
				processData: false,
				contentType: false,
				success: function (htmlData) {
					if(formData) {
						window.history.pushState("", "","?"+formData);
					} else {
						window.history.pushState("", "", url);
					}

					$('.list-wrapper').html(htmlData).removeClass("block-loading");


				}
			});
		}
	}
	
	/*фильтр в афишах*/
	$("body").on("click", ".events-time a", function () {
		
		if(!$(this).hasClass('active')){
			$(".events-time a").removeClass('active');
			$(this).addClass('active');
			if($(this).data('last')=='last'){
				$('form.filter-form input[name=time]').val('last').change();
			}else{
				$('form.filter-form input[name=time]').val('').change();
			}
		}
		
		$('input[name=date_period]').prop('checked', false);
	});
	$("body").on("click", "input[name=date_period]", function () {
		$(".events-time a").removeClass('active');
		$('input[name="date_from"]').val('');
		$('input[name="date_to"]').val('');
	});
	$("body").on("change", "input[name=date_from], input[name=date_to]", function () {
		$(".events-time a").removeClass('active');
		$('input[name="date_period"]').prop('checked', false);
	});

  // $("body").on("submit", "form.filter-form, form.order", function () {
  //   ajax_reload();
  // });

	$("body").on("submit", "form.order", function () {
		ajax_reload();
	});

	$("body").on("click", ".hotels-show-more, .restaurants-show-more, .persons-show-more", function () {
		var ajaxLink = $(this);
		//var targetBlock = $(".objects-list");

		ajaxLink.addClass("loading");

		$.ajax({
			url: $(this).attr("href"),
			dataType: 'html',
			type: 'GET',
			processData: false,
			contentType: false,
			success: function (htmlData) {
				dataList = $(htmlData).find('.objects-list').children();
				showMore = $(htmlData).filter('.show-more-wrapper');
				$(".show-more-wrapper").remove();
				$('.objects-list').append(dataList);
				$('.objects-list').after(showMore);
			}
		});
		return false;
	})

	$("body").on("click", ".journal-show-more", function () {
		var ajaxLink = $(this);
    ajaxLink.addClass("loading");
		//var targetBlock = $(".objects-list");
		$.ajax({
			url: $(this).attr("href"),
			dataType: 'html',
			type: 'GET',
			processData: false,
			contentType: false,
			success: function (htmlData) {
				dataList = $(htmlData).find('.news-list').children();
				showMore = $(htmlData).filter('.show-more-wrapper');
				$(".show-more-wrapper").remove();
				$('.news-list').append(dataList);
				$('.news-list-wrapper').after(showMore);
			}
		});
		return false;
	})
	
	$("body").on("click", ".events-show-more", function () {
		var ajaxLink = $(this);
    ajaxLink.addClass("loading");
		//var targetBlock = $(".objects-list");
		$.ajax({
			url: $(this).attr("href"),
			dataType: 'html',
			type: 'GET',
			processData: false,
			contentType: false,
			success: function (htmlData) {
				dataList = $(htmlData).find('.events-list').children();
				showMore = $(htmlData).filter('.show-more-wrapper');
				$(".show-more-wrapper").remove();
				$('.events-list').append(dataList);
				$('.events-list-wrapper').after(showMore);
			}
		});
		return false;
	})
	
	/*пагинация на поиске*/
	$("body").on("click", ".search-show-more", function () {
		var ajaxLink = $(this);
    ajaxLink.addClass("loading");
		//var targetBlock = $(".objects-list");
		$.ajax({
			url: $(this).attr("href"),
			dataType: 'html',
			type: 'GET',
			processData: false,
			contentType: false,
			success: function (htmlData) {
				dataList = $(htmlData).find('.search-list').children();
				showMore = $(htmlData).find(".show-more-wrapper");
				console.log( $(showMore).html() );
				$(".show-more-wrapper").remove();
				$('.search-list').append(dataList);
				$('.search-list').after(showMore);
			}
		});
		return false;
	})
	
	/*подписка на рассылку*/
	$("body").on("submit", 'form.subscribe_form', function (e) {
		e.preventDefault();
		var email = $(this).find('input[name="email"]').val();
        $.getJSON('/ajax/subscribe/index.php', {
            email:email
        }, function(data){
            if (data.status=='ok'){
                //alert('Вы подписаны на рассылку');
				$('#subscribeModal .modal-body-text').html('Вы подписаны на рассылку');
				$('#subscribeModal').modal('show');
            } else {
                //alert(data.msg);
				$('#subscribeModal .modal-body-text').html(data.msg);
				$('#subscribeModal').modal('show');
            }
        });
    });
	
	
});

{
	let showMoreParent;
	let list;

	let init = () => {
		showMoreParent = document.querySelector('.show-more-wrapper');
		list = document.querySelector('.travel-list');

		if (showMoreParent){

			let isProcessing = false;

			document.addEventListener('click', async e => {
				if ( e.target.classList.contains('audio-show-more') ){
					e.preventDefault();
					if ( isProcessing ) return;
					isProcessing = true;

					let link = e.target;
					let url = new URL(link.href);
					url.searchParams.append('isAjax', 'Y');
					link.classList.add('loading');

					let data = new FormData();
					data.append('isAjax', 'Y');

					try{
						let response = await fetch(url, {
							method: "POST",
							body: data
						});
						let result = await response.text();

						isProcessing = false;

						document.querySelector('.show-more-wrapper').remove();

						list.innerHTML = list.innerHTML + result;

					}catch(e){
						console.log('Произошла ошибка загрузки!');
						console.log(e);
					}
				}
			});
		}
	};

	document.addEventListener('DOMContentLoaded', init);
}