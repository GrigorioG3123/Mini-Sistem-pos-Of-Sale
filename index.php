<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sale</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Point of Sale</h1>
        <div class="barcode-input">
            <input type="text" id="barcode" placeholder="Android Scan" autofocus>
            <input type="number" id="itemQuantity" value="1" min="1">
            <button id="addItem">Aumenta Item</button>
        </div>
        <table id="itemList">
            <thead>
                <tr>
                    <th>Naran Sasan</th>
                    <th>Presu</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <div class="total">
            <h2>Total Pagamentu: <span id="totalPayment">0</span></h2>
            <label for="">Osan simu</label>
            <input type="number" id="amountReceived" placeholder="osan Nebe simu">
            <h2>Osan Volta: <span id="change">0</span></h2>
            <button id="saveTransaction">Save iha Transaksi</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
