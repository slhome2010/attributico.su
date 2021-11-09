function initmap() {
    var myLatlng = new google.maps.LatLng(54.8715945, 69.1294233, 15);
    var mapOptions = {
        zoom: 6,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: "Hello World!"
    });
}

$(document).ready(function () {

    //thumbnails without animation
    var $thumb = $('#thumbnials');
    if ($thumb.length) {
        $thumb.justifiedGallery({
            border: 6,
            lastRow: 'nojustify'
        }).on('jg.complete', function () {
            $thumb.lightGallery({
                thumbnail: true,
                //   animateThumb: false,
                //   showThumbByDefault: false,
               loadYoutubeThumbnail: false,
                youtubeThumbSize: 'default',
              //  loadVimeoThumbnail: true,
              //  vimeoThumbSize: 'thumbnail_medium',
				youtubePlayerParams: {
					modestbranding: 1,
					showinfo: 0,
					rel: 0,
					controls: 0
				}
            });
        });
    }

   // $('#videos').lightGallery();
   // $('#videos-without-poster').lightGallery();
  //  $('#video-player-param').lightGallery({
   //     youtubePlayerParams: {
    //        modestbranding: 1,
    //        showinfo: 0,
    //        rel: 0,
    //        controls: 0
    //    },
    //    vimeoPlayerParams: {
    //        byline: 0,
    //        portrait: 0,
     //       color: 'A90707'
    //    }
   // });
   
    // docs features
	$('body').each(function () {
			var $spy = $(this).scrollspy('refresh')		
	});
	
	$("a.lightgallery").lightGallery({selector: 'this'});	
	$('[id ^= "example"]').lightGallery({selector: '.lg-item'}); 
	$('[id ^= "gallery"]').lightGallery({selector: '.lg-item'}); 

	// maps
	//initmap();
	
	// buttons example
	$("button#btnSearch").attr("disabled", true);
    $("input#autoComplete").change(function (e) {     
        $("button#btnSearch").attr("disabled", $(this).is(":checked"));
    });
   
    // send mail features
    $("#send").click(function () { //устанавливаем событие отправки для формы с id=form
        var form_data = $("#form").serialize(); //собераем все данные из формы
        $.ajax({
            type: "POST", //Метод отправки
            url: "/send.php", //путь до php фаила отправителя
            data: form_data,
            success: function (data) {
                //код в этом блоке выполняется при успешной отправке сообщения
                alert("Your message has been sent! Thank you very much!");//alert(JSON.stringify(data)); 
				
            }
        });
    });

});