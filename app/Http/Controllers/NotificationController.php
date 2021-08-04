<?php

namespace App\Http\Controllers;

class NotificationController extends Controller
{


    public function notificationList()
    {

        $notifications = auth()->user()->notifications()->orderBy('created_at', 'desc')->get();

        return view('admin.notifications.index', compact('notifications'));
    }

    public function markAsReadAll()
    {

        $userUnreadNotify = auth()->user()->unreadNotifications;

        if ($userUnreadNotify) {

            $userUnreadNotify->markAsRead();

            return back();
        }

    }

}
