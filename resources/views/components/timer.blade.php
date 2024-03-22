{{-- resources/views/pomodoro.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pomodoro Timer</title>
    <style>
        .timer-icon { cursor: pointer; width: 100px; /* Add more styling as needed */ }
        .timer-display { font-size: 24px; margin-top: 20px; }
    </style>
</head>
<body>

<!-- Use one img element and change its src attribute based on the timer's state -->
<img src="{{ asset('clock1.png') }}" class="timer-icon" id="timerIcon" alt="Pomodoro Timer">
<div class="timer-display" id="timerDisplay">Click the clock to start</div>

<script>
let workIntervalsCompleted = 0;
const workDuration = 25 * 60;
const shortBreakDuration = 5 * 60;
let currentTime = 0; // Not active initially
let isWorkTime = false;
let timer = null;

function updateImage() {
    const imgElement = document.getElementById('timerIcon');
    imgElement.src = isWorkTime || currentTime > 0 ? "{{ asset('clock2.png') }}" : "{{ asset('clock1.png') }}";
}

document.getElementById('timerIcon').addEventListener('click', function() {
    if (!isWorkTime && currentTime === 0) { // Start timer only if it's not already running
        isWorkTime = true;
        currentTime = workDuration;
        updateImage();
        startTimer();
    }
});

function startTimer() {
    timer = setInterval(function() {
        const minutes = Math.floor(currentTime / 60);
        const seconds = currentTime % 60;
        document.getElementById('timerDisplay').textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

        if (currentTime <= 0) {
            clearInterval(timer);
            if (isWorkTime) {
                // Prompt the user at the end of a work interval
                if (confirm("25 minutes up! Do you want to take a 5-minute break and keep going, or quit? OK for break, Cancel for quit.")) {
                    currentTime = shortBreakDuration;
                    isWorkTime = false;
                } else {
                    currentTime = 0; // Stop the timer
                    isWorkTime = false;
                    updateImage();
                    document.getElementById('timerDisplay').textContent = "Timer stopped.";
                    return; // Exit the function to not restart the timer
                }
            } else {
                currentTime = workDuration; // Prepare for the next work interval
                isWorkTime = true;
            }
            updateImage();
            startTimer(); // Restart timer for the next phase
        } else {
            currentTime--;
        }
    }, 1000);
}

// Initialize with clock1.png
updateImage();
</script>

</body>
</html>
