<?php
$monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

function getMonthName($month)
{
    global $monthNames;
    if ($month >= 1 && $month <= 12) {
        return $monthNames[$month - 1];
    } else {
        return "invalid";
    }
}

if (isset($_POST['submit'])) {
    $userInput = $_POST["userInput"];

    if (strlen($userInput) !== 11) {
        $error = "Harus terdiri dari 11 digit kode.";
    } else {
        $golongan = $userInput[0];
        $tanggal = $userInput[1] . $userInput[2];
        $bulan = $userInput[3] . $userInput[4];
        $tahun = $userInput[5] . $userInput[6] . $userInput[7] . $userInput[8];
        $nomorUrut = $userInput[9] . $userInput[10];

        if ($golongan < 1 || $golongan > 4) {
            $golongan = "invalid";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Kode Pegawai</title>
</head>
<style>
    html,
    body,
    :root {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .box {
        background-color: #444;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 300px;
        color: white;
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }

    label {
        margin-top: 10px;
    }

    input {
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    #button {
        margin-top: 10px;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        background-color: #3448db;
        color: white;
        cursor: pointer;
    }

    #button:hover {
        background-color: #2990b9;
    }

    h2 {
        margin-top: 20px;
        font-size: 24px;
    }
</style>

<body>

    <div class="container">
        <div class="box">
            <form method="post" action="">
                <label>Masukkan kode pegawai (11 digit):</label>
                <input type="text" name="userInput" maxlength="11" placeholder="Kode Pegawai..." required>
                <button type="submit" name="submit">Submit</button>
            </form>
            <?php
            if (isset($error)) {
                echo "<p>$error</p>";
            } elseif (isset($golongan)) {
                echo "<p>Nomor Golongan: $golongan</p>";
                echo "<p>Tanggal Lahir: $tanggal " . getMonthName($bulan) . " $tahun</p>";
                echo "<p>Nomor Urut Pegawai: $nomorUrut</p>";
            }
            ?>
        </div>
    </div>


</body>

</html>