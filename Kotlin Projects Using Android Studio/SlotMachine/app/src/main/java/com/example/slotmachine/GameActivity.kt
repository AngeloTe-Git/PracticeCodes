package com.example.slotmachine

import android.app.Activity
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.os.Message
import android.util.Log
import android.view.Menu
import android.view.MenuItem
import android.widget.ImageView
import com.example.slotmachine.databinding.ActivityGameBinding
import com.google.android.material.snackbar.Snackbar
import java.util.*
import kotlin.random.Random

class GameActivity : AppCompatActivity() {
    private lateinit var extra: String
    private lateinit var message: String
    private lateinit var images: IntArray
    private var scoreCounter = 10 //extra.toInt()
    private var okFirsttim= false
    private val btnDrawFive by lazy { binding.button }
    private val btnDrawTen by lazy { binding.button2 }
    private val txtDisplay by lazy { binding.textView2 }
    private val imageViews by lazy {
        listOf<ImageView>(binding.imageView1, binding.imageView2, binding.imageView3)
    }
    private lateinit var binding: ActivityGameBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        Log.i(SHOW_IMAGE_TAG, "onCreate fires!")
        binding = ActivityGameBinding.inflate(layoutInflater)
        setContentView(binding.root)
        //initImageViews()
        if (!okFirsttim){
            Log.i(SHOW_IMAGE_TAG, "If statement worked?????")
            extra = intent.getStringExtra("overhere") ?: "20"
            Log.i(SHOW_IMAGE_TAG, "If statement $extra")
            scoreCounter = extra.toInt()
            Log.i(SHOW_IMAGE_TAG, "If statement 2 $scoreCounter")
            okFirsttim = true
        }

        message = savedInstanceState?.getString(MESSAGE) ?: "You have $scoreCounter COINS"
        images = savedInstanceState?.getIntArray(IMAGES) ?: intArrayOf(R.drawable.guess,
        R.drawable.guess, R.drawable.guess)
        scoreCounter = savedInstanceState?.getInt(SCORE) ?: extra.toInt()

        displayRandomImage()
        displayMessageHere(scoreCounter)

        btnDrawFive.setOnClickListener {
            if(scoreCounter != 0){
                drawSlotMachineFive()
            }else{
                Snackbar.make(it , "No More Coins", Snackbar.LENGTH_LONG).show()
            }
        }
        btnDrawTen.setOnClickListener {
            if(scoreCounter != 0){
                drawSlotMachineTen()
            }else{
                Snackbar.make(it , "No More Coins", Snackbar.LENGTH_LONG).show()
            }
            }
        Log.i(SHOW_IMAGE_TAG, "onCreate fires!")
    }

    override fun onSaveInstanceState(outState: Bundle) {
        outState.putString(MESSAGE, message)
        outState.putIntArray(IMAGES, images)
        outState.putInt(SCORE, scoreCounter)
        super.onSaveInstanceState(outState)
    }

    private fun displayMessage(whatBet: Int){
        when (getSevenCount()){
            1 -> scoreCounter +=whatBet
            2 -> scoreCounter +=(whatBet * 2)
            3 -> scoreCounter +=(whatBet * 3)
            else -> scoreCounter -=whatBet
        }
        message = "You have $scoreCounter COINS"
        txtDisplay.text = message
    }

    private fun displayMessageHere(whatBet: Int){
        message = "You have $scoreCounter COINS"
        txtDisplay.text = message
    }

    private fun getSevenCount(): Int{
        var counterSeven = 0
        for (i in images){
            if(R.drawable.seven == i) counterSeven++
        }
        return  counterSeven
    }

    private fun randomizeImage(): Int{
        val r = Random.nextInt(3)
        return when(r){
            0 -> R.drawable.coin
            1 -> R.drawable.dollar
            2 -> R.drawable.seven
            else -> R.drawable.seven
        }
    }

    private fun setRandomImages() {
        images = intArrayOf(randomizeImage(), randomizeImage(), randomizeImage())
    }

    private fun drawSlotMachineFive() {
        setRandomImages()
        displayRandomImage()
        displayMessage(5)

    }

    private fun drawSlotMachineTen() {
        setRandomImages()
        displayRandomImage()
        displayMessage(10)
    }

    private fun displayRandomImage() {
        for (i in 0 until images.size) {
            imageViews[i].setImageResource(images[i])
        }
    }

    private  fun initImageViews(){
        for (i in imageViews) i.setImageResource(R.drawable.guess)
    }

    override fun finish() {
        val data = Intent()
        Log.i(SHOW_IMAGE_TAG, "onfinish $scoreCounter")
        data.putExtra(RETURN_KEY, scoreCounter.toString())
        setResult(Activity.RESULT_OK, data)
        super.finish()
    }

    override fun onCreateOptionsMenu(menu: Menu?): Boolean {
        menuInflater.inflate(R.menu.menu_game, menu)
        return super.onCreateOptionsMenu(menu)
    }

    override fun onOptionsItemSelected(item: MenuItem): Boolean {
        if(item.itemId == R.id.itemShare){
            val intent = Intent().apply {
                action = Intent.ACTION_SEND
                putExtra(Intent.EXTRA_TEXT, "Lucky Seven Slot Machine" +
                "\nYou got $scoreCounter Coins" + "\nas of ${Calendar.getInstance().time}")
                type = "text/plain"
            }
            startActivity(intent)
            return true
        }
        return super.onOptionsItemSelected(item)
    }

    override fun onStart() {
        super.onStart()
        Log.i(SHOW_IMAGE_TAG, "onStart fires!")
    }

    override fun onResume() {
        super.onResume()
        Log.i(SHOW_IMAGE_TAG, "onResume fires!")
    }

    override fun onPause() {
        super.onPause()
        Log.i(SHOW_IMAGE_TAG, "onPause fires!")
    }

    override fun onStop() {
        super.onStop()
        Log.i(SHOW_IMAGE_TAG, "onStop fires!")
    }

    override fun onDestroy() {
        super.onDestroy()
        Log.i(SHOW_IMAGE_TAG, "onDestroy fires!")
    }

}