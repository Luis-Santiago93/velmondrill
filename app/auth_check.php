<?php
session_start();

$token = $_COOKIE['jwt_token'] ?? null;

if (!$token) {
    header('Location: index.php');
    exit;
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://velmondrill.com/sacvel/auth/validate");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $token"
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200) {
    header('Location: index.php');
    exit;
}

$tokenParts = explode('.', $token);
$payload = base64_decode($tokenParts[1]);
$userData = json_decode($payload, true)['data'];

$_SESSION['user'] = [
    'id' => $userData['id'],
    'name' => $userData['name'],
    'username' => $userData['username'],
    'role' => $userData['role']
];
?>