<?php

namespace App\Http\Livewire\Admin;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel as Excelito;
use Livewire\Component;

class Excel extends Component
{
    public function exportar(){
        return Excelito::download(new UsersExport, 'users.xlsx');
    }
    public function render()
    {
        return view('livewire.admin.excel');
    }
}
