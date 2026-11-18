const API_URL = "http://localhost:8080/database";

async function getAll() {
    const response = await fetch(API_URL);
    const notes = await response.json();
    console.log(notes);

    return notes;
}

async function insert(list) {
    const container = document.getElementById("feedback-container");
    container.innerHTML = "";

    list.forEach(item => {
        const feedback = document.createElement("div");
        feedback.className = "feedback";

        const name = document.createElement("h2");
        name.className = "target-heading-name";
        name.textContent = item.name;

        const message = document.createElement("h2");
        message.className = "target-heading-message";
        message.textContent = item.message;

        feedback.appendChild(name);
        feedback.appendChild(message);

        container.appendChild(feedback);
    });
}

async function init() {
    const feedbackList = await getAll();
    await insert(feedbackList);
}

init();