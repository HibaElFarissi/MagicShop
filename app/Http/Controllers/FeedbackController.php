<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $feedbacks = Feedback::paginate(3);
        return view('feedback.index', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $feedback = new Feedback();
        $isUpdate = false;
        return view('feedback.form', compact('feedback', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $file=$request->file('image');
        // $photo=$request->filE('image')->getClientOriginalName();
        // $file->storeAs('public',$photo);


        // // Validation
        // $feedback = Feedback::create([
        //     'name' => $request-> name,
        //     'job' => $request-> job,
        //     'feedback' => $request-> feedback,
        //     'image' => $photo,

        // ]);
        $file=$request->photo ;
        $path= $file->store("image");
        $data=$request->all();
        $data['image']=$path;
        Feedback::create($data);


        Alert::success('succes', 'the Feedback has been added successfully');
        return to_route('feedback.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Vu
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $feedback=Feedback::findOrFail($id);
        $isUpdate = true;
        return view('feedback.form', compact('feedback', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        // $feedback=Feedback::findOrFail($id);
        // $file=$request->file('image');
        // $photo=$request->filE('image')->getClientOriginalName();
        // $file->storeAs('public',$photo);
        // $feedback->update($request->all());
        $file=$request->photo;
        $path= $file->store("image");
        $data=$request->all();
        $data['image']=$path;
        $feedback->update($data);


        Alert::success('Successfully Updated!', "The feedback {$feedback->name} has been updated");
        return to_route('feedback.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $feedback=Feedback::findOrFail($id);
        $feedback->delete();
        Alert::success('Successfully Deleted!', "The feedback {$feedback->name} has been Deleted");
        return to_route('feedback.index');

    }
}
