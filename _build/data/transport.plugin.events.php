<?php
/**
 * @package tinymce
 * @subpackage build
 */
$events = array();

$evs = array(
    'OnChunkFormPrerender',
    'OnPluginFormPrerender',
    'OnSnipFormPrerender',
    'OnTempFormPrerender',
    //'OnTVFormPrerender',
    'OnFileEditFormPrerender',
    'OnDocFormPrerender',
    'OnRichTextEditorRegister',
    //'OnRichTextEditorInit',
    //'OnRichTextBrowserInit',
);

foreach ($evs as $ev) {
    $events[(string)$ev] = $modx->newObject('modPluginEvent');
    $events[(string)$ev]->fromArray(array(
        'event' => (string)$ev,
        'priority' => 0,
        'propertyset' => 0,
    ),'',true,true);
}

return $events;