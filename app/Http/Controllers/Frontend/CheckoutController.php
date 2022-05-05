<?php

namespace App\Http\Controllers\Frontend;
session_start();
use App\Models\Cart;
use App\Models\Order;
use App\Mail\TestMail;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index()
    {
      $featured_categories = Category::where('status', '1')->get();

      $cartitems = Cart::where('user_id', Auth::id())->get();
      return view('frontend.checkout', compact('featured_categories', 'cartitems'));
    }

    public function placeOrder(Request $request)
    {
      $order = new Order();
      $order->user_id = Auth::id();
      $order->firstname = $request->input('firstname');
      $order->lastname = $request->input('lastname');
      $order->email = $request->input('email');
      $order->phone = $request->input('phone');
      $order->address1 = $request->input('address1');
      $order->address2 = $request->input('address2');
      $order->city = $request->input('city');
      $order->state = $request->input('state');
      $order->country = $request->input('country');
      $order->pincode = $request->input('pincode');

      $order->payment_mode = $request->input('payment_mode');
      $order->payment_id = $request->input('payment_id');
      //To calculate the total price
      // $total = 0;
      // $cartitems_total = Cart::where('user_id', Auth::id())->get();
      // foreach ($cartitems_total as $product)
      // {
      //   $total += $product->products->selling_price;
      // }
      $order->total_price = $request->input('total_price');
      $order->tracking_no = 'ecommerce'.rand(1111,9999);
      $order->save();

      $cartitems = Cart::where('user_id', Auth::id())->get();
      foreach ($cartitems as $item) {
        OrderItem::create([
          'order_id' => $order->id,
          'product_id' => $item->product_id,
          'quantity' => $item->product_qty,
          'price' => $item->products->selling_price,
        ]);

        $product = Product::where('id', $item->product_id)->first();
        $product->qty = $product->qty - $item->product_qty;
        $product->update();
      }

      // if(Auth::user()->address1 == NULL)
      // {
        // $user = User::where('id', Auth::id())->first();

        // $user->name = $request->input('firstname');
        // $user->lastname = $request->input('lastname');
        // $user->phone = $request->input('phone');
        // $user->address1 = $request->input('address1');
        // $user->address2 = $request->input('address2');
        // $user->city = $request->input('city');
        // $user->state = $request->input('state');
        // $user->country = $request->input('country');
        // $user->pincode = $request->input('pincode');
        // $user->update();

        $cartitems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);

        if($request->input('payment_mode') == 'Paud by PayPal')
        {
          return response()->json(['status' => 'Order placed Successfully']);
        }

        return redirect('/my-orders')->with('status', 'Order placed Successfully');
      //}
    }

    public function razorpaycheck(Request $request)
    {
      $cartitems = Cart::where('user_id', Auth::id())->get();
      $total_price = 0;
      foreach ($cartitems as $item){
        $total_price += $item->products->selling_price * $item->product_qty;
      }

      $firstname = $request->input('firstname');
      $lastname = $request->input('lastname');
      $email = $request->input('email');
      $phone = $request->input('phone');
      $address1 = $request->input('address1');
      $address2 = $request->input('address2');
      $city = $request->input('city');
      $state = $request->input('state');
      $country = $request->input('country');
      $pincode = $request->input('pincode');

      return response()->json([
          'firstname' => $firstname,
          'lastname' => $lastname,
          'email' => $email,
          'phone' => $phone,
          'address1' => $address1,
          'address2' => $address2,
          'city' => $city,
          'state' => $state,
          'country' => $country,
          'pincode' => $pincode,

          'total_price' => $total_price
      ]);
    }

    public function vnpay_payment(Request $request)
    {
        $total = session()->get('info_custormer')['total_price'];

        // -------------------------
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost:8000/vnpay/return";
        $vnp_TmnCode = "LVA0LCIY";//Mã website tại VNPAY
        $vnp_HashSecret = "XUIISJVBJFJBWMUXYCBQTCVADEKKLRRC"; //Chuỗi bí mật

        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán hóa đơn phí dich vụ';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $total * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = $request->bank_code;
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version


        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            // "vnp_User_id" => $user_id,
            // "vnp_Firstname" => $firstname,
            // "vnp_Lastname" => $lastname,
            // "vnp_Email" => $email,
            // "vnp_Phone" => $phone,
            // "vnp_Address1" => $address1,
            // "vnp_Address2" => $address2,
            // "vnp_City" => $city,
            // "vnp_State" => $state,
            // "vnp_Country" => $country,
            // "vnp_Pincode" => $pincode,
            // "vnp_Payment_mode" => "VnPay",
            // "vnp_Payment_id" => date("YmdHis"),
            // "vnp_Total_price" => $total_price,
            // "vnp_Tracking_no" => $tracking_no,
        );
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
            if (isset($_POST['redirect'])) {
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
    }

    public function save_order($order_id)
    {
      //dd($order_id);
      $vnpayData = Payment::where('p_order_id', $order_id)->first();
      // dd($vnpayData);

      return view('frontend/vnpay/vnpay_return', compact('vnpayData'));
    }

    //lưu database
    public function vnpay_return(Request $request)
    {
      $vnpayData = $request->all();

      $data = session()->get('info_custormer');

      $order = new Order();
      $order->user_id = $data['user_id'];
      $order->firstname = $data['firstname'];
      $order->lastname = $data['lastname'];
      $order->email = $data['email'];
      $order->phone = $data['phone'];
      $order->address1 = $data['address1'];
      $order->address2 = $data['address2'];
      $order->city = $data['city'];
      $order->state = $data['state'];
      $order->country = $data['country'];
      $order->pincode = $data['pincode'];

      $order->payment_mode = $data['payment_mode'];
      $order->payment_id = $data['payment_id'];
      //To calculate the total price
      $order->total_price = $data['total_price'];
      $order->tracking_no = $data['tracking_no'];
      $order->save();

      $cartitems = Cart::where('user_id', Auth::id())->get();
      foreach ($cartitems as $item) {
        OrderItem::create([
          'order_id' => $order->id,
          'product_id' => $item->product_id,
          'quantity' => $item->product_qty,
          'price' => $item->products->selling_price,
        ]);

        $product = Product::where('id', $item->product_id)->first();
        $product->qty = $product->qty - $item->product_qty;
        $product->update();
      }

        $cartitems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);

      $payment = new Payment();
      $payment->p_order_id = $order->id;
      $payment->p_user_id = Auth::id();
      $payment->p_money = $vnpayData['vnp_Amount'];
      $payment->p_note = $vnpayData['vnp_OrderInfo'];
      $payment->p_vnp_response_code = $vnpayData['vnp_ResponseCode'];
      $payment->p_code_vnpay = $vnpayData['vnp_TransactionNo'];
      $payment->p_code_bank = $vnpayData['vnp_BankCode'];
      $payment->p_time = $vnpayData['vnp_PayDate'];
      $payment->save();

      //khi thanh toan thanh cong thi tien hanh gui mail
      $details = [
        'name' => 'E-Shop',
        'email' => env('MAIL_USERNAME', 'aceluuhang@gmail.com'),
        'message' => 'Cám ơn bạn đã mua hàng của cửa hàng chúng tôi.'
      ];
      Mail::to($data['email'])->send(new TestMail($details));

      return redirect('vnpay/save_order/' . $order->id);
      //}
    }

    public function create_payment(Request $request)
    {
        $data['user_id'] = Auth::id();
        $data['firstname'] = $request->input('firstname');
        $data['lastname'] = $request->input('lastname');
        $data['email'] = $request->input('email');
        $data['phone'] = $request->input('phone');
        $data['address1'] = $request->input('address1');
        $data['address2'] = $request->input('address2');
        $data['city'] = $request->input('city');
        $data['state'] = $request->input('state');
        $data['country'] = $request->input('country');
        $data['pincode'] = $request->input('pincode');

        $data['payment_mode'] = 'VnPay';
        $data['payment_id'] = date("YmdHis");
        //To calculate the total price
        $data['total_price'] = $request->input('total_price');
        $data['tracking_no'] = 'ecommerce'.rand(1111,9999);

        session()->put(['info_custormer' => $data]);

        return view('frontend/vnpay/index', compact('data'));
    }
}