<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Imports\UsersImports;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImportController extends Controller
{
    //
    public function fileImport(Request $request) 
    {
        $validatedData = $request->validate([
            'file' => 'mimes:doc,csv,xlsx,xls,docx',
        ]);

        Excel::import(new UsersImports, $request->file('file'));
        return redirect()->back()
        ->with('message', 'Import Users Sucessful!');
    }
}
