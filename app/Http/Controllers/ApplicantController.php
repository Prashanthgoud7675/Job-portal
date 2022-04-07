<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Item;
use App\Models\Screening;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{

  public function itemView()
	{
		$panddingItem = Item::where('status', 0)
			->orderBy('Rating')
			->get();
		$completeItem = Item::where('status', 1)
			->orderBy('Rating')
			->get();
		$goodItem = Item::where('status', 2)
			->orderBy('Rating')
			->get();

    $candidate = Item::where('status', '3')
			->orderBy('Rating')
			->get();  
		return view('applicant', compact('panddingItem', 'completeItem', 'goodItem', 'candidate'));
	}
	public function updateItems(Request $request)
	{
		$input = $request->all();

		if (!empty($input['NewApplied'])) {
			foreach ($input['NewApplied'] as $key => $value) {
				$key = $key + 1;
				Item::where('id', $value)
					->update([
						'status' => 0,
						
					]);
			}
		}

		if (!empty($input['Screening'])) {
			foreach ($input['Screening'] as $key => $value) {
				$key = $key + 1;
				Item::where('id', $value)
					->update([
						'status' => 1,
						
					]);
			}
		}

		if (!empty($input['Interview'])) {
			foreach ($input['Interview'] as $key => $value) {
				$key = $key + 1;
				Item::where('id', $value)
					->update([
						'status' => 2,
						
					]);
			}
		}

    if (!empty($input['Hired'])) {
			foreach ($input['Hired'] as $key => $value) {
				$key = $key + 1;
				Item::where('id', $value)
					->update([
						'status' => 3,
						
					]);
			}
		}
		return response()->json(['status' => 'success']);
	}
       
    
}
