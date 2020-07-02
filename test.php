<?php

$participansdata =
[
    'senderid' => 1,
    'name' => 'damaralbaribin',
    'username' => '@damar',

    'senderid' => 2,
    'name' => 'heldy scarlet',
    'username' => '@scarleth',
];

$message =
[
    'MessageID' => 1,
    'Sender' => 1,
    'MessageData' => 'Hello Worlds',
    'Timestamp' => time(),

    'MessageID' => 2,
    'Sender' => 2,
    'MessageData' => 'Hello Worlds indeed',
    'Timestamp' => time(),
];

$participansdata[1] =
[
    'senderid' => 1,
    'name' => 'damaralbaribin',
    'username' => '@damar',

    'senderid' => 2,
    'name' => 'heldy scarlet',
    'username' => '@scarleth',
];

$message[1] =
[
    'MessageID' => 1,
    'Sender' => 1,
    'MessageData' => 'Hello Worlds',
    'Timestamp' => time(),

    'MessageID' => 2,
    'Sender' => 2,
    'MessageData' => 'Hello Worlds indeed',
    'Timestamp' => time(),
];
$t =
[
    'roomid' => 1,
    'DateCreated' => time(),
    'ParticipansData' => $participansdata,
    'message' => $message,
];

echo json_encode($t);
