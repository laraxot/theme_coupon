<script src="{{ Theme::asset('pub_theme::assets/js/jquery-3.4.1.min.js') }}"></script>
		<script src="{{ Theme::asset('pub_theme::assets/js/tether.min.js') }}"></script>
		<script src="{{ Theme::asset('pub_theme::assets/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ Theme::asset('pub_theme::assets/js/wow.min.js') }}"></script>
        <script src="{{ Theme::asset('pub_theme::assets/js/sweetalert2.js') }}"></script>
        <script src="{{ Theme::asset('pub_theme::assets/js/bundle/bootstrap.bundle.min.js') }}"></script>

		<script type="text/javascript">
			new WOW().init();
			function controllaSceltaCategoria(){
			  if($('#search_param').val() > 0){
			    $('#all').show();
			  }else{
			    $('#all').hide();
			  }
			}

			$(document).ready(function(e){

			              $('.search-panel .dropdown-menu').find('a').click(function(e) {
			    e.preventDefault();
			    var param = $(this).attr("href").replace("#","");
			    var concept = $(this).html();
			    $('.search-panel span#search_concept').html(concept);
			    $('.input-group #search_param').val(param).trigger('change');

			    controllaSceltaCategoria();
			  });

			  controllaSceltaCategoria();

			  $('#search_submit').click(function(){
			    $('#search_form').submit();
			  });

			  $("#search_param").change(function() {
			                $('#search_form').submit();

			  });





			})

			// alert("c'è");

			swal({
			// title: 'GDPR',
			// type: 'info',
			html:
			  '<div class="text-justify mb-3" style="line-height: 1;">Utilizziamo i cookies per migliorare la navigazione. Alcuni cookies sono necessari, altri sono facoltativi. Seleziona consapevolmente le tue preferenze (dettagli cliccando il punto interrogativo) e conferma con il tasto OK.</div>' +

			  '<form method="POST" action="https://www.offerta.in/gdpr" accept-charset="UTF-8" class="form" id="consent"><input name="_token" type="hidden" value="q3uJD6kxxd5x5baqQGEB3kH2xT3kAjnHRA9mNxzk">'+
			  // '<input type="hidden" name="previusUrl" value="/"/>'+
			  '<input type="hidden" name="_token" value="q3uJD6kxxd5x5baqQGEB3kH2xT3kAjnHRA9mNxzk">'+
			   "<input id='checkInfo' type='checkbox' name='necessario' value='necessario' checked disabled>Consento l'utilizzo dei cookie necessari <button type='button' class='btn btn-primary btn-sm' data-toggle='collapse' data-target='#cookieInfo'>?</button><br><br>"+
			   "<div id='cookieInfo' class='collapse mb-5 text-justify' style='line-height: 1;'><div class='text-center'><img src='assets/img/split-line.png'></div>Utilizziamo pochi cookies strettamente necessari al corretto funzionamento del sito. Uno riguarda le preferenze che esprimerai in questa fase. Il cookie eviterà che il popup ti venga riproposto ad ogni pagina. Un altro riguarda la connessione di un utente ad un altro utente ed è il fondamento del nostro sistema di passaparola. Una parte di cashback viene attribuita all'utente sponsor. Puoi approfondire questi concetti nell'apposita sezione 'cashback'. Un altro cookie rappresenta un ID sessione univoco che viene generato automaticamente dal sistema e sparisce al termine della sessione stessa.<br><div class='text-center'><img src='assets/img/split-line.png'></div></div>"+


			   "<input id='checkStat' type='checkbox' name='stat' value='stat' checked>Consento l'utilizzo del servizio di statistica <button type='button' class='btn btn-primary btn-sm' data-toggle='collapse' data-target='#statInfo'>?</button><br><br>"+
			   "<div id='statInfo' class='collapse mb-5 text-justify' style='line-height: 1;'><div class='text-center'><img src='assets/img/split-line.png'></div>Utilizziamo come moltissimi altri siti web i cookies di google analytics per analizzare in modo completamente anonimo il traffico ed elaborare dati statistici che ci consentono di migliorare il servizio.<br><div class='text-center'><img src='assets/img/split-line.png'></div></div>"+


			   "<input id='checkMark' type='checkbox' name='marketing' value='marketing'>Consento l'utilizzo del servizio di marketing <button type='button' class='btn btn-primary btn-sm' data-toggle='collapse' data-target='#markInfo'>?</button><br><br>"+
			   "<div id='markInfo' class='collapse mb-5 text-justify' style='line-height: 1;'><div class='text-center'><img src='assets/img/split-line.png'></div>Al fine di proporti solo offerte in linea con le tue preferenze, potremmo utilizzare cookies specifici che memorizzano i tuoi dati di navigazione.<br><div class='text-center'><img src='assets/img/split-line.png'></div></div>"+
			   // "<meta name='_token' content='q3uJD6kxxd5x5baqQGEB3kH2xT3kAjnHRA9mNxzk' />"+

			  '</form>'
			  ,

			showCloseButton: false,
			showCancelButton: false,
			confirmButtonClass: 'btn btn-primary',
			confirmButtonColor: '#3b5998',
			confirmButtonText: 'Ok',
			allowOutsideClick: 	false,
			focusConfirm: false,
			}).then((result) => {
			if (result.value) {

			    $.ajaxSetup({
			         headers: {
			            'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
			         }
			        });
			    $.ajax({
			            url : "https://www.offerta.in/gdpr",
			            type : "post",
			            data : {
			                    info: $('#checkInfo').is(':checked'),
			                    stat: $('#checkStat').is(':checked'),
			                    mark: $('#checkMark').is(':checked'),
			                 },
			            dataType: 'json',
			            // success : function () {
			            //     alert('ok');
			            // // success : function (data,stato) {
			            //     // $("#risultati").html(data);
			            //     // $("#statoChiamata").text(stato);
			            // },
			            // error : function (richiesta,stato,errori) {
			            //     alert("E' evvenuto un errore. Il stato della chiamata: "+stato);
			            // }
			        });
			}
			})









			// $('#consent').submit()
			// alert($('#checkStat').is(":checked"));

			// Cookies.set('statConsent', 'ok');

			// if($('#checkInfo').is(':checked')){
			//   // alert($('#checkStat').val());
			//   var cookie = 'si';
			// }else{
			//   var cookie = 'no';
			// }
			//
			// if($('#checkStat').is(':checked')){
			//   // alert($('#checkStat').val());
			//   var cookie = 'si';
			// }else{
			//   var cookie = 'no';
			// }
			//
			// if($('#checkMark').is(':checked')){
			//   // alert($('#checkStat').val());
			//   var cookie = 'si';
			// }else{
			//   var cookie = 'no';
			// }





			// var formData = $('#consent').serialize();
			// $.ajaxSetup({
			//      headers: {
			//          // 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			//          'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
			//      }
			//     });
			// $.ajax({
			//         url : "https://www.offerta.in/gdpr",
			//         type : "post",
			//         // data : formData,
			//         dataType: 'json',
			//         success : function () {
			//             alert('ok');
			//         // success : function (data,stato) {
			//             // $("#risultati").html(data);
			//             // $("#statoChiamata").text(stato);
			//         },
			//         error : function (richiesta,stato,errori) {
			//             alert("E' evvenuto un errore. Il stato della chiamata: "+stato);
			//         }
			//     });
		</script>
