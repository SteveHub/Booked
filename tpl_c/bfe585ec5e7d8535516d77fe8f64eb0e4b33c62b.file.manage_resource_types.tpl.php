<?php /* Smarty version Smarty-3.1.16, created on 2016-05-07 03:06:04
         compiled from "/var/www/html/booked/tpl/Admin/Resources/manage_resource_types.tpl" */ ?>
<?php /*%%SmartyHeaderCode:455520167572d5b9c2e91c5-77889521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe585ec5e7d8535516d77fe8f64eb0e4b33c62b' => 
    array (
      0 => '/var/www/html/booked/tpl/Admin/Resources/manage_resource_types.tpl',
      1 => 1462023422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '455520167572d5b9c2e91c5-77889521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ResourceTypes' => 0,
    'type' => 0,
    'rowCss' => 0,
    'id' => 0,
    'AttributeList' => 0,
    'attributes' => 0,
    'attribute' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_572d5b9c3544d5_89601885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572d5b9c3544d5_89601885')) {function content_572d5b9c3544d5_89601885($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/html/booked/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cssFiles'=>'css/admin.css'), 0);?>


<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageResourceTypes'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"question-button.png",'id'=>"help-prompt",'ref'=>"help-resource-types"),$_smarty_tpl);?>
</h1>

<div id="globalError" class="error" style="display:none"></div>

<table class="list" id="resourceTypes" style="min-width: 600px;">
	<tr>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Actions'),$_smarty_tpl);?>
</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ResourceTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
		<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

		<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['type']->value->Id(), null, 0);?>
		<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
">
			<td><?php echo $_smarty_tpl->tpl_vars['type']->value->Name();?>
</td>
			<td><?php echo nl2br($_smarty_tpl->tpl_vars['type']->value->Description());?>
</td>
			<td align="center" style="width:100px;">
				<a href="#" class="update edit"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</a> |
				<a href="#" class="update delete"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</a>
				<input type="hidden" class="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
			</td>
		</tr>
		<?php $_smarty_tpl->tpl_vars['attributes'] = new Smarty_variable($_smarty_tpl->tpl_vars['AttributeList']->value->GetAttributes($_smarty_tpl->tpl_vars['id']->value), null, 0);?>
		<?php if (count($_smarty_tpl->tpl_vars['attributes']->value)>0) {?>
			<tr>
				<td colspan="4" class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 customAttributes" resourceTypeId="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
					<form method="post" class="attributesForm" ajaxAction="<?php echo ManageResourceTypesActions::ChangeAttributes;?>
">
						<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdditionalAttributes'),$_smarty_tpl);?>
 <a href="#"
																	class="changeAttributes" resourceTypeId="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</a>
						</h3>

						<div class="validationSummary">
							<ul>
							</ul>
							<div class="clear">&nbsp;</div>
						</div>

						<div>
							<ul>
								<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
									<li class="customAttribute" attributeId="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
">
										<div class="attribute-readonly"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'readonly'=>true),$_smarty_tpl);?>
</div>
										<div class="attribute-readwrite hidden"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value),$_smarty_tpl);?>

									</li>
								<?php } ?>
							</ul>
						</div>

						<div class="attribute-readwrite hidden" style="height:auto;">
							<button type="button"
									class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"tick-circle.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
							<button type="button"
									class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
						</div>
					</form>
				</td>
			</tr>
		<?php }?>
	<?php } ?>
</table>

<div class="admin" style="margin-top:30px">
	<div class="title">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddResourceType'),$_smarty_tpl);?>

	</div>
	<div>
		<div id="addResults" class="error" style="display:none;"></div>
		<form id="addForm" method="post" ajaxAction="<?php echo ManageResourceTypesActions::Add;?>
">
			<table>
				<tr>
					<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
</th>
					<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
</th>
					<th>&nbsp;</th>
				</tr>
				<tr>
					<td style="vertical-align: top;">
						<input type="text" class="textbox required" maxlength="85" style="width:250px" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_NAME'),$_smarty_tpl);?>
 />
					</td>
					<td>
						<textarea class="textbox" style="width:400px" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_DESCRIPTION'),$_smarty_tpl);?>
></textarea>
					</td>
				</tr>
			</table>

			<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"plus-button.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddResourceType'),$_smarty_tpl);?>
</button>
		</form>
	</div>
</div>


<input type="hidden" id="activeId" value=""/>

<div id="editDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
">
	<form id="editForm" method="post" ajaxAction="<?php echo ManageResourceTypesActions::Update;?>
">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
: <input id="editName" type="text" class="textbox required" maxlength="85"
									   style="width:250px" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_NAME'),$_smarty_tpl);?>
 />
		<br/><br/>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
:<br/>
		<textarea id="editDescription" class="textbox" style="width:460px;height:150px;" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_DESCRIPTION'),$_smarty_tpl);?>
></textarea>
		<br/><br/>

		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<div id="deleteDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
">
	<form id="deleteForm" method="post" ajaxAction="<?php echo ManageResourceTypesActions::Delete;?>
">
		<div class="error" style="margin-bottom: 25px;">
			<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>
</h3>
		</div>

		<button type="button"
				class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"admin-ajax-indicator.gif",'class'=>"indicator",'style'=>"display:none;"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/edit.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/resource-types.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/help.js"),$_smarty_tpl);?>


<script type="text/javascript">

	$(document).ready(function ()
	{
		var opts = {
			submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
			saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
'
		};

		var resourceTypes = new ResourceTypeManagement(opts);
		resourceTypes.init();

		<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ResourceTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
		resourceTypes.add(
				{
					id:<?php echo $_smarty_tpl->tpl_vars['type']->value->Id();?>
,
					name:"<?php echo strtr($_smarty_tpl->tpl_vars['type']->value->Name(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
					description:"<?php echo strtr($_smarty_tpl->tpl_vars['type']->value->Description(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
				});
		<?php } ?>
	})

</script>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
