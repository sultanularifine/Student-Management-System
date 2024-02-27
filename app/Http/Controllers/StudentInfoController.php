<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;


class StudentInfoController extends Controller
{
    public function viewDest(Request $request, $id)
    {
        $search = $request->input('search', '');
    
        if ($search != "") {
            $destinations = Student::where('category', 'LIKE', "$search%")->get();
        } else {
            $destinations = Student::where('id', $id)->get();
        }
    
        return view('destination.viewDest', compact('destinations'));
    }

    public function create()
    {
        return view('studentinfo.add');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        // Get the uploaded file
        $imageFile = $request->file('image');

        // Generate a unique name for the file
        $imageName = time() . '_' . $imageFile->getClientOriginalName();

        // Move the uploaded file to the public/images directory
        $imageFile->move(public_path('images'), $imageName);

        $student = new Student();
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->image = 'images/' . $imageName;

        if ($student->save()) {
            return redirect()->route('studentinfo.index');
        }
    }
    public function edit($id)
    {

        if ($student = Student::find($id)) {

            return view('studentinfo.edit', ['student' => $student]);
        }
    }
    public function update(Request $request, $id)
    {

        $student = Student::find($id);
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->age = $request->age;
        $student->gender = $request->gender;
        if ($student->save()) {
            return redirect()->route('studentinfo.index');
        }
    }
    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student->delete()) {
            return redirect()->route('studentinfo.index');
        }
    }

    public function view($id)
    {

        if ($student = Student::find($id)) {

            return view('studentinfo.view', ['student' => $student]);
        }
    }

    public function Form()
    {

        return view('studentinfo.login');
    }

    public function register()
    {

        return view('studentinfo.register');
    }

    public function registerStore(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $student = new User();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;

        if ($student->save()) {
            return redirect()->route('studentinfo.form');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('studentinfo.index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function createPDF() {
        // retreive all records from db
        $student = Student::all();
        // share data to view
        view()->share('student',$student);
        $pdf = Pdf::loadView('studentinfo.pdfview', ['student' => $student]);
        return $pdf->download('invoice.pdf');
        
      }
}
