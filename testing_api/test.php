<?php

header("Content-Type: application/json");

$apiKey = "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"; // Replace with your API key
$endpoint = "https://openrouter.ai/api/v1/chat/completions"; 

$data = json_decode(file_get_contents("php://input"), true);
$bookTitle = $data["bookTitle"] ?? "";

if (empty($bookTitle)) {
    echo json_encode(["error" => "Book title is required"]);
    exit;
}

$requestData = [
    "model" => "mistralai/mistral-7b-instruct", // Or use "mixtral"
    "messages" => [
        ["role" => "system", "content" => "You are an AI that provides short book summaries."],
        ["role" => "user", "content" => "Summarize the book '$bookTitle' in a few sentences."]
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

// Debugging: Log response for checking errors
file_put_contents("debug_log.txt", "HTTP Code: $httpCode\nResponse: $response\n", FILE_APPEND);

// Send response back to JavaScript
echo $response;
