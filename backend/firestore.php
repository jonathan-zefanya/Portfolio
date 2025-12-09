<?php
require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

function getFirestore() {
    return new FirestoreClient([
        'keyFilePath' => __DIR__ . '/credentials/firebase.json',
        'projectId' => 'portfolio-2cc33'
    ]);
}