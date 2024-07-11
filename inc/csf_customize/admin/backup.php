<?php
/**
 * Time keeper Theme page option
 *
 * @package Time_keeper
 */
CSF::createSection( $prefix, array(
    'id'     => 'time_backup',
    'title'  => 'Backup Option',
    'icon'   => 'fas fa-download',
    'fields' => array(
        array(
            'type' => 'backup',
        ),
    ),
) );
