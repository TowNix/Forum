<?php
// FROM HASH: 1858507ae5f8dce55b595466229861c9
return array(
'macros' => array('addon_list_filter' => array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="block">
		<div class="block-outer">
			';
	$__templater->includeJs(array(
		'src' => 'xf/filter.js',
		'min' => '1',
	));
	$__finalCompiled .= '
			<div class="block-outer-opposite quickFilter u-jsOnly"
				data-xf-init="filter"
				data-key="addOns"
				data-search-target=".addOnList"
				data-search-row=".addOnList-row"
				data-search-row-group=".block"
				data-search-limit=".js-filterSearchable"
				data-no-results-format="<div class=&quot;blockMessage js-filterNoResults&quot;>%s</div>">

				<div class="inputGroup inputGroup--inline inputGroup--joined">
					<input type="text" class="input js-filterInput" placeholder="' . $__templater->filter('Фильтровать' . $__vars['xf']['language']['ellipsis'], array(array('for_attr', array()),), true) . '" />
					<span class="inputGroup-text">
						' . $__templater->formCheckBox(array(
		'standalone' => 'true',
	), array(array(
		'class' => 'js-filterPrefix',
		'label' => 'Префикс',
		'_type' => 'option',
	))) . '
					</span>
					<i class="inputGroup-text js-filterClear is-disabled" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
';
	return $__finalCompiled;
}
),
'addon_list_block' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'addOns' => '!',
		'heading' => '!',
		'desc' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	if (!$__templater->test($__vars['addOns'], 'empty', array())) {
		$__finalCompiled .= '
		<div class="block">
			<div class="block-container">
				<h3 class="block-header">
					' . $__templater->escape($__vars['heading']) . '
					';
		if ($__vars['desc']) {
			$__finalCompiled .= '
						<span class="block-desc">
							' . $__templater->escape($__vars['desc']) . '
						</span>
					';
		}
		$__finalCompiled .= '
				</h3>
				<ol class="block-body">
					';
		if ($__templater->isTraversable($__vars['addOns'])) {
			foreach ($__vars['addOns'] AS $__vars['addOn']) {
				$__finalCompiled .= '
						' . $__templater->callMacro(null, 'addon_list_item', array(
					'addOn' => $__vars['addOn'],
				), $__vars) . '
					';
			}
		}
		$__finalCompiled .= '
				</ol>
			</div>
		</div>
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'addon_list_item' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'addOn' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__templater->includeCss('addon_list.less');
	$__finalCompiled .= '

	<li class="block-row block-row--separated addOnList-row' . (($__templater->method($__vars['addOn'], 'isInstalled', array()) AND (!$__vars['addOn']['active'])) ? ' is-disabled' : '') . '">
		<div class="contentRow">
			' . $__templater->callMacro(null, 'addon_list_item_icon', array(
		'addOn' => $__vars['addOn'],
	), $__vars) . '
			<div class="contentRow-main">
				' . $__templater->callMacro(null, 'addon_list_item_menu', array(
		'addOn' => $__vars['addOn'],
	), $__vars) . '
				<h3 class="contentRow-header js-filterSearchable">
					' . $__templater->escape($__vars['addOn']['title']) . ' <span class="contentRow-muted">' . $__templater->escape($__vars['addOn']['version_string']) . '</span>
					';
	if ($__vars['addOn']['is_processing']) {
		$__finalCompiled .= '
						<span class="label label--error" data-xf-init="tooltip" title="' . $__templater->filter('Последнее действие' . $__vars['xf']['language']['label_separator'], array(array('for_attr', array()),), true) . ' ' . ($__templater->escape($__vars['addOn']['last_pending_action']) ?: $__templater->filter('Н/Д', array(array('for_attr', array()),), true)) . '">' . 'В ожидании действий' . '</span>
					';
	}
	$__finalCompiled .= '
				</h3>
				<div class="contentRow-lesser js-filterSearchable' . ((!$__vars['addOn']['description']) ? ' no-description' : '') . '">
					' . ($__vars['addOn']['description'] ? $__templater->filter($__templater->func('snippet', array($__vars['addOn']['description'], 200, ), false), array(array('nl2br', array()),), true) : '&nbsp;') . '
				</div>
				' . $__templater->callMacro(null, 'addon_list_item_footer', array(
		'addOn' => $__vars['addOn'],
	), $__vars) . '
			</div>
		</div>
	</li>
';
	return $__finalCompiled;
}
),
'addon_list_item_icon' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'addOn' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="contentRow-figure">
		<div class="contentRow-figureIcon">
			';
	if ($__templater->method($__vars['addOn'], 'hasFaIcon', array())) {
		$__finalCompiled .= '
				' . $__templater->fontAwesome($__templater->escape($__vars['addOn']['icon']) . ' fa-3x', array(
		)) . '
			';
	} else if ($__templater->method($__vars['addOn'], 'hasIcon', array())) {
		$__finalCompiled .= '
				<img src="' . $__templater->escape($__templater->method($__vars['addOn'], 'getIconUri', array())) . '" alt="' . $__templater->escape($__vars['addOn']['title']) . '" />
			';
	} else if ($__templater->method($__vars['addOn'], 'isLegacy', array())) {
		$__finalCompiled .= '
				' . $__templater->fontAwesome('fa-question-circle fa-3x', array(
		)) . '
			';
	} else {
		$__finalCompiled .= '
				' . $__templater->fontAwesome('fa-puzzle-piece fa-3x', array(
		)) . '
			';
	}
	$__finalCompiled .= '
		</div>
	</div>
';
	return $__finalCompiled;
}
),
'addon_list_item_menu' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'addOn' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="contentRow-extra">
		';
	if ($__templater->method($__vars['addOn'], 'canUpgrade', array())) {
		$__finalCompiled .= '
			' . $__templater->button('
				' . 'Обновление' . '
			', array(
			'href' => $__templater->func('link', array('add-ons/upgrade', $__vars['addOn'], ), false),
			'overlay' => 'true',
			'data-cache' => '0',
		), '', array(
		)) . '
		';
	} else if ($__templater->method($__vars['addOn'], 'canInstall', array())) {
		$__finalCompiled .= '
			' . $__templater->button('
				' . 'Установить' . '
			', array(
			'href' => $__templater->func('link', array('add-ons/install', $__vars['addOn'], ), false),
			'overlay' => 'true',
			'data-cache' => '0',
		), '', array(
		)) . '
		';
	}
	$__finalCompiled .= '
		';
	if ($__templater->method($__vars['addOn'], 'isInstalled', array())) {
		$__finalCompiled .= '
			' . $__templater->button('
				' . $__templater->fontAwesome('fa-cog', array(
		)) . '
			', array(
			'class' => 'button--link menuTrigger',
			'data-xf-click' => 'menu',
			'aria-label' => 'Дополнительные параметры',
			'aria-expanded' => 'false',
			'aria-haspopup' => 'true',
		), '', array(
		)) . '
			<div class="menu" data-menu="menu" aria-hidden="true"
				data-href="' . $__templater->func('link', array('add-ons/controls', $__vars['addOn'], ), true) . '"
				data-load-target=".js-controlsMenuBody">
				<div class="menu-content">
					<div class="js-controlsMenuBody">
						<div class="menu-row">' . 'Загрузка' . $__vars['xf']['language']['ellipsis'] . '</div>
					</div>
				</div>
			</div>
		';
	}
	$__finalCompiled .= '
	</div>
';
	return $__finalCompiled;
}
),
'addon_list_item_footer' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'addOn' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="contentRow-minor">
		<ul class="listInline listInline--bullet">
			';
	if ($__templater->method($__vars['addOn'], 'isInstalled', array()) AND (!$__templater->method($__vars['addOn'], 'canUpgrade', array()))) {
		$__finalCompiled .= '
				';
		if ($__templater->method($__vars['addOn'], 'isLegacy', array())) {
			$__finalCompiled .= '
					<li class="addOnList-row-noSearch">
						<span class="label label--red" data-xf-init="tooltip"
							title="' . $__templater->filter('Этот устаревший плагин не может быть включён.', array(array('for_attr', array()),), true) . '">
							' . 'Устаревший плагин' . '
						</span>
					</li>
				';
		} else if ($__templater->method($__vars['addOn'], 'hasMissingFiles', array())) {
			$__finalCompiled .= '
					<li class="addOnList-row-noSearch">
						<span class="label label--red" data-xf-init="tooltip"
							title="' . $__templater->filter('Некоторые файлы или директории этого плагина отсутствуют (' . $__templater->filter($__vars['addOn']['missing_files'], array(array('join', array(', ', )),), false) . '). Пожалуйста, загрузите все файлы плагина повторно.', array(array('for_attr', array()),), true) . '">
							' . 'Отсутствующие файлы' . '
						</span>
					</li>
				';
		} else if (!$__templater->method($__vars['addOn'], 'isFileVersionValid', array())) {
			$__finalCompiled .= '
					<li class="addOnList-row-noSearch">
						<span class="label label--primary" data-xf-init="tooltip"
							title="' . $__templater->filter('Файлы плагина имеют некорректную версию. Пожалуйста, загрузите корректные файлы.', array(array('for_attr', array()),), true) . '">
							' . 'Несоответствие версий' . '
						</span>
					</li>
				';
		} else if ($__templater->method($__vars['addOn'], 'hasPendingChanges', array())) {
			$__finalCompiled .= '
					<li class="addOnList-row-noSearch">
						<span class="label label--primary" data-xf-init="tooltip"
							title="' . $__templater->filter('Этот плагин ожидает изменения метаданных. Пожалуйста, выполните синхронизацию или перестроение, чтобы импортировать эти изменения.', array(array('for_attr', array()),), true) . '">
							' . 'В ожидании изменений' . '
						</span>
					</li>
				';
		}
		$__finalCompiled .= '
			';
	}
	$__finalCompiled .= '
			';
	if ($__vars['addOn']['dev'] OR $__vars['addOn']['dev_url']) {
		$__finalCompiled .= '
				<li>
					';
		if ($__vars['addOn']['dev'] AND $__vars['addOn']['dev_url']) {
			$__finalCompiled .= '
						<span class="addOnList-row-noSearch">' . 'Разработчик' . $__vars['xf']['language']['label_separator'] . '</span> <a href="' . $__templater->escape($__vars['addOn']['dev_url']) . '" target="_blank">' . $__templater->escape($__vars['addOn']['dev']) . '</a>
					';
		} else if ($__vars['addOn']['dev']) {
			$__finalCompiled .= '
						<span class="addOnList-row-noSearch">' . 'Разработчик' . $__vars['xf']['language']['label_separator'] . '</span> ' . $__templater->escape($__vars['addOn']['dev']) . '
					';
		} else if ($__vars['addOn']['dev_url']) {
			$__finalCompiled .= '
						<span class="addOnList-row-noSearch">' . 'Разработчик' . $__vars['xf']['language']['label_separator'] . '</span> <a href="' . $__templater->escape($__vars['addOn']['dev_url']) . '" target="_blank">' . $__templater->escape($__vars['addOn']['dev_url']) . '</a>
					';
		}
		$__finalCompiled .= '
				</li>
			';
	}
	$__finalCompiled .= '
			';
	if ($__vars['addOn']['faq_url']) {
		$__finalCompiled .= '
				<li><a href="' . $__templater->escape($__vars['addOn']['faq_url']) . '" target="_blank">' . 'FAQ' . '</a></li>
			';
	}
	$__finalCompiled .= '
			';
	if ($__vars['addOn']['support_url']) {
		$__finalCompiled .= '
				<li><a href="' . $__templater->escape($__vars['addOn']['support_url']) . '" target="_blank">' . 'Поддержка' . '</a></li>
			';
	}
	$__finalCompiled .= '
			';
	if (!$__templater->test($__vars['addOn']['extra_urls'], 'empty', array())) {
		$__finalCompiled .= '
				';
		if ($__templater->isTraversable($__vars['addOn']['extra_urls'])) {
			foreach ($__vars['addOn']['extra_urls'] AS $__vars['text'] => $__vars['url']) {
				$__finalCompiled .= '
					<li><a href="' . $__templater->escape($__vars['url']) . '" target="_blank">' . $__templater->escape($__vars['text']) . '</a></li>
				';
			}
		}
		$__finalCompiled .= '
			';
	}
	$__finalCompiled .= '
		</ul>
	</div>
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

' . '

' . '

';
	return $__finalCompiled;
}
);