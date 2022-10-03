<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    public function printer(Request $request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateTimeString();
        $connector = new WindowsPrintConnector("XP-80");
        $printer = new Printer($connector);
        $modes = array(
            Printer::MODE_DOUBLE_HEIGHT,
            Printer::MODE_DOUBLE_WIDTH,
        );
        for($i = 0; $i < 2 ** count($modes); $i++) {
            $bits = str_pad(decbin($i), count($modes), "0", STR_PAD_LEFT);
            $mode = 0;
            for($j = 0; $j < strlen($bits); $j++) {
                if(substr($bits, $j, 1) == "1") {
                    $mode |= $modes[$j];
                }
            }
        }
        $printer -> selectPrintMode($mode);
        $printer -> text("Navbat:  ". $request->ochert . "\n");
        $printer -> text("\n");
        $printer -> selectPrintMode();
        $printer -> text("Ism: ". $request->name."\n");
        $printer -> text("Familiya: ". $request->fam."\n");
        $printer -> text("Tugilgan sana: ". $request->data."\n");
        $printer -> text("Telefon: ". $request->tel."\n");
        $printer -> text("Adress: ". $request->adress."\n");
        $printer -> text("Shifokor: ". $request->doctor."\n");
        $printer -> text("Tochka: ". $request->texnalog."\n");
        $printer -> text("To`lov summa: ". $request->jamisumma."\n");
        $printer -> text($request->variable."\n");
        $printer -> text("Sana:                       ". $data1."\n");
        $printer->feed(2);
        $printer -> cut();
        $printer -> close();
    }
}
