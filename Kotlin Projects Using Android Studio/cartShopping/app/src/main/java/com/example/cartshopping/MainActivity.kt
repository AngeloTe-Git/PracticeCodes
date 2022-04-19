package com.example.cartshopping

import android.app.Activity
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import androidx.activity.viewModels
import androidx.lifecycle.Observer
import com.example.cartshopping.databinding.ActivityMainBinding
import com.example.cartshopping.viewModel.MainViewModel
import com.google.android.material.snackbar.Snackbar


class MainActivity : AppCompatActivity() {
    private lateinit var  binding:ActivityMainBinding
    private var numero = 0
    private var numerial = 0


    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityMainBinding.inflate(layoutInflater)
        setContentView(binding.root)

        lifecycle.addObserver(MyObserver())

        val viewModel by viewModels<MainViewModel>()
        val nameObserver = Observer<String> {
            binding.textView5Change.text = it
        }

        viewModel.message.observe(this, nameObserver)


        binding.buttonPlus.setOnClickListener { viewModel.loadMessage(1) }
        binding.buttonMinus.setOnClickListener { viewModel.loadMessage(2) }

        binding.buttonCheckout.setOnClickListener {
            val viewModel by viewModels<MainViewModel>()
            val nameObserver = Observer<Int> {
                numero = it
            }
            viewModel.load.observe(this, nameObserver)
            if (numero == 10){
                numerial=(numero * 120)
            }else{
                numerial = (numero * 120) + 40
            }


            Snackbar.make(binding.root, "Total cost for $numero apples is $numerial.", Snackbar.LENGTH_LONG).show()
        }
    }
}


