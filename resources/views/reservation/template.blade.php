<!-- resources/views/emails/reservation_created.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>New Reservation Created</title>
</head>
<body>
<h1>New Reservation Created</h1>
<p>Name: {{ $reservation->name }}</p>
<p>Email: {{ $reservation->email }}</p>
<p>Date and Time: {{ $reservation->date_time }}</p>
<p>Number of People: {{ $reservation->no_of_people }}</p>
<p>Message: {{ $reservation->msg }}</p>
</body>
</html>
