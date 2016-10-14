

$(document).ready(function() {

		var today = new Date();
		var m = today.getMonth() + 1;
		var d = today.getMonth() + 1;

		if(m<10){
			m = '0' + m;
		}

		if(d<10){
			d = '0' + d;
		}

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
			},
			eventClick: function(event) {
				window.location.href = 'http://localhost/myapp/events/view/'+event.id;
			},
			defaultDate: today.getFullYear()+'-' + m + '-' + d,
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				//オーバーレイを出現させる
				$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
				$( "#modal-overlay" ).fadeIn( "slow" ) ;

				//コンテンツをセンタリングする
				centeringModalSyncer() ;

				//コンテンツをフェードインする
				$( "#modal-content" ).fadeIn( "slow" ) ;

				//[#modal-overlay]、または[#modal-close]をクリックしたら…
				$( "#modal-overlay,#modal-close" ).unbind().click( function(){

				  //[#modal-content]と[#modal-overlay]をフェードアウトした後に…
				  $( "#modal-content,#modal-overlay" ).fadeOut( "slow" , function(){

				    //[#modal-overlay]を削除する
				    $('#modal-overlay').remove() ;

				  } ) ;

				} ) ;
				//リサイズされたら、センタリングをする関数[centeringModalSyncer()]を実行する
				$( window ).resize( centeringModalSyncer ) ;

				//センタリングを実行する関数
				function centeringModalSyncer() {

					//画面(ウィンドウ)の幅、高さを取得
					var w = $( window ).width() ;
					var h = $( window ).height() ;

					// コンテンツ(#modal-content)の幅、高さを取得
					// jQueryのバージョンによっては、引数[{margin:true}]を指定した時、不具合を起こします。
				//		var cw = $( "#modal-content" ).outerWidth( {margin:true} );
				//		var ch = $( "#modal-content" ).outerHeight( {margin:true} );
					var cw = $( "#modal-content" ).outerWidth();
					var ch = $( "#modal-content" ).outerHeight();

					//センタリングを実行する
					$( "#modal-content" ).css( {"left": ((w - cw)/2) + "px","top": ((h - ch)/2) + "px"} ) ;

				}

			},
			eventLimit: true, // allow "more" link when too many events
			events: 'http://localhost/myapp/events/'/*[
				{
					title: 'All Day Event',
					start: '2016-09-01'
				},
				{
					title: 'Long Event',
					start: '2016-09-07',
					end: '2016-09-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-09-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-09-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2016-09-11',
					end: '2016-09-13'
				},
				{
					title: 'Meeting',
					start: '2016-09-12T10:30:00',
					end: '2016-09-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2016-09-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2016-09-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2016-09-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2016-09-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2016-09-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2016-09-28'
				}
			]*/
		});

	});
