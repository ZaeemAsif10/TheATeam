<?php

namespace App\Http\Controllers;

use App\Models\Book_now;
use App\Models\Booking_detail;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Subscribe;
use App\Models\Invest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function ContactUs(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::send('web-side.Mail.email', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['name']);
        });

        Contact::create($data);
        return back();
    }

    public function Subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $data = [
            'email' => $request->email,
        ];

        Mail::send('web-side.Mail.subscribe', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject('Subscriber');
        });

        Subscribe::create($data);
        return back();
    }

    public function Invests(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'interest' => 'required',
        ]);


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'interest' => $request->interest,
        ];

        Mail::send('web-side.Mail.interest', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['name']);
        });

        Invest::create($data);
        return back();
    }

    public function BookNow(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'interest' => 'required',
        ]);


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'interest' => $request->interest,
        ];

        Mail::send('web-side.Mail.book_now', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['name']);
        });

        Book_now::create($data);
        return back();
    }

    public function BookingDetail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Mail::send('web-side.Mail.booking_detail', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['name']);
        });

        Booking_detail::create($data);
        return back();
    }
}
