<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        $menus = Menu::get();
        return view('Admin.menus.index')->with(compact('menus'));
    }

    public function addMenu(Request $request){
        if($request->isMethod('post')){
            
            $data = $request->all();
            $menu = new Menu;

            if(empty($data['city_title'])){
                $data['city_title'] = "";
            }

            if($request->hasFile('city_img')){
                $image_tmp = $request->file('city_img');
                if($image_tmp->isValid()){
                    // Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'Admin/img/city_images/'.$imageName;
                    // Upload the Image
                    Image::make($image_tmp)->save($imagePath);
    
                    $menu->city_img = $imageName;
                }
            }

            if($request->hasFile('city_img1')){
                $image_tmp = $request->file('city_img1');
                if($image_tmp->isValid()){
                    // Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'Admin/img/city_images/'.$imageName;
                    // Upload the Image
                    Image::make($image_tmp)->save($imagePath);
    
                    $menu->city_img1 = $imageName;
                }
            }

            if($request->hasFile('city_img2')){
                $image_tmp = $request->file('city_img2');
                if($image_tmp->isValid()){
                    // Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'Admin/img/city_images/'.$imageName;
                    // Upload the Image
                    Image::make($image_tmp)->save($imagePath);
    
                    $menu->city_img2 = $imageName;
                }
            }

            if($request->hasFile('city_img3')){
                $image_tmp = $request->file('city_img3');
                if($image_tmp->isValid()){
                    // Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'Admin/img/city_images/'.$imageName;
                    // Upload the Image
                    Image::make($image_tmp)->save($imagePath);
    
                    $menu->city_img3 = $imageName;
                }
            }

            $menu->city_name=$data['city_name'];
            $menu->city_tag=$data['city_tag'];
            $menu->city_title=$data['city_title'];
            $menu->city_text=$data['city_text'];
            $menu->save();

            session::flash('success_message', 'Menu added successfully');
            return redirect('/menus');
        }
        return view('Admin.menus.create');
    }

    public function edit($id){
        $menu = Menu::find($id);
        $menuData = Menu::where('id', $id)->first();
        return view('Admin.menus.edit')->with('menuData',$menuData);
    }
  
    public function update(Request $request,$id){
        $data = $request->except('_method','_token','submit');

        if(empty($data['city_img'])){
            $data['city_img'] = "";
        }

        if($request->hasFile('city_img')){
            $image_tmp = $request->file('city_img');
            if($image_tmp->isValid()){
                $destination = 'Admin/img/city_images/'.$image_tmp;
                // Upload the Image
                if(file_exists($destination)){
                    unlink($destination);
                }
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $imageName = rand(111,99999).'.'.$extension;
                $imagePath = 'Admin/img/city_images/'.$imageName;
                Image::make($image_tmp)->save($imagePath);
            }
        }

        if($request->hasFile('city_img1')){
            $image_tmp = $request->file('city_img1');
            if($image_tmp->isValid()){
                $destination = 'Admin/img/city_images/'.$image_tmp;
                // Upload the Image
                if(file_exists($destination)){
                    unlink($destination);
                }
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $imageName1 = rand(111,99999).'.'.$extension;
                $imagePath = 'Admin/img/city_images/'.$imageName1;
                Image::make($image_tmp)->save($imagePath);
            }
        }

        if($request->hasFile('city_img2')){
            $image_tmp = $request->file('city_img2');
            if($image_tmp->isValid()){
                $destination = 'Admin/img/city_images/'.$image_tmp;
                // Upload the Image
                if(file_exists($destination)){
                    unlink($destination);
                }
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $imageName2 = rand(111,99999).'.'.$extension;
                $imagePath = 'Admin/img/city_images/'.$imageName2;
                Image::make($image_tmp)->save($imagePath);
            }
        }

        if($request->hasFile('city_img3')){
            $image_tmp = $request->file('city_img3');
            if($image_tmp->isValid()){
                $destination = 'Admin/img/city_images/'.$image_tmp;
                // Upload the Image
                if(file_exists($destination)){
                    unlink($destination);
                }
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $imageName3 = rand(111,99999).'.'.$extension;
                $imagePath = 'Admin/img/city_images/'.$imageName3;
                Image::make($image_tmp)->save($imagePath);
            }
        }

        
        $menu = Menu::findOrFail($id);
        $menu->city_name=$data['city_name'];
        $menu->city_tag=$data['city_tag'];
        $menu->city_title=$data['city_title'];
        $menu->city_img = $imageName;
        $menu->city_img1 = $imageName1;
        $menu->city_img2 = $imageName2;
        $menu->city_img3 = $imageName3;
        $menu->city_text=$data['city_text'];
        $menu->save();

        session::flash('success_message', 'Menu edited successfully');
        return redirect('/menus');
    }

    public function deleteMenu($id) {
        
        Menu::where('id', $id)->delete();
        session::flash('success_message', 'Menu has been deleted successfully');
        return redirect()->back();
    }
}
