package com.example.imagegame

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.LayoutInflater
import com.example.imagegame.databinding.ActivityMainBinding
import com.google.android.material.snackbar.Snackbar

class MainActivity : AppCompatActivity() {
    private lateinit var binding: ActivityMainBinding
    private var working:Boolean = false
    private var comparing = 3
    private val fruits = mutableListOf(R.drawable.ic_apple_svgrepo_com, R.drawable.ic_grapes_svgrepo_com, R.drawable.ic_orange_svgrepo_com)
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityMainBinding.inflate(layoutInflater)
        val view = binding.root
        setContentView(view)

        binding.switch1.setOnCheckedChangeListener { _, isChecked ->
            if(isChecked){
                working = true
            }else{
                working = false
            }
        }

        binding.btnGrape.setOnClickListener {
            if(working){
                binding.image2.setImageResource(R.drawable.ic_grapes_svgrepo_com)
                comparing = 1
            }else{
                Snackbar.make(it, "Game has not been started.", Snackbar.LENGTH_LONG).show()
            }
        }
        binding.btnApple.setOnClickListener {
            if(working){
                binding.image2.setImageResource(R.drawable.ic_apple_svgrepo_com)
                comparing = 0
            }else{
                Snackbar.make(it, "Game has not been started.", Snackbar.LENGTH_LONG).show()
            }
        }

        binding.btnRando.setOnClickListener {
            if(working){
                val r = (fruits).shuffled().first()
                binding.image3.setImageResource(r)
                if (fruits.indexOf(r)==comparing){
                    Snackbar.make(it, "You got the same answer!!", Snackbar.LENGTH_LONG).show()
                }else{
                    Snackbar.make(it, "Aw the image was not the same :(", Snackbar.LENGTH_LONG).show()
                }
            }else{
                Snackbar.make(it, "Game has not been started.", Snackbar.LENGTH_LONG).show()
            }
        }

    }
}