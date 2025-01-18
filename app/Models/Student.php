<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'mobile', 'image'];

    protected static $student, $imageName, $imageS, $imgDirectory, $imgUrl;

    public static function createStudent($request)
    {
        self::$imageS = $request->file('image');
        self::$imageName = time().self::$imageS->getClientOriginalName();
        self::$imgDirectory = 'assets/image/';
        self::$imageS->move(self::$imgDirectory, self::$imageName);
        self::$imgUrl = self::$imgDirectory.self::$imageName;

        self::$student          = new Student();
        self::$student->name    = $request->name;
        self::$student->email   = $request->email;
        self::$student->mobile  = $request->mobile;
        self::$student->image   = self::$imgUrl;
        self::$student->save();

    }

    public static function updateStudent($request, $id)
    {
        self::$student          =  Student::find($id);
        self::$imageS = $request->file('image');
        if(self::$imageS)
        {
            if(file_exists(self::$student->image))
            {
                unlink(self::$student->image);
            }
        self::$imageName = time().self::$imageS->getClientOriginalName();
        self::$imgDirectory = 'assets/image/';
        self::$imageS->move(self::$imgDirectory, self::$imageName);
        self::$imgUrl = self::$imgDirectory.self::$imageName;
        }
        else 
        {
            self::$imgUrl = self::$student->image;
        }

     
        self::$student->name    = $request->name;
        self::$student->email   = $request->email;
        self::$student->mobile  = $request->mobile;
        self::$student->image   = self::$imgUrl;
        self::$student->save();
    }
}
