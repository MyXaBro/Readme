<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Реализует вывод контактов в сообщениях
     * @param Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function contacts(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $userId = $request->user()->id;

        // Получаем список контактов с количеством непрочитанных сообщений
        $contacts = User::select('users.*',
            DB::raw('(select count(*) from messages where users.id = messages.recipient_id and sender_id <> '.$userId.' and is_read = 0) as unread_count'))
            ->whereExists(function ($query) use ($userId) {
                $query->select(DB::raw(1))
                    ->from('messages')
                    ->whereRaw('users.id in (messages.sender_id, messages.recipient_id)')
                    ->where(function ($query) use ($userId) {
                        $query->where('sender_id', $userId)
                            ->orWhere('recipient_id', $userId);
                    });
            })
            ->where('users.id', '<>', $userId)
            ->groupBy('users.id')
            ->orderBy('created_at', 'desc')
            ->get();

        // Получаем список сообщений для первого контакта из списка
        $messages = [];
        if ($contacts->isNotEmpty()) {
            $contactId = $contacts->first()->id;
            $messages = Message::where(function ($query) use ($userId, $contactId) {
                $query->where('sender_id', $userId)
                    ->where('recipient_id', $contactId)
                    ->orWhere('sender_id', $contactId)
                    ->where('recipient_id', $userId);
            })
                ->orderBy('created_at')
                ->get();
        }

        return view('messages', [
            'contacts' => $contacts,
            'messages' => $messages,
        ]);
    }


    /**
     * Сохраняет сообщение в таблицу messages
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'content' => 'required|max:1000',
        ]);

        //я не знаю как использовать здесь реализацию сохранения в бд без использования модели напрямую, пощадите:(
        $message = new Message();
        $message->content = $request->input('content');
        $message->sender_id = Auth::id();
        $message->recipient_id = $request->input('recipient_id');
        $message->save();

        return redirect()->route('messages');
    }

}
