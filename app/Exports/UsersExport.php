<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    use Exportable;
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exports.users', [
            'users' => User::all()
        ]);
    }
}