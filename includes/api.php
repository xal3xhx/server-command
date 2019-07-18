<?php
function runCommand($command, $token, $nodeId = null) {
    $curl = curl_init('http://panel.factorio.events:8336/api/runCommand');
    curl_setopt(
        $curl,
        CURLOPT_HTTPHEADER,
        [
            'X-Access-Token: '.$token,
            'Content-Type: application/json',
            'Cache-Control: no-cache',
            'Accept: */*'
        ]
    );
    if ($nodeId !== null) {
        $data = ['command' => $command, 'instanceID' => $nodeId];
    } else {
        $data = ['command' => $command, 'broadcast' => true];
    }
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    echo $command, ' => ', curl_exec($curl), PHP_EOL;
    curl_close($curl);
}

function runCommandTest($command, $token, $nodeId = null) {
    $curl = curl_init('94.237.89.108:10000/api/runCommand');
    curl_setopt(
        $curl,
        CURLOPT_HTTPHEADER,
        [
            'X-Access-Token: '.$token,
            'Content-Type: application/json',
            'Cache-Control: no-cache',
            'Accept: */*'
        ]
    );
    if ($nodeId !== null) {
        $data = ['command' => $command, 'instanceID' => $nodeId];
    } else {
        $data = ['command' => $command, 'broadcast' => true];
    }
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    echo $command, ' => ', curl_exec($curl), PHP_EOL;
    curl_close($curl);
}

//$pterodactyl = new \HCGCloud\Pterodactyl\Pterodactyl(API, URI);
?>