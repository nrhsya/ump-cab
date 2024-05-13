// calculate rental duration
function calcDuration()
{
    var start_date = new Date(document.carRentalDetails.start_date.value);
    var end_date = new Date(document.carRentalDetails.end_date.value);
    var time_difference = end_date.getTime() - start_date.getTime();
    var rental_duration = time_difference / (1000*3600*24);

    document.getElementById('rental_duration').value = rental_duration;
}

// calculate rental amount
function calcRentalAmount()
{
    var rental_fare = parseInt(document.carRentalDetails.rental_fare.value);

    var rental_amount = rental_fare * rental_duration;

    document.getElementById('rental_amount').value = rental_amount;
}