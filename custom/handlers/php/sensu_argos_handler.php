#!/usr/bin/php
<?php

var_dump(getenv());

require_once(__DIR__ . '/classes/sensu_arvato_argos_handler.php');

$handler = new SensuArvatoArgosHandler();

exit($handler->handle());
