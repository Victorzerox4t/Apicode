<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use App\Service\Api;


class PostController extends Controller
{

        private $api;


        public function __construct()
        {
            $this->api = new Api();
        }
    public function index()
    {

        $response_json = $this->api->requestApi("GET", "posts");
        $response_json = $response_json['data'];

        return view('list',compact('response_json'));
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request){

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,

        ];

        $this->api->requestApi('POST', "posts", $data);

        return redirect(route('post.index'));
    }


    public function ubah($id)
    {

        $post = $this->api->requestApi('GET', "posts/$id");
        $post = $post['data'];

        return view('ubah', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
        ];

        $this->api->requestApi('PUT', "posts/$id", $data);

        return redirect(route('post.index'));
    }

    public function delete($id)
    {


        $response = $this->api->requestApi("DELETE", "posts/$id");


        return redirect(route('post.index'));
    }
}
