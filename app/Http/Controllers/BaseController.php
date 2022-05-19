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
        $pdf->AddFont('Calibri','','Montserrat-Regular.php');
//        $pdf->AddFont('Calibri','','calibri.php');
        $pdf->SetFont('Calibri', '', '11');

        $pdf->setSourceFile(public_path('3.pdf'));
        $tdl = $pdf->importPage(1);

        $pdf->useTemplate($tdl, null, null, null,210, true);
        $fullname = "$name $last_name";
        $fullname = str_replace('ә', 'а', $fullname);
        $fullname = str_replace('ң', 'н', $fullname);
        $fullname = str_replace('ғ', 'г', $fullname);
        $fullname = str_replace('ү', 'у', $fullname);
        $fullname = str_replace('ұ', 'у', $fullname);
        $fullname = str_replace('қ', 'к', $fullname);
        $fullname = str_replace('ө', 'о', $fullname);
        $fullname = str_replace('һ', 'х', $fullname);
        $fullname = str_replace('Ә', 'А', $fullname);
        $fullname = str_replace('Ң', 'Н', $fullname);
        $fullname = str_replace('Ғ', 'Г', $fullname);
        $fullname = str_replace('Ү', 'У', $fullname);
        $fullname = str_replace('Ұ', 'У', $fullname);
        $fullname = str_replace('Қ', 'К', $fullname);
        $fullname = str_replace('Ө', 'О', $fullname);
        $fullname = str_replace('Һ', 'Х', $fullname);
        $str = iconv('UTF-8', 'cp1251', "$fullname");
        $mid = 135 / 2;
        $margin = 10;
        $offset = $pdf->GetStringWidth($str) / 2;
        $pdf->SetXY($mid - $offset + $margin, 124);
        $pdf->Write(0.1, $str);

        $pdf->Output('I', 'Certificate.pdf');
    }
}
