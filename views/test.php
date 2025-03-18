<body>
<p id="p" onclick="change()">
        Hello
</p>

    <script>

        function change()
        {
            let p = document.getElementById("p");
            p.innerHTML = "Good afternoon";
            console.log("Hello");
        }

    </script>
</body>