<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Notification;


class SubscriptionController extends Controller
{
    /**
     * Подписка на пользователя
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function subscribe(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $subscription = Subscription::where('user_id', auth()->user()->id)
            ->where('subscribed_to_id', $id)->first();



        if ($subscription) {
            $subscription->delete();
            return redirect()->back()->with('success', 'Вы успешно отписались от пользователя!');
        } else {
            $subscription = new Subscription();
            $subscription->user_id = auth()->user()->id;
            $subscription->subscribed_to_id = $id;
            $subscription->save();

            //Отправка уведомления о подписке
            $subscribedUser = User::findOrFail($id);
            Mail::send('components.notification', [
                'recipient' => $subscribedUser,
                'subscriber' => auth()->user(),
            ], function ($message) use ($subscribedUser) {
                $message->to($subscribedUser->email);
                $message->subject('У вас новый подписчик');
            });

            return redirect()->back()->with('success', 'Вы успешно подписались на пользователя!')->with('subscribed', true);

        }

    }

    /**
     * Отписка от пользователя
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unsubscribe(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $subscription = auth()->user()->subscriptions()->where('subscribed_to_id', $id)->first();
        if ($subscription) {
            $subscription->delete();
        }

        return redirect()->back()->with('success', 'Вы успешно отписались от пользователя!')->with('subscribed', false);
    }

}
