<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Only Admin Can Store, Update, and Delete
    public function adminMiddleware()
    {
        $this->middleware('admin')->only(['store', 'update', 'destroy']);
    }

    //Upload File
    public function uploadSingleFile($storagePath, $key)
    {
        if (request()->hasFile($key)) {
            $filename = preg_replace('/\s+/', '_', time() . '_' . request()->$key->getClientOriginalName());
            request()->$key->move('uploads/' . $storagePath, $filename);
            return $filename;
        }
    }

    //Delete File
    public function deleteFile($filePath, $fileName)
    {
        $oldImage = 'uploads/' . $filePath . $fileName;
        if (file_exists($oldImage)) unlink($oldImage);
        //return 0;
    }

    //Activate Item (Layout)

    public function activeItem($successMsg, $errorMsg, $table)
    {
        if (Auth::user()->isAdmin()) {
            if (request()->status == NULL) {
                DB::table($table)->where('is_active', 1)->update(['is_active' => NULL]);
                DB::table($table)->where('id', request()->id)->update(['is_active' => 1]);
                request()->session()->flash('success', $successMsg);
            } else {
                request()->session()->flash('error', $errorMsg);
            }
        } else {
            request()->session()->flash('error', 'You are not authorized to do that');
        }
    }

    // Delete Active Item Message

    public function deleteActiveItem($item, $path = Null, $file = Null, $cv_path = Null, $cv = Null)
    {
        if ($item->is_active) {
            session()->flash('error', 'You can not delete an active item');
        } else {
            if ($file != Null) $this->deleteFile($path, $item->$file);
            if ($cv != Null) $this->deleteFile($cv_path, $item->$cv);
            $item->delete();
            session()->flash('success', 'Data deleted successfully');
        }
    }

    // LayoutController Order
    public function orderDescending($table)
    {
        return DB::table($table)->orderBy('id', 'Desc')->paginate(2);
    }

    // update User
    public function updateUser($request, $user, $route)
    {
        $input = $request->all();
        $image = $this->uploadSingleFile('image/user', 'image');
        if ($image) {
            $this->deleteFile('image/header/', $user->image);
            $input['image'] = $image;
        }
        // if user password is empty use the old one
        if (empty($input['password'])) unset($input['password']);

        $user->update($input);
        return redirect()->route($route)->with('success', 'Data updated successfully');

    }
}
