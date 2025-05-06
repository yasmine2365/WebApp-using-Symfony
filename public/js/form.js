document.addEventListener('DOMContentLoaded', function () {
    var dateReservationInput = document.getElementById('reservationmusee1_dateReservation');
    if (dateReservationInput) {
        dateReservationInput.addEventListener('input', function () {
            this.value = this.value.replace(/-/g, '');
        });
    }
});