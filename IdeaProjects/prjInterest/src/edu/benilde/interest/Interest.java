package edu.benilde.interest;

import java.util.Scanner;

public class Interest {
    public static void main(String[] args)
    {
        double principal;
        double rate;
        @SuppressWarnings("resource") Scanner scanner = new Scanner(System.in);

        System.out.print("Enter the initial investment: ");
        principal = scanner.nextDouble();

        System.out.println();

        System.out.println("Enter the initial investment: ");
        System.out.print("Enter a decimal, not a percentage: ");
        rate = scanner.nextDouble();

        System.out.println();

        int years;
        years = 0;

        while (years < 5)
        {
            double interest;
            interest = principal * rate;
            principal = principal + interest;
            years = years +1;

            System.out.print("The value of the investment after ");
            System.out.print(years);
            System.out.print(" years in Php ");
            System.out.printf("%,.2f",principal);

            System.out.println();
        }
    }
}
