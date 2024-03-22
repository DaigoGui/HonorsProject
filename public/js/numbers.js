document.addEventListener("DOMContentLoaded", function () {
    const startGameBtn = document.getElementById("startGameBtn");
    const resetGameBtn = document.getElementById("resetGameBtn");
    let gameStarted = false;

    // Event listeners for drag start and end
    document.querySelectorAll(".draggable").forEach(draggable => {
        draggable.addEventListener("dragstart", () => {
            draggable.classList.add("dragging");
        });

        draggable.addEventListener("dragend", () => {
            draggable.classList.remove("dragging");
        });
    });

    // Droppables event listener setup
    document.querySelectorAll(".droppable").forEach(droppable => {
        droppable.addEventListener("dragover", (e) => {
            e.preventDefault();
        });

        droppable.addEventListener("drop", (e) => {
            if (gameStarted) {
                const dragging = document.querySelector(".dragging");
                const correctWordId = dragging.dataset.wordId;
                if (droppable.id === correctWordId) {
                    droppable.innerHTML = ""; // Clear before appending
                    droppable.appendChild(dragging);
                    displayFeedback("Correct!");
                } else {
                    displayFeedback("Incorrect. Try again.");
                }
            }
        });
    });

    startGameBtn.addEventListener("click", function () {
        if (!gameStarted) {
            shuffleElements('.draggable', '.images-container');
            shuffleElements('.droppable', '.word-list-container');
    
            // Show the images and word boxes
            document.querySelector('.word-list-container').style.display = "flex";
            document.querySelector('.images-container').style.display = "flex";
    
            // Hide the Start Game button and show the Reset Game button
            startGameBtn.style.display = "none";
            resetGameBtn.style.display = "block";
    
            gameStarted = true;
        }
    });

    function resetGame() {
        // Show the Start Game button and hide the Reset Game button
        startGameBtn.style.display = "block";
        resetGameBtn.style.display = "none";
    
        // Hide the completion message if you have one
        document.querySelector('.completion-message').style.display = "none";
    
        // Optionally reset draggable and droppable elements to their original positions
        // This step depends on whether you want the game to start fresh each time
        // If you do, you might need to store the original order or simply not shuffle on reset
    
        // Clear feedback message
        displayFeedback("");
    
        // Reset the game state
        gameStarted = false;
    }
    
    function displayFeedback(message) {
        const feedbackContainer = document.getElementById("feedback");
        feedbackContainer.textContent = message;
    
        // Clear the message after a delay to avoid cluttering the UI
        setTimeout(() => {
            feedbackContainer.textContent = "";
        }, 2000); // Adjust the delay as needed
    }
    
});

function shuffleElements(elementsSelector, containerSelector) {
    const container = document.querySelector(containerSelector);
    const elements = Array.from(document.querySelectorAll(elementsSelector));
    const shuffledElements = elements.sort(() => 0.5 - Math.random());

    container.innerHTML = ''; // Clear container
    shuffledElements.forEach(element => {
        container.appendChild(element); // Re-append in shuffled order
    });
}

function displayFeedback(message) {
    const feedbackContainer = document.getElementById("feedback");
    feedbackContainer.textContent = message;

    setTimeout(() => {
        feedbackContainer.textContent = "";
    }, 2000);
}
