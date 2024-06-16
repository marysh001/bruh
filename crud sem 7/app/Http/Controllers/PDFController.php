namespace App\Http\Controllers;
use PDF;
class PDFController extends Controller
{
public function priview()
{return view('preview');
}

public function generatePDF()
{
$pdf = PDF::loadView('preview');
return $pdf->download('demo.pdf');
}
}
