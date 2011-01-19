<?php 

echo drupal_render($form['timezone']);
echo drupal_render($form['form_build_id']);
echo drupal_render($form['form_id']);
echo drupal_render($form['form_token']);

drupal_set_title(t('Crea soggetto '));	
	//print drupal_render($form['field_cognome']);

	print drupal_render($form['field_cognome']);
	print drupal_render($form['field_nome']);
	print drupal_render($form['field_cod_fis_mandataria']);

	print drupal_render($form['field_a_personale']);
	print drupal_render($form['field_c_costi']);
	print drupal_render($form['field_d_spese_formazione']);
	print drupal_render($form['field_e_costi_ricerca']);
	print drupal_render($form['field_f_costi_realizzazione']);
	print drupal_render($form['field_g_altri_costi']);
	print drupal_render($form['field_h_spese_generali']);
	print drupal_render($form['field_tot_realizzazione_progetto']);
	print drupal_render($form['field_i_personale']);
	print drupal_render($form['field_m_strumentazione']);
	print drupal_render($form['field_n_spese_formazione']);
	print drupal_render($form['field_o_ricerca']);
	print drupal_render($form['field_p_costi_studi']);
	print drupal_render($form['field_q_costi_esercizio']);
	print drupal_render($form['field_r_spese_generali']);
	print drupal_render($form['field_tot2_realizzazione_progett']);
	print drupal_render($form['field_s_spese_formazione']);
	print drupal_render($form['field_t_costi_messa_adisp']);
	print drupal_render($form['field_u_iva']);
	print drupal_render($form['field_totale_soggetto']);

if(variable_get('multistep_button_prev', t('< Previous'))) {
    if ($step > 1) {
      $form['buttons']['previous'] = array(
        '#type' => 'submit',
        '#value' => variable_get('multistep_button_prev', t('< Previous')),
        '#submit' => array('multistep_previous'),
        '#weight' => 101,
      );
    }
  }
  if (variable_get('multistep_button_save', t('Save'))) {
    $form['buttons']['save'] = array(
      '#type' => 'submit',
      '#value' => variable_get('multistep_button_save', t('Save')),
      '#submit' => array('multistep_save'),
      '#weight' => 102,
    );
  }
  if ($step < variable_get('multistep_steps_' . $type, 0) && $step != 0) {
    $form['buttons']['next'] = array(
      '#type' => 'submit',
      '#value' => variable_get('multistep_button_next', t('Next >')),
      '#submit' => array('multistep_next'),
      '#weight' => 103,
    );


  }
  if ($step == variable_get('multistep_steps_' . $type, 0) || $step == 0) {
    $form['buttons']['done'] = array(
      '#type' => 'submit',
      '#value' => variable_get('multistep_button_done', t('Done')),
      '#submit' => array('multistep_done'),
      '#weight' => 103,
    );
  }

	echo '<div style="clear: both">';
	print drupal_render($form['buttons']['previous']);
	print drupal_render($form['buttons']['save']);
	print drupal_render($form['buttons']['next']);
	print drupal_render($form['buttons']['done']);




	echo '</div">';

	



?>
