const API_URL = "http://localhost:8080/database";

const form = document.getElementById("feedback-form");

form.addEventListener("submit", async (event) => {
    event.preventDefault();
    const name = document.getElementById("user_name").value;
    const message = document.getElementById("user_message").value;

    const item = {
        name: name,
        message: message
    };

    const response = await fetch(API_URL, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(item)
    });
    console.log("Ответ сервера:", response.status);
});
