package com.example.signinactivity

import android.os.Build
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.LayoutInflater
import android.view.View
import android.widget.TextView
import android.widget.Toast
import androidx.annotation.RequiresApi
import com.example.signinactivity.databinding.ActivityMainBinding
import com.google.android.material.snackbar.Snackbar
import java.util.*
import kotlin.system.exitProcess

class MainActivity : AppCompatActivity() {
    private lateinit var binding: ActivityMainBinding
    private var counting: Int = 0
    private val userLi: Array<String> = arrayOf("angelo","angelote","angelote2","angelome")
    private val passLi: Array<String> = arrayOf("0000","1111","2222","3333")
    private var isThere: Boolean = false
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityMainBinding.inflate(layoutInflater)
        val view = binding.root
        setContentView(view)
        binding.btnSubmit.setOnClickListener {
            validateUser(it)
        }
    }
    private fun addTextView(text: String){
        val textView1 = TextView(this)
        textView1.text = text
        textView1.textSize = 16f
        binding.layoutView.addView(textView1)

    }
    private fun validateUser(it: View) {
        val username = binding.editUser.text
        val password = binding.editPass.text

        for(n in userLi.indices){
            if(username.toString().equals(userLi[n]) && password.toString().equals(passLi[n])){
                isThere = true
            }
        }
        if (isThere) {
    //                Toast.makeText(this, "Welcome to Android-Kotlin", Toast.LENGTH_SHORT).show()
            val message = getString(R.string.welcome_message, username)
            Snackbar.make(it, message, Snackbar.LENGTH_LONG)
            .setAction("Show details...", { addTextView("Login Successful: ${Calendar.getInstance().time}") }).show()
        } else {
            counting += 1
            addTextView("Invalid attempt number: $counting")
            Toast.makeText(this, "Invalid Log In Attempt", Toast.LENGTH_LONG).show()
            isThere = false
            if(counting == 3){
                Toast.makeText(this, "Invalid Log In Attempt", Toast.LENGTH_LONG).show()
                exitProcess(-1)
            }

        }
    }

    private fun displayToast(){
        Toast.makeText(this, "Login Successful: ${Calendar.getInstance().time}", Toast.LENGTH_SHORT).show()
    }
}