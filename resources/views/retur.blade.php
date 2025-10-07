<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Retur Barang</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(150deg, #000A83, #000439);
            margin: 0;
            padding: 20px;
            color: #ffffff;
            min-height: 100vh;
        }
        .card {
            background: linear-gradient(180deg, #000A83 0%, #000439 100%);
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 10, 131, 0.5);
            max-width: 1200px;
            margin: auto;
        }
        .card h2 {
            margin: 0 0 20px;
            text-align: center;
            font-weight: 600;
            color: #ffffff;
            text-shadow: 0 0 8px rgba(0, 10, 131, 0.7);
        }
        .input-barang {
            width: 100%;
            padding: 12px 14px;
            border: none;
            border-radius: 8px;
            background: rgba(0, 10, 131, 0.2);
            color: #ffffff;
            margin-bottom: 20px;
            backdrop-filter: blur(6px);
        }
        .input-barang::placeholder {
            color: #bbbbbb;
        }
        .list-transaksi {
            margin-bottom: 20px;
        }
        .transaksi-item {
            background: rgba(0, 10, 131, 0.25);
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .transaksi-info {
            font-size: 14px;
        }
        .btn-pilih {
            background: linear-gradient(90deg, #000A83, #000439);
            color: #ffffff;
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.2s;
        }
        .btn-pilih:hover {
            background: linear-gradient(90deg, #000EBA, #00064E);
            transform: scale(1.05);
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0; top: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.6);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-content {
            background: linear-gradient(160deg, #000A83, #000439);
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 0 12px rgba(0,10,131,0.6);
        }
        .modal-content h3 {
            margin-top: 0;
            margin-bottom: 15px;
            text-align: center;
            color: #ffffff;
        }
        .modal-content input, .modal-content textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 6px;
            margin-bottom: 12px;
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            font-family: 'Inter', sans-serif;
        }
        .modal-content textarea { resize: none; }
        .modal-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        .btn-modal {
            background: linear-gradient(90deg, #000A83, #000439);
            padding: 8px 14px;
            border: none;
            border-radius: 6px;
            color: #fff;
            cursor: pointer;
            transition: 0.2s;
        }
        .btn-modal:hover {
            background: linear-gradient(90deg, #0010A3, #00064E);
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            margin-top: 10px;
            background: rgba(0, 10, 131, 0.15);
            border-radius: 8px;
            overflow: hidden;
        }
        table th, table td {
            padding: 12px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            text-align: left;
            color: #ffffff;
        }
        table th {
            background: rgba(0, 10, 131, 0.3);
            font-weight: 600;
        }
        .status-proses { color: #4caf50; font-weight: 500; }
        .status-menunggu { color: #ff9800; font-weight: 500; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Retur Barang</h2>

        <input type="text" class="input-barang" placeholder="Cari barang... (misal: Celana Pendek)">

        <div class="list-transaksi">
            <div class="transaksi-item">
                <div class="transaksi-info">
                    Transaksi: TRX12345<br>
                    Barang: Celana Pendek<br>
                    Tanggal: 30/09/2025
                </div>
                <button class="btn-pilih" onclick="openModal('TRX12345','Celana Pendek')">Pilih</button>
            </div>
        </div>

        <!-- <div class="modal" id="modalRetur">
            <div class="modal-content">
                <h3 id="modalTitle">Retur Barang</h3>
                <input type="number" placeholder="Jumlah Retur (pcs)" min="1">
                <textarea rows="3" placeholder="Alasan Retur"></textarea>
                <div class="modal-buttons">
                    <button class="btn-modal" onclick="closeModal()">Batal</button>
                    <button class="btn-modal">Ajukan Retur</button>
                </div>
            </div>
        </div> -->

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Products</th>
                    <th>Qty Retur</th>
                    <th>Alasan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>30/09/2025<br>TRX12345</td>
                    <td>Celana Pendek</td>
                    <td>2 pcs</td>
                    <td>Ukuran salah</td>
                    <td><span class="status-proses">Diproses</span></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>30/09/2025<br>TRX12345</td>
                    <td>Celana Pendek</td>
                    <td>2 pcs</td>
                    <td>Ukuran salah</td>
                    <td><span class="status-proses">Diproses</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function openModal(transaksi, barang){
            document.getElementById("modalRetur").style.display = "flex";
            document.getElementById("modalTitle").innerText =
                "Retur " + barang + " (Transaksi: " + transaksi + ")";
        }
        function closeModal(){
            document.getElementById("modalRetur").style.display = "none";
        }

        const searchInput = document.querySelector(".input-barang");
        const transaksiItems = document.querySelectorAll(".transaksi-item");

        searchInput.addEventListener("keyup", function () {
            let keyword = this.value.toLowerCase();
            transaksiItems.forEach(item => {
                let text = item.innerText.toLowerCase();
                item.style.display = text.includes(keyword) ? "flex" : "none";
            });
        });
    </script>
</body>
</html>
