function updateCountdown() {
    const countdown = document.getElementById("countdown");

    if (!countdown) return;

    const targetDate = new Date(anniversaryDate).getTime();
    const now = new Date().getTime();
    const difference = targetDate - now;

    if (difference <= 0) {
        countdown.innerHTML = "Today is our special day!";
        return;
    }

    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((difference / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((difference / (1000 * 60)) % 60);
    const seconds = Math.floor((difference / 1000) % 60);

    countdown.innerHTML =
        days + " days, " +
        hours + " hours, " +
        minutes + " minutes, " +
        seconds + " seconds to go";
}

setInterval(updateCountdown, 1000);
updateCountdown();