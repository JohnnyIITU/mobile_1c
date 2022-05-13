<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class BaseController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $last_name = $request->surname;
        $pdf = new \setasign\Fpdi\Fpdi();

        $pdf->AddPage();
        $pdf->AddFont('Calibri','','calibri.php');
        $pdf->SetFont('Calibri', '', '11');

        $pdf->setSourceFile(public_path('photo2.pdf'));
        $tdl = $pdf->importPage(1);

        $pdf->useTemplate($tdl, null, null, null,210, true);
        $str = iconv('UTF-8', 'cp1251', "$name $last_name");
        $mid = 135 / 2;
        $margin = 10;
        $offset = $pdf->GetStringWidth($str) / 2;
        $pdf->SetXY($mid - $offset + $margin, 113);
        $pdf->Write(0.1, $str);

        $pdf->Output('I', 'Certificate.pdf');
    }
}
