package edu.benilde.greetings;

import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;

public class Greetings
{

    public static void main(String[] args)
    {
        System.out.println("Today is" + showTodaysDate() +
                " and the time is exactly " + showTodaysTime());
        System.out.println("Enjoy your " + greetByDayOfTheWeek()
                + " " + greetByTime() + "!");

    }

    public static String showTodaysDate()
    {
        DateFormat dateFormat = new SimpleDateFormat("MMMM dd, yyyy");
        Date date = new Date();

        return dateFormat.format(date);
    }

    public static String showTodaysTime()
    {
        DateFormat timeFormat = new SimpleDateFormat("HH:mm:ss a");
        Date date = new Date();

        return timeFormat.format(date);
    }

    public static String greetByTime()
    {
        GregorianCalendar gregorianCalendar = new GregorianCalendar();

        int hour = gregorianCalendar.get(Calendar.HOUR_OF_DAY);
        String greeting = "";

        if (hour < 12)
        {
            greeting = "morning";
        }
        else if (hour < 18)
        {
            greeting = "afternoon";
        }
        else
        {
            greeting = "evening";
        }

        return greeting;
    }

    public static String greetByDayOfTheWeek()
    {
        GregorianCalendar gregorianCalendar = new GregorianCalendar();

        int day = gregorianCalendar.get(Calendar.DAY_OF_WEEK);
        String greeting = "";

        if (day == 1)
        {
            greeting = "Sunday";
        }
        else if (day == 2)
        {
            greeting = "Monday";
        }
        else if (day == 3)
        {
            greeting = "Tuesday";
        }
        else if (day == 4)
        {
            greeting = "Wednesday";
        }
        else if (day == 5)
        {
            greeting = "Thursday";
        }
        else if (day == 6)
        {
            greeting = "Friday";
        }
        else if (day == 7)
        {
            greeting = "Saturday";
        }
        return greeting;
    }
}
