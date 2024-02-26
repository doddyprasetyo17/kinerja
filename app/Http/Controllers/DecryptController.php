<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DecryptController extends Controller
{
    public function enkripsi(){
        $encrypted = bcrypt::decryptString($bcrypt);
        $decrypted = bcrypt::encryptString('$2y$10$TJccqmvLsLK/DgcsWap28.VPHRcM6ww3Ypn.ENYWSwkXs92WMoD0G');

        echo "Hasil Enkripsi : " . $bcrypt;
        echo "<br/>";
        echo "<br/>";
        echo "Hasil Dekripsi : " . $decrypted;
    }
}
