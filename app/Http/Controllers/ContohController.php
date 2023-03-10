<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    function home(){
        echo "
        <h1>This is home page</h1>
        ";
    }

    function product(){
        echo "
        <ul>
            <li><a href='https://www.educastudio.com/category/marbel-edu-games'>Produk 1</a></li>
            <li><a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'>Produk 2</a></li>
            <li><a href='https://www.educastudio.com/category/riri-story-books'>Produk 3</a></li>
            <li><a href='https://www.educastudio.com/category/kolak-kids-songs'>Produk 4</a></li>
        </ul>
        ";
    }

    function news($page){
        return "This is news page number ". $page;
    }

    function program(){
        echo "
        <ul>
            <li><a href='https://www.educastudio.com/program/karir'>Program 1</a></li>
            <li><a href='https://www.educastudio.com/program/magang'>Program 2</a></li>
            <li><a href='https://www.educastudio.com/program/kunjungan-industri'>Program 3</a></li>
        </ul>
        ";
    }

    function about(){
        return "This is about page";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "This is contact page<br>";
        echo "
        <a href='https://www.educastudio.com/program/kunjungan-industri'>Contact Us</a>
        ";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
