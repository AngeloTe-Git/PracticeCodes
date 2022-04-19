package com.example.slotmachine

import android.app.Activity
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.util.Log
import android.view.LayoutInflater
import android.widget.EditText
import com.example.slotmachine.databinding.ActivityMainBinding
import com.google.android.material.snackbar.Snackbar

class MainActivity : AppCompatActivity() {
    private lateinit var binding: ActivityMainBinding
    private lateinit var pointCounter: String
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        Log.i(SHOW_IMAGE_TAG, "onCreate fires!")
        binding = ActivityMainBinding.inflate(layoutInflater)
        val view = binding.root
        setContentView(view)

        binding.button3.setOnClickListener {
            val intent = Intent(this, GameActivity::class.java)
            pointCounter = binding.theText.text.toString()
            Log.i(SHOW_IMAGE_TAG, "The Value is $pointCounter!")
            intent.putExtra("overhere", pointCounter)
            val i = intent.getStringExtra("overhere")
            Log.i(SHOW_IMAGE_TAG, "The Value is $i!")

            startActivityForResult(intent, REQUEST_CODE)
            //startActivity(intent)
        }
    }

    override fun onActivityResult(requestCode: Int, resultCode: Int, data: Intent?) {
        super.onActivityResult(requestCode, resultCode, data)
        if (resultCode == RESULT_OK && requestCode == REQUEST_CODE){
            val returnValue = data?.getStringExtra(RETURN_KEY) ?: "0"
            Snackbar.make(binding.root ,"you have $returnValue Coins", Snackbar.LENGTH_LONG ).show()
            binding.theText.setText(returnValue)
        }
    }
}