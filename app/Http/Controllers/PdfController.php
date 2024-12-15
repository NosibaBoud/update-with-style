<?php

namespace App\Http\Controllers;
use App\Models\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function uploadForm()
    {
        return view('upload-pdf');
    }
    public function search(Request $request)
    {   // Search for the PDF by receipt number
        $pdf = Pdf::where('receipt_number', $request->receipt_number)->first();

        // Return the search view with the result
        if ($pdf) {
            return view('list-pdfs', compact('pdf'));
        } else {
            return view('list-pdfs', ['noResult' => true]);
        }
    }
    
    public function upload(Request $request)
    {
        $request->validate([
            'receipt_number' => 'required|string|max:255',
            'file_path' => 'required|mimes:pdf|max:2048', // Restrict to PDF files
        ]);
    // Check if the file exists in the request
    if ($request->hasFile('file_path')) {
        // Get the uploaded file
        $file = $request->file('file_path');

        // Store the file in the 'public/pdfs' directory
        $filePath = $file->storeAs('pdfs', uniqid() . '.' . $file->getClientOriginalExtension(), 'public');

        // Save the file information in the database
        Pdf::create([
            'receipt_number' => $request->receipt_number,
            'file_path' => $filePath,
        ]);

        return redirect()->back()->with('success', 'PDF uploaded successfully!');
    } else {
        return redirect()->back()->withErrors(['file_path' => 'No file uploaded.']);
    }}
    
    public function listPdfs()
    {
        $pdfs = Pdf::all();
        return view('list-pdfs', compact('pdfs'));
    }

    public function viewPdf($id)
    {
        $pdf = Pdf::findOrFail($id);
        return response()->file(storage_path('app/public/' . $pdf->file_path));
    }
}
