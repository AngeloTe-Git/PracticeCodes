package edu.benilde.list_letters;

import java.util.Scanner;

public class ListLetters {

    public static void main(String[] args)
    {
        String str;// Line of text entered by user.
        int count;// Number of different letters found in str.
        char letter;// A letter of the alphabet.
        @SuppressWarnings("resource") Scanner scanner = new Scanner(System.in);

        System.out.println("Please type in a line of text: ");
        str = scanner.next();
        str = str.toUpperCase();

        count = 0;
        System.out.println("Your input contains the following letters: ");
        System.out.println();
        System.out.println(" ");

        for ( letter = 'A' ; letter <= 'Z' ; letter++)
        {
            int i;
            for (i = 0; i < str.length(); i++)
            {
                if(letter == str.charAt(i))
                {
                    System.out.print(letter);
                    System.out.print(' ');
                    count++;
                    break;
                }
            }
        }
        System.out.println();
        System.out.println();
        System.out.println("There were " + count + " different letters.");

    }
}
