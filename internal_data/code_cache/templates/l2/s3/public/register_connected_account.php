<?php
// FROM HASH: 6df5732cc7590fa375ed6a949af0537f
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Регистрация через ' . $__templater->escape($__vars['provider']['title']) . '');
	$__finalCompiled .= '

';
	$__vars['user'] = ($__vars['user'] ?: $__vars['xf']['visitor']);
	$__finalCompiled .= '
';
	$__templater->includeJs(array(
		'src' => 'xf/login_signup.js',
		'min' => '1',
	));
	$__finalCompiled .= '

';
	$__templater->setPageParam('head.' . 'robots', $__templater->preEscaped('<meta name="robots" content="noindex" />'));
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['providerData']['email']) {
		$__compilerTemp1 .= '
						' . $__templater->formRow($__templater->escape($__vars['providerData']['email']), array(
			'label' => 'Электронная почта',
		)) . '
					';
	} else {
		$__compilerTemp1 .= '
						' . $__templater->callMacro('register_macros', 'email_row', array(), $__vars) . '
					';
	}
	$__compilerTemp2 = '';
	if (!$__vars['providerData']['dob']) {
		$__compilerTemp2 .= '
						' . $__templater->callMacro('register_macros', 'dob_row', array(), $__vars) . '
					';
	}
	$__compilerTemp3 = '';
	if (!$__vars['providerData']['location']) {
		$__compilerTemp3 .= '
						' . $__templater->callMacro('register_macros', 'location_row', array(), $__vars) . '
					';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<h2 class="block-tabHeader tabs" data-xf-init="tabs" role="tablist">
			<a class="tabs-tab is-active" role="tab" tabindex="0" aria-controls="' . $__templater->func('unique_id', array('regCreate', ), true) . '">
				' . 'Создать новую учётную запись' . '
			</a>
			<a class="tabs-tab" role="tab" tabindex="0" aria-controls="' . $__templater->func('unique_id', array('regAssoc', ), true) . '">
				' . 'Связать существующую учётную запись' . '
			</a>
		</h2>

		<ul class="tabPanes">
			<li class="is-active"
				data-xf-init="reg-form"
				data-timer="' . $__templater->escape($__vars['xf']['options']['registrationTimer']) . '"
				role="tabpanel"
				id="' . $__templater->func('unique_id', array('regCreate', ), true) . '">

				<div class="block-body">
					' . $__templater->callMacro('register_macros', 'username_row', array(), $__vars) . '

					' . $__compilerTemp1 . '

					' . $__compilerTemp2 . '

					' . $__compilerTemp3 . '

					' . $__templater->callMacro('register_macros', 'custom_fields', array(), $__vars) . '

					' . $__templater->callMacro('register_macros', 'email_choice_row', array(), $__vars) . '
				</div>
				' . $__templater->callMacro('register_macros', 'submit_row', array(), $__vars) . '

			</li>
			<li role="tabpanel" id="' . $__templater->func('unique_id', array('regAssoc', ), true) . '">
				<div class="block-body block-row">
					' . 'Чтобы связать существующую учётную запись, необходимо сначала войти в неё, а затем начать связь на странице "<a href="' . $__templater->func('link', array('account/connected-accounts', ), true) . '">Внешние аккаунты</a>".' . '
				</div>
			</li>
		</ul>
	</div>

	' . $__templater->func('redirect_input', array(null, null, true)) . '
	' . $__templater->formHiddenVal('timezone', '', array(
		'data-xf-init' => 'auto-timezone',
	)) . '
', array(
		'action' => $__templater->func('link', array('register/connected-accounts/register', $__vars['provider'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);