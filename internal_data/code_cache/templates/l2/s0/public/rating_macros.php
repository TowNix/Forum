<?php
// FROM HASH: b684138d1a05a97a8cfab6b55c663f3c
return array(
'macros' => array('stars' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'rating' => '!',
		'class' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__templater->includeCss('rating_stars.less');
	$__finalCompiled .= '

	<span class="ratingStars ' . $__templater->escape($__vars['class']) . '" title="' . $__templater->filter('' . $__templater->filter($__vars['rating'], array(array('number', array(2, )),), false) . ' звёзд', array(array('for_attr', array()),), true) . '">
		<span class="ratingStars-star' . (($__vars['rating'] >= 1) ? ' ratingStars-star--full' : '') . ((($__vars['rating'] >= 0.5) AND ($__vars['rating'] < 1)) ? ' ratingStars-star--half' : '') . '"></span>
		<span class="ratingStars-star' . (($__vars['rating'] >= 2) ? ' ratingStars-star--full' : '') . ((($__vars['rating'] >= 1.5) AND ($__vars['rating'] < 2)) ? ' ratingStars-star--half' : '') . '"></span>
		<span class="ratingStars-star' . (($__vars['rating'] >= 3) ? ' ratingStars-star--full' : '') . ((($__vars['rating'] >= 2.5) AND ($__vars['rating'] < 3)) ? ' ratingStars-star--half' : '') . '"></span>
		<span class="ratingStars-star' . (($__vars['rating'] >= 4) ? ' ratingStars-star--full' : '') . ((($__vars['rating'] >= 3.5) AND ($__vars['rating'] < 4)) ? ' ratingStars-star--half' : '') . '"></span>
		<span class="ratingStars-star' . (($__vars['rating'] >= 5) ? ' ratingStars-star--full' : '') . ((($__vars['rating'] >= 4.5) AND ($__vars['rating'] < 5)) ? ' ratingStars-star--half' : '') . '"></span>
		<span class="u-srOnly">' . '' . $__templater->filter($__vars['rating'], array(array('number', array(2, )),), true) . ' звёзд' . '</span>
	</span>
';
	return $__finalCompiled;
}
),
'stars_text' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'rating' => '!',
		'count' => null,
		'text' => null,
		'rowClass' => '',
		'starsClass' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<span class="ratingStarsRow ' . $__templater->escape($__vars['rowClass']) . '">
		' . $__templater->callMacro('rating_macros', 'stars', array(
		'rating' => $__vars['rating'],
		'class' => $__vars['starsClass'],
	), $__vars) . '
		<span class="ratingStarsRow-text">
			';
	if (!$__templater->test($__vars['text'], 'empty', array())) {
		$__finalCompiled .= $__templater->escape($__vars['text']);
	} else {
		$__finalCompiled .= 'Оценок: ' . $__templater->filter($__vars['count'], array(array('number', array()),), true) . '';
	}
	$__finalCompiled .= '
		</span>
	</span>
';
	return $__finalCompiled;
}
),
'setup' => array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__templater->includeCss('rating_stars.less');
	$__finalCompiled .= '
	';
	$__templater->includeJs(array(
		'prod' => 'xf/rating-compiled.js',
		'dev' => 'vendor/barrating/jquery.barrating.js, xf/rating.js',
	));
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'rating' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'row' => true,
		'rowType' => $__vars['rowType'],
		'rowLabel' => 'Рейтинг',
		'rowHint' => '',
		'rowExplain' => '',
		'name' => 'rating',
		'currentRating' => '0',
		'ratingHref' => '',
		'readOnly' => 'false',
		'deselectable' => 'false',
		'showSelected' => 'true',
		'range' => array(1 => 'Ужасно', 2 => 'Плохо', 3 => 'Средне', 4 => 'Хорошо', 5 => 'Отлично', ),
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

	' . $__templater->callMacro(null, 'setup', array(), $__vars) . '

	';
	$__compilerTemp1 = array();
	if ($__vars['deselectable']) {
		$__compilerTemp1[] = array(
			'value' => '',
			'_type' => 'option',
		);
	}
	if ($__templater->isTraversable($__vars['range'])) {
		foreach ($__vars['range'] AS $__vars['value'] => $__vars['label']) {
			$__compilerTemp1[] = array(
				'value' => $__vars['value'],
				'label' => $__templater->escape($__vars['label']),
				'_type' => 'option',
			);
		}
	}
	$__vars['inner'] = $__templater->preEscaped('
		' . $__templater->formSelect(array(
		'name' => $__vars['name'],
		'class' => 'br-select',
		'data-xf-init' => 'rating',
		'data-initial-rating' => $__vars['currentRating'],
		'data-rating-href' => $__vars['ratingHref'],
		'data-readonly' => $__vars['readOnly'],
		'data-deselectable' => $__vars['deselectable'],
		'data-show-selected' => $__vars['showSelected'],
	), $__compilerTemp1) . '
	');
	$__finalCompiled .= '

	';
	if ($__vars['row']) {
		$__finalCompiled .= '
		' . $__templater->formRow('

			' . $__templater->filter($__vars['inner'], array(array('raw', array()),), true) . '
		', array(
			'class' => 'u-jsOnly',
			'rowtype' => $__vars['rowType'],
			'label' => $__templater->escape($__vars['rowLabel']),
			'hint' => $__templater->filter($__vars['rowHint'], array(array('raw', array()),), true),
			'explain' => $__templater->filter($__vars['rowExplain'], array(array('raw', array()),), true),
		)) . '
	';
	} else {
		$__finalCompiled .= '
		' . $__templater->filter($__vars['inner'], array(array('raw', array()),), true) . '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . '

' . '

';
	return $__finalCompiled;
}
);