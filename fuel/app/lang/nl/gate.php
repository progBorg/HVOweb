<?php

return [
	'login' => [
		'title' => 'Inloggen',
		'reset' => 'Ik ben mijn wachtwoord vergeten',
		'btn' => 'Login',
		'label' => [
			'username' => 'Email of gebruikersnaam',
			'pass' => 'Wachtwoord',
			'remember_me' => 'Onthoud mij',
		],
	],
	'empty_list' => 'Er zijn geen uitstaande tokens',
	'reset' => [
		'title' => 'Wachtwoord resetten',
		'msg' => 'Voer je email adres in om een mail met wachtwoord reset instructies te ontvangen.',
		'btn' => 'Wachtwoord reset aanvragen',
		'label' => [
			'mail' => 'Email',
		],
		'mail' => [
			'subject' => 'Wachtwoord reset aangevraagd',
			'body' => 'Hoihoi, <br><br>Er is een wachtwoord reset aangevraagd voor het account op ' . __('site_title') . ' ' . __('site_sub') . ' dat geregistreerd staat met dit emailadres. ' .
			'Negeer deze mail als je geen aanvraag hebt ingedient. Om je wachtwoord te resetten klik je op onderstaande link: <br><br>' .
			'<a href="https://:link">https://:link</a> <br><br> --HVOweb Admin',
		],
	],
	'alert' => [
		'success' => [
			'reset_mail' => 'Als het ingevoerde mail adres bij een account hoort ontvang je binnenkort een mail met instructies',
			'pass_changed' => 'Wacthwoord gewijzigd',
		],
		'error' => [
			'invalid_token' => 'Ongeldig reset token',
			'expired_token' => 'Reset token is verlopen',
			'pass_mismatch' => 'De wachtwoorden komen niet overeen',
		]
	]
];

