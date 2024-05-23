<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $menu = Menu::query();

        if (!empty($keyword)) {
            $menu->where('title', 'like', "%$keyword%");
        }
        $menuData = $menu->paginate(5);

        return view('menu.index',compact('menuData'));
    }

    public function create(){
        return view('menu.create');
    }

    public function store(MenuRequest $request){
//        dd($request);
        $menu=Menu::create($request->all());
        $image = $request->file('image')->store('public/menu');

        $menu->image = str_replace('public/', '', $image);
        $menu->save();
        return redirect()->route('menu.index')->with('success', 'Menu  created successfully.');
    }

    public function edit(Menu $menu){

        return view('menu.edit',compact('menu'));
    }

    public function update(Menu $menu , MenuRequest $request){
        $menuData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/menu');
            $menuData['image'] = str_replace('public/', '', $imagePath);
        }

        $menu->update($menuData);

        return redirect()->route('menu.index')->with('success', 'menu item successfully updated');
    }


    public function delete(Menu $menu){
        $menu->delete();
        return redirect()->route('menu.index')->with('error','Successfully  menu items deleted');

    }
    public function duplicate(Menu $menu){
        $productDuplicate=$menu->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }

}
