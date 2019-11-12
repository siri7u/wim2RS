<?php
function module3_admin_settings() {
    $form['module3_block_max'] = array(
        '#type' => 'select',
        '#title' => t('Nombre Maximum d\' items à afficher'),
        '#options' => drupal_map_assoc(range(1,200)),
        '#default_value' => variable_get('module3_block_max', ''),
        '#description' => t('Définit le nb max. d\'items dans un historique'),
        '#required' => TRUE,
    );
    return system_settings_form($form);
}