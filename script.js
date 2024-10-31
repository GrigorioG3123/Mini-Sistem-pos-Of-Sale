let totalPayment = 0;

document.getElementById('addItem').addEventListener('click', function() {
    const barcode = document.getElementById('barcode').value;
    const quantity = parseInt(document.getElementById('itemQuantity').value);
    if (!barcode || quantity < 1) return;

    fetch(`process.php?action=getItem&barcode=${barcode}`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                addToItemList(data.item, quantity);
                document.getElementById('barcode').value = '';
                document.getElementById('itemQuantity').value = 1;
            } else {
                alert('Barang tidak ditemukan!');
            }
        });
});

function addToItemList(item, quantity) {
    const itemList = document.querySelector('#itemList tbody');
    const total = (item.harga * quantity).toFixed(2);
    totalPayment += parseFloat(total);
    
    const row = itemList.insertRow();
    row.insertCell(0).innerText = item.nama_barang;
    row.insertCell(1).innerText = parseFloat(item.harga).toFixed(2);
    row.insertCell(2).innerText = quantity;
    row.insertCell(3).innerText = total;

    updateTotalPayment();
}

function updateTotalPayment() {
    document.getElementById('totalPayment').innerText = totalPayment.toFixed(2);
}

document.getElementById('amountReceived').addEventListener('input', function() {
    const amountReceived = parseFloat(this.value) || 0;
    const change = amountReceived - totalPayment;
    document.getElementById('change').innerText = change.toFixed(2);
});
