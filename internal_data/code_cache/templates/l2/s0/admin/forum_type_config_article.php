<?php
// FROM HASH: 51efb5b6e0e14efa0b12c087099bc8d1
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formRadioRow(array(
		'name' => 'type_config[display_style]',
		'value' => $__vars['typeConfig']['display_style'],
	), array(array(
		'value' => 'full',
		'label' => 'Стандартный',
		'hint' => 'Полноразмерный вид, отображаемый в виде стандартного списка тем.',
		'_type' => 'option',
	),
	array(
		'value' => 'preview',
		'label' => 'Предварительный просмотр',
		'hint' => 'Блочная сетка, содержащая предпросмотр контента первого сообщения, включая изображение обложки, если оно есть.',
		'data-xf-init' => 'disabler',
		'data-hide' => 'true',
		'data-container' => '.js-articlePreviewOptions',
		'_type' => 'option',
	),
	array(
		'value' => 'expanded',
		'label' => 'Расширенный',
		'hint' => 'An expanded view, displaying as a list of rendered first posts, with either their complete content or a snippet thereof.',
		'data-xf-init' => 'disabler',
		'data-hide' => 'true',
		'data-container' => '.js-articleExpandedOptions',
		'_type' => 'option',
	)), array(
		'label' => 'Стиль отображения',
	)) . '

';
	$__compilerTemp1 = array('js-articlePreviewOptions', 'js-articleExpandedOptions', );
	if ($__templater->isTraversable($__compilerTemp1)) {
		foreach ($__compilerTemp1 AS $__vars['className']) {
			$__finalCompiled .= '
	<div class="' . $__templater->escape($__vars['className']) . '">
		' . $__templater->formNumberBoxRow(array(
				'name' => 'type_config[expanded_per_page]',
				'value' => $__vars['typeConfig']['expanded_per_page'],
				'min' => '0',
			), array(
				'label' => 'Override articles per page',
				'explain' => 'This allows you to override the number of articles shown per page when viewing this forum. Use 0 to display the standard amount.',
			)) . '
		' . $__templater->formNumberBoxRow(array(
				'name' => 'type_config[expanded_snippet]',
				'value' => $__vars['typeConfig']['expanded_snippet'],
				'min' => '0',
			), array(
				'label' => 'Длина фрагмента статьи',
				'explain' => 'Максимальное количество символов, отображаемых при просмотре данного раздела. Используйте 0 для отображения статьи целиком.',
			)) . '
	</div>
';
		}
	}
	return $__finalCompiled;
}
);