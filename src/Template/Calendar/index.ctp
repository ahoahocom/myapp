<div id="calendar"></div>
<div id="modal-content">
		<?= $this->Form->create(null, [
	    'type' => 'post',
	    'url' => ['controller' => 'Events', 'action' => 'add']
	    ]) ?>
    <fieldset>
        <legend><?= __('Add Event') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('start', array('id' => 'datepicker'));
						echo $this->Form->input('startTime');
            echo $this->Form->input('end' ,array('id' => 'datepicker2'));
						echo $this->Form->input('endTime');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	<p><a id="modal-close" class="button-link">閉じる</a></p>
</div>
<script type="text/javascript">
$(function(){

//モーダルウィンドウを出現させるクリックイベント
$("#modal-open").click( function(){

//キーボード操作などにより、オーバーレイが多重起動するのを防止する
$( this ).blur() ;	//ボタンからフォーカスを外す
if( $( "#modal-overlay" )[0] ) return false ;		//新しくモーダルウィンドウを起動しない (防止策1)
//if($("#modal-overlay")[0]) $("#modal-overlay").remove() ;		//現在のモーダルウィンドウを削除して新しく起動する (防止策2)

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

} ) ;

//日付入力用カレンダー
$(function() {
    $("#datepicker").datepicker();
		$("#datepicker").datepicker("option", "dateFormat", 'yy-mm-dd');
		$("#datepicker2").datepicker();
		$("#datepicker2").datepicker("option", "dateFormat", 'yy-mm-dd');
  });

	//時間入力
	setTimepicker();
  function setTimepicker() {
  	var options = {timeFormat:'H:i'};
    $('#starttime').timepicker(options);
    $('#endtime').timepicker(options);
  }

</script>
