<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\Note;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Display all orders
        $orders = Order::orderBy('created_at', 'desc')->with('note')->paginate(6);
        $orders2 = Order::orderBy('created_at', 'desc')->with('note')->paginate(15);
        return view('orders.all', compact('orders', 'orders2'));
    }

    public function today()
    {
        // Display today orders
        $orders = Order::whereDate('pickup_date', today())->orderBy('pickup_date', 'asc')->paginate(6);
        return view('orders.today', compact('orders'));
    }

    public function upcoming()
    {
        // Display upcoming orders
        $orders = Order::where('pickup_date', '>=', today())->orderBy('pickup_date', 'asc')->paginate(6);
        return view('orders.upcoming', compact('orders'));
    }

    public function search(Request $request)
    {
        if ($request->search !== null)
        {
            $orders = Order::where('name', 'LIKE', "%{$request->search}%")
            ->orWhere('phone', 'LIKE', "%{$request->search}%")
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        }
        if ($request->date !== null)
        {
            $orders = Order::whereDate('pickup_date', 'LIKE', "%{$request->date}%")
                ->orderBy('pickup_date', 'desc')
                ->paginate(6);


        }

        return view('orders.search', compact('orders', 'request'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $order = Order::create($request->validated());
        return redirect()->route('orders.all')->with('success', '📝 Order created successfully');
    }


    public function storePayment(Request $request)
    {
        if($request->order_advance !== $request->advance_payment_amount)
        {
            $data = [
                'advance_payment_amount' => $request->advance_payment_amount,
            ];
            $order_notes = [
                'order_id' => $request->order_id,
                'content' => "[💰] I changed the advance received from $request->order_advance to [ $request->advance_payment_amount ] lei!"
            ];
            $order = Order::where('id', $request->order_id)->update($data);
            $notes = Note::where('order_id', $request->order_id)->create($order_notes);
        }

        if ($request->order_rest !== $request->rest_payment_amount) {
            $data = [
                'rest_payment_amount' => $request->rest_payment_amount,
            ];
            $order_notes = [
                'order_id' => $request->order_id,
                'content' => "[💰] I received [ $request->rest_payment_amount ] lei upon order delivery!"
            ];
            $order = Order::where('id', $request->order_id)->update($data);
            $notes = Note::where('order_id', $request->order_id)->create($order_notes);
        }

        if (!empty(Order::where('id', $request->order_id)->firstOrFail()))
        {
            return redirect()->back()->with('success', '💰 Payment added successfully');

        } else {
            return redirect()->back()->with('error', '🚨 Order not found');
        }

    }
    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $order = Order::where('id', $order)->firstOrFail();
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
