<?php
$participansdata1 =
[
    'senderid' => 1,
    'name' => 'damaralbaribin',
    'username' => '@damar',
];

$participansdata2 =
[
    'senderid' => 2,
    'name' => 'heldy scarlet',
    'username' => '@scarleth',
];

$message1 =
[
    'MessageID' => 1,
    'Sender' => 1,
    'MessageData' => 'Hello Worlds',
    'Timestamp' => time(),

];

$message2 =
[
    'MessageID' => 2,
    'Sender' => 2,
    'MessageData' => 'Hello Worlds indeed',
    'Timestamp' => time(),
];
$t =
[
    'roomid' => 1,
    'DateCreated' => time(),
    'ParticipansData' => [$participansdata1, $participansdata2],
    'message' => [$message1, $message2],
];

header('Content-Type: application/json');
echo json_encode($t);
