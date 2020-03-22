<table>
    <tr>
        <td>Dear <b>{{$first_name.' '.$last_name}}</b></td>
        <td>Welcome to Eiser Shop</td>
        <td>Your phone no: {{$phone_no}}</td>
        <td>Your email address: {{$email_address}}</td>
        <td>Please <a href="{{url('/checkout')}}">Click here</a> to continue shopping</td>
        <td><b>Thank You!</b></td>
    </tr>
</table>