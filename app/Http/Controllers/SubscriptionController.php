<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
            //здесь я бессилен
            $subscription = new Subscription();
            $subscription->user_id = auth()->user()->id;
            $subscription->subscribed_to_id = $id;
            $subscription->save();
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
