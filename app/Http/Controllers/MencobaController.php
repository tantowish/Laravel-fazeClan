<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MencobaController extends Controller{
    public function index(){
        //
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show(string $id){
        //
    }

    public function edit(string $id){
        //
    }

    public function update(Request $request, string $id){
        //
    }

    public function destroy(string $id){
        //
    }

    public function boomesport(){
        return view('boom');
    }

    public function fazeClan(){
        return view('fazeClan');
    }
}
