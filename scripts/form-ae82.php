<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Objednávka',
    'email_message' => 'CD',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => 'stevkopagac159@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Meno a priezvisko',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Meno a priezvisko\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Váš e-mail',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Váš e-mail\' is required.'
    )
    ),
    'address' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Vaša adres',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Vaša adres\' is required.'
    )
    ),
    'text' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Poštové smerovacie číslo',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Poštové smerovacie číslo\' is required.'
    )
    ),
    'phone' => array(
    'order' => 5,
    'type' => 'tel',
    'label' => 'Telefónne číslo',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Telefónne číslo\' is required.'
    )
    ),
    'text-1' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'Počer ks CD',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Počer ks CD\' is required.'
    )
    ),
    'agree' => array(
    'order' => 7,
    'type' => 'checkbox',
    'label' => 'Súhlasím so spracovánim osobných údajov',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Súhlasím so spracovánim osobných údajov\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>