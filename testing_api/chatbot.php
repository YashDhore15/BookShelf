<?php

header("Content-Type: application/json");

$apiKey = "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";
$endpoint = "https://openrouter.ai/api/v1/chat/completions";

$data = json_decode(file_get_contents("php://input"), true);
$userMessage = $data["message"] ?? "";

if (empty($userMessage)) {
    echo json_encode(["reply" => "Please enter a question."]);
    exit;
}

$requestData = [
    "model" => "gpt-3.5-turbo", // Or "mixtral", "mistral-7b"
    "messages" => [
        ["role" => "system", "content" => "You are a friendly AI that recommends books and provides book summaries."],
        ["role" => "user", "content" => $userMessage]
    ],
    "max_tokens" => 200
];

$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer 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",
    "Content-Type: application/json",
    "HTTP-Referer: YOUR_WEBSITE_URL",
    "X-Title: Bookshelf AI"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$responseData = json_decode($response, true);
$reply = $responseData["choices"][0]["message"]["content"] ?? "Sorry, I couldn't find an answer.";

echo json_encode(["reply" => $reply]);

?>
