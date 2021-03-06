<?php

use DevCommunityDE\CodeFormatter\Api\Auth\ApiAuthorizer;
use DevCommunityDE\CodeFormatter\CodeFormatterApp;

require_once __DIR__ . '/../vendor/autoload.php';

$auth = new ApiAuthorizer();
$auth->authorize();

$app = new CodeFormatterApp();
$app->run();
