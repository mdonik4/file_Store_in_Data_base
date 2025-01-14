<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'mobile', 'image'];

    protected static $student, $imageName, $image, $imgDirectory, $imgUrl;

    public static function createStudent($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().self::$image->getClientOriginalName();
        self::$imgDirectory = 'assets/image/';
        self::$image->move(self::$imgDirectory, self::$imageName);
        self::$imgUrl = self::$imgDirectory.self::$imageName;

        self::$student          = new Student();
        self::$student->name    = $request->name;
        self::$student->email   = $request->email;
        self::$student->mobile  = $request->mobile;
        self::$student->image   = self::$imgUrl;
        self::$student->save();

    }
}
