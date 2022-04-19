package edu.benilde.greetbytime;

import java.util.Calendar;
import java.util.GregorianCalendar;

public class greetbytime {
    public static void main(String[] args)
    {
        greetByTime();
    }
    public static String greetByTime()
    {
        GregorianCalendar gregorianCalendar = new GregorianCalendar();

        int hour = gregorianCalendar.get(Calendar.HOUR_OF_DAY);
        String greeting = "";

        switch (hour)
        {
            case(1):
            case(2):
            case(3):
            case(4):
            case(5):
            case(6):
            case(7):
            case(8):
            case(9):
            case(10):
            case(11):
            {
                greeting = "morning";
                break;
            }
            case(12):
            case(13):
            case(14):
            case(15):
            case(16):
            case(17):
            {
                greeting = "afternoon";
                break;
            }


        }
        return greeting;
    }
}
