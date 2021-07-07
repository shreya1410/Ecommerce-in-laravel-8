@extends('master')
@section('content')

    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total +10}}</td>
                </tr>

                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Payment:</label>
                        <input type="radio" value="cash" name="payment"><span>Online Payment</span>
                        <input type="radio" value="cash" name="payment"><span>EMI Payment</span>
                        <input type="radio" value="cash" name="payment"><span>Cash on Delivery</span>
                    </div>
                    <button type="submit" class="btn btn-default">order Now</button>
                </form>
            </div>

        </div>
    </div>

@endsection
