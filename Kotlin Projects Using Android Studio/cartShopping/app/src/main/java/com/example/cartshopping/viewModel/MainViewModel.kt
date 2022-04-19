package com.example.cartshopping.viewModel

import android.util.Log
import androidx.lifecycle.LiveData
import androidx.lifecycle.MutableLiveData
import androidx.lifecycle.ViewModel
import com.example.cartshopping.LOG_TAG
import com.example.cartshopping.MainActivity
import com.example.cartshopping.databinding.ActivityMainBinding
import com.google.android.material.snackbar.Snackbar

class MainViewModel: ViewModel() {
    private lateinit var binding: ActivityMainBinding
    private val _message = MutableLiveData<String>()
    private val _data = MutableLiveData<Int>()
    private val _load = MutableLiveData<Int>()
    public val message: LiveData<String> = _message
    public val data: LiveData<Int> = _data
    public val load: LiveData<Int> = _load

    init{
        Log.i(LOG_TAG, "MainViewModel is CREATED")
        _message.value = "2"
        _data.value = 2
        _load.value = 2
    }

    fun loadMessage(loadType:Int){
        _data.value = when(loadType){
            1 -> 1
            2 -> -1
            else -> 0
        }
        if((_data.value!! + _load.value!!) > 0 && (_data.value!! + _load.value!!) < 11){
            _load.value = _data.value!! + _load.value!!
        }
        _message.value = _load.value.toString()

    }
}