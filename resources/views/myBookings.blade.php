@extends('layouts.main')

@section('content')


<div class="container-lg" style="margin: 0 auto;">
    
    <h2 class="text-center mt-2" style="font-family: Georgia, serif; color:blueviolet">M&C My Bookings</h2>

    <table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Booking Id</th>
            <th scope="col">Appointment Id</th>
            <th scope="col">Department Name</th>
            <th scope="col">Appointment Date</th>
            <th scope="col">Want To Cancel</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
        <tr>
            <th scope="row">{{$booking->id}}</th>
            <td>{{$booking->appointment_id}}</td>
            <td>{{$booking->department_name}}</td>
            <td>{{$booking->appointment_date}}</td>
            <!-- <td>Please call 070-1065-9288</td> -->
            <td>
                <form action="{{ route('cancelBooking') }}" method="post">
                    @csrf
                    <input type="text" style="display:none" value="{{ $booking->id }}" name="booking_id">
                    <input type="text" style="display:none" value="{{ $booking->appointment_id }}" name="appointment_id">
                    <input type="submit" value="cancel" class="btn btn-danger"/>

                </form>
            </td>
        </tr>
        @endforeach
     </tbody>
    </table>
</div>


@endsection