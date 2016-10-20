<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('start', array('id' => 'datepicker'));
						echo $this->Form->input('startTime');
            echo $this->Form->input('end' ,array('id' => 'datepicker2'));
						echo $this->Form->input('endTime');
            //test
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">
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
