<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Summary AI</title>
</head>
<body>

    <h2>Get Book Summary</h2>
    <input type="text" id="bookTitle" placeholder="Enter book title">
    <button onclick="getSummary()">Get Summary</button>

    <h3>Summary:</h3>
    <p id="summary"></p>

    <button onclick="readSummary()">🔊 Read Aloud</button>
    <button onclick="pauseResumeSpeech()">⏸️ Pause/Resume</button>
    <button onclick="stopSpeech()">⏹️ Stop</button>

    <script>
        let speechUtterance;
        let isPaused = false;
        let queue = [];
        let selectedVoice = null;
        
        function loadVoices() {
            let voices = speechSynthesis.getVoices();
            selectedVoice = voices.find(voice => voice.name.includes("Female") || voice.name.includes("Samantha") || voice.name.includes("Google UK English Female"));

            if (!selectedVoice) {
                selectedVoice = voices.find(voice => voice.lang.startsWith("en")) || voices[0];
            }
        }

        speechSynthesis.onvoiceschanged = loadVoices;

        function getSummary() {
            let bookTitle = document.getElementById("bookTitle").value;
            if (!bookTitle) {
                alert("Please enter a book title.");
                return;
            }

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "test.php", true);
            xhr.setRequestHeader("Content-Type", "application/json");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    let response = JSON.parse(xhr.responseText);
                    console.log("API Response:", response);

                    if (xhr.status !== 200 || response.error) {
                        document.getElementById("summary").innerText = "Error: " + (response.error || "API issue");
                        return;
                    }

                    if (response.choices && response.choices.length > 0) {
                        document.getElementById("summary").innerText = response.choices[0].message.content;
                    } else {
                        document.getElementById("summary").innerText = "Error: Unexpected API response.";
                    }
                }
            };

            xhr.send(JSON.stringify({ bookTitle: bookTitle }));
        }

        function readSummary() {
            let text = document.getElementById("summary").innerText;
            if (!text || text.startsWith("Error")) {
                alert("No valid summary available to read.");
                return;
            }

            stopSpeech(); 

            queue = text.split(/(?<=[.!?])\s+/); // Split into sentences
            isPaused = false;
            queue.forEach(sentence => speak(sentence)); // Speak each sentence separately
        }

        function speak(sentence) {
            speechUtterance = new SpeechSynthesisUtterance(sentence);
            speechUtterance.voice = selectedVoice;
            speechUtterance.lang = "en-US";
            speechUtterance.rate = 1.1;
            speechUtterance.pitch = 1.2;

            speechSynthesis.speak(speechUtterance);
        }

        function pauseResumeSpeech() {
            if (speechSynthesis.speaking) {
                if (isPaused) {
                    isPaused = false;
                    speechSynthesis.resume();
                } else {
                    isPaused = true;
                    speechSynthesis.pause();
                }
            }
        }

        function stopSpeech() {
            speechSynthesis.cancel();
            isPaused = false;
        }
    </script>

</body>
</html>
