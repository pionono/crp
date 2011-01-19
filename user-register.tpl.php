<?php 

drupal_set_title(t('Registrazione'));	
	print drupal_render($form['field_cognome']);
	print drupal_render($form['field_nome']);
	print drupal_render($form['field_cod_fis_man']);
	print drupal_render($form['field_nato_a']);	
	print drupal_render($form['field_data_nascita']);


echo drupal_render($form['timezone']);
echo drupal_render($form['form_build_id']);
echo drupal_render($form['form_id']);


// campi della residenza
	echo ('<div class="label_form">Residenza</div>');
	
	print drupal_render($form['field_region1']); 
	print drupal_render($form['field_province1']); 
	print drupal_render($form['field_city1']); 

	print drupal_render($form['field_via_residenza']);
	print drupal_render($form['field_cap']);
	echo '<div style="clear: both">';
	print drupal_render($form['field_in_qualita_di']);
	echo '</div>';

	echo '<div style="clear: both">';
	print drupal_render($form['field_mandataria_dell_ati']);
	echo '</div>';

	echo '<div style="clear: left">';
	print drupal_render($form['field_cod_fis_mandataria']);
	echo '</div>';

	print drupal_render($form['field_partita_iva']);
	print drupal_render($form['field_sito_web']);

// campi della sede legale
	echo ('<div class="label_form">Sede legale</div>');

	print drupal_render($form['field_region2']); 
	print drupal_render($form['field_province2']); 
	print drupal_render($form['field_city2']); 
	print drupal_render($form['field_indirzzo_mandataria']); 
	print drupal_render($form['field_cap1']); 
	
// campi della sede operativa
	echo ('<div class="label_form">Sede operativa</div>');

	//print drupal_render($form['field_region3']); 
	//print drupal_render($form['field_province3']); 
	//print drupal_render($form['field_city3']); 
	print drupal_render($form['field_indirizzo_operativa']);
	print drupal_render($form['field_cap2']);

// dati iscrizione cciaa
	echo ('<div class="label_form">Dati di iscrizione a CCIAA</div>');
	print drupal_render($form['field_dati_cciaa']);
	print drupal_render($form['field_province4']);
	print drupal_render($form['field_iscrizione_cciaa']);


	echo ('<div class="label_form">Credenziali di accesso</div>');
	print drupal_render($form['name']);
	print drupal_render($form['mail']);
	print drupal_render($form['submit']);


?>
