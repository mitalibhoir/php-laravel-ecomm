@extends('master')
@section('content')
<div class="container custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>₹ {{ $total }}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>₹ 0</td>
                </tr>
                <tr>
                    <td>Delivery Charges</td>
                    <td>₹ 40</td>
                </tr>
                <tr>
                    <td>Total amount</td>
                    <td>₹ {{ $total + 40 }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <form action="/placeorder" method="POST">
        @csrf
        <div class="mb-3 form-group">
            <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
        </div>
        <div class="mb-3 form-group">
            <label class="pwd"><b>Payment method</b></label><br><br>
            <input type="radio" value="cash" name="payment" style="margin-right: 10px"><span>Online
                payment</span><br><br>
            <input type="radio" value="cash" name="payment" style="margin-right: 10px"><span>EMI payment</span><br><br>
            <input type="radio" value="cash" name="payment" style="margin-right: 10px"><span>Cash on
                delivery</span><br><br>
        </div>
        <button type="submit" class="btn btn-primary">Confirm order</button>
    </form>
</div>
@endsection