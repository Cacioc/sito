<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Nuovo cliente',
    'email_message' => 'Un cliente ha richiesto consulenza',
    'success_redirect' => '',
    'email' => array(
    'from' => 'alessandromele.ml',
    'to' => 'amele2k03@gmail.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Nome',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nome\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Messaggio',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Messaggio\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>