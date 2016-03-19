<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Celebrity;


class PlaygroundController extends Controller
{
    public function index(Request $request, $format = null) {
        $this->validate($request, [
            'sort' => 'in:comprehensive,fans,view']);
        $sort = $request->input('sort', 'comprehensive');
        if ($sort === 'comprehensive') {
            $orderBy = 'sort_manually';
        }
        else if ($sort == 'fans')
            $orderBy = 'total_fans_num';

        $celebrities = Celebrity::with('pictures')->orderBy($orderBy, 'DESC')->paginate(10);
        foreach ($celebrities as &$celebrity) {
            if ($celebrity->profile_img) {
                $celebrity->profile_img = dirname($celebrity->profile_img) . "/comp-" . basename($celebrity->profile_img);
            }
            foreach ($celebrity->pictures as &$picture) {
                $picture->url = dirname($picture->url) . "/comp-" . basename($picture->url);
            }
        }
        if ($format === '.json')
            return $celebrities;
        return view('playground.index', ['celebrities' => $celebrities, 'sort' => $sort]);
    }
}
