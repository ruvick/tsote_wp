// Файлы Java Script -----------------------------------------------------------------------------------------------------

// возвращает куки с указанным name,
// или undefined, если ничего не найдено
function getCookie(name) {
	let matches = document.cookie.match(new RegExp(
		"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	));
	return matches ? decodeURIComponent(matches[1]) : undefined;
}


function number_format() {
	let elements = document.querySelectorAll('.price_formator');
	for (let elem of elements) {
		elem.dataset.realPrice = elem.innerHTML;
		elem.innerHTML = Number(elem.innerHTML).toLocaleString('ru-RU');
	}
}

function set_size(sizeName) {
	let btn = document.getElementById('btn__to-card');
	btn.dataset.size = sizeName;
	console.log(sizeName);
}

document.addEventListener("DOMContentLoaded", () => {
	number_format();
	cart_recalc();
});

//--- Корзина -------------------------------------------------------------------------------------------------------------

let cart = [];
let cartCount = 0;

function cart_recalc() {
	cart = JSON.parse(localStorage.getItem("cart"));
	if (cart == null) cart = [];
	cartCount = 0;
	cartSumm = 0;
	for (let i = 0; i < cart.length; i++) {
		cartCount += Number(cart[i].count);

		cartSumm += Number(cart[i].count) * parseFloat(cart[i].price);
	}

	localStorage.setItem("cartcount", cartCount);
	localStorage.setItem("cartsumm", cartSumm);

	let elements = document.querySelectorAll('.bascet_counter');
	for (let elem of elements) {
		elem.innerHTML = cartCount;
	}

}

function add_tocart(elem, countElem) {


	let cartElem = {
		sku: elem.dataset.sku,
		size: elem.dataset.size,
		lnk: elem.dataset.lnk,
		price: elem.dataset.price,
		priceold: elem.dataset.oldprice,
		subtotal: elem.dataset.price,
		name: elem.dataset.name,
		count: (countElem == 0) ? elem.dataset.count : countElem,
		picture: elem.dataset.picture
	};

	if (cart.length == 0) {
		cart.push(cartElem);
	} else {
		let addet = true;
		for (let i = 0; i < cart.length; i++) {
			if ((cart[i].sku == cartElem.sku) && (cart[i].size == cartElem.size)) {
				cart[i].count++;
				cart[i].subtotal = Number(cart[i].count) * parseFloat(cart[i].price);
				addet = false;
				break;
			}
		}

		if (addet)
			cart.push(cartElem);
	}

	localStorage.setItem("cart", JSON.stringify(cart));
	cart_recalc();

	console.log(cartElem);
}
//------------------------------------------------------------------------------------------------------------

const iconMenu = document.querySelector(".icon-menu");
const body = document.querySelector("body");
const menuBody = document.querySelector(".mob-menu");
//const menuListItemElems = document.querySelector(".mob-menu__list");
const mobsearch = document.querySelector(".mob-search");
const headsearch = document.querySelector(".header__search");

//BURGER
if (iconMenu) {
	iconMenu.addEventListener("click", function () {
		iconMenu.classList.toggle("active");
		body.classList.toggle("lock");
		menuBody.classList.toggle("active");
	});
}

// Закрытие моб меню при клике на якорную ссылку
// if (menuListItemElems) {
// 	menuListItemElems.addEventListener("click", function () {
// 		iconMenu.classList.toggle("active");
// 		body.classList.toggle("lock");
// 		menuBody.classList.toggle("active");
// 	});
// }

// Строка поиска на мобилках 
if (mobsearch) {
	mobsearch.addEventListener("click", function () {
		headsearch.classList.toggle("active");
	});
}

// Закрытие моб меню при клике вне области меню 
window.addEventListener('click', e => { // при клике в любом месте окна браузера
	const target = e.target // находим элемент, на котором был клик

	if (!target.closest('.icon-menu') && !$(menuBody).has($(target)).length <= 0 && !target.closest('.mob-menu') && !target.closest('.mob-search') && !target.closest('.header__search') && !target.closest('._popup-link') && !target.closest('.popup')) {
		iconMenu.classList.remove('active') // то закрываем окно навигации, удаляя активный класс
		menuBody.classList.remove('active')
		body.classList.remove('lock')
		// headsearch.classList.remove('active')
	}
})

// Плавная прокрутка
const smotScrollElems = document.querySelectorAll('a[href^="#"]:not(a[href="#"])');

smotScrollElems.forEach(link => {
	link.addEventListener('click', (event) => {
		event.preventDefault()
		console.log(event);

		const id = link.getAttribute('href').substring(1)
		console.log('id : ', id);

		document.getElementById(id).scrollIntoView({
			behavior: 'smooth'
		});
	})
});


// BodyLock для Popup на JS
function body_lock(delay) {
	let body = document.querySelector("body");
	if (body.classList.contains('lock')) {
		body_lock_remove(delay);
	} else {
		body_lock_add(delay);
	}
}
function body_lock_remove(delay) {
	let body = document.querySelector("body");
	if (unlock) {
		let lock_padding = document.querySelectorAll("._lp");
		setTimeout(() => {
			for (let index = 0; index < lock_padding.length; index++) {
				const el = lock_padding[index];
				el.style.paddingRight = '0px';
			}
			body.style.paddingRight = '0px';
			body.classList.remove("lock");
		}, delay);

		unlock = false;
		setTimeout(function () {
			unlock = true;
		}, delay);
	}
}
function body_lock_add(delay) {
	let body = document.querySelector("body");
	if (unlock) {
		let lock_padding = document.querySelectorAll("._lp");
		for (let index = 0; index < lock_padding.length; index++) {
			const el = lock_padding[index];
			el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
		}
		body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
		body.classList.add("lock");

		unlock = false;
		setTimeout(function () {
			unlock = true;
		}, delay);
	}
}

// Popup JS
let unlock = true;
let popup_link = document.querySelectorAll('._popup-link');
let popups = document.querySelectorAll('.popup');
for (let index = 0; index < popup_link.length; index++) {
	const el = popup_link[index];
	el.addEventListener('click', function (e) {
		if (unlock) {
			let item = el.getAttribute('href').replace('#', '');
			let video = el.getAttribute('data-video');
			popup_open(item, video);
		}
		e.preventDefault();
	})
}
for (let index = 0; index < popups.length; index++) {
	const popup = popups[index];
	popup.addEventListener("click", function (e) {
		if (!e.target.closest('.popup__body')) {
			popup_close(e.target.closest('.popup'));
		}
	});
}
function popup_open(item, video = '') {
	let activePopup = document.querySelectorAll('.popup._active');
	if (activePopup.length > 0) {
		popup_close('', false);
	}
	let curent_popup = document.querySelector('.popup_' + item);
	if (curent_popup && unlock) {
		if (video != '' && video != null) {
			let popup_video = document.querySelector('.popup_video');
			popup_video.querySelector('.popup__video').innerHTML = '<iframe src="https://www.youtube.com/embed/' + video + '?autoplay=1"  allow="autoplay; encrypted-media" allowfullscreen></iframe>';
		}
		if (!document.querySelector('.menu__body._active')) {
			body_lock_add(500);
		}
		curent_popup.classList.add('_active');
		history.pushState('', '', '#' + item);
	}
}
function popup_close(item, bodyUnlock = true) {
	if (unlock) {
		if (!item) {
			for (let index = 0; index < popups.length; index++) {
				const popup = popups[index];
				let video = popup.querySelector('.popup__video');
				if (video) {
					video.innerHTML = '';
				}
				popup.classList.remove('_active');
			}
		} else {
			let video = item.querySelector('.popup__video');
			if (video) {
				video.innerHTML = '';
			}
			item.classList.remove('_active');
		}
		if (!document.querySelector('.menu__body._active') && bodyUnlock) {
			body_lock_remove(500);
		}
		history.pushState('', '', window.location.href.split('#')[0]);
	}
}
let popup_close_icon = document.querySelectorAll('.popup__close,._popup-close');
if (popup_close_icon) {
	for (let index = 0; index < popup_close_icon.length; index++) {
		const el = popup_close_icon[index];
		el.addEventListener('click', function () {
			popup_close(el.closest('.popup'));
		})
	}
}
document.addEventListener('keydown', function (e) {
	if (e.code === 'Escape') {
		popup_close();
	}
});
// Файлы Java Script End -----------------------------------------------------------------------------------------------------

$ = jQuery;

// Файлы jQuery---------------------------------------------------------------------------------------------------------------

// Маска телефона
var inputmask_phone = { "mask": "+9(999)999-99-99" };
Inputmask(inputmask_phone).mask("input[type='tel']");

// // Slider на главной
$('.slider').slick({
	arrows: false,
	dots: true,
	infinite: true,
	speed: 1000,
	slidesToShow: 1,
	autoplay: true,
	autoplaySpeed: 1800,
	adaptiveHeight: true
});


$('.clients__slider').slick({
	arrows: true,
	dots: false,
	infinite: true,
	speed: 1000,
	slidesToShow: 5,
	autoplay: true,
	autoplaySpeed: 1800,
	adaptiveHeight: true,
	responsive: [
		{
			breakpoint: 812,
			settings: {
				slidesToShow: 4,
				arrows: false,
			}
		}, {
			breakpoint: 612,
			settings: {
				slidesToShow: 3,
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 2,
			}
		}
	]
});

$('.licenses__slider').slick({
	arrows: true,
	dots: false,
	infinite: true,
	speed: 1000,
	slidesToShow: 5,
	autoplay: true,
	autoplaySpeed: 1800,
	adaptiveHeight: true,
	responsive: [
		{
			breakpoint: 812,
			settings: {
				slidesToShow: 4,
				arrows: false,
			}
		}, {
			breakpoint: 612,
			settings: {
				slidesToShow: 3,
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 2,
			}
		}
	]
});

$('.thanksgiving__slider').slick({
	arrows: true,
	dots: false,
	infinite: true,
	speed: 1000,
	slidesToShow: 5,
	autoplay: true,
	autoplaySpeed: 1800,
	adaptiveHeight: true,
	responsive: [
		{
			breakpoint: 812,
			settings: {
				slidesToShow: 4,
				arrows: false,
			}
		}, {
			breakpoint: 612,
			settings: {
				slidesToShow: 3,
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 2,
			}
		}
	]
});


// Табы
$('body').on('click', '.tab__navitem', function (event) {
	var eq = $(this).index();
	if ($(this).hasClass('parent')) {
		var eq = $(this).parent().index();
	}
	if (!$(this).hasClass('active')) {
		$(this).closest('.tabs').find('.tab__navitem').removeClass('active');
		$(this).addClass('active');
		$(this).closest('.tabs').find('.tab__item').removeClass('active').eq(eq).addClass('active');
		if ($(this).closest('.tabs').find('.slick-slider').length > 0) {
			$(this).closest('.tabs').find('.slick-slider').slick('setPosition');
		}
	}
});


// Открытие модального окна
$(".popup-quest").on('click', function (e) {
	e.preventDefault();
	jQuery(".windows_form h2").html(jQuery(this).data("winheader"));
	jQuery(".windows_form .subtitle").html(jQuery(this).data("winsubheader"));
	jQuery("#question").arcticmodal();
});


var onloadCallback = function () {
	var widgetServices = grecaptcha.render(document.querySelector('.form-services .g-recaptcha'), { 'sitekey': '6LdHmJwdAAAAAK197nHFbG8xLm4qN9h6hLTr9b6w' });
	var widgetCallback = grecaptcha.render(document.querySelector('.popup_callback .g-recaptcha'), { 'sitekey': '6LdHmJwdAAAAAK197nHFbG8xLm4qN9h6hLTr9b6w' });

	$('.newButton').click(function (e) {
		e.preventDefault();

		const captcha = grecaptcha.getResponse(widgetCallback);

		const name = $("#form-callback-name").val();
		const tel = $("#form-callback-tel").val();
		const email = $("#form-callback-email").val();

		if (!captcha.length) {
			$(this).parent().find('.recaptchaError').text('* Вы не прошли проверку "Я не робот"');
			// Если сервер вернул ответ error, то сбрасываем виджет reCaptcha
			grecaptcha.reset(widgetCallback);
		} else {
			$(this).parent().find('.recaptchaError').text('');
			if (jQuery("#form-callback-tel").val() == "") {
				jQuery("#form-callback-tel").css("border", "1px solid red");
			} else {
				var jqXHR = jQuery.post(
					allAjax.ajaxurl,
					{
						action: 'sendphone',
						nonce: allAjax.nonce,
						name: name,
						tel: tel,
						email: email,
						captcha: captcha
					}
				);

				jqXHR.done(function (responce) {
					jQuery(".headen_form_blk").hide();
					jQuery('.SendetMsg').show();
				});

				jqXHR.fail(function (responce) {
					alert("Произошла ошибка. Попробуйте позднее.");
				});
			}
		}
	});

	if ($('.form-services .g-recaptcha').length > 0) {
		$('.form-services .submit-button').click(function (e) {
			e.preventDefault();
			const captcha = grecaptcha.getResponse(widgetServices);
			const name = $(".form-services input[name='bane']").val();
			const tel = $(".form-services input[name='tel']");
			const email = $(".form-services input[name='email']").val();
			const button = $(this);

			if (!captcha.length) {
				$(this).parent().find('.recaptchaError').text('* Вы не прошли проверку "Я не робот"');
				$(this).parent().find('.recaptchaError').addClass('show')
				// Если сервер вернул ответ error, то сбрасываем виджет reCaptcha
				grecaptcha.reset(widgetServices);
			} else {
				$(this).parent().find('.recaptchaError').text('');
				$(this).parent().find('.recaptchaError').removeClass('show')

				if (tel.val() == "") {
					tel.css("border", "1px solid red");
				} else {
					tel.css("border", "1px solid #737373");
					//console.log( { url: allAjax.ajaxurl, none: allAjax.nonce, name: name, tel: tel, email: email, captcha: captcha} )

					$.ajax({
						url: allAjax.ajaxurl,
						type: 'post',
						data: { action: 'sendphone', nonce: allAjax.nonce, name: name, tel: tel.val(), email: email, captcha: captcha }
					}).done(function (response) {
						//console.log(response)
						button.prop('disabled', true);
						$('.form-services .text-response').addClass('show').html(response);
						// jQuery(".headen_form_blk").hide();
						//$('.SendetMsg').show();
					}).fail(function (responce) {
						alert("Произошла ошибка. Попробуйте позднее.");
					});
				}
			}
		})
		$('.form-services').submit(function (e) {
			e.preventDefault();
		})
	}
}

// Поиск по сайту
jQuery(document).ready(function ($) {
	const search_input = $('.search-form__input');
	const search_results = $('.ajax-search');

	search_input.keyup(function () {
		let search_value = $(this).val();

		if (search_value.length > 2) { // кол-во символов 
			$.ajax({
				url: '/wp-admin/admin-ajax.php',
				type: 'POST',
				data: {
					'action': 'ajax_search', // functions.php 
					'term': search_value
				},
				success: function (results) {
					search_results.fadeIn(200).html(results);
				}
			});
		} else {
			search_results.fadeOut(200);
		}
	});

	// Закрытие поиска при клике вне его 
	$(document).mouseup(function (e) {
		if (
			(search_input.has(e.target).length === 0) &&
			(search_results.has(e.target).length === 0)
		) {
			search_results.fadeOut(200);
		};
	});

	$('.mob-menu .has-dropdown .dropdown-arrow').click(function (e) {
		e.preventDefault();
		console.log($(this))
		$(this).toggleClass('opened');
		$(this).parents('.has-dropdown').parent().children('.sub-menu').toggleClass('opened');
	})
});

