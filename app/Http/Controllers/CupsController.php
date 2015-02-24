<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CupsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$controlNumbers = array(
			0 => 'T',
			1 => 'R',
			2 => 'W',
			3 => 'A',
			4 => 'G',
			5 => 'M',
			6 => 'Y',
			7 => 'F',
			8 => 'P',
			9 => 'D',
			10 => 'X',
			11 => 'B',
			12 => 'N',
			13 => 'J',
			14 => 'Z',
			15 => 'S',
			16 => 'Q',
			17 => 'V',
			18 => 'H',
			19 => 'L',
			20 => 'C',
			21 => 'K',
			22 => 'E',
		);

		$pais = 'ES';
		$reeId = mt_rand(0, 9999);//4 numeros dados por la Red electrica de España
		$distId = mt_rand(0, 999999999999);//12 numeros Id del distribuidor

		for ($reeLength = strlen($reeId); $reeLength < 4; $reeLength++) {
			$reeId = '0' . $reeId;
		}

		for ($distLength = strlen($distId); $distLength < 12; $distLength++) {
			$distId = '0' . $distId;
		}

		$control = ($reeId . $distId) % 529;
		$c = $control / 23;
		$r = $control % 23;

		$cups = $pais . $reeId . $distId . (int)$c . $r;

		return view('cups/index', compact('cups'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
