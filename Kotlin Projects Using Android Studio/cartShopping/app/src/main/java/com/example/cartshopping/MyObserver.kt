package com.example.cartshopping

import android.util.Log
import androidx.lifecycle.Lifecycle
import androidx.lifecycle.LifecycleObserver
import androidx.lifecycle.OnLifecycleEvent

class MyObserver: LifecycleObserver {
    @OnLifecycleEvent(Lifecycle.Event.ON_CREATE)
    fun onCreate(){
        Log.i(LOG_TAG, "MainActivity is CREATED")
    }

    @OnLifecycleEvent(Lifecycle.Event.ON_START)
    fun show(){
        Log.i(LOG_TAG, "Screen is VISIBLE")
    }

    @OnLifecycleEvent(Lifecycle.Event.ON_STOP)
    fun hide(){
        Log.i(LOG_TAG, "Screen is HIDDEN")
    }

    @OnLifecycleEvent(Lifecycle.Event.ON_DESTROY)
    fun onClose(){
        Log.i(LOG_TAG, "MainActivity is DESTROYED")
    }
}