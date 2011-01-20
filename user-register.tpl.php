<?php 
echo '<div class="mandataria">';

drupal_set_title(t('Registrazione'));	

echo drupal_render($form['timezone']);
echo drupal_render($form['form_build_id']);
echo drupal_render($form['form_id']);


echo drupal_render($form);
echo '</div>';

?>
