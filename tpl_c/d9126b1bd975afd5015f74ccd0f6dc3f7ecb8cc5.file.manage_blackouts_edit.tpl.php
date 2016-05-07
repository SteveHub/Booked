<?php /* Smarty version Smarty-3.1.16, created on 2016-05-07 02:55:54
         compiled from "/var/www/html/booked/tpl/Admin/Blackouts/manage_blackouts_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:725586764572d593a8fdcd4-08454308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9126b1bd975afd5015f74ccd0f6dc3f7ecb8cc5' => 
    array (
      0 => '/var/www/html/booked/tpl/Admin/Blackouts/manage_blackouts_edit.tpl',
      1 => 1462023422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '725586764572d593a8fdcd4-08454308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BlackoutStartDate' => 0,
    'BlackoutEndDate' => 0,
    'Resources' => 0,
    'resource' => 0,
    'BlackoutResourceIds' => 0,
    'checked' => 0,
    'BlackoutTitle' => 0,
    'RepeatTerminationDate' => 0,
    'IsRecurring' => 0,
    'BlackoutId' => 0,
    'RepeatType' => 0,
    'RepeatInterval' => 0,
    'RepeatMonthlyType' => 0,
    'RepeatWeekdays' => 0,
    'day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_572d593a953700_55428030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572d593a953700_55428030')) {function content_572d593a953700_55428030($_smarty_tpl) {?>

<form id="editBlackoutForm" method="post">
	<div id="updateBlackout">
		<ul>
			<li>
				<label for="updateStartDate" class="wideLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label>
				<input type="text" id="updateStartDate" class="textbox" size="10"
					   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['BlackoutStartDate']->value),$_smarty_tpl);?>
"/>
				<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_DATE'),$_smarty_tpl);?>
 id="formattedUpdateStartDate" type="hidden"
												 value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['BlackoutStartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
				<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_TIME'),$_smarty_tpl);?>
 type="text" id="updateStartTime" class="textbox" size="7"
												 value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['BlackoutStartDate']->value,'format'=>'h:i A'),$_smarty_tpl);?>
"/>
			</li>
			<li>
				<label for="updateEndDate" class="wideLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label>
				<input type="text" id="updateEndDate" class="textbox" size="10"
					   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['BlackoutEndDate']->value),$_smarty_tpl);?>
"/>
				<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_DATE'),$_smarty_tpl);?>
 type="hidden" id="formattedUpdateEndDate"
											   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['BlackoutEndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
				<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_TIME'),$_smarty_tpl);?>
 type="text" id="updateEndTime" class="textbox" size="7"
											   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['BlackoutEndDate']->value,'format'=>'h:i A'),$_smarty_tpl);?>
"/>
			</li>
			<li class="blackoutResources">
				<label for="addResourceId" class="wideLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
</label>
				<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('', null, 0);?>
					<?php if (in_array($_smarty_tpl->tpl_vars['resource']->value->GetId(),$_smarty_tpl->tpl_vars['BlackoutResourceIds']->value)) {?>
						<?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable("checked='checked'", null, 0);?>
					<?php }?>
					<label class="resourceItem"><input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl);?>
 type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 /> <?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</label>
				<?php } ?>
			</li>
			<li>
				<label for="blackoutReason" class="wideLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reason'),$_smarty_tpl);?>
</label>
				<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SUMMARY'),$_smarty_tpl);?>
 type="text" id="blackoutReason" class="textbox required" size="100"
											  maxlength="85" value="<?php echo $_smarty_tpl->tpl_vars['BlackoutTitle']->value;?>
"/>
			</li>
			<li>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"RecurrenceControl",'RepeatTerminationDate'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value,'prefix'=>'edit'),$_smarty_tpl);?>

			</li>
			<li>
				<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CONFLICT_ACTION'),$_smarty_tpl);?>
 type="radio" id="notifyExisting" name="existingReservations"
													  checked="checked"
													  value="<?php echo ReservationConflictResolution::Notify;?>
"/>
				<label for="notifyExisting"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlackoutShowMe'),$_smarty_tpl);?>
</label>

				<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CONFLICT_ACTION'),$_smarty_tpl);?>
 type="radio" id="deleteExisting" name="existingReservations"
													  value="<?php echo ReservationConflictResolution::Delete;?>
"/>
				<label for="deleteExisting"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlackoutDeleteConflicts'),$_smarty_tpl);?>
</label>
			</li>
		</ul>

		<?php if ($_smarty_tpl->tpl_vars['IsRecurring']->value) {?>
			<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ApplyUpdatesTo'),$_smarty_tpl);?>
</div>
			<button type="button" class="button save btnUpdateThisInstance">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThisInstance'),$_smarty_tpl);?>

			</button>
			<button type="button" class="button save btnUpdateAllInstances">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disks-black.png"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllInstances'),$_smarty_tpl);?>

			</button>
		<?php } else { ?>
			<button type="button" class="button save update btnUpdateAllInstances">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

			</button>
		<?php }?>

		<button type="button" class="button" id="cancelUpdate">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>

		</button>

		<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BLACKOUT_INSTANCE_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['BlackoutId']->value;?>
" />
		<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SERIES_UPDATE_SCOPE'),$_smarty_tpl);?>
 class="hdnSeriesUpdateScope" value="<?php echo SeriesUpdateScope::FullSeries;?>
"/>
	</div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

</form>

<script type="text/javascript">
	var recurOpts = {
		repeatType: '<?php echo $_smarty_tpl->tpl_vars['RepeatType']->value;?>
',
		repeatInterval: '<?php echo $_smarty_tpl->tpl_vars['RepeatInterval']->value;?>
',
		repeatMonthlyType: '<?php echo $_smarty_tpl->tpl_vars['RepeatMonthlyType']->value;?>
',
		repeatWeekdays: [<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RepeatWeekdays']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
, <?php } ?>]
	};

	var recurrence = new Recurrence(recurOpts, {}, 'edit');
	recurrence.init();
</script>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"updateStartDate",'AltId'=>"formattedUpdateStartDate"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"updateEndDate",'AltId'=>"formattedUpdateEndDate"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"editEndRepeat",'AltId'=>"editformattedEndRepeat"),$_smarty_tpl);?>
<?php }} ?>
