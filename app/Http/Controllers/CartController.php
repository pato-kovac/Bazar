<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $images = json_decode($product->product_images) ?? [];
            $mainImage = $images[0] ?? null;

            $cart[$product->id] = [
                'id' => $product->id,
                'name' => $product->product_name,
                'price' => $product->product_price,
                'image' => $mainImage,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Produkt bol pridaný do košíka.');
    }

    public function index()
    {
        $cart = session('cart', []);
        $totalQuantity = collect($cart)->sum('quantity');
        $totalPrice = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);

        return view('cart', compact('cart', 'totalQuantity', 'totalPrice'));
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);
    
        if (!isset($cart[$id])) {
            return back()->with('error', 'Produkt sa nenašiel v košíku.');
        }
    
        $action = $request->input('action');
    
        if ($action === 'increase') {
            $cart[$id]['quantity']++;
        } elseif ($action === 'decrease' && $cart[$id]['quantity'] > 1) {
            $cart[$id]['quantity']--;
        } elseif ($request->has('quantity')) {
            $quantity = (int) $request->input('quantity');
            $cart[$id]['quantity'] = max(1, $quantity); // nikdy menej ako 1
        }
    
        session()->put('cart', $cart);
    
        return back()->with('success', 'Množstvo bolo aktualizované.');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Produkt bol odstránený z košíka.');
    }
}
