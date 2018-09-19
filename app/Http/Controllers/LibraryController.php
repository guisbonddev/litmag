<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function editions() 
    {
    	// Gather eddition info
    	$editions = \App\Edition::
    		orderByRaw('created_at DESC')
    	->get();

    	return view('library.home', compact('editions'));
    }

    public function genres($edition_id) 
    {
    	// Gather edition info again, for title
    	$current_edition = \App\Edition::
    		where('id','=', $edition_id)
    	->first();

    	// Gather info for all genres in that specific edition
    	$genres = \App\Genre::
    		where('edition','=', $current_edition->edition)
    	->get();

    	return view('library.genres', compact('genres','current_edition'));
    }

    public function artwork($edition_id)
    {
        // Gather edition info again, for title
        $current_edition = \App\Edition::
            where('id','=', $edition_id)
        ->first();

        $artworks = \App\Artwork::
            where('edition','=', $current_edition->edition)
        ->inRandomOrder()->get();

        return view('library.artwork', compact('current_edition','artworks'));
    
    }

    public function pieces($edition_id, $genre_id)
    {
    	// Get edition info again, for title
    	$current_edition = \App\Edition::
    		where('id','=', $edition_id)
    	->first();

    	// Get genre info to base off for pieces
    	$current_genre = \App\Genre::
    		where('id','=', $genre_id)
    	->first();

    	// Get pieces info; dialed down to ones only for that specific genre
    	$pieces = \App\Piece::where(
    		'genre','=', $current_genre->name
    	)->where(
            'edition','=', $current_edition->edition
        )->inRandomOrder()->get();

    	return view('library.pieces', compact('current_edition','current_genre','pieces'));
    }

    public function piece($edition_id, $genre_id, $piece_id)
    {
    	// Get edition info again, for title
    	$current_edition = \App\Edition::
    		where('id','=', $edition_id)
    	->first();

    	// Get genre info to base off for title
    	$current_genre = \App\Genre::
    		where('id','=', $genre_id)
    	->first();

    	// Get pieces info; dialed down to ones only for that specific genre
    	$piece = \App\Piece::
    		where('genre','=', $current_genre->name)->
    		where('id', '=', $piece_id)
    	->first();

    	return view('library.piece', compact('current_edition','current_genre','piece'));
    }
}
