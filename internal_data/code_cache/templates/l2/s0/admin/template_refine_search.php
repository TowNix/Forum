<?php
// FROM HASH: f6f23f759fe875ffff62c250820fc60c
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__compilerTemp1 = array();
	if ($__templater->isTraversable($__vars['types'])) {
		foreach ($__vars['types'] AS $__vars['typeId'] => $__vars['type']) {
			$__compilerTemp1[] = array(
				'value' => $__vars['typeId'],
				'label' => $__templater->escape($__vars['type']),
				'_type' => 'option',
			);
		}
	}
	$__finalCompiled .= $__templater->form('
	<div class="menu-row">
		' . 'Стиль' . $__vars['xf']['language']['label_separator'] . '
		<div class="u-inputSpacer">
			' . $__templater->callMacro('style_macros', 'style_select', array(
		'styleTree' => $__vars['styleTree'],
		'styleId' => $__vars['style']['style_id'],
		'row' => false,
	), $__vars) . '
		</div>
	</div>

	<div class="menu-row">
		' . 'Тип шаблона' . $__vars['xf']['language']['label_separator'] . '
		<div class="u-inputSpacer">
			' . $__templater->formSelect(array(
		'name' => 'type',
		'value' => $__vars['conditions']['type'],
	), $__compilerTemp1) . '
		</div>
	</div>

	<div class="menu-row menu-row--separated">
		' . 'Плагин' . $__vars['xf']['language']['label_separator'] . '
		<div class="u-inputSpacer">
			' . $__templater->callMacro('addon_macros', 'addon_select', array(
		'addOnId' => $__vars['conditions']['addon_id'],
		'includeAny' => true,
		'row' => false,
	), $__vars) . '
		</div>
	</div>

	<div class="menu-row">
		' . 'Название содержит' . $__vars['xf']['language']['label_separator'] . '
		<div class="u-inputSpacer">
			' . $__templater->formTextBox(array(
		'name' => 'title',
		'type' => 'search',
		'value' => $__vars['conditions']['title'],
		'dir' => 'ltr',
	)) . '
		</div>
	</div>

	<div class="menu-row menu-row--separated">
		' . 'Текст содержит' . $__vars['xf']['language']['label_separator'] . '
		<div class="u-inputSpacer">
			<ul class="inputList">
				<li>
					' . $__templater->formTextArea(array(
		'name' => 'template',
		'value' => $__vars['conditions']['template'],
		'autosize' => 'true',
		'code' => 'true',
	)) . '
				</li>
				<li>' . $__templater->formCheckBox(array(
		'standalone' => 'true',
	), array(array(
		'name' => 'template_cs',
		'selected' => $__vars['conditions']['template_cs'],
		'label' => 'Учитывать регистр',
		'_type' => 'option',
	))) . '</li>
			</ul>
		</div>
	</div>

	<div class="menu-row menu-row--separated">
		' . 'Статус шаблона' . $__vars['xf']['language']['label_separator'] . '
		<div class="u-inputSpacer">
			' . $__templater->formCheckBox(array(
		'name' => 'state[]',
		'value' => $__vars['conditions']['state'],
	), array(array(
		'value' => 'default',
		'label' => 'Без изменений',
		'_type' => 'option',
	),
	array(
		'value' => 'inherited',
		'label' => 'Изменён в родительском стиле' . '
				',
		'_type' => 'option',
	),
	array(
		'value' => 'custom',
		'label' => 'Изменён в этом стиле',
		'_type' => 'option',
	))) . '
		</div>
	</div>

	<div class="menu-footer">
		<span class="menu-footer-controls">
			' . $__templater->button('Уточнить', array(
		'type' => 'submit',
		'icon' => 'search',
		'class' => 'button--primary',
	), '', array(
	)) . '
		</span>
	</div>
	' . $__templater->formHiddenVal('search', '1', array(
	)) . '
', array(
		'action' => $__templater->func('link', array('templates/search', ), false),
	));
	return $__finalCompiled;
}
);