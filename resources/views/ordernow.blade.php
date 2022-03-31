@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">

                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>$ {{ $total }}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>$ 10</td>
                    </tr>
                    <tr id="total-price">
                        <td>Total</td>
                        <td>$ {{ $total + 10 }}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form method="POST" class="form-group">
                    @csrf
                    <div class="form-group">
                        <textarea name="address" id="" placeholder="enter your address" class="form-control"></textarea>
                        @error('address')
                            <div class="invalid-feedback">szar</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="payment">Payment Method</label> <br> <br>
                        <input type="radio" value="cash" name="payment"><span>Online payment</span> <br> <br>
                        <input type="radio" value="cash" name="payment"><span>EMI payment</span> <br><br>
                        <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span>
                        @error('payment')
                            <div class="invalid-feedback">szar</div>
                        @enderror
                        
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
