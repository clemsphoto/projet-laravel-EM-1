<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categorie;

class FrontController extends Controller

{   
    protected $paginate = 6;

    public function __construct(){

        // méthode pour injecter des données à une vue partielle 
        view()->composer('partials.menu', function($view){
            $categories = Categorie::pluck('title', 'id')->all(); // on récupère un tableau associatif ['id' => 1]
            $view->with('categories', $categories ); // on passe les données à la vue
        });
    }


    public function index(){



        //$books = Book::published()->paginate($this->paginate); // pagination 
        $nbproducts=Product::all()->count();

        $products = Product::orderBy('created_at', 'desc')->paginate($this->paginate); // on met la derniere photo en 1er
        // seul les livres publiés seront affichés
        return view('front.index', ['products'=>$products, 'nbproducts'=>$nbproducts]);

    }

    public function show(int $id){

        // vous ne récupérez qu'un seul livre 
        $product = Product::find($id);

        // que vous passez à la vue
        return view('front.show', ['product' => $product]);
    }

    public function productByCategorie(int $id){



        view()->composer('partials.menu', function($view) use ($id) {
        $view->with('categorie_id', $id);

    });
    $categorie = Categorie::find($id);
    $nbproducts = Product::where('categorie_id', $id)->count();
    $products = Product::where('categorie_id', $id)->paginate($this->paginate);
    return view('front.index', ['products'=>$products, 'nbproducts' => $nbproducts, 'categorie' => $categorie]);
    }

    public function productBySale(){

       
        $nbproducts=Product::where('code','solde')->count(); // retourne la vue soldes
        $products = Product::where('code', 'solde')->paginate($this->paginate);
        return view('front.index', ['products'=>$products, 'nbproducts'=>$nbproducts ]);// pour renvoyer les vue dans le menue
    
    }  


    

    
}
