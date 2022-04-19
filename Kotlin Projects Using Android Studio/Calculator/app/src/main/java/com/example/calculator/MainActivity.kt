package com.example.calculator

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.TextView
import kotlinx.android.synthetic.main.activity_main.*
import java.lang.IllegalArgumentException

class MainActivity : AppCompatActivity() {
    //private var strNumber:String = ""
    private var strNumber = StringBuilder()
    private lateinit var tvDisplay: TextView
    private lateinit var btn1: Button
    private lateinit var numberButtons: Array<Button>
    private lateinit var opButton: List<Button>
    private var operator: Operator = Operator.NONE
    private var isOperatorClicked: Boolean = false
    private var operand1 : Double = 0.0
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)


        initializeComponents()

    }

    private fun initializeComponents() {
        tvDisplay = findViewById(R.id.textView1)

        btn1 = findViewById(R.id.btn1)

        numberButtons = arrayOf(btn1, btn2, btn3, btn4, btn5, btn6, btn7, btn8, btn9, btn0)
        opButton = listOf(btnPlus, btnMinus, btnMult, btnDiv)
        for (i in numberButtons) {
            i.setOnClickListener { btnClicked(i) }
        }
        for (i in opButton) {
            i.setOnClickListener { opButtonClick(i) }
        }
        btnEqual.setOnClickListener{ btnEqualClick() }

        btnClear.setOnClickListener{ btnClearClick() }

        btnAc.setOnClickListener{ btnAcClicked() }

        btnDot.setOnClickListener{ btnDotClicked() }

        btnSign.setOnClickListener{ btnSignClicked() }
    }

    private fun btnSignClicked() {
        try{
            var textValue = strNumber.toString().toDouble()
            textValue = textValue * (-1)
            strNumber.clear()
            strNumber.append(textValue)
            tvDisplay.text = textValue.toString()
        }
        catch (e:IllegalArgumentException){
            strNumber.clear()
            tvDisplay.text="0"
        }
    }

    private fun btnDotClicked() {
        if(!strNumber.contains(".")) {
            strNumber.append(".")
            updateDisplay()
        }
    }

    private fun btnAcClicked() {
        strNumber.clear()
        if(isOperatorClicked){
            isOperatorClicked = false
        }
        strNumber.append("0")
        updateDisplay()
    }

    private fun btnClearClick() {
        strNumber.clear()
        tvDisplay.text = "0"
    }

    private fun btnEqualClick() {
        val operand2 = strNumber.toString().toDouble()
        var result:Double
        when(operator){
            Operator.ADD -> result = operand1 + operand2
            Operator.SUB -> result = operand1 - operand2
            Operator.MUL -> result = operand1 * operand2
            Operator.DIV -> result = operand1 / operand2
            else -> result = 0.0
        }
        strNumber.clear()
        strNumber.append(result.toString())
        updateDisplay()
        isOperatorClicked = true
    }

    private fun btnClicked(btn: Button) {
        if(isOperatorClicked){
            operand1 = strNumber.toString().toDouble()
            strNumber.clear()
            isOperatorClicked = false
        }
        strNumber.append(btn.text)
        updateDisplay()
    }

    private fun updateDisplay() {
        try{
            val textValue = strNumber.toString().toDouble()
            tvDisplay.text = textValue.toString()
        }
        catch (e:IllegalArgumentException){
            strNumber.clear()
            tvDisplay.text="ERROR"
        }

    }


    private fun opButtonClick(btn: Button) {
        if(btn.text == "+") operator = Operator.ADD
        else if(btn.text == "-") operator = Operator.SUB
        else if(btn.text == "X") operator = Operator.MUL
        else if(btn.text == "/") operator = Operator.DIV
        else operator = Operator.NONE
        isOperatorClicked = true
    }
}

enum class Operator{ADD, SUB, MUL, DIV, NONE}