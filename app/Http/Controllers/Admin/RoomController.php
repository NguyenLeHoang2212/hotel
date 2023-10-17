<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Room;
// use App\Models\Product;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $rooms = Room::withTrashed()->paginate(3);
        return view('admin.pages.room.list',['rooms' => $rooms ]);
    }

    public function store(StoreRoomRequest $request)
    {
        if($request->hasFile('image')){
            $fileOriginName = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileOriginName,PATHINFO_FILENAME); // lay ten truoc png/jpg/..
            $fileName.='_'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'),$fileName);
        }


        $check = DB::table('rooms')->insert([
            "name" => $request->name,
            "price" => $request->price,

            "image" => $fileName ?? null,
            "status" => $request->status,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()

        ]);
        $message = $check ? "create success  " : "failed" ;
            return redirect()->route('admin.room.index')->with('message',$message);
    }

    public function show(string $id)
    {
        $room = DB::table('rooms')->find($id);
        return view('admin.pages.room.detail',['room' => $room]);    }


    public function edit(string $id)
    {

    }


    public function update(UpdateRoomRequest $request, string $id)
    {
        $room = DB::table('rooms')->find($id);

        $oldImage = $room->image;

        if($request->hasFile('image')){
            $fileOriginName = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileOriginName,PATHINFO_FILENAME); // lay ten truoc png/jpg/..
            $fileName.='_'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'),$fileName);
            if(!is_null($oldImage) && file_exists('images/'.$oldImage)){
                unlink('images/'.$oldImage);
            }
        }
        $check = DB::table('rooms')->where('id','=',$id)->update([
            "name" => $request->name,
            "price" => $request->price,

            "image" => $fileName ?? $oldImage,
            "status" => $request->status,
            "updated_at" => Carbon::now()

        ]);
        $message = $check ? "update success  " : "failed" ;
            return redirect()->route('admin.room.index',['room' => $room])->with('message',$message);
    }



    public function destroy(string $id)
    {
        $room = DB::table('rooms')->find($id);
        $image = $room->image;
        if(!is_null($image) && file_exists('images/'.$image)){
            unlink('images/'.$image);
        }


        $productData = Room::find((int)$id);
        $productData->delete();

        //session flash
        return redirect()->route('admin.room.index')->with('message','delete success');
    }

    public function createSlug(RoomRequest $request){
        $name = $request->name ;
        // $Array = explode('',$name);
        // $name = implode('-',$Array);
        $slug = Str::slug($request->name, '-');

        return response()->json(['slug' => $slug]);
    }

    public function uploadImage(StoreRoomRequest $request){
        if($request->hasFile('upload')){
            $fileOriginName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($fileOriginName,PATHINFO_FILENAME); // lay ten truoc png/jpg/..
            $fileName.='_'.time().'.'.$request->file('upload')->getClientOriginalExtension();
            $request->file('upload')->move(public_path('images'),$fileName);
            $url = asset('images/'.$fileName);
            return response()->json(['fileName' => $fileName , 'url' => $url , 'uploaded' => 1]);
        }
    }

    public function restore(string $id){
        $room = Room::withTrashed()->find($id);
        $room ->restore();
        return redirect()->route('admin.room.index',['room' => $room])->with('message','restore success');

    }
}
