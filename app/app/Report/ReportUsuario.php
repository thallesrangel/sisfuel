<?php

namespace App\Report;

use App\controller\ControllerUsuario;
use App\fpdf\fpdf;

class ReportUsuario extends FPDF
{   
    function header(){
        $this->SetTitle("Sisvel - Usuarios");
        $this->Image(DIRIMG."/logo.png",10,6);
        $this->SetFont('Arial','',12);
        $this->Cell(276,5,"Relatório de Usuários",0,0,'C');
        $this->Ln();
        $this->setFont('Arial','',10);
        $this->Cell(276,10,'Software para gestão de combustíveis');
        $this->Ln(15);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Página '.$this->PageNo().'/{nb}',0,0,'C');
        $this->Cell(0,5,"Usuário: ".$_SESSION['nome_usuario'],0,0,'R');
        $this->Cell(0,15,"Emitido em: ".date("d/m/Y H:i:s"),0,0,'R');
    }

    function headerTable() { 
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20,8,'ID',1,0,'L');
        $this->Cell(50,8,'Usuário',1,0,'L');
        $this->Cell(45,8,'e-mail',1,0,'L');
        $this->Cell(35,8,'id_acesso',1,0,'L');
        $this->Cell(30,8,'status',1,0,'L');
        $this->Ln();
    }

    function viewTable(){

        $this->SetFont('Arial', '', 7);
        $usuario = new ControllerUsuario();
        $usuarios = $usuario->listar($usuario);

        foreach($usuarios as $value) {
            $this->Cell(20,7, $value['id_usuario'],1,0,'L');
            $this->Cell(50,7,$value['nome_usuario'],1,0,'L');
            $this->Cell(45,7,$value['email'],1,0,'L');
            $this->Cell(35,7,$value['nome_acesso'],1,0,'L');
            $this->Cell(30,7,$value['status'],1,0,'L');

            $this->Ln();
        }
        
    }
}

$pdf = new ReportUsuario();
$pdf->AliasNbPages();
$pdf->AddPage('P','A4',0);
$pdf->headerTable();
$pdf->viewTable();
$pdf->Output();