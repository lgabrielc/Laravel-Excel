<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersExport implements FromQuery, ShouldAutoSize,WithHeadings
{
    use Exportable;

    public $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function query()
    {
        return User::query()->select(['id','name','email'])->where('id', '>', $this->id);
    }
    public function headings(): array
    {
        return [
            'ID',
            'User',
            'Email',
            // 'Celular',
        ];
    }
    /**
    //  * @return \Illuminate\Support\Collection
     */
    // public function view(): View
    // {
    //     return view('users.export',[
    //         'users' => User::where('id','>','5')->get()
    //     ]);
    // }
}
