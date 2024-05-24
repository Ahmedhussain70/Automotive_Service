{{-- @include('../componantes/navbar') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #444;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #666;
        }

        th {
            background-color: #555;
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background-color: #666;
        }

        tbody tr:hover {
            background-color: #777;
        }

        .empty-cart {
            text-align: center;
            color: #ccc;
            margin-top: 20px;
        }

        .checkout-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .checkout-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Shopping Cart</h1>

        @if ($cartItems->isEmpty())
            <p class="empty-cart">Your cart is empty.</p>
        @else
            <form action="{{ url('/order') }}" method="post">
                @csrf
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $cartItem)
                            <tr>
                                <td>{{ $cartItem->proName }}</td>
                                <td>{{ $cartItem->qty }}</td>
                                <td>${{ $cartItem->price }}</td>
                                <td>${{ $cartItem->qty * $cartItem->price }}</td>
                                <input type="hidden" name="user_id">
                                <input type="hidden" name="pro_id">
                                <input type="hidden" name="qty">
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button class="checkout-btn" type="submit">Proceed to Checkout</button>
            </form>


            {{-- <a href="{{ url('/order') }}" class="checkout-btn">Proceed to Checkout</a> --}}
            {{-- <a href="" class="checkout-btn">Proceed to Checkout</a> --}}
        @endif
    </div>
</body>

</html>
