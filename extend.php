<?php

use Quasimo\LlmsTxt\Controller\LlmsTxtController;
use Flarum\Extend;

return [
    // Register public routes for llms.txt and llms-full.txt
    (new Extend\Routes('forum'))
        ->get('/llms.txt', 'quasimo-llms-txt.index', LlmsTxtController::class)
        ->get('/llms-full.txt', 'quasimo-llms-txt.full', LlmsTxtController::class),

    // Register admin frontend JS
    (new Extend\Frontend('admin'))
        ->js(__DIR__ . '/js/dist/admin.js'),

    // Register locale files
    new Extend\Locales(__DIR__ . '/resources/locale'),

    // Serialize settings to admin so the JS can read saved values
    (new Extend\Settings())
        ->serializeToForum('llmsTxtEnabled', 'llms_txt.enabled', 'boolval', true)
        ->serializeToForum('llmsTxtFullEnabled', 'llms_txt.full_enabled', 'boolval', true),
];
