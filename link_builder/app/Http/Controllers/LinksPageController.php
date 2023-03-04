<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\links_page;

class LinksPageController extends Controller
{


    function getById($id)
    {
        $data = links_page::where('id', $id)->first();

        if ($data) {
            return response()->json(
                [
                    "message" => "GET method success",
                    "data" => $data
                ]
            );
        }

        return response()->json(
            [
                "message" => "GET method FAILED, id=" . $id . " not found"
            ]
        );
    }
}
