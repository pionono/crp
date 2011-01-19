<?php 

$form['#validate'] = user_login_default_validators();

$form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Log in'),
    '#weight' => 2,
  );


$form['name'] = array(
    '#type' => 'textfield', 
    '#title' => t('Username'), 
    '#size' => 60, 
    '#maxlength' => USERNAME_MAX_LENGTH, 
    '#required' => TRUE,
  );

$form['pass'] = array(
    '#type' => 'password', 
    '#title' => t('Password'), 
    '#description' => t('Enter the password that accompanies your username.'), 
    '#required' => TRUE,
  );

drupal_set_title(t('Accesso al servizio'));	
//	print drupal_render($form['field_cognome']);

echo '<div style="clear: both;">Per poter compilare la domanda di partecipazione devi essere registrato. Se ti sei già registrato inserisci le credenziali utente fornite durante la registrazione altrimenti seleziona il menu “Registrazione".</div>';

print $rendered; 



echo '<div style="font-size: 10px; font-weight: bold; margin-top: 10px;"><a href="https://www.regione.sardegna.it/rasrl2010/user/register/">Crea nuovo profilo</a></div>
    <div style="font-size: 10px; font-weight: bold;"><a href="https://www.regione.sardegna.it/rasrl2010/user/password/">Richiedi una nuova password</a></div>';


echo drupal_render($form['timezone']);
echo drupal_render($form['form_build_id']);
echo drupal_render($form['form_id']);






?>
