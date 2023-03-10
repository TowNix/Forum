<?php
// FROM HASH: 2797f121c2f5899779ec4e9bc53720e1
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Результаты поиска фраз' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['language']['title']));
	$__finalCompiled .= '

<div class="block">
	<div class="block-outer">
		' . $__templater->callMacro('filter_macros', 'quick_filter', array(
		'class' => 'block-outer-opposite',
	), $__vars) . '
	</div>
	<div class="block-container">
		' . $__templater->callMacro('phrase_list', 'search_menu', array(
		'language' => $__vars['language'],
		'conditions' => $__vars['conditions'],
	), $__vars) . '
		';
	if (!$__templater->test($__vars['phrases'], 'empty', array())) {
		$__finalCompiled .= '
			<div class="block-body">
				';
		$__compilerTemp1 = '';
		if ($__vars['total'] > $__templater->func('count', array($__vars['phrases'], ), false)) {
			$__compilerTemp1 .= '
						' . $__templater->dataRow(array(
				'rowclass' => 'dataList-row--note dataList-row--noHover',
			), array(array(
				'colspan' => '2',
				'_type' => 'cell',
				'html' => 'Есть несколько записей, соответствующих Вашему фильтру. Пожалуйста, уточните запрос.',
			))) . '
					';
		}
		$__finalCompiled .= $__templater->dataList('
					' . $__templater->callMacro('phrase_list', 'phrase_list', array(
			'phrases' => $__vars['phrases'],
			'language' => $__vars['language'],
		), $__vars) . '
					' . $__compilerTemp1 . '
				', array(
		)) . '
			</div>
			<div class="block-footer">
				<span class="block-footer-counter">' . $__templater->func('display_totals', array($__templater->func('count', array($__vars['phrases'], ), false), $__vars['total'], ), true) . '</span>
			</div>
		';
	} else {
		$__finalCompiled .= '
			<div class="block-body block-row">' . 'Результатов не найдено.' . '</div>
		';
	}
	$__finalCompiled .= '
	</div>
</div>';
	return $__finalCompiled;
}
);