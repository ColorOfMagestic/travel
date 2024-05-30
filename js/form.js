$(document).ready(function () {
	/*
		Форма на внутренних страницах
	*/
	$("form[name = INNER_FORM] ").submit(function (e) {
		e.preventDefault();
		if ($(this).valid()) {
			var form = $(this);
			var form_value = form.serialize();

      form.find("[type=submit]").hide();
      form.find("[type=submit]").after('<div class="form-loader" style="height:' + form.find("[type=submit]").outerHeight() + 'px"></div>');

			$.ajax({
				url: '/ajax/inner_form/',
				dataType: 'html',
				type: 'POST',
				data: form_value,
				success: function (html, data) {
					formSuccess(form)
          form.find("[type=submit]").show();
          form.find(".form-loader").remove();
				}
			});
		}
	});
	
	/*
		Форма в шапке
	*/
	$("form[name = SIMPLE_FORM_5] ").submit(function (e) {
		e.preventDefault();
		if ($(this).valid()) {
			var form = $(this);
			var form_value = form.serialize();

			form.find("[type=submit]").hide();
			form.find("[type=submit]").after('<div class="form-loader" style="height:' + form.find("[type=submit]").outerHeight() + 'px"></div>');

			$.ajax({
				url: '/ajax/write_us_header/',
				dataType: 'html',
				type: 'POST',
				data: form_value,
				success: function (html, data) {
					formSuccess(form);
          form.find("[type=submit]").show();
          form.find(".form-loader").remove();
				}
			});
		}
	});
	
	/*
		Форма на странице контакты
	*/
	$("form[name = SIMPLE_FORM_4] ").submit(function (e) {
		e.preventDefault();
		if ($(this).valid()) {
			var form = $(this);
			var form_value = form.serialize();

      form.find("[type=submit]").hide();
      form.find("[type=submit]").after('<div class="form-loader" style="height:' + form.find("[type=submit]").outerHeight() + 'px"></div>');

			$.ajax({
				url: '/ajax/write_us/',
				dataType: 'html',
				type: 'POST',
				data: form_value,
				success: function (html, data) {
					formSuccess(form)
          form.find("[type=submit]").show();
          form.find(".form-loader").remove();
				}
			});
		}
	});
	
	/*
		Форма на странице обратная связь
	*/
	$("form[name = FEEDBACK] ").submit(function (e) {
		e.preventDefault();
		if ($(this).valid()) {
			var form = $(this);
			var form_value = form.serialize();

      form.find("[type=submit]").hide();
      form.find("[type=submit]").after('<div class="form-loader" style="height:' + form.find("[type=submit]").outerHeight() + 'px"></div>');

			$.ajax({
				url: '/ajax/feedback/',
				dataType: 'html',
				type: 'POST',
				data: form_value,
				success: function (html, data) {
					formSuccess(form)
          form.find("[type=submit]").show();
          form.find(".form-loader").remove();
				}
			});
		}
	});
	
	/*
		Форма на странице "карты"
	*/
	$("form[name = WRITE_US_CARD] ").submit(function (e) {
		e.preventDefault();
		if ($(this).valid()) {
			var form = $(this);
			var form_value = form.serialize();

      form.find("[type=submit]").hide();
      form.find("[type=submit]").after('<div class="form-loader" style="height:' + form.find("[type=submit]").outerHeight() + 'px"></div>');

			$.ajax({
				url: '/ajax/write_us_card/',
				dataType: 'html',
				type: 'POST',
				data: form_value,
				success: function (html, data) {
					formSuccess(form)
          form.find("[type=submit]").show();
          form.find(".form-loader").remove();
				}
			});
		}
	});
	
	function formSuccess(form) {
	  form.find(".form-group input, .form-group textarea").val("");
	  form.find(".placeholder").show();
	  $("#successFormModal").modal("show");
	  form.closest(".modal").modal("hide");
	  if( form.find("input[name='replace_form']").val() == "Y" ){
		//console.log('replace=Y');
		form.html('<div class="section-points"><div class="h2">ВАШ ЗАЯВКА ПРИНЯТА</div><p>В ближайшее время с Вами свяжутся наши менеджеры.</p></div>');
	  }
	}
})