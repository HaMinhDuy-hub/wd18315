<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function index()
    {
        $sinhVien = [
            [
                'id' => '1',
                'name' => 'Ha Van Minh Duy',
                'mssv' => 'PH33009',
                'chuyenNganh' => 'Lập trình Web',
            ],
            [
                'id' => '2',
                'name' => 'Ha Minh Duy',
                'mssv' => 'PH33010',
                'chuyenNganh' => 'Lập trình Web',
            ]
            ];
    //    return view('list-product')->with([
    //     'listProducts' => $listProducts
    //    ]);
    return view('sinh-vien', compact('sinhVien'));
    }

}
