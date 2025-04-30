function calculateDistance(pickup, drop) {
    // Dummy distance calculation (later we can use real Google Maps API)
    return Math.floor(Math.random() * (20 - 5 + 1)) + 5; // Random between 5-20 km
}

document.getElementById('searchBtn').addEventListener('click', function() {
    const pickup = document.getElementById('pickup').value;
    const drop = document.getElementById('dropoff').value;

    if (pickup && drop) {
        const distance = calculateDistance(pickup, drop);
        localStorage.setItem('distance', distance);
        document.getElementById('vehicle-options').style.display = 'block';
    } else {
        alert("Please enter both pickup and drop locations.");
    }
});

function confirmBooking() {
    const vehicle = document.getElementById('vehicle').value;
    const payment = document.getElementById('payment').value;
    const distance = localStorage.getItem('distance');

    let rate = 0;
    if(vehicle === "mini") rate = 10;
    else if(vehicle === "sedan") rate = 15;
    else if(vehicle === "suv") rate = 20;
    else if(vehicle === "bike") rate = 5;

    const fare = distance * rate;

    document.getElementById('fare').innerHTML = `
        <h3>Booking Confirmed!</h3>
        <p>Vehicle: ${vehicle.toUpperCase()}</p>
        <p>Payment Method: ${payment.toUpperCase()}</p>
        <p>Estimated Fare: ₹${fare}</p>
    `;


}
document.querySelectorAll('.faq-question').forEach(item => {
    item.addEventListener('click', () => {
        // Toggle the corresponding answer
        const answer = item.nextElementSibling;
        // Toggle visibility
        answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
    });
});
